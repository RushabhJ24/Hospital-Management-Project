function fv() {
    var uname = document.reg.name;
    var uage = document.reg.age;
    var uadd = document.reg.address;
    if (unameValid(uname)) {
        if(uageValid(uage)){
            if(alphanumeric(uadd)){

            }
        }
    }
    return false;
}

function unameValid(uname) {
    var letters = /^[A-Za-z]+$/;
    if (uname.value.match(letters)) {
        return true;
    }
    else {
        alert('Username must have alphabet characters only');
        uname.focus();
        return false;
    }
}

function uageValid(uage) {
    if(uage.value>0) {
        return true;
    }
    else {
        alert('Age must be valid');
        uage.focus();
        return false;
    }
}

function alphanumeric(uadd) {
    var letters = /^[0-9 a-zA-Z]+$/;
    if (uadd.value.match(letters)) {
        return true;
    }
    else {
        alert('User address must have alphanumeric characters only');
        uadd.focus();
        return false;
    }
}