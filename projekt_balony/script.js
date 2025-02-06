// Skript pro index

function checkLogin(event) {
    event.preventDefault(); // Zabrání odeslání formuláře

    const username = document.getElementById("user").value;
    const password = document.getElementById("pass").value;
    const errorMessage = document.getElementById("error-msg");

    if (username === "admin" && password === "12345") {
        window.location.href = "admin.html"; // Přesměrování
    } else {
        errorMessage.textContent = "Špatné přihlašovací údaje!"; // Chyba
        errorMessage.style.color = "red";
    }
}



document.getElementById("otevriNotifikace").addEventListener("click", function() {
    document.getElementById("notifikace").classList.remove("hidden");
});

document.getElementById("zavriNotifikace").addEventListener("click", function() {
    document.getElementById("notifikace").classList.add("hidden");
});