{{-- resources/views/emails/admin-contact-notification.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        /* Reset styles */
        body, p, h1, h2, h3, h4, h5, h6, table, td {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f4f7fc;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        /* Main container */
        .email-wrapper {
            width: 100%;
            table-layout: fixed;
            background-color: #f4f7fc;
            padding: 40px 0;
        }
        
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        /* Header with gradient */
        .email-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 40px 30px;
            text-align: center;
            position: relative;
        }
        
        .header-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
        }
        
        .header-icon img {
            width: 40px;
            height: 40px;
        }
        
        .email-header h1 {
            color: #ffffff;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .email-header p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 16px;
        }
        
        .submission-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.25);
            padding: 8px 20px;
            border-radius: 50px;
            color: white;
            font-size: 14px;
            font-weight: 600;
            margin-top: 15px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(5px);
        }
        
        /* Content area */
        .email-content {
            padding: 40px 30px;
            background: #ffffff;
        }
        
        /* Sender card */
        .sender-card {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border-radius: 16px;
            padding: 25px;
            margin-bottom: 30px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.02);
        }
        
        .sender-title {
            font-size: 18px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #667eea;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: 120px 1fr;
            gap: 15px;
        }
        
        .info-label {
            font-weight: 600;
            color: #64748b;
            font-size: 14px;
        }
        
        .info-value {
            color: #1e293b;
            font-size: 16px;
        }
        
        .info-value a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
        }
        
        .info-value a:hover {
            text-decoration: underline;
        }
        
        /* Hiring badge */
        .hiring-section {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border-radius: 16px;
            padding: 25px;
            margin-bottom: 30px;
            border: 2px solid #f59e0b;
            position: relative;
            overflow: hidden;
        }
        
        .hiring-section::before {
            content: '🎯';
            position: absolute;
            top: -10px;
            right: -10px;
            font-size: 80px;
            opacity: 0.1;
            transform: rotate(15deg);
        }
        
        .hiring-badge {
            display: inline-block;
            background: #f59e0b;
            color: white;
            padding: 6px 15px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .hiring-title {
            font-size: 20px;
            font-weight: 700;
            color: #92400e;
            margin-bottom: 10px;
        }
        
        .hiring-text {
            color: #b45309;
            font-size: 15px;
            line-height: 1.6;
        }
        
        /* Message card */
        .message-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
        }
        
        .message-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
            color: #1e293b;
            font-size: 18px;
            font-weight: 600;
        }
        
        .message-content {
            background: #f8fafc;
            padding: 20px;
            border-radius: 12px;
            color: #334155;
            font-size: 15px;
            line-height: 1.8;
            border-left: 4px solid #667eea;
            white-space: pre-wrap;
        }
        
        /* Action buttons */
        .action-buttons {
            display: flex;
            gap: 15px;
            margin: 35px 0;
            flex-wrap: wrap;
        }
        
        .btn {
            flex: 1;
            min-width: 160px;
            padding: 14px 25px;
            border-radius: 10px;
            text-align: center;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }
        
        .btn-secondary {
            background: #f1f5f9;
            color: #334155;
            border: 1px solid #cbd5e1;
        }
        
        .btn-secondary:hover {
            background: #e2e8f0;
            transform: translateY(-2px);
        }
        
        .btn-success {
            background: #10b981;
            color: white;
        }
        
        .btn-success:hover {
            background: #059669;
            transform: translateY(-2px);
        }
        
        /* Meta info */
        .meta-info {
            background: #f8fafc;
            border-radius: 12px;
            padding: 20px;
            margin: 25px 0;
            border: 1px dashed #cbd5e1;
        }
        
        .meta-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .meta-row:last-child {
            border-bottom: none;
        }
        
        .meta-label {
            color: #64748b;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .meta-value {
            color: #1e293b;
            font-weight: 600;
            font-size: 14px;
        }
        
        .status-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
            background: #fef3c7;
            color: #92400e;
        }
        
        .status-badge.new {
            background: #dbeafe;
            color: #1e40af;
        }
        
        /* Footer */
        .email-footer {
            background: #1e293b;
            padding: 30px;
            text-align: center;
        }
        
        .footer-logo {
            margin-bottom: 20px;
        }
        
        .footer-text {
            color: #94a3b8;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .footer-link {
            color: #cbd5e1;
            text-decoration: none;
            font-size: 13px;
            transition: color 0.3s ease;
        }
        
        .footer-link:hover {
            color: #667eea;
        }
        
        .copyright {
            color: #64748b;
            font-size: 12px;
            border-top: 1px solid #334155;
            padding-top: 20px;
        }
        
        /* Responsive */
        @media (max-width: 600px) {
            .email-container {
                border-radius: 12px;
                margin: 0 15px;
            }
            
            .email-header {
                padding: 30px 20px;
            }
            
            .email-header h1 {
                font-size: 24px;
            }
            
            .email-content {
                padding: 30px 20px;
            }
            
            .info-grid {
                grid-template-columns: 1fr;
                gap: 8px;
            }
            
            .info-label {
                margin-bottom: -5px;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
            
            .meta-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="email-wrapper" style="width: 100%; table-layout: fixed; background-color: #f4f7fc; padding: 40px 0;">
        <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
            <tr>
                <td align="center">
                    <!-- Main Email Container -->
                    <div class="email-container" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);">
                        
                        <!-- Header -->
                        <div class="email-header" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 40px 30px; text-align: center;">
                            <div class="header-icon" style="width: 80px; height: 80px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; border: 3px solid rgba(255, 255, 255, 0.3);">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z" fill="white"/>
                                </svg>
                            </div>
                            <h1 style="color: #ffffff; font-size: 28px; font-weight: 700; margin-bottom: 10px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">New Contact Form Submission</h1>
                            <p style="color: rgba(255, 255, 255, 0.9); font-size: 16px;">Someone has reached out through your portfolio website</p>
                            {{-- @if(isset($data['is_hiring']) && $data['is_hiring'] == '1') --}}
                                <div class="submission-badge" style="display: inline-block; background: rgba(255, 255, 255, 0.25); padding: 8px 20px; border-radius: 50px; color: white; font-size: 14px; font-weight: 600; margin-top: 15px; border: 1px solid rgba(255, 255, 255, 0.3);">
                                    🚀 Hiring Inquiry
                                </div>
                            {{-- @else --}}
                                <div class="submission-badge" style="display: inline-block; background: rgba(255, 255, 255, 0.25); padding: 8px 20px; border-radius: 50px; color: white; font-size: 14px; font-weight: 600; margin-top: 15px; border: 1px solid rgba(255, 255, 255, 0.3);">
                                    📝 General Inquiry
                                </div>
                            {{-- @endif --}}
                        </div>
                        
                        <!-- Content -->
                        <div class="email-content" style="padding: 40px 30px; background: #ffffff;">
                            
                            <!-- Sender Information -->
                            <div class="sender-card" style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-radius: 16px; padding: 25px; margin-bottom: 30px; border: 1px solid #e2e8f0;">
                                <div class="sender-title" style="font-size: 18px; font-weight: 600; color: #1e293b; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #667eea; display: flex; align-items: center; gap: 8px;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V20H20V18C20 15.34 14.67 14 12 14Z" fill="#667eea"/>
                                    </svg>
                                    Sender Details
                                </div>
                                
                                <div class="info-grid" style="display: grid; grid-template-columns: 120px 1fr; gap: 15px;">
                                    <div class="info-label" style="font-weight: 600; color: #64748b; font-size: 14px;">Full Name:</div>
                                    <div class="info-value" style="color: #1e293b; font-size: 16px; font-weight: 600;"></div>
                                    
                                    <div class="info-label" style="font-weight: 600; color: #64748b; font-size: 14px;">Email Address:</div>
                                    <div class="info-value" style="color: #1e293b; font-size: 16px;">
                                        {{-- <a href="mailto:{{ $data['email'] }}" style="color: #667eea; text-decoration: none;"></a> --}}
                                    </div>
                                    
                                    <div class="info-label" style="font-weight: 600; color: #64748b; font-size: 14px;">Subject:</div>
                                    <div class="info-value" style="color: #1e293b; font-size: 16px;"></div>
                                </div>
                            </div>
                            
                            <!-- Hiring Section (if applicable) -->
                            {{-- @if(isset($data['is_hiring']) && $data['is_hiring'] == '1') --}}
                                <div class="hiring-section" style="background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-radius: 16px; padding: 25px; margin-bottom: 30px; border: 2px solid #f59e0b; position: relative; overflow: hidden;">
                                    <div class="hiring-badge" style="display: inline-block; background: #f59e0b; color: white; padding: 6px 15px; border-radius: 50px; font-size: 14px; font-weight: 600; margin-bottom: 15px;">
                                        🎯 JOB OPPORTUNITY
                                    </div>
                                    <div class="hiring-title" style="font-size: 20px; font-weight: 700; color: #92400e; margin-bottom: 10px;">
                                        This is a Hiring Inquiry!
                                    </div>
                                    <div class="hiring-text" style="color: #b45309; font-size: 15px; line-height: 1.6;">
                                        The sender is interested in discussing a job opportunity. This could be a potential employment, contract, or freelance position. Respond promptly to explore this opportunity further.
                                    </div>
                                </div>
                            {{-- @endif --}}
                            
                            <!-- Message -->
                            <div class="message-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 25px; margin-bottom: 30px;">
                                <div class="message-header" style="display: flex; align-items: center; gap: 10px; margin-bottom: 15px; color: #1e293b; font-size: 18px; font-weight: 600;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 2H4C2.9 2 2 2.9 2 4V22L6 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2Z" fill="#667eea"/>
                                    </svg>
                                    Message:
                                </div>
                                <div class="message-content" style="background: #f8fafc; padding: 20px; border-radius: 12px; color: #334155; font-size: 15px; line-height: 1.8; border-left: 4px solid #667eea; white-space: pre-wrap;">
                                    {{-- {{ $data['message'] }} --}}
                                </div>
                            </div>
                            
                            <!-- Quick Actions -->
                            <div class="action-buttons" style="display: flex; gap: 15px; margin: 35px 0; flex-wrap: wrap;">
                                {{-- <a href="mailto:{{ $data['email'] }}?subject=Re: {{ $data['subject'] }}" class="btn btn-primary" style="flex: 1; min-width: 160px; padding: 14px 25px; border-radius: 10px; text-align: center; text-decoration: none; font-weight: 600; font-size: 14px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; display: inline-flex; align-items: center; justify-content: center; gap: 8px; box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);"> --}}
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z" fill="white"/>
                                    </svg>
                                    Reply via Email
                                {{-- </a> --}}
                                
                                <a href="#" class="btn btn-secondary" style="flex: 1; min-width: 160px; padding: 14px 25px; border-radius: 10px; text-align: center; text-decoration: none; font-weight: 600; font-size: 14px; background: #f1f5f9; color: #334155; border: 1px solid #cbd5e1; display: inline-flex; align-items: center; justify-content: center; gap: 8px;">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 13H13V19H11V13H5V11H11V5H13V11H19V13Z" fill="#334155"/>
                                    </svg>
                                    Add to CRM
                                </a>
                                
                                <a href="#" class="btn btn-success" style="flex: 1; min-width: 160px; padding: 14px 25px; border-radius: 10px; text-align: center; text-decoration: none; font-weight: 600; font-size: 14px; background: #10b981; color: white; display: inline-flex; align-items: center; justify-content: center; gap: 8px;">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 16.17L4.83 12L3.41 13.41L9 19L21 7L19.59 5.59L9 16.17Z" fill="white"/>
                                    </svg>
                                    Mark as Read
                                </a>
                            </div>
                            
                            <!-- Meta Information -->
                            <div class="meta-info" style="background: #f8fafc; border-radius: 12px; padding: 20px; margin: 25px 0; border: 1px dashed #cbd5e1;">
                                <div class="meta-row" style="display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px solid #e2e8f0;">
                                    <span class="meta-label" style="color: #64748b; font-size: 14px; display: flex; align-items: center; gap: 5px;">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20Z" fill="#64748b"/>
                                            <path d="M12.5 7H11V13L16.2 16.2L17 14.9L12.5 12.2V7Z" fill="#64748b"/>
                                        </svg>
                                        Received:
                                    </span>
                                    <span class="meta-value" style="color: #1e293b; font-weight: 600; font-size: 14px;">{{ now()->format('F j, Y \a\t g:i A') }}</span>
                                </div>
                                
                                <div class="meta-row" style="display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px solid #e2e8f0;">
                                    <span class="meta-label" style="color: #64748b; font-size: 14px; display: flex; align-items: center; gap: 5px;">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V20H20V18C20 15.34 14.67 14 12 14Z" fill="#64748b"/>
                                        </svg>
                                        Contact ID:
                                    </span>
                                    <span class="meta-value" style="color: #1e293b; font-weight: 600; font-size: 14px;">#CONT-{{ strtoupper(substr(md5(rand()), 0, 8)) }}</span>
                                </div>
                                
                                <div class="meta-row" style="display: flex; justify-content: space-between; align-items: center; padding: 10px 0;">
                                    <span class="meta-label" style="color: #64748b; font-size: 14px; display: flex; align-items: center; gap: 5px;">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20Z" fill="#64748b"/>
                                            <path d="M13 7H11V13L16.2 16.2L17 14.9L13 12.2V7Z" fill="#64748b"/>
                                        </svg>
                                        Status:
                                    </span>
                                    <span class="meta-value" style="color: #1e293b; font-weight: 600; font-size: 14px;">
                                        <span class="status-badge new" style="display: inline-block; padding: 4px 12px; border-radius: 50px; font-size: 12px; font-weight: 600; background: #dbeafe; color: #1e40af;">New Submission</span>
                                    </span>
                                </div>
                            </div>
                            
                            <!-- Response Reminder -->
                            <div style="background: #ecfdf5; border-radius: 10px; padding: 15px; margin-top: 25px; border-left: 4px solid #10b981;">
                                <p style="color: #065f46; font-size: 14px; display: flex; align-items: center; gap: 8px; margin: 0;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20Z" fill="#10b981"/>
                                        <path d="M12.5 7H11V13L16.2 16.2L17 14.9L12.5 12.2V7Z" fill="#10b981"/>
                                    </svg>
                                    <strong>Quick Response Goal:</strong> Aim to respond within 24 hours for best engagement. Early responses increase conversion rates by 70%.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Footer -->
                        <div class="email-footer" style="background: #1e293b; padding: 30px; text-align: center;">
                            <div class="footer-logo" style="margin-bottom: 20px;">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20Z" fill="#667eea"/>
                                    <path d="M12 17L13.5 13.5L17 12L13.5 10.5L12 7L10.5 10.5L7 12L10.5 13.5L12 17Z" fill="#667eea"/>
                                </svg>
                            </div>
                            <div class="footer-text" style="color: #94a3b8; font-size: 14px; line-height: 1.6; margin-bottom: 20px;">
                                <strong>Lakshman Pal</strong><br>
                                Full Stack Developer & Technical Consultant
                            </div>
                            
                            <div class="footer-links" style="display: flex; justify-content: center; gap: 20px; margin-bottom: 20px; flex-wrap: wrap;">
                                <a href="#" class="footer-link" style="color: #cbd5e1; text-decoration: none; font-size: 13px;">Dashboard</a>
                                <a href="#" class="footer-link" style="color: #cbd5e1; text-decoration: none; font-size: 13px;">All Messages</a>
                                <a href="#" class="footer-link" style="color: #cbd5e1; text-decoration: none; font-size: 13px;">Settings</a>
                                <a href="#" class="footer-link" style="color: #cbd5e1; text-decoration: none; font-size: 13px;">Help</a>
                            </div>
                            
                            <div class="copyright" style="color: #64748b; font-size: 12px; border-top: 1px solid #334155; padding-top: 20px;">
                                &copy; {{ date('Y') }} Lakshman Pal. All rights reserved.<br>
                                This is an automated notification from your portfolio website. Please do not reply to this email.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Email Preferences -->
                    <div style="max-width: 600px; margin: 20px auto 0; text-align: center; color: #94a3b8; font-size: 12px;">
                        <p style="margin-bottom: 8px;">This email was sent because someone filled out the contact form on your portfolio.</p>
                        <a href="#" style="color: #667eea; text-decoration: none; margin: 0 5px;">View in Browser</a> | 
                        <a href="#" style="color: #667eea; text-decoration: none; margin: 0 5px;">Notification Settings</a> | 
                        <a href="#" style="color: #667eea; text-decoration: none; margin: 0 5px;">Unsubscribe</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>