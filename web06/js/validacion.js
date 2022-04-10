function validar() {
    if (document.all.numero.value == '') {
        alert('No deje espacios vacios');
        document.all.numero.focus();
        return false;
    }
}