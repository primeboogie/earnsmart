// let baseUrl = "https://earnempire.seosblog.com/?action=";
let baseUrl = "http://localhost/officialsystem/?action=";

let menuid = document.getElementById("menuid");
let navbar = document.getElementById("navbar");
let overs = document.getElementById("overs");
let earnimgs = document.getElementById("earnimgs");
let linkbtn = document.getElementById("linkbtn");
let linkinput = document.getElementById("linkinput");
let myactivate = document.getElementById("activateme");



async function requestData(url, method = "GET", myBody = null) {
    const sessionCookie = getCookie('access_token');
    let request = {
        method: method,
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": `Bearer ${sessionCookie}`, 
        }
    };

    if (myBody !== null) {
        request.body = JSON.stringify(myBody);
    }

    try {
        const response = await fetch(url, request);
        
        if (!response.ok) {
            console.error("HTTP error, status = " + response.status);
        }

        const data = await response.json();
        return data;
    } catch (error) {
        console.error("Fetch error:", error);
        return { error: error.message };
    }
}

async function fortest() {
    try {
        const response = await requestData('https://earnempire.seosblog.com/?action=register', 'POST', { some: 'data' });          
        
        if(response.resultcode){
            console.log(true);
        }
        if (Array.isArray(response.info) && response.info.length > 0) {
            response.info.forEach(value => {
                console.log(value.msg);
            });
        } else {
            console.log(response);
        }
    } catch (error) {
        alert(error);
    }
    openLoader(false);
}


function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
    return null;
}


function openLoader(res){
    if(res){
        document.getElementById("loaderrr").style.display = "flex";
    }else{
        document.getElementById("loaderrr").style.display = "none";
    }
}
menuid.addEventListener('click', () => {
    menuid.classList.toggle("fa-xmark")
    navbar.classList.toggle("navhelper")
    overs.classList.toggle("showall")
})

// document.addEventListener('click', (event) => {
//     if (!toggleButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
//         dropdownMenu.classList.remove('show');
//     }
// });
earnimgs.addEventListener('click', ()=>{
    // Create a temporary textarea element to hold the text
    const tempTextArea = document.createElement('textarea');
    tempTextArea.value = "git pull origin main";
    document.body.appendChild(tempTextArea);
    
    // Select the text inside the temporary textarea
    tempTextArea.select();
    tempTextArea.setSelectionRange(0, 99999); // For mobile devices
    
    // Copy the selected text to the clipboard
    document.execCommand('copy');
    
    // Remove the temporary textarea
    document.body.removeChild(tempTextArea);
    

})

if(linkbtn){
    linkbtn.addEventListener('click', () => {
        const tempTextArea = document.createElement('textarea');
        tempTextArea.value = linkinput.value;
        document.body.appendChild(tempTextArea);
        
        tempTextArea.select();
        tempTextArea.setSelectionRange(0, 99999);
        
        document.execCommand('copy');
        
        document.body.removeChild(tempTextArea);
        alert(`Your Link is pasted In Your Clipboard Successfully`)
    })
}


async function data() {

    // openLoader(true)

    try {
        const response = await requestData(`${baseUrl}userdata`, 'GET');          
        
        if(response.resultcode){
            let allusername = document.querySelectorAll("#username")
            let allemail = document.querySelectorAll("#email")
            let allphone = document.querySelectorAll("#phone")
            let alljoin = document.querySelectorAll("#join")
            let allustatus = document.querySelectorAll("#ustatus")
            let linkinput = document.querySelectorAll("#linkinput")
            let allusys = document.querySelectorAll("#usys")
            let allupline = document.querySelectorAll("#upline")
            let curbal = document.querySelectorAll("#curbal")
            let curwel = document.querySelectorAll("#curwel")
            let curwithtotal = document.querySelectorAll("#curwithtotal")
            let curwithpen = document.querySelectorAll("#curwithpen")
            let curtivia = document.querySelectorAll("#curtivia")
            let curyou = document.querySelectorAll("#curyou")
            let curtiktok = document.querySelectorAll("#curtiktok")
            let curspin = document.querySelectorAll("#curspin")
            let allprofit = document.querySelectorAll("#profit")
            let expense = document.querySelectorAll("#expense")
            let point = document.querySelectorAll("#points")
            let reward = document.querySelectorAll("#reward")
            let circles = document.getElementById("circles")
            let percent = document.querySelectorAll("#percent")

    // background: conic-gradient( #0cb600 66%, rgba(255, 255, 255, 0.12) 66%);

            let user = response.data['userdetails'];
            let bal = response.data['balances'];
            let fee = response.data['fee'];

            let mypercent = user['percent'] + "%"

            circles.style.background = `conic-gradient( #0cb600 ${mypercent}, rgba(255, 255, 255, 0.12) ${mypercent})`

            percent.forEach( (value) => {
                value.innerHTML = mypercent;
                });

            
            allusername.forEach( (value) => {
                value.innerHTML = user['uname'];
                });
                allupline.forEach( (value) => {
                    value.innerHTML = user['upline'];
                    });

                expense.forEach( (value) => {
                    value.innerHTML = bal['expense'];
                    });
                    point.forEach( (value) => {
                        value.innerHTML = bal['target'];
                        });
                        reward.forEach( (value) => {
                            value.innerHTML = bal['reward'];
                            });
            allemail.forEach( (value) => {
                value.innerHTML = user['email'];
                });   
            allphone.forEach( (value) => {
                value.innerHTML = user['phone'];
                });
                
                alljoin.forEach( (value) => {
                    value.style.color  = 'red';
                    if(user['status'] == 2){
                        value.style.color  = '#55ec44';
                    }
                    value.innerHTML = user['join'];
            });   
            allustatus.forEach( (value) => {
                let mystate = 'Inactive'
                value.style.color  = 'red';
                if(user['status'] == 2){
                    mystate = 'Active'
                    value.style.color  = '#55ec44';
                }
                value.innerHTML = mystate;
                });
                linkinput.forEach( (value) => {
                value.value = value.value + user['uname'];
                });   
            allusys.forEach( (value) => {
                value.innerHTML = user['ccurrency'];
                });
            curbal.forEach( (value) => {
                value.innerHTML = bal['balance'];
                });   
                curwel.forEach( (value) => {
                    value.innerHTML = bal['bonus'];
                    });   
            curwithtotal.forEach( (value) => {
                value.innerHTML = bal['totalwithdrawal'];
                });
            curwithpen.forEach( (value) => {
                value.innerHTML = bal['pendingwithdrawal'];
                });
                allprofit.forEach( (value) => {
                    value.innerHTML = bal['profit'];
                    });

                curtivia.forEach( (value) => {
                    value.innerHTML = bal['trivia'];
                    });  
                curspin.forEach( (value) => {
                    value.innerHTML = bal['spin'];
                    });
                    curyou.forEach( (value) => {
                        value.innerHTML = bal['youtube'];
                        });
                curtiktok.forEach( (value) => {
                    value.innerHTML = bal['tiktok'];
                    });
        }else{
            alert("Seems We have An Issue Fetching Your Data Please Try Again Later")
        }

        } catch (error) {
        alert(error);
    }
    // openLoader(false)
}

data()

function deleteCookie(name) {
    document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/`;
    window.location.reload();

}


logout.addEventListener('click', () => {
    deleteCookie('access_token')

})


myactivate.addEventListener('click', () =>{
    async function activateme() {
        try {
            const response = await requestData(`${baseUrl}activateaccount`, 'GET');           
            if (Array.isArray(response.info) && response.info.length > 0) {
                response.info.forEach(value => {
                    alert(value.msg);
                });
            } else {
                // console.log(response);
            }
        } catch (error) {
            alert(error);
        }
        // openLoader(false);
    }

    activateme()
    
})