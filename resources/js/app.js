import './bootstrap';

let btn = document.getElementById("button");
let sidebar = document.getElementById("sidebar");
let isShow = false;

btn.addEventListener("click", ()=> {
    if (isShow == true) {
        isShow = false
        sidebar.classList.add("flex")
        sidebar.classList.remove("hidden")
    } else {
        isShow = true
        sidebar.classList.remove("flex")
        sidebar.classList.add("hidden")
    }
    console.log(isShow)
});