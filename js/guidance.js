document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".service-card, .section-title, .section-description");

    const scrollObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    }, { threshold: 0.2 });

    elements.forEach(el => scrollObserver.observe(el));
});
document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".resource-card, .section-title, .section-subtitle");

    const scrollObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    }, { threshold: 0.2 });

    elements.forEach(el => scrollObserver.observe(el));
});
document.addEventListener("DOMContentLoaded", function () {
    const section = document.querySelector(".guidance-section");

    const observer = new IntersectionObserver(entries => {
        if (entries[0].isIntersecting) {
            section.classList.add("show");
        }
    }, { threshold: 0.3 });

    observer.observe(section);
});
document.addEventListener("DOMContentLoaded", function () {
    const mentorCards = document.querySelectorAll(".mentor-card");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    }, { threshold: 0.3 });

    mentorCards.forEach(card => observer.observe(card));
});
document.addEventListener("DOMContentLoaded", function () {
    const contactSection = document.querySelector(".guidance-contact");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    }, { threshold: 0.3 });

    observer.observe(contactSection);
});
