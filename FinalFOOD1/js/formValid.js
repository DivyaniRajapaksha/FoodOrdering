function formValidation(){
	
    var email = document.getElementById("email");
    var em = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;	
    var firstname = document.getElementById("firstname");
    var fname = /^[a-zA-Z]+$/;
    var lastname = document.getElementById("lastname");
    var lname = /^[a-zA-Z]+$/;
    var password = document.getElementById("password");
    var conpassword = document.getElementById("conpassword");
    var pass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/;
    var address1 = document.getElementById("address1");
    var add1 = /^[0-9a-zA-Z]+$/;
    var city = document.getElementById("city");
    var cit = /^[a-zA-Z]+$/; 
    var code = document.getElementById("code");
    var pcode = /^[0-9]+$/;

	
	
	if (!email.value.match(em)) {
        alert("Email not valid");
		return false;
	}
	
	if (!firstname.value.match(fname)) {
        alert("First name is not valid");
		return false;
	}
	
	if (!lastname.value.match(lname)) {
        alert("Last name is not valid");
		return false;
	}
	
	if(!password.value.match(pass)){
        alert("Please include at least 1 uppercase character, 1 lowercase character, and 1 number.");
		return false;
	}
	
	if (password.value != conpassword.value) {
		alert("Passwords do not match.");
		return false;
	}
	
	if (!address1.value.match(add1)) {
        alert("Address in invalid");
        return false;
	}
	
	if (!city.value.match(cit)) {
        alert("City is not valid");
		return false;
	}
	
	if (!code.value.match(pcode)) {
        alert("Please use only numbers");
		return false;
	}
}	
