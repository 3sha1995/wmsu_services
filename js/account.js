document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach((item) => {
        const question = item.querySelector(".faq-question");
        const answer = item.querySelector(".faq-answer");

        question.addEventListener("click", function () {
            // Check if answer is already open
            const isOpen = item.classList.contains("active");

            // Close all answers first
            faqItems.forEach((otherItem) => {
                otherItem.classList.remove("active");
            });

            // If it was not open before, open it now
            if (!isOpen) {
                item.classList.add("active");
            }
        });
    });
});
