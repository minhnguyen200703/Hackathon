// Popup message:
function createPopupMsg(status, msg) {
    var popupMsgBox = document.createElement('div');
    popupMsgBox.classList.add('popup-msg', status);
    document.body.appendChild(popupMsgBox);

    if (status == "success") {
        popupMsgBox.innerHTML = '<i class="fa-regular fa-circle-check"></i>';
    } else if (status == "error") {
        popupMsgBox.innerHTML = '<i class="fa-solid fa-xmark"></i>';

    } else if (status == "warning") {
        popupMsgBox.innerHTML = '<i class="fa-solid fa-circle-exclamation"></i>';

    } else if (status == "info") {
        popupMsgBox.innerHTML = '<i class="fa-solid fa-circle-info"></i>';
    } else {

    }
 
    popupMsgBox.innerHTML += `<div>
                                    <p class="popup-msg-status"> ${status} </p>
                                    <p class="popup-msg-content"> ${msg} </p>
                                </div>`;
    displayPopupMsg();
}

function displayPopupMsg() {
    var popupMsg = document.querySelector(".popup-msg")
    popupMsg.style.left = "70px";
    popupMsg.style.bottom = "30px";
    popupMsg.style.opacity = "1";
    popupMsg.style.transition = "1s";
    setTimeout(function() {
        popupMsg.remove();
    }, 5000)
}

