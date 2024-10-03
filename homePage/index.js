//Code for Website Preloader
let loader  = document.getElementById("preloader");

window.addEventListener("load", function pre_load(){
    loader.style.display = "none";
});

//Code for Navbar flipping effects
let menuBtn1= document.querySelector(".menu-btn1");
let menuBtn2= document.querySelector(".menu-btn2");
let navCard= document.querySelector(".nav-card");
let nav1 = document.querySelector(".nav1");
let nav2 = document.querySelector(".nav2");
let logoArea = document.querySelector(".logo-area");
let searchNav = document.querySelector(".search-nav");

menuBtn1.addEventListener("click", function(){
    navCard.classList.add("nav-card-flip");
    logoArea.classList.add("vanish");
    searchNav.classList.add("vanish");
});

menuBtn2.addEventListener("click", function(){
    navCard.classList.remove("nav-card-flip");
    logoArea.classList.remove("vanish");
    searchNav.classList.remove("vanish");
});


//Code for Search Box

let searchBox = document.querySelector(".search-box");
let searchIcon = document.querySelector(".fa-search");
let search_TextBox = document.querySelector(".search-text-box");
let goBtn = document.querySelector(".go-btn");


searchIcon.addEventListener("click", function expand_search(){
    logoArea.classList.toggle("vanish");
    searchBox.classList.toggle("expand-search-box");
    searchNav.classList.toggle("expand-search-nav");
    searchIcon.classList.toggle("displace-search-icon");
    search_TextBox.classList.toggle("expand-search-text-box");
    goBtn.classList.toggle("show-go-btn");
});


//Code for Video Player 
let videoPlayer = document.querySelector(".video-player");
let myVideo = document.querySelector("#my-video");

function playVideo(file){
    myVideo.src=file;
    videoPlayer.style.display = "block";
}





