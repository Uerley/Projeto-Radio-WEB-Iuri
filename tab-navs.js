const $ = document.querySelector.bind(document);
function TabNavigation() {
    const html = {
        // links: document.querySelector('.tab-links'),
        // contents: document.querySelector('.tab-content'),
        // links: $('.tab-links'),
        // contents: $('.tab-content'),
        links: [...$('.tab-links').children],
        contents: [...$('.tab-content').children],
        openTab: $('[data-open]')
    }
    // console.log(html.contents)
    // This é o window

    // Desaparecer o texto contendo todo o elemnto ali dentro
    function hideAllTabContent() {
        html.contents.forEach(section => {//for each para cada
            section.style.display = "none"
        })
    }
    // Quando estiver numa aba(a cor laranja tem que ficar ativa ou seja 100% e desaparecer as outras)
    function removeAllActiveClass() {
        html.links.forEach(tab => {
            tab.className = tab.className.replace(" active", "")
        })
    }
    // Mostrar a tab que foi clicada(ou o conteudo a tab que foi clicada) e não os  outros conteudos
    function showCurrentTab(id) {//data-id
        // console.log('show current :' + id)
        hideAllTabContent()
        removeAllActiveClass()
        const tabcontent = $('#' + id)
        tabcontent.style.display = "block" //até aqui colocar um abaixo da outra
    }
    function selectTab(event) {
        // console.log('select tab')
        const target = event.currentTarget//target(o cara que clicou) clicou na aba
        showCurrentTab(target.dataset.id)

        // Não é para sumir o negocio laranja
        target.className += " active"
    }
    // Ouvido as mundaças EventList
    function listenForChange() {
        html.links.forEach(tab => {
            tab.addEventListener('click', selectTab)
        })
    }
    // Inciar o código(Executar os passos)
    function init() {
        // Chamar a função
        hideAllTabContent()
        listenForChange()

        html.openTab.click()
    }
    return {
        init
    }
}
// Quando Fique ouvido o evento de load quando a janela toda carrega
window.addEventListener('load', () => {
    const tabNavigation = TabNavigation()
    tabNavigation.init()
})