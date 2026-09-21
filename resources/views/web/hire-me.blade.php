@extends('web.layout')

@section('title', 'Contact Me | Lakshman Pal | Full Stack Developer Portfolio')

@section('content')

<style>
    /* =========================================================
       CONTACT PAGE
    ========================================================= */

    .contact-page {
        --contact-bg: #020817;
        --contact-bg-soft: #07152e;
        --contact-card: rgba(7, 24, 52, 0.72);
        --contact-border: rgba(59, 130, 246, 0.38);
        --contact-primary: #2196ff;
        --contact-primary-light: #60a5fa;
        --contact-purple: #5b4bff;
        --contact-text: #f8fafc;
        --contact-muted: #a9c2e5;
        --contact-success: #00e5b0;

        position: relative;
        min-height: calc(100vh - 70px);
        overflow: hidden;
        background:
            radial-gradient(circle at 15% 20%, rgba(24, 76, 180, .18), transparent 25%),
            radial-gradient(circle at 85% 25%, rgba(61, 75, 255, .12), transparent 28%),
            linear-gradient(135deg, #020817 0%, #031127 48%, #020817 100%);
        color: var(--contact-text);
        padding: 55px 0 90px;
    }

    .contact-page *,
    .contact-page *::before,
    .contact-page *::after {
        box-sizing: border-box;
    }

    .contact-container {
        width: min(1240px, calc(100% - 40px));
        margin: 0 auto;
        position: relative;
        z-index: 5;
    }

    /* =========================================================
       BACKGROUND GLOW
    ========================================================= */

    .contact-glow {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        filter: blur(.2px);
    }

    .contact-glow-one {
        width: 190px;
        height: 190px;
        top: -75px;
        left: -75px;
        background: radial-gradient(
            circle,
            rgba(38, 101, 255, .85) 0%,
            rgba(38, 101, 255, .25) 48%,
            transparent 72%
        );
    }

    .contact-glow-two {
        width: 180px;
        height: 180px;
        top: 40px;
        right: -55px;
        background: radial-gradient(
            circle,
            rgba(72, 82, 255, .75) 0%,
            rgba(72, 82, 255, .20) 48%,
            transparent 72%
        );
    }

    .contact-glow-three {
        width: 90px;
        height: 90px;
        right: 4%;
        bottom: 170px;
        background: radial-gradient(
            circle,
            rgba(91, 48, 255, .75) 0%,
            rgba(91, 48, 255, .15) 55%,
            transparent 75%
        );
    }

    .contact-glow-four {
        width: 65px;
        height: 65px;
        left: 3%;
        bottom: 100px;
        background: radial-gradient(
            circle,
            rgba(45, 100, 255, .75) 0%,
            rgba(45, 100, 255, .15) 55%,
            transparent 75%
        );
    }

    /* =========================================================
       BOTTOM WAVE
    ========================================================= */

    .contact-wave {
        position: absolute;
        left: -5%;
        bottom: -150px;
        width: 110%;
        height: 280px;
        border-radius: 50% 50% 0 0;
        background:
            radial-gradient(
                ellipse at center,
                rgba(12, 53, 126, .72),
                rgba(2, 8, 23, .1) 70%
            );
        border-top: 2px solid rgba(41, 101, 255, .5);
        box-shadow: 0 -10px 50px rgba(21, 83, 220, .12);
        transform: rotate(-2deg);
    }

    /* =========================================================
       MAIN GRID
    ========================================================= */

    .contact-grid {
        display: grid;
        grid-template-columns: minmax(0, .93fr) minmax(480px, 1.07fr);
        gap: 70px;
        align-items: start;
    }

    /* =========================================================
       LEFT SIDE
    ========================================================= */

    .contact-left {
        padding-top: 12px;
    }

    .availability-badge {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 8px 14px;
        border-radius: 50px;
        color: #21e9c0;
        background: rgba(0, 229, 176, .10);
        border: 1px solid rgba(0, 229, 176, .25);
        box-shadow: 0 0 20px rgba(0, 229, 176, .06);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: .5px;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .availability-dot {
        width: 9px;
        height: 9px;
        border-radius: 50%;
        background: #19e6bd;
        box-shadow: 0 0 12px #19e6bd;
        animation: pulseDot 2s infinite;
    }

    @keyframes pulseDot {
        0%, 100% {
            box-shadow: 0 0 8px rgba(25, 230, 189, .45);
        }

        50% {
            box-shadow: 0 0 18px rgba(25, 230, 189, .9);
        }
    }

    .contact-heading {
        margin: 0;
        max-width: 570px;
        font-size: clamp(42px, 5vw, 63px);
        line-height: 1.04;
        font-weight: 800;
        letter-spacing: -2.8px;
        color: #ffffff;
    }

    .contact-heading span {
        display: block;
        background: linear-gradient(
            90deg,
            #1e9bff 0%,
            #238bff 45%,
            #714cff 100%
        );
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent;
    }

    .contact-intro {
        max-width: 530px;
        margin: 20px 0 30px;
        color: var(--contact-muted);
        font-size: 17px;
        line-height: 1.7;
    }

    /* =========================================================
       FLOATING INFORMATION CARDS
    ========================================================= */

    .contact-info-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .contact-info-card {
        display: flex;
        align-items: center;
        gap: 18px;
        min-height: 76px;
        padding: 12px 17px;
        border-radius: 11px;
        background:
            linear-gradient(
                135deg,
                rgba(9, 30, 65, .84),
                rgba(4, 18, 43, .68)
            );
        border: 1px solid rgba(53, 119, 220, .38);
        box-shadow:
            inset 0 1px 0 rgba(255,255,255,.025),
            0 10px 35px rgba(0,0,0,.12);
        transition: .3s ease;
    }

    .contact-info-card:hover {
        transform: translateY(-3px);
        border-color: rgba(49, 142, 255, .65);
        box-shadow:
            0 12px 35px rgba(0, 78, 255, .10),
            inset 0 1px 0 rgba(255,255,255,.03);
    }

    .contact-icon {
        width: 51px;
        height: 51px;
        min-width: 51px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: #67b7ff;
        background:
            radial-gradient(
                circle at 35% 30%,
                #1d73d9,
                #0d3e8f 75%
            );
        box-shadow:
            inset 0 0 0 1px rgba(255,255,255,.08),
            0 6px 18px rgba(0,80,200,.25);
        font-size: 21px;
    }

    .contact-info-label {
        display: block;
        margin-bottom: 3px;
        color: #8bb8e9;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .contact-info-value {
        color: #f4f8ff;
        font-size: 15px;
        font-weight: 600;
        word-break: break-word;
    }

    /* =========================================================
       OPPORTUNITY CARD
    ========================================================= */

    .opportunity-card {
        margin-top: 18px;
        padding: 19px 20px;
        border-radius: 12px;
        border: 1px solid #00d9aa;
        background:
            linear-gradient(
                135deg,
                rgba(0, 180, 150, .09),
                rgba(3, 31, 55, .60)
            );
        box-shadow:
            0 10px 30px rgba(0, 220, 170, .05),
            inset 0 1px 0 rgba(255,255,255,.02);
    }

    .opportunity-title {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 7px;
        color: #15e5bd;
        font-size: 16px;
        font-weight: 700;
    }

    .opportunity-title i {
        font-size: 12px;
        text-shadow: 0 0 10px #00e5b0;
    }

    .opportunity-text {
        margin: 0;
        padding-left: 29px;
        max-width: 500px;
        color: #b7d2f2;
        font-size: 14px;
        line-height: 1.7;
    }

    /* =========================================================
       SOCIAL
    ========================================================= */

    .social-title {
        margin: 27px 0 13px;
        color: #8fb8e7;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 1.2px;
        text-transform: uppercase;
    }

    .social-links {
        display: flex;
        gap: 14px;
    }

    .social-link {
        width: 58px;
        height: 58px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 11px;
        color: #e8f3ff;
        background: rgba(7, 28, 61, .75);
        border: 1px solid rgba(51, 102, 175, .28);
        font-size: 24px;
        text-decoration: none;
        transition: .3s ease;
    }

    .social-link:hover {
        color: #fff;
        transform: translateY(-5px);
        border-color: rgba(42, 132, 255, .8);
        background: rgba(14, 53, 110, .9);
        box-shadow: 0 10px 25px rgba(0, 104, 255, .16);
    }

    /* =========================================================
       FORM PANEL
    ========================================================= */

    .contact-form-panel {
        position: relative;
        padding: 34px 39px 30px;
        border-radius: 17px;
        background:
            linear-gradient(
                145deg,
                rgba(8, 27, 62, .92),
                rgba(4, 16, 39, .89)
            );
        border: 1px solid rgba(31, 149, 255, .72);
        box-shadow:
            0 0 0 1px rgba(75, 81, 255, .12),
            0 25px 70px rgba(0, 0, 0, .28),
            0 0 45px rgba(0, 94, 255, .08);
        overflow: hidden;
    }

    .contact-form-panel::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(
            90deg,
            transparent,
            #29a4ff,
            #6257ff,
            transparent
        );
    }

    .form-eyebrow {
        margin-bottom: 8px;
        color: #9fc5f4;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 1.5px;
        text-transform: uppercase;
    }

    .form-title {
        margin: 0;
        color: #ffffff;
        font-size: 31px;
        font-weight: 800;
        letter-spacing: -.7px;
    }

    .form-description {
        max-width: 510px;
        margin: 9px 0 23px;
        color: #a9c5e9;
        font-size: 15px;
        line-height: 1.7;
    }

    .form-group {
        margin-bottom: 17px;
    }

    .form-label {
        display: block;
        margin-bottom: 7px;
        color: #eef6ff;
        font-size: 13px;
        font-weight: 600;
    }

    .required {
        color: #ff6b7a;
    }

    .form-control-custom {
        width: 100%;
        min-height: 47px;
        padding: 12px 14px;
        border: 1px solid rgba(60, 114, 183, .48);
        border-radius: 10px;
        outline: none;
        background: rgba(3, 18, 42, .68);
        color: #f5f9ff;
        font-size: 13px;
        transition: .25s ease;
    }

    .form-control-custom::placeholder {
        color: #688ab5;
    }

    .form-control-custom:focus {
        border-color: #2196ff;
        background: rgba(4, 22, 50, .88);
        box-shadow:
            0 0 0 3px rgba(33, 150, 255, .09),
            0 0 22px rgba(33, 150, 255, .05);
    }

    textarea.form-control-custom {
        min-height: 100px;
        resize: vertical;
    }

    .form-error {
        margin-top: 5px;
        color: #ff7180;
        font-size: 12px;
    }

    /* =========================================================
       HIRING BOX
    ========================================================= */

    .hiring-box {
        margin: 3px 0 18px;
        padding: 12px 17px 14px;
        border-radius: 10px;
        border: 1px solid rgba(56, 108, 176, .38);
        background: rgba(8, 31, 65, .62);
    }

    .hiring-question {
        margin-bottom: 13px;
        color: #edf5ff;
        font-size: 13px;
        font-weight: 600;
    }

    .hiring-options {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .radio-option {
        position: relative;
        display: flex;
        align-items: flex-start;
        gap: 11px;
        color: #bcd1ec;
        font-size: 13px;
        line-height: 1.55;
        cursor: pointer;
    }

    .radio-option input {
        appearance: none;
        width: 23px;
        height: 23px;
        min-width: 23px;
        margin: 0;
        border: 1px solid #4471aa;
        border-radius: 50%;
        background: transparent;
        cursor: pointer;
        position: relative;
    }

    .radio-option input:checked {
        border-color: #2d91ff;
        box-shadow: 0 0 0 4px rgba(45, 145, 255, .05);
    }

    .radio-option input:checked::after {
        content: "";
        position: absolute;
        width: 9px;
        height: 9px;
        border-radius: 50%;
        background: #278dff;
        top: 6px;
        left: 6px;
        box-shadow: 0 0 9px rgba(39, 141, 255, .7);
    }

    /* =========================================================
       ALERTS
    ========================================================= */

    .contact-alert {
        padding: 12px 15px;
        margin-bottom: 20px;
        border-radius: 9px;
        font-size: 13px;
    }

    .contact-alert-success {
        color: #8df7dc;
        border: 1px solid rgba(0, 229, 176, .35);
        background: rgba(0, 229, 176, .08);
    }

    .contact-alert-danger {
        color: #ff9ba6;
        border: 1px solid rgba(255, 82, 103, .35);
        background: rgba(255, 82, 103, .08);
    }

    /* =========================================================
       SEND BUTTON
    ========================================================= */

    .send-button {
        width: 100%;
        min-height: 53px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        border: 0;
        border-radius: 10px;
        color: #fff;
        background: linear-gradient(
            100deg,
            #1596ff 0%,
            #237df4 45%,
            #5245ee 100%
        );
        box-shadow:
            0 8px 25px rgba(37, 115, 255, .22),
            inset 0 1px 0 rgba(255,255,255,.18);
        font-size: 14px;
        font-weight: 700;
        cursor: pointer;
        transition: .3s ease;
    }

    .send-button:hover {
        transform: translateY(-2px);
        box-shadow:
            0 12px 32px rgba(37, 115, 255, .30),
            inset 0 1px 0 rgba(255,255,255,.2);
    }

    .send-button:active {
        transform: translateY(0);
    }

    /* =========================================================
       RESPONSE INFO
    ========================================================= */

    .response-info {
        display: flex;
        align-items: flex-start;
        gap: 13px;
        margin-top: 19px;
        color: #91b2d9;
        font-size: 12px;
        line-height: 1.7;
    }

    .response-info i {
        margin-top: 3px;
        color: #79adff;
        font-size: 22px;
    }

    .response-info strong {
        color: #bdd8f8;
        font-weight: 500;
    }

    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 1100px) {
        .contact-grid {
            grid-template-columns: 1fr;
            gap: 45px;
        }

        .contact-left {
            max-width: 780px;
            margin: auto;
        }

        .contact-form-panel {
            max-width: 780px;
            width: 100%;
            margin: auto;
        }

        .contact-heading {
            max-width: 700px;
        }

        .contact-intro {
            max-width: 650px;
        }
    }

    @media (max-width: 768px) {
        .contact-page {
            padding: 35px 0 70px;
        }

        .contact-container {
            width: min(100% - 28px, 680px);
        }

        .contact-heading {
            font-size: 44px;
            letter-spacing: -2px;
        }

        .contact-intro {
            font-size: 15px;
        }

        .contact-form-panel {
            padding: 28px 22px 25px;
        }

        .form-title {
            font-size: 27px;
        }

        .hiring-options {
            grid-template-columns: 1fr;
            gap: 15px;
        }
    }

    @media (max-width: 480px) {
        .contact-page {
            padding-top: 25px;
        }

        .contact-container {
            width: calc(100% - 22px);
        }

        .availability-badge {
            font-size: 10px;
        }

        .contact-heading {
            font-size: 37px;
            line-height: 1.08;
        }

        .contact-info-card {
            min-height: 70px;
            gap: 12px;
            padding: 10px 12px;
        }

        .contact-icon {
            width: 45px;
            height: 45px;
            min-width: 45px;
            font-size: 18px;
        }

        .contact-info-value {
            font-size: 13px;
        }

        .opportunity-card {
            padding: 16px;
        }

        .opportunity-text {
            padding-left: 0;
        }

        .social-link {
            width: 52px;
            height: 52px;
        }

        .contact-form-panel {
            padding: 23px 16px;
            border-radius: 13px;
        }

        .form-title {
            font-size: 24px;
        }

        .form-description {
            font-size: 13px;
        }
    }
</style>


<div class="contact-page">

    {{-- Background decorative elements --}}
    <div class="contact-glow contact-glow-one"></div>
    <div class="contact-glow contact-glow-two"></div>
    <div class="contact-glow contact-glow-three"></div>
    <div class="contact-glow contact-glow-four"></div>
    <div class="contact-wave"></div>


    <div class="contact-container">

        <div class="contact-grid">

            {{-- =====================================================
                 LEFT SIDE
            ====================================================== --}}
            <div class="contact-left">

                <div class="availability-badge">
                    <span class="availability-dot"></span>
                    Available for opportunities
                </div>


                <h1 class="contact-heading">
                    Let's build
                    <span>something together.</span>
                </h1>


                <p class="contact-intro">
                    Have a project in mind, a job opportunity, or simply
                    want to connect? Send me a message and I'll get back
                    to you as soon as possible.
                </p>


                {{-- Contact Information --}}
                <div class="contact-info-list">

                    {{-- Email --}}
                    <div class="contact-info-card">

                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div>
                            <span class="contact-info-label">
                                Email
                            </span>

                            <div class="contact-info-value">
                                pallakshman0@gmail.com
                            </div>
                        </div>

                    </div>


                    {{-- Location --}}
                    <div class="contact-info-card">

                        <div class="contact-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div>
                            <span class="contact-info-label">
                                Location
                            </span>

                            <div class="contact-info-value">
                                Kolkata, India
                            </div>
                        </div>

                    </div>


                    {{-- Current Role --}}
                    <div class="contact-info-card">

                        <div class="contact-icon">
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <div>
                            <span class="contact-info-label">
                                Currently
                            </span>

                            <div class="contact-info-value">
                                Backend Developer · Software Developer
                            </div>
                        </div>

                    </div>

                </div>


                {{-- Opportunity --}}
                <div class="opportunity-card">

                    <div class="opportunity-title">
                        <i class="fa-solid fa-circle"></i>

                        <span>
                            Open to professional opportunities
                        </span>
                    </div>

                    <p class="opportunity-text">
                        I'm interested in backend development, full-stack
                        development, scalable web applications, API development
                        and challenging software projects.
                    </p>

                </div>


                {{-- Social --}}
                <div class="social-title">
                    Connect with me
                </div>

                <div class="social-links">

                    <a
                        href="https://www.linkedin.com/in/lakshman-pal-285b172aa/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="social-link"
                        aria-label="LinkedIn"
                    >
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>


                    <a
                        href="https://github.com/LakshmanMCA"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="social-link"
                        aria-label="GitHub"
                    >
                        <i class="fa-brands fa-github"></i>
                    </a>


                    <a
                        href="#"
                        class="social-link"
                        aria-label="Instagram"
                    >
                        <i class="fa-brands fa-instagram"></i>
                    </a>


                    <a
                        href="#"
                        class="social-link"
                        aria-label="Facebook"
                    >
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                </div>

            </div>


            {{-- =====================================================
                 RIGHT SIDE FORM
            ====================================================== --}}
            <div class="contact-form-panel">

                <div class="form-eyebrow">
                    Start a conversation
                </div>

                <h2 class="form-title">
                    Send me a message
                </h2>

                <p class="form-description">
                    Tell me a little about your project, opportunity,
                    or inquiry. I'll respond as soon as possible.
                </p>


                {{-- Success --}}
                @if(session('success'))
                    <div class="contact-alert contact-alert-success">
                        <i class="fa-solid fa-circle-check me-1"></i>
                        {{ session('success') }}
                    </div>
                @endif


                {{-- Validation Errors --}}
                @if($errors->any())
                    <div class="contact-alert contact-alert-danger">
                        <strong>
                            Please check the following:
                        </strong>

                        <ul class="mb-0 mt-2 ps-3">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form
                    action="{{ route('contact.store') }}"
                    method="POST"
                    id="contactForm"
                    novalidate
                >

                    @csrf


                    {{-- Full Name --}}
                    <div class="form-group">

                        <label
                            for="name"
                            class="form-label"
                        >
                            Full Name
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control-custom"
                            value="{{ old('name') }}"
                            placeholder="Enter your full name"
                            autocomplete="name"
                            required
                        >

                        @error('name')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- Email --}}
                    <div class="form-group">

                        <label
                            for="email"
                            class="form-label"
                        >
                            Email Address
                            <span class="required">*</span>
                        </label>

                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control-custom"
                            value="{{ old('email') }}"
                            placeholder="Enter your email address"
                            autocomplete="email"
                            required
                        >

                        @error('email')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- Subject --}}
                    <div class="form-group">

                        <label
                            for="subject"
                            class="form-label"
                        >
                            Subject
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            name="subject"
                            id="subject"
                            class="form-control-custom"
                            value="{{ old('subject') }}"
                            placeholder="What is this regarding?"
                            required
                        >

                        @error('subject')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- Hiring Inquiry --}}
                    <div class="hiring-box">

                        <div class="hiring-question">
                            Is this a hiring inquiry?
                        </div>

                        <div class="hiring-options">

                            <label class="radio-option">

                                <input
                                    type="radio"
                                    name="is_hiring"
                                    value="yes"
                                    {{ old('is_hiring', 'yes') === 'yes' ? 'checked' : '' }}
                                >

                                <span>
                                    Yes, I'd like to discuss
                                    a job opportunity
                                </span>

                            </label>


                            <label class="radio-option">

                                <input
                                    type="radio"
                                    name="is_hiring"
                                    value="no"
                                    {{ old('is_hiring') === 'no' ? 'checked' : '' }}
                                >

                                <span>
                                    No, this is a general
                                    inquiry
                                </span>

                            </label>

                        </div>

                    </div>


                    {{-- Message --}}
                    <div class="form-group">

                        <label
                            for="message"
                            class="form-label"
                        >
                            Message
                            <span class="required">*</span>
                        </label>

                        <textarea
                            name="message"
                            id="message"
                            class="form-control-custom"
                            placeholder="Tell me about your project or opportunity..."
                            required
                        >{{ old('message') }}</textarea>

                        @error('message')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- Submit --}}
                    <button
                        type="submit"
                        class="send-button"
                        id="sendMessageBtn"
                    >
                        <i class="fa-solid fa-paper-plane"></i>

                        <span>
                            Send Message
                        </span>
                    </button>


                    {{-- Response Time --}}
                    <div class="response-info">

                        <i class="fa-regular fa-clock"></i>

                        <div>
                            <strong>
                                I typically respond within 24–48 hours.
                            </strong>

                            <br>

                            For urgent matters, mention
                            <strong>"URGENT"</strong>
                            in your subject.
                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('contactForm');
    const button = document.getElementById('sendMessageBtn');

    if (!form || !button) {
        return;
    }

    form.addEventListener('submit', function (event) {

        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const subject = document.getElementById('subject');
        const message = document.getElementById('message');

        let valid = true;

        const fields = [
            name,
            email,
            subject,
            message
        ];

        fields.forEach(function (field) {

            field.style.borderColor = '';

            if (!field.value.trim()) {

                field.style.borderColor = '#ff5d70';

                valid = false;
            }

        });


        if (email.value.trim()) {

            const emailPattern =
                /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailPattern.test(email.value.trim())) {

                email.style.borderColor = '#ff5d70';

                valid = false;
            }
        }


        if (!valid) {

            event.preventDefault();

            const firstInvalid =
                form.querySelector(
                    'input[style*="border-color"], textarea[style*="border-color"]'
                );

            if (firstInvalid) {
                firstInvalid.focus();
            }

            return;
        }


        button.disabled = true;

        button.innerHTML = `
            <i class="fa-solid fa-spinner fa-spin"></i>
            <span>Sending...</span>
        `;

    });


    /* Remove red border while typing */
    form.querySelectorAll(
        'input, textarea'
    ).forEach(function (field) {

        field.addEventListener('input', function () {

            if (field.value.trim()) {
                field.style.borderColor = '';
            }

        });

    });

});
</script>

@endsection