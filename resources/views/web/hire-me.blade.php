@extends('web.layout')
@section('title', 'Contact Me | Lakshman Pal | Full Stack Developer Portfolio')

@push('styles')
<style>
    /* Main container with more space below navbar */
    .contact-wrapper {
        background-color: #f8fafc;
        min-height: calc(100vh - 120px);
        padding: 100px 20px 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    /* Optional fade-in animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Contact card container */
    .contact-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        max-width: 1200px;
        width: 100%;
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        animation: fadeInUp 0.6s ease-out;
        margin-top: 20px;
    }

    /* Left Side: Contact Information - Updated Color */
    .contact-info-side {
        background: linear-gradient(135deg, #042a7c 0%, #020d2b 100%);
        color: white;
        padding: 50px;
        position: relative;
        overflow: hidden;
    }

    .contact-info-side::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 100px;
        height: 100px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        transform: translate(30%, -30%);
    }

    .contact-info-side::after {
        content: '';
        position: absolute;
        bottom: -50px;
        left: -50px;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
    }

    .contact-header h1 {
        font-size: 2.8rem;
        font-weight: 700;
        margin-bottom: 15px;
        position: relative;
        z-index: 1;
    }

    .contact-tagline {
        font-size: 1.1rem;
        opacity: 0.9;
        margin-bottom: 30px;
        position: relative;
        z-index: 1;
        line-height: 1.6;
    }

    .contact-details {
        margin-top: 40px;
        position: relative;
        z-index: 1;
    }

    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 25px;
    }

    .contact-icon {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        font-size: 1.2rem;
    }

    .contact-text h4 {
        font-size: 1rem;
        font-weight: 500;
        margin-bottom: 5px;
        opacity: 0.8;
    }

    .contact-text p {
        font-size: 1.1rem;
        font-weight: 500;
    }

    .quick-links-section {
        margin-top: 40px;
        position: relative;
        z-index: 1;
    }

    .quick-links-section h3 {
        font-size: 1.3rem;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .quick-links {
        list-style: none;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .quick-links li {
        margin-bottom: 8px;
    }

    .quick-links a {
        color: white;
        text-decoration: none;
        opacity: 0.9;
        transition: opacity 0.3s;
        font-size: 0.95rem;
    }

    .quick-links a:hover {
        opacity: 1;
        text-decoration: underline;
    }

    .social-connect {
        margin-top: 30px;
        position: relative;
        z-index: 1;
    }

    .social-connect h3 {
        font-size: 1.3rem;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .social-connect p {
        opacity: 0.9;
        margin-bottom: 15px;
        font-size: 0.95rem;
    }

    .social-links {
        display: flex;
        gap: 15px;
        margin-top: 10px;
    }

    .social-link {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-decoration: none;
        transition: background 0.3s, transform 0.3s;
    }

    .social-link:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: translateY(-3px);
    }

    /* Right Side: Contact Form */
    .contact-form-side {
        padding: 50px;
        background: white;
    }

    .form-header h2 {
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 10px;
        color: #1a1a1a;
    }

    .form-header p {
        color: #666;
        margin-bottom: 30px;
        font-size: 1rem;
        line-height: 1.5;
    }

    .form-group {
        margin-bottom: 25px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #444;
        font-size: 0.95rem;
    }

    .required::after {
        content: " *";
        color: #e63946;
    }

    input, textarea {
        width: 100%;
        padding: 14px 16px;
        border: 1px solid #e1e5e9;
        border-radius: 10px;
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
        transition: all 0.3s;
        background: #f8fafc;
    }

    input:focus, textarea:focus {
        outline: none;
        border-color: #2563eb;
        background: white;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    .hiring-options {
        background: #eff6ff;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 25px;
        border-left: 4px solid #2563eb;
    }

    .hiring-options label {
        display: block;
        margin-bottom: 12px;
        font-weight: 600;
        color: #333;
    }

    .radio-group {
        display: flex;
        gap: 20px;
    }

    .radio-option {
        display: flex;
        align-items: center;
    }

    .radio-option input {
        width: auto;
        margin-right: 8px;
        cursor: pointer;
    }

    .radio-option label {
        margin-bottom: 0;
        cursor: pointer;
        font-weight: 500;
    }

    .submit-btn {
        background: linear-gradient(to right, #2563eb, #1d4ed8);
        color: white;
        border: none;
        padding: 16px 32px;
        border-radius: 10px;
        font-size: 1.1rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-top: 10px;
    }

    .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 7px 15px rgba(37, 99, 235, 0.3);
    }

    .status-message {
        padding: 12px 16px;
        border-radius: 8px;
        margin: 20px 0;
        text-align: center;
        font-size: 0.95rem;
    }

    .success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    .form-footer {
        text-align: center;
        margin-top: 30px;
        color: #666;
        font-size: 0.9rem;
        padding-top: 20px;
        border-top: 1px solid #eee;
    }

    .is-invalid {
        border-color: #e63946 !important;
    }

    .invalid-feedback {
        color: #e63946;
        font-size: 0.875rem;
        margin-top: 5px;
        display: none;
    }

    .is-invalid + .invalid-feedback {
        display: block;
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .contact-container {
            grid-template-columns: 1fr;
            max-width: 700px;
            margin-top: 15px;
        }
        
        .contact-info-side, .contact-form-side {
            padding: 40px 30px;
        }
        
        .quick-links {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .contact-wrapper {
            padding: 80px 15px 20px;
        }
        
        .contact-container {
            margin-top: 10px;
        }
        
        .contact-header h1 {
            font-size: 2.2rem;
        }
        
        .contact-info-side, .contact-form-side {
            padding: 30px 20px;
        }
        
        .radio-group {
            flex-direction: column;
            gap: 10px;
        }
        
        .quick-links {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 576px) {
        .contact-wrapper {
            padding: 70px 10px 15px;
        }
        
        .contact-container {
            margin-top: 5px;
        }
        
        .contact-item {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .contact-icon {
            margin-bottom: 10px;
            margin-right: 0;
        }
        
        .contact-text h4,
        .contact-text p {
            text-align: left;
            width: 100%;
        }
    }

    @media (max-width: 400px) {
        .contact-wrapper {
            padding: 60px 8px 10px;
        }
    }
</style>
@endpush

@section('content')
<div class="contact-wrapper">
    <div class="contact-container">
        <!-- Left Side: Contact Information -->
        <div class="contact-info-side">
            <div class="contact-header">
                <h1>Let's Build Something Amazing Together </h1>
                <p class="contact-tagline">I'm currently available for freelance work and full-time opportunities. Feel free to reach out if you're looking for a developer, have a question, or just want to connect.</p>
            </div>
            
            <div class="contact-details">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Email</h4>
                        <p>contact@lakshman.dev</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Phone</h4>
                        <p>+91 98765 43210</p>
                    </div>
                </div>
            </div>
            
            <div class="quick-links-section">
                <h3>Quick Links</h3>
                <ul class="quick-links">
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Skills</a></li>
                    <li><a href="">Projects</a></li>
                    <li><a href="">Experience</a></li>
                    <li><a href="">Portfolio</a></li>
                </ul>
            </div>
            
            <div class="social-connect">
                <h3>Connect With Me</h3>
                <p>Follow me on social media for the latest updates and insights.</p>
                <div class="social-links">
                    <a href="#" class="social-link" title="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-link" title="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="social-link" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-link" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Side: Contact Form -->
        <div class="contact-form-side">
            <div class="form-header">
                <h2>Send a Message</h2>
                <p>Fill out the form below to contact me or discuss potential hiring opportunities.</p>
            </div>

            @if(session('success'))
                <div class="status-message success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="status-message error">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="name" class="required">Full Name</label>
                    <input type="text" id="name" name="name" 
                           value="{{ old('name') }}" 
                           placeholder="Enter your full name" 
                           class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                           required>
                    @if($errors->has('name'))
                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="email" class="required">Email Address</label>
                    <input type="email" id="email" name="email" 
                           value="{{ old('email') }}" 
                           placeholder="Enter your email address" 
                           class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                           required>
                    @if($errors->has('email'))
                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="subject" class="required">Subject</label>
                    <input type="text" id="subject" name="subject" 
                           value="{{ old('subject') }}" 
                           placeholder="What is this regarding?" 
                           class="{{ $errors->has('subject') ? 'is-invalid' : '' }}"
                           required>
                    @if($errors->has('subject'))
                        <div class="invalid-feedback">{{ $errors->first('subject') }}</div>
                    @endif
                </div>

                <div class="hiring-options">
                    <label>Is this a hiring inquiry?</label>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="hire-yes" name="is_hiring" value="1" 
                                   {{ old('is_hiring') == '1' ? 'checked' : '' }}>
                            <label for="hire-yes">Yes, I'd like to discuss a job opportunity</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="hire-no" name="is_hiring" value="0" 
                                   {{ old('is_hiring') == '0' || !old('is_hiring') ? 'checked' : '' }}>
                            <label for="hire-no">No, this is a general inquiry</label>
                        </div>
                    </div>
                    @if($errors->has('is_hiring'))
                        <div class="invalid-feedback">{{ $errors->first('is_hiring') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="message" class="required">Message</label>
                    <textarea id="message" name="message" rows="6" 
                              placeholder="Please provide details about your inquiry..." 
                              class="{{ $errors->has('message') ? 'is-invalid' : '' }}"
                              required>{{ old('message') }}</textarea>
                    @if($errors->has('message'))
                        <div class="invalid-feedback">{{ $errors->first('message') }}</div>
                    @endif
                </div>

                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i> Send Message
                </button>
            </form>

            <div class="form-footer">
                <p>I typically respond within 24-48 hours. For urgent matters, please mention "URGENT" in your subject line.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactForm');
        const requiredFields = form.querySelectorAll('[required]');
        
        // Real-time validation
        requiredFields.forEach(field => {
            field.addEventListener('blur', function() {
                validateField(this);
            });
            
            field.addEventListener('input', function() {
                if (this.classList.contains('is-invalid')) {
                    validateField(this);
                }
            });
        });
        
        function validateField(field) {
            const value = field.value.trim();
            const errorDiv = field.nextElementSibling;
            
            if (!value) {
                field.classList.add('is-invalid');
                if (errorDiv && errorDiv.classList.contains('invalid-feedback')) {
                    errorDiv.textContent = 'This field is required.';
                    errorDiv.style.display = 'block';
                }
                return false;
            }
            
            // Email validation
            if (field.type === 'email') {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(value)) {
                    field.classList.add('is-invalid');
                    if (errorDiv && errorDiv.classList.contains('invalid-feedback')) {
                        errorDiv.textContent = 'Please enter a valid email address.';
                        errorDiv.style.display = 'block';
                    }
                    return false;
                }
            }
            
            // Clear error state
            field.classList.remove('is-invalid');
            if (errorDiv && errorDiv.classList.contains('invalid-feedback')) {
                errorDiv.style.display = 'none';
            }
            return true;
        }
        
        // Form submission
        form.addEventListener('submit', function(e) {
            let isValid = true;
            
            // Validate all required fields
            requiredFields.forEach(field => {
                if (!validateField(field)) {
                    isValid = false;
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                
                // Show error message
                const statusMessage = document.querySelector('.status-message');
                if (!statusMessage || !statusMessage.classList.contains('error')) {
                    const formHeader = document.querySelector('.form-header');
                    const errorDiv = document.createElement('div');
                    errorDiv.className = 'status-message error';
                    errorDiv.innerHTML = '<p>Please correct the errors in the form.</p>';
                    formHeader.insertAdjacentElement('afterend', errorDiv);
                    
                    // Auto-remove after 5 seconds
                    setTimeout(() => {
                        errorDiv.remove();
                    }, 5000);
                }
            }
        });
    });
</script>
@endpush