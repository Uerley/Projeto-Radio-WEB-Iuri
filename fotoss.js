let img = document.querySelectorAll('.img_pequeno');
let modal = document.querySelector('.modal2');
let modalimg = document.querySelector('#modal_img');
let btclose = document.querySelector('#btn_close');
let srcVal = "";

for (let i = 0; i < img.length; i++) {
    img[i].addEventListener('click', function () {
        srcVal = img[i].getAttribute('src');
        modalimg.setAttribute('src', srcVal);
        modal.classList.toggle('modal_active');/*toogle serve para o modal tiver exibido*/
    });
}

btclose.addEventListener('click', function () {
    modal.classList.toggle('modal_active');
});