$(document).ready(function(){$(".rexpectation-slider").slick({slidesToShow:1,slidesToScroll:1,arrows:!0}),$(".reviews-slider").slick({slidesToShow:1,slidesToScroll:1,arrows:!0})});const navbarCheak=document.querySelector(".navbar-collapse"),nav=document.querySelector(".navbar-toggler"),header=document.querySelector(".header");nav.addEventListener("click",()=>{navbarCheak.classList.contains("show")?header.style.background="transparent":header.style.background="rgba(0,0,0,.8)"});const open=document.querySelectorAll(".modalOpen"),modal=document.querySelector(".modal");open.forEach(e=>{e.addEventListener("click",()=>{modal.style.display="block"})}),window.addEventListener("click",e=>{e.target===modal&&(modal.style.display="none")});