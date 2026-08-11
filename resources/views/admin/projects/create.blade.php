@extends('admin.layout')

@section('title', 'Create Project')

@section('content')
<div class="container-fluid px-4">
    {{-- Page Header --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom border-light">
        <div>
            <h1 class="h2 fw-bold text-dark">
                <i class="fas fa-plus-circle me-2 text-primary"></i>
                Add New Project
            </h1>
            <p class="text-secondary small mb-0">Create a new project</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary btn-sm rounded-pill px-4">
                <i class="fas fa-arrow-left me-1"></i> Back to List
            </a>
        </div>
    </div>

    {{-- Form Card --}}
    <div class="glass-card p-4 rounded-4">
        <form action="{{ route('admin.projects.store') }}" 
              method="POST" 
              enctype="multipart/form-data">
            @csrf

            <div class="row">
                {{-- Left Column --}}
                <div class="col-lg-8">
                    {{-- Title --}}
                    <div class="mb-3">
                        <label for="title" class="form-label fw-semibold text-dark">Project Title <span class="text-danger">*</span></label>
                        <input type="text" 
                               class="form-control @error('title') is-invalid @enderror" 
                               id="title" 
                               name="title" 
                               value="{{ old('title') }}" 
                               placeholder="Enter project title" 
                               required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Description --}}
                    <div class="mb-3">
                        <label for="description" class="form-label fw-semibold text-dark">Description <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="description" 
                                  name="description" 
                                  rows="4" 
                                  placeholder="Enter project description" 
                                  required>{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Category --}}
                    <div class="mb-3">
                        <label for="category" class="form-label fw-semibold text-dark">Category <span class="text-danger">*</span></label>
                        <select class="form-select @error('category') is-invalid @enderror" 
                                id="category" 
                                name="category" 
                                required>
                            <option value="">Select Category</option>
                            <option value="web" {{ old('category') == 'web' ? 'selected' : '' }}>Web Development</option>
                            <option value="mobile" {{ old('category') == 'mobile' ? 'selected' : '' }}>Mobile App</option>
                            <option value="desktop" {{ old('category') == 'desktop' ? 'selected' : '' }}>Desktop Application</option>
                            <option value="ai" {{ old('category') == 'ai' ? 'selected' : '' }}>AI/ML</option>
                            <option value="blockchain" {{ old('category') == 'blockchain' ? 'selected' : '' }}>Blockchain</option>
                            <option value="other" {{ old('category') == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Status Active/Inactive Switch --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-dark">Status <span class="text-danger">*</span></label>
                        <div class="status-toggle-wrapper">
                            <div class="d-flex align-items-center gap-3">
                                {{-- Hidden input for when switch is off --}}
                                <input type="hidden" name="status" value="0">
                                
                                <div class="status-switch">
                                    <input type="checkbox" 
                                           id="statusSwitch" 
                                           class="status-checkbox" 
                                           {{ old('status_switch', 0) ? 'checked' : '' }}>
                                    <label for="statusSwitch" class="status-label">
                                        <span class="status-text status-inactive">Inactive</span>
                                        <span class="status-toggle"></span>
                                        <span class="status-text status-active">Active</span>
                                    </label>
                                </div>
                                
                                <div class="status-indicator">
                                    <span class="badge {{ old('status_switch', 0) ? 'bg-success' : 'bg-secondary' }} rounded-pill px-3 py-2" id="statusBadge">
                                        <i class="fas {{ old('status_switch', 0) ? 'fa-check-circle' : 'fa-times-circle' }} me-1"></i>
                                        <span id="statusLabel">{{ old('status_switch', 0) ? 'Active' : 'Inactive' }}</span>
                                    </span>
                                </div>
                            </div>
                            <small class="text-secondary d-block mt-1">Toggle to activate or deactivate the project</small>
                        </div>
                        @error('status')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Technologies Array with Add/Remove --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-dark">Technologies <span class="text-danger">*</span></label>
                        <div id="technologies-wrapper">
                            @php
                                $technologies = old('technologies', []);
                            @endphp
                            @if(count($technologies) > 0)
                                @foreach($technologies as $index => $tech)
                                    <div class="input-group mb-2 technology-item">
                                        <input type="text" 
                                               class="form-control @error('technologies.*') is-invalid @enderror" 
                                               name="technologies[]" 
                                               value="{{ $tech }}" 
                                               placeholder="Enter technology (e.g., Laravel, React, etc.)">
                                        <button type="button" class="btn btn-danger remove-technology">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                @endforeach
                            @else
                                <div class="input-group mb-2 technology-item">
                                    <input type="text" 
                                           class="form-control" 
                                           name="technologies[]" 
                                           placeholder="Enter technology (e.g., Laravel, React, etc.)">
                                    <button type="button" class="btn btn-danger remove-technology">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            @endif
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-sm mt-2" id="add-technology">
                            <i class="fas fa-plus me-1"></i> Add Technology
                        </button>
                        @error('technologies.*')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                        @error('technologies')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Links Row --}}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="github_link" class="form-label fw-semibold text-dark">GitHub Link</label>
                            <input type="url" 
                                   class="form-control @error('github_link') is-invalid @enderror" 
                                   id="github_link" 
                                   name="github_link" 
                                   value="{{ old('github_link') }}" 
                                   placeholder="https://github.com/your-repo">
                            @error('github_link')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="live_link" class="form-label fw-semibold text-dark">Live Demo Link</label>
                            <input type="url" 
                                   class="form-control @error('live_link') is-invalid @enderror" 
                                   id="live_link" 
                                   name="live_link" 
                                   value="{{ old('live_link') }}" 
                                   placeholder="https://your-live-demo.com">
                            @error('live_link')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Right Column --}}
                <div class="col-lg-4">
                    {{-- Image Upload --}}
                    <div class="mb-3">
                        <label for="image" class="form-label fw-semibold text-dark">Project Image</label>
                        <input type="file" 
                               class="form-control @error('image') is-invalid @enderror" 
                               id="image" 
                               name="image" 
                               accept="image/*">
                        <small class="text-secondary d-block mt-1">Recommended: 800x600px, max 2MB (jpg, png, svg)</small>
                        <div id="imagePreview" class="mt-2"></div>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Client Review --}}
                    <div class="mb-3">
                        <label for="client_review" class="form-label fw-semibold text-dark">Client Review</label>
                        <textarea class="form-control @error('client_review') is-invalid @enderror" 
                                  id="client_review" 
                                  name="client_review" 
                                  rows="4" 
                                  placeholder="Enter client review or testimonial">{{ old('client_review') }}</textarea>
                        @error('client_review')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Form Actions --}}
            <div class="border-top pt-3 mt-3">
                <button type="submit" class="btn btn-primary rounded-pill px-4">
                    <i class="fas fa-save me-1"></i> 
                    Create Project
                </button>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary rounded-pill px-4">
                    <i class="fas fa-times me-1"></i> Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

@push('styles')
<style>
    .glass-card {
        background: rgba(255, 255, 255, 0.85) !important;
        backdrop-filter: blur(20px) !important;
        -webkit-backdrop-filter: blur(20px) !important;
        border: 1px solid rgba(255, 255, 255, 0.3) !important;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1) !important;
        transition: all 0.3s ease !important;
    }

    .glass-card:hover {
        box-shadow: 0 8px 40px 0 rgba(31, 38, 135, 0.2) !important;
    }

    .form-control, .form-select {
        background: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(0, 0, 0, 0.1);
        color: #000 !important;
    }

    .form-control:focus, .form-select:focus {
        background: #fff;
        border-color: #667eea;
        box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
    }

    .form-label {
        color: #000 !important;
        font-weight: 600;
    }

    .technology-item .form-control {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .technology-item .btn-danger {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .btn-outline-primary {
        color: #0d6efd;
        border-color: rgba(13, 110, 253, 0.3);
    }

    .btn-outline-primary:hover {
        background: #0d6efd;
        color: #fff;
        border-color: #0d6efd;
    }

    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #5a6fd6 0%, #6a3f8f 100%);
        transform: translateY(-1px);
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
    }

    .text-secondary {
        color: #555 !important;
    }

    .text-dark {
        color: #000 !important;
    }

    /* Status Switch Styles */
    .status-toggle-wrapper {
        background: rgba(0, 0, 0, 0.03);
        padding: 15px 20px;
        border-radius: 12px;
        border: 1px solid rgba(0, 0, 0, 0.06);
    }

    .status-switch {
        position: relative;
        display: inline-block;
    }

    .status-checkbox {
        display: none;
    }

    .status-label {
        display: flex;
        align-items: center;
        gap: 15px;
        cursor: pointer;
        user-select: none;
        padding: 5px 0;
    }

    .status-toggle {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 30px;
        background: #e0e0e0;
        border-radius: 30px;
        transition: all 0.3s ease;
        flex-shrink: 0;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .status-toggle::after {
        content: '';
        position: absolute;
        top: 3px;
        left: 3px;
        width: 24px;
        height: 24px;
        background: #fff;
        border-radius: 50%;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .status-checkbox:checked + .status-label .status-toggle {
        background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
    }

    .status-checkbox:checked + .status-label .status-toggle::after {
        transform: translateX(30px);
    }

    .status-text {
        font-size: 0.85rem;
        font-weight: 500;
        color: #666;
        transition: all 0.3s ease;
        white-space: nowrap;
    }

    .status-text.status-active {
        color: #999;
    }

    .status-checkbox:checked + .status-label .status-text.status-inactive {
        color: #999;
    }

    .status-checkbox:checked + .status-label .status-text.status-active {
        color: #11998e;
        font-weight: 600;
    }

    .status-indicator {
        margin-left: auto;
    }

    .status-indicator .badge {
        transition: all 0.3s ease;
        min-width: 110px;
        text-align: center;
        font-size: 0.85rem;
    }

    /* Image preview */
    #imagePreview img {
        max-height: 150px;
        width: 100%;
        object-fit: cover;
        border-radius: 8px;
        border: 2px solid rgba(0, 0, 0, 0.1);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .glass-card {
            padding: 1rem !important;
        }
        
        .status-toggle-wrapper .d-flex {
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .status-indicator {
            margin-left: 0;
            width: 100%;
        }
        
        .status-label {
            flex-wrap: wrap;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Status Switch Logic (0 = Inactive, 1 = Active)
        const statusSwitch = document.getElementById('statusSwitch');
        const statusBadge = document.getElementById('statusBadge');
        const statusLabel = document.getElementById('statusLabel');
        const statusHiddenInput = document.querySelector('input[name="status"]');
        
        function updateStatus() {
            if (statusSwitch.checked) {
                // Active (1)
                statusBadge.className = 'badge bg-success rounded-pill px-3 py-2';
                statusBadge.innerHTML = '<i class="fas fa-check-circle me-1"></i> Active';
                statusLabel.textContent = 'Active';
                statusHiddenInput.value = '1';
            } else {
                // Inactive (0)
                statusBadge.className = 'badge bg-secondary rounded-pill px-3 py-2';
                statusBadge.innerHTML = '<i class="fas fa-times-circle me-1"></i> Inactive';
                statusLabel.textContent = 'Inactive';
                statusHiddenInput.value = '0';
            }
        }

        statusSwitch.addEventListener('change', updateStatus);
        
        // Initialize status on page load
        updateStatus();

        // Add technology
        document.getElementById('add-technology').addEventListener('click', function() {
            const wrapper = document.getElementById('technologies-wrapper');
            const newItem = document.createElement('div');
            newItem.className = 'input-group mb-2 technology-item';
            newItem.innerHTML = `
                <input type="text" 
                       class="form-control" 
                       name="technologies[]" 
                       placeholder="Enter technology (e.g., Laravel, React, etc.)">
                <button type="button" class="btn btn-danger remove-technology">
                    <i class="fas fa-times"></i>
                </button>
            `;
            wrapper.appendChild(newItem);
            
            // Add remove functionality to new button
            newItem.querySelector('.remove-technology').addEventListener('click', function() {
                if (document.querySelectorAll('.technology-item').length > 1) {
                    newItem.remove();
                } else {
                    alert('You need at least one technology field.');
                }
            });
        });

        // Remove technology (existing buttons)
        document.querySelectorAll('.remove-technology').forEach(function(button) {
            button.addEventListener('click', function() {
                const item = this.closest('.technology-item');
                if (document.querySelectorAll('.technology-item').length > 1) {
                    item.remove();
                } else {
                    alert('You need at least one technology field.');
                }
            });
        });

        // Image preview
        const imageInput = document.getElementById('image');
        if (imageInput) {
            imageInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                const previewContainer = document.getElementById('imagePreview');
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewContainer.innerHTML = `
                            <img src="${e.target.result}" alt="Preview" class="img-fluid rounded-3 mt-2">
                        `;
                    };
                    reader.readAsDataURL(file);
                } else {
                    previewContainer.innerHTML = '';
                }
            });
        }
    });
</script>
@endpush