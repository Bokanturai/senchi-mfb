<!-- Glassmorphic Investment Inquiry Form -->
<div class="bg-white border border-brand-dark/5 rounded-3xl p-6 sm:p-8 hover:shadow-2xl transition-all duration-300 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-32 h-32 bg-primary/10 rounded-full blur-2xl pointer-events-none"></div>
    
    <div class="relative z-10">
        <h3 class="font-display font-extrabold text-2xl text-brand-dark mb-2">Request Investment Guide</h3>
        <p class="text-xs text-brand-dark/60 font-semibold mb-6">Send us your information, and our portfolio relations director will reach out within 1 hour.</p>

        <!-- Success Alert (Blade Standard Redirect or AJAX dynamic) -->
        <div id="investment-success-alert" class="hidden mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm font-semibold flex items-start gap-3">
            <i data-lucide="shield-check" class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5"></i>
            <div>
                <p class="font-bold">Submission Successful!</p>
                <p class="text-xs text-emerald-700/80 font-medium mt-1" id="success-alert-message">
                    An email confirmation has been sent. Our investment desk will call you shortly.
                </p>
                <p class="text-[11px] font-black text-emerald-800 uppercase tracking-widest mt-2" id="success-alert-ref"></p>
            </div>
        </div>

        @if(session('success'))
        <div class="mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm font-semibold flex items-start gap-3">
            <i data-lucide="shield-check" class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5"></i>
            <div>
                <p class="font-bold">Submission Successful!</p>
                <p class="text-xs text-emerald-700/80 font-medium mt-1">
                    {{ session('success') }}
                </p>
                @if(session('ref_code'))
                <p class="text-[11px] font-black text-emerald-800 uppercase tracking-widest mt-2">REF: {{ session('ref_code') }}</p>
                @endif
            </div>
        </div>
        @endif

        <!-- Investment Form -->
        <form id="investment-inquiry-form" method="POST" action="{{ route('investment.submit') }}" class="space-y-4">
            @csrf
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="space-y-1">
                    <label for="first_name" class="text-[10px] font-bold text-brand-dark/55 uppercase tracking-wider">First Name</label>
                    <input type="text" id="first_name" name="first_name" required placeholder="Amina" value="{{ old('first_name') }}" class="w-full bg-white border border-brand-dark/10 focus:border-primary focus:ring-1 focus:ring-primary rounded-xl px-4 py-3 text-sm outline-none transition-all">
                    @error('first_name') <span class="text-xs text-red-500 font-semibold">{{ $message }}</span> @enderror
                </div>
                <div class="space-y-1">
                    <label for="last_name" class="text-[10px] font-bold text-brand-dark/55 uppercase tracking-wider">Last Name</label>
                    <input type="text" id="last_name" name="last_name" required placeholder="Bello" value="{{ old('last_name') }}" class="w-full bg-white border border-brand-dark/10 focus:border-primary focus:ring-1 focus:ring-primary rounded-xl px-4 py-3 text-sm outline-none transition-all">
                    @error('last_name') <span class="text-xs text-red-500 font-semibold">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="space-y-1">
                    <label for="email" class="text-[10px] font-bold text-brand-dark/55 uppercase tracking-wider">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="amina.bello@example.com" value="{{ old('email') }}" class="w-full bg-white border border-brand-dark/10 focus:border-primary focus:ring-1 focus:ring-primary rounded-xl px-4 py-3 text-sm outline-none transition-all">
                    @error('email') <span class="text-xs text-red-500 font-semibold">{{ $message }}</span> @enderror
                </div>
                <div class="space-y-1">
                    <label for="phone" class="text-[10px] font-bold text-brand-dark/55 uppercase tracking-wider">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required placeholder="+234 80 1234 5678" value="{{ old('phone') }}" class="w-full bg-white border border-brand-dark/10 focus:border-primary focus:ring-1 focus:ring-primary rounded-xl px-4 py-3 text-sm outline-none transition-all">
                    @error('phone') <span class="text-xs text-red-500 font-semibold">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="space-y-1">
                <label for="amount_tier" class="text-[10px] font-bold text-brand-dark/55 uppercase tracking-wider">Target Investment Amount</label>
                <div class="relative">
                    <select id="amount_tier" name="amount_tier" required class="w-full bg-white border border-brand-dark/10 focus:border-primary focus:ring-1 focus:ring-primary rounded-xl px-4 py-3 text-sm outline-none transition-all appearance-none cursor-pointer">
                        <option value="" disabled selected>Select an investment amount...</option>
                        <option value="retail" {{ old('amount_tier') == 'retail' ? 'selected' : '' }}>Retail Treasury Notes (₦500,000 - ₦5M)</option>
                        <option value="enterprise" {{ old('amount_tier') == 'enterprise' ? 'selected' : '' }}>Enterprise Growth Fund (₦5M - ₦25M)</option>
                        <option value="partner" {{ old('amount_tier') == 'partner' ? 'selected' : '' }}>Capital Partner Equity (₦25M+)</option>
                    </select>
                    <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-brand-dark/50">
                        <i data-lucide="chevron-down" class="w-4 h-4"></i>
                    </div>
                </div>
                @error('amount_tier') <span class="text-xs text-red-500 font-semibold">{{ $message }}</span> @enderror
            </div>

            <div class="space-y-1">
                <label for="message" class="text-[10px] font-bold text-brand-dark/55 uppercase tracking-wider">Special Requests / Message</label>
                <textarea id="message" name="message" placeholder="Provide extra details (optional)..." rows="4" class="w-full bg-white border border-brand-dark/10 focus:border-primary focus:ring-1 focus:ring-primary rounded-xl px-4 py-3 text-sm outline-none transition-all resize-none">{{ old('message') }}</textarea>
                @error('message') <span class="text-xs text-red-500 font-semibold">{{ $message }}</span> @enderror
            </div>

            <button type="submit" id="investment-submit-btn" class="w-full py-4 bg-primary hover:bg-primary-hover text-white font-bold rounded-xl transition-all shadow-md shadow-primary/10 hover:shadow-lg hover:shadow-primary/30 flex items-center justify-center gap-2 mt-2 transform hover:-translate-y-0.5">
                <span>Submit Investment Inquiry</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('investment-inquiry-form');
        const successAlert = document.getElementById('investment-success-alert');
        const alertMsg = document.getElementById('success-alert-message');
        const alertRef = document.getElementById('success-alert-ref');
        const submitBtn = document.getElementById('investment-submit-btn');

        form.addEventListener('submit', async (e) => {
            // Check if AJAX is preferred
            e.preventDefault();
            
            // Set loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = `<span class="flex h-5 w-5 relative shrink-0"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span><span class="relative inline-flex rounded-full h-5 w-5 bg-white"></span></span> Processing Request...`;
            
            try {
                const formData = new FormData(form);
                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    },
                    body: formData
                });
                
                const result = await response.json();
                
                if (response.ok && result.success) {
                    // Success
                    form.reset();
                    successAlert.classList.remove('hidden');
                    alertMsg.textContent = result.message;
                    alertRef.textContent = `REF REFERENCE: ${result.ref_code}`;
                    successAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    
                    // Reinitialize icons inside alert
                    lucide.createIcons();
                } else {
                    // Validation errors or exception
                    alert(result.message || 'Something went wrong. Please check your form values.');
                }
            } catch (err) {
                console.error(err);
                // Fallback to native submission if AJAX fails
                form.submit();
            } finally {
                // Restore submit button
                submitBtn.disabled = false;
                submitBtn.innerHTML = `<span>Submit Investment Inquiry</span> <i data-lucide="arrow-right" class="w-4 h-4"></i>`;
                lucide.createIcons();
            }
        });
    });
</script>
