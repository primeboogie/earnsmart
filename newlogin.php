<script>
function getQueryParam(param) {
    let urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

// Get the access token from the URL
let accessToken = getQueryParam('access_token');

if (accessToken) {
    document.cookie = "access_token=" + accessToken + "; path=/; domain=earn-empire.com";
}
window.location.href("/")

</script>