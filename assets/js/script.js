function deleteProduct(product_Id) {
    $.ajax({
         type: "GET",
         url: 'monitor-products.php',
         data:{action:'deleteProduct' , 
         product_Id:product_Id},
         success:function(response) {
            location.reload();
         }

    });
}

function ValidateItemInbox(proid) {
    $.ajax({
        type: "GET",
        url: "product-validation.php",
        data: {
            action: 'ValidateItemInbox',
            proid: proid
        },
        success: function(response) {
            location.reload();
            // Manually update the DOM by removing the specific item from the menu
            $('.menu-container').find('.menu-item[data-proid="' + proid + '"]').remove();
        }
    });
}

function DeleteItemInbox(proid) {
    $.ajax({
        type: "GET",
        url: "product-validation.php",
        data: {
            action: 'DeleteItemInbox',
            proid: proid
        },
        success: function(response) {
                location.reload();
            // Manually update the DOM by removing the specific item from the menu
            $('.menu-container').find('.menu-item[data-proid="' + proid + '"]').remove();
            
        }
    });
}




function submitForm() {
    var errors = validate_signup();
  
    if (errors.length===0) {
        $.ajax({
            type: "POST",
            url: "../../sign.php",
            data: {
                action:'submitForm',
    
            },
            success: function(response) {

               if(response==="success")  
                {
                    var suc = document.getElementById("suc");
                    suc.innerHTML = "Sign up successfully !";
                        
                    location.reload();
                }
                
                
            }
        });
     
    } else {
      console.log("Form validation failed");
       var errorElement = document.querySelector(".error");
       errorElement.innerHTML = errors.join("<br>"); // Display JavaScript errors
    }
  }
  
  


function validate_signup() {
    var errors = [];
  
    var fnameInput = document.getElementById("fname");
    var lnameInput = document.getElementById("lname");
    var emailInput = document.getElementById("email");
    var passInput = document.getElementById("pass");
  
    // Check if first name is empty or contains special characters
    if (fnameInput.value.trim() === '' || /[^\w\s]/.test(fnameInput.value)) {
      errors.push("First name is required and should not contain special characters.");
    }
  
    // Check if last name is empty or contains special characters
    if (lnameInput.value.trim() === '' || /[^\w\s]/.test(lnameInput.value)) {
      errors.push("Last name is required and should not contain special characters.");
    }
  
    // Check if email is valid
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(emailInput.value)) {
      errors.push("Please enter a valid email address.");
    }
  
    // Check if password is at least 8 characters long and contains a special character
    var passPattern = /^(?=.*[!@#$%^&*])\S{8,}$/;
    if (!passPattern.test(passInput.value)) {
      errors.push("Password should be at least 8 characters long and contain a special character.");
    }
  
    // Display errors if any
    // if (errors.length > 0) {
    //   var errorElement = document.querySelector(".error");
    //   errorElement.innerHTML = errors.join("<br>");
    // }
   
  
    return errors;
  }
  