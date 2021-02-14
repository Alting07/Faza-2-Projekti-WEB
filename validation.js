document.getElementById('first').addEventListener("click", function(event){
    changeForm(0);
});
document.getElementById('second').addEventListener("click", function(event){
    changeForm(1);
});

function changeForm(number){
    var divs = document.getElementsByClassName('forms');
    if(number == 0){
      // show login
      divs[0].classList.add('form-style');
      divs[0].classList.remove('hidden');
      //hide register
      divs[1].classList.remove('form-style');
      divs[1].classList.add('hidden');
    }
    else if(number == 1){
      //show register
      divs[1].classList.add('form-style');
      divs[1].classList.remove('hidden');
      //hide login
      divs[0].classList.remove('form-style');
      divs[0].classList.add('hidden');
    }
}
 
// function validateR(){
//     var username = document.getElementById("usernamereg");
//     var Email = document.getElementById("email");
//     var Password = document.getElementById("passwordreg");

//     if (usernamereg.value==="") {
//         alert("Ju lutem shkurani nje username valid");
//         usernamereg.focus();
//         return false;
//     }
//     if (email.value==="") {
//         alert("Ju lutem shkurani nje Email valide");
//         email.focus();
//         return false;
//     }
//     if (passwordreg.value==="") {
//         alert("Ju lutem shkurani nje password valide");
//         passwordreg.focus();
//         return false;
//     }
//     else{
//         changeForm(0);
//     }
    
// }

// function validateL(){
//     var username = document.getElementById("username");
//     var Password = document.getElementById("password");

//     if (username.value==="") {
//         alert("Ju lutem shkurani nje username valid");
//         username.focus();
//         return false;
//     }
//     if (password.value==="") {
//         alert("Ju lutem shkurani nje password valide");
//         password.focus();
//         return false;
//     }
//     var submitBtn = document.getElementById("submit");
//     submitBtn.setAttribute("formaction", "index.html")
//     return true;
// }

    
const usernameReg = /^[a-zA-Z0-9]/;
const passReg =/^[A-Z]+$/; 
function validate(){
    return true;
    let inputs = document.querySelectorAll("input");

    let username = inputs[0].value;
    let password = inputs[1].value;
    var submitBtn = document.getElementById("submit");
    if(form == 0){
        if(usernameReg.test(username) && passReg.test(password)){
            alert('Te dhenat jane te mire!');
            submitBtn.setAttribute("formaction", "index.php")
        }
        else if(!usernameReg.test(username)){
            alert('Username duhet te kete te pakten 3 karaktere');
        }
        else if(!passReg.test(password)){
            alert('Passwordi duhet te jete ne mes 4 dhe 8 karaktere dhe te permbaje te pakten 1 numer')
        }
    }
    

    if(form == 1){
        if(usernameReg.test(username) && passReg.test(password)){
            alert('Te dhenat jane shtyput mire!');
        }    
        else if(!usernameReg.test(username)){
            alert('Username duhet te kete te pakten 3 karaktere');
        }
        else if(!passReg.test(password)){
            alert('Passwordi duhet te jete ne mes 4 dhe 8 karaktere dhe te permbaje te pakten 1 numer')
        }
    }
}
