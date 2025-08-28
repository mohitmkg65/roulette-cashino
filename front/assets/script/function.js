document.addEventListener("DOMContentLoaded", function () {
    function startCounter(element, start, end, duration) {
        let range = end - start;
        let current = start;
        let increment = end > start ? 1 : -1;
        let stepTime = Math.abs(Math.floor(duration / range));
        let timer = setInterval(function () {
            current += increment;
            element.textContent = current + (element.dataset.suffix || "");
            if (current == end) {
                clearInterval(timer);
            }
        }, stepTime);
    }

    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                let numberCounter = entry.target;
                let endValue = parseInt(numberCounter.getAttribute("data-count"));
                let suffix = numberCounter.getAttribute("data-suffix") || "";
                if (!numberCounter.dataset.animated) {
                    numberCounter.dataset.animated = true;
                    startCounter(numberCounter, 0, endValue, 2000);
                }
            }
        });
    }

    let counters = document.querySelectorAll(".number-counter");
    let observer = new IntersectionObserver(handleIntersection, { threshold: 0.5 });

    counters.forEach(counter => {
        observer.observe(counter);
    });
});
