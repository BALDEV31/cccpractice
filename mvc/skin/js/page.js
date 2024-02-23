document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('product-form');
    var validationMessagesContainer = document.getElementById('validation-messages');

    form.addEventListener('submit', function (event) {
        if (!validateForm()) {
            event.preventDefault(); // Prevent the form from submitting if validation fails
        } else {
            // Uncomment the line below to submit the form when it is valid
            // submitForm();
        }
    });

    form.addEventListener('input', function () {
        clearValidationMessages();
    });

    function validateForm() {
        var isValid = true;
        var validationMessages = [];

        // Check if no field is left empty
        if (!validateNotEmpty('sku')) {
            isValid = false;
            validationMessages.push('Please fill out the SKU field.');
        }

        if (!validateNotEmpty('name')) {
            isValid = false;
            validationMessages.push('Please fill out the Name field.');
        }

        if (!validateNotEmpty('email')) {
            isValid = false;
            validationMessages.push('Please fill out the Email field.');
        } else if (!validateEmail('email')) {
            isValid = false;
            validationMessages.push('Please enter a valid email address.');
        }

        if (!validateNotEmpty('price')) {
            isValid = false;
            validationMessages.push('Please fill out the Price field.');
        } else if (!validateNumeric('price')) {
            isValid = false;
            validationMessages.push('Please enter a valid numeric value for Price.');
        }

        displayValidationMessages(validationMessages);

        return isValid;
    }

    function displayValidationMessages(messages) {
        validationMessagesContainer.innerHTML = ''; // Clear previous messages

        if (messages.length > 0) {
            messages.forEach(function (message) {
                var messageElement = document.createElement('div');
                messageElement.classList.add('validation-message');
                messageElement.textContent = message;
                validationMessagesContainer.appendChild(messageElement);
            });
        }
    }

    function clearValidationMessages() {
        validationMessagesContainer.innerHTML = '';
    }

    function validateNotEmpty(fieldName) {
        var inputElement = document.querySelector('input[name="catalog_product[' + fieldName + ']"]');
        return inputElement.value.trim() !== '';
    }

    function validateEmail(fieldName) {
        var inputElement = document.querySelector('input[name="catalog_product[' + fieldName + ']"]');
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(inputElement.value.trim());
    }

    function validateNumeric(fieldName) {
        var inputElement = document.querySelector('input[name="catalog_product[' + fieldName + ']"]');
        return !isNaN(parseFloat(inputElement.value.trim())) && isFinite(inputElement.value.trim());
    }

    function submitForm() {
        // Add your logic for submitting the form here
        // For example, you can use AJAX or the form.submit() method
        alert('Form submitted successfully!');
    }
});
