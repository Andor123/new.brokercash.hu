const consentBox = document.getElementById("consentBox");
const acceptBtn = document.querySelector(".consentButton");
const rejectBtn = document.querySelector(".rejectButton");

acceptBtn.onclick = () => {
    let currentDate = new Date();
    document.cookie = "Brokercash=Br0kerCA5HHH;max-age="
        + 43.5 * 60 * 1000;
    if (document.cookie) {
        consentBox.style.display = "none";
    } else {
        alert ("A sütit nem lehet beállítani!"+ 
                " Kérjük, oldja fel az oldal blokkolását"+ 
                " a böngészője süti-beállításaiban.");
    }
}

rejectBtn.onclick = () => {
    alert("Sütik elutasítva. Egyes funkciók korlátozottak lehetnek.");
    consentBox.style.display = "none";
}

let checkCookie = document.cookie.indexOf("Brokercash=Br0kerCA5HHH");
checkCookie !== -1 ? consentBox.style.display = "none" : consentBox.style.display = "block";