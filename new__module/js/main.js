document.addEventListener("DOMContentLoaded", function (){

    let buttons = document.querySelectorAll("[data-popup]");
    for(let button of buttons){

        button.addEventListener("click", function(event){
            let popup = document.querySelector(this.dataset.popup);
            popup.style.display = "flex";

            // где на странице произошел шелчек это все event event
            // dataset.popup хранит место проишествие события
        
        })
    }
    let buttonsClose = document.querySelectorAll(".popup__icon__exit");
    for (let button of buttonsClose) {
        button.addEventListener("click", function (event) {
            let popup = this.closest(".popup__open__panel");
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
    

    const swiper = new Swiper('.swiper', {
        // Optional parameters
        // direction: 'vertical',
        loop: true,
        slidePerView: 4,
        spaceBetween: 34,
        
      
        // // If we need pagination
        // pagination: {
        //   el: '.swiper-pagination',
        // },
      
        // // Navigation arrows
        // navigation: {
        //   nextEl: '.swiper-button-next',
        //   prevEl: '.swiper-button-prev',
        // },
      
        // // And if we need scrollbar
        // scrollbar: {
        //   el: '.swiper-scrollbar',
        // },
      });



})