function validateRegForm() {
    var username = document.getElementById('username');
    var email = document.getElementById('email');
    var mobile = document.getElementById('mobile');
    var password = document.getElementById('password');
    var confirm_password = document.getElementById('confirm_password');
    // var state = document.getElementById('state').value;
    var city = document.getElementById('city').value;
    var pin = document.getElementById('pin');
    var house = document.getElementById('house');
    var area = document.getElementById('area');

    var usererror = document.getElementById('usererror');
    var emailerror = document.getElementById('emailerror');
    var moberror = document.getElementById('moberror');
    var pwderror = document.getElementById('pwderror');
    var conpwderror = document.getElementById('conpwderror');
    var cityerror = document.getElementById('cityerror');
    var pinerror = document.getElementById('pinerror');
    var houseerror = document.getElementById('houseerror');
    var areaerror = document.getElementById('areaerror');

    //Validation boolean expression
    var isValid = true;

    //Username
    const userPattern = /^[A-Za-z ]*$/;
    var name = username.value;
    if (userPattern.test(name)){
        usererror.innerHTML = 'correct';
    }
    else if(/[@!#$%^&*.]/.test(name)){
        usererror.innerHTML ="Symbols are not allowed";
        isValid =false;
    }
    else{
        usererror.innerHTML = "Name should only contain alphabets and spaces";
        isValid = false;
    }

    //EMAIL
    const emailPattern = /^[a-z 0-9\_\-\.]+[@][a-z]+\.[a-z]{2,3}$/;
    var userEmail = email.value;
    if(emailPattern.test(userEmail)){
        emailerror.innerHTML = '<i class="fa fa-check-circle"></i>';
    }
    else{
        emailerror.innerHTML = "Invalid email";
        isValid = false;
    }

    // Mobile Number
    const pattern = /^[789][0-9]{9}$/;
    var num = mobile.value;
    if(pattern.test(num)){
        moberror.innerHTML = '<i class="fa fa-check-circle"></i>';
    }
    else{
        moberror.innerHTML = "Mobile Number Must start from [9, 8 ,7]";
        isValid = false;
    }

    // Password
    const pwdPattern = /^[A-Za-z]*[!@#$%^&*]?[0-9]*$/;
    var pwd = password.value;
    if(pwdPattern.test(pwd)){
        pwderror.innerHTML = '<i class="fa fa-check-circle"></i>';
    }
    else{
        pwderror.innerHTML = "Password must Contain 1 Upper Case, Lower Case, Digit and Symbol";
        isValid = false;
    }

    //Confirm Password
    if(password.value == confirm_password.value){
        conpwderror.innerHTML = '<i class="fa fa-check-circle"></i>';
    }
    else{
        conpwderror.innerHTML = "Password do not match with Confirm Password";
        isValid = false;
    }

    // City
    if(city == "1"){
        cityerror.innerHTML = "Select Your City";
        isValid = false;
    }
    else{
        cityerror.innerHTML ='<i class="fa fa-check-circle"></i>';
    }

    // Pin code
    const pinPattern= /^[0-9]+$/;
    var pincheck = pin.value;
    if(!pinPattern.test(pincheck)){
        pinerror.innerHTML = "Only Digits are allowed";
        isValid = false;
    }
    else{
        pinerror.innerHTML ='<i class="fa fa-check-circle"></i>';
    }

    //House and Area name
    const adrsPattern = /^[A-Za-z\_\-\. ]+[0-9 ]*$/;
    var adrs = house.value;
    if(!adrsPattern.test(adrs)){
        houseerror.innerHTML = "Only use alphabets and digit [if require]";
        isValid = false;
    }
    else{
        houseerror.innerHTML = '<i class="fa fa-check-circle"></i>';
    }
    var adrs1 = area.value;
    if(!adrsPattern.test(adrs1)){
        areaerror.innerHTML = "Only use alphabets digit [if require]";
    }
    else{
        areaerror.innerHTML = '<i class="fa fa-check-circle"></i>';
    }
    return isValid;
}

