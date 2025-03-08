function showSchedule() {
    document.querySelector(".toggle-box").style.display = "none"; 
    document.getElementById("scheduleBox").style.display = "block"; 
    document.getElementById("scheduleBox").classList.add("fade-in-up"); 
}
document.addEventListener("DOMContentLoaded", function () {
    const elementsLeft = document.querySelectorAll(".scroll-reveal-left");
    const elementsRight = document.querySelectorAll(".scroll-reveal-right");
    const title = document.querySelector(".section-title");     const observerOptions = { 
        root: null,  
        rootMargin: "0px",
        threshold: 0.2  
    };

    const revealOnScroll = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    elementsLeft.forEach(el => revealOnScroll.observe(el));
    elementsRight.forEach(el => revealOnScroll.observe(el));
    revealOnScroll.observe(title); // Observe title
});
document.addEventListener("DOMContentLoaded", function () {
    const officerCards = document.querySelectorAll(".health-officer-card");

    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        },
        { threshold: 0.2 }
    );

    officerCards.forEach((card) => {
        observer.observe(card);
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const serviceCards = document.querySelectorAll(".service-card");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        },
        { threshold: 0.2 } 
    );

    serviceCards.forEach((card) => observer.observe(card));
});
document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll(".health-info-container, .health-contact-box, .map-box");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        },
        { threshold: 0.3 } 
    );

    sections.forEach((section) => observer.observe(section));
});
