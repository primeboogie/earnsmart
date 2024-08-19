let baseUrl = "https://earnempire.seosblog.com/?action=";
// let baseUrl = "http://localhost/officialsystem/?action=";

let menuid = document.getElementById("menuid");
let navbar = document.getElementById("navbar");
let overs = document.getElementById("overs");
let earnimgs = document.getElementById("earnimgs");
let linkbtn = document.getElementById("linkbtn");
let linkinput = document.getElementById("linkinput");
let myactivate = document.getElementById("activateme");
let logout = document.querySelectorAll(".logout");
let loaderrrr = document.getElementById("loaderrrr");
let depoform = document.getElementById("depoform");
let acvtivateme = document.getElementById("acvtivateme");
let withforrm = document.getElementById("withforrm");
let readyButton = document.getElementById("readyButton");
let youtubediv = document.getElementById("youtubediv");
let tiktokdiv = document.getElementById("tiktokdiv");

// Mornings Hours 10: AM

let content =document.getElementById("content")
let container =document.getElementById("container")

async function requestData(url, method = "GET", myBody = null) {
    openLoader(true);

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
        console.log(error);
        deleteCookie('access_token');

        window.location.reload();


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
        document.getElementById("loaderrrr").style.display = "flex";
    }else{
        document.getElementById("loaderrrr").style.display = "none";
    }
}
menuid.addEventListener('click', () => {
    menuid.classList.toggle("fa-xmark");
    navbar.classList.toggle("navhelper");
    overs.classList.toggle("showall");
});

document.addEventListener('click', (event) => {
    // Ensure the click is outside of the menu toggle area
    if (navbar.classList.contains('navhelper') && !menuid.contains(event.target) && !navbar.contains(event.target)) {
        menuid.click()

    }
});


earnimgs.addEventListener('click', ()=>{
  window.location.reload();

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
    try {
        const response = await requestData(`${baseUrl}userdata`, 'GET');

        if (response.resultcode) {
            const {
                userdetails: { uname, upline, email, phone, join, status, ccurrency, emailed },
                balances: {
                    actbal, expense, target, reward, percent, progress, remaining, dailystatus, balance, bonus, totalwithdrawal, pendingwithdrawal, profit, trivia, spin, youtube, tiktok
                }
            } = response.data;

            // Helper function to update element contents
            const updateElements = (selectors, value) => {
                document.querySelectorAll(selectors).forEach(el => el.innerHTML = value);
            };

            // Helper function to update elements with color
            const updateElementsWithColor = (selectors, value, condition, trueColor, falseColor) => {
                document.querySelectorAll(selectors).forEach(el => {
                    if(true){

                    }
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

            function proptupdate(){
                alert(`Hi ${uname}, Please Update Your Registration Details to proceed.`)
                let myemail = null;
                let myphone = null;

                while (myemail === "" || myemail == null) {
                    myemail = prompt("Enter Email..");
                }
                while (myphone === "" || myphone == null) {
                    myphone = prompt("Enter Phone..");
                }
                let datasent = {
                    "uemail": myemail,
                    "phone": myphone
                }
                
                    async function senddetails() {
                        try {
                            const response = await requestData(`${baseUrl}soloupdate`, 'POST',datasent);           
                            if (Array.isArray(response.info) && response.info.length > 0) {
                                response.info.forEach(value => {
                                    alert(value.msg);
                                });
                            }
                        } catch (error) {
                            console.log(error);
                        }
                        openLoader(false);
                    }
            
                    senddetails()
                }
            if(emailed == '0'){
                proptupdate();
            }
            // Update UI elements
            updateElements("#username", uname);
            updateElements("#upline", upline);
            updateElements("#email", email);
            updateElements("#phone", phone);
            updateElements("#usys", ccurrency);
            updateElements("#curbal", balance);
            updateElements("#expense", expense);
            updateElements("#curwel", bonus);
            updateElements("#curwithtotal", totalwithdrawal);
            updateElements("#curwithpen", pendingwithdrawal);
            updateElements("#profit", profit);
            updateElements("#curtivia", trivia);
            updateElements("#curspin", spin);
            updateElements("#curyou", youtube);
            updateElements("#curtiktok", tiktok);
            updateElements("#actbals", actbal);

            updateElementsWithColor("#join", join, status == 2, 'yellow', 'red');
            updateElementsWithColor("#ustatus", status == 2 ? 'Active' : 'Inactive', status === 2, 'yellow', 'red');

            document.querySelectorAll("#linkinput").forEach(input => {
                input.value += uname;
            });

            document.querySelectorAll("#points").forEach(el => el.innerHTML = target);
            document.querySelectorAll("#reward").forEach(el => el.innerHTML = reward);
            document.querySelectorAll("#yourpoints").forEach(el => el.innerHTML = progress);
            document.querySelectorAll("#rempoint").forEach(el => el.innerHTML = remaining);

            document.querySelectorAll("#percent").forEach(el => el.innerHTML = percent+"%");
        } else {
            // alert("It seems there is an issue fetching your data. Please try again later.");
        deleteCookie('access_token');

            window.location.reload();

        }
    } catch (error) {
        deleteCookie('access_token');

        window.location.reload();

        console.error('Error fetching data:', error);
        console.log("An error occurred while fetching your data. Please try again later.");
    }

    openLoader(false);
}
let dailyclaim = document.getElementById("dailyclaim")

if(dailyclaim){
    dailyclaim.addEventListener('click', () => {
            async function dailyclaims() {
                try {
                    const response = await requestData(`${baseUrl}dailybonus`, 'GET');           
                    if (Array.isArray(response.info) && response.info.length > 0) {
                        response.info.forEach(value => {
                            alert(value.msg);
                        });
                    } else {
                        // console.log(response);
                    }
                } catch (error) {
                    console.log(error);
                }
                openLoader(false);
            }
    
            dailyclaims()
            
        })
}

let welcomeclaim = document.getElementById("welcomeclaim")

if(welcomeclaim){
    welcomeclaim.addEventListener('click', () => {
            async function welcomeclaims() {
                try {
                    const response = await requestData(`${baseUrl}welcomebonus`, 'GET');           
                    if (Array.isArray(response.info) && response.info.length > 0) {
                        response.info.forEach(value => {
                            alert(value.msg);
                        });
                    } else {
                        // console.log(response);
                    }
                } catch (error) {
                    console.log(error);
                }
                openLoader(false);
            }
    
            welcomeclaims()
            
        })
}

function deleteCookie(name) {
    document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/`;
    window.location.reload();

}

logout.forEach((button) => {
    button.addEventListener('click', () => {
        deleteCookie('access_token');
    });
});
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
                console.log(error);
            }
            openLoader(false);
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
    openLoader(false)
    }
  
    registerPost();
  })
}
if(withforrm){

    withforrm.addEventListener('submit', (e) => {
        e.preventDefault()
      
        const formData = new FormData(withforrm);
      
        const formObject = {};
        formData.forEach((value, key) => {
            formObject[key] = value;
        });
      
        async function withdrawalForm() {
            try {
                const response = await requestData(`${baseUrl}systemwithdrawal`, 'POST', formObject);          
      
                if(response.resultcode){
                    withforrm.reset();
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
      
        withdrawalForm();
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


      
        async function teamGet() {
            try {
                const response = await requestData(`${baseUrl}myDownilnes&level=${lastDigit}`);          

                if (Array.isArray(response.info) && response.info.length > 0) {
                        response.info.forEach(value => {
                            alert(value.msg);
                        });
                    }
                    const data = response.data.data;
                    const tbody = document.querySelector('#dataTable tbody');
                    const thead = document.querySelector('#dataTable thead #tableHeader');
                const searchInput = document.querySelector('#searchInput');

                const mylevel = document.getElementById("totalmoney")
                team.innerHTML = response.data['Level'] 
                mylevel.innerHTML = response.data['Currency'] + " " + response.data['Earned']
                    
                    // Create table headers dynamically
                    if (data.length > 0) {
                        const headers = ['No', ...Object.keys(data[0])];

                        headers.forEach(header => {
                            const th = document.createElement('th');
                            th.textContent = header;
                            thead.appendChild(th);
                        });
                        
                        data.sort((a, b) => a.Status.localeCompare(b.status));
                        function renderRows(filteredData) {
                            tbody.innerHTML = "";
                            filteredData.forEach((item, index) => {
                                const row = document.createElement('tr');
                                if (item['status'] == 'Active') {
                                    row.style.background = "rgba(83, 209, 20, 0.64)";
                                }
                                if (item['active'] == 'Suspended') {
                                    row.style.background = "orangered";
                                }
            
                                headers.forEach(header => {
                                    const td = document.createElement('td');
                                    if (header === 'No') {
                                        td.textContent = index + 1;
                                    } else {
                                        td.textContent = item[header];
                                    }
                                    row.appendChild(td);
                                });
                                tbody.appendChild(row);
            
                                row.removeEventListener('click', handleclicks);
                                // Remove the previous event listener (if any) before adding a new one
                                row.addEventListener('click', handleclicks);
            
                                function handleclicks() {
                                    mydetails(item);
                                }
                            });
                        }
            
                        // Initial render of rows
                        renderRows(data);
            
                        searchInput.addEventListener('input', () => {
                            const query = searchInput.value.toLowerCase();
                            const filteredData = data.filter(item => {
                                return Object.values(item).some(value =>
                                    String(value).toLowerCase().includes(query)
                                );
                            });
            
                            // Render filtered rows
                            renderRows(filteredData);
                        });
                    }
            } catch (error) {
                console.log(error);
            }
        openLoader(false)
        }
        teamGet();
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
        openLoader(false)
        }
      
        registerPost();
      })
    }


if(acvtivateme){

    acvtivateme.addEventListener('submit', (e) => {
        e.preventDefault()
      
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
        openLoader(false)
        }
        registerPost();
      })
    }
    if(readyButton) {
        let quizsubmit = document.getElementById("quizsubmit")
        let submitbtn = document.createElement('button')
        let mytimmer = document.getElementById("mytimmer")
        
        submitbtn.className = "authbtn"
        submitbtn.textContent = "Submit"
        readyButton.addEventListener('click', async () => {
            let currentSeconds = 60;
    
            function updateTimer() {
                if (currentSeconds >= 0) {
                    if(currentSeconds <= 9){
                        currentSeconds = `0${currentSeconds}`;
                    }
                    mytimmer.innerHTML = currentSeconds;
                    currentSeconds--;

                    if(submitbtn.disabled !== true){
                        setTimeout(updateTimer, 1000); // Call updateTimer again after 1 second
                       
                    }
                } else {
                        quizsubmit.requestSubmit()
                        submitbtn.disabled = true
                }
            }

            try{
                const response =  await requestData(`${baseUrl}populatetrivia`, 'GET');
                if (response.resultcode) {
            mytimmer.style.display = 'flex'
            content.style.display = "none"
            container.style.display = "grid"

                    let allquiz = response.data
                    updateTimer(); 

                    allquiz.forEach( quiz => {
                        const { No, Question, A1, A2, A3, A4, qid }  = quiz;

                        let quizbox = document.createElement("div");
                        quizbox.innerHTML = `
                              <span class="cquiz">${No}. ${Question}</span>
                            <label  class="lbb">
                                <input class="lbb" type="radio" name="${qid}" value="${A1}">Ⓐ ${A1}
                            </label>
                            <label class="lbb">
                                <input  type="radio" name="${qid}" value="${A2}">Ⓑ ${A2}
                            </label>
                            <label class="lbb">
                                <input  type="radio" name="${qid}" value="${A3}">Ⓒ ${A3}
                            </label>
                            <label class="lbb">
                                <input  type="radio" name="${qid}" value="${A4}">Ⓓ ${A4}
                            </label>
                        `
                        quizbox.className = "dquiz"
                        quizsubmit.appendChild(quizbox)
                    })
                    quizsubmit.appendChild(submitbtn)
                } 
                if (Array.isArray(response.info) && response.info.length > 0) {
                    response.info.forEach(value => {
                        alert(value.msg);
                    });
                }
            } catch (error) {
                console.log(error)
            }
            openLoader(false);
            
        });
        quizsubmit.addEventListener('submit', (e) => {
            e.preventDefault()
            submitbtn.disabled = true
  
            const formData = new FormData(quizsubmit);
          
            const formObject = {
                null: null
            };
            formData.forEach((value, key) => {
                formObject[key] = value;
            });
            async function sendanswer() {
                try {
                    const response = await requestData(`${baseUrl}answerdquiz`, 'POST',formObject);           
                    if (Array.isArray(response.info) && response.info.length > 0) {
                        response.info.forEach(value => {
                            alert(value.msg);
                        });
                    } 
                } catch (error) {
                    console.log(error);
                }
                data()
                    content.style.display = "grid"
            container.style.display = "none"
            mytimmer.style.display = 'none'
            openLoader(false);
            }
    
            sendanswer()

        })
    }

    openLoader(true);

    if(youtubediv){
    let youtubecontent = document.getElementById("youtubecontent");
    let youtubevideo = document.getElementById("youtubevideo");


        async function requestvideo() {
            try {
                const response = await requestData(`${baseUrl}populateyoutube`);     
                
                
                if (Array.isArray(response.info) && response.info.length > 0) {
                    response.info.forEach(value => {
                        alert(value.msg);
                    });
                } 
                if(response.resultcode){
                    youtubevideo.style.display = "grid"
                    populateVideos(response.data);
              

                }else {
                    youtubecontent.style.display = "grid"
                }
            } catch (error) {
                console.log(error);
            }
        openLoader(false);
        }

        requestvideo()

        let player;
        function extractVideoId(url) {
            const regExp = /^.*(youtu.be\/|v\/|\/u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
            const match = url.match(regExp);
            return (match && match[2].length === 11) ? match[2] : null;
        }
        
        function populateVideos(videos) {
            const container = document.querySelector('.container');
            container.innerHTML = ''; // Clear existing content
        
            videos.forEach(video => {
                const videoId = extractVideoId(video.v_url);

                let watch = "Watch"
                let turn = ""
                let textspan = "Watch Now"
                let earned = "Worth"

                if(video.v_status === true){
                     watch = "Watched"
                     turn = "turn"
                     textspan = "Already  Watched"
                     earned = "You Earned"
                }
        
                if (videoId) {
                    // Create the container for each video
                    const videoDiv = document.createElement('div');
                    videoDiv.className = 'inyoutube';
                    videoDiv.innerHTML = `
                        <div>
                            <div id="player-${video.No}" style="width: 100%; height: 250px;"></div>
                            <div id="overlay-${video.No}" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0);"></div>
                        </div>
                        <div class="moreyoutube">
                            <span>${textspan}</span>
                            <span>${earned}: <i id="usys"></i> <i>${video.v_price}</i></span>
                            <button class="authbtn ${turn}" id="startButton-${video.No}">${watch}</button>
                        </div>
                    `;
                    
                    container.appendChild(videoDiv);
        
                    // Initialize the YouTube player for each video
                    const player = new YT.Player(`player-${video.No}`, {
                        height: '360',
                        width: '640',
                        videoId: videoId,
                        playerVars: {
                            autoplay: 0,
                            controls: 0,
                            disablekb: 1,
                            modestbranding: 1,
                            playsinline: 1,
                            showinfo: 0,
                            rel: 0,
                            fs: 0,
                        },
                        events: {
                            onReady: onPlayerReady,
                            onStateChange: (event) => onPlayerStateChange(event, video.No)
                        }
                    });

                    // Add event listener to the button
                    document.getElementById(`startButton-${video.No}`).addEventListener('click', function() {
                        if (player) {
                            const playerState = player.getPlayerState();
        
                            if (playerState === YT.PlayerState.PLAYING) {
                                player.pauseVideo();
                            } else {
                                player.playVideo();
                                setTimeout(() => {
                                    payoutvideo(video.v_id)
                                }, 9000);
                            }
                        }
                    });
                } else {
                    console.error('Invalid YouTube URL');
                }
            });
        }
        
        function onPlayerReady(event) {
            // console.log('The video is ready.');
        }
        
        function onPlayerStateChange(event, videoNo) {
            const button = document.getElementById(`startButton-${videoNo}`);
            if (event.data == YT.PlayerState.ENDED) {
                button.textContent = "Re-Watch";
            } else if (event.data == YT.PlayerState.PLAYING) {
                button.textContent = "Playing";
            } else if (event.data == YT.PlayerState.PAUSED) {
                button.textContent = "Paused";
            }
        }

        async function payoutvideo(vid) {
            try {
                const response = await requestData(`${baseUrl}payyoutube`, 'POST',{vid: vid});           
                if (Array.isArray(response.info) && response.info.length > 0) {
                    response.info.forEach(value => {
                        alert(value.msg);
                    });
                } 
                if(response.resultcode){
                    data();
                }
            } catch (error) {
                console.log(error);
            }
        openLoader(false);

        }

    }

    if(tiktokdiv){

        let tiktokcontent = document.getElementById("tiktokcontent");
        let tiktokvideo = document.getElementById("tiktokvideo");
    
    
            async function requestvideo() {
                try {
                    const response = await requestData(`${baseUrl}populatetiktok`);     
                    
                    
                    if (Array.isArray(response.info) && response.info.length > 0) {
                        response.info.forEach(value => {
                            alert(value.msg);
                        });
                    } 
                    if(response.resultcode){
                        tiktokvideo.style.display = "grid"
                        popultetiktok(response.data);
                  
    
                    }else {
                        tiktokcontent.style.display = "grid"
                    }
                } catch (error) {
                    console.log(error);
                }
            openLoader(false);
            }
    
            requestvideo()
            function popultetiktok(videos) {
                const container = document.querySelector('.container');
                container.innerHTML = ''; // Clear existing content
            
                videos.forEach(video => {
                    let watch = "Watch";
                    let turn = "";
                    let textspan = "Watch Now";
                    let earned = "Worth";
            
                    if(video.v_status === true){
                        watch = "Watched";
                        turn = "turn";
                        textspan = "Already Watched";
                        earned = "You Earned";
                    }
            
                    const videoDiv = document.createElement('div');
                    videoDiv.className = 'inyoutube'; // Renamed class for TikTok videos
                    videoDiv.innerHTML = `
                    <div style="width: 100%; height: 350px;">
                    <video id="tiktok-${video.No}" style="width: 100%; height: 100%; object-fit: cover;"controls>
                    <source src="${video.v_url}" type="video/mp4">
                    Your browser does not support the video tag.
                    </video>
                    <div id="overlay-${video.No}" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0);"></div>
                        </div>
                        <div class="moreyoutube">
                            <span>${textspan}</span>
                            <span>${earned}: <i id="usys"></i> <i>${video.v_price}</i></span>
                            <button class="authbtn ${turn}" id="startButton-${video.No}">${watch}</button>
                        </div>
                    `;
                    console.log(video.v_id);

            
                    container.appendChild(videoDiv);
            
                    // Add event listener to the button
                    document.getElementById(`startButton-${video.No}`).addEventListener('click', function() {
                        const tiktokVideo = document.getElementById(`tiktok-${video.No}`);
                        tiktokVideo.play();
                        if (video.v_status === false) {
                            document.getElementById(`overlay-${video.No}`).style.display = "none";
                            setTimeout(() => {
                                payoutvideo(video.v_id);
                            }, 9000); // Payout after video ends
                        }
                    });
                });
            }
            
            async function payoutvideo(vid) {
                try {
                    const response = await requestData(`${baseUrl}paytiktok`, 'POST',{vid: vid});           
                    if (Array.isArray(response.info) && response.info.length > 0) {
                        response.info.forEach(value => {
                            alert(value.msg);
                        });
                    } 
                    if(response.resultcode){
                        data(); // Refresh the data after payout
                    }
                } catch (error) {
                    console.log(error);
                }
                openLoader(false);
            }
    }

    let empirebtn = document.querySelectorAll('#empirebtn');
    let empirefron = document.getElementById('empirefron');
    let cardempire = document.getElementById('cardempire');
    let earnenroll = document.querySelectorAll('#earnenroll');

    if (empirebtn.length > 0) {
        empirebtn.forEach(val => {
            val.addEventListener('click', () => {
                const cardempire = document.querySelector('#cardempire');
                if (cardempire) {
                    cardempire.classList.toggle('goback');
                }
            });
        });
    }

    if (earnenroll.length > 0) {
        earnenroll.forEach(val => {
            val.addEventListener('click', () => {

                if(confirm("You Are About To Exit Earn Empire")){
                    const newTab = window.open("https://one.exnesstrack.net/a/8pcjc79d5c");
                    if (newTab) {
                        newTab.focus();
                    }
                }
            

            });
        });
    }


data();
// setTimeout(data,1000);
