function submitForm() {
    // Save values in localStorage
    localStorage.setItem("name", document.getElementById("name").value);
    localStorage.setItem("nationality", document.getElementById("nationality").value);
    localStorage.setItem("email", document.getElementById("email").value);
    localStorage.setItem("phone", document.getElementById("phone").value);
    localStorage.setItem("gender", document.getElementById("gender").value);
    localStorage.setItem("marks10", document.getElementById("marks10").value);
    localStorage.setItem("marks12", document.getElementById("marks12").value);
    localStorage.setItem("age", document.getElementById("age").value);
    localStorage.setItem("cgpa", document.getElementById("cgpa").value);
    localStorage.setItem("course", document.getElementById("course").value);
    localStorage.setItem("address", document.getElementById("address").value);

    // Go to next page
    window.location.href = "result.html";
}
