document.addEventListener("DOMContentLoaded", function () {
    console.log("Script loaded successfully!");
    const form = document.getElementById("form");

    const validate = (ngjarja) => {
        ngjarja.preventDefault();

        const numrat = form.querySelectorAll("input[type='number']");
        let valid = true;

        const numriRegex = /^[1-9][0-9]{0,2}$/;

        numrat.forEach(inputi => {
            if(inputi.value===""){
                return;
            }
            if (!numriRegex.test(inputi.value)) {
                alert('Please enter a valid number! The measurements should be between 1 and 999');
                inputi.focus();
                valid = false;
                return;
            }
        });

        if (valid) {
            console.log("Form submitted successfully!");
            form.submit();
        }
    };

    form.addEventListener('submit', validate);
});
