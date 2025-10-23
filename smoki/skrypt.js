function baza(aktualnyBlok){
    const blokBaza=document.getElementById("blokBaza");
    const pierwszy=document.getElementById("pierwszy");
    const blokOpisy=document.getElementById("blokOpisy");
    const drugi=document.getElementById("drugi");
    const blokGaleria=document.getElementById("blokGaleria");
    const trzeci=document.getElementById("trzeci");
    if(aktualnyBlok == pierwszy){
        blokBaza.style.backgroundColor="MistyRose";
        blokOpisy.style.backgroundColor="#FFAEA5";
        blokGaleria.style.backgroundColor="#FFAEA5";
        pierwszy.style.dispaly="block";
        drugi.style.display="none";
        trzeci.style.display="none";
    }
}
function opisy(aktualnyBlok){
    
}