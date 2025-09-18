function zmienEfekt1(){
    const efekty = document.querySelectorAll("input[name='opcja']");
    const zdjecie = document.querySelector("img[src='pszczola.jpg']");    

    efekty.forEach((e) => {
        if(e.checked) {
            zdjecie.style.filter = e.value
        }
    });
}
function zmienEfekt2(){
    const zdjecie = document.getElementById("pomarancza");
    
    zdjecie.style.filter = "none";
}
function zmienEfekt3(){
    const zdjecie = document.getElementById("pomarancza");

    zdjecie.style.filter = "grayscale(100%)"
}
function zmienEfekt4(){
    const zdjecie = document.getElementById("owoce");
    const skala = document.getElementById("skala").value;

    zdjecie.style.filter = `opacity(${skala}%)`;
}
function zmienEfekt5(){
    const zdjecie = document.getElementById("zolw");
    const skala = document.getElementById("skala2").value;

    zdjecie.style.filter = `brightness(${skala}%)`;
}