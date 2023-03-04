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
    // let  buttonsClose = 



})