// function sprawdz(){
//     const produkty = ['p1', 'p2', 'p3', 'p4'];
//     for(let i=0; i<produkty.length; i++){
//         let ilosc=document.getElementById(produkty[i]).innerHTML;
//         let produkt = document.getElementById(produktyp[i]);
//         if(ilosc == 0){
//             produkt.style="backgroundColor:red";
//         }
//         if (ilosc>=1 && ilosc<=5){
//             produkt.style="backgroundColor:yellow";
//         }
//         if (ilosc>5){
//             produkt.style="backgroundColor:Honeydew";
//         }
//     }
// }
// function aktualizuj(produktId){

// }

const iloscProduktow = document.querySelectorAll(".ilosc");
const nazwyProduktow = document.querySelectorAll(".produkt");
const aktualizujPrzycisk = document.querySelectorAll(".aktualizuj"); 
const zamowPrzycisk = document.querySelectorAll(".zamow");
let idZamowienia = 0;

function sprawdz(){
    iloscProduktow.forEach((produkt) => {
        if(produkt.innerHTML == 0){
            produkt.style.backgroundColor = "red";
        }
        if(produkt.innerHTML >= 1 && produkt.innerHTML <= 5){
            produkt.style.backgroundColor = "yellow";
        }
        if(produkt.innerHTML > 5){
            produkt.style.backgroundColor = "Honeydew";
        }
    });
}

aktualizujPrzycisk.forEach((przycisk, i) => {
    aktualizujPrzycisk.addEventListener("click", () => {
        const nowaIlosc = prompt("Podaj nową ilość");
        iloscProduktow[i].innerHTML = nowaIlosc;
        sprawdz();
    });
});
zamowPrzycisk.forEach((przycisk, i) => {
    zamowPrzycisk.addEventListener("click", () => {
        alert('Zamówienie nr ' + idZamowienia + ' Produkt: ' + nazwyProduktow[i].innerHTML);
        idZamowienia++;
    });
});
sprawdz();