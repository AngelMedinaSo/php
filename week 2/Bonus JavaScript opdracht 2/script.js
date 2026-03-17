const modeButton = document.querySelector('nav button');

modeButton.addEventListener('click', () => {
    document.body.classList.toggle('dark');
});