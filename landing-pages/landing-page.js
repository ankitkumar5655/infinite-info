let flag = 0;

function controller(x){
    flag = flag + x;
    slideshow(flag);
}

slideshow(flag);

function slideshow(num){
    let slideBox = document.getElementsByClassName("slide-box");
    //console.log(slideBox);

    if(num==slideBox.length){
        flag = 0;
        num = 0;
    }
    if(num<0){
        flag = slideBox.length-1;
        num = slideBox.length-1;
    }


    for(let y of slideBox){
        y.style.display = "none";
    }

    slideBox[num].style.display = "block";
}