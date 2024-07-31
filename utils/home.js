// let baseUrl = "https://earnempire.seosblog.com/?action=";
let baseUrl = "http://localhost/officialsystem/?action=";

let allist = document.getElementById("allist");
let phone = document.getElementById("phone");
let countryid = document.getElementById("countryid");
let country = document.getElementById("country");
let register = document.getElementById("register");
let sinusername = document.getElementById("sinusername");
let forusername = document.getElementById("username");
let login = document.getElementById("login");


let loginusername = document.getElementById("loginusername");
let logusername = document.getElementById("logusername");


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
            response.data.forEach(value => {
                let alist = document.createElement("div");
                alist.className = "inc"
                let spanlist = document.createElement("span")
                spanlist.innerHTML = value.country + " " + value.abrv;

                alist.appendChild(spanlist)
                allist.appendChild(alist);
                alist.addEventListener("click", function(){
                    phone.innerHTML = `(${value.dial})`
                    countryid.value = value.country
                    country.value = value.id
                    viewCountry(false)
                } )
            });
            
        }
    } catch (error) {
        console.error(error);
    }
}




function viewCountry(res){
    if(res){
        document.getElementById("countrylist").style.display = "grid";
        document.getElementById("overs").style.display = "grid";
    }else{
        document.getElementById("countrylist").style.display = "none";
        document.getElementById("overs").style.display = "none";
        
    }
}

function openLoader(res){
    if(res){
        document.getElementById("loaderrr").style.display = "flex";
    }else{
        document.getElementById("loaderrr").style.display = "none";
    }
}



countryid.addEventListener('click', ()=>{
    viewCountry(true)
})

register.addEventListener('submit', (e) => {
    e.preventDefault()
    openLoader(true)

        const formData = new FormData(register);

        const formObject = {};
        formData.forEach((value, key) => {
            formObject[key] = value;
        });

        async function registerPost() {
            try {
                const response = await requestData(`${baseUrl}register`, 'POST', formObject);          
        
                if(response.resultcode){
                    register.reset();
                }
                console.log(response)
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
        openLoader(false)
        }

        registerPost();
    })

    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    
    login.addEventListener('submit', (e) => {
        e.preventDefault()
        openLoader(true)
    
            const formData = new FormData(login);
    
            const formObject = {};
            formData.forEach((value, key) => {
                formObject[key] = value;
            });
    
            async function loginPost() {
                try {
                    const response = await requestData(`${baseUrl}login`, 'POST', formObject);  
                    console.log(response)        
            
                    if(response.resultcode){
                        setCookie("access_token", response.data['access_token'],2)
                        login.reset();
                        
                        window.location.href = '/earnempire/'
                        // window.location.href = '/'
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
            openLoader(false)
            }
    
            loginPost();
        })



    LisTCountrys();

    let shaky = (resp) =>{
        if(resp){
            forusername.classList.add("shacky")
        }else{
            forusername.classList.remove("shacky")
        }
    } 

    let shakylog = (resp) =>{
        if(resp){
            logusername.classList.add("shacky")
        }else{
            logusername.classList.remove("shacky")
        }
    } 

    window.addEventListener('click', (event) => {
        if (event.target == document.getElementById("overs")) {
            viewCountry(false)
        }
    });

    sinusername.addEventListener('input', () => {
        async function confirmUser() {
            try {
                const response = await requestData(`${baseUrl}freeuser`, 'POST', {"username": sinusername.value});          
                
                if(response.resultcode){
                    shaky(true)
                }else{
                    shaky(false)
                }
                    } catch (error) {
                        alert(error);
                    }
                }
                
                confirmUser()
            })

loginusername.addEventListener('change', () => {
    async function confirmUser() {
        try {
            const response = await requestData(`${baseUrl}freeuser`, 'POST', {"username": loginusername.value});          
            
            if(response.resultcode){
                shakylog(false)
            }else{
                shakylog(true)
                setTimeout(function() {
                    shakylog(false)
                }, 5000); 
            }
            
                    
                } catch (error) {
                    alert(error);
                }
            }
            
            confirmUser()
        })



        
        
        
