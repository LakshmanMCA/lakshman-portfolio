@extends('admin.layout')

@section('title', 'Add Education')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">
                Add Education
            </h2>

            <p class="text-muted mb-0">
                Add a new education record
            </p>

        </div>

        <a
            href="{{ route('admin.education.index') }}"
            class="btn btn-outline-secondary"
        >

            <i class="fas fa-arrow-left me-2"></i>

            Back

        </a>

    </div>


    <div class="card border-0 shadow-sm">

        <div class="card-body p-4">

            <form
                action="{{ route('admin.education.store') }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf


                {{-- Institution Name --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">

                        Institution Name

                        <span class="text-danger">*</span>

                    </label>

                    <input
                        type="text"
                        name="institution_name"
                        value="{{ old('institution_name') }}"
                        class="form-control @error('institution_name') is-invalid @enderror"
                        placeholder="Example: Future Institute of Engineering and Management"
                    >

                    @error('institution_name')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                {{-- Degree --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">

                        Degree

                        <span class="text-danger">*</span>

                    </label>

                    <input
                        type="text"
                        name="degree"
                        value="{{ old('degree') }}"
                        class="form-control @error('degree') is-invalid @enderror"
                        placeholder="Example: Master of Computer Applications"
                    >

                    @error('degree')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                {{-- Dates --}}
                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">

                            Start Date

                            <span class="text-danger">*</span>

                        </label>

                        <input
                            type="date"
                            name="start_date"
                            value="{{ old('start_date') }}"
                            class="form-control @error('start_date') is-invalid @enderror"
                        >

                        @error('start_date')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">

                            Completion Date

                        </label>

                        <input
                            type="date"
                            name="completion_date"
                            value="{{ old('completion_date') }}"
                            class="form-control @error('completion_date') is-invalid @enderror"
                        >

                        <small class="text-muted">
                            Leave empty if currently studying.
                        </small>

                        @error('completion_date')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>

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
                        placeholder="Describe your education..."
                    >{{ old('description') }}</textarea>

                    @error('description')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                {{-- Achievements --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Achievements
                    </label>

                    <textarea
                        name="achievements"
                        rows="4"
                        class="form-control @error('achievements') is-invalid @enderror"
                        placeholder="Example: First class, scholarship, academic awards..."
                    >{{ old('achievements') }}</textarea>

                    @error('achievements')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                {{-- Institution Image --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Institution Image
                    </label>

                    <input
                        type="file"
                        name="institution_image"
                        class="form-control @error('institution_image') is-invalid @enderror"
                        accept="image/jpeg,image/png,image/webp"
                    >

                    <small class="text-muted">

                        JPG, JPEG, PNG or WEBP.
                        Maximum 2MB.

                    </small>

                    @error('institution_image')

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

                        Save Education

                    </button>

                    <a
                        href="{{ route('admin.education.index') }}"
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