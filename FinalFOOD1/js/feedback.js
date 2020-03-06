function feedValidation(){
    var email1 = document.getElementById("email1");
    var em1 = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; 
    if(!email1.value.match(em1)){
        alert("Email not valid");
    } 

    var firstname1 = document.getElementById("firstname1");
    var fname1 = /^[a-zA-Z]+$/;
    if(!firstname1.value.match(fname1)){
        alert("First name is not valid");
    }

    var lastname1 = document.getElementById("lastname1");
    var lname1 = /^[a-zA-Z]+$/;
    if(!lastname1.value.match(lname1)){
        alert("Last name is not valid");
    }
}