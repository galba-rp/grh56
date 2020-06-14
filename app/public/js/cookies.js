document.getElementById("accept").addEventListener("click", setCookie);
document.getElementById("cookies_more").addEventListener("click", aboutCookies);
//setCookie sets cookie grh56 to expire in one year if accepted
function setCookie() {
    var expires = new Date;
    expires.setFullYear(expires.getFullYear() + 1);
    document.cookie = 'grh56=yes; path=/; SameSite=lax' + expires.toUTCString() + ';';
    document.getElementById("cookie_bar").classList.add("none");
}

function read() {
    alert(document.cookie);
}

function aboutCookies() {
    window.location.href = "cookies";
}