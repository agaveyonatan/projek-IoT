const showPass = document.querySelector(".passValidation")
const passInput = document.querySelector("#inputPassword")
const passwordMessage = document.querySelector(".passwordMessage")
// const passConfirm = docusment.querySelector("#confirmPassword")

//SHOW PASSWORD
showPass.addEventListener('click', ()=>{
    if(showPass.innerHTML == '<i class="far fa-eye"></i>'){
        passInput.setAttribute("type", "text")
        showPass.innerHTML = '<i class="far fa-eye-slash"></i>'
    }
    else{
        passInput.setAttribute("type", "password")
        showPass.innerHTML = '<i class="far fa-eye"></i>'
    }
})

// INPUT PASSWORD VALIDATION
passInput.addEventListener("keyup", ()=>{
    const passwordValue = passInput.value
    const passwordCount = passwordValue.length

    if(passwordCount > 0){
        if(passwordCount < 6){
            passwordMessage.innerHTML = '<span class="text passwordMessage"><b>You have to enter at least 6 digit!</b></span><br>'
            passInput.style.border = badColor;
        }
        else{
            passwordMessage.innerHTML = '<span class="text passwordMessage"><b>Strong password</b></span><br>'
            passwordMessage.style.color = approve;
            passInput.style.border = goodColor;

            // if(passConfirm.value==passwordValue){
            //     passwordConfirmMessage.innerHTML = '<span class="text passwordConfirmMessage"><b>Confirm password is the same as password</b></span><br>'
            //     passwordConfirmMessage.style.color = approve;
            //     passConfirm.style.border = goodColor;
            // }
            // else{
            //     passwordConfirmMessage.innerHTML = '<span class="text passwordConfirmMessage"><b>Confirm password and password are not the same!</b></span><br>'
            //     passwordConfirmMessage.style.color = decline;
            //     passConfirm.style.border = badColor;
            // }
        }
    }
    else{
        passwordMessage.innerHTML = '<span class="text passwordMessage"><b>Password is required!</b></span><br>'
        passwordMessage.style.color = decline;
        passInput.style.border = badColor;
    }
})
