// function verifyPassword() {  
//     var pw = document.getElementById("pwd").value;  
//     //check empty password field  
//     if(pw == "") {  
//        document.getElementById("message").innerHTML = "Please fill this field";  
//        return false;  
//     }  

//    //minimum password length validation  
//     if(pw.length < 8) {  
//        document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
//        return false;  
//     } 
//  }

function matchPassword() {
   pw1 = form1.password.value;
   pw2 = form1.cpassword.value;
    if (pw1 == "") {
        alert('Please fill this password');
        return false;
    } else if (pw2 == "") {
        alert('Please fill this confirm password')
        return false;
    } else if (pw1 != pw2) {
        alert("Passwords did not match");
        return false;
    } else if (pw1.length < 8) {
        alert("**Password length must be atleast 8 characters")
        return false;
    }
    else {
        alert("Password created successfully");
    }
    return true;
}  