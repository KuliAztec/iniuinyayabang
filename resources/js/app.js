// Import Preline
import 'preline'

// Make sure Preline is initialized properly
import { HSStaticMethods } from 'preline'

// Initialize when the DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    HSStaticMethods.autoInit();
});

// Tambahkan kode ini di resources/js/app.js
document.addEventListener('DOMContentLoaded', function() {
    // Inisialisasi Preline
    HSStaticMethods.autoInit();
    
    // Scroll effect untuk header
    const header = document.querySelector('header');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
            header.classList.add('bg-white/95', 'dark:bg-black/95', 'shadow-md');
            header.classList.remove('py-4');
            header.classList.add('py-2');
        } else {
            header.classList.remove('scrolled');
            header.classList.remove('bg-white/95', 'dark:bg-black/95', 'shadow-md');
            header.classList.remove('py-2');
            header.classList.add('py-4');
        }
    });
});