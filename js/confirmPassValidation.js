const showConfirmPass = document.querySelector(".passConfirmValidation")
const passConfirm = document.querySelector("#confirmPassword")
const passwordConfirmMessage = document.querySelector(".passwordConfirmMessage")
const passwordInput = document.querySelector("#inputPassword")

// SHOW CONFIRM PASSWORD
showConfirmPass.addEventListener('click', ()=>{
    if(showConfirmPass.innerHTML == '<i class="far fa-eye"></i>'){
        passConfirm.setAttribute("type", "text")
        showConfirmPass.innerHTML = '<i class="far fa-eye-slash"></i>'
    }
    else{
        passConfirm.setAttribute("type", "password")
        showConfirmPass.innerHTML = '<i class="far fa-eye"></i>'
    }
})

// INPUT CONFIRM PASSWORD VALIDATION
passConfirm.addEventListener("keyup", ()=>{
    const passwordValue = passInput.value
    const confirmPasswordValue = passConfirm.value
    const passwordConfirmCount = confirmPasswordValue.length

    if(passwordConfirmCount > 0){
        if(passwordConfirmCount < 6){
            passwordConfirmMessage.innerHTML = '<span class="text passwordConfirmMessage"><b>You have to enter at least 6 digit!</b></span><br>'
            passwordConfirmMessage.style.color = decline;
            passConfirm.style.border = badColor;
        }
        else{
            if(confirmPasswordValue==passwordValue){
                passwordConfirmMessage.innerHTML = '<span class="text passwordConfirmMessage"><b>Confirm password is the same as password</b></span><br>'
                passwordConfirmMessage.style.color = approve;
                passConfirm.style.border = goodColor;
            }
            else{
                passwordConfirmMessage.innerHTML = '<span class="text passwordConfirmMessage"><b>Confirm password and password are not the same!</b></span><br>'
                passwordConfirmMessage.style.color = decline;
                passConfirm.style.border = badColor;
            }
        }
    }
    else{
        passwordConfirmMessage.innerHTML = '<span class="text passwordConfirmMessage"><b>Confirm password is required!</b></span><br>'
        passwordConfirmMessage.style.color = decline;
        passConfirm.style.border = badColor;
    }
})
