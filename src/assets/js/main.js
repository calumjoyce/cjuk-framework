window.addEventListener('DOMContentLoaded',  function() {
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.bottom = 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
        );
    }

    function addClassToMatchingElements(sectionId) {
        const elements = document.querySelectorAll(`[data-section="${sectionId}"]`);
        elements.forEach(element => {
            element.parentElement.classList.add('cv-row-active');
        });
    }

    function removeClassFromMatchingElements(sectionId) {
        const elements = document.querySelectorAll(`[data-section="${sectionId}"]`);
        elements.forEach(element => {
            element.parentElement.classList.remove('cv-row-active');
        });
    }

    window.addEventListener('scroll', () => {
        const sections = document.querySelectorAll('.cv-row');
        sections.forEach(section => {
            const sectionId = section.id;
            if (isElementInViewport(section)) {
                addClassToMatchingElements(sectionId);
            } else {
                removeClassFromMatchingElements(sectionId);
            }
        });
    });

});