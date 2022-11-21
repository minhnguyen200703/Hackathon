<!-- Prevent Resubmission -->
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

//Prevent refreshing page
var buttons = document.querySelectorAll('input[type=submit]');
    buttons.forEach((button) => {
        button.addEventListener("click", function(event) {
            event.preventDefault()
        });
    })
