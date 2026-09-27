<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Super Admin Login</title>

    <!-- Bootstrap 5.3 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <style>

        * {
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            min-height: 100%;
        }

        body {
            margin: 0;
            min-height: 100vh;
            overflow: hidden;

            font-family:
                "Inter",
                "Segoe UI",
                Roboto,
                Arial,
                sans-serif;

            background:
                radial-gradient(
                    circle at 50% 50%,
                    #172554 0%,
                    #0f172a 45%,
                    #020617 100%
                );
        }


        /* =====================================================
           ANIMATED ENERGY BACKGROUND
        ===================================================== */

        .energy-background {
            position: fixed;
            inset: 0;

            width: 100%;
            height: 100%;

            overflow: hidden;

            z-index: 0;

            pointer-events: none;
        }


        /* =====================================================
           DARK GRID
        ===================================================== */

        .energy-background::before {
            content: "";

            position: absolute;
            inset: 0;

            background-image:
                linear-gradient(
                    rgba(96, 165, 250, 0.025) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(96, 165, 250, 0.025) 1px,
                    transparent 1px
                );

            background-size: 55px 55px;

            mask-image:
                radial-gradient(
                    circle at center,
                    black,
                    transparent 80%
                );

            animation: gridMove 15s linear infinite;
        }

        @keyframes gridMove {

            from {
                background-position: 0 0;
            }

            to {
                background-position: 55px 55px;
            }
        }


        /* =====================================================
           AMBIENT GLOW
        ===================================================== */

        .energy-glow {
            position: absolute;

            border-radius: 50%;

            filter: blur(80px);

            opacity: 0.22;

            animation:
                energyFloat 8s ease-in-out infinite;
        }


        .glow-1 {
            width: 420px;
            height: 420px;

            background: #2563eb;

            top: -180px;
            left: -150px;
        }


        .glow-2 {
            width: 500px;
            height: 500px;

            background: #7c3aed;

            right: -200px;
            bottom: -200px;

            animation-delay: 2s;
        }


        .glow-3 {
            width: 320px;
            height: 320px;

            background: #06b6d4;

            left: 42%;
            top: 38%;

            opacity: 0.12;

            animation-delay: 4s;
        }


        @keyframes energyFloat {

            0%,
            100% {
                transform:
                    translate(0, 0)
                    scale(1);
            }

            50% {
                transform:
                    translate(40px, -30px)
                    scale(1.15);
            }
        }


        /* =====================================================
           MOVING ENERGY LINES
        ===================================================== */

        .energy-line {
            position: absolute;

            height: 2px;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(96, 165, 250, 0.05),
                    rgba(96, 165, 250, 0.9),
                    rgba(129, 140, 248, 0.9),
                    transparent
                );

            filter:
                blur(0.4px)
                drop-shadow(
                    0 0 8px rgba(59, 130, 246, 0.8)
                );

            opacity: 0;

            animation:
                energyRun 5s linear infinite;
        }


        .line-1 {
            width: 500px;

            top: 18%;
            left: -500px;

            transform: rotate(15deg);
        }


        .line-2 {
            width: 650px;

            top: 42%;
            left: -650px;

            transform: rotate(-12deg);

            animation-delay: 1.2s;
        }


        .line-3 {
            width: 450px;

            top: 70%;
            left: -450px;

            transform: rotate(18deg);

            animation-delay: 2.5s;
        }


        .line-4 {
            width: 600px;

            top: 85%;
            left: -600px;

            transform: rotate(-8deg);

            animation-delay: 3.5s;
        }


        @keyframes energyRun {

            0% {
                left: -700px;
                opacity: 0;
            }

            10% {
                opacity: 0.9;
            }

            50% {
                opacity: 1;
            }

            90% {
                opacity: 0.7;
            }

            100% {
                left: 110%;
                opacity: 0;
            }
        }


        /* =====================================================
           ENERGY PARTICLES
        ===================================================== */

        .particles {
            position: absolute;

            inset: 0;
        }


        .particles span {
            position: absolute;

            width: 3px;
            height: 3px;

            border-radius: 50%;

            background: #60a5fa;

            box-shadow:
                0 0 6px #60a5fa,
                0 0 14px #3b82f6;

            opacity: 0;

            animation:
                particleMove 6s linear infinite;
        }


        .particles span:nth-child(1) {
            left: 5%;
            top: 80%;
            animation-delay: 0s;
        }

        .particles span:nth-child(2) {
            left: 12%;
            top: 30%;
            animation-delay: 1s;
        }

        .particles span:nth-child(3) {
            left: 20%;
            top: 65%;
            animation-delay: 2s;
        }

        .particles span:nth-child(4) {
            left: 28%;
            top: 15%;
            animation-delay: 3s;
        }

        .particles span:nth-child(5) {
            left: 35%;
            top: 85%;
            animation-delay: 1.5s;
        }

        .particles span:nth-child(6) {
            left: 43%;
            top: 25%;
            animation-delay: 4s;
        }

        .particles span:nth-child(7) {
            left: 50%;
            top: 75%;
            animation-delay: 2.5s;
        }

        .particles span:nth-child(8) {
            left: 58%;
            top: 12%;
            animation-delay: 1s;
        }

        .particles span:nth-child(9) {
            left: 65%;
            top: 60%;
            animation-delay: 3s;
        }

        .particles span:nth-child(10) {
            left: 72%;
            top: 35%;
            animation-delay: 4s;
        }

        .particles span:nth-child(11) {
            left: 78%;
            top: 82%;
            animation-delay: 1.8s;
        }

        .particles span:nth-child(12) {
            left: 84%;
            top: 20%;
            animation-delay: 3.5s;
        }

        .particles span:nth-child(13) {
            left: 90%;
            top: 65%;
            animation-delay: 2s;
        }

        .particles span:nth-child(14) {
            left: 95%;
            top: 45%;
            animation-delay: 4.5s;
        }

        .particles span:nth-child(15) {
            left: 15%;
            top: 90%;
            animation-delay: 5s;
        }

        .particles span:nth-child(16) {
            left: 88%;
            top: 90%;
            animation-delay: 2.7s;
        }


        @keyframes particleMove {

            0% {
                transform:
                    translateY(30px)
                    scale(0);

                opacity: 0;
            }

            20% {
                opacity: 1;
            }

            50% {
                transform:
                    translateY(-80px)
                    scale(1.5);

                opacity: 0.8;
            }

            100% {
                transform:
                    translateY(-180px)
                    scale(0);

                opacity: 0;
            }
        }


        /* =====================================================
           SECURITY PULSE
        ===================================================== */

        .security-pulse {
            position: absolute;

            width: 520px;
            height: 520px;

            left: 50%;
            top: 50%;

            transform:
                translate(-50%, -50%);

            display: flex;

            align-items: center;
            justify-content: center;

            opacity: 0.24;
        }


        /* Core */

        .security-core {
            width: 92px;
            height: 92px;

            border-radius: 50%;

            display: flex;

            align-items: center;
            justify-content: center;

            background:
                radial-gradient(
                    circle,
                    rgba(59, 130, 246, 0.5),
                    rgba(37, 99, 235, 0.08)
                );

            border:
                1px solid
                rgba(96, 165, 250, 0.6);

            box-shadow:
                0 0 30px
                rgba(59, 130, 246, 0.7),

                0 0 80px
                rgba(59, 130, 246, 0.25);

            animation:
                securityCore 2s
                ease-in-out
                infinite;

            z-index: 5;
        }


        .security-core i {
            font-size: 36px;

            color: #93c5fd;

            filter:
                drop-shadow(
                    0 0 8px #3b82f6
                )
                drop-shadow(
                    0 0 18px #2563eb
                );
        }


        @keyframes securityCore {

            0%,
            100% {
                transform:
                    scale(1);
            }

            50% {
                transform:
                    scale(1.12);
            }
        }


        /* =====================================================
           PULSE RINGS
        ===================================================== */

        .pulse-ring {
            position: absolute;

            border-radius: 50%;

            border:
                1px solid
                rgba(96, 165, 250, 0.5);

            box-shadow:
                0 0 15px
                rgba(59, 130, 246, 0.15);

            animation:
                pulseExpand 4s
                linear infinite;
        }


        .ring-1 {
            width: 150px;
            height: 150px;
        }


        .ring-2 {
            width: 270px;
            height: 270px;

            animation-delay: 1.3s;
        }


        .ring-3 {
            width: 400px;
            height: 400px;

            animation-delay: 2.6s;
        }


        .ring-4 {
            width: 500px;
            height: 500px;

            animation-delay: 3.9s;
        }


        @keyframes pulseExpand {

            0% {
                transform:
                    scale(0.55);

                opacity: 0.9;
            }

            70% {
                opacity: 0.25;
            }

            100% {
                transform:
                    scale(1.1);

                opacity: 0;
            }
        }


        /* =====================================================
           LOGIN WRAPPER
        ===================================================== */

        .login-wrapper {
            position: relative;

            z-index: 10;

            min-height: 100vh;

            display: flex;

            align-items: center;
            justify-content: center;

            padding: 20px;
        }


        /* =====================================================
           LOGIN CARD
        ===================================================== */

        .login-card {
            width: 100%;

            max-width: 430px;

            padding: 38px;

            border-radius: 24px;

            background:
                rgba(15, 23, 42, 0.72);

            border:
                1px solid
                rgba(148, 163, 184, 0.20);

            backdrop-filter:
                blur(20px);

            -webkit-backdrop-filter:
                blur(20px);

            box-shadow:
                0 25px 80px
                rgba(0, 0, 0, 0.45),

                inset 0 1px 0
                rgba(255, 255, 255, 0.08);

            animation:
                cardEntry 0.8s
                cubic-bezier(
                    0.22,
                    1,
                    0.36,
                    1
                );
        }


        @keyframes cardEntry {

            from {
                opacity: 0;

                transform:
                    translateY(40px)
                    scale(0.95);
            }

            to {
                opacity: 1;

                transform:
                    translateY(0)
                    scale(1);
            }
        }


        /* =====================================================
           ADMIN ICON
        ===================================================== */

        .admin-icon {
            width: 76px;
            height: 76px;

            margin:
                0 auto 18px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 21px;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #4f46e5
                );

            color: #fff;

            font-size: 30px;

            box-shadow:
                0 12px 35px
                rgba(37, 99, 235, 0.4);

            animation:
                adminIcon 2.5s
                ease-in-out
                infinite;
        }


        @keyframes adminIcon {

            0%,
            100% {
                transform:
                    translateY(0);
            }

            50% {
                transform:
                    translateY(-6px);
            }
        }


        /* =====================================================
           TITLE
        ===================================================== */

        .login-title {
            color: #fff;

            font-weight: 700;

            text-align: center;

            margin-bottom: 7px;

            font-size: 27px;

            letter-spacing: -0.5px;
        }


        .login-subtitle {
            color:
                rgba(
                    226,
                    232,
                    240,
                    0.65
                );

            text-align: center;

            font-size: 14px;

            margin-bottom: 30px;
        }


        /* =====================================================
           LABEL
        ===================================================== */

        .form-label {
            color:
                rgba(
                    241,
                    245,
                    249,
                    0.9
                );

            font-weight: 500;

            font-size: 14px;

            margin-bottom: 8px;
        }


        /* =====================================================
           INPUT
        ===================================================== */

        .input-group-custom {
            position: relative;
        }


        .input-icon {
            position: absolute;

            left: 15px;

            top: 50%;

            transform:
                translateY(-50%);

            color: #94a3b8;

            z-index: 5;

            transition:
                color 0.3s ease;
        }


        .form-control-custom {
            height: 52px;

            padding-left: 45px;
            padding-right: 48px;

            border-radius: 12px;

            border:
                1px solid
                rgba(
                    148,
                    163,
                    184,
                    0.18
                );

            background:
                rgba(
                    255,
                    255,
                    255,
                    0.06
                );

            color: #fff;

            transition:
                all 0.3s ease;
        }


        .form-control-custom::placeholder {
            color:
                rgba(
                    203,
                    213,
                    225,
                    0.38
                );
        }


        .form-control-custom:focus {
            background:
                rgba(
                    255,
                    255,
                    255,
                    0.10
                );

            border-color:
                rgba(
                    96,
                    165,
                    250,
                    0.8
                );

            color: #fff;

            box-shadow:
                0 0 0 4px
                rgba(
                    59,
                    130,
                    246,
                    0.10
                );
        }


        .input-group-custom:focus-within .input-icon {
            color: #60a5fa;
        }


        /* =====================================================
           PASSWORD TOGGLE
        ===================================================== */

        .password-toggle {
            position: absolute;

            right: 15px;

            top: 50%;

            transform:
                translateY(-50%);

            border: none;

            background:
                transparent;

            color: #94a3b8;

            cursor: pointer;

            z-index: 6;

            padding: 5px;

            transition:
                color 0.2s ease,
                transform 0.2s ease;
        }


        .password-toggle:hover {
            color: #fff;

            transform:
                translateY(-50%)
                scale(1.1);
        }


        /* =====================================================
           REMEMBER
        ===================================================== */

        .form-check-label {
            color:
                rgba(
                    226,
                    232,
                    240,
                    0.70
                );

            font-size: 14px;

            cursor: pointer;
        }


        .form-check-input {
            background-color:
                rgba(
                    255,
                    255,
                    255,
                    0.08
                );

            border-color:
                rgba(
                    255,
                    255,
                    255,
                    0.25
                );

            cursor: pointer;
        }


        .form-check-input:checked {
            background-color: #2563eb;

            border-color: #2563eb;
        }


        /* =====================================================
           LOGIN BUTTON
        ===================================================== */

        .login-btn {
            height: 52px;

            border: none;

            border-radius: 12px;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #4f46e5
                );

            color: #fff;

            font-weight: 600;

            font-size: 15px;

            position: relative;

            overflow: hidden;

            transition:
                all 0.3s ease;

            box-shadow:
                0 8px 20px
                rgba(
                    37,
                    99,
                    235,
                    0.22
                );
        }


        .login-btn::before {
            content: "";

            position: absolute;

            top: 0;

            left: -120%;

            width: 100%;

            height: 100%;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(
                        255,
                        255,
                        255,
                        0.25
                    ),
                    transparent
                );

            transition:
                left 0.6s ease;
        }


        .login-btn:hover::before {
            left: 120%;
        }


        .login-btn:hover {
            transform:
                translateY(-2px);

            box-shadow:
                0 15px 30px
                rgba(
                    37,
                    99,
                    235,
                    0.35
                );
        }


        .login-btn:active {
            transform:
                translateY(0);
        }


        /* =====================================================
           ALERT
        ===================================================== */

        .alert-danger {
            background:
                rgba(
                    220,
                    38,
                    38,
                    0.12
                );

            border:
                1px solid
                rgba(
                    248,
                    113,
                    113,
                    0.30
                );

            color:
                #fecaca;

            border-radius: 10px;

            font-size: 14px;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .login-footer {
            text-align: center;

            color:
                rgba(
                    203,
                    213,
                    225,
                    0.40
                );

            font-size: 12px;

            margin-top: 25px;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 576px) {

            body {
                overflow-y: auto;
            }

            .login-wrapper {
                min-height: 100vh;

                padding:
                    20px 15px;
            }

            .login-card {
                padding:
                    30px 22px;

                border-radius: 20px;
            }

            .login-title {
                font-size: 24px;
            }

            .admin-icon {
                width: 65px;
                height: 65px;

                font-size: 26px;
            }

            .security-pulse {
                width: 350px;
                height: 350px;
            }

            .ring-3 {
                width: 280px;
                height: 280px;
            }

            .ring-4 {
                width: 340px;
                height: 340px;
            }
        }


        /* =====================================================
           REDUCE ANIMATION FOR ACCESSIBILITY
        ===================================================== */

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;

                animation-iteration-count:
                    1 !important;

                scroll-behavior: auto !important;
            }
        }

    </style>
</head>


<body>


    <!-- =====================================================
         SECURE ENERGY BACKGROUND
    ===================================================== -->

    <div class="energy-background">

        <!-- Ambient Glow -->
        <div class="energy-glow glow-1"></div>
        <div class="energy-glow glow-2"></div>
        <div class="energy-glow glow-3"></div>


        <!-- Moving Energy Lines -->
        <div class="energy-line line-1"></div>
        <div class="energy-line line-2"></div>
        <div class="energy-line line-3"></div>
        <div class="energy-line line-4"></div>


        <!-- Particles -->
        <div class="particles">

            <span></span>
            <span></span>
            <span></span>
            <span></span>

            <span></span>
            <span></span>
            <span></span>
            <span></span>

            <span></span>
            <span></span>
            <span></span>
            <span></span>

            <span></span>
            <span></span>
            <span></span>
            <span></span>

        </div>


        <!-- Security Pulse -->
        <div class="security-pulse">

            <div class="pulse-ring ring-1"></div>

            <div class="pulse-ring ring-2"></div>

            <div class="pulse-ring ring-3"></div>

            <div class="pulse-ring ring-4"></div>


            <div class="security-core">

                <i class="fa-solid fa-shield-halved"></i>

            </div>

        </div>

    </div>


    <!-- =====================================================
         LOGIN
    ===================================================== -->

    <div class="login-wrapper">

        <div class="login-card">


            <!-- Admin Icon -->

            <div class="admin-icon">

                <i class="fa-solid fa-shield-halved"></i>

            </div>


            <!-- Heading -->

            <h4 class="login-title">
                Super Admin
            </h4>


            <p class="login-subtitle">
                Sign in to access your administration panel
            </p>


            <!-- Validation Error -->

            @if ($errors->any())

                <div class="alert alert-danger py-2 mb-4">

                    <i class="fa-solid fa-circle-exclamation me-2"></i>

                    {{ $errors->first() }}

                </div>

            @endif


            <!-- Login Form -->

            <form
                method="POST"
                action="{{ route('admin.login.submit') }}"
            >

                @csrf


                <!-- Email -->

                <div class="mb-4">

                    <label
                        for="email"
                        class="form-label"
                    >
                        Email Address<span class="text-danger">*</span>
                    </label>


                    <div class="input-group-custom">

                        <i
                            class="fa-solid fa-envelope input-icon"
                        ></i>


                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control form-control-custom"
                            placeholder="Enter your email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            autocomplete="email"
                        >

                    </div>

                </div>


                <!-- Password -->

                <div class="mb-3">

                    <label
                        for="password"
                        class="form-label"
                    >
                        Password<span class="text-danger">*</span>
                    </label>


                    <div class="input-group-custom">

                        <i
                            class="fa-solid fa-lock input-icon"
                        ></i>


                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control form-control-custom"
                            placeholder="Enter your password"
                            required
                            autocomplete="current-password"
                        >


                        <button
                            type="button"
                            class="password-toggle"
                            id="togglePassword"
                            aria-label="Show password"
                        >

                            <i
                                class="fa-solid fa-eye"
                                id="passwordIcon"
                            ></i>

                        </button>

                    </div>

                </div>


                <!-- Remember Me -->

                <div
                    class="d-flex justify-content-between align-items-center mb-4"
                >

                    <div class="form-check">

                        <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                            class="form-check-input"
                        >

                        <label
                            for="remember"
                            class="form-check-label"
                        >
                            Remember me
                        </label>

                    </div>

                </div>


                <!-- Login Button -->

                <button
                    type="submit"
                    class="btn login-btn w-100"
                    id="loginButton"
                >

                    <i
                        class="fa-solid fa-right-to-bracket me-2"
                    ></i>

                    Sign In

                </button>

            </form>


            <!-- Footer -->

            <div class="login-footer">

                <i
                    class="fa-solid fa-lock me-1"
                ></i>

                Secure Super Admin Access

            </div>


        </div>

    </div>


    <!-- =====================================================
         JAVASCRIPT
    ===================================================== -->

    <script>

        document.addEventListener(
            "DOMContentLoaded",
            function () {


                /* ==========================================
                   PASSWORD SHOW / HIDE
                ========================================== */

                const passwordInput =
                    document.getElementById(
                        "password"
                    );

                const togglePassword =
                    document.getElementById(
                        "togglePassword"
                    );

                const passwordIcon =
                    document.getElementById(
                        "passwordIcon"
                    );


                togglePassword.addEventListener(
                    "click",
                    function () {

                        const isPassword =
                            passwordInput.type ===
                            "password";


                        passwordInput.type =
                            isPassword
                                ? "text"
                                : "password";


                        passwordIcon.classList.toggle(
                            "fa-eye"
                        );

                        passwordIcon.classList.toggle(
                            "fa-eye-slash"
                        );


                        togglePassword.setAttribute(
                            "aria-label",
                            isPassword
                                ? "Hide password"
                                : "Show password"
                        );

                    }
                );


                /* ==========================================
                   LOGIN BUTTON LOADING
                ========================================== */

                const loginForm =
                    document.querySelector(
                        "form"
                    );

                const loginButton =
                    document.getElementById(
                        "loginButton"
                    );


                loginForm.addEventListener(
                    "submit",
                    function () {

                        loginButton.disabled =
                            true;


                        loginButton.innerHTML = `

                            <span
                                class="spinner-border spinner-border-sm me-2"
                                role="status"
                                aria-hidden="true"
                            ></span>

                            Signing In...

                        `;

                    }
                );

            }
        );

    </script>


</body>

</html>

