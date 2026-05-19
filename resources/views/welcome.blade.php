<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Senchi Microfinance Bank | Empowering Your Financial Growth</title>
    
    <!-- Favicon & Apple Icons -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/logo/favicon.png') }}">
    <meta property="og:image" content="{{ asset('assets/img/logo.png') }}">
    
    <!-- Meta Descriptions for SEO -->
    <meta name="description" content="Senchi Microfinance Bank offers flexible loan solutions, high-yield savings plans, and digital-first banking designed to empower individuals, small businesses, and communities. NDIC Insured & CBN Licensed.">
    <meta name="keywords" content="microfinance bank, micro loans, fast loans, business savings, Senchi MFB, agricultural loans, SME finance">
    <meta name="author" content="Senchi Microfinance Bank">
    <meta name="theme-color" content="#A6C455">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags (Social Media) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:title" content="Senchi Microfinance Bank - Digital-First Banking Solutions">
    <meta property="og:description" content="Get quick microloans, high-yield savings, and premium financial tools. CBN Licensed & NDIC Insured. 15-minute loan decisions.">
    <meta property="og:image" content="{{ asset('assets/img/logo/logo.png') }}">
    <meta property="og:site_name" content="Senchi MFB">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Senchi Microfinance Bank - Digital-First Banking">
    <meta name="twitter:description" content="Quick microloans, high-yield savings & premium financial tools. CBN Licensed & NDIC Insured.">
    <meta name="twitter:image" content="{{ asset('assets/img/logo/logo.png') }}">
    
    <!-- JSON-LD Structured Data for Search Engines -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "FinancialService",
        "name": "Senchi Microfinance Bank",
        "url": "{{ config('app.url') }}",
        "logo": "{{ asset('assets/img/logo/logo.png') }}",
        "description": "Digital-first microfinance bank offering quick loans, high-yield savings, and financial solutions for small businesses.",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "12 Senchi Street, Phase 2, Garki",
            "addressLocality": "Abuja",
            "addressCountry": "NG"
        },
        "contactPoint": {
            "@@type": "ContactPoint",
            "contactType": "Customer Support",
            "telephone": "+234-800-736244",
            "email": "support@senchimfb.com"
        },
        "sameAs": [
            "https://www.facebook.com/senchimfb",
            "https://www.twitter.com/senchimfb"
        ]
    }
    </script>

    <!-- Premium Google Fonts with Preload -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Lucide Icons CDN with Preload -->
    <script src="https://unpkg.com/lucide@latest" defer></script>

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

        /* Glassmorphism custom utilities */
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.4);
        }

        .glass-panel-dark {
            background: rgba(18, 24, 11, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Customized premium slider */
        input[type="range"] {
            -webkit-appearance: none;
            appearance: none;
            background: #E6EAD8;
            height: 6px;
            border-radius: 8px;
            outline: none;
        }

        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #A6C455;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(166, 196, 85, 0.4);
            transition: transform 0.1s ease, background-color 0.2s ease;
        }

        input[type="range"]::-webkit-slider-thumb:hover {
            transform: scale(1.2);
            background: #93b04c;
        }

        /* Custom subtle grid background */
        .grid-bg {
            background-image: radial-gradient(rgba(166, 196, 85, 0.15) 1px, transparent 1px);
            background-size: 24px 24px;
        }

        /* Floating blob animations */
        @keyframes float-slow {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }

        @keyframes float-slower {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(15px) rotate(-8deg); }
        }

        .animate-float-1 {
            animation: float-slow 8s ease-in-out infinite;
        }

        .animate-float-2 {
            animation: float-slower 12s ease-in-out infinite;
        }

        /* Accessibility - Screen Reader Only Content */
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .focus\:not-sr-only:focus {
            position: static;
            width: auto;
            height: auto;
            padding: inherit;
            margin: inherit;
            overflow: visible;
            clip: auto;
            white-space: normal;
        }

        /* Enhanced focus states for accessibility */
        a:focus-visible, button:focus-visible, input:focus-visible {
            outline: 2px solid #A6C455;
            outline-offset: 2px;
        }
    </style>
</head>
<body class="text-brand-dark overflow-x-hidden antialiased bg-brand-cream selection:bg-primary/30 selection:text-brand-dark">

    <!-- Skip to Main Content Link (Accessibility) -->
    <a href="#main-content" class="sr-only focus:not-sr-only absolute top-0 left-0 z-[999] bg-primary text-white px-4 py-2 rounded-br-lg">
        Skip to main content
    </a>

    <!-- Decorative background elements -->
    <div class="absolute top-0 left-0 w-full h-[1000px] overflow-hidden pointer-events-none z-0">
        <div class="absolute top-[-20%] left-[-10%] w-[60vw] h-[60vw] rounded-full bg-gradient-to-tr from-primary/20 to-primary/5 blur-[120px] animate-float-1"></div>
        <div class="absolute top-[40%] right-[-15%] w-[50vw] h-[50vw] rounded-full bg-gradient-to-bl from-primary/15 to-transparent blur-[100px] animate-float-2"></div>
        <div class="absolute top-0 left-0 w-full h-full grid-bg opacity-40"></div>
    </div>

    <!-- FLOAT FLOATING HEADER/NAVIGATION -->
    <header class="sticky top-0 z-50 transition-all duration-300 w-full px-4 sm:px-6 lg:px-8 py-4" id="main-header" role="banner">
        <nav class="max-w-7xl mx-auto glass-panel rounded-2xl shadow-lg shadow-primary/5 px-6 py-4 flex items-center justify-between transition-all duration-300" role="navigation" aria-label="Main navigation">
            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-3 group" aria-label="Senchi MFB Home">
                <div class="w-10 h-10 rounded-xl overflow-hidden shadow-md shadow-primary/10 transform group-hover:scale-105 transition-all flex items-center justify-center bg-white p-1">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Senchi Microfinance Bank Logo" class="w-full h-full object-contain">
                </div>
                <div class="flex flex-col">
                    <span class="font-display font-extrabold text-xl tracking-tight text-brand-dark leading-none">SENCHI</span>
                    <span class="text-[9px] font-bold tracking-widest text-primary-dark uppercase mt-0.5">Microfinance Bank</span>
                </div>
            </a>

            <!-- Desktop Links -->
            <div class="hidden md:flex items-center gap-8 font-medium">
                <a href="#services" class="text-brand-dark/75 hover:text-primary-dark transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all hover:after:w-full">Services</a>
                <a href="#loans" class="text-brand-dark/75 hover:text-primary-dark transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all hover:after:w-full">Loans</a>
                <a href="#accounts" class="text-brand-dark/75 hover:text-primary-dark transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all hover:after:w-full">Savings</a>
                <a href="#investment" class="text-brand-dark/75 hover:text-primary-dark transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all hover:after:w-full">Invest</a>
                <a href="#about-us" class="text-brand-dark/75 hover:text-primary-dark transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all hover:after:w-full">About Us</a>
                <a href="#support" class="text-brand-dark/75 hover:text-primary-dark transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all hover:after:w-full">Support</a>
            </div>

            <!-- Header CTAs -->
            <div class="hidden md:flex items-center gap-4">
                <a href="/sign-in" class="text-sm font-semibold hover:text-primary-dark transition-colors px-4 py-2">Sign In</a>
                <a href="/open-account" class="text-sm font-bold bg-primary hover:bg-primary-hover text-white shadow-md shadow-primary/20 hover:shadow-lg hover:shadow-primary/30 transition-all rounded-xl px-5 py-2.5 transform hover:-translate-y-0.5">Open Account</a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden p-2 rounded-xl hover:bg-primary/10 transition-colors focus:outline-none" aria-label="Toggle Menu">
                <svg id="menu-icon-open" class="w-6 h-6 text-brand-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
                <svg id="menu-icon-close" class="w-6 h-6 text-brand-dark hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </nav>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="hidden md:hidden absolute left-4 right-4 top-24 glass-panel rounded-2xl shadow-xl p-6 border border-white/40 flex flex-col gap-5 z-40 transform transition-all duration-300 opacity-0 scale-95 origin-top" role="navigation" aria-label="Mobile navigation" aria-expanded="false">
            <a href="#services" class="mobile-link text-lg font-semibold text-brand-dark/80 hover:text-primary transition-colors flex items-center gap-3">
                <i data-lucide="layers" class="w-5 h-5 text-primary" aria-hidden="true"></i> Services
            </a>
            <a href="#loans" class="mobile-link text-lg font-semibold text-brand-dark/80 hover:text-primary transition-colors flex items-center gap-3">
                <i data-lucide="wallet" class="w-5 h-5 text-primary" aria-hidden="true"></i> Loans
            </a>
            <a href="#accounts" class="mobile-link text-lg font-semibold text-brand-dark/80 hover:text-primary transition-colors flex items-center gap-3">
                <i data-lucide="trending-up" class="w-5 h-5 text-primary" aria-hidden="true"></i> Savings
            </a>
            <a href="#investment" class="mobile-link text-lg font-semibold text-brand-dark/80 hover:text-primary transition-colors flex items-center gap-3">
                <i data-lucide="bar-chart-2" class="w-5 h-5 text-primary" aria-hidden="true"></i> Invest
            </a>
            <a href="#about-us" class="mobile-link text-lg font-semibold text-brand-dark/80 hover:text-primary transition-colors flex items-center gap-3">
                <i data-lucide="info" class="w-5 h-5 text-primary" aria-hidden="true"></i> About Us
            </a>
            <a href="#support" class="mobile-link text-lg font-semibold text-brand-dark/80 hover:text-primary transition-colors flex items-center gap-3">
                <i data-lucide="help-circle" class="w-5 h-5 text-primary" aria-hidden="true"></i> Support
            </a>
            <hr class="border-brand-dark/5 my-2">
            <div class="flex flex-col gap-3">
                <a href="/sign-in" class="mobile-link w-full py-3 text-center font-semibold rounded-xl border border-brand-dark/10 hover:bg-brand-dark/5 transition-colors">Sign In</a>
                <a href="/open-account" class="mobile-link w-full py-3 text-center font-bold bg-primary hover:bg-primary-hover text-white rounded-xl shadow-lg shadow-primary/20 transition-all">Open Account</a>
            </div>
        </div>
    </header>

    <!-- PREMIUM HERO SECTION -->
    <main class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-20 lg:pt-14 lg:pb-32" id="main-content">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Hero Left: Branding & Headlines -->
            <div class="lg:col-span-7 flex flex-col items-start text-left space-y-6">
                <!-- Tagline Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-primary/10 border border-primary/20 text-primary-dark font-semibold text-xs tracking-wider uppercase shadow-sm">
                    <span class="flex h-2 w-2 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                    </span>
                    🌱 Next-Gen Microfinance for Everyone
                </div>

                <!-- Main Captivating Title -->
                <h1 class="font-display font-extrabold text-4xl sm:text-5xl lg:text-[3.75rem] tracking-tight leading-[1.1] text-brand-dark">
                    Empowering Your <br class="hidden sm:inline">
                    <span class="relative inline-block text-transparent bg-clip-text bg-gradient-to-r from-primary-dark via-primary to-primary-light">Financial Growth,</span><br>
                    One Step at a Time.
                </h1>

                <!-- Supporting Description -->
                <p class="text-brand-dark/70 text-lg sm:text-xl font-medium max-w-2xl leading-relaxed">
                    Senchi Microfinance Bank delivers quick digital loans, ultra-high yield savings accounts, and tailored financial tools for small businesses. Experience hassle-free microfinance today.
                </p>

                <!-- Value Badges -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 w-full pt-2">
                    <div class="flex items-center gap-2.5 bg-white/50 border border-white/60 p-3 rounded-2xl">
                        <div class="w-8 h-8 rounded-lg bg-primary/15 flex items-center justify-center text-primary-dark">
                            <i data-lucide="percent" class="w-4.5 h-4.5"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs font-bold text-brand-dark/40 uppercase tracking-widest leading-none">UP TO</span>
                            <span class="text-sm font-extrabold text-brand-dark">16.5% p.a. Savings</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2.5 bg-white/50 border border-white/60 p-3 rounded-2xl">
                        <div class="w-8 h-8 rounded-lg bg-primary/15 flex items-center justify-center text-primary-dark">
                            <i data-lucide="zap" class="w-4.5 h-4.5"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs font-bold text-brand-dark/40 uppercase tracking-widest leading-none">DECISION IN</span>
                            <span class="text-sm font-extrabold text-brand-dark">15-Min Loan</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2.5 bg-white/50 border border-white/60 p-3 rounded-2xl col-span-2 sm:col-span-1">
                        <div class="w-8 h-8 rounded-lg bg-primary/15 flex items-center justify-center text-primary-dark">
                            <i data-lucide="shield-check" class="w-4.5 h-4.5"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs font-bold text-brand-dark/40 uppercase tracking-widest leading-none">CBN & NDIC</span>
                            <span class="text-sm font-extrabold text-brand-dark">100% Insured</span>
                        </div>
                    </div>
                </div>

                <!-- CTAs -->
                <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto pt-4">
                    <a href="/open-account" class="w-full sm:w-auto text-center px-8 py-4 bg-primary hover:bg-primary-hover text-white font-bold rounded-2xl shadow-xl shadow-primary/25 hover:shadow-2xl hover:shadow-primary/35 transform hover:-translate-y-1 transition-all flex items-center justify-center gap-2">
                        Get Started <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="#loans" class="w-full sm:w-auto text-center px-8 py-4 border-2 border-brand-dark/10 hover:border-brand-dark/20 text-brand-dark font-bold rounded-2xl hover:bg-white/40 transform hover:-translate-y-1 transition-all flex items-center justify-center gap-2">
                        View Loan Options <i data-lucide="calculator" class="w-5 h-5 text-primary-dark"></i>
                    </a>
                </div>

                <!-- Happy customers rating -->
                <div class="flex flex-col sm:flex-row sm:items-center gap-4 pt-6 border-t border-brand-dark/5 w-full">
                    <div class="flex -space-x-3.5">
                        <img class="inline-block h-10 w-10 rounded-full ring-4 ring-brand-cream" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&h=100&q=80" alt="Customer 1">
                        <img class="inline-block h-10 w-10 rounded-full ring-4 ring-brand-cream" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&h=100&q=80" alt="Customer 2">
                        <img class="inline-block h-10 w-10 rounded-full ring-4 ring-brand-cream" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=100&h=100&q=80" alt="Customer 3">
                        <div class="flex items-center justify-center h-10 w-10 rounded-full bg-primary ring-4 ring-brand-cream text-white font-extrabold text-xs">
                            +45k
                        </div>
                    </div>
                    <div class="flex flex-col justify-center">
                        <div class="flex items-center text-amber-500 gap-0.5">
                            <i data-lucide="star" class="w-4 h-4 fill-amber-500"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-500"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-500"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-500"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-500"></i>
                            <span class="text-sm font-bold text-brand-dark ml-2">4.9 / 5.0</span>
                        </div>
                        <span class="text-xs text-brand-dark/50 font-semibold">Rated by trusted local businesses & individuals</span>
                    </div>
                </div>
            </div>

            <!-- Hero Right: Interactive Calculator & Live UI Card -->
            <div class="lg:col-span-5 relative">
                
                <!-- Floating Info Badges on Sides -->
                <div class="absolute -top-6 -left-6 z-20 bg-white border border-white/60 p-3 rounded-2xl shadow-xl flex items-center gap-3 animate-float-1 transform hover:scale-105 transition-all">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500/10 flex items-center justify-center text-emerald-600">
                        <i data-lucide="trending-up" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-brand-dark/40 uppercase tracking-wider leading-none">SAVINGS GROWTH</p>
                        <p class="text-sm font-extrabold text-brand-dark">+16.5% Annual Return</p>
                    </div>
                </div>

                <div class="absolute -bottom-6 -right-4 z-20 bg-brand-dark text-white p-4 rounded-2xl shadow-2xl flex items-center gap-3 animate-float-2 transform hover:scale-105 transition-all max-w-[220px]">
                    <div class="w-10 h-10 rounded-xl bg-primary/20 flex items-center justify-center text-primary">
                        <i data-lucide="award" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-[9px] font-bold text-white/40 uppercase tracking-widest leading-none">TRUST RATING</p>
                        <p class="text-xs font-bold text-white/90">Licensed by CBN and insured by NDIC</p>
                    </div>
                </div>

                <!-- Main Glassmorphic Calculator Widget -->
                <div class="w-full glass-panel shadow-2xl rounded-3xl p-6 sm:p-8 border border-white/50 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-primary/10 rounded-full blur-2xl z-0"></div>
                    
                    <!-- Widget Header with Premium Toggle -->
                    <div class="relative z-10 flex flex-col gap-5">
                        <div class="flex items-center justify-between">
                            <span class="font-display font-extrabold text-xl text-brand-dark">Interactive Planner</span>
                            <span class="text-xs bg-primary/20 text-primary-dark font-bold px-2.5 py-1 rounded-lg">Realtime Rates</span>
                        </div>

                        <!-- Elegant Switcher Tab -->
                        <div class="bg-[#E6EAD8]/40 p-1.5 rounded-2xl flex w-full" role="tablist">
                            <button id="calc-tab-savings" onclick="switchCalcTab('savings')" class="w-1/2 py-2.5 text-center font-bold text-sm rounded-xl transition-all shadow-sm bg-primary text-white" role="tab" aria-selected="true" aria-controls="calculator-savings-content">
                                🌱 Savings Grow
                            </button>
                            <button id="calc-tab-loans" onclick="switchCalcTab('loans')" class="w-1/2 py-2.5 text-center font-bold text-sm rounded-xl transition-all text-brand-dark/65 hover:text-brand-dark" role="tab" aria-selected="false" aria-controls="calculator-loans-content">
                                ⚡ Flexible Loan
                            </button>
                        </div>

                        <!-- CALCULATOR INTERFACE: SAVINGS -->
                        <div id="calculator-savings-content" class="space-y-6 transition-all duration-300" role="tabpanel" aria-labelledby="calc-tab-savings">
                            <!-- Amount Slider -->
                            <div class="space-y-2">
                                <div class="flex justify-between items-center text-sm">
                                    <span class="font-semibold text-brand-dark/70">Savings Amount</span>
                                    <span class="font-extrabold text-primary-dark text-lg" id="savings-amount-label">₦500,000</span>
                                </div>
                                <input type="range" id="savings-amount-range" min="10000" max="5000000" step="10000" value="500000" oninput="calculateSavings()" class="w-full" aria-label="Savings amount" aria-describedby="savings-amount-label">
                                <div class="flex justify-between text-[10px] font-bold text-brand-dark/40">
                                    <span>₦10,000</span>
                                    <span>₦5,000,000</span>
                                </div>
                            </div>

                            <!-- Duration Slider -->
                            <div class="space-y-2">
                                <div class="flex justify-between items-center text-sm">
                                    <span class="font-semibold text-brand-dark/70">Savings Duration</span>
                                    <span class="font-extrabold text-brand-dark text-base" id="savings-duration-label">12 Months</span>
                                </div>
                                <input type="range" id="savings-duration-range" min="1" max="24" step="1" value="12" oninput="calculateSavings()" class="w-full" aria-label="Savings duration in months" aria-describedby="savings-duration-label">
                                <div class="flex justify-between text-[10px] font-bold text-brand-dark/40">
                                    <span>1 Month</span>
                                    <span>24 Months</span>
                                </div>
                            </div>

                            <!-- Saving Calculations Results display -->
                            <div class="p-5 rounded-2xl bg-primary/10 border border-primary/20 grid grid-cols-2 gap-4">
                                <div class="flex flex-col">
                                    <span class="text-[10px] font-bold text-brand-dark/50 uppercase tracking-wider">Interest Rate</span>
                                    <span class="text-base font-extrabold text-brand-dark" id="savings-rate-label">16.5% p.a.</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-[10px] font-bold text-brand-dark/50 uppercase tracking-wider">Interest Earned</span>
                                    <span class="text-base font-extrabold text-primary-dark" id="savings-interest-label">₦82,500</span>
                                </div>
                                <div class="flex flex-col col-span-2 pt-2 border-t border-brand-dark/5">
                                    <span class="text-[10px] font-bold text-brand-dark/50 uppercase tracking-wider">Total Payout</span>
                                    <span class="text-2xl font-black text-brand-dark" id="savings-total-label">₦582,500</span>
                                </div>
                            </div>

                            <!-- CTA in Calculator -->
                            <a href="/open-account" class="w-full text-center py-3.5 bg-brand-dark hover:bg-brand-dark/95 text-white font-bold rounded-xl shadow-lg transition-all flex items-center justify-center gap-2">
                                Open High-Yield Savings <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>
                        </div>

                        <!-- CALCULATOR INTERFACE: LOANS -->
                        <div id="calculator-loans-content" class="space-y-6 hidden transition-all duration-300" role="tabpanel" aria-labelledby="calc-tab-loans">
                            <!-- Amount Slider -->
                            <div class="space-y-2">
                                <div class="flex justify-between items-center text-sm">
                                    <span class="font-semibold text-brand-dark/70">Loan Amount Requested</span>
                                    <span class="font-extrabold text-primary-dark text-lg" id="loans-amount-label">₦250,000</span>
                                </div>
                                <input type="range" id="loans-amount-range" min="20000" max="2000000" step="10000" value="250000" oninput="calculateLoans()" class="w-full" aria-label="Loan amount" aria-describedby="loans-amount-label">
                                <div class="flex justify-between text-[10px] font-bold text-brand-dark/40">
                                    <span>₦20,000</span>
                                    <span>₦2,000,000</span>
                                </div>
                            </div>

                            <!-- Duration Slider -->
                            <div class="space-y-2">
                                <div class="flex justify-between items-center text-sm">
                                    <span class="font-semibold text-brand-dark/70">Repayment Period</span>
                                    <span class="font-extrabold text-brand-dark text-base" id="loans-duration-label">6 Months</span>
                                </div>
                                <input type="range" id="loans-duration-range" min="1" max="12" step="1" value="6" oninput="calculateLoans()" class="w-full" aria-label="Loan repayment period in months" aria-describedby="loans-duration-label">
                                <div class="flex justify-between text-[10px] font-bold text-brand-dark/40">
                                    <span>1 Month</span>
                                    <span>12 Months</span>
                                </div>
                            </div>

                            <!-- Loan Calculations Results display -->
                            <div class="p-5 rounded-2xl bg-brand-dark/[0.03] border border-brand-dark/5 grid grid-cols-2 gap-4">
                                <div class="flex flex-col">
                                    <span class="text-[10px] font-bold text-brand-dark/50 uppercase tracking-wider">Interest Rate</span>
                                    <span class="text-base font-extrabold text-brand-dark" id="loans-rate-label">3.5% monthly</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-[10px] font-bold text-brand-dark/50 uppercase tracking-wider">Total Repayable</span>
                                    <span class="text-base font-extrabold text-brand-dark" id="loans-total-label">₦302,500</span>
                                </div>
                                <div class="flex flex-col col-span-2 pt-2 border-t border-brand-dark/5">
                                    <span class="text-[10px] font-bold text-brand-dark/50 uppercase tracking-wider">Estimated Monthly Repayment</span>
                                    <span class="text-2xl font-black text-primary-dark" id="loans-monthly-label">₦50,417</span>
                                </div>
                            </div>

                            <!-- CTA in Calculator -->
                            <a href="#apply-loan" class="w-full text-center py-3.5 bg-primary hover:bg-primary-hover text-white font-bold rounded-xl shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2">
                                Apply for Loan Now <i data-lucide="zap" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>

    <!-- INCLUDE MAIN DYNAMIC LANDING SECTIONS -->
    <section id="services" class="scroll-mt-24">
        @include('pages.welcome.services')
    </section>

    <section id="loans" class="scroll-mt-24">
        @include('pages.welcome.loan')
    </section>

    <section id="accounts" class="scroll-mt-24">
        @include('pages.welcome.account')
    </section>

    <section id="about-us" class="scroll-mt-24">
        @include('pages.welcome.about-us')
    </section>

    <section id="investment" class="scroll-mt-24">
        @include('pages.welcome.investment')
    </section>

    <section id="support" class="scroll-mt-24">
        @include('pages.welcome.support')
    </section>

    @include('pages.welcome.footer')

    <!-- INTERACTIVE APP LOGIC SCRIPTS -->
    <script>
        // DOM Elements
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIconOpen = document.getElementById('menu-icon-open');
        const menuIconClose = document.getElementById('menu-icon-close');
        const header = document.getElementById('main-header');

        // Initial Interactive Setup
        document.addEventListener('DOMContentLoaded', () => {
            // Render Lucide Icons
            lucide.createIcons();
            
            // Initial calculations
            calculateSavings();
            calculateLoans();
            
            // Header scroll styling
            window.addEventListener('scroll', () => {
                const nav = header.querySelector('nav');
                if (window.scrollY > 20) {
                    nav.classList.add('shadow-xl', 'bg-white/90', 'border-white/50');
                    nav.classList.remove('shadow-lg', 'bg-white/70', 'border-white/40');
                } else {
                    nav.classList.remove('shadow-xl', 'bg-white/90', 'border-white/50');
                    nav.classList.add('shadow-lg', 'bg-white/70', 'border-white/40');
                }
            });
        });

        // Mobile menu toggle logic
        mobileMenuBtn.addEventListener('click', () => {
            const isOpen = !mobileMenu.classList.contains('hidden');
            if (isOpen) {
                // Close Menu
                closeMobileMenu();
            } else {
                // Open Menu
                mobileMenu.classList.remove('hidden');
                mobileMenu.setAttribute('aria-expanded', 'true');
                setTimeout(() => {
                    mobileMenu.classList.remove('opacity-0', 'scale-95');
                    // Re-render Lucide icons after menu opens
                    lucide.createIcons();
                }, 10);
                menuIconOpen.classList.add('hidden');
                menuIconClose.classList.remove('hidden');
            }
        });

        // Close mobile menu on clicking any navigation link
        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                closeMobileMenu();
            });
        });

        // Close mobile menu function
        const closeMobileMenu = () => {
            mobileMenu.classList.add('opacity-0', 'scale-95');
            mobileMenu.setAttribute('aria-expanded', 'false');
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300);
            menuIconOpen.classList.remove('hidden');
            menuIconClose.classList.add('hidden');
        };

        // Keyboard accessibility - Close menu on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
                closeMobileMenu();
            }
        });

        // Toggle Savings vs Loans inside the Hero Planner Widget
        function switchCalcTab(tab) {
            const savingsTabBtn = document.getElementById('calc-tab-savings');
            const loansTabBtn = document.getElementById('calc-tab-loans');
            const savingsContent = document.getElementById('calculator-savings-content');
            const loansContent = document.getElementById('calculator-loans-content');
            
            if (tab === 'savings') {
                // Activate Savings Tab
                savingsTabBtn.className = "w-1/2 py-2.5 text-center font-bold text-sm rounded-xl transition-all shadow-sm bg-primary text-white";
                loansTabBtn.className = "w-1/2 py-2.5 text-center font-bold text-sm rounded-xl transition-all text-brand-dark/65 hover:text-brand-dark";
                savingsTabBtn.setAttribute('aria-selected', 'true');
                loansTabBtn.setAttribute('aria-selected', 'false');
                
                savingsContent.classList.remove('hidden');
                loansContent.classList.add('hidden');
            } else {
                // Activate Loans Tab
                loansTabBtn.className = "w-1/2 py-2.5 text-center font-bold text-sm rounded-xl transition-all shadow-sm bg-primary text-white";
                savingsTabBtn.className = "w-1/2 py-2.5 text-center font-bold text-sm rounded-xl transition-all text-brand-dark/65 hover:text-brand-dark";
                loansTabBtn.setAttribute('aria-selected', 'true');
                savingsTabBtn.setAttribute('aria-selected', 'false');
                
                loansContent.classList.remove('hidden');
                savingsContent.classList.add('hidden');
            }
            
            // Re-render Lucide icons after tab switch
            lucide.createIcons();
        }

        // Live Savings Calculator Logic
        function calculateSavings() {
            const amount = parseFloat(document.getElementById('savings-amount-range').value);
            const duration = parseInt(document.getElementById('savings-duration-range').value);
            
            // Format labels
            document.getElementById('savings-amount-label').textContent = '₦' + amount.toLocaleString('en-US');
            document.getElementById('savings-duration-label').textContent = duration + (duration === 1 ? ' Month' : ' Months');
            
            // Dynamic Annual Interest rates based on duration
            let annualRate = 12.0; // Under 6 months
            if (duration >= 6 && duration < 12) {
                annualRate = 14.5;
            } else if (duration >= 12) {
                annualRate = 16.5;
            }
            
            // Calculate interest
            const monthlyRate = (annualRate / 100) / 12;
            const interestEarned = amount * monthlyRate * duration;
            const totalPayout = amount + interestEarned;
            
            // Update labels
            document.getElementById('savings-rate-label').textContent = annualRate + '% p.a.';
            document.getElementById('savings-interest-label').textContent = '₦' + Math.round(interestEarned).toLocaleString('en-US');
            document.getElementById('savings-total-label').textContent = '₦' + Math.round(totalPayout).toLocaleString('en-US');
        }

        // Live Loans Calculator Logic
        function calculateLoans() {
            const amount = parseFloat(document.getElementById('loans-amount-range').value);
            const duration = parseInt(document.getElementById('loans-duration-range').value);
            
            // Format labels
            document.getElementById('loans-amount-label').textContent = '₦' + amount.toLocaleString('en-US');
            document.getElementById('loans-duration-label').textContent = duration + (duration === 1 ? ' Month' : ' Months');
            
            // Monthly interest rate is 3.5%
            const monthlyRateVal = 3.5;
            const totalRepayable = amount * (1 + (monthlyRateVal / 100) * duration);
            const monthlyRepayment = totalRepayable / duration;
            
            // Update labels
            document.getElementById('loans-rate-label').textContent = monthlyRateVal + '% monthly';
            document.getElementById('loans-total-label').textContent = '₦' + Math.round(totalRepayable).toLocaleString('en-US');
            document.getElementById('loans-monthly-label').textContent = '₦' + Math.round(monthlyRepayment).toLocaleString('en-US');
        }
    </script>
</body>
</html>
