const toggleButton = document.getElementById('menu');
const dynamicParagraph = document.getElementById('dynamic-paragraph');
toggleButton.addEventListener('click', () => {
    dynamicParagraph.classList.toggle('active');
});

document.querySelector('.close-admin-form').addEventListener('click', () => {
   document.querySelector('.bg-modal').style.display ='none';
    window.location = 'index.php';
});







