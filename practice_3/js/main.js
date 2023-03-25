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
            // let popup = event.currentTarget.closest(".popup__open__panel");may be replace
            popup.style.display = "none";
        });
    }

    let popups = document.querySelectorAll(".popup__open__panel");
    for (let popup of popups) {
        popup.addEventListener("click", function (event) {
            if (event.target == event.currentTarget
                || event.target.matches('.popup__icon__exit')
                || event.target.matches('.popup__close img')
            ) {
                popup.style.display = "none";
            }
        });
    }
}
)
