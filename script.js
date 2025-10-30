document.getElementById("dodaj").addEventListener("click", function() {
    const plikInput = document.getElementById("plik");
    const kopieInput = document.getElementById("kopie");
    const papier = document.querySelector('input[name="papier"]:checked').value;

    if (!plikInput.files.length) return;
    const nazwaPliku = plikInput.files[0].name;
    const liczbaKopii = parseInt(kopieInput.value, 10);
    if (isNaN(liczbaKopii) || liczbaKopii <= 0) return;

    const cenaJednostkowa = papier === "błyszczący" ? 1.5 : 2;
    const cena = (liczbaKopii * cenaJednostkowa).toFixed(2);

    const koszyk = document.getElementById("koszyk");
    const img = document.createElement("img");
    img.src = nazwaPliku;
    img.alt = "wybrany obraz";
    img.style.width = "100px";

    const pKopie = document.createElement("p");
    pKopie.textContent = `Liczba kopii: ${liczbaKopii}`;

    const pCena = document.createElement("p");
    pCena.textContent = `Cena: ${cena} zł`;

    koszyk.appendChild(img);
    koszyk.appendChild(pKopie);
    koszyk.appendChild(pCena);
});
