<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
class EducationController extends Controller
{
   public function index()
    {
        $educations = Education::latest('start_date')->paginate(10);

        return view('admin.education.index', compact('educations'));
    }
     public function create()
    {
        return view('admin.education.create');
    }

    /**
     * Store education.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'institution_name' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'start_date' => 'required|date',
            'completion_date' => 'nullable|date|after_or_equal:start_date',
            'description' => 'nullable|string',
            'institution_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'achievements' => 'nullable|string',
        ]);

        if ($request->hasFile('institution_image')) {

            $imageName = time() . '.' . $request->institution_image->extension();
            $request->institution_image->move(public_path('education_image'),$imageName);
            $validated['institution_image'] = 'education_image/' . $imageName;
        }

        Education::create($validated);

        return redirect()
            ->route('admin.education.index')
            ->with('success', 'Education added successfully.');
    }

    /**
     * Show edit page.
     */
    public function edit($id)
    {
        $education = Education::findOrFail($id);
        return view('admin.education.edit',compact('education'));
    }

    /**
     * Update education.
     */
   public function update(Request $request, $id)
{
    $validated = $request->validate([
        'institution_name' => 'required|string|max:255',
        'degree' => 'required|string|max:255',
        'start_date' => 'required|date',
        'completion_date' => 'nullable|date|after_or_equal:start_date',
        'description' => 'nullable|string',
        'institution_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'achievements' => 'nullable|string',
    ]);

    $education = Education::findOrFail($id);

    /*
    |--------------------------------------------------------------------------
    | Upload Institution Image
    |--------------------------------------------------------------------------
    */

    if ($request->hasFile('institution_image')) {

        // Folder: public/education_image
        $directory = public_path('education_image');

        // Create folder if it doesn't exist
        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        /*
        |--------------------------------------------------------------------------
        | Delete Old Image
        |--------------------------------------------------------------------------
        */

        if (!empty($education->institution_image)) {

            $oldImage = public_path($education->institution_image);

            if (is_file($oldImage)) {
                unlink($oldImage);
            }
        }

        /*
        |--------------------------------------------------------------------------
        | Upload New Image
        |--------------------------------------------------------------------------
        */

        $file = $request->file('institution_image');

        $imageName = time() . '_' . uniqid() . '.' .
            $file->getClientOriginalExtension();

        $file->move($directory, $imageName);

        /*
        |--------------------------------------------------------------------------
        | Save Path In Database
        |--------------------------------------------------------------------------
        */

        $validated['institution_image'] =
            'education_image/' . $imageName;
    }

    /*
    |--------------------------------------------------------------------------
    | Update Education
    |--------------------------------------------------------------------------
    */

    $education->update($validated);

    return redirect()
        ->route('admin.education.index')
        ->with('success', 'Education updated successfully.');
}
    /**
     * Delete education.
     */
    public function delete($id)
    {
        $education = Education::findOrFail($id);
    
         if (
        $education->institution_image &&
        file_exists(public_path($education->institution_image))
    ) {
        unlink(public_path($education->institution_image));
    }

        $education->delete();

        return redirect()
            ->route('admin.education.index')
            ->with('success', 'Education deleted successfully.');
    }
}
