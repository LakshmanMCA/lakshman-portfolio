@extends('admin.layout')

@section('title', 'Certifications')

@section('content')

<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">
                Certifications
            </h2>

            <p class="text-muted mb-0">
                Manage your professional certifications
            </p>
        </div>

        <a href="{{ route('admin.certifications.create') }}"
           class="btn btn-primary">

            <i class="fas fa-plus me-2"></i>
            Add Certification

        </a>

    </div>


    {{-- Success Message --}}
    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show">

            <i class="fas fa-check-circle me-2"></i>

            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    {{-- Validation Errors --}}
    @if($errors->any())

        <div class="alert alert-danger">

            <ul class="mb-0">

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    {{-- Certification Cards --}}
    <div class="card border-0 shadow-sm">

        <div class="card-body p-0">

            @if($certifications->count())

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead class="table-light">

                            <tr>

                                <th width="80">#</th>

                                <th width="100">
                                    Image
                                </th>

                                <th>
                                    Certification
                                </th>

                                <th>
                                    Issued By
                                </th>

                                <th>
                                    Issue Date
                                </th>

                                <th width="150">
                                    Action
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach($certifications as $certification)

                                <tr>

                                    <td>
                                        {{ $loop->iteration }}
                                    </td>


                                    {{-- Image --}}
                                    <td>

                                        @if($certification->image)

                                            <img
                                                src="{{ asset( $certification->image) }}"
                                                alt="{{ $certification->name }}"
                                                class="certification-image"
                                            >

                                        @else

                                            <div class="no-image">
                                                <i class="fas fa-certificate"></i>
                                            </div>

                                        @endif

                                    </td>


                                    {{-- Name --}}
                                    <td>

                                        <div class="fw-semibold">
                                            {{ $certification->name }}
                                        </div>

                                        @if($certification->description)

                                            <small class="text-muted">
                                                {{ Str::limit($certification->description, 80) }}
                                            </small>

                                        @endif

                                    </td>


                                    {{-- Issued By --}}
                                    <td>
                                        {{ $certification->issued_by }}
                                    </td>


                                    {{-- Date --}}
                                    <td>

                                        @if($certification->issue_date)

                                            {{ $certification->issue_date }}

                                        @else

                                            —

                                        @endif

                                    </td>


                                    {{-- Actions --}}
                                    <td>

                                        <div class="d-flex gap-2">

                                            <a href="{{ route('admin.certifications.edit', $certification->id) }}"
                                               class="btn btn-sm btn-outline-primary">

                                                <i class="fas fa-edit"></i>

                                            </a>


                                            <form
                                                action="{{ route('admin.certifications.delete', $certification->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this certification?')"
                                            >

                                                @csrf

                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="btn btn-sm btn-outline-danger"
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

                    {{ $certifications->links() }}

                </div>

            @else

                <div class="text-center py-5">

                    <div class="empty-icon mb-3">

                        <i class="fas fa-certificate"></i>

                    </div>

                    <h5>
                        No Certifications Found
                    </h5>

                    <p class="text-muted">
                        Start by adding your first certification.
                    </p>

                    <a href="{{ route('admin.certifications.create') }}"
                       class="btn btn-primary">

                        <i class="fas fa-plus me-2"></i>
                        Add Certification

                    </a>

                </div>

            @endif

        </div>

    </div>

</div>


<style>

.certification-image {
    width: 65px;
    height: 50px;
    object-fit: cover;
    border-radius: 8px;
    border: 1px solid #e5e7eb;
}

.no-image {
    width: 65px;
    height: 50px;
    border-radius: 8px;

    display: flex;
    align-items: center;
    justify-content: center;

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