export function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

document.addEventListener('DOMContentLoaded', function() {
    const emailInput = document.getElementById('email_responden');
    
    if (emailInput) {
        emailInput.addEventListener('input', function() {
            // Validate the email and provide visual feedback
            const isValid = validateEmail(this.value);
            
            // Add/remove error class based on validation
            if (this.value.length > 0) {
                this.classList.toggle('is-invalid', !isValid);
                this.classList.toggle('is-valid', isValid);
            } else {
                this.classList.remove('is-invalid', 'is-valid');
            }
        });
    }
});

function isNumber(evt) {
    evt = (evt) ? evt : window.Event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    var input = evt.target.value;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        event.preventDefault();
        return false;
    }
    return true;
}

window.isNumber = isNumber;