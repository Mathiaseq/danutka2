let numer_zdj = 1;

function zmiana(src, numer){
    const obecny = document.getElementById("obecny");
    obecny.src = src;
    numer_zdj = numer;
}   
function poprzednie(){
    const aktualne = document.getElementById("obecny");
    numer_zdj--;
    if(numer_zdj==0){
        numer_zdj=5;
    }
    if(numer_zdj==1){
        aktualne.src = "1.jpg";
    }
    if(numer_zdj==2){
        aktualne.src = "2.jpg";
    }
    if(numer_zdj==3){
        aktualne.src = "3.jpg";
    }
    if(numer_zdj==4){
        aktualne.src = "4.jpg";
    }
    if(numer_zdj==5){
        aktualne.src = "5.jpg";
    }
}
function nastepny(){
    const aktualne =document.getElementById("obecny");
    numer_zdj++;
    if(numer_zdj==6){
        numer_zdj=1;
    }
    if(numer_zdj==1){
        aktualne.src = "1.jpg";
    }
    if(numer_zdj==2){
        aktualne.src = "2.jpg";
    }
    if(numer_zdj==3){
        aktualne.src = "3.jpg";
    }
    if(numer_zdj==4){
        aktualne.src = "4.jpg";
    }
    if(numer_zdj==5){
        aktualne.src = "5.jpg";
    }
}