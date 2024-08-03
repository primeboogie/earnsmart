let baseUrl = "https://earnempire.seosblog.com/?action=";
// let baseUrl = "http://localhost/officialsystem/?action=";

let menuid = document.getElementById("menuid");
let navbar = document.getElementById("navbar");
let overs = document.getElementById("overs");
let earnimgs = document.getElementById("earnimgs");
let linkbtn = document.getElementById("linkbtn");
let linkinput = document.getElementById("linkinput");
let myactivate = document.getElementById("activateme");
let logout = document.getElementById("logout");
let loaderrr = document.getElementById("loaderrr");
let depoform = document.getElementById("depoform");
let acvtivateme = document.getElementById("acvtivateme");






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
    // openLoader(true);

    try {
        const response = await requestData(`${baseUrl}userdata`, 'GET');

        if (response.resultcode) {
            const {
                userdetails: { uname, upline, email, phone, join, status, percent, ccurrency },
                balances: {
                    actbal, expense, target, reward, balance, bonus, totalwithdrawal, pendingwithdrawal, profit, trivia, spin, youtube, tiktok
                }
            } = response.data;

            // Helper function to update element contents
            const updateElements = (selectors, value) => {
                document.querySelectorAll(selectors).forEach(el => el.innerHTML = value);
            };

            // Helper function to update elements with color
            const updateElementsWithColor = (selectors, value, condition, trueColor, falseColor) => {
                document.querySelectorAll(selectors).forEach(el => {
                    el.innerHTML = value;
                    el.style.color = condition ? trueColor : falseColor;
                });
            };

            const percentString = `${percent}%`;

            // Update the circles gradient
            const circles = document.getElementById("circles");
            if (circles) {
                circles.style.background = `conic-gradient(#0cb600 ${percentString}, rgba(255, 255, 255, 0.12) ${percentString})`;
            }

            // Update UI elements
            updateElements("#username", uname);
            updateElements("#upline", upline);
            updateElements("#email", email);
            updateElements("#phone", phone);
            updateElements("#ccurrency", ccurrency);
            updateElements("#curbal", balance);
            updateElements("#curwel", bonus);
            updateElements("#curwithtotal", totalwithdrawal);
            updateElements("#curwithpen", pendingwithdrawal);
            updateElements("#profit", profit);
            updateElements("#curtivia", trivia);
            updateElements("#curspin", spin);
            updateElements("#curyou", youtube);
            updateElements("#curtiktok", tiktok);
            updateElements("#actbals", actbal);

            updateElementsWithColor("#join", join, status == 2, '#55ec44', 'red');
            updateElementsWithColor("#ustatus", status == 2 ? 'Active' : 'Inactive', status === 2, '#55ec44', 'red');

            document.querySelectorAll("#linkinput").forEach(input => {
                input.value += uname;
            });

            document.querySelectorAll("#points").forEach(el => el.innerHTML = target);
            document.querySelectorAll("#reward").forEach(el => el.innerHTML = reward);
        } else {
            alert("It seems there is an issue fetching your data. Please try again later.");
        }
    } catch (error) {
        console.error('Error fetching data:', error);
        alert("An error occurred while fetching your data. Please try again later.");
    }
    // openLoader(false);
}

data();

function deleteCookie(name) {
    document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/`;
    window.location.reload();

}


logout.addEventListener('click', () => {
    deleteCookie('access_token')

})

if(myactivate){
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
}

const changpasswords = document.getElementById("changpasswords");
const passform = document.getElementById("passform");

if(changpasswords){
changpasswords.addEventListener('click', () => {

  if (passform.style.display === "none" || passform.style.display === "") {
  // Show the form and change button text
  passform.style.display = "grid";
  changpasswords.innerHTML = "Cancel";
} else {
  // Hide the form and change button text back
  passform.style.display = "none";
  changpasswords.innerHTML = "Change Password";
}
})
}
if(passform){

passform.addEventListener('submit', (e) => {
    e.preventDefault()
  
    const formData = new FormData(passform);
  
    const formObject = {};
    formData.forEach((value, key) => {
        formObject[key] = value;
    });
  
    async function registerPost() {
        try {
            const response = await requestData(`${baseUrl}updatepassword`, 'POST', formObject);          
  
            if(response.resultcode){
                passform.reset();
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
    // openLoader(false)
    }
  
    registerPost();
  })
}
let team = document.getElementById("team")

if(team){
    justcon()
}
function justcon(){
    const url = window.location.href;

    const urlObj = new URL(url);

    const pathname = urlObj.pathname;

    const segments = pathname.split('/');

    const lastSegment = segments.pop(); // This will be '2'

    const lastDigit = parseInt(lastSegment, 10);

    console.log(lastDigit); // Output: 2



}


if(depoform){

    depoform.addEventListener('submit', (e) => {
        e.preventDefault()
      
        const formData = new FormData(depoform);
      
        const formObject = {};
        formData.forEach((value, key) => {
            formObject[key] = value;
        });
      
        async function registerPost() {
            try {
                const response = await requestData(`${baseUrl}stkpush`, 'POST', formObject);          
      
                if(response.resultcode){
                    depoform.reset();
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
        // openLoader(false)
        }
      
        registerPost();
      })
    }


if(acvtivateme){

    acvtivateme.addEventListener('submit', (e) => {
        e.preventDefault()
      
        // const formData = new FormData(acvtivateme);
      
        // const formObject = {};
        // formData.forEach((value, key) => {
        //     formObject[key] = value;
        // });
      
        async function registerPost() {
            try {
                const response = await requestData(`${baseUrl}activateaccount`);          
      
                if(response.resultcode){
                    acvtivateme.reset();
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
                    window.location.href = '/'

      
            } catch (error) {
                console.log(error);
            }
        // openLoader(false)
        }
      
        registerPost();
      })
    }