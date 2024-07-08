var fullname = document.getElementById('name')
var email = document.getElementById('email')
var password = document.getElementById('password')
var confirm_password = document.getElementById('confirm-password')

var checkinputfields = (input) =>{
    if(input.value.length === null || input.value.match(/^ *$/) !== null ){
        input.classList.add('border-2', 'border-red-500');
        return false;
    }
    return true
}
function validateEmail(email) {
    var atPos = email.indexOf("@");
    var dotPos = email.lastIndexOf(".");
    return atPos > 0 && dotPos > atPos + 1 && dotPos < email.length - 1;
    }
function checkemail(){
    if(email.value.indexOf("@") == -1 || email.value.length <= 7 || email.value.trim().length === 0 || !validateEmail(email.value)){
        document.getElementById("email").classList.add('border-2', 'border-red-500');
        return false;
        }else{
        document.getElementById("email").classList.remove('border-2', 'border-red-500');
        return true;
    }

}

var checkfields = () =>{
    $( "#create-account" ).on( "submit", function( event ) {
        if(checkinputfields(fullname) && checkemail() && checkinputfields(password) && checkinputfields(confirm_password)){

        }else{
            event.preventDefault();
        }
        
    }
);

}