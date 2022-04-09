const searchBar = document.querySelector('.chatWindow .search-box');
const searchInput = document.querySelector('#searchInput');
const clear = document.getElementById('right')
const userList = document.querySelector('.user-list');

searchBar.onkeyup = () => {
    let searchTerm = searchInput.value;
    if(searchTerm != "")
    {
        searchBar.classList.add("active");
    }
    else{
        searchBar.classList.remove("active");
    }
        let xhr = new XMLHttpRequest();
        xhr.open("POST","php/search.php",true);
        xhr.onload = () =>{
            if(xhr.readyState === XMLHttpRequest.DONE){
                if(xhr.status === 200)
                {
                    let data =  xhr.response;
                    userList.innerHTML = data;                    
                    console.log(data)
                
                }
            }
        }
    

    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send("searchTerm="+searchTerm);
}

// clear.addEventListener('click', ()=>{
//     console.log("clicked")
//     searchInput.value = '';

// })

setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET","php/users.php",true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200)
            {
                let data =  xhr.response;
                if(!searchBar.classList.contains("active"))
                {
                userList.innerHTML = data;
                }
            }
        }
    }
    xhr.send();
}, 500); 