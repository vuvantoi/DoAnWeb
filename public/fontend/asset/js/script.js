const sliderItem = document.querySelectorAll(".slider-item")
for (let index = 0; index < sliderItem.length; index++) {
    sliderItem[index].style.left = index * 100 + "%"
}

const sliderItems = document.querySelector(".slider-items")
const arrowRight = document.querySelector(".ri-arrow-right-line")
const arrowLeft = document.querySelector(".ri-arrow-left-line")
let i = 0
if (arrowRight != null && arrowLeft != null){





function autoSlider(){
    if(i<sliderItem.length-1)
    {
        i++
        sliderItems.style.left = -i*100+"%"
    }
    else 
    {
        i=0
        sliderItems.style.left = -i*100+"%"
    }
}
setInterval(autoSlider,5000)

arrowRight.addEventListener('click',()=>{
    autoSlider()
})
arrowLeft.addEventListener('click',()=>{
    if (i==0){
        i=sliderItem.length-1
        sliderItems.style.left = -i*100+"%"
    }
    else
    {
        i--
        sliderItems.style.left = -i*100+"%"
    }
})
}
// menubar reponsive

const Menubar = document.querySelector(".header-bar-icon")
const headerNav = document.querySelector('.header-nav')
Menubar.addEventListener("click",()=>{
    headerNav.classList.toggle('active')
})

//sticky header
window.addEventListener('scroll',()=>{
    if(scrollY>50){
        document.querySelector('#header').classList.add('active')
    }
    else{
        document.querySelector('#header').classList.remove('active')

    }
})

// click product detail small

const imageSmall = document.querySelectorAll('.product-images-items img')
const imageMain = document.querySelector('.main-image')
for(let index = 0; index < imageSmall.length; index++){
    imageSmall[index].addEventListener('click',()=>{
        imageMain.src = imageSmall[index].src
        for (let a = 0; a < imageSmall.length; a++) {
            imageSmall[a].classList.remove('active')
        }
        imageSmall[index].classList.add('active')

    })
}

// quantity-product
const quanplus = document.querySelectorAll('.ri-add-line')
const quanminus = document.querySelectorAll('.ri-subtract-line')
const quanInput = document.querySelectorAll('.quantity-input')

if(quanminus!=null && quanplus!=null){

    for (let index = 0; index < quanInput.length; index++) {
        quanplus[index].addEventListener('click',()=>{
            inputValue =quanInput[index].value
            inputValue++
            quanInput[index].value= inputValue
            
        })
        quanminus[index].addEventListener('click',()=>{
            if(quanInput[index].value <=1){
                return false
            }
            else{
                inputValue =quanInput[index].value
                inputValue--
                quanInput[index].value= inputValue
            }
        })
    }
    
}


