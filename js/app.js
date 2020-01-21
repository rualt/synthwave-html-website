function validate(contact_form, email) {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var address = document.forms[contact_form].elements[email].value;
    if(reg.test(address) == false) {
       alert('Please enter valid email');
       return false;
    }
}