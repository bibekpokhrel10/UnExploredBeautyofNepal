function validate(){
    nam=document.getElementById('pname').value;
    con = document.getElementById('cname').value;
    dis=document.getElementById('dname').value;
    validateemail = document.getElementById('pemail').value;
    emailpattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!validateemail.match(emailpattern)){
        document.getElementById('espan').innerHTML="Invalid Email";
        return false;
    }else{
        document.getElementById('espan').innerHTML="";
    }
    if(!isNaN(nam)){
        document.getElementById('nspan').innerHTML="Invalid Name";
        return false;
    }else{
        document.getElementById('nspan').innerHTML="";
    }
    if(!isNaN(con)){
        document.getElementById('cspan').innerHTML="Invalid Country Name";
        return false;
    }else{
        document.getElementById('cspan').innerHTML="";
    }
    if(!isNaN(dis)){
        document.getElementById('dspan').innerHTML="Invalid district Name";
        return false;
    }else{
        document.getElementById('dspan').innerHTML="";
    }
    return true;
}

function validatelogin(){
    var name = document.getElementById("fname").value;
    var email = document.getElementById("ename").value;
    var user = document.getElementById("uname").value;
    var number = document.getElementById("cnumber").value;
    var  pass = document.getElementById("pwd1").value;
    var pass2 = document.getElementById("pwd2").value;
    var userpattern = /^[A-Za-z0-9_-]{3,10}$/gm;
    var namepattern = /^[A-Za-z\s]{3,30}$/gm;
    var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/gm;
    emailpattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    contactpattern = /(?:\+977[- ])?\d{2}-?\d{7,8}/gm;
    if(!name.match(namepattern)){
        document.getElementById("nspan").innerHTML="Invalid Name";
        return false;
    }
    else{
        document.getElementById("nspan").innerHTML="";
    }
    if(!email.match(emailpattern)){
        document.getElementById("espan").innerHTML="Invalid Email";
        return false;
    }
    else{
        document.getElementById("espan").innerHTML="";
    }
    if(!number.match(contactpattern)){
        document.getElementById("cspan").innerHTML="Invalid Number";
        return false;
    }
    else{
        document.getElementById("cspan").innerHTML="";
    }
    if(!user.match(userpattern)){
        document.getElementById("uspan").innerHTML="Must be 3-10 character with only _, - special character allowed";
        return false;
    }else if(user == "Guest" || user=="guest"){
        document.getElementById("uspan").innerHTML="Username must not be Guest";
        return false;
    }else{
        document.getElementById("uspan").innerHTML="";
    }
    if(!pass.match(pattern)){
        document.getElementById("p1").innerHTML = "Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character";
        return false;
    }else{
        document.getElementById("p1").innerHTML="";
    }
    if(pass != pass2){
        document.getElementById("p2").innerHTML= "Password doesnot match";
        return false;
    }else{
        document.getElementById("p2").innerHTML="";
    }
    return true;
}

