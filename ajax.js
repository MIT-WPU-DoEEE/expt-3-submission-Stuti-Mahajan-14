function submitForm(event) {
    event.preventDefault(); 

    let formData = new FormData(document.getElementById("appointmentForm"));

    fetch("http://localhost/HOSPITAL_MANAGEMENT_FORM/submit.php", {
        method: "POST",
        body: formData,
    })
    
    .then(response => response.text())
    .then(data => {
        document.getElementById("response").innerText = data;
        document.getElementById("response").style.color = "green";
        document.getElementById("appointmentForm").reset();
    })
    .catch(error => {
        document.getElementById("response").innerText = "Error submitting form!";
        document.getElementById("response").style.color = "red";
    });
}

document.getElementById("appointmentForm").addEventListener("submit", submitForm);
