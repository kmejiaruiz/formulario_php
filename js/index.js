function confirmar(e) {
    if (confirm("Do you've delete this archive?")) {
        return true;
    } else {
        e.preventDefault();
    }
}
let linkDel = document.querySelectorAll('.link');
for (let i = 0; i < linkDel.length; i++) {
    linkDel[i].addEventListener('click', confirmar);
}