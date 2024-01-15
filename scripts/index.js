function doValidate(){
    email = $("#email").val();
    pw = $("#password").val();
    console.log(email)
    error = $('.error');
    if(email == null || email == '' || pw == null || pw == ""){
        error.html("");
        error.html("Enter Values Properly");
        return false;
    }
    if(email.indexOf("@") == -1){
        error.html("");
        error.html("Invalid email");
        return false;
    }
    if(pw.length < 6){
        error.html("");
        error.html("Invalid password");
        console.log("yo")
        return false;
    }

    return true;
}

