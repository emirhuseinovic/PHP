let btn=document.getElementById("menu");
let list=document.querySelector("li");


function hide() {
    list.style.visibility="hidden";
    
}

btn.addEventListener("click", function () {
    list.style.visibility="visible";
    
    }
)

window.addEventListener("click", function (event) {
    if(event.target!=btn){
        hide();
    }
})




