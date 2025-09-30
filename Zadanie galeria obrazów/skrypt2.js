let numer_zdj=1;

function zmiena(src, numer){
    const obecny=document.getElementById("obecny");
    obecny.src=src;
    numer_zdj=numer;
}
function poprzednie(){
    const aktualne = document.getElementById("obecny");
    numer_zdj--;
    switch(numer_zdj){
        case 0:
            numer_zdj=5;
            aktualne.src="5.jpg";
            break;
        case 1:
            aktualne.src="1.jpg";
            break;
        case 2:
            aktualne.src="2.jpg";
            break;
        case 3:
            aktualne.src="3.jpg";
            break;
        case 4:
            aktualne.src="4.jpg";
            break;

    }
}
function nastepny(){
    const aktualne = document.getElementById("obecny");
    numer_zd++;
    switch(numer_zdj){
        case 6:
            numer_zdj=1;
            aktualne.src="1.jpg";
            break;
        case 2:
            aktualne.src="2.jpg";
            break;
        case 3:
            aktualne.src="3.jpg";
            break;
        case 4:
            aktualne.src="4.jpg";
            break;
        case 5:
            aktualne.src="5.jpg";
            break;

    }
}
