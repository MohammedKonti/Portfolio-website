function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    menu.classList.toggle("open");
    icon.classList.toggle("open");
}
document.querySelectorAll('.progress-bar').forEach(bar => {
    const width = parseInt(bar.style.getPropertyValue('--width'));
    if (width < 30) {
        bar.setAttribute('data-width', 'low');
    } else if (width < 50) {
        bar.setAttribute('data-width', 'medium');
    } else {
        bar.setAttribute('data-width', 'high');
    }
});
