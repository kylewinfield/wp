function incrementQuantity(service) {

    var inputValue = document.getElementById(service).value;

    if (inputValue < 100) {
        inputValue = isNaN(inputValue) ? 0 : inputValue;
        inputValue++;
        document.getElementById(service).value = inputValue;
    }
}

function decrementQuantity(service) {

    var inputValue = document.getElementById(service).value;

    if (inputValue > 1) {
        inputValue = isNaN(inputValue) ? 0 : inputValue;
        inputValue--;
        document.getElementById(service).value = inputValue;
    }
    else if (inputValue = 1) {
        document.getElementById(service).value = '';
    }
}

function inputRangeCheck(service) {

    var inputValue = document.getElementById(service).value;

    inputValue = isNaN(inputValue) ? 0 : inputValue;

    if (inputValue > 100) {
        inputValue = 100;
    }
    else if (inputValue < 1) {
        inputValue = '';
    }
    document.getElementById(service).value = inputValue;
    
}

