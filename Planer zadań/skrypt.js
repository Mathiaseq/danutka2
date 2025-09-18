function zaznaczWykonane() {
  var element = event.target.closest("li");
  element.style.textDecoration = "line-through";
}
function dodajElementListy() {
  var tresc = document.getElementById("poleEdycyjne").value;
  var nowyElement = document.createElement("li");
  nowyElement.innerText = tresc;
  var przycisk = document.createElement("button");
  przycisk.innerText = "Wykonane";
  przycisk.onclick = zaznaczWykonane;
  nowyElement.appendChild(przycisk);
  document.getElementById("lista").appendChild(nowyElement);
}