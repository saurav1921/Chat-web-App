const form = document.querySelector('.signupForm');
const continueBtn = form.querySelector(".createAc")
const error_txt = form.querySelector('.err__msg p');
const error_txt_div = form.querySelector('.err__msg');
form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = () =>{
    console.log("clicled")
    let xhr = new XMLHttpRequest();
    xhr.open("POST","php/signup.php",true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200)
            {
                let data =  xhr.response;
                console.log(data)
                if(data == "success")
                {    
                    location.href = 'users.php';
                }
                else{
                    console.log(data)
                    error_txt.innerHTML = `<i class='bx bxs-info-circle lg-20'></i>`+' '+data;
                    error_txt_div.style.display = 'block';
                }
            }
        }
    }
// sending data to php through ajax

    let formData = new FormData(form);
    xhr.send(formData);
};



 