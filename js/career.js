document.addEventListener("DOMContentLoaded", function () {
    function revealOnScroll() {
      const aboutSection = document.querySelector(".about-section");
      const sectionPosition = aboutSection.getBoundingClientRect().top;
      const screenPosition = window.innerHeight / 1.2;
  
      if (sectionPosition < screenPosition) {
        aboutSection.classList.add("visible");
      }
    }
  
    window.addEventListener("scroll", revealOnScroll);
  });
  document.addEventListener("DOMContentLoaded", function () {
  function revealOnScroll() {
    const jobSection = document.querySelector(".jobs-section");
    const sectionPosition = jobSection.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.2;

    if (sectionPosition < screenPosition) {
      jobSection.classList.add("visible");
    }
  }

  window.addEventListener("scroll", revealOnScroll);
});
document.addEventListener("DOMContentLoaded", function () {
  function revealOnScroll() {
    const jobSection = document.querySelector(".jobs-section");
    const sectionPosition = jobSection.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.3;

    if (sectionPosition < screenPosition) {
      jobSection.classList.add("visible");
    }
  }

  window.addEventListener("scroll", revealOnScroll);
});
document.addEventListener("DOMContentLoaded", function () {
  function revealOnScroll() {
    const jobSection = document.querySelector(".jobs-section");
    const sectionPosition = jobSection.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.3;

    if (sectionPosition < screenPosition) {
      jobSection.classList.add("visible");
    }
  }

  window.addEventListener("scroll", revealOnScroll);
});
document.addEventListener("DOMContentLoaded", function () {
  function revealOnScroll() {
    const jobSection = document.querySelector(".jobs-section");
    const sectionPosition = jobSection.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.3;

    if (sectionPosition < screenPosition) {
      jobSection.classList.add("visible");
    }
  }

  window.addEventListener("scroll", revealOnScroll);
});
document.addEventListener("DOMContentLoaded", function () {
  function revealOnScroll() {
    const jobSection = document.querySelector(".jobs-section");
    const sectionPosition = jobSection.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.3;

    if (sectionPosition < screenPosition) {
      jobSection.classList.add("visible");
    }
  }

  window.addEventListener("scroll", revealOnScroll);
});
document.addEventListener("DOMContentLoaded", function () {
  function revealOnScroll() {
    const jobSection = document.querySelector(".jobs-section");
    const sectionPosition = jobSection.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.3;

    if (sectionPosition < screenPosition) {
      jobSection.classList.add("visible");
    }
  }

  window.addEventListener("scroll", revealOnScroll);
});
document.addEventListener("DOMContentLoaded", function () {
    function revealOnScroll() {
      const jobSection = document.querySelector(".jobs-section");
      const sectionPosition = jobSection.getBoundingClientRect().top;
      const screenPosition = window.innerHeight / 1.3;
  
      if (sectionPosition < screenPosition) {
        jobSection.classList.add("visible");
      }
    }
  
    window.addEventListener("scroll", revealOnScroll);
  });
  document.addEventListener("DOMContentLoaded", function () {
    function revealOnScroll() {
      const section = document.querySelector(".resume-interview");
      const sectionPosition = section.getBoundingClientRect().top;
      const screenPosition = window.innerHeight / 1.3;
  
      if (sectionPosition < screenPosition) {
        section.classList.add("visible");
      }
    }
  
    window.addEventListener("scroll", revealOnScroll);
  });
  document.addEventListener("DOMContentLoaded", function () {
    function revealOnScroll() {
      const section = document.querySelector(".events-section");
      const sectionPosition = section.getBoundingClientRect().top;
      const screenPosition = window.innerHeight / 1.3;
  
      if (sectionPosition < screenPosition) {
        section.classList.add("visible");
      }
    }
  
    window.addEventListener("scroll", revealOnScroll);
  });
  document.addEventListener("DOMContentLoaded", function () {
  function revealOnScroll() {
    const section = document.querySelector(".events-section");
    const sectionPosition = section.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.3;

    if (sectionPosition < screenPosition) {
      section.classList.add("visible");
    }
  }

  window.addEventListener("scroll", revealOnScroll);
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
    checkScroll(); // Run on page load in case some cards are already in view
  });
  document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".hidden");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    }, { threshold: 0.2 });

    elements.forEach(element => observer.observe(element));
});
document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".career-officer-card");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    }, { threshold: 0.2 });

    elements.forEach(element => observer.observe(element));
});
document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach((item) => {
        const question = item.querySelector(".faq-question");
        const answer = item.querySelector(".faq-answer");

        question.addEventListener("click", function () {
            // Close all other open FAQs
            faqItems.forEach((otherItem) => {
                if (otherItem !== item) {
                    otherItem.classList.remove("active");
                    otherItem.querySelector(".faq-answer").style.display = "none";
                }
            });

            // Toggle the clicked FAQ
            if (answer.style.display === "block") {
                answer.style.display = "none";
            } else {
                answer.style.display = "block";
            }

            item.classList.toggle("active");
        });
    });
});
