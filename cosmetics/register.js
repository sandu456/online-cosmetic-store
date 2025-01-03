// registration form js part

window.onload = function() {
    // Retrieve the total price from sessionStorage
    const totalPrice = sessionStorage.getItem('totalPrice');
    const total = sessionStorage.getItem('total');
    // Check if total price exists and update the view
    if (totalPrice) {
        document.getElementById('view-total').innerText = totalPrice;
        document.getElementById('total').innerText = total;
    } else {
        document.getElementById('total').innerText = '$0.00';
        document.getElementById('view-total').innerText = '$0.00'; // Or handle the absence of totalPrice
    }
};

// validate form
function validateForm(){

    // get data
    var fname = document.getElementById("fName").value;
    var lname = document.getElementById("lName").value;
    var address = document.getElementById("address").value;
    var mobile = document.getElementById("phone").value;
    var email = document.getElementById("email").value;

    if(fname.length < 1){
        alert("First Name can not be empty");
       }

    else if(lname.length < 1){
        alert("Last Name can not be empty");
       }

    else if(address.length < 1){
        alert("Address can not be empty");
       }
    
    else if(!isEmailValid(email)){
        alert("Please enter a valid email address..");
       }
    
    else if(mobile.length < 5){
        alert("Please enter a valid mobile number..");
       }

    else{
        document.getElementById('data-form').submit();
        
        document.getElementById("form-container").style.display = "none";
        document.getElementById("queryForm").style.display = "block";
        document.getElementById("finalized-form").style.display = "block";

        document.getElementById("view-fname").innerHTML = fname;
        document.getElementById("view-lname").innerHTML = lname;
        document.getElementById("view-address").innerHTML = address;
        document.getElementById("view-email").innerHTML = email;
        document.getElementById("view-mobile").innerHTML = mobile;

        document.getElementById("email-fname").innerHTML = fname;
        document.getElementById("email-lname").innerHTML = lname;
        document.getElementById("email-address").innerHTML = address;
        document.getElementById("email-email").innerHTML = email;
        document.getElementById("email-mobile").innerHTML = mobile;
    }

    // to check validity of email
    function isEmailValid(email) {
        let pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;
        return pattern.test(email);
    }
}

// functionality of the query when buttons clicked
function manipulateForm(){
    document.getElementById("queryForm").style.display = "none";
    document.getElementById("finalized-form").style.display = "none";
    document.getElementById("form-container").style.display = "block";
}