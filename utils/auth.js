// let baseUrl = "https://earnempire.seosblog.com/?action=";
let baseUrl = "http://localhost/officialsystem/?action=";

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

    openLoader(true)

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
            // let allusername = document.querySelectorAll("#username")
            // let allusername = document.querySelectorAll("#username")
            // let allusername = document.querySelectorAll("#username")
            // let allusername = document.querySelectorAll("#username")
            // let allusername = document.querySelectorAll("#username")
            // let allprofit = document.querySelectorAll("#profit")
            

            allusername.forEach( (value) => {
                value.innerHTML = response.data[0]['uname'];
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
                    value.innerHTML = response.data[0]['join'];

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
                value.innerHTML = response.data[0]['ucountryid'];
                });
            // allemail.forEach( (value) => {
            //     value.innerHTML = response.data[0]['uemail'];
            //     });   
            // allusername.forEach( (value) => {
            //     value.innerHTML = response.data[0]['uname'];
            //     });
            // allemail.forEach( (value) => {
            //     value.innerHTML = response.data[0]['uemail'];
            //     });
        }else{
            alert("Seems We have An Issue Fetching Your Data Please Try Again Later")
        }

        } catch (error) {
        alert(error);
    }
    openLoader(false)
}

data()