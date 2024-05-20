document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the form from submitting

        // Check if any input field is empty
        let isEmpty = false;
        const inputs = form.querySelectorAll("input, select");
        inputs.forEach(input => {
            if (!input.value.trim()) {
                isEmpty = true;
                return;
            }
        });

        if (isEmpty) {
            alert("Please fill out all fields before submitting.");
        } else {
            // If form is not empty, submit the form
            alert("Form submitted succesfully!");
            form.submit();
        }
    });

    const urlParams = new URLSearchParams(window.location.search);
    const success = urlParams.get('success');

    if (success === "true") {
        alert("Form submitted successfully!");
    }
});


