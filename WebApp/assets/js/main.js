/* ====================================================
# Form 
=====================================================*/
const form = document.querySelector('form'),
    regno = form.querySelector('#regno'),
    fname = form.querySelector('#fname'),
    lname = form.querySelector('#lname'),
    gender = form.querySelector('#gender'),
    course = form.querySelector('#course');
const message = document.querySelector('.message');

/* === on Form Submit  === */
form.onsubmit = (e) => {
    /* === Preventing form from submitting === */
    e.preventDefault();

    // Create new XMLHttpRequest Object
    const xhr = new XMLHttpRequest();

    // Open connection
    xhr.open('POST', 'required/save_to_db.php', true);

    // Execution of the ajax call
    // xhr.onload = function () {
    // Status codes
    // 200 = Correct
    // 403 = Forbidden
    // 404 = Not Found
    // console.log(this.status);
    // if (this.status === 200) {
    // Invoke the checkInputs function
    // checkInputs();
    //     }
    // }

    xhr.onreadystatechange = function() {
            // Ready State
            // 0 = Unsent
            // 1 = Opened
            // 2 = Received
            // 3 = Loading
            // 4 = Done
            console.log('Ready State: ', xhr.readyState);
            if (this.status === 200 && this.readyState === 4) {
                let response = xhr.response;
                if (response.indexOf("Data saved successfully") != -1 || response.indexOf("Registration number is already taken") != -1) {
                    console.log(response);
                    message.innerText = response;
                    message.classList.add('form-warning-animated');
                    message.classList.remove('form-success-animated');
                } else {
                    /* === Show and hide success message  === */
                    message.classList.remove('form-warning-animated');
                    message.classList.add('form-success-animated');
                    message.innerText = response;
                    setTimeout(() => {
                        /* === Clear inputs  === */
                        regno.value = "";
                        fname.value = "";
                        lname.value = "";
                        gender.value = "";
                        course.value = "";
                        setTimeout(() => {
                            window.location.href = 'index.php';
                        }, 3000)
                    }, 100)
                }
                /* === Calling the check inputs function  === */
                checkInputs();
            }
        }
        /* === Calling the check inputs function  === */
    checkInputs();

    /* === When user filled up proper details  === */
    /* === If error class not contains in email_Field and address_Field then user has entered proper details  === */
    if (!regno.classList.contains("error") && !fname.classList.contains("error") && !lname.contains("error") && !gender.classList.contains("error") && !course.classList.contains("error")) {

        // Creating new formData object. This object is used to send form data.
        let formData = new FormData(form);

        // Send the request (form data)
        xhr.send(formData);
    }
}

/* === Form Validation  === */
/* === Check inputs function  === */
function checkInputs() {

    /* === If regno is empty === */
    if (regno.value.trim() === "") {
        message.innerText = "Regno cannot be blank";
        message.classList.add('form-warning-animated');
        message.classList.remove('form-success-animated');
    } else {
        message.classList.remove('form-warning-animated');
        message.classList.add('form-success-animated');
        message.innerText = "";
    }

    /* === If fname is empty === */
    if (fname.value.trim() === "") {
        message.innerText = "Firstname cannot be blank";
        message.classList.add('form-warning-animated');
        message.classList.remove('form-success-animated');
    } else {
        message.classList.remove('form-warning-animated');
        message.classList.add('form-success-animated');
        message.innerText = "";
    }

    /* === If lname is empty === */
    if (lname.value.trim() === "") {
        message.innerText = "Lastname cannot be blank";
        message.classList.add('form-warning-animated');
        message.classList.remove('form-success-animated');
    } else {
        message.classList.remove('form-warning-animated');
        message.classList.add('form-success-animated');
        message.innerText = "";
    }

    /* === If gender is empty === */
    if (gender.value.trim() === "") {
        message.innerText = "Gender cannot be blank";
        message.classList.add('form-warning-animated');
        message.classList.remove('form-success-animated');
    } else {
        message.classList.remove('form-warning-animated');
        message.classList.add('form-success-animated');
        message.innerText = "";
    }

    /* === If course is empty === */
    if (course.value.trim() === "") {
        message.innerText = "Course cannot be blank";
        message.classList.add('form-warning-animated');
        message.classList.remove('form-success-animated');
    } else {
        message.classList.remove('form-warning-animated');
        message.classList.add('form-success-animated');
        message.innerText = "";
    }

}