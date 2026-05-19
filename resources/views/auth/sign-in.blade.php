<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sign In | Senchi Microfinance Bank</title>
    <!-- Favicon & Apple Icons -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/logo/favicon.png') }}">
    <meta property="og:image" content="{{ asset('assets/img/logo.png') }}">
    
    
    <!-- Meta Descriptions for SEO -->
    <meta name="description" content="Access your Senchi Microfinance Bank account safely via our official mobile app. Experience biometric login, instant notifications, and 24/7 digital-first banking.">

    <!-- Premium Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Tailwind & Vite Styles -->
    @vite(['public/assets/css/app.css', 'public/assets/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', 'Outfit', sans-serif;
            background-color: var(--color-brand-cream);
        }
        
        .font-display {
            font-family: 'Outfit', sans-serif;
        }

        .grid-bg {
            background-image: radial-gradient(rgba(166, 196, 85, 0.12) 1px, transparent 1px);
            background-size: 24px 24px;
        }

        @keyframes float-slow {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(3deg); }
        }

        .animate-float-1 {
            animation: float-slow 7s ease-in-out infinite;
        }
    </style>
</head>
<body class="text-brand-dark overflow-x-hidden antialiased bg-brand-cream selection:bg-primary/30 selection:text-brand-dark min-h-screen flex flex-col justify-between">

    <!-- Decorative background elements -->
    <div class="absolute top-0 left-0 w-full h-[800px] overflow-hidden pointer-events-none z-0">
        <div class="absolute top-[-10%] left-[-10%] w-[50vw] h-[50vw] rounded-full bg-gradient-to-tr from-primary/15 to-primary/5 blur-[120px] animate-float-1"></div>
        <div class="absolute top-0 left-0 w-full h-full grid-bg opacity-50"></div>
    </div>

    <!-- SIMPLE NAVIGATION HEADER -->
    <header class="relative z-10 w-full px-4 sm:px-6 lg:px-8 py-6">
        <nav class="max-w-7xl mx-auto flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl overflow-hidden shadow-md shadow-primary/10 transform group-hover:scale-105 transition-all flex items-center justify-center bg-white p-1">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Senchi MFB Logo" class="w-full h-full object-contain">
                </div>
                <div class="flex flex-col">
                    <span class="font-display font-extrabold text-xl tracking-tight text-brand-dark leading-none">SENCHI</span>
                    <span class="text-[9px] font-bold tracking-widest text-primary-dark uppercase mt-0.5">Microfinance Bank</span>
                </div>
            </a>

            <!-- Back to website link -->
            <a href="/" class="flex items-center gap-2 text-sm font-bold text-brand-dark/75 hover:text-primary-dark transition-all px-4 py-2 rounded-xl bg-white/40 border border-brand-dark/5 hover:bg-white/80">
                <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to Home
            </a>
        </nav>
    </header>

    <!-- MAIN APP PROMO CONTENT -->
    <main class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex-grow flex items-center">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center w-full">
            
            <!-- Left Column: Marketing Content & App benefits -->
            <div class="lg:col-span-7 flex flex-col items-start space-y-8">
                <!-- Promo Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-primary/10 border border-primary/20 text-primary-dark font-semibold text-xs tracking-wider uppercase shadow-sm">
                    <i data-lucide="smartphone" class="w-4 h-4 text-primary-dark"></i> Senchi Mobile Banking
                </div>

                <!-- Capture Title -->
                <h1 class="font-display font-extrabold text-4xl sm:text-5xl lg:text-6xl tracking-tight leading-[1.1] text-brand-dark">
                    Your Account, <br class="hidden sm:inline">
                    <span class="relative inline-block text-transparent bg-clip-text bg-gradient-to-r from-primary-dark via-primary to-primary-light">Closer Than Ever.</span>
                </h1>

                <!-- Short description -->
                <p class="text-brand-dark/70 text-lg sm:text-xl font-medium max-w-xl leading-relaxed">
                    To access your savings, request instant loans, and perform swift secure transfers, please download the official **Senchi App** on your smartphone. We do not support web-based login for enhanced deposit safety.
                </p>

                <!-- Interactive triggers - updates phone mockups on click -->
                <div class="space-y-4 w-full max-w-lg">
                    <!-- Feature Item 1 -->
                    <button class="feature-trigger text-left w-full p-4 rounded-2xl border transition-all duration-300 flex items-start gap-4">
                        <div class="icon-indicator w-10 h-10 rounded-xl bg-primary/10 text-primary-dark flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="shield-check" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h3 class="font-display font-bold text-base text-brand-dark">Biometric Safe Access</h3>
                            <p class="text-xs text-brand-dark/60 font-medium mt-1">Unlock account instantly with face scans or fingerprint sensors. Device-bound encryption prevents unauthorized access.</p>
                        </div>
                    </button>

                    <!-- Feature Item 2 -->
                    <button class="feature-trigger text-left w-full p-4 rounded-2xl border transition-all duration-300 flex items-start gap-4">
                        <div class="icon-indicator w-10 h-10 rounded-xl bg-primary/10 text-primary-dark flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="wallet" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h3 class="font-display font-bold text-base text-brand-dark">Send & Receive Money</h3>
                            <p class="text-xs text-brand-dark/60 font-medium mt-1">Transfer funds to all commercial banks in Nigeria instantly. Generate professional PDF e-receipts right away.</p>
                        </div>
                    </button>

                    <!-- Feature Item 3 -->
                    <button class="feature-trigger text-left w-full p-4 rounded-2xl border transition-all duration-300 flex items-start gap-4">
                        <div class="icon-indicator w-10 h-10 rounded-xl bg-primary/10 text-primary-dark flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="trending-up" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h3 class="font-display font-bold text-base text-brand-dark">High Yield Savings & Investments</h3>
                            <p class="text-xs text-brand-dark/60 font-medium mt-1">Earn 16.5% interest on lock options. Start target plans, set automated savings, and watch money compound.</p>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Right Column: Interactive Phone Mockup & Download CTAs -->
            <div class="lg:col-span-5 flex flex-col items-center">
                <!-- Glassmorphic Phone Container -->
                <div class="relative w-[280px] sm:w-[320px] aspect-[9/18.5] bg-brand-dark border-[12px] border-brand-dark rounded-[40px] phone-shadow flex flex-col overflow-hidden select-none mb-8 animate-float-1">
                    <!-- Dynamic Phone Bezel parts -->
                    <div class="absolute top-0 inset-x-0 h-6 bg-brand-dark z-30 flex items-center justify-center">
                        <div class="w-20 h-4 bg-brand-dark rounded-full"></div>
                    </div>
                    
                    <!-- Simulated UI Screen Carousel -->
                    <div class="w-full h-full bg-[#12180B] relative z-20 flex transition-transform duration-300 ease-out" id="phone-mockup-screens" style="width: 300%;">
                        
                        <!-- Slide 1: Secure Biometric Screen -->
                        <div class="phone-screen-slide w-1/3 h-full flex flex-col justify-between p-6 pt-10 text-white shrink-0 relative bg-brand-dark">
                            <!-- Status bar space -->
                            <div class="flex justify-between text-[10px] text-white/50 px-2 font-bold">
                                <span>9:41</span>
                                <div class="flex items-center gap-1">
                                    <i data-lucide="wifi" class="w-3 h-3"></i>
                                    <i data-lucide="battery" class="w-3.5 h-3.5"></i>
                                </div>
                            </div>
                            
                            <!-- Header logo -->
                            <div class="flex flex-col items-center pt-8 space-y-2">
                                <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center p-1 shadow-lg">
                                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo" class="w-full h-full object-contain">
                                </div>
                                <span class="font-display font-extrabold text-lg tracking-wider text-white">SENCHI</span>
                                <span class="text-[8px] font-bold tracking-widest text-primary uppercase">Safe Biometrics</span>
                            </div>

                            <!-- Lock/Scanning interface -->
                            <div class="flex flex-col items-center justify-center my-6 space-y-4">
                                <div class="w-24 h-24 rounded-full border border-primary/20 flex items-center justify-center bg-primary/5 relative">
                                    <div class="absolute inset-2 border-2 border-primary border-dashed rounded-full animate-spin opacity-50" style="animation-duration: 10s;"></div>
                                    <i data-lucide="fingerprint" class="w-12 h-12 text-primary pulse-glow rounded-full"></i>
                                </div>
                                <div class="text-center space-y-1">
                                    <h4 class="text-sm font-bold text-white">Sign In Account</h4>
                                    <p class="text-[10px] text-white/55">Touch the fingerprint sensor to unlock</p>
                                </div>
                            </div>

                            <!-- Footer notice -->
                            <div class="text-center py-2 text-[9px] font-semibold text-white/40 border-t border-white/5">
                                Secured with AES-256 Protocol
                            </div>
                        </div>

                        <!-- Slide 2: Dashboard UI Screen -->
                        <div class="phone-screen-slide w-1/3 h-full flex flex-col justify-between p-6 pt-10 text-white shrink-0 bg-brand-slate">
                            <!-- Header Info -->
                            <div class="flex justify-between items-center text-xs">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center text-primary-light font-bold text-xs font-sans">SA</div>
                                    <div class="flex flex-col">
                                        <span class="text-[8px] text-white/40 font-bold">WELCOME BACK</span>
                                        <span class="text-xs font-bold leading-none">Shafiu A.</span>
                                    </div>
                                </div>
                                <i data-lucide="bell" class="w-4 h-4 text-white/60"></i>
                            </div>

                            <!-- Balance View -->
                            <div class="bg-gradient-to-r from-primary-dark/20 to-primary/10 border border-white/10 p-4 rounded-2xl my-3 flex flex-col justify-between h-[120px]">
                                <div>
                                    <span class="text-[9px] text-white/50 uppercase font-bold tracking-wider">TOTAL BALANCE</span>
                                    <div class="flex items-center justify-between mt-1">
                                        <h3 class="text-xl font-extrabold text-white">₦534,200.00</h3>
                                        <i data-lucide="eye" class="w-4 h-4 text-primary"></i>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 pt-2 border-t border-white/5 text-[9px] text-primary font-bold">
                                    <i data-lucide="trending-up" class="w-3.5 h-3.5"></i> +₦14,230 interest accrued
                                </div>
                            </div>

                            <!-- Quick options -->
                            <div class="grid grid-cols-4 gap-2 text-center text-[8px] font-bold">
                                <div class="space-y-1.5 flex flex-col items-center">
                                    <div class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center"><i data-lucide="send" class="w-4 h-4 text-primary-light"></i></div>
                                    <span>Send</span>
                                </div>
                                <div class="space-y-1.5 flex flex-col items-center">
                                    <div class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center"><i data-lucide="arrow-down-left" class="w-4 h-4 text-primary-light"></i></div>
                                    <span>Receive</span>
                                </div>
                                <div class="space-y-1.5 flex flex-col items-center">
                                    <div class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center"><i data-lucide="zap" class="w-4 h-4 text-primary-light"></i></div>
                                    <span>Loans</span>
                                </div>
                                <div class="space-y-1.5 flex flex-col items-center">
                                    <div class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center"><i data-lucide="piggy-bank" class="w-4 h-4 text-primary-light"></i></div>
                                    <span>Savings</span>
                                </div>
                            </div>

                            <!-- Recent activities -->
                            <div class="mt-4 flex-grow">
                                <span class="text-[9px] text-white/40 uppercase font-bold tracking-wider">RECENT TRANSACTIONS</span>
                                <div class="space-y-2 mt-2">
                                    <div class="flex items-center justify-between p-2 rounded-xl bg-white/5">
                                        <div class="flex items-center gap-2">
                                            <div class="w-6 h-6 rounded-lg bg-emerald-500/10 flex items-center justify-center text-emerald-500"><i data-lucide="arrow-down-left" class="w-3.5 h-3.5"></i></div>
                                            <div class="flex flex-col text-[9px]"><span class="font-bold">Interbank Deposit</span><span class="text-[7px] text-white/40">10 mins ago</span></div>
                                        </div>
                                        <span class="text-[10px] font-bold text-emerald-400">+₦45,000</span>
                                    </div>
                                    <div class="flex items-center justify-between p-2 rounded-xl bg-white/5">
                                        <div class="flex items-center gap-2">
                                            <div class="w-6 h-6 rounded-lg bg-red-500/10 flex items-center justify-center text-red-500"><i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i></div>
                                            <div class="flex flex-col text-[9px]"><span class="font-bold">Transfer to Aminu</span><span class="text-[7px] text-white/40">1 hour ago</span></div>
                                        </div>
                                        <span class="text-[10px] font-bold text-white">-₦20,000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3: Savings Screens -->
                        <div class="phone-screen-slide w-1/3 h-full flex flex-col justify-between p-6 pt-10 text-white shrink-0 bg-brand-dark">
                            <div class="flex justify-between items-center text-xs">
                                <span class="font-bold">My Savings Goals</span>
                                <i data-lucide="plus" class="w-4 h-4 text-primary"></i>
                            </div>

                            <!-- Savings summary -->
                            <div class="my-4 text-center">
                                <span class="text-[9px] text-white/40 uppercase font-bold tracking-wider">Compounded Wealth</span>
                                <h3 class="text-2xl font-black text-white mt-1">₦380,450.00</h3>
                                <p class="text-[9px] text-primary mt-1 font-bold">🌱 Overall Interest: +16.5% p.a.</p>
                            </div>

                            <!-- List of Goals -->
                            <div class="space-y-3 flex-grow">
                                <!-- Goal 1 -->
                                <div class="p-3 rounded-2xl bg-white/5 border border-white/5 space-y-2">
                                    <div class="flex justify-between text-[10px] font-bold">
                                        <span>🏠 Rent Savings</span>
                                        <span class="text-primary-light">₦250k / ₦500k</span>
                                    </div>
                                    <div class="w-full bg-white/10 h-1.5 rounded-full overflow-hidden">
                                        <div class="bg-primary h-full rounded-full" style="width: 50%;"></div>
                                    </div>
                                    <div class="flex justify-between text-[7px] text-white/40">
                                        <span>Target: Dec 2026</span>
                                        <span>50% Complete</span>
                                    </div>
                                </div>
                                <!-- Goal 2 -->
                                <div class="p-3 rounded-2xl bg-white/5 border border-white/5 space-y-2">
                                    <div class="flex justify-between text-[10px] font-bold">
                                        <span>🌾 Agribusiness Capital</span>
                                        <span class="text-primary-light">₦130k / ₦300k</span>
                                    </div>
                                    <div class="w-full bg-white/10 h-1.5 rounded-full overflow-hidden">
                                        <div class="bg-primary h-full rounded-full" style="width: 43%;"></div>
                                    </div>
                                    <div class="flex justify-between text-[7px] text-white/40">
                                        <span>Target: Oct 2026</span>
                                        <span>43% Complete</span>
                                    </div>
                                </div>
                            </div>

                            <div class="text-[8px] text-center text-white/40 py-2">
                                CBN Insured & Licensed
                            </div>
                        </div>

                    </div>
                </div>

                <!-- DOWNLOAD ACTION SLAT -->
                <div class="w-full max-w-sm glass-card rounded-3xl p-6 border border-white/60 shadow-xl flex flex-col gap-4 text-center items-center">
                    <h3 class="font-display font-extrabold text-lg text-brand-dark">Get The App Now</h3>
                    <p class="text-xs text-brand-dark/50 font-bold max-w-xs leading-relaxed">
                        Scan this QR code with your phone camera or click below to install via the Google Play Store.
                    </p>

                    <!-- QR Code Grid -->
                    <div class="w-28 h-28 p-2 bg-white rounded-2xl border border-brand-dark/5 shadow-md flex items-center justify-center relative overflow-hidden">
                        <!-- Simulated modern vector QR code using neat CSS shapes -->
                        <div class="grid grid-cols-5 gap-1.5 w-full h-full opacity-90">
                            <div class="bg-brand-dark rounded-xs"></div>
                            <div class="bg-brand-dark rounded-xs"></div>
                            <div class="border-2 border-brand-dark rounded-xs"></div>
                            <div class="bg-brand-dark rounded-xs"></div>
                            <div class="bg-brand-dark rounded-xs"></div>

                            <div class="border-2 border-brand-dark rounded-xs"></div>
                            <div class="bg-white"></div>
                            <div class="bg-brand-dark rounded-xs"></div>
                            <div class="bg-white"></div>
                            <div class="border-2 border-brand-dark rounded-xs"></div>

                            <div class="bg-brand-dark rounded-xs"></div>
                            <div class="bg-brand-dark rounded-xs"></div>
                            <div class="bg-primary rounded-xs"></div>
                            <div class="bg-brand-dark rounded-xs"></div>
                            <div class="bg-brand-dark rounded-xs"></div>

                            <div class="border-2 border-brand-dark rounded-xs"></div>
                            <div class="bg-white"></div>
                            <div class="bg-brand-dark rounded-xs"></div>
                            <div class="bg-white font-bold text-center text-[7px] text-brand-dark flex items-center justify-center">S</div>
                            <div class="border-2 border-brand-dark rounded-xs"></div>

                            <div class="bg-brand-dark rounded-xs"></div>
                            <div class="bg-brand-dark rounded-xs"></div>
                            <div class="border-2 border-brand-dark rounded-xs"></div>
                            <div class="bg-brand-dark rounded-xs"></div>
                            <div class="bg-brand-dark rounded-xs"></div>
                        </div>
                        <!-- Mini Logo Badge Overlay -->
                        <div class="absolute inset-0 m-auto w-7 h-7 bg-white rounded-lg p-0.5 border border-brand-dark/5 flex items-center justify-center shadow-md">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo" class="w-full h-full object-contain">
                        </div>
                    </div>

                    <!-- Direct Google Play Store Button -->
                    <a href="https://play.google.com/store" target="_blank" class="w-full flex items-center justify-center gap-3 bg-brand-dark hover:bg-brand-dark/95 text-white py-3 px-6 rounded-2xl font-bold shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-0.5">
                        <!-- Play store mini custom vector SVG -->
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.25 1.5C3.05 1.5 2.85 1.6 2.7 1.75C2.55 1.9 2.5 2.1 2.5 2.3V21.7C2.5 21.9 2.55 22.1 2.7 22.25C2.85 22.4 3.05 22.5 3.25 22.5C3.4 22.5 3.55 22.45 3.7 22.35L21.3 12.35C21.5 12.25 21.6 12.1 21.6 12C21.6 11.9 21.5 11.75 21.3 11.65L3.7 1.65C3.55 1.55 3.4 1.5 3.25 1.5Z" fill="#A6C455"/>
                            <path d="M2.5 2.3V21.7C2.5 21.9 2.55 22.1 2.7 22.25C2.85 22.4 3.05 22.5 3.25 22.5L12 12L2.5 2.3Z" fill="#819b3d"/>
                            <path d="M12.0001 12L15.3501 15.35L21.3001 11.95C21.5001 11.85 21.6001 11.7 21.6001 11.6C21.6001 11.5 21.5001 11.35 21.3001 11.25L15.3501 8.65002L12.0001 12Z" fill="#b9d76c"/>
                        </svg>
                        <div class="text-left leading-none flex flex-col">
                            <span class="text-[9px] uppercase font-bold text-white/50 tracking-wider">GET IT ON</span>
                            <span class="text-sm font-extrabold tracking-tight mt-0.5">Google Play</span>
                        </div>
                    </a>

                    <!-- Toggle registration -->
                    <div class="pt-4 border-t border-brand-dark/5 w-full text-xs font-semibold text-brand-dark/50">
                        Don't have an account? <a href="/open-account" class="text-primary-dark hover:underline font-bold font-sans">Open one via the app</a>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- TRIPLE SECURITY / REGULATORY VALUE STRIP -->
    <section class="relative z-10 w-full bg-white/40 border-y border-brand-dark/5 py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 items-center justify-items-center text-center font-bold text-xs text-brand-dark/50">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary-dark">
                        <i data-lucide="shield-alert" class="w-4.5 h-4.5"></i>
                    </div>
                    <div class="text-left">
                        <p class="text-[9px] tracking-wider text-brand-dark/40 uppercase">CBN REGULATED</p>
                        <p class="text-brand-dark/80 font-extrabold">Fully Licensed</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary-dark">
                        <i data-lucide="landmark" class="w-4.5 h-4.5"></i>
                    </div>
                    <div class="text-left">
                        <p class="text-[9px] tracking-wider text-brand-dark/40 uppercase">NDIC INSURED</p>
                        <p class="text-brand-dark/80 font-extrabold">100% Deposit Safety</p>
                    </div>
                </div>
                <div class="flex items-center gap-3 col-span-2 md:col-span-1">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary-dark">
                        <i data-lucide="lock" class="w-4.5 h-4.5"></i>
                    </div>
                    <div class="text-left">
                        <p class="text-[9px] tracking-wider text-brand-dark/40 uppercase">DATA ENCRYPTION</p>
                        <p class="text-brand-dark/80 font-extrabold">AES-256 Protocol</p>
                    </div>
                </div>
                <div class="flex items-center gap-3 col-span-2 md:col-span-1">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary-dark">
                        <i data-lucide="check-circle-2" class="w-4.5 h-4.5"></i>
                    </div>
                    <div class="text-left">
                        <p class="text-[9px] tracking-wider text-brand-dark/40 uppercase">FRAUD PREVENTION</p>
                        <p class="text-brand-dark/80 font-extrabold">Device-Lock Security</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SIMPLE FOOTER -->
    <footer class="relative z-10 w-full py-6 text-center text-xs text-brand-dark/40 font-semibold border-t border-brand-dark/5 bg-white/20">
        <p>© {{ date('Y') }} Senchi Microfinance Bank. All rights reserved. CBN Licensed & NDIC Insured.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Render Lucide Icons
            lucide.createIcons();
        });
    </script>
</body>
</html>
