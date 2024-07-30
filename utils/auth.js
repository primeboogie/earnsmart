let baseUrl = "https://earnempire.seosblog.com/?action=";
// let baseUrl = "http://localhost/officialsystem/?action=";

let menuid = document.getElementById("menuid");
let navbar = document.getElementById("navbar");
let overs = document.getElementById("overs");
let earnimgs = document.getElementById("earnimgs");
let linkbtn = document.getElementById("linkbtn");
let linkinput = document.getElementById("linkinput");


async function requestData(url, method = "GET", myBody = null) {
    let request = {
        method: method,
        headers: {
            "Content-Type": "Application/json",
            "Accept": "Application/json" 
        },
        credentials: 'include'
    };
    
    if (myBody !== null) {
        request.body = JSON.stringify(myBody);
    }
    
    try {
        const response = await fetch(url, request);
        const data = await response.json();
        console.log(data)
        
        return data
    } catch (error) {
        return error
    }
}

function openLoader(res){
    if(res){
        document.getElementById("loaderrr").style.display = "flex";
    }else{
        document.getElementById("loaderrr").style.display = "none";
    }
}


async function fortest() {
    try {
        const response = await requestData(`${baseUrl}register`, 'POST', formObject);          
        
        if(response.resultcode){
            console.log(true)
        }
        if (Array.isArray(response.info) && response.info.length > 0) {
            response.info.forEach(value => {
                    console.log(value.msg);
                });
            }
            else{
                console.log(response)
            }

        } catch (error) {
        alert(error);
    }
    openLoader(false)
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
            console.log(true)
        }
        if (Array.isArray(response.info) && response.info.length > 0) {
            response.info.forEach(value => {
                    console.log(value.msg);
                });
            }
            else{
                console.log(response)
            let allusername = document.querySelectorAll("#username")
            let allemail = document.querySelectorAll("#email")
            let allphone = document.querySelectorAll("#phone")
            let allprofit = document.querySelectorAll("#profit")
            // let allusername = document.querySelectorAll("#username")
            // let allusername = document.querySelectorAll("#username")
            // let allusername = document.querySelectorAll("#username")
            // let allusername = document.querySelectorAll("#username")
            // let allusername = document.querySelectorAll("#username")
            // let allusername = document.querySelectorAll("#username")
            // let allusername = document.querySelectorAll("#username")
   
            allusername.forEach( (value) => {
                value.innerHTML = response.data[0]['uname'];
                });
            allemail.forEach( (value) => {
                value.innerHTML = response.data[0]['uemail'];
                });   
            allphone.forEach( (value) => {
                value.innerHTML = response.data[0]['uphone'];
                });
                
                allprofit.forEach( (value) => {
                value.innerHTML = response.data[0]['profit'];
                });   
            // allusername.forEach( (value) => {
            //     value.innerHTML = response.data[0]['uname'];
            //     });
            // allemail.forEach( (value) => {
            //     value.innerHTML = response.data[0]['uemail'];
            //     });   
            // allusername.forEach( (value) => {
            //     value.innerHTML = response.data[0]['uname'];
            //     });
            // allemail.forEach( (value) => {
            //     value.innerHTML = response.data[0]['uemail'];
            //     });   
            // allusername.forEach( (value) => {
            //     value.innerHTML = response.data[0]['uname'];
            //     });
            // allemail.forEach( (value) => {
            //     value.innerHTML = response.data[0]['uemail'];
            //     });


            }

        } catch (error) {
        alert(error);
    }
    openLoader(false)
}

data()