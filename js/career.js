document.addEventListener("DOMContentLoaded", function () {
  function revealOnScroll() {
      const sections = document.querySelectorAll(".about-section, .jobs-section, .resume-interview, .events-section");

      sections.forEach((section) => {
          const sectionPosition = section.getBoundingClientRect().top;
          const screenPosition = window.innerHeight / 1.3;

          if (sectionPosition < screenPosition) {
              section.classList.add("visible");
          }
      });
  }

  window.addEventListener("scroll", revealOnScroll);
  revealOnScroll();
});

document.addEventListener("DOMContentLoaded", function () {
  const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.classList.add("visible");
          }
      });
  }, { threshold: 0.2 });

  document.querySelectorAll(".hidden, .career-officer-card").forEach(element => observer.observe(element));
});

document.addEventListener("DOMContentLoaded", function () {
  const eventCards = document.querySelectorAll(".event-card");

  function checkScroll() {
      eventCards.forEach((card) => {
          const cardPosition = card.getBoundingClientRect().top;
          const windowHeight = window.innerHeight;

          if (cardPosition < windowHeight - 50) {
              card.classList.add("show");
          }
      });
  }

  window.addEventListener("scroll", checkScroll);
  checkScroll();
});

document.addEventListener("DOMContentLoaded", function () {
  const faqItems = document.querySelectorAll(".faq-item");

  faqItems.forEach((item) => {
      const question = item.querySelector(".faq-question");
      const answer = item.querySelector(".faq-answer");

      question.addEventListener("click", function () {
          faqItems.forEach((otherItem) => {
              if (otherItem !== item) {
                  otherItem.classList.remove("active");
                  otherItem.querySelector(".faq-answer").style.display = "none";
              }
          });

          answer.style.display = answer.style.display === "block" ? "none" : "block";
          item.classList.toggle("active");
      });
  });
});
