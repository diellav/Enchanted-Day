
document.addEventListener("DOMContentLoaded", function(ngjarja){
    
    console.log("Script loaded successfully!");
    const form=document.getElementById("form");

    const validate=(ngjarja)=>{
        ngjarja.preventDefault();
        const emri=document.getElementById("emri");
        const emriPartner=document.getElementById("emriPartner");
        const email=document.getElementById("email");
        const tel=document.getElementById("tel");
        const useri=document.getElementById("user");
        const password=document.getElementById("pass");
     
        
        if(!emriValid(emri.value)){
            alert("Please put a valid name and surname! ");
            emri.focus();
            return ;
        }

        if(!emriPartnerValid(emriPartner.value)){
            alert("Please put a valid name and surname for your partner! ");
            emriPartner.focus();
            return ;
        }


        if(!emailValid(email.value)){
            alert("Please put a valid email! ");
            email.focus();
            return ;
        }

        if(!telValid(tel.value)){
            alert("Please put a valid phone number!");
            tel.focus();
            return ;
        }

        if(!useriValid(useri.value)){
            alert("Please put a valid username!\n The username should contain letters, numbers and special characters such as:  _  . -  \n The length should be between 5-15 characters ");
            useri.focus();
            return ;
        }
     

        if(!passValid(password.value)){
            alert("Please put a valid password!\n The password should contain letters, numbers and special characters such as: ? ! . @ $ \n The length should be between 5-10 characters ");
            password.focus();
            return ;
        }
        console.log("Form submitted successfully!");
       form.submit();
   
      
    };
 

    const emriValid=(emri) => {
        const emriRegex = /^[a-zA-Z ]{3,255}$/;
        return emriRegex.test(emri);
    };  

    const emriPartnerValid=(emriPartner) => {
        const emriPartnerRegex = /^[a-zA-Z ]{3,255}$/;
        return emriPartnerRegex.test(emriPartner);
    };


    const emailValid=(email) => {
        const emailRegex = /^([a-zA-Z0-9_\-.])+@([a-zA-Z0-9_\-.])+\.([a-zA-Z]){2,4}$/;
        return emailRegex.test(email);
    };


    const telValid=(tel)=>{
        const telRegex= /^\(?\d{3}\)?[-\s.]?\d{3}[-\s.]?\d{4}$/;
        return telRegex.test(tel);
    };
    const useriValid=(useri)=>{
        const userRegex = /^[a-zA-Z0-9_.-]{5,15}$/;
        return userRegex.test(useri);
    };
       
        const passValid=(password)=>{
            const passRegex=/^[a-zA-Z0-9.?!@\$]{5,20}$/;
            return passRegex.test(password);
        };
   
        form.addEventListener('submit', validate);
    });
