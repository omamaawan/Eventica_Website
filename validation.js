function LTrim(value) {
    var re = /\s*((\S+\s*)*)/;
    return value.replace(re, "$1");
}
function RTrim(value) {
    var re = /((\s*\S+)*)\s*/;
    return value.replace(re, "$1");
}
function trim(value) {
    return LTrim(RTrim(value));
}

function validate() {
    var username = document.signup.username.value;
    var mobile = document.signup.mobile.value;
    var email = document.signup.email.value;
    var pass1 = document.signup.password.value;
    var pass = trim(pass1);
    var c_pass = document.signup.repassword.value;
    var email_reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var num_reg = /[0-9]+/;
    var lower_reg = /[a-z]+/;
    var upper_reg = /[A-Z]+/;
    var char_reg = /\W+/;

    if (username == "") {
        alert('Please Provide a Username');
        return false;
    }

    if (email == "") {
        alert('Please Provide an Email Address');
        return false;
    }

    if (email_reg.test(email) == false) {
        alert("Invalid Email Format");
        return false;
    }

    if (pass == "") {
        alert('Please Provide a Password');
        return false;
    }

    if (pass.length < 8) {
        alert("Password too short");
        return false;
    }
    if (pass.length > 20) {
        alert("Password too Long");
        return false;
    }

    if (num_reg.test(pass) == false) {
        alert("Password must contain at least one Number");
        return false;
    }

    if (lower_reg.test(pass) == false) {
        alert("Password must contain at least one Lowercase Letter");
        return false;
    }

    if (upper_reg.test(pass) == false) {
        alert("Password must contain at least one Uppercase Letter");
        return false;
    }

    if (char_reg.test(pass) == false) {
        alert("Password must contain at least one Special Character");
        return false;
    }

    if (c_pass == "") {
        alert('Please Confirm the Password');
        return false;
    }

    if (pass != c_pass) {
        alert('Password Confirmation Failed');
        return false;
    }
    if (mobile == "") {
        alert('Please Provide a Phone Number');
        return false;
    }
    if (num_reg.test(mobile) == false) {
        alert('Please Provide a Valid Phone Number');
        return false;
    }
}

