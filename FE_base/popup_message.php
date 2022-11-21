<!-- JS -->
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

/* CSS */
.popup-msg {
    position: fixed;
    opacity: 0;
    left: 40px;
    bottom: 50px;
    padding: 8px 28px;
    min-width: 300px;
    z-index: 100000;
    background-color: var(--white-color);
    border-radius: 8px;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    transition: 0.5s;
    z-index: 1000000000;
    border: 1px solid rgb(106, 106, 106);
}

.popup-msg i {
    margin-right: 16px;
    font-size: 1.6rem;
}

.popup-msg-status {
    font-size: 1.5rem;
    margin-bottom: 0;
    font-weight: 600;
}


.popup-msg-content {
    margin-top: 8px;
    font-size: 1.3rem;
}

.success {
    background-color: #bcf9ca;
}

.fail {
    background-color: #ffb7b7;
}

.warning {
    background-color: #fae7c7;
}

.info {
    background-color: #b2e7f5;
}



