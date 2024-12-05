
document.addEventListener("DOMContentLoaded", function(event){
    
    console.log("Script loaded successfully!");
    const buttSub=document.querySelector("form");
    const validate=(event)=>{
        event.preventDefault();
        const useri=document.getElementById("user");
        const password=document.getElementById("pass");

        if(useri.value===""){
            alert("Sheno username! ");
            useri.focus();
            return false;
        }
        if(password.value===""){
            alert("Ju lutem shtoni fjalkalimin");
            password.focus();
            return false;
        }


        if(!useriValid(useri.value)){
            alert("Ju lutem shtoni email valid");
            useri.focus();
            return false;
        }
     

        if(!passValid(password.value)){
            alert("Ju lutem shtoni passwordin valid");
            password.focus();
            return false;
        }
      
        alert("Login submitted successfully!");
        buttSub.submit();
      
    };
 
    

    const useriValid=(useri)=>{
        const userRegex = /^[a-zA-Z0-9_-.]{5,15}$/;
        return userRegex.test(useri);
    };
       
        const passValid=(password)=>{
            const passRegex=/^[a-zA-Z0-9.?!@\$]{5,10}$/;
            return passRegex.test(password);
        };

   
        buttSub.addEventListener('submit', validate);
    });
