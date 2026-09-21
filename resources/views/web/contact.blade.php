@extends('web.layout')

@section('title', 'Contact Me | Lakshman Pal | Full Stack Developer Portfolio')

@push('styles')
<style>
/* =========================================================
   FLOATING CONTACT PAGE
   Premium Developer Portfolio Design
   ========================================================= */

.contact-page {
    --primary: #3b82f6;
    --primary-light: #60a5fa;
    --primary-dark: #1d4ed8;

    --bg: #050b17;
    --surface: rgba(15, 23, 42, 0.82);
    --surface-light: rgba(30, 41, 59, 0.65);

    --text: #f8fafc;
    --muted: #94a3b8;
    --border: rgba(148, 163, 184, 0.16);

    --success: #22c55e;
    --danger: #ef4444;

    position: relative;
    min-height: calc(100vh - 70px);
    padding: 90px 20px 80px;
    overflow: hidden;

    background:
        radial-gradient(
            circle at 10% 20%,
            rgba(59, 130, 246, 0.15),
            transparent 30%
        ),
        radial-gradient(
            circle at 90% 80%,
            rgba(96, 165, 250, 0.10),
            transparent 30%
        ),
        linear-gradient(
            135deg,
            #030712 0%,
            #071225 50%,
            #050b17 100%
        );

    color: var(--text);
}

.contact-page *,
.contact-page *::before,
.contact-page *::after {
    box-sizing: border-box;
}

/* =========================================================
   BACKGROUND DECORATIONS
   ========================================================= */

.contact-orb {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    filter: blur(2px);
}

.contact-orb-one {
    width: 260px;
    height: 260px;
    top: 5%;
    left: -120px;
    background: rgba(37, 99, 235, 0.13);
    box-shadow: 0 0 100px rgba(37, 99, 235, 0.18);
}

.contact-orb-two {
    width: 180px;
    height: 180px;
    right: 4%;
    top: 18%;
    background: rgba(96, 165, 250, 0.08);
    box-shadow: 0 0 80px rgba(96, 165, 250, 0.14);
}

.contact-orb-three {
    width: 320px;
    height: 320px;
    bottom: -180px;
    left: 38%;
    background: rgba(29, 78, 216, 0.08);
}

/* =========================================================
   MAIN WRAPPER
   ========================================================= */

.contact-floating-wrapper {
    position: relative;
    z-index: 2;

    width: 100%;
    max-width: 1240px;
    margin: 0 auto;
}

/* =========================================================
   TOP INTRO
   ========================================================= */

.contact-intro {
    max-width: 760px;
    margin-bottom: 55px;
}

.contact-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 9px;

    margin-bottom: 20px;
    padding: 8px 14px;

    border: 1px solid rgba(96, 165, 250, 0.20);
    border-radius: 999px;

    color: #bfdbfe;
    background: rgba(37, 99, 235, 0.08);

    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 1.3px;
    text-transform: uppercase;
}

.contact-eyebrow-dot {
    width: 7px;
    height: 7px;

    border-radius: 50%;

    background: #22c55e;
    box-shadow: 0 0 12px rgba(34, 197, 94, 0.7);

    animation: pulseDot 2s infinite;
}

@keyframes pulseDot {
    0%, 100% {
        opacity: 1;
        transform: scale(1);
    }

    50% {
        opacity: 0.5;
        transform: scale(0.75);
    }
}

.contact-intro h1 {
    margin: 0;

    max-width: 850px;

    font-size: clamp(2.8rem, 7vw, 5.5rem);
    line-height: 0.98;
    font-weight: 800;
    letter-spacing: -4px;
}

.contact-intro h1 span {
    display: block;

    background:
        linear-gradient(
            90deg,
            #ffffff 0%,
            #93c5fd 48%,
            #3b82f6 100%
        );

    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.contact-intro p {
    max-width: 650px;

    margin: 25px 0 0;

    color: #94a3b8;

    font-size: 1.02rem;
    line-height: 1.8;
}

/* =========================================================
   MAIN GRID
   ========================================================= */

.contact-main-grid {
    display: grid;
    grid-template-columns: 0.85fr 1.15fr;
    gap: 55px;

    align-items: start;
}

/* =========================================================
   LEFT FLOATING AREA
   ========================================================= */

.contact-info-area {
    position: relative;
    padding-top: 20px;
}

/* =========================================================
   FLOATING CARD
   ========================================================= */

.floating-contact-card {
    position: relative;

    display: flex;
    align-items: center;
    gap: 18px;

    width: 100%;
    max-width: 430px;

    margin-bottom: 18px;
    padding: 19px;

    border: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 18px;

    background:
        linear-gradient(
            145deg,
            rgba(30, 41, 59, 0.72),
            rgba(15, 23, 42, 0.72)
        );

    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);

    box-shadow:
        0 20px 45px rgba(0, 0, 0, 0.25),
        inset 0 1px 0 rgba(255, 255, 255, 0.04);

    transition:
        transform 0.3s ease,
        border-color 0.3s ease,
        box-shadow 0.3s ease;
}

.floating-contact-card:hover {
    transform: translateY(-7px) translateX(4px);

    border-color: rgba(96, 165, 250, 0.35);

    box-shadow:
        0 25px 55px rgba(0, 0, 0, 0.35),
        0 0 35px rgba(37, 99, 235, 0.08);
}

.floating-contact-card:nth-child(2) {
    margin-left: 35px;
}

.floating-contact-card:nth-child(3) {
    margin-left: 10px;
}

/* =========================================================
   CONTACT ICON
   ========================================================= */

.floating-contact-icon {
    flex: 0 0 52px;

    width: 52px;
    height: 52px;

    display: flex;
    align-items: center;
    justify-content: center;

    border: 1px solid rgba(96, 165, 250, 0.18);
    border-radius: 15px;

    color: #bfdbfe;

    background:
        linear-gradient(
            135deg,
            rgba(59, 130, 246, 0.22),
            rgba(37, 99, 235, 0.08)
        );

    font-size: 1.05rem;

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,0.05);
}

.floating-contact-content {
    min-width: 0;
}

.floating-contact-content small {
    display: block;

    margin-bottom: 5px;

    color: #64748b;

    font-size: 0.7rem;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.floating-contact-content a,
.floating-contact-content p {
    display: block;

    margin: 0;

    color: #f1f5f9;

    font-size: 0.93rem;
    font-weight: 600;

    text-decoration: none;

    overflow-wrap: anywhere;
}

.floating-contact-content a:hover {
    color: #93c5fd;
}

/* =========================================================
   AVAILABILITY CARD
   ========================================================= */

.availability-card {
    max-width: 430px;

    margin-top: 45px;
    padding: 22px;

    border: 1px solid rgba(34, 197, 94, 0.14);
    border-radius: 18px;

    background:
        linear-gradient(
            145deg,
            rgba(20, 83, 45, 0.18),
            rgba(15, 23, 42, 0.65)
        );
}

.availability-top {
    display: flex;
    align-items: center;
    gap: 9px;

    margin-bottom: 9px;
}

.availability-status {
    width: 8px;
    height: 8px;

    border-radius: 50%;

    background: #22c55e;
    box-shadow: 0 0 12px rgba(34, 197, 94, 0.75);
}

.availability-top strong {
    color: #bbf7d0;

    font-size: 0.85rem;
}

.availability-card p {
    margin: 0;

    color: #94a3b8;

    font-size: 0.83rem;
    line-height: 1.65;
}

/* =========================================================
   SOCIAL LINKS
   ========================================================= */

.contact-social {
    margin-top: 35px;
}

.contact-social-title {
    margin-bottom: 14px;

    color: #64748b;

    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 1.2px;
    text-transform: uppercase;
}

.contact-social-links {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.contact-social-link {
    width: 43px;
    height: 43px;

    display: flex;
    align-items: center;
    justify-content: center;

    border: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 13px;

    color: #cbd5e1;
    background: rgba(15, 23, 42, 0.6);

    text-decoration: none;

    transition:
        transform 0.25s ease,
        background 0.25s ease,
        color 0.25s ease,
        border-color 0.25s ease;
}

.contact-social-link:hover {
    transform: translateY(-4px);

    color: #ffffff;

    background: rgba(37, 99, 235, 0.18);
    border-color: rgba(96, 165, 250, 0.35);
}

/* =========================================================
   FORM PANEL
   ========================================================= */

.contact-form-panel {
    position: relative;

    padding: 38px;

    border: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 26px;

    background:
        linear-gradient(
            145deg,
            rgba(30, 41, 59, 0.88),
            rgba(15, 23, 42, 0.92)
        );

    backdrop-filter: blur(22px);
    -webkit-backdrop-filter: blur(22px);

    box-shadow:
        0 35px 80px rgba(0, 0, 0, 0.40),
        0 10px 35px rgba(0, 0, 0, 0.20),
        inset 0 1px 0 rgba(255,255,255,0.05);

    transform: translateY(-20px);
}

/* floating top accent */

.contact-form-panel::before {
    content: "";

    position: absolute;

    top: 0;
    left: 38px;
    right: 38px;

    height: 2px;

    border-radius: 0 0 10px 10px;

    background:
        linear-gradient(
            90deg,
            transparent,
            #3b82f6,
            #60a5fa,
            transparent
        );
}

/* =========================================================
   FORM HEADER
   ========================================================= */

.form-header {
    margin-bottom: 30px;
}

.form-mini-label {
    display: inline-block;

    margin-bottom: 11px;

    color: #60a5fa;

    font-size: 0.7rem;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.form-header h2 {
    margin: 0 0 10px;

    color: #f8fafc;

    font-size: clamp(1.8rem, 4vw, 2.35rem);
    line-height: 1.15;
    font-weight: 750;
    letter-spacing: -1px;
}

.form-header p {
    margin: 0;

    color: #94a3b8;

    font-size: 0.9rem;
    line-height: 1.7;
}

/* =========================================================
   STATUS
   ========================================================= */

.status-message {
    padding: 13px 15px;
    margin-bottom: 22px;

    border-radius: 12px;

    font-size: 0.84rem;
    line-height: 1.5;
}

.status-message p {
    margin: 0 0 3px;
}

.status-message p:last-child {
    margin-bottom: 0;
}

.success {
    color: #bbf7d0;
    background: rgba(22, 101, 52, 0.16);
    border: 1px solid rgba(34, 197, 94, 0.22);
}

.error {
    color: #fecaca;
    background: rgba(127, 29, 29, 0.16);
    border: 1px solid rgba(239, 68, 68, 0.22);
}

/* =========================================================
   FORM GROUP
   ========================================================= */

.contact-form-panel .form-group {
    margin-bottom: 20px;
}

.contact-form-panel label {
    display: block;

    margin-bottom: 8px;

    color: #cbd5e1;

    font-size: 0.78rem;
    font-weight: 650;
}

.contact-form-panel .required::after {
    content: " *";

    color: #60a5fa;
}

/* =========================================================
   INPUTS
   ========================================================= */

.contact-form-panel input,
.contact-form-panel textarea {
    display: block;

    width: 100%;
    max-width: 100%;

    padding: 14px 15px;

    border: 1px solid rgba(148, 163, 184, 0.15);
    border-radius: 12px;

    outline: none;

    color: #f8fafc;
    background: rgba(2, 6, 23, 0.46);

    font-family: inherit;
    font-size: 0.9rem;

    transition:
        border-color 0.2s ease,
        background 0.2s ease,
        box-shadow 0.2s ease,
        transform 0.2s ease;
}

.contact-form-panel input {
    min-height: 50px;
}

.contact-form-panel textarea {
    min-height: 145px;
    resize: vertical;
}

.contact-form-panel input::placeholder,
.contact-form-panel textarea::placeholder {
    color: #475569;
}

.contact-form-panel input:hover,
.contact-form-panel textarea:hover {
    border-color: rgba(148, 163, 184, 0.28);
}

.contact-form-panel input:focus,
.contact-form-panel textarea:focus {
    border-color: rgba(59, 130, 246, 0.65);

    background: rgba(2, 6, 23, 0.68);

    box-shadow:
        0 0 0 4px rgba(59, 130, 246, 0.08),
        0 8px 25px rgba(0, 0, 0, 0.12);
}

/* =========================================================
   HIRING OPTIONS
   ========================================================= */

.hiring-options {
    margin-bottom: 21px;
    padding: 17px;

    border: 1px solid rgba(96, 165, 250, 0.13);
    border-radius: 14px;

    background: rgba(37, 99, 235, 0.055);
}

.hiring-options > label {
    margin-bottom: 12px;

    color: #bfdbfe;

    font-size: 0.78rem;
    font-weight: 700;
}

.radio-group {
    display: grid;
    grid-template-columns: 1fr 1fr;

    gap: 9px;
}

.radio-option {
    display: flex;
    align-items: flex-start;
    gap: 8px;

    padding: 11px;

    border: 1px solid transparent;
    border-radius: 10px;

    background: rgba(15, 23, 42, 0.55);

    cursor: pointer;

    transition:
        border-color 0.2s ease,
        background 0.2s ease;
}

.radio-option:hover {
    border-color: rgba(96, 165, 250, 0.22);
    background: rgba(37, 99, 235, 0.08);
}

.radio-option input {
    flex: 0 0 auto;

    width: 16px;
    height: 16px;

    margin: 2px 0 0;

    accent-color: var(--primary);
}

.radio-option label {
    margin: 0;

    color: #94a3b8;

    font-size: 0.76rem;
    line-height: 1.45;

    cursor: pointer;
}

/* =========================================================
   BUTTON
   ========================================================= */

.submit-btn {
    position: relative;

    width: 100%;
    min-height: 53px;

    display: flex;
    align-items: center;
    justify-content: center;

    gap: 10px;

    margin-top: 6px;
    padding: 14px 22px;

    border: 1px solid rgba(147, 197, 253, 0.15);
    border-radius: 13px;

    color: #ffffff;

    background:
        linear-gradient(
            135deg,
            #2563eb,
            #1d4ed8
        );

    font-family: inherit;
    font-size: 0.9rem;
    font-weight: 700;

    cursor: pointer;

    overflow: hidden;

    box-shadow:
        0 12px 30px rgba(37, 99, 235, 0.22);

    transition:
        transform 0.25s ease,
        box-shadow 0.25s ease;
}

.submit-btn::before {
    content: "";

    position: absolute;

    top: 0;
    left: -100%;

    width: 60%;
    height: 100%;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(255,255,255,0.15),
            transparent
        );

    transform: skewX(-20deg);

    transition: left 0.5s ease;
}

.submit-btn:hover::before {
    left: 130%;
}

.submit-btn:hover {
    transform: translateY(-3px);

    box-shadow:
        0 18px 40px rgba(37, 99, 235, 0.32);
}

.submit-btn:active {
    transform: translateY(-1px);
}

/* =========================================================
   VALIDATION
   ========================================================= */

.contact-form-panel .is-invalid {
    border-color: var(--danger) !important;

    box-shadow:
        0 0 0 3px rgba(239, 68, 68, 0.08);
}

.contact-form-panel .invalid-feedback {
    display: block;

    margin-top: 5px;

    color: #fca5a5;

    font-size: 0.75rem;
}

/* =========================================================
   FOOTER
   ========================================================= */

.form-footer {
    margin-top: 22px;
    padding-top: 17px;

    border-top: 1px solid rgba(148, 163, 184, 0.09);

    text-align: center;

    color: #475569;

    font-size: 0.72rem;
    line-height: 1.55;
}

.form-footer p {
    margin: 0;
}

/* =========================================================
   RESPONSIVE
   ========================================================= */

@media (max-width: 1050px) {

    .contact-main-grid {
        grid-template-columns: 1fr;

        gap: 35px;
    }

    .contact-info-area {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;

        padding-top: 0;
    }

    .floating-contact-card {
        max-width: none;
        margin: 0 !important;
    }

    .availability-card {
        max-width: none;

        margin-top: 0;
    }

    .contact-social {
        grid-column: 1 / -1;
    }

    .contact-form-panel {
        transform: none;
    }
}

@media (max-width: 760px) {

    .contact-page {
        min-height: auto;

        padding: 65px 15px 55px;
    }

    .contact-intro {
        margin-bottom: 38px;
    }

    .contact-intro h1 {
        font-size: clamp(2.5rem, 12vw, 4rem);

        letter-spacing: -2.5px;
    }

    .contact-intro p {
        font-size: 0.92rem;
    }

    .contact-info-area {
        grid-template-columns: 1fr;
    }

    .contact-social {
        grid-column: auto;
    }

    .contact-form-panel {
        padding: 28px 22px;

        border-radius: 21px;
    }

    .contact-form-panel::before {
        left: 25px;
        right: 25px;
    }

    .radio-group {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 480px) {

    .contact-page {
        padding: 45px 10px 40px;
    }

    .contact-intro h1 {
        font-size: 2.35rem;
        line-height: 1;
    }

    .contact-intro p {
        font-size: 0.87rem;
        line-height: 1.7;
    }

    .floating-contact-card {
        padding: 15px;
    }

    .floating-contact-icon {
        flex-basis: 45px;

        width: 45px;
        height: 45px;
    }

    .floating-contact-content a,
    .floating-contact-content p {
        font-size: 0.84rem;
    }

    .contact-form-panel {
        padding: 25px 17px;
    }

    .form-header h2 {
        font-size: 1.7rem;
    }

    .form-header p {
        font-size: 0.83rem;
    }

    .contact-form-panel input,
    .contact-form-panel textarea {
        font-size: 16px;
    }

    .hiring-options {
        padding: 13px;
    }

    .contact-orb-one {
        width: 180px;
        height: 180px;
    }

    .contact-orb-two {
        width: 120px;
        height: 120px;
    }
}
</style>
@endpush


@section('content')

<div class="contact-page">

    {{-- Background decorations --}}
    <div class="contact-orb contact-orb-one"></div>
    <div class="contact-orb contact-orb-two"></div>
    <div class="contact-orb contact-orb-three"></div>


    <div class="contact-floating-wrapper">

        {{-- =====================================================
             INTRO
             ===================================================== --}}

        <div class="contact-intro">

            <div class="contact-eyebrow">
                <span class="contact-eyebrow-dot"></span>
                Available for opportunities
            </div>

            <h1>
                Let's build
                <span>something together.</span>
            </h1>

            <p>
                Have a project in mind, a job opportunity, or simply want
                to connect? Send me a message and I'll get back to you.
            </p>

        </div>


        {{-- =====================================================
             MAIN CONTENT
             ===================================================== --}}

        <div class="contact-main-grid">


            {{-- =================================================
                 LEFT SIDE
                 ================================================= --}}

            <div class="contact-info-area">


                {{-- Email --}}
                <div class="floating-contact-card">

                    <div class="floating-contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>

                    <div class="floating-contact-content">

                        <small>Email</small>

                        <a href="mailto:pallakshman0@gmail.com">
                            pallakshman0@gmail.com
                        </a>

                    </div>

                </div>


                {{-- Location --}}
                <div class="floating-contact-card">

                    <div class="floating-contact-icon">
                        <i class="fas fa-location-dot"></i>
                    </div>

                    <div class="floating-contact-content">

                        <small>Location</small>

                        <p>Kolkata, India</p>

                    </div>

                </div>


                {{-- Professional Role --}}
                <div class="floating-contact-card">

                    <div class="floating-contact-icon">
                        <i class="fas fa-code"></i>
                    </div>

                    <div class="floating-contact-content">

                        <small>Currently</small>

                        <p>Backend Developer · Software Developer</p>

                    </div>

                </div>


                {{-- Availability --}}
                <div class="availability-card">

                    <div class="availability-top">

                        <span class="availability-status"></span>

                        <strong>
                            Open to professional opportunities
                        </strong>

                    </div>

                    <p>
                        I'm interested in backend development,
                        full-stack development, scalable web applications,
                        API development and challenging software projects.
                    </p>

                </div>


                {{-- Social --}}
                <div class="contact-social">

                    <div class="contact-social-title">
                        Connect with me
                    </div>

                    <div class="contact-social-links">

                        <a
                            href="https://www.linkedin.com/in/lakshman-pal-285b172aa/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="contact-social-link"
                            title="LinkedIn"
                        >
                            <i class="fab fa-linkedin-in"></i>
                        </a>

                        <a
                            href="https://github.com/LakshmanMCA"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="contact-social-link"
                            title="GitHub"
                        >
                            <i class="fab fa-github"></i>
                        </a>

                        <a
                            href="#"
                            class="contact-social-link"
                            title="Instagram"
                        >
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a
                            href="#"
                            class="contact-social-link"
                            title="Facebook"
                        >
                            <i class="fab fa-facebook-f"></i>
                        </a>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 RIGHT SIDE — FORM
                 ================================================= --}}

            <div class="contact-form-panel">

                <div class="form-header">

                    <span class="form-mini-label">
                        Start a conversation
                    </span>

                    <h2>
                        Send me a message
                    </h2>

                    <p>
                        Tell me a little about your project, opportunity,
                        or inquiry. I'll respond as soon as possible.
                    </p>

                </div>


                {{-- Success --}}
                @if(session('success'))

                    <div class="status-message success">

                        {{ session('success') }}

                    </div>

                @endif


                {{-- Errors --}}
                @if($errors->any())

                    <div class="status-message error">

                        @foreach($errors->all() as $error)

                            <p>{{ $error }}</p>

                        @endforeach

                    </div>

                @endif


                {{-- =================================================
                     FORM
                     ================================================= --}}

                <form
                    id="contactForm"
                    action="{{ route('contact.store') }}"
                    method="POST"
                    novalidate
                >

                    @csrf


                    {{-- Full Name --}}
                    <div class="form-group">

                        <label
                            for="name"
                            class="required"
                        >
                            Full Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Enter your full name"
                            class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            required
                        >

                        @if($errors->has('name'))

                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>

                        @endif

                    </div>


                    {{-- Email --}}
                    <div class="form-group">

                        <label
                            for="email"
                            class="required"
                        >
                            Email Address
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Enter your email address"
                            class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                            required
                        >

                        @if($errors->has('email'))

                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>

                        @endif

                    </div>


                    {{-- Subject --}}
                    <div class="form-group">

                        <label
                            for="subject"
                            class="required"
                        >
                            Subject
                        </label>

                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            value="{{ old('subject') }}"
                            placeholder="What is this regarding?"
                            class="{{ $errors->has('subject') ? 'is-invalid' : '' }}"
                            required
                        >

                        @if($errors->has('subject'))

                            <div class="invalid-feedback">
                                {{ $errors->first('subject') }}
                            </div>

                        @endif

                    </div>


                    {{-- Hiring --}}
                    <div class="hiring-options">

                        <label>
                            Is this a hiring inquiry?
                        </label>

                        <div class="radio-group">

                            <div class="radio-option">

                                <input
                                    type="radio"
                                    id="hire-yes"
                                    name="is_hiring"
                                    value="1"
                                    {{ old('is_hiring') == '1' ? 'checked' : '' }}
                                >

                                <label for="hire-yes">
                                    Yes, I'd like to discuss a job opportunity
                                </label>

                            </div>


                            <div class="radio-option">

                                <input
                                    type="radio"
                                    id="hire-no"
                                    name="is_hiring"
                                    value="0"
                                    {{ old('is_hiring') == '0' || !old('is_hiring') ? 'checked' : '' }}
                                >

                                <label for="hire-no">
                                    No, this is a general inquiry
                                </label>

                            </div>

                        </div>


                        @if($errors->has('is_hiring'))

                            <div class="invalid-feedback">
                                {{ $errors->first('is_hiring') }}
                            </div>

                        @endif

                    </div>


                    {{-- Message --}}
                    <div class="form-group">

                        <label
                            for="message"
                            class="required"
                        >
                            Message
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            placeholder="Tell me about your project or opportunity..."
                            class="{{ $errors->has('message') ? 'is-invalid' : '' }}"
                            required
                        >{{ old('message') }}</textarea>

                        @if($errors->has('message'))

                            <div class="invalid-feedback">
                                {{ $errors->first('message') }}
                            </div>

                        @endif

                    </div>


                    {{-- Submit --}}
                    <button
                        type="submit"
                        class="submit-btn"
                    >

                        <i class="fas fa-paper-plane"></i>

                        <span>Send Message</span>

                    </button>

                </form>


                {{-- Footer --}}
                <div class="form-footer">

                    <p>
                        I typically respond within 24–48 hours.
                        For urgent matters, mention "URGENT" in your subject.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('contactForm');

    if (!form) {
        return;
    }

    const requiredFields = form.querySelectorAll('[required]');


    /* =====================================================
       REAL-TIME VALIDATION
       ===================================================== */

    requiredFields.forEach(field => {

        field.addEventListener('blur', function () {

            validateField(this);

        });


        field.addEventListener('input', function () {

            if (this.classList.contains('is-invalid')) {

                validateField(this);

            }

        });

    });


    /* =====================================================
       FIELD VALIDATION
       ===================================================== */

    function validateField(field) {

        const value = field.value.trim();

        let errorDiv = field.nextElementSibling;


        /* Required validation */

        if (!value) {

            field.classList.add('is-invalid');

            if (
                errorDiv &&
                errorDiv.classList.contains('invalid-feedback')
            ) {

                errorDiv.textContent =
                    'This field is required.';

                errorDiv.style.display = 'block';

            }

            return false;
        }


        /* Email validation */

        if (field.type === 'email') {

            const emailRegex =
                /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailRegex.test(value)) {

                field.classList.add('is-invalid');

                if (
                    errorDiv &&
                    errorDiv.classList.contains('invalid-feedback')
                ) {

                    errorDiv.textContent =
                        'Please enter a valid email address.';

                    errorDiv.style.display = 'block';

                }

                return false;
            }
        }


        /* Clear validation */

        field.classList.remove('is-invalid');

        if (
            errorDiv &&
            errorDiv.classList.contains('invalid-feedback')
        ) {

            errorDiv.style.display = 'none';

        }

        return true;
    }


    /* =====================================================
       FORM SUBMISSION
       ===================================================== */

    form.addEventListener('submit', function (e) {

        let isValid = true;


        requiredFields.forEach(field => {

            if (!validateField(field)) {

                isValid = false;

            }

        });


        if (!isValid) {

            e.preventDefault();


            let statusMessage =
                document.querySelector('.status-message');


            if (
                !statusMessage ||
                !statusMessage.classList.contains('error')
            ) {

                const formHeader =
                    document.querySelector('.form-header');


                const errorDiv =
                    document.createElement('div');


                errorDiv.className =
                    'status-message error';


                errorDiv.innerHTML =
                    '<p>Please correct the errors in the form.</p>';


                formHeader.insertAdjacentElement(
                    'afterend',
                    errorDiv
                );


                setTimeout(() => {

                    errorDiv.remove();

                }, 5000);

            }

        }

    });

});
</script>

@endpush

