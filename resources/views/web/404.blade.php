
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    
</head>
<body>
<style>
        /* --- CSS VARIABLES & RESET --- */
        :root {
            --neon-blue: #00f3ff;
            --neon-pink: #ff00ff;
            --bg-dark: #05050a;
            --panel-bg: rgba(10, 15, 30, 0.7);
            --text-main: #ffffff;
            --text-muted: #8892b0;
            --font-main: 'Courier New', Courier, monospace;
            --font-ui: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-main);
            font-family: var(--font-ui);
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            /* 
               IMPORTANT: Replace the URL below with the actual background image 
               containing the hooded figure and laptop.
            */
            background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070&auto=format&fit=crop'); 
            background-size: cover;
            background-position: center;
            background-blend-mode: overlay;
        }

        /* Dark overlay to make text pop */
        body::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: radial-gradient(circle at center, rgba(5,5,10,0.4) 0%, rgba(5,5,10,0.9) 100%);
            z-index: -1;
        }

        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            width: 90%;
            max-width: 1400px;
            height: 80vh;
            position: relative;
        }

        /* --- LEFT SIDE: CODE PANELS --- */
        .left-panel {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .code-window {
            background: var(--panel-bg);
            border: 1px solid rgba(0, 243, 255, 0.3);
            border-radius: 8px;
            padding: 15px;
            font-family: var(--font-main);
            font-size: 13px;
            box-shadow: 0 0 15px rgba(0, 243, 255, 0.1);
            width: 320px;
            backdrop-filter: blur(5px);
        }

        .window-header {
            display: flex;
            gap: 8px;
            margin-bottom: 15px;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }
        .dot.red { background: #ff5f56; }
        .dot.yellow { background: #ffbd2e; }
        .dot.green { background: #27c93f; }

        .code-content .line { margin-bottom: 6px; color: #a8b2d1; }
        .code-content .keyword { color: var(--neon-pink); }
        .code-content .string { color: #64ffda; }
        .code-content .comment { color: #5c6370; }

        /* File Explorer Window */
        .file-window {
            position: absolute;
            top: 50px;
            left: 350px;
            background: var(--panel-bg);
            border: 1px solid rgba(255, 0, 255, 0.3);
            border-radius: 8px;
            width: 200px;
            padding: 10px;
            font-family: var(--font-main);
            font-size: 12px;
            box-shadow: 0 0 15px rgba(255, 0, 255, 0.1);
            backdrop-filter: blur(5px);
        }

        .file-item {
            padding: 5px 10px;
            margin-bottom: 4px;
            border-radius: 4px;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .file-item.active {
            background: rgba(255, 0, 255, 0.2);
            color: var(--neon-pink);
            border-left: 2px solid var(--neon-pink);
        }

        /* --- RIGHT SIDE: MAIN CONTENT --- */
        .right-panel {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding-left: 50px;
        }

        /* The giant 404 with Skull */
        .error-title {
            font-family: 'Arial Black', Impact, sans-serif;
            font-size: 180px;
            font-weight: 900;
            line-height: 1;
            letter-spacing: -5px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            text-shadow: 0 0 20px var(--neon-blue), 0 0 40px var(--neon-blue);
            color: white;
        }

        /* Glitch effect on numbers */
        .error-title span {
            position: relative;
            z-index: 2;
        }
        
        .error-title::before, .error-title::after {
            content: '4 4';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            z-index: 1;
            opacity: 0.8;
        }
        .error-title::before {
            color: var(--neon-pink);
            left: 5px;
            text-shadow: -2px 0 var(--neon-pink);
            clip-path: polygon(0 0, 100% 0, 100% 45%, 0 45%);
            animation: glitch 3s infinite linear alternate-reverse;
        }
        .error-title::after {
            color: var(--neon-blue);
            left: -5px;
            text-shadow: 2px 0 var(--neon-blue);
            clip-path: polygon(0 55%, 100% 55%, 100% 100%, 0 100%);
            animation: glitch 2s infinite linear alternate-reverse;
        }

        /* Circular glow behind skull */
        .skull-container {
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 2px dashed rgba(0, 243, 255, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            animation: spin 20s linear infinite;
            z-index: 3;
        }

        .skull-container::before {
            content: '';
            position: absolute;
            width: 160px;
            height: 160px;
            border-radius: 50%;
            border: 2px solid rgba(255, 0, 255, 0.3);
            box-shadow: 0 0 30px rgba(255, 0, 255, 0.2), inset 0 0 30px rgba(255, 0, 255, 0.2);
        }

        /* Replace with your actual skull image */
        .skull-img {
            width: 120px;
            height: 120px;
            /* Placeholder using a skull emoji for demonstration */
            font-size: 100px;
            line-height: 120px;
            text-shadow: 0 0 20px var(--neon-pink);
            filter: drop-shadow(0 0 10px var(--neon-blue));
        }

        .subtitle {
            font-family: var(--font-main);
            font-size: 32px;
            letter-spacing: 8px;
            color: var(--neon-blue);
            text-transform: uppercase;
            margin-bottom: 20px;
            text-shadow: 0 0 10px rgba(0, 243, 255, 0.5);
        }

        .description {
            font-size: 16px;
            color: var(--text-muted);
            max-width: 400px;
            line-height: 1.6;
            margin-bottom: 40px;
        }

        /* Call to Action Button */
        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 40px;
            border: 2px solid var(--neon-blue);
            border-radius: 50px;
            color: var(--neon-blue);
            text-decoration: none;
            font-family: var(--font-main);
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1px;
            background: transparent;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(0, 243, 255, 0.2), inset 0 0 15px rgba(0, 243, 255, 0.1);
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .cta-button:hover {
            background: var(--neon-blue);
            color: var(--bg-dark);
            box-shadow: 0 0 30px var(--neon-blue), inset 0 0 10px var(--neon-blue);
            text-shadow: none;
        }

        .cta-button svg {
            width: 20px;
            height: 20px;
            fill: currentColor;
        }

        .footer-text {
            margin-top: 40px;
            font-family: var(--font-main);
            font-size: 11px;
            letter-spacing: 3px;
            color: rgba(255, 255, 255, 0.4);
            text-transform: uppercase;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .footer-text::before, .footer-text::after {
            content: '';
            width: 40px;
            height: 1px;
            background: rgba(255, 255, 255, 0.2);
        }

        /* --- ANIMATIONS --- */
        @keyframes glitch {
            0% { clip-path: polygon(0 2%, 100% 2%, 100% 5%, 0 5%); }
            10% { clip-path: polygon(0 15%, 100% 15%, 100% 20%, 0 20%); }
            20% { clip-path: polygon(0 10%, 100% 10%, 100% 12%, 0 12%); }
            30% { clip-path: polygon(0 30%, 100% 30%, 100% 35%, 0 35%); }
            40% { clip-path: polygon(0 40%, 100% 40%, 100% 45%, 0 45%); }
            50% { clip-path: polygon(0 50%, 100% 50%, 100% 55%, 0 55%); }
            60% { clip-path: polygon(0 60%, 100% 60%, 100% 65%, 0 65%); }
            70% { clip-path: polygon(0 70%, 100% 70%, 100% 75%, 0 75%); }
            80% { clip-path: polygon(0 80%, 100% 80%, 100% 85%, 0 85%); }
            90% { clip-path: polygon(0 90%, 100% 90%, 100% 95%, 0 95%); }
            100% { clip-path: polygon(0 98%, 100% 98%, 100% 100%, 0 100%); }
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 1024px) {
            .container {
                grid-template-columns: 1fr;
                height: auto;
                padding: 40px 0;
            }
            .left-panel {
                display: none; /* Hide code panels on smaller screens */
            }
            .right-panel {
                padding-left: 0;
            }
            .error-title {
                font-size: 120px;
            }
            .skull-container {
                width: 150px;
                height: 150px;
            }
            .skull-img {
                font-size: 70px;
                line-height: 90px;
            }
        }
    </style>
    <div class="container">
        <!-- LEFT SIDE: CODE WINDOWS -->
        <div class="left-panel">
            <!-- Code Editor Window -->
            <div class="code-window">
                <div class="window-header">
                    <div class="dot red"></div>
                    <div class="dot yellow"></div>
                    <div class="dot green"></div>
                </div>
                <div class="code-content">
                    <div class="line"><span class="comment">// Oops! Page not found</span></div>
                    <div class="line"><span class="keyword">const</span> error = {</div>
                    <div class="line">&nbsp;&nbsp;status: <span class="string">404</span>,</div>
                    <div class="line">&nbsp;&nbsp;message: <span class="string">"Page not found"</span>,</div>
                    <div class="line">&nbsp;&nbsp;solution: <span class="string">"Go back or try again"</span>,</div>
                    <div class="line">};</div>
                    <div class="line">console.log(error.message);</div>
                    <br>
                    <div class="line"><span class="comment">// Better luck next time!</span></div>
                </div>
            </div>

            <!-- File Explorer Window -->
            <div class="file-window">
                <div class="file-item">📁 /</div>
                <div class="file-item">📄 home</div>
                <div class="file-item">📄 projects</div>
                <div class="file-item">📄 about</div>
                <div class="file-item active">❌ 404</div>
                <div class="file-item">📄 contact</div>
            </div>
        </div>

        <!-- RIGHT SIDE: MAIN ERROR MESSAGE -->
        <div class="right-panel">
            <div class="error-title">
                <span>4</span>
                <div class="skull-container">
                    <!-- Replace this emoji with an actual <img> tag of your skull graphic -->
                    <div class="skull-img">🤖</div>
                </div>
                <span>4</span>
            </div>
            
            <h1 class="subtitle">PAGE NOT FOUND</h1>
            
            <p class="description">
                Looks like you're trying to access something that doesn't exist (or maybe it got lost in the code).
            </p>

            <a href="/" class="cta-button">
                <!-- SVG House Icon -->
                <svg viewBox="0 0 24 24">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                </svg>
                Go Back Home
            </a>

            <div class="footer-text">
                SOME PAGES AREN'T MEANT TO BE FOUND
            </div>
        </div>
    </div>

</body>
</html>
