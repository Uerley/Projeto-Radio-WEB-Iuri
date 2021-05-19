const btnScrool = document.querySelector("#btnScrool");
btnScrool.addEventListener('click', function () {
    // window.scrollTo(0, 0); subir sem animação 
    window.scrollTo({// alguns navegadores não funcionam
        top: 0,
        left: 0,
        behavior: "smooth"
    });
    // jQuery biblioteca
    // $("html,body").animate({ scrollTop: 0 }, "slow");
});