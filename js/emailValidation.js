const emailInput = document.querySelector("#inputEmail")
const emailMessage = document.querySelector(".emailMessage")

// REGEX FOR EMAIL INPUT
const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

//BORDER COLOR
const goodColor = "2px solid #66cc66";
const badColor = "2px solid #ff6666";
const approve = "#ffffff";
const decline = "#000000";

// EMAIL VALIDATION
emailInput.addEventListener("keyup", ()=>{
    const emailValue = emailInput.value
    const emailCount = emailValue.length

    const resultEmail = emailRegex.test(emailValue)

    if(emailCount > 0){
        if(resultEmail){
            emailMessage.innerHTML = '<span class="emailMessage text"><b>Valid email</b></span><br>'
            emailMessage.style.color = approve;
            emailInput.style.border = goodColor;
        }
        else{
            emailMessage.innerHTML = '<span class="emailMessage text"><b>Invalid email!</b></span><br>'
            emailMessage.style.color = decline;
            emailInput.style.border = badColor;
        }
    }
    else{
        emailMessage.innerHTML = '<span class="emailMessage text"><b>Email is required!</b></span><br>'
        emailMessage.style.color = decline;
        emailInput.style.border = badColor;
    }
})
