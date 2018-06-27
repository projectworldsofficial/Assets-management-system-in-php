function activate(form, origin, target) {
    if (origin.value.length > 0) {
        document.forms[form][target].disabled = false;
    } else {
        document.forms[form][target].disabled = true;
        document.forms[form][target].value = "";
    }    
}