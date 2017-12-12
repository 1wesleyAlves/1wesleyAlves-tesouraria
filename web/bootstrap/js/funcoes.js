function exibeBoxTipo(el1) {
    box1 = document.getElementById(el1).style.display;



    if (box1 == "none"){
        document.getElementById(el1).style.display = 'block';

    }else{
        document.getElementById(el1).style.display = 'none';

    }
}

