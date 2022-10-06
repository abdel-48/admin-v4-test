document.addEventListener("contextmenu" , function (e){
    e.preventDefault();
});

document.onkeydown = function (e) {
    if (event.keycode == 123) {
        return false;
    }

    if (e.ctrlKey && e.shiftKey && e.keyCode == "I".chartCodeAT(0)){
        return false ;
    }

    if (e.ctrlKey && e.shiftKey && e.keyCode == "C".chartCodeAT(0)){
        return false ;
    }

    if (e.ctrlKey && e.shiftKey && e.keyCode == "J".chartCodeAT(0)){
        return false ;
    }

    if (e.ctrlKey && e.keyCode == "U".chartCodeAT(0)){
        return false ;
    }
}