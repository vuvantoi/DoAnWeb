const menuli = document.querySelectorAll('.admin-slidebar-content > ul > li > a')
const submenu = document.querySelectorAll('.sub-menu')

for (let index = 0; index < menuli.length; index++) {
    menuli[index].addEventListener('click',(e)=>{
        e.preventDefault()
        // menuli[index].parentNode.querySelector('ul').classList.toggle('active')
        for (let i = 0; i < submenu.length; i++) {
            submenu[i].setAttribute("style","height: 0px")
            
        }
        const submenuHeight = menuli[index].parentNode.querySelector('ul .sub-menu-items').offsetHeight
        menuli[index].parentNode.querySelector('ul').setAttribute("style","height:"+submenuHeight+"px");
    })
}

