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