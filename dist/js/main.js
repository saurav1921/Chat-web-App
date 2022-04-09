// console.log("Hello")
const openEye = document.getElementById('openEye');
const closeEye = document.getElementById('closeEye');
const eyecon =  document.querySelector('.icons');
const loginPass = document.getElementById('password');
eyecon.addEventListener('click', () => {
        if(loginPass.type==='password')
        {
            loginPass.type = 'text';
            openEye.style.display = 'block';
            closeEye.style.display = 'none';
        }
        else {
            
                loginPass.type = 'password';
                openEye.style.display = 'none';
                closeEye.style.display = 'block';
        }
})