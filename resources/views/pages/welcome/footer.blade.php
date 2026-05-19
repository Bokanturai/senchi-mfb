<footer class="bg-brand-dark text-white pt-20 pb-10 relative overflow-hidden">
    <!-- Curved mesh glowing elements -->
    <div class="absolute top-0 left-[10%] w-[400px] h-[400px] bg-primary/5 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-0 right-[5%] w-[300px] h-[300px] bg-primary/5 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Upper Footer Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 pb-16 border-b border-white/10">
            
            <!-- Column 1: MFB Logo & Description (4 Columns) -->
            <div class="lg:col-span-4 space-y-6">
                <!-- Logo -->
                <a href="/" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-xl overflow-hidden shadow-md shadow-primary/10 transform group-hover:scale-105 transition-all flex items-center justify-center bg-white p-1">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Senchi MFB Logo" class="w-full h-full object-contain">
                    </div>
                    <div class="flex flex-col">
                        <span class="font-display font-extrabold text-xl tracking-tight text-white leading-none">SENCHI</span>
                        <span class="text-[9px] font-bold tracking-widest text-primary uppercase mt-0.5">Microfinance Bank</span>
                    </div>
                </a>
                
                <p class="text-white/60 text-sm font-medium leading-relaxed max-w-sm">
                    Senchi Microfinance Bank is a digital-first community bank dedicated to providing financial inclusion, fast loans, and premium savings strategies to all.
                </p>

                <!-- CBN & NDIC footer notice -->
                <div class="flex items-center gap-4 pt-2">
                    <div class="px-3 py-1.5 rounded-lg bg-white/5 border border-white/10 text-[9px] font-bold tracking-wider text-white/50 uppercase">
                        CBN Licensed
                    </div>
                    <div class="px-3 py-1.5 rounded-lg bg-white/5 border border-white/10 text-[9px] font-bold tracking-wider text-white/50 uppercase">
                        NDIC Insured
                    </div>
                </div>
            </div>

            <!-- Column 2: Quick Links (2 Columns) -->
            <div class="lg:col-span-2 space-y-4">
                <h4 class="font-display font-bold text-sm tracking-wider text-white uppercase">Navigation</h4>
                <ul class="space-y-2 text-xs font-semibold text-white/60">
                    <li><a href="#services" class="hover:text-primary transition-colors">Core Services</a></li>
                    <li><a href="#loans" class="hover:text-primary transition-colors">Micro Loans</a></li>
                    <li><a href="#accounts" class="hover:text-primary transition-colors">Savings Plans</a></li>
                    <li><a href="#about-us" class="hover:text-primary transition-colors">About Story</a></li>
                    <li><a href="#support" class="hover:text-primary transition-colors">Help Center</a></li>
                </ul>
            </div>

            <!-- Column 3: Loan Products (3 Columns) -->
            <div class="lg:col-span-3 space-y-4">
                <h4 class="font-display font-bold text-sm tracking-wider text-white uppercase">Our Loan Products</h4>
                <ul class="space-y-2 text-xs font-semibold text-white/60">
                    <li><a href="#loans" class="hover:text-primary transition-colors">Traders Capital Loans</a></li>
                    <li><a href="#loans" class="hover:text-primary transition-colors">Agro-Growth Harvest Loans</a></li>
                    <li><a href="#loans" class="hover:text-primary transition-colors">SME Asset Finance Lease</a></li>
                    <li><a href="#loans" class="hover:text-primary transition-colors">Nano Emergency Credits</a></li>
                </ul>
            </div>

            <!-- Column 4: Address / Contact info (3 Columns) -->
            <div class="lg:col-span-3 space-y-4">
                <h4 class="font-display font-bold text-sm tracking-wider text-white uppercase">Get In Touch</h4>
                <ul class="space-y-3.5 text-xs font-semibold text-white/60">
                    <li class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="w-4 h-4 text-primary shrink-0"></i>
                        <span>12 Senchi Street, Phase 2, Garki, Abuja, Nigeria</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="phone" class="w-4 h-4 text-primary shrink-0"></i>
                        <span>+234 803 911 0933</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="mail" class="w-4 h-4 text-primary shrink-0"></i>
                        <span>customercare@senchimfb.com.ng</span>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Lower Footer Section -->
        <div class="pt-10 flex flex-col md:flex-row items-center justify-between gap-6 text-xs text-white/40 font-medium">
            <div class="flex flex-col gap-1">
                <p>© {{ date('Y') }} Senchi Microfinance Bank. All rights reserved.</p>
                <p>Design by <a href="https://wa.me/2348064333983?text=Hello%20Bokanturai%2C%20I%20saw%20your%20website%20design%20on%20Senchi%20MFB..." target="_blank" rel="noopener noreferrer" class="text-primary hover:underline transition-all font-semibold">bokanturai</a></p>
            </div>
            
            <div class="flex items-center gap-6">
                <a href="#privacy" class="hover:text-primary transition-colors">Privacy Policy</a>
                <a href="#terms" class="hover:text-primary transition-colors">Terms of Service</a>
                <a href="#cookies" class="hover:text-primary transition-colors">Cookies Settings</a>
            </div>

            <!-- Social Media SVGs -->
            <div class="flex items-center gap-4">
                 <a href="https://wa.me/+2348146640294" aria-label="whatsapp" class="w-8 h-8 rounded-lg bg-white/5 hover:bg-primary hover:text-brand-dark text-white/70 flex items-center justify-center transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.746.953 3.71 1.458 5.704 1.46h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                </a>
                <a href="#" aria-label="Facebook" class="w-8 h-8 rounded-lg bg-white/5 hover:bg-primary hover:text-brand-dark text-white/70 flex items-center justify-center transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                        <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/>
                    </svg>
                </a>
                <a href="#" aria-label="Twitter" class="w-8 h-8 rounded-lg bg-white/5 hover:bg-primary hover:text-brand-dark text-white/70 flex items-center justify-center transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </a>
                <a href="#" aria-label="Instagram" class="w-8 h-8 rounded-lg bg-white/5 hover:bg-primary hover:text-brand-dark text-white/70 flex items-center justify-center transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" class="w-4 h-4">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                    </svg>
                </a>
                <a href="#" aria-label="LinkedIn" class="w-8 h-8 rounded-lg bg-white/5 hover:bg-primary hover:text-brand-dark text-white/70 flex items-center justify-center transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                </a>
            </div>
        </div>

    </div>
</footer>
