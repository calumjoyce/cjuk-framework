window.addEventListener('DOMContentLoaded', function () {
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.bottom >= -30 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) + 30
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
        let prevSectionId = null;

        sections.forEach(section => {
            const sectionId = section.id;
            if (isElementInViewport(section)) {
                if (prevSectionId && prevSectionId !== sectionId) {
                    removeClassFromMatchingElements(prevSectionId);
                }
                addClassToMatchingElements(sectionId);
                prevSectionId = sectionId;
            } else {
                removeClassFromMatchingElements(sectionId);
            }
        });
    });
});
