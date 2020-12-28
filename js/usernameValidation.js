const usernameInput = document.querySelector("#inputUsername")
const usernameMessage = document.querySelector(".usernameMessage")

// REGEX FOR ONLY INPUT ALPHABET
const nameRegex = /^[a-zA-Z]+$/;

usernameInput.addEventListener("keyup", ()=>{
    const usernameValue = usernameInput.value
    const usernameCount = usernameValue.length

    const resultUsername = nameRegex.test(usernameValue)
    
    if(usernameCount > 0){
        if(resultUsername){
            usernameMessage.innerHTML = '<span class="text usernameMessage"><b>Valid username</b></span><br>'
            usernameMessage.style.color = approve;
            usernameInput.style.border = goodColor;
        }
        else{
            usernameMessage.innerHTML = '<span class="text usernameMessage"><b>Username should only contains characters A-Z, a-z!</b></span><br>'
            usernameMessage.style.color = decline;
            usernameInput.style.border = badColor;
        }
    }
    else{
        usernameMessage.innerHTML = '<span class="text usernameMessage"><b>Username is required!</b></span><br>'
        usernameMessage.style.color = decline;
        usernameInput.style.border = badColor;
    }
})
