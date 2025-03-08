document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".resource-card, .guidance-contact, .mentor-card, .section-title, .section-subtitle,.service-card, .section-title, .section-description");

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