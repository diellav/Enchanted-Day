
document.addEventListener("DOMContentLoaded", function(ngjarja){
    
    console.log("Script loaded successfully!");
    const form=document.getElementById("form");

    const validate=(ngjarja)=>{
        ngjarja.preventDefault();
        const name=document.getElementById("name");
        const surname=document.getElementById("surname");
        const email=document.getElementById("email");
        const message=document.getElementById("message");
     
        
        if(!nameValid(name.value)){
            alert("Please put a valid name! ");
            name.focus();
            return false;
        }

        if(!surnameValid(surname.value)){
            alert("Please put a valid surname! ");
            surname.focus();
            return false;
        }


        if(!emailValid(email.value)){
            alert("Please put a valid email! ");
            email.focus();
            return false;
        }


        if(!messageValid(message.value)){
            alert("Please put a valid message!\n The message can contain letters, numbers and special characters \n The length should be min 10 characters ");
            message.focus();
            return false;
        }
     
       form.submit();
   
      
    };
 

    const nameValid=(name) => {
        const nameRegex = /^[a-zA-Z ]{3,255}$/;
        return nameRegex.test(name);
    };  

    const surnameValid=(surname) => {
        const surnameRegex = /^[a-zA-Z ]{3,255}$/;
        return surnameRegex.test(surname);
    };


    const emailValid=(email) => {
        const emailRegex = /^([a-zA-Z0-9_\-.])+@([a-zA-Z0-9_\-.])+\.([a-zA-Z]){2,4}$/;
        return emailRegex.test(email);
    };

    const messageValid=(message)=>{
        const messageRegex = /^[a-zA-Z0-9_.,-?!&$#+'" "]{10,}$/;
        return messageRegex.test(message);
    };
       
     
   
        form.addEventListener('submit', validate);
    });
