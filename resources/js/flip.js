let flipCards = document.querySelectorAll('.flippy');

[...flipCards].forEach((card) => {
    card.addEventListener('click', function () {
        card.classList.toggle('is-flipped');
    });
});
