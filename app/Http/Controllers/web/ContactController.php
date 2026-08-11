<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public  function index(){
        return view('web.contact');
    }
    public function hireMe(){
        return view('web.hire-me');
    }
     public function store(Request $request){
        $data = $request->validate([
            "name"=>'nullable|string|max:255',
            "email"=>'nullable|email|max:255',
            "subject"=>'nullable|string|max:255',
            "is_hiring"=>'nullable|boolean',
            "message"=>'nullable|string',
        ]);
        
        $contact = Contact::create($data);
        
        if($contact){
            // Send email using the sendMail function
            $this->sendMail(
                $data['name'] ?? 'Anonymous',
                $data['email'] ?? 'no-reply@example.com',
                $data['subject'] ?? 'No Subject',
                $data['is_hiring'] ?? false,
                $data['message'] ?? 'No Message'
            );
            
            return redirect()->back()->with('success', 'Message sent successfully!');
        }
        
        return redirect()->back()->with('error', 'Failed to send message.');
    }
     public function sendMail($name, $email, $subject, $is_hiring, $message){
        
        // Build the email HTML content
        $html = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>New Contact Form Submission</title>
            <style>
                body {
                    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
                    background-color: #f4f7fc;
                    margin: 0;
                    padding: 0;
                }
                .email-wrapper {
                    width: 100%;
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
                .email-header {
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    padding: 40px 30px;
                    text-align: center;
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
                .email-header h1 {
                    color: #ffffff;
                    font-size: 28px;
                    font-weight: 700;
                    margin-bottom: 10px;
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
                }
                .email-content {
                    padding: 40px 30px;
                    background: #ffffff;
                }
                .sender-card {
                    background: #f8fafc;
                    border-radius: 16px;
                    padding: 25px;
                    margin-bottom: 30px;
                    border: 1px solid #e2e8f0;
                }
                .sender-title {
                    font-size: 18px;
                    font-weight: 600;
                    color: #1e293b;
                    margin-bottom: 20px;
                    padding-bottom: 10px;
                    border-bottom: 2px solid #667eea;
                }
                .info-row {
                    display: flex;
                    margin-bottom: 15px;
                    padding-bottom: 15px;
                    border-bottom: 1px solid #e2e8f0;
                }
                .info-row:last-child {
                    border-bottom: none;
                    margin-bottom: 0;
                    padding-bottom: 0;
                }
                .info-label {
                    font-weight: 600;
                    color: #64748b;
                    width: 100px;
                    font-size: 14px;
                }
                .info-value {
                    color: #1e293b;
                    font-size: 16px;
                    flex: 1;
                }
                .info-value a {
                    color: #667eea;
                    text-decoration: none;
                }
                .hiring-section {
                    background: #fef3c7;
                    border-radius: 16px;
                    padding: 25px;
                    margin-bottom: 30px;
                    border: 2px solid #f59e0b;
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
                .message-card {
                    background: #ffffff;
                    border: 1px solid #e2e8f0;
                    border-radius: 16px;
                    padding: 25px;
                    margin-bottom: 30px;
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
                }
                .action-buttons {
                    margin: 35px 0;
                    text-align: center;
                }
                .btn {
                    display: inline-block;
                    padding: 14px 32px;
                    border-radius: 10px;
                    text-decoration: none;
                    font-weight: 600;
                    font-size: 14px;
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    color: white;
                }
                .meta-info {
                    background: #f8fafc;
                    border-radius: 12px;
                    padding: 20px;
                    margin: 25px 0;
                }
                .meta-row {
                    display: flex;
                    justify-content: space-between;
                    padding: 10px 0;
                    border-bottom: 1px solid #e2e8f0;
                }
                .meta-row:last-child {
                    border-bottom: none;
                }
                .email-footer {
                    background: #1e293b;
                    padding: 30px;
                    text-align: center;
                    color: #94a3b8;
                    font-size: 14px;
                }
                .copyright {
                    color: #64748b;
                    font-size: 12px;
                    border-top: 1px solid #334155;
                    padding-top: 20px;
                }
            </style>
        </head>
        <body>
            <div class="email-wrapper">
                <div class="email-container">
                    
                    <!-- Header -->
                    <div class="email-header">
                        <div class="header-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="white">
                                <path d="M20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z"/>
                            </svg>
                        </div>
                        <h1>New Contact Form Submission</h1>
                        <p>Someone has reached out through your portfolio website</p>';
        
        // Add hiring badge if applicable
        if($is_hiring) {
            $html .= '<div class="submission-badge">🚀 Hiring Inquiry</div>';
        } else {
            $html .= '<div class="submission-badge">📝 General Inquiry</div>';
        }
        
        $html .= '</div>
                    
                    <!-- Content -->
                    <div class="email-content">
                        
                        <!-- Sender Information -->
                        <div class="sender-card">
                            <div class="sender-title">Sender Details</div>
                            
                            <div class="info-row">
                                <div class="info-label">Name:</div>
                                <div class="info-value"><strong>' . htmlspecialchars($name) . '</strong></div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">Email:</div>
                                <div class="info-value">
                                    <a href="mailto:' . htmlspecialchars($email) . '">' . htmlspecialchars($email) . '</a>
                                </div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">Subject:</div>
                                <div class="info-value">' . htmlspecialchars($subject) . '</div>
                            </div>
                        </div>';
        
        // Hiring section if applicable
        if($is_hiring) {
            $html .= '<div class="hiring-section">
                            <div class="hiring-badge">🎯 JOB OPPORTUNITY</div>
                            <div class="hiring-title">This is a Hiring Inquiry!</div>
                            <div class="hiring-text">
                                The sender is interested in discussing a job opportunity. This could be a potential employment, contract, or freelance position. Respond promptly to explore this opportunity further.
                            </div>
                        </div>';
        }
        
        // Message
        $html .= '<div class="message-card">
                            <div class="message-header">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#667eea">
                                    <path d="M20 2H4C2.9 2 2 2.9 2 4V22L6 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2Z"/>
                                </svg>
                                Message:
                            </div>
                            <div class="message-content">
                                ' . nl2br(htmlspecialchars($message)) . '
                            </div>
                        </div>
                        
                        <!-- Quick Action -->
                        <div class="action-buttons">
                            <a href="mailto:' . htmlspecialchars($email) . '?subject=Re: ' . htmlspecialchars($subject) . '" class="btn">
                                ✉️ Reply to ' . htmlspecialchars($name) . '
                            </a>
                        </div>
                        
                        <!-- Meta Information -->
                        <div class="meta-info">
                            <div class="meta-row">
                                <span>Received:</span>
                                <span>' . date('F j, Y - g:i A') . '</span>
                            </div>
                            
                            <div class="meta-row">
                                <span>Contact ID:</span>
                                <span>#CONT-' . strtoupper(substr(md5(rand()), 0, 8)) . '</span>
                            </div>
                            
                            <div class="meta-row">
                                <span>Status:</span>
                                <span style="color: #1e40af; font-weight: 600;">New Submission</span>
                            </div>
                        </div>
                        
                        <!-- Response Reminder -->
                        <div style="background: #ecfdf5; border-radius: 10px; padding: 15px; border-left: 4px solid #10b981;">
                            <p style="color: #065f46; margin: 0;">
                                <strong>Quick Response Goal:</strong> Aim to respond within 24 hours for best engagement.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Footer -->
                    <div class="email-footer">
                        <div style="margin-bottom: 20px;">
                            <strong>Lakshman Pal</strong><br>
                            Full Stack Developer & Technical Consultant
                        </div>
                        
                        <div class="copyright">
                            &copy; ' . date('Y') . ' Lakshman Pal. All rights reserved.<br>
                            This is an automated notification from your portfolio website.
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>';
        
        // Send the email
        try {
            Mail::html($html, function ($message) use ($email, $name, $subject) {
                $message->to('admin@example.com')
                        ->from($email, $name)
                        ->replyTo($email, $name)
                        ->subject('New Contact: ' . $subject);
            });
            
            return true;
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Mail sending failed: ' . $e->getMessage());
            return false;
        }
    }

    }
