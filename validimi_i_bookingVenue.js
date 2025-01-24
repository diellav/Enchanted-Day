
document.addEventListener("DOMContentLoaded", function(ngjarja){
    
    console.log("Script loaded successfully!");
    const form=document.getElementById("form");

    const validate=(ngjarja)=>{
        ngjarja.preventDefault();
        const first_name=document.getElementById("first_name");
        const last_name=document.getElementById("last_name");
        const email=document.getElementById("email");
        const event_date=document.getElementById("event_date");
        const guest_number=document.getElementById("guest_number");
        const additional_details=document.getElementById("additional_details");
     
        
        if(!first_nameValid(first_name.value)){
            alert("Please put a valid name! ");
            first_name.focus();
            return false;
        }

        if(!last_nameValid(last_name.value)){
            alert("Please put a valid surname! ");
            last_name.focus();
            return false;
        }


        if(!emailValid(email.value)){
            alert("Please put a valid email! ");
            email.focus();
            return false;
        }

        if(!guest_numberValid(guest_number.value)){
            alert("Please put more than >0 guests!");
            guest_number.focus();
            return false;
        }

        if(!additional_detailsValid(additional_details.value)){
            alert("Please put a valid information!\n The details can contain letters, numbers and special characters \n The length should be min 10 characters ");
            additional_details.focus();
            return false;
        }
     

       form.submit();
   
      
    };
 

    const first_nameValid=(first_name) => {
        const first_nameRegex = /^[a-zA-Z ]{3,255}$/;
        return first_nameRegex.test(first_name);
    };  

    const last_nameValid=(last_name) => {
        const last_nameRegex = /^[a-zA-Z ]{3,255}$/;
        return last_nameRegex.test(last_name);
    };


    const emailValid=(email) => {
        const emailRegex = /^([a-zA-Z0-9_\-.])+@([a-zA-Z0-9_\-.])+\.([a-zA-Z]){2,4}$/;
        return emailRegex.test(email);
    };


    
    const guest_numberValid=(guest_number)=>{
        const guest_numberRegex = /^[1-9][0-9]*$/;
        return guest_numberRegex.test(guest_number);
    };
       
    const additional_detailsValid=(additional_details)=>{
        const additional_detailsRegex = /^[a-zA-Z0-9_.-?!&$#+'" "]{10,}$/;
        return additional_detailsRegex.test(additional_details);
    };
   
        form.addEventListener('submit', validate);
    });
