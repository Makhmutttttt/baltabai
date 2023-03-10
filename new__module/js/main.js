document.addEventListener("DOMContentLoaded", function (){

    let buttons = document.querySelectorAll("[data-popup]");
    for(let button of buttons){

        button.addEventListener("click", function(event){
            let popup = document.querySelector(this.dataset.popup);
            popup.style.display = "flex";

            // где на странице произошел шелчек это все event event
            
        
        })
    }
    let buttonsClose = document.querySelectorAll(".popup__icon__exit");
    for (let button of buttonsClose) {
        button.addEventListener("click", function (event) {
            let popup = this.closest(".popup__open__panel");
            // let popup = event.currentTarget.closest(".popup__open__panel"); may be
            popup.style.display = "none";
        });
    }

    let popups = document.querySelectorAll(".popup__open__panel");
    for (let popup of popups) {
        popup.addEventListener("click", function (event) {
            if (event.target == event.currentTarget
                // || event.target.matches('.popup__close')
                // || event.target.matches('.popup__close img')
            ) {
                popup.style.display = "none";
            }
        });
    }
    

    new Swiper('.swiper', {
        loop: true,
        slidesPerView: 4,
        spaceBetween: 34,
    });
    // const swiper = new Swiper('.swiper', {
    //     // Optional parameters
    //     // direction: 'vertical',
    //     loop: true,
    //     slidePerView: 4,
    //     spaceBetween: 34,
        
      
    //     // // If we need pagination
    //     // pagination: {
    //     //   el: '.swiper-pagination',
    //     // },
      
    //     // // Navigation arrows
    //     // navigation: {
    //     //   nextEl: '.swiper-button-next',
    //     //   prevEl: '.swiper-button-prev',
    //     // },
      
    //     // // And if we need scrollbar
    //     // scrollbar: {
    //     //   el: '.swiper-scrollbar',
    //     // },
    //   });


////////////////////////////////////////////////////

    // let burgerButton = document.querySelector(".header__burger");
    // let menu = document.querySelector(".header__nav");

    // burgerButton.addEventListener("click", function () {
    //     burgerButton.classList.toggle('header__burger_active');
    //     menu.classList.toggle('header__nav_active');
    // });


    let burgerButton = document.querySelector(".header__burger");
    let menu = document.querySelector(".header__nav");
    let menuClone = menu.cloneNode(true);
    
    burgerButton.addEventListener("click", function(){
        burgerButton.classList.toggle('header__burger_active');
        menu.classList.toggle('header__nav_active');

    });

})