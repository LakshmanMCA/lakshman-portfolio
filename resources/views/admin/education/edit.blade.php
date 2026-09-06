@extends('admin.layout')

@section('title', 'Edit Education')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">
                Edit Education
            </h2>

            <p class="text-muted mb-0">
                Update your education information
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
                action="{{ route('admin.education.update', $education->id) }}"
                method="POST"
                enctype="multipart/form-data">
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
                        value="{{ old('institution_name', $education->institution_name) }}"
                        class="form-control @error('institution_name') is-invalid @enderror"
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
                        value="{{ old('degree', $education->degree) }}"
                        class="form-control @error('degree') is-invalid @enderror"
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
                            value="{{ old('start_date', optional($education->start_date)->format('Y-m-d')) }}"
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
                            value="{{ old('completion_date', optional($education->completion_date)->format('Y-m-d')) }}"
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
                    >{{ old('description', $education->description) }}</textarea>

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
                    >{{ old('achievements', $education->achievements) }}</textarea>

                    @error('achievements')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                {{-- Current Image --}}
                @if($education->institution_image)

                    <div class="mb-3">

                        <label class="form-label fw-semibold">
                            Current Institution Image
                        </label>

                        <div>

                            <img
                                src="{{ asset($education->institution_image) }}"
                                alt="{{ $education->institution_name }}"
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
                        Change Institution Image
                    </label>

                    <input
                        type="file"
                        name="institution_image"
                        class="form-control @error('institution_image') is-invalid @enderror"
                        accept="image/jpeg,image/png,image/webp"
                    >

                    <small class="text-muted">

                        Leave empty to keep the current image.

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

                        Update Education

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