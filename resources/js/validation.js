var firstname = document.getElementById('firstname');
var lastname = document.getElementById('lastname');
var address = document.getElementById('address');
var email = document.getElementById('email');
var phonenumber = document.getElementById('phonenumber');
var mailformat = `/^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/`;

function containsSpecialChars(str) {
    const specialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
        if(!specialChars.test(str)){
        return /[0-9]/.test(str);
        }
        return specialChars.test(str);
}
function checkfirstname(){
    if(firstname.value.trim().length === 0 || firstname.value.length == 0  || containsSpecialChars(firstname.value)){
        firstname.classList.add('border-2', 'border-red-500');
        console.log('l');
    }else{
        firstname.classList.remove('border-2', 'border-red-500');
    }
}
function checklastname(){
    if(lastname.value.trim().length === 0 && lastname.value.length == 0 || containsSpecialChars(lastname.value)){
        lastname.classList.add('border-2', 'border-red-500');
    }else{
        lastname.classList.remove('border-2', 'border-red-500');
    }
}