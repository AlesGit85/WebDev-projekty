

    let passwordInput = document.getElementById("password");
    let oznameni = document.getElementById("oznameni");
    let form = document.getElementById("passwordForm");

    passwordInput.addEventListener("input", function() {

    })

    form.addEventListener("submit", function(event) {
        if (passwordInput.value.length < 8) {
            oznameni.textContent = "Heslo musí mít alespoň 8 znaků.";
            oznameni.style.color = "red";
            event.preventDefault()
} 

else {
    oznameni.textContent = "Heslo je v pořádku.";
    oznameni.style.color = "green";
    event.target.submit();
}}

 )