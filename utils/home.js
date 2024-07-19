import { requestData } from './api.js';

    const showLogin = document.getElementById('showLogin');
    const killlogin = document.getElementById('killlogin');
    const containerin = document.querySelector('#containerin');

    showLogin.addEventListener('click', () => {
        containerin.classList.toggle('handletrans');
    });

    killlogin.addEventListener('click', () => {
        containerin.classList.toggle('handletrans');
    });

    const showSignup = document.getElementById('showSignup');
    const killlSignup = document.getElementById('killlSignup');
    const containerup = document.querySelector('#containerup');

    showSignup.addEventListener('click', () => {
        containerup.classList.toggle('handletrans');
    });

    killlSignup.addEventListener('click', () => {
        containerup.classList.toggle('handletrans');
    });

async function processPayment() {
    try {
        const paymentData = { amount: 100, currency: 'USD' };
        const response = await requestData('https://api.example.com/payments', 'POST', paymentData);
        console.log('Payment successful:', response);
    } catch (error) {
        console.error('Failed to process payment:', error);
    }
}

// processPayment();
