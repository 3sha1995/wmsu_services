document.addEventListener("DOMContentLoaded", function () {
    const section = document.querySelector(".eligibility-section");

    if (!section) {
        console.error("Section not found! Check your class names.");
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    section.classList.add("animate"); // Add animation class
                }
            });
        },
        {
            root: null, // Uses viewport
            rootMargin: "0px",
            threshold: 0.5, // Trigger when 50% of the section is visible
        }
    );

    observer.observe(section);

    // Remove the class when scrolled past, so it can re-trigger next time
   
window.addEventListener("scroll", function() {
    const section = document.querySelector(".scholarship-section");
    const position = section.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.3;

    if (position < screenPosition) {
        section.classList.add("show");
    }
});
});document.addEventListener("DOMContentLoaded", function () {
    const section = document.querySelector(".scholarship-section");

    if (!section) {
        console.error("Scholarship section not found!");
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    section.classList.add("show"); // Add animation class
                }
            });
        },
        {
            root: null,
            rootMargin: "0px",
            threshold: 0.5, // Animation triggers when 50% is visible
        }
    );

    observer.observe(section);
});
document.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll(".scholarship-financial-card").forEach(card => {
        observer.observe(card);
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll(".officer-card");

    function fadeInCards() {
        cards.forEach(card => {
            const rect = card.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100) {
                card.classList.add("visible");
            }
        });
    }

    window.addEventListener("scroll", fadeInCards);
    fadeInCards(); // Run on page load
});

window.addEventListener("scroll", function() {
    const section = document.querySelector(".scholarship-section");
    const position = section.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.3;

    if (position < screenPosition) {
        section.classList.add("show");
    }
});