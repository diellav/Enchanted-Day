document.addEventListener("DOMContentLoaded", function(event){
    
    console.log("Script loaded successfully!");
    const form=document.getElementById("form");

    const validate=(event)=>{
        event.preventDefault();
        const useri=document.getElementById("user");
        const password=document.getElementById("pass");



        if(!useriValid(useri.value)){
            alert("Please put a valid username!\n The username should contain letters, numbers and special characters such as:  _  . -  \n The length should be between 5-15 characters ");
            useri.focus();
            return false;
        }
     

        if(!passValid(password.value)){
            alert("Please put a valid password!\n The password should contain letters, numbers and special characters such as: ? ! . @ $ \n The length should be between 5-20 characters ");
            password.focus();
            return false;
        }
       
      form.submit();
        
      
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
