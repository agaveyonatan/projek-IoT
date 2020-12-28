const username = document.querySelector("#inputUsername")
const email = document.querySelector("#inputEmail")
const pass = document.querySelector("#inputPassword")
const passwordConfirmation = document.querySelector("#confirmPassword")

const usernameRegex = /^[a-zA-Z]+$/;
const emailUserRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/


function validateRegisterUser(){
    const usernameValue = username.value
    const usernameCount = usernameValue.length
    const emailValue = email.value
    const emailCount = emailValue.length
    const passwordValue = pass.value
    const passwordCount = passwordValue.length
    const passwordConfirmationValue = passwordConfirmation.value
    const passwordConfirmationCount = passwordConfirmationValue.length

    const resultUsername = usernameRegex.test(usernameValue)
    const resultEmail = emailUserRegex.test(emailValue)

    // console.log(usernameValue)
    // console.log(usernameCount)
    // console.log(emailCount)
    // console.log(emailValue)
    // console.log(passwordValue)
    // console.log(passwordCount)
    // console.log(passwordConfirmationValue)
    // console.log(passwordConfirmationCount)

    if((usernameCount > 0 && resultUsername) && (emailCount > 0 && resultEmail) && passwordCount > 5 && passwordConfirmationCount > 5 && passwordValue == passwordConfirmationValue){
        swal({
            title: "In Processing",
            text: "Please wait. Your account is being created.",
            icon: "warning",
            button: false,
        });
        return(true)
    }
    else{
        swal({
            title:"Invalid",
            text: "Please follow the form instructions carefully!",
            icon: "error",
        });       
        return(false)
    }
}