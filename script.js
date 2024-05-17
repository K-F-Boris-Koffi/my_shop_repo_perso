// Srcipt pour afficher ou cacher la nav bare

navBox = document.getElementById('nav_box'),

nav_btn = document.querySelector("#nav_btn")

nav_btn_active =true;

nav_btn.addEventListener('click', function_nav_btn)

function function_nav_btn()

{
    if(!nav_btn_active)
    {


        navBox.classList.add('nav_btn_active');

        nav_btn_active =true;

    }
    else
    {
        nav_btn_active =false;
        navBox.classList.remove('nav_btn_active');

    }
}


// script pour le price Range


rangeLeft = document.getElementById("fromSlider");
rangeRight = document.getElementById("toSlider")

rangeLeft.addEventListener("input", fnt1)
rangeRight.addEventListener("input", fnt2)


function fnt1()
{
    document.querySelector(".box_price .min").innerHTML= document.getElementById("fromSlider").value+"$"
}


function fnt2()
{
    document.querySelector(".box_price .max").innerHTML= document.getElementById("toSlider").value+"$"
}


