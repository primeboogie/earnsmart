let baseUrl = "https://earnpower.earn-power.com/?action=";
// let baseUrl = "http://localhost/officialsystem/?action=";

let allist = document.getElementById("allist");
let phone = document.getElementById("phone");
let countryid = document.getElementById("countryid");
let country = document.getElementById("country");
let register = document.getElementById("register");
let login = document.getElementById("login");

let sinusername = document.getElementById("sinusername");
let forusername = document.getElementById("username");

let sinphone = document.getElementById("sinphone");
let forphone = document.getElementById("phones");

let sinemail = document.getElementById("sinemail");
let foremail = document.getElementById("email");

let loginusername = document.getElementById("loginusername");
let logusername = document.getElementById("logusername");

// const showLogin = document.getElementById('showLogin');
// const killlogin = document.getElementById('killlogin');
const containerin = document.querySelector("#containerin");

const forgot = document.getElementById("forgot");

// const changesigin = document.getElementById('changesigin');
// const changesignup = document.getElementById('changesignup');

// changesigin.addEventListener('click', () =>{
//     containerin.classList.toggle('handletrans');
//     containerup.classList.toggle('handletrans');

// })

// changesignup.addEventListener('click', () =>{
//     containerup.classList.toggle('handletrans');
//     containerin.classList.toggle('handletrans');
// })

if (forgot) {
  forgot.addEventListener("click", () => {
    let myinput = prompt("Please Enter Your Account Email..");

    async function sendemail() {
      try {
        const response = await requestData(`${baseUrl}newpasswords`, "POST", {
          email: myinput,
        });

        if (Array.isArray(response.info) && response.info.length > 0) {
          response.info.forEach((value) => {
            alert(value.msg);
          });
        }
      } catch (error) {
        console.log(error);
      }
    }

    sendemail();
  });
}
// showLogin.addEventListener('click', () => {
//     containerin.classList.toggle('handletrans');
// });

// killlogin.addEventListener('click', () => {
//     containerin.classList.toggle('handletrans');
// });

// const showSignup = document.getElementById('showSignup');
const killlSignup = document.getElementById("killlSignup");
const containerup = document.querySelector("#containerup");

// showSignup.addEventListener('click', () => {
//     containerup.classList.toggle('handletrans');
// });

// killlSignup.addEventListener('click', () => {
//     containerup.classList.toggle('handletrans');
// });

async function requestData(url, method = "GET", myBody = null) {
  let request = {
    method: method,
    headers: {
      "Content-Type": "Application/json",
      Accept: "Application/json",
    },
  };

  if (myBody !== null) {
    request.body = JSON.stringify(myBody);
  }

  try {
    const response = await fetch(url, request);
    const data = await response.json();

    return data;
  } catch (error) {
    return error;
  }
}

// async function LisTCountrys() {
//     try {
//         const response = await requestData(baseUrl+'populateCountrys', 'GET');

//         if (Array.isArray(response.data) && response.data.length > 0) {
//             // response.data.sort((a, b) => {
//             //     if (a.country < b.country) {
//             //         return -1;
//             //     }
//             //     if (a.country > b.country) {
//             //         return 1;
//             //     }
//             //     return 0;
//             // });
//             response.data.forEach(value => {
//                 let alist = document.createElement("div");
//                 alist.className = "inc"
//                 let spanlist = document.createElement("span")
//                 spanlist.innerHTML = value.country + " " + value.abrv;

//                 alist.appendChild(spanlist)
//                 allist.appendChild(alist);
//                 alist.addEventListener("click", function(){
//                     if(value.id == 'USDT'){

//                         phone.innerHTML = `+`
//                     } else {
//                         phone.innerHTML = `${value.dial}`

//                     }
//                     countryid.value = value.country
//                     country.value = value.id
//                     viewCountry(false)
//                 } )
//             });

//         }
//     } catch (error) {
//         console.error(error);
//     }
// }

function viewCountry(res) {
  if (res) {
    document.getElementById("countrylist").style.display = "grid";
    document.getElementById("overs").style.display = "grid";
  } else {
    document.getElementById("countrylist").style.display = "none";
    document.getElementById("overs").style.display = "none";
  }
}

// function openLoader(res){
//     if(res){
//         document.getElementById("loaderrr").style.display = "flex";
//     }else{
//         document.getElementById("loaderrr").style.display = "none";
//     }
// }

// countryid.addEventListener('click', ()=>{
//     viewCountry(true)
// })

if(register){

register.addEventListener('submit', (e) => {
    e.preventDefault()
    // openLoader(true)

        const formData = new FormData(register);

        const formObject = {};
        formData.forEach((value, key) => {
            formObject[key] = value;
        });

        async function registerPost() {
            try {
                const response = await requestData(`${baseUrl}register`, 'POST', formObject);

                if(response.resultcode){

                    const responseLogin = await requestData(`${baseUrl}login`, 'POST', formObject);

                    if(responseLogin.resultcode){
                        setCookie("access_token", responseLogin.data['access_token'],1)
                        register.reset();

// ! confirm change here
                    // window.location.href = '/earnsmart/'

                    window.location.href = '/'
                    }

                }
                if (Array.isArray(response.info) && response.info.length > 0) {
                            notify(response.info);
                    }

            } catch (error) {
                console.log(error);
            }
        // openLoader(false)
        }

        registerPost();
    })
  }

function setCookie(name, value, days) {
  let expires = "";
  if (days) {
    const date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + (value || "") + expires + "; path=/";
}
if(login){
login.addEventListener("submit", (e) => {
  e.preventDefault();
  // openLoader(true)

  const formData = new FormData(login);

  const formObject = {};
  formData.forEach((value, key) => {
    formObject[key] = value;
  });

  async function loginPost() {
    try {
      const response = await requestData(`${baseUrl}login`, "POST", formObject);

      if (response.resultcode) {
        setCookie("access_token", response.data["access_token"], 1);
        login.reset();

        setTimeout(() => {
            // ! confirm change here
            // window.location.href = "/earnsmart/";
            window.location.href = '/'
        }, 1500)
      }
      if (Array.isArray(response.info) && response.info.length > 0) {
        notify(response.info)
      }
    } catch (error) {
      console.log(error);
    }
    // openLoader(false)
  }

  loginPost();
});
}

// LisTCountrys();

let shaky = (resp) => {
  if (resp) {
    forusername.classList.add("shacky");
  } else {
    forusername.classList.remove("shacky");
  }
};

let shakyem = (resp) => {
  if (resp) {
    foremail.classList.add("shacky");
  } else {
    foremail.classList.remove("shacky");
  }
};

let shakyph = (resp) => {
  if (resp) {
    forphone.classList.add("shacky");
  } else {
    forphone.classList.remove("shacky");
  }
};

let shakylog = (resp) => {
  if (resp) {
    logusername.classList.add("shacky");
  } else {
    logusername.classList.remove("shacky");
  }
};

// window.addEventListener("click", (event) => {
//   if (event.target == document.getElementById("overs")) {
//     viewCountry(false);
//   }
// });
// document.getElementById("closeC").addEventListener('click', () => {
//     viewCountry(false)
// })profile

// sinusername.addEventListener('input', () => {
//     async function confirmUser() {
//         try {
//             const response = await requestData(`${baseUrl}freeuser`, 'POST', {"username": sinusername.value});

//             if(response.resultcode){
//                 shaky(true)
//             }else{
//                 shaky(false)
//             }
//                 } catch (error) {
//                     alert(error);
//                 }
//             }

//             confirmUser()
//         })

//         sinemail.addEventListener('input', () => {
//             async function confirmUser() {
//                 try {
//                     const response = await requestData(`${baseUrl}freeemail`, 'POST', {"email": sinemail.value});

//                     if(response.resultcode){
//                         shakyem(true)
//                     }else{
//                         shakyem(false)
//                     }
//                         } catch (error) {
//                             alert(error);
//                         }
//                     }

//                     confirmUser()
//                 })

//     sinphone.addEventListener('input', () => {
//         if(sinphone.value[0] == 0){
//             sinphone.value = sinphone.value.replace(/^0+/, '')
//         }
//         async function confirmUser() {
//             try {
//                 const response = await requestData(`${baseUrl}freephone`, 'POST', {"phone": sinphone.value});

//                 if(response.resultcode){
//                     shakyph(true)
//                 }else{
//                     shakyph(false)
//                 }
//                     } catch (error) {
//                         alert(error);
//                     }
//                 }

//                 confirmUser()
//             })

// loginusername.addEventListener('change', () => {
//     async function confirmUser() {
//         try {
//             const response = await requestData(`${baseUrl}freeuser`, 'POST', {"username": loginusername.value});

//             if(response.resultcode){
//                 shakylog(false)
//             }else{
//                 shakylog(true)
//                 setTimeout(function() {
//                     shakylog(false)
//                 }, 5000);
//             }

//                 } catch (error) {
//                     alert(error);
//                 }
//             }

//             confirmUser()
//         })



const notificationContainer = document.getElementById("notifications");

function notify(notifications){


  // Render notifications
  notifications.forEach((notification) => {
    const notificationElement = document.createElement("div");
    notificationElement.className =
      "w-[96%] lg:w-96 bg-purple-700 text-white rounded-md shadow-md animate-slide-down border overflow-hidden";
    notificationElement.innerHTML = `
      <div class="px-4 py-2 border-b bg-purple-600 border-white flex justify-between items-center" style="color: yellow">
        <span class="font-semibold gap-2 flex items-center">
          ${
              notification.icon
          }
          
          ${
            notification.state === 1
              ? "Error"
              : notification.state === 2
              ? "Success"
              : "Info"
          }
        </span>
  <button
    class="text-orange-500 hover:text-red-300 rounded-full w-5 h-5 bg-white flex items-center justify-center"
    onclick="this.parentElement.parentElement.remove()"
  >
    ✕
  </button>
  
      </div>
      <div class="px-4 py-2 text-sm">
        <p>${notification.msg}</p>
        <p class="text-sm text-gray-400">${notification.time}</p>
      </div>
    `;
    notificationContainer.appendChild(notificationElement);
  });
  }