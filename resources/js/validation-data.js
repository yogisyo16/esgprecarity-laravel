//responden data
var email = document.getElementById('email_responden');

email.addEventListener('input', function() {
    this.value = is.email;
});

function isNumber(evt) {
    evt = (evt) ? evt : window.Event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    var input = evt.target.value;
    if ( charCode == 46 || (charCode > 31 && charCode < 48) || charCode > 57 ) {
        if (charCode == 46) {
            // Check if there's already a decimal point in the input
            if (input.indexOf('.') != -1) {
                return false;
            }
            return true;
        }
        return false;
    }
    if (input.indexOf('.') != -1) {
        var decimalPart = input.substring(input.indexOf('.') + 2);
        console.log(decimalPart.length >= 2 && charCode != 8 && charCode != 46);
        if (decimalPart.length >= 2 && charCode != 8 && charCode != 46) {
            return false;
        }
    }
    return true;
}