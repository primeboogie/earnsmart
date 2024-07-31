let baseUrl = "https://earnempire.seosblog.com/?action=";
// let baseUrl = "http://localhost/officialsystem/?action=";

let menuid = document.getElementById("menuid");
let navbar = document.getElementById("navbar");
let overs = document.getElementById("overs");
let earnimgs = document.getElementById("earnimgs");
let linkbtn = document.getElementById("linkbtn");
let linkinput = document.getElementById("linkinput");


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
        const response = await requestData(`${baseUrl}data`, 'GET');          
        
        if(response.resultcode){
                console.log(response.data[0])
            let allusername = document.querySelectorAll("#username")
            let allemail = document.querySelectorAll("#email")
            let allphone = document.querySelectorAll("#phone")
            let alljoin = document.querySelectorAll("#join")
            let allustatus = document.querySelectorAll("#ustatus")
            let linkinput = document.querySelectorAll("#linkinput")
            let allusys = document.querySelectorAll("#usys")
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

            let registrations = [
                { uname: 'Joe254', expe: '500', sys: 'KSH', profit: '61,500', curbal: '24,000', welcome: '100'},
                { uname: 'Mulaman', expe: '12,000', sys: 'TZS', profit: '258,000', curbal: '71,000', welcome: '2,000'},
                { uname: 'Juniorpro', expe: '17,000', sys: 'UGX', profit: '687,546', curbal: '121,454', welcome: '3,000'},
                { uname: 'Claude250', expe: '5,000', sys: 'RWF', profit: '86,000', curbal: '23,054', welcome: '1,000'},
                { uname: 'Shema', expe: '60', sys: 'PULA', profit: '747', curbal: '369', welcome: '10'},
                { uname: 'Hanifa', expe: '10,000', sys: 'SSP', profit: '477,000', curbal: '130,070', welcome: '400'},
                { uname: 'Rosaline', expe: '2,800', sys: 'XAF', profit: '772,500', curbal: '69,300', welcome: '450'},
                { uname: 'Abina', expe: '60', sys: 'GHC', profit: '6,150', curbal: '1,460', welcome: '12'},
                { uname: 'Yakay', expe: '700', sys: 'GMD', profit: '124,000', curbal: '4,900', welcome: '50'},
                { uname: 'Orera', expe: '8,600', sys: 'MK', profit: '213,600', curbal: '16,690', welcome: '1,300'},
                { uname: 'Cheelo', expe: '100', sys: 'ZK', profit: '31,400', curbal: '4,600', welcome: '20'},
                { uname: 'Abiola', expe: '5,000', sys: 'NGN', profit: '6,0875', curbal: '7,800', welcome: '1,250'},
                { uname: 'Jones', expe: '10', sys: 'USD', profit: '6,300', curbal: '300', welcome: '1'},
            ];

            registrations = registrations[12];
            

            
            

            allusername.forEach( (value) => {
                value.innerHTML = registrations['uname'];
                });

                expense.forEach( (value) => {
                    value.innerHTML = registrations['expe'];
                    });
            allemail.forEach( (value) => {
                value.innerHTML = response.data[0]['uemail'];
                });   
            allphone.forEach( (value) => {
                value.innerHTML = response.data[0]['uphone'];
                });
                
                alljoin.forEach( (value) => {
                    value.style.color  = 'red';
                    if(response.data[0]['ustatus'] == 2){
                        value.style.color  = '#55ec44';
                    }
                    value.innerHTML = response.data[0]['ujoin'];
            });   
            allustatus.forEach( (value) => {
                let mystate = 'Inactive'
                value.style.color  = 'red';
                if(response.data[0]['ustatus'] == 2){
                    mystate = 'Active'
                    value.style.color  = '#55ec44';
                }
                value.innerHTML = mystate;
                });
                linkinput.forEach( (value) => {
                value.value = value.value + response.data[0]['uname'];
                });   
            allusys.forEach( (value) => {
                value.innerHTML = registrations['sys'];
                });
            curbal.forEach( (value) => {
                value.innerHTML = registrations['curbal'];
                });   
                curwel.forEach( (value) => {
                    value.innerHTML = registrations['welcome'];
                    });   
            curwithtotal.forEach( (value) => {
                value.innerHTML = response.data[0]['whatsappwithdrawn'];
                });
            curwithpen.forEach( (value) => {
                value.innerHTML = response.data[0]['way2'];
                });
                allprofit.forEach( (value) => {
                    value.innerHTML = registrations['profit'];
                    });

                curtivia.forEach( (value) => {
                    value.innerHTML = response.data[0]['trivia'];
                    });  
                curspin.forEach( (value) => {
                    value.innerHTML = response.data[0]['way3'];
                    });
                    curyou.forEach( (value) => {
                        value.innerHTML = response.data[0]['youtube'];
                        });
                curtiktok.forEach( (value) => {
                    value.innerHTML = response.data[0]['meme'];
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


