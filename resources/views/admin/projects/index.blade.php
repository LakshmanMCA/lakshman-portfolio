@extends('admin.layout')

@section('title', 'Projects')

@section('content')
<div class="container-fluid px-4">
    {{-- Page Header with Glassmorphism --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom border-light">
        <div>
            <h1 class="h2 fw-bold text-dark" style="text-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                <i class="fas fa-project-diagram me-2 text-primary"></i>Projects
            </h1>
            <p class="text-secondary small mb-0">Manage your project portfolio</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary btn-sm rounded-pill px-4 shadow-sm" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none;">
                <i class="fas fa-plus me-1"></i> Add Project
            </a>
        </div>
    </div>

    {{-- Stats Cards Row - Glassmorphism with black text --}}
    <div class="row g-3 mb-4">
        <div class="col-md-3 col-sm-6">
            <div class="glass-card p-3 rounded-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-secondary mb-1">Total Projects</h6>
                        <h3 class="text-dark fw-bold mb-0">{{ count($projects ?? []) }}</h3>
                    </div>
                    <div class="stat-icon">
                        <i class="fas fa-folder-open fa-2x text-primary" style="opacity: 0.8;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="glass-card p-3 rounded-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-secondary mb-1">Technologies</h6>
                        <h3 class="text-dark fw-bold mb-0">
                            {{ $projects ? count(array_unique(array_column($projects->toArray(), 'technology'))) : 0 }}
                        </h3>
                    </div>
                    <div class="stat-icon">
                        <i class="fas fa-code fa-2x text-success" style="opacity: 0.8;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="glass-card p-3 rounded-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-secondary mb-1">With Images</h6>
                        <h3 class="text-dark fw-bold mb-0">
                            {{ $projects ? count(array_filter($projects->toArray(), function($p) { return !empty($p['image']); })) : 0 }}
                        </h3>
                    </div>
                    <div class="stat-icon">
                        <i class="fas fa-image fa-2x text-info" style="opacity: 0.8;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="glass-card p-3 rounded-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-secondary mb-1">Last Updated</h6>
                        <h6 class="text-dark fw-bold mb-0">{{ now()->format('M d, Y') }}</h6>
                    </div>
                    <div class="stat-icon">
                        <i class="fas fa-clock fa-2x text-warning" style="opacity: 0.8;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Table with Glassmorphism and black text --}}
    <div class="glass-card p-4 rounded-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead style="border-bottom: 2px solid rgba(0,0,0,0.08);">
                    <tr>
                        <th class="fw-semibold text-dark">#</th>
                        <th class="fw-semibold text-dark">Project Title</th>
                        <th class="fw-semibold text-dark">Description</th>
                        <th class="fw-semibold text-dark">Image</th>
                        <th class="fw-semibold text-dark">Technology</th>
                        <th class="fw-semibold text-dark text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($projects ?? [] as $project)
                        <tr style="border-bottom: 1px solid rgba(0,0,0,0.05);">
                            <td class="text-secondary">{{ $loop->iteration }}</td>
                            <td>
                                <span class="fw-semibold text-dark">{{ $project->title ?? 'N/A' }}</span>
                            </td>
                            <td>
                                <span class="text-secondary">{{ Str::limit($project->description ?? '', 10) }}</span>
                            </td>
                            <td>
                                @if(!empty($project->image))
                                    <div class="image-wrapper">
                                        <img src="{{ asset('images/' . $project->image) }}" 
                                             alt="{{ $project->title }}" 
                                             class="project-image rounded-3"
                                             style="width: 50px; height: 50px; object-fit: cover; border: 2px solid rgba(0,0,0,0.1);">
                                    </div>
                                @else
                                    <span class="badge bg-light text-secondary px-3 py-2">No image</span>
                                @endif
                            </td>
                            <td>
                                @if(!empty($project->technologies))
                                    @foreach (json_decode($project->technologies) as $technology)
                                        <span class="tech-badge px-3 py-1 rounded-pill d-inline-block text-dark">
                                            <i class="fas fa-tag me-1 text-secondary"></i>
                                            {{ $technology }}
                                        </span>
                                    @endforeach
                                @else
                                    <span class="text-secondary">N/A</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex gap-2 justify-content-end">
                                    <a href="{{ route('admin.projects.edit', $project->id) }}" 
                                       class="btn btn-sm btn-outline-primary rounded-pill px-3">
                                        <i class="fas fa-edit me-1"></i> Edit
                                    </a>
                                  
                                    <form action="{{ route('admin.projects.delete', $project->id) }}"
                                        method="POST"
                                        class="delete-project-form d-inline">

                                        @csrf
                                        
                                        <button type="submit"
                                                class="btn btn-sm btn-outline-danger rounded-pill px-3">
                                            <i class="fas fa-trash me-1"></i>
                                            Delete
                                        </button>
                                    </form>


                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4">
                                <div class="empty-state">
                                    <i class="fas fa-inbox fa-3x text-secondary mb-3 d-block"></i>
                                    <p class="text-secondary mb-0">No projects found. Start by adding your first project!</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        @if(isset($projects) && method_exists($projects, 'links'))
            <div class="d-flex justify-content-end mt-3 pt-3" style="border-top: 1px solid rgba(0,0,0,0.08);">
                {{ $projects->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
</div>
@endsection

{{-- Styles for Glassmorphism & Waterdrop Effect with black text --}}
@push('styles')
<style>
    /* Waterdrop/Glassmorphism Effect */
    .glass-card {
        background: rgba(255, 255, 255, 0.75) !important;
        backdrop-filter: blur(20px) !important;
        -webkit-backdrop-filter: blur(20px) !important;
        border: 1px solid rgba(255, 255, 255, 0.3) !important;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1) !important;
        transition: all 0.3s ease !important;
        color: #000 !important;
    }

    .glass-card:hover {
        background: rgba(255, 255, 255, 0.85) !important;
        box-shadow: 0 8px 40px 0 rgba(31, 38, 135, 0.2) !important;
        transform: translateY(-2px);
    }

    /* Stat Icons with waterdrop effect */
    .stat-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, 0.04);
        border-radius: 50%;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(0, 0, 0, 0.06);
        box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.02);
    }

    /* Technology Badge with glass effect */
    .tech-badge {
        background: rgba(0, 0, 0, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(0, 0, 0, 0.08);
        color: #000 !important;
        font-size: 0.8rem;
        transition: all 0.3s ease;
    }

    .tech-badge:hover {
        background: rgba(0, 0, 0, 0.08);
        transform: scale(1.05);
    }

    /* Image hover effect */
    .project-image {
        transition: all 0.3s ease;
        border-radius: 10px !important;
    }

    .project-image:hover {
        transform: scale(1.1);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    /* Table styling for glass theme with black text */
    .table {
        color: #000 !important;
    }
    
    .table tbody tr {
        transition: all 0.3s ease;
    }

    .table tbody tr:hover {
        background: rgba(0, 0, 0, 0.03) !important;
    }

    .table td {
        vertical-align: middle;
        padding: 12px 8px;
        color: #000 !important;
    }

    .table th {
        color: #000 !important;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.5px;
        padding: 12px 8px;
    }

    /* Empty state styling */
    .empty-state i {
        opacity: 0.4;
    }

    /* Button hover effects */
    .btn-outline-primary {
        color: #0d6efd;
        border-color: rgba(13, 110, 253, 0.3);
    }
    
    .btn-outline-primary:hover {
        background: #0d6efd;
        color: #fff;
        border-color: #0d6efd;
    }

    .btn-outline-danger {
        color: #dc3545;
        border-color: rgba(220, 53, 69, 0.3);
    }
    
    .btn-outline-danger:hover {
        background: #dc3545;
        color: #fff;
        border-color: #dc3545;
    }

    /* Pagination styling */
    .pagination .page-link {
        background: rgba(255, 255, 255, 0.8);
        border: 1px solid rgba(0, 0, 0, 0.08);
        color: #000;
        backdrop-filter: blur(10px);
    }

    .pagination .page-link:hover {
        background: rgba(255, 255, 255, 0.95);
        color: #000;
    }

    .pagination .page-item.active .page-link {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-color: transparent;
        color: #fff;
    }

    .pagination .page-item.disabled .page-link {
        color: #999;
        background: rgba(255, 255, 255, 0.5);
    }

    /* Scrollbar styling */
    .table-responsive::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }

    .table-responsive::-webkit-scrollbar-track {
        background: rgba(0, 0, 0, 0.03);
        border-radius: 10px;
    }

    .table-responsive::-webkit-scrollbar-thumb {
        background: rgba(0, 0, 0, 0.15);
        border-radius: 10px;
    }

    .table-responsive::-webkit-scrollbar-thumb:hover {
        background: rgba(0, 0, 0, 0.25);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .glass-card {
            padding: 1rem !important;
        }
        
        .stat-icon {
            width: 40px;
            height: 40px;
        }
        
        .stat-icon i {
            font-size: 1.5rem !important;
        }
    }

    /* Additional text color overrides */
    .text-dark {
        color: #000 !important;
    }
    
    .text-secondary {
        color: #555 !important;
    }
    
    .text-muted {
        color: #888 !important;
    }
    
    /* Form labels and other text */
    .form-label, .form-control, .form-select {
        color: #000 !important;
    }
    
    /* Ensure all text is readable */
    .glass-card * {
        color: inherit;
    }
    
    /* Override any white text from parent */
    .glass-card .text-white-50,
    .glass-card .text-white {
        color: inherit !important;
    }
    
    /* Fix for any remaining white text */
    .glass-card h1, .glass-card h2, .glass-card h3, 
    .glass-card h4, .glass-card h5, .glass-card h6,
    .glass-card p, .glass-card span, .glass-card div {
        color: #000 !important;
    }
</style>
@endpush

@push('scripts')
{{-- Font Awesome for icons (if not already included) --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    document.querySelectorAll('.delete-project-form').forEach(function (form) {

        form.addEventListener('submit', function (e) {

            e.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: "This project and its image will be permanently deleted!",
                icon: 'warning',

                showCancelButton: true,

                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',

                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',

                reverseButtons: true
            }).then((result) => {

                if (result.isConfirmed) {
                    form.submit();
                }

            });

        });

    });

});

</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /*
    |--------------------------------------------------------------------------
    | SweetAlert Toast
    |--------------------------------------------------------------------------
    */

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,

        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer);
        }
    });


    /*
    |--------------------------------------------------------------------------
    | Success Message
    |--------------------------------------------------------------------------
    */

    @if(session('success'))

        Toast.fire({
            icon: 'success',
            title: @json(session('success'))
        });

    @endif


    /*
    |--------------------------------------------------------------------------
    | Error Message
    |--------------------------------------------------------------------------
    */

    @if(session('error'))

        Toast.fire({
            icon: 'error',
            title: @json(session('error'))
        });

    @endif


    /*
    |--------------------------------------------------------------------------
    | Delete Confirmation
    |--------------------------------------------------------------------------
    */

    document.querySelectorAll('.delete-project-form').forEach(function (form) {

        form.addEventListener('submit', function (e) {

            e.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: 'This project and its image will be permanently deleted!',
                icon: 'warning',

                showCancelButton: true,

                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',

                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',

                reverseButtons: true,
                focusCancel: true

            }).then((result) => {

                if (result.isConfirmed) {
                    form.submit();
                }

            });

        });

    });

});
</script>


@endpush