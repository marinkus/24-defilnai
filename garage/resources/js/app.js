import './bootstrap';

const mainContent = document.querySelector('.--content');
const mainForm = mainContent.querySelector('form');

console.log(mainContent);

mainContent.querySelectorAll('select')
.forEach(s => s.addEventListener('change', () => mainForm.submit()));

