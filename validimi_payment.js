
document.addEventListener("DOMContentLoaded", function(ngjarja){
    
    console.log("Script loaded successfully!");
    const form=document.getElementById("form");

    const validate=(ngjarja)=>{
        ngjarja.preventDefault();
        const emri=document.getElementById("emri");
        const cardNumb=document.getElementById("cardNumb");
        const exp=document.getElementById("exp");
        const security=document.getElementById("security");
        const address=document.getElementById("address");
     
        
        if(!emriValid(emri.value)){
            alert("Please put a valid name and surname! ");
            emri.focus();
            return ;
        }

        if(!cardNumbValid(cardNumb.value)){
            alert("Please put a valid card number! It should be between 13-16 numbers. ");
            cardNumb.focus();
            return ;
        }


        if(!expValid(exp.value)){
            alert("Please put your card expiration year! ");
            exp.focus();
            return ;
        }

        if(!securityValid(security.value)){
            alert("Please put your security number! Between 3-4 numbers");
            security.focus();
            return ;
        }

        if(!addressValid(address.value)){
            alert("Please put a valid address! It should be more than 10 characters long");
            address.focus();
            return ;
        }
     
        console.log("Form submitted successfully!");
       form.submit();
   
      
    };
 

    const emriValid=(emri) => {
        const emriRegex = /^[a-zA-Z ]{3,255}$/;
        return emriRegex.test(emri);
    };  

    const cardNumbValid = (cardNumb) => {
        const cardNumbRegex = /^[0-9]{13,16}$/; 
        return cardNumbRegex.test(cardNumb);
    };


    const expValid = (exp) => {
        const expRegex = /^\d{4}$/;
        return expRegex.test(exp);
    };
    


    const securityValid=(security)=>{
        const securityRegex= /^\d{3,4}$/;
        return securityRegex.test(security);
    };

    const addressValid=(address)=>{
        const addressRegex = /^[a-zA-Z0-9_.-]{10,255}$/;
        return addressRegex.test(address);
    };

        form.addEventListener('submit', validate);
    });
