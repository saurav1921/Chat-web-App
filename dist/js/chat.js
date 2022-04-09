const form = document.querySelector('.input-form'),
inputField = form.querySelector(".msg_input"),
sendBtn = form.querySelector(".msgSend"),
chatBox = document.querySelector(".chat-box"),
statusTextContent = document.querySelector(".status p"),
offlineStyle = document.querySelector(".status p span i");

if(statusTextContent.textContent == "Offline")
{
   
    offlineStyle.classList.add("status-offline")
}
else{
    offlineStyle.classList.remove("status-offline")
}

form.onsubmit = (e)=>{
    e.preventDefault();
}

sendBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST","php/insert-chat.php",true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200)
            {
            inputField.value = "";
            
            scrollToBottom();
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

chatBox.onmouseenter = () =>
{
    chatBox.classList.add('active2');
}
chatBox.onmouseleave = () =>
{
    chatBox.classList.remove('active2');
}
setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST","php/get-chat.php",true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200)
            { chatBox.innerHTML="";
                let data =  xhr.response;
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains("active2"))
                scrollToBottom();
            
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}, 500); 


function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
}