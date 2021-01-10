function inciaModal(modalID) {
    const modal = document.getElementById(modalID);
    modal.classList.add('mostrar');
    modal.addEventListener('click', (e) => {
        if (e.target.id == modalID || e.target.className == 'fechar') {
            modal.classList.remove('mostrar');
        }
    });
}
const email = document.querySelector('.email');
email.addEventListener('click', function () {
    inciaModal('modal-promo');
})