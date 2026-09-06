@extends('admin.layout')

@section('title', 'Education')

@section('content')

<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">
                Education
            </h2>

            <p class="text-muted mb-0">
                Manage your educational background
            </p>

        </div>

        <a href="{{ route('admin.education.create') }}"
           class="btn btn-primary">

            <i class="fas fa-plus me-2"></i>

            Add Education

        </a>

    </div>


    {{-- Success Message --}}
    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show">

            <i class="fas fa-check-circle me-2"></i>

            {{ session('success') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    {{-- Education List --}}
    <div class="card border-0 shadow-sm">

        <div class="card-body p-0">

            @if($educations->count())

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead class="table-light">

                            <tr>

                                <th width="70">
                                    #
                                </th>

                                <th width="100">
                                    Institution
                                </th>

                                <th>
                                    Institution Name
                                </th>

                                <th>
                                    Degree
                                </th>

                                <th>
                                    Duration
                                </th>

                                <th>
                                    Achievements
                                </th>

                                <th width="150">
                                    Actions
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach($educations as $education)

                                <tr>

                                    {{-- Number --}}
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>


                                    {{-- Image --}}
                                    <td>

                                        @if($education->institution_image)

                                            <img
                                                src="{{ asset($education->institution_image) }}"
                                                alt="{{ $education->institution_name }}"
                                                class="institution-image"
                                            >

                                        @else

                                            <div class="no-image">

                                                <i class="fas fa-university"></i>

                                            </div>

                                        @endif

                                    </td>


                                    {{-- Institution --}}
                                    <td>

                                        <div class="fw-semibold">

                                            {{ $education->institution_name }}

                                        </div>

                                        @if($education->description)

                                            <small class="text-muted">

                                                {{ Str::limit($education->description, 70) }}

                                            </small>

                                        @endif

                                    </td>


                                    {{-- Degree --}}
                                    <td>

                                        <span class="badge bg-primary-subtle text-primary">

                                            {{ $education->degree }}

                                        </span>

                                    </td>


                                    {{-- Duration --}}
                                    <td>

                                        <div>

                                            @if($education->start_date)

                                                {{ $education->start_date->format('M Y') }}

                                            @endif

                                            -

                                            @if($education->completion_date)

                                                {{ $education->completion_date->format('M Y') }}

                                            @else

                                                Present

                                            @endif

                                        </div>

                                    </td>


                                    {{-- Achievements --}}
                                    <td>

                                        @if($education->achievements)

                                            {{ Str::limit($education->achievements, 60) }}

                                        @else

                                            <span class="text-muted">
                                                —
                                            </span>

                                        @endif

                                    </td>


                                    {{-- Actions --}}
                                    <td>

                                        <div class="d-flex gap-2">

                                            {{-- Edit --}}
                                            <a
                                                href="{{ route('admin.education.edit', $education->id) }}"
                                                class="btn btn-sm btn-outline-primary"
                                                title="Edit"
                                            >

                                                <i class="fas fa-edit"></i>

                                            </a>


                                            {{-- Delete --}}
                                            <form
                                                action="{{ route('admin.education.delete', $education->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this education record?')"
                                            >

                                                @csrf


                                                <button
                                                    type="submit"
                                                    class="btn btn-sm btn-outline-danger"
                                                    title="Delete"
                                                >

                                                    <i class="fas fa-trash"></i>

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>


                {{-- Pagination --}}
                <div class="p-3">

                    {{ $educations->links() }}

                </div>

            @else

                <div class="text-center py-5">

                    <div class="empty-icon mb-3">

                        <i class="fas fa-graduation-cap"></i>

                    </div>

                    <h5>
                        No Education Records
                    </h5>

                    <p class="text-muted">
                        Start by adding your education details.
                    </p>

                    <a
                        href="{{ route('admin.education.create') }}"
                        class="btn btn-primary"
                    >

                        <i class="fas fa-plus me-2"></i>

                        Add Education

                    </a>

                </div>

            @endif

        </div>

    </div>

</div>


<style>

.institution-image {

    width: 65px;
    height: 50px;

    object-fit: cover;

    border-radius: 8px;

    border: 1px solid #e5e7eb;

}

.no-image {

    width: 65px;
    height: 50px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 8px;

    background: #f1f5f9;

    color: #64748b;

}

.empty-icon {

    width: 70px;
    height: 70px;

    margin: auto;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: #eff6ff;

    color: #2563eb;

    font-size: 28px;

}

</style>

@endsection