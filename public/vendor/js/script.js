function checkZoomLevel() {
    // Calculate the current zoom level
    const zoomLevel = Math.round(window.outerWidth / window.innerWidth * 100);

    // Select the container
    const container = document.querySelector('.containerwidth');

    // Check if zoom level is less than 100%
    if (zoomLevel < 100) {
        container.classList.add('zoomed-out');
    } else {
        container.classList.remove('zoomed-out');
    }
}

// Check zoom level on window resize
window.addEventListener('resize', checkZoomLevel);

// Check zoom level on initial load
document.addEventListener('DOMContentLoaded', checkZoomLevel);