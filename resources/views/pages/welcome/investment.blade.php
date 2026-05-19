<div class="py-20 lg:py-28 bg-brand-cream relative overflow-hidden">
    <!-- Visual glowing elements in background -->
    <div class="absolute top-[30%] left-[-10%] w-[450px] h-[450px] bg-primary/10 rounded-full blur-[130px] pointer-events-none"></div>
    <div class="absolute bottom-0 right-[-10%] w-[350px] h-[350px] bg-primary/10 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-12 items-center">
            
            <!-- Left Column: Investment Benefits & Tiers (7 Columns) -->
            <div class="lg:col-span-7 space-y-8">
                
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary/10 text-primary-dark font-bold text-xs uppercase tracking-wider">
                        📈 WEALTH ACCELERATOR
                    </div>
                    
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl lg:text-5xl tracking-tight leading-tight text-brand-dark">
                        Partner in Our Success. <br>
                        <span class="text-primary-dark">Invest in Senchi MFB.</span>
                    </h2>
                    
                    <p class="text-brand-dark/70 text-lg font-medium leading-relaxed max-w-xl">
                        Support community growth, farm inputs, and micro-traders while unlocking premium guaranteed competitive returns of up to 11.0% p.a.
                    </p>
                </div>

                <!-- Investment Tiers Grid -->
                <div class="space-y-4 pt-2">
                    
                    <!-- Tier 1 Card -->
                    <div class="bg-white border border-brand-dark/5 p-5 rounded-2xl flex flex-col sm:flex-row items-start sm:items-center gap-4 hover:border-primary/30 transition-all shadow-sm">
                        <div class="w-12 h-12 rounded-xl bg-primary/15 flex items-center justify-center text-primary-dark shrink-0">
                            <i data-lucide="trending-up" class="w-6 h-6"></i>
                        </div>
                        <div class="space-y-1 grow">
                            <div class="flex items-center justify-between">
                                <h4 class="font-bold text-base text-brand-dark">Retail Treasury Notes</h4>
                                <span class="text-xs bg-primary/20 text-primary-dark font-extrabold px-2 py-0.5 rounded-full">11.0% p.a.</span>
                            </div>
                            <p class="text-xs text-brand-dark/60 leading-normal font-medium">
                                Minimum investment of ₦500,000. Perfect for retail investors searching for secured, high-interest treasury yields.
                            </p>
                        </div>
                    </div>

                    <!-- Tier 2 Card -->
                    <div class="bg-white border border-brand-dark/5 p-5 rounded-2xl flex flex-col sm:flex-row items-start sm:items-center gap-4 hover:border-primary/30 transition-all shadow-sm">
                        <div class="w-12 h-12 rounded-xl bg-primary/15 flex items-center justify-center text-primary-dark shrink-0">
                            <i data-lucide="building" class="w-6 h-6"></i>
                        </div>
                        <div class="space-y-1 grow">
                            <div class="flex items-center justify-between">
                                <h4 class="font-bold text-base text-brand-dark">Enterprise Growth Fund</h4>
                                <span class="text-xs bg-primary/20 text-primary-dark font-extrabold px-2 py-0.5 rounded-full">11.0% p.a.</span>
                            </div>
                            <p class="text-xs text-brand-dark/60 leading-normal font-medium">
                                Minimum investment of ₦5,000,000. Tailored for corporate institutions seeking periodic quarterly payout distributions.
                            </p>
                        </div>
                    </div>

                    <!-- Tier 3 Card -->
                    <div class="bg-white border border-brand-dark/5 p-5 rounded-2xl flex flex-col sm:flex-row items-start sm:items-center gap-4 hover:border-primary/30 transition-all shadow-sm">
                        <div class="w-12 h-12 rounded-xl bg-primary/15 flex items-center justify-center text-primary-dark shrink-0">
                            <i data-lucide="gem" class="w-6 h-6"></i>
                        </div>
                        <div class="space-y-1 grow">
                            <div class="flex items-center justify-between">
                                <h4 class="font-bold text-base text-brand-dark">Capital Partner Equity</h4>
                                <span class="text-xs bg-primary/20 text-primary-dark font-extrabold px-2 py-0.5 rounded-full">11.0% p.a.</span>
                            </div>
                            <p class="text-xs text-brand-dark/60 leading-normal font-medium">
                                Minimum investment of ₦25,000,000. Equity partnership options including advisory board observership roles.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Trust Metrics Bar -->
                <div class="grid grid-cols-3 gap-4 pt-4 border-t border-brand-dark/5">
                    <div class="space-y-1">
                        <span class="text-xs font-bold text-brand-dark/40 uppercase tracking-wider block">Insured Guarantee</span>
                        <span class="text-sm font-extrabold text-brand-dark flex items-center gap-1.5"><i data-lucide="shield-check" class="w-4 h-4 text-primary-dark"></i> NDIC Covered</span>
                    </div>
                    <div class="space-y-1">
                        <span class="text-xs font-bold text-brand-dark/40 uppercase tracking-wider block">Supervision Desk</span>
                        <span class="text-sm font-extrabold text-brand-dark flex items-center gap-1.5"><i data-lucide="landmark" class="w-4 h-4 text-primary-dark"></i> CBN Supervised</span>
                    </div>
                    <div class="space-y-1">
                        <span class="text-xs font-bold text-brand-dark/40 uppercase tracking-wider block">Social Returns</span>
                        <span class="text-sm font-extrabold text-brand-dark flex items-center gap-1.5"><i data-lucide="heart" class="w-4 h-4 text-primary-dark"></i> 100% Social Impact</span>
                    </div>
                </div>

            </div>

            <!-- Right Column: Interactive Form Included (5 Columns) -->
            <div class="lg:col-span-5">
                @include('forms.investment')
            </div>

        </div>

    </div>
</div>
