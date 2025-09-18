function dodajDoKoszyka() {
  const obraz = document.getElementById('obraz').files[0];
  const liczbaKopii = +document.getElementById("liczba_kopii").value;
  const papier = document.querySelector('input[name="papier"]:checked').value;
  let cena = 0;

  if (papier === 'papier_blyszczacy') {
    cena = liczbaKopii * 1.5;
  } else if (papier === 'papier_matowy') {
    cena = liczbaKopii * 2;
  }

  const newImg = document.createElement("img");
  newImg.src = URL.createObjectURL(obraz);

  const newP1 = document.createElement("p");
  newP1.innerHTML = `Liczba kopii: ${liczbaKopii}`;

  const newP2 = document.createElement("p");
  newP2.innerHTML = `Cena: ${cena.toFixed(2)} zł`;

  const koszyk = document.getElementById("koszyk");
  koszyk.appendChild(newImg);
  koszyk.appendChild(newP1);
  koszyk.appendChild(newP2);
}