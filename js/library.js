document.addEventListener("DOMContentLoaded", function () {
    const librarySection = document.querySelector(".library-section");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    }, { threshold: 0.3 });

    observer.observe(librarySection);
});
document.addEventListener("DOMContentLoaded", function () {
    const libraryCards = document.querySelectorAll(".library-card");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    }, { threshold: 0.3 });

    libraryCards.forEach(card => observer.observe(card));
});
document.addEventListener("DOMContentLoaded", function () {
    const serviceCards = document.querySelectorAll(".service-card");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    }, { threshold: 0.2 });

    serviceCards.forEach(card => observer.observe(card));
});
function showSchedule() {
    document.querySelector(".toggle-box").style.display = "none"; 
    document.getElementById("scheduleBox").style.display = "block"; 
    document.getElementById("scheduleBox").classList.add("fade-in-up"); 
}
// Function to detect when elements are in view
function fadeInOnScroll() {
    const cards = document.querySelectorAll(".library-officer-card");
    const triggerBottom = window.innerHeight * 0.85; // Adjust threshold

    cards.forEach(card => {
        const cardTop = card.getBoundingClientRect().top;

        if (cardTop < triggerBottom) {
            card.classList.add("visible");
        }
    });
}

// Run function on scroll
window.addEventListener("scroll", fadeInOnScroll);
fadeInOnScroll(); // Run on page load
