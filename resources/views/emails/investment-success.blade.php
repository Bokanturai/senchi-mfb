<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment Inquiry Received</title>
    <style>
        /* Fluid hybrid responsive email client overrides */
        body {
            margin: 0;
            padding: 0;
            width: 100% !important;
            background-color: #F9FAF6;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }
        table, td {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }
        /* Mobile adjustments */
        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
                padding: 10px !important;
            }
            .content-block {
                padding: 20px !important;
            }
            .title {
                font-size: 24px !important;
                line-height: 30px !important;
            }
            .stat-box {
                display: block !important;
                width: 100% !important;
                margin-bottom: 10px !important;
            }
        }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #F9FAF6; color: #12180B;">
    <!-- Main Email Container Table -->
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #F9FAF6; padding: 30px 0;">
        <tr>
            <td align="center" valign="top">
                
                <!-- Email Core Frame (600px width limit) -->
                <table class="email-container" width="600" cellpadding="0" cellspacing="0" border="0" style="background-color: #ffffff; border: 1px solid #E6EAD8; border-radius: 24px; box-shadow: 0 4px 12px rgba(166, 196, 85, 0.05); overflow: hidden;">
                    
                    <!-- Premium Brand Header -->
                    <tr>
                        <td align="center" style="background-color: #12180B; padding: 40px 20px; border-bottom: 4px solid #A6C455;">
                            <!-- MFB logo representation in HTML table -->
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td style="background-color: #A6C455; padding: 10px; border-radius: 12px;" align="center" valign="middle">
                                        <!-- Minimal Leaf/Globe visual -->
                                        <span style="font-size: 20px; color: #ffffff; font-weight: bold; line-height: 1;">🌱</span>
                                    </td>
                                    <td style="padding-left: 15px; text-align: left;">
                                        <div style="font-size: 20px; font-weight: 800; color: #ffffff; letter-spacing: 1px; line-height: 1;">SENCHI</div>
                                        <div style="font-size: 9px; font-weight: bold; color: #A6C455; letter-spacing: 2px; text-transform: uppercase; margin-top: 4px;">Microfinance Bank</div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Body Content Frame -->
                    <tr>
                        <td class="content-block" style="padding: 40px 30px;">
                            
                            <!-- Greeting & Intro -->
                            <p style="font-size: 16px; font-weight: bold; color: #819b3d; text-transform: uppercase; letter-spacing: 1px; margin: 0 0 10px 0;">INVESTMENT PORTFOLIO INQUIRY</p>
                            <h1 class="title" style="font-size: 28px; font-weight: 800; line-height: 34px; color: #12180B; margin: 0 0 15px 0;">Hello, {{ $data['first_name'] }}!</h1>
                            <p style="font-size: 15px; line-height: 24px; color: #4b523f; margin: 0 0 30px 0;">
                                Thank you for your interest in investing in **Senchi Microfinance Bank**. We have successfully received your inquiry request. Our investment desk will compile a comprehensive investor proposal kit tailored for you and contact you shortly.
                            </p>

                            <!-- Reference Code Shimmer Badge -->
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom: 30px;">
                                <tr>
                                    <td align="center" style="background-color: #F9FAF6; border: 1px dashed #A6C455; border-radius: 16px; padding: 20px;">
                                        <span style="font-size: 11px; font-weight: bold; color: #819b3d; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 5px;">Tracking Reference ID</span>
                                        <span style="font-size: 20px; font-weight: 900; color: #12180B; letter-spacing: 1.5px;">{{ $data['ref_code'] }}</span>
                                    </td>
                                </tr>
                            </table>

                            <!-- Details Table -->
                            <h3 style="font-size: 16px; font-weight: 700; color: #12180B; border-bottom: 2px solid #F9FAF6; padding-bottom: 8px; margin: 0 0 15px 0;">Summary of Request</h3>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom: 30px;">
                                <tr>
                                    <td width="35%" style="padding: 10px 0; font-size: 13px; font-weight: bold; color: #7a826d; border-bottom: 1px solid #F9FAF6;">Applicant Name:</td>
                                    <td style="padding: 10px 0; font-size: 14px; font-weight: bold; color: #12180B; border-bottom: 1px solid #F9FAF6;">{{ $data['first_name'] }} {{ $data['last_name'] }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0; font-size: 13px; font-weight: bold; color: #7a826d; border-bottom: 1px solid #F9FAF6;">Email Address:</td>
                                    <td style="padding: 10px 0; font-size: 14px; font-weight: bold; color: #12180B; border-bottom: 1px solid #F9FAF6;">{{ $data['email'] }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0; font-size: 13px; font-weight: bold; color: #7a826d; border-bottom: 1px solid #F9FAF6;">Phone Number:</td>
                                    <td style="padding: 10px 0; font-size: 14px; font-weight: bold; color: #12180B; border-bottom: 1px solid #F9FAF6;">{{ $data['phone'] }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0; font-size: 13px; font-weight: bold; color: #7a826d; border-bottom: 1px solid #F9FAF6;">Investment Tier:</td>
                                    <td style="padding: 10px 0; font-size: 14px; font-weight: bold; color: #A6C455; border-bottom: 1px solid #F9FAF6;">{{ $data['amount_tier_name'] }}</td>
                                </tr>
                                @if(!empty($data['message']))
                                <tr>
                                    <td style="padding: 10px 0; font-size: 13px; font-weight: bold; color: #7a826d; border-bottom: 1px solid #F9FAF6;" valign="top">Special Requests:</td>
                                    <td style="padding: 10px 0; font-size: 13px; color: #4b523f; border-bottom: 1px solid #F9FAF6; line-height: 20px;">{{ $data['message'] }}</td>
                                </tr>
                                @endif
                            </table>

                            <!-- Next Steps Guidelines -->
                            <h3 style="font-size: 16px; font-weight: 700; color: #12180B; border-bottom: 2px solid #F9FAF6; padding-bottom: 8px; margin: 0 0 15px 0;">What happens next?</h3>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom: 10px;">
                                <tr>
                                    <td width="30" valign="top" style="font-size: 14px; font-weight: bold; color: #A6C455; padding-bottom: 10px;">1.</td>
                                    <td style="font-size: 13px; line-height: 18px; color: #4b523f; padding-bottom: 10px;">
                                        An investment specialist reviews your portfolio profile and schedules a brief discovery call.
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" style="font-size: 14px; font-weight: bold; color: #A6C455; padding-bottom: 10px;">2.</td>
                                    <td style="font-size: 13px; line-height: 18px; color: #4b523f; padding-bottom: 10px;">
                                        We dispatch our audited financial statements and capital structure documents to your email.
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" style="font-size: 14px; font-weight: bold; color: #A6C455; padding-bottom: 10px;">3.</td>
                                    <td style="font-size: 13px; line-height: 18px; color: #4b523f; padding-bottom: 10px;">
                                        Once terms are agreed, standard CBN investment documents are completed and funds locked in with NDIC oversight.
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer Frame -->
                    <tr>
                        <td align="center" style="background-color: #12180B; padding: 30px; text-align: center; border-top: 1px solid #E6EAD8;">
                            <p style="font-size: 11px; color: #7a826d; margin: 0 0 10px 0;">
                                CBN Licensed MFB • NDIC Insured Deposit Account Guarantee
                            </p>
                            <p style="font-size: 11px; color: #7a826d; margin: 0 0 20px 0;">
                                © {{ date('Y') }} Senchi Microfinance Bank. All rights reserved.
                            </p>
                            
                            <!-- Support links -->
                            <p style="font-size: 11px; margin: 0;">
                                <a href="https://senchimfb.com/support" style="color: #A6C455; text-decoration: none; font-weight: bold;">Help Center</a>
                                <span style="color: #3b4231; padding: 0 10px;">|</span>
                                <a href="https://senchimfb.com/terms" style="color: #A6C455; text-decoration: none; font-weight: bold;">Investment Terms</a>
                            </p>
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>
</body>
</html>
