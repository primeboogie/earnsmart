let allist = document.getElementById("allist");
let phone = document.getElementById("phone");
let countryid = document.getElementById("countryid");
let country = document.getElementById("country");


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



async function requestData(url, method = "GET", myBody = null) {
let request = {
    method: method,
    headers: {
        "Content-Type": "Application/json",
        "Accept": "Application/json"
    }
};

if (myBody !== null) {
    request.body = JSON.stringify(myBody);
}

try {
    const response = await fetch(url, request);
    if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
    }
    const data = await response.json();
    return data; // Return the data for use in calling context
} catch (error) {
    console.error('Error fetching data:', error);
    throw error; // Re-throw the error if you need to handle it further up
}
}


async function LisTCountrys() {
    try {
        const response = await requestData('https://api.greatmullah.com', 'GET');

        if (Array.isArray(response.data) && response.data.length > 0) {
            response.data.sort((a, b) => {
                if (a.country < b.country) {
                    return -1;
                }
                if (a.country > b.country) {
                    return 1;
                }
                return 0;
            });

            
            console.log(response.data[0])
            response.data.forEach(value => {
                let alist = document.createElement("div");
                alist.className = "inc"
                let spanlist = document.createElement("span")
                spanlist.innerHTML = value.country + " " + value.abrv;

                alist.appendChild(spanlist)
                allist.appendChild(alist);
                alist.addEventListener("click", function(){
                    phone.value = `(${value.dial})`
                    countryid.value = value.country
                    country.value = value.id
                    viewCountry(false)
                } )
            });
            
        }
    } catch (error) {
        console.error('Failed to process payment:', error);
    }
}



LisTCountrys();

function viewCountry(res){
    if(res){
        document.getElementById("countrylist").style.display = "grid";
    }else{
        document.getElementById("countrylist").style.display = "none";

    }
}


countryid.addEventListener('click', ()=>{
    viewCountry(true)
})
