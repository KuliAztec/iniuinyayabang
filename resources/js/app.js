// Import Preline
import 'preline'

// Make sure Preline is initialized properly
import { HSStaticMethods } from 'preline'

// Initialize when the DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    HSStaticMethods.autoInit();
});