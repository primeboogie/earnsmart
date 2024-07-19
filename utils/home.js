let baseUrl = "https://earnempire.seosblog.com/?action=";
// let baseUrl = "http://localhost/officialsystem/?action=";
let allist = document.getElementById("allist");
let phone = document.getElementById("phone");
let countryid = document.getElementById("countryid");
let country = document.getElementById("country");
let register = document.getElementById("register");


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


// "Accept": "Application/json"

async function requestData(url, method = "GET", myBody = null) {
    let request = {
        method: method,
        headers: {
            "Content-Type": "Application/json",
        }
    };

    if (myBody !== null) {
        request.body = JSON.stringify(myBody);
    }

    try {
        const response = await fetch(url, request);
        const data = await response.json();

        return data
    } catch (error) {
        return error
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

register.addEventListener('submit', (e) => {
    e.preventDefault()

        const formData = new FormData(register);

        const formObject = {};
        formData.forEach((value, key) => {
            formObject[key] = value;
        });
    
        console.log(formObject);

        async function registerPost() {
            try {
                const response = await requestData(`${baseUrl}register`, 'POST', formObject);          
        
                    if(response.status === 201 && response.resutcode){
                        alert(response.info[0]['msg'])
                    }
                    if (Array.isArray(response.info) && response.info.length > 0) {
                        response.info.forEach(value => {
                            alert(value.msg);
                        });
                    }
                    else{
                        console.log(response)
                    }

            } catch (error) {
                console.log(error);
            }
        }

        registerPost();
    })



    LisTCountrys();