const form =document.querySelector(.form form),
submitbtn=form.querySelector('.submit input'),
errotxt=form.querySelector('.error-text'),

form.onsubmit=(e) =>{
    e.preventDefault();
}

submitbtn.onclick=()=>{
    //start ajax
    let xhr=new XMLHttpRequest();//create xml object
    xhr.open("POST","./Php/signup.php", true);
    xhr.onload=()=>{
        if(xhr.readyState===XMLHttpRequest.DONE){
            if(xhr.status==200){
                let data=xhr.response;
                if(data=="Success"){
                    location.href="./verify.php"

                }
                else{
                    errortxt.textContent=data;
                    error.style.display="block";
                }
            }
        }
    }

    //send data through ajax to php
    let formData=new FormData(form); //creating new object from form data
    xhr.send(FormData); //sending data to php

}