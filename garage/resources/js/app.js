import './bootstrap';
import axios from 'axios';

const mainContent = document.querySelector('.--content');

if (mainContent) {
    const mainForm = mainContent.querySelector('form');
    mainContent.querySelectorAll('select')
        .forEach(s =>
            s.addEventListener('change', () => { mainForm.submit() }))
};

const breakdown = document.querySelector('#breakdown');


if (breakdown) {
    const trucksList = breakdown.querySelector('#trucks-list');
    const mechanicId = breakdown.querySelector('[name=mechanic_id]');
    const submitButton = breakdown.querySelector('[data-submit]');
    mechanicId.addEventListener('change', () => {
        if (mechanicId.value === '0') {
            trucksList.innerHTML = '';
        } else {
            axios.get(breakdownUrl + '/trucks-list/' + mechanicId.value)
                .then(res => {
                    trucksList.innerHTML = res.data.html
                })
        }

    });
    submitButton.onClick = addEventListener('click', () => {
        const data = {};
        breakdown.querySelectorAll('[data-create]')
        .forEach(i => {
            data[i.getAttribute('name')] = i.value
        });
        console.log(data);
    });
}

