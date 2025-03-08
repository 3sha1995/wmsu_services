document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach((item) => {
        const question = item.querySelector(".faq-question");
        const answer = item.querySelector(".faq-answer");

        question.addEventListener("click", function () {
            
            const isOpen = item.classList.contains("active");

            
            faqItems.forEach((otherItem) => {
                otherItem.classList.remove("active");
            });

            
            if (!isOpen) {
                item.classList.add("active");
            }
        });
    });
});
