<!-- HTML must be presented as:
    .form
       .form-field
           .form-field__label
           .form-field__input
           .form-field__message 
-->



<!-- Validator.js -->
function showError(selector, message) {
    let parentSelector = selector.parentElement;
    let errorMessage = parentSelector.querySelector('.form-field__message');
    parentSelector.classList.add('error');
    errorMessage.innerText = message;
}

function showSuccess(selector) {
    let parentSelector = selector.parentElement;
    let errorMessage = parentSelector.querySelector('.form-field__message');
    parentSelector.classList.remove('error');
    errorMessage.innerText = "";
}

function onlyLettersAndNumbers(value) {
    return /^[A-Za-z0-9]*$/.test(value);
}

function checkLowerCase(value) {
    return value.toUpperCase() != value;
}

function checkUpperCase(value) {
    return value.toLowerCase() != value;
}

function checkSymbol(value) {
    symbols = /[!@#$%^&*]/;
    return symbols.test(value);
}

function checkNumber(value) {
    return /\d/.test(value);
}

function checkBetweenLength(value, min, max) {
    return value.length >= min && value.length <= max;
}

function checkMinLength(value, min) {
    return value.length >= min
}

function checkMaxLength(value, max) {
    return value.length <= max;
}
function checkBetweenNumber(value, min, max) {
    return value >= min && value <= max;
}

function checkNumberPostitive(value) {
    return parseInt(value) > 0;
}

function otherFieldValidation(selector) {
    // To validate name, address, ...
    if (!selector.value.trim()) {
        showError(selector, 'Không được để trống trường này');
    } else if (!checkMinLength(selector.value.trim(), 5)) {
        showError(selector, 'Ít nhất phải 5 kí tự');
    } else {
        showSuccess(selector);
        return true;
    }
    return false;
}

function checkSelect(selector) {
    if(selector.selectedIndex <=0) {
        showError(selector, 'Không được để trống trường này');
    } else {
        showSuccess(selector);
        return true;
    }
    return false;
}

function checkFileUpload(selector) {
    return selector.value;
}

function checkEmail(value) {
    return String(value)
    .toLowerCase()
    .match(
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
}

