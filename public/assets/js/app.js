// Interactive Phone Screen Controller
document.addEventListener('DOMContentLoaded', () => {
    // Check if phone mockup controller elements exist
    const phoneScreenContainer = document.getElementById('phone-mockup-screens');
    
    if (phoneScreenContainer) {
        // Find all trigger buttons and screen slides
        const triggers = document.querySelectorAll('.feature-trigger');
        const screens = document.querySelectorAll('.phone-screen-slide');
        let activeIndex = 0;
        let slideInterval;

        const setActiveScreen = (index) => {
            activeIndex = index;
            
            // Update active states on triggers
            triggers.forEach((trigger, idx) => {
                if (idx === index) {
                    trigger.classList.add('bg-white/80', 'border-primary', 'shadow-md');
                    trigger.classList.remove('bg-white/20', 'border-transparent');
                    
                    // Highlight icon indicator
                    const iconBox = trigger.querySelector('.icon-indicator');
                    if (iconBox) {
                        iconBox.classList.add('bg-primary', 'text-white');
                        iconBox.classList.remove('bg-primary/10', 'text-primary-dark');
                    }
                } else {
                    trigger.classList.remove('bg-white/80', 'border-primary', 'shadow-md');
                    trigger.classList.add('bg-white/20', 'border-transparent');
                    
                    // Reset icon indicator
                    const iconBox = trigger.querySelector('.icon-indicator');
                    if (iconBox) {
                        iconBox.classList.remove('bg-primary', 'text-white');
                        iconBox.classList.add('bg-primary/10', 'text-primary-dark');
                    }
                }
            });

            // Slide phone screens
            const offset = index * -100;
            phoneScreenContainer.style.transform = `translateX(${offset}%)`;
        };

        // Add click event listeners to features triggers
        triggers.forEach((trigger, index) => {
            trigger.addEventListener('click', () => {
                clearInterval(slideInterval); // Stop auto slide on interaction
                setActiveScreen(index);
                startAutoSlide(); // Restart auto slide
            });
        });

        // Auto slide every 3 seconds
        const startAutoSlide = () => {
            slideInterval = setInterval(() => {
                const nextIndex = (activeIndex + 1) % screens.length;
                setActiveScreen(nextIndex);
            }, 3000);
        };

        // Initialize
        setActiveScreen(0);
        startAutoSlide();
    }
});
