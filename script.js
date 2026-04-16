document.getElementById("regForm").addEventListener("submit", function(e) {
    let firstName = document.getElementById("firstName").value.trim();
    let lastName = document.getElementById("lastName").value.trim();

    if (firstName === "" || lastName === "") {
        alert("First name and last name are required!");
        e.preventDefault();
        return;
    }

    let gender = document.querySelector('input[name="gender"]:checked');
    if (!gender) {
        alert("Please select your gender!");
        e.preventDefault();
        return;
    }
});
