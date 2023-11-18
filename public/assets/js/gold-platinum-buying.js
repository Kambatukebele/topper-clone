// FAQ
const FAQ = () => {
    //faqQuestions
    let faqQuestions = document.getElementsByClassName("faqQuestion");
    //faqAnswers
    let faqAnswers = document.getElementsByClassName("faqAnswers");
    //icons faqArrow
    let faqArrows = document.getElementsByClassName("faqArrow");
    //icons faqClose
    let faqCloses = document.getElementsByClassName("faqClose");

    for (let i = 0; i < faqQuestions.length; i++) {
        faqQuestions[i].addEventListener("click", () => {
            for (let j = 0; j < faqAnswers.length; j++) {
                for (let k = 0; k < faqArrows.length; k++) {
                    for (let l = 0; l < faqCloses.length; l++) {
                        if (i === j && i === k && i === l) {
                            if (faqAnswers[j].classList.contains("hidden")) {
                                faqAnswers[j].classList.remove("hidden");
                                faqArrows[k].classList.add("hidden");
                                faqCloses[l].classList.remove("hidden");
                            } else {
                                faqAnswers[j].classList.add("hidden");
                                faqArrows[k].classList.remove("hidden");
                                faqCloses[l].classList.add("hidden");
                            }
                        }
                    }
                }
            }
        });
    }
};

FAQ();
