let menuid = document.getElementById("menuid");

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
    alert("Chonjo")
})