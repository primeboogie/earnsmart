document.addEventListener('DOMContentLoaded', (event) => {
    // import { requestData } from './main.js';

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

    function myCountrys(){
        const fetchData = async () => {
            try {
              const response = await fetch("https://api.greatmullah.com/countrys/");
              const data = await response.json();
              if (data.length > 0) {
                console.log(data);
              }
            } catch (error) {
              console.error('Error fetching data:', error);
            }
          };
      
          fetchData();
    }
    
    myCountrys()
});

