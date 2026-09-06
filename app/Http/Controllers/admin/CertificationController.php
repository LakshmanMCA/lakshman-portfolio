<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certification;
class CertificationController extends Controller
{
  public function index()
  {
    $certifications = \App\Models\Certification::paginate(10);
      return view('admin.certification.index', compact('certifications'));
  }   
  public function create()
  {
      return view('admin.certification.create');
  }
   public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'issued_by' => 'required|string|max:255',
            'issue_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('certification_image'),$imageName);
            $validated['image'] = 'certification_image/' . $imageName;

        }

        Certification::create($validated);

        return redirect()
            ->route('admin.certifications.index')
            ->with('success', 'Certification added successfully.');
    }
     public function edit($id)
    {
        $certification = Certification::findOrFail($id);
        return view('admin.certification.edit', compact('certification'));
    }

    /**
     * Update certification.
     */
    public function update(Request $request, $id)
    {
        $certification = Certification::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'issued_by' => 'required|string|max:255',
            'issue_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {

    // Delete old image
    if (
        $certification->image &&
        file_exists(public_path($certification->image))
    ) {
        unlink(public_path($certification->image));
    }

    // Generate new image name
    $imageName = time() . '_' . uniqid() . '.' .
        $request->image->extension();

    // Store new image
    $request->image->move(
        public_path('certification_image'),
        $imageName
    );

    // Save new image path in database
    $validated['image'] = 'certification_image/' . $imageName;
}

        $certification->update($validated);

        return redirect()
            ->route('admin.certifications.index')
            ->with('success', 'Certification updated successfully.');
    }

    /**
     * Delete certification.
     */
    public function delete($id)
    {
        $certification = Certification::findOrFail($id);
        if ($certification->image) {
            unlink(public_path($certification->image));
        }

        $certification->delete();

        return redirect()
            ->route('admin.certifications.index')
            ->with('success', 'Certification deleted successfully.');
    }
  
}
