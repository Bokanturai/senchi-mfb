<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Support Inquiry Received</title>
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
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td style="background-color: #A6C455; padding: 10px; border-radius: 12px;" align="center" valign="middle">
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
                            <p style="font-size: 16px; font-weight: bold; color: #819b3d; text-transform: uppercase; letter-spacing: 1px; margin: 0 0 10px 0;">CUSTOMER SUPPORT TICKET</p>
                            <h1 class="title" style="font-size: 28px; font-weight: 800; line-height: 34px; color: #12180B; margin: 0 0 15px 0;">New Support Inquiry Received</h1>
                            <p style="font-size: 15px; line-height: 24px; color: #4b523f; margin: 0 0 30px 0;">
                                A new customer support form submission has been received from the Senchi Microfinance Bank website. Below are the details of the request.
                            </p>

                            <!-- Reference Code Badge -->
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom: 30px;">
                                <tr>
                                    <td align="center" style="background-color: #F9FAF6; border: 1px dashed #A6C455; border-radius: 16px; padding: 20px;">
                                        <span style="font-size: 11px; font-weight: bold; color: #819b3d; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 5px;">Ticket Reference ID</span>
                                        <span style="font-size: 20px; font-weight: 900; color: #12180B; letter-spacing: 1.5px;">{{ $data['ref_code'] }}</span>
                                    </td>
                                </tr>
                            </table>

                            <!-- Details Table -->
                            <h3 style="font-size: 16px; font-weight: 700; color: #12180B; border-bottom: 2px solid #F9FAF6; padding-bottom: 8px; margin: 0 0 15px 0;">Customer Information</h3>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom: 30px;">
                                <tr>
                                    <td width="35%" style="padding: 10px 0; font-size: 13px; font-weight: bold; color: #7a826d; border-bottom: 1px solid #F9FAF6;">Customer Name:</td>
                                    <td style="padding: 10px 0; font-size: 14px; font-weight: bold; color: #12180B; border-bottom: 1px solid #F9FAF6;">{{ $data['first_name'] }} {{ $data['last_name'] }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0; font-size: 13px; font-weight: bold; color: #7a826d; border-bottom: 1px solid #F9FAF6;">Email Address:</td>
                                    <td style="padding: 10px 0; font-size: 14px; font-weight: bold; color: #12180B; border-bottom: 1px solid #F9FAF6;">
                                        <a href="mailto:{{ $data['email'] }}" style="color: #819b3d; text-decoration: none;">{{ $data['email'] }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0; font-size: 13px; font-weight: bold; color: #7a826d; border-bottom: 1px solid #F9FAF6;">Topic / Department:</td>
                                    <td style="padding: 10px 0; font-size: 14px; font-weight: bold; color: #A6C455; border-bottom: 1px solid #F9FAF6;">{{ $data['topic_name'] }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0; font-size: 13px; font-weight: bold; color: #7a826d; border-bottom: 1px solid #F9FAF6;" valign="top">Inquiry Message:</td>
                                    <td style="padding: 10px 0; font-size: 13px; color: #4b523f; border-bottom: 1px solid #F9FAF6; line-height: 20px;">{!! nl2br(e($data['message'])) !!}</td>
                                </tr>
                            </table>

                            <!-- Action Guidelines -->
                            <h3 style="font-size: 16px; font-weight: 700; color: #12180B; border-bottom: 2px solid #F9FAF6; padding-bottom: 8px; margin: 0 0 15px 0;">Required Response SLA</h3>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom: 10px;">
                                <tr>
                                    <td width="30" valign="top" style="font-size: 14px; font-weight: bold; color: #A6C455; padding-bottom: 10px;">•</td>
                                    <td style="font-size: 13px; line-height: 18px; color: #4b523f; padding-bottom: 10px;">
                                        Please reply to the customer's email (<strong>{{ $data['email'] }}</strong>) within the 15-minute business hour SLA.
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" style="font-size: 14px; font-weight: bold; color: #A6C455; padding-bottom: 10px;">•</td>
                                    <td style="font-size: 13px; line-height: 18px; color: #4b523f; padding-bottom: 10px;">
                                        Log this request reference code <strong>{{ $data['ref_code'] }}</strong> in the support CRM dashboard for tracking.
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer Frame -->
                    <tr>
                        <td align="center" style="background-color: #12180B; padding: 30px; text-align: center; border-top: 1px solid #E6EAD8;">
                            <p style="font-size: 11px; color: #7a826d; margin: 0 0 10px 0;">
                                Senchi Microfinance Bank Support Notification System
                            </p>
                            <p style="font-size: 11px; color: #7a826d; margin: 0 0 20px 0;">
                                © {{ date('Y') }} Senchi Microfinance Bank. All rights reserved.
                            </p>
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>
</body>
</html>
