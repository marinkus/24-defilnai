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
}

