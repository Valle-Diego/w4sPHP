document.addEventListener('DOMContentLoaded', () => {
    const projectCards = [...document.querySelectorAll('.project-card')];
    const count = document.querySelector('#project-count');
    const emptyState = document.querySelector('#empty-state');
    const year = document.querySelector('#current-year');

    if (count) count.textContent = String(projectCards.length).padStart(2, '0');
    if (year) year.textContent = `© ${new Date().getFullYear()} PHP Lab`;

    // Evidenzia nella navigazione la sezione che si sta consultando.
    const sectionLinks = [...document.querySelectorAll('nav a[href^="#"]')];
    sectionLinks.forEach((link) => {
        link.addEventListener('click', () => {
            sectionLinks.forEach((item) => item.classList.remove('active'));
            link.classList.add('active');
        });
    });

    // Mostra un messaggio utile se in futuro viene aggiunta una ricerca senza risultati.
    const updateEmptyState = () => {
        if (!emptyState) return;
        const visibleCards = projectCards.filter((card) => !card.hidden).length;
        emptyState.hidden = visibleCards !== 0;
    };
    updateEmptyState();
});
