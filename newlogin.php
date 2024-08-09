<script>
function getQueryParam(param) {
    let urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

// Get the access token from the URL
let accessToken = getQueryParam('access_token');

if (accessToken) {
    setCookie("access_token", accessToken,-2)
    setCookie("access_token", accessToken,1)
    window.location.href = '/'
}


function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }


</script>