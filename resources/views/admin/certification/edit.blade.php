@extends('admin.layout')

@section('title', 'Edit Certification')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">
                Edit Certification
            </h2>

            <p class="text-muted mb-0">
                Update certification information
            </p>

        </div>

        <a
            href="{{ route('admin.certifications.index') }}"
            class="btn btn-outline-secondary"
        >

            <i class="fas fa-arrow-left me-2"></i>
            Back

        </a>

    </div>


    <div class="card border-0 shadow-sm">

        <div class="card-body p-4">

            <form
                action="{{ route('admin.certifications.update', $certification->id) }}"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf
                {{-- Name --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Certification Name
                        <span class="text-danger">*</span>
                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name', $certification->name) }}"
                        class="form-control @error('name') is-invalid @enderror"
                    >

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Issued By --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Issued By
                        <span class="text-danger">*</span>
                    </label>

                    <input
                        type="text"
                        name="issued_by"
                        value="{{ old('issued_by', $certification->issued_by) }}"
                        class="form-control @error('issued_by') is-invalid @enderror"
                    >

                    @error('issued_by')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Issue Date --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Issue Date
                        <span class="text-danger">*</span>
                    </label>

                   <input
    type="date"
    name="issue_date"
    value="{{ old('issue_date', $certification?->issue_date) }}"
    class="form-control @error('issue_date') is-invalid @enderror"
>


                    @error('issue_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Description --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Description
                    </label>

                    <textarea
                        name="description"
                        rows="5"
                        class="form-control @error('description') is-invalid @enderror"
                    >{{ old('description', $certification->description) }}</textarea>

                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Existing Image --}}
                @if($certification->image)

                    <div class="mb-3">

                        <label class="form-label fw-semibold">
                            Current Image
                        </label>

                        <div>
                            <img
                                src="{{ asset($certification->image) }}"
                                alt="{{ $certification->name }}"
                                style="
                                    width:180px;
                                    height:120px;
                                    object-fit:cover;
                                    border-radius:10px;
                                    border:1px solid #e5e7eb;
                                "
                            >
                        </div>

                    </div>

                @endif


                {{-- New Image --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Change Image
                    </label>

                    <input
                        type="file"
                        name="image"
                        class="form-control @error('image') is-invalid @enderror"
                        accept="image/jpeg,image/png,image/webp"
                    >

                    <small class="text-muted">
                        Leave empty to keep the current image.
                    </small>

                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Buttons --}}
                <div class="d-flex gap-2">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >

                        <i class="fas fa-save me-2"></i>
                        Update Certification

                    </button>

                    <a
                        href="{{ route('admin.certifications.index') }}"
                        class="btn btn-light"
                    >
                        Cancel
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection