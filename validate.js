function ValidateNic(text, error) {
    let len = nicNo.Length;
    if (len == 10) {
        //pattern1
        let rgx = /^\d{9}[vxVX]{1}$/
        if (rgx.IsMatch(nicNo)) {
            return true;
        }
        else {
            return false;
        }

    }

    else if (len == 12) {
        //pattern 2
        var rgx = /^\d{12}$/;
        if (rgx.IsMatch(nicNo)) {
            return true;
        }
        else {
            return false;
        }

    }
    else {
        //empty
        return false;
    }

}


function ValidateText(text, error, message) {
    if (document.getElementById(text).value.length > 0) {

        let rgx = /^[a-zA-Z\s.]+$/
        if (document.getElementById(text).value.match(rgx)) {
            document.getElementById(error).style.display = "none";
            return true;
        }
        else {
            document.getElementById(error).innerHTML = message + "field is invalid!";
            document.getElementById(error).style.display = "block";
            return false;
        }
    }
    else {
        document.getElementById(error).innerHTML = message + "field is required!";
        document.getElementById(error).style.display = "block";
        return false;
    }

}

function ValidateDob(dob, error) {

    if (document.getElementById(dob).value.length > 0) {
        document.getElementById(error).style.display = "none";
        return true;
    }
    else {
        document.getElementById(error).style.display = "block";
        return false;
    }

}

function ValidateGender(field, error) {
    if (document.getElementById(field).value == "Select Gender") {
        document.getElementById(error).style.display = "block";
        return false;
    }
    else {
        document.getElementById(error).style.display = "none";
        return true;
    }
}

function ValidateSelection(field, error) {
    if (document.getElementById(field).value == "Select Donation Type") {
        document.getElementById(error).style.display = "block";
        return false;
    }
    else {
        document.getElementById(error).style.display = "none";
        return true;
    }
}

function ValidateAddress(address, error, message) {
    if (document.getElementById(address).value.length > 0) {

        rgx = /^[a-zA-Z0-9\/\s,.]+$/
        if (document.getElementById(address).value.match(rgx)) {
            document.getElementById(error).style.display = "none";
            return true;
        }
        else {
            document.getElementById(error).innerHTML = message + "field is invalid!";
            document.getElementById(error).style.display = "block";
            return false;
        }
    }
    else {
        document.getElementById(error).innerHTML = message + "field is required!";
        document.getElementById(error).style.display = "block";
        return false;
    }

}

function ValidatePhoneNo(phoneNo, error, message) {
    if (document.getElementById(phoneNo).value.length > 0) {
        let rgx = /^\d{10}$/
        if (document.getElementById(phoneNo).value.match(rgx)) {
            document.getElementById(error).style.display = "none";
            return true;
        }
        else {
            document.getElementById(error).innerHTML = message + "field is invalid!";
            document.getElementById(error).style.display = "block";
            return false;
        }
    }
    else {
        document.getElementById(error).innerHTML = message + "field is required!";
        document.getElementById(error).style.display = "block";
        return false;
    }
}
