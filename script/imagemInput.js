const imagemInput = document.getElementById("imagemInput");
const imagemExibida = document.getElementById("imagemExibida");
var titulo = document.getElementById("tt_add");
var remover = document.getElementById("button_remover");
remover.style.display = "none";

imagemInput.addEventListener("change", function () {
    const file = imagemInput.files[0];
    if (file) {
        const fileURL = URL.createObjectURL(file);
        imagemExibida.src = fileURL;
        imagemExibida.style.display = "flex";
        titulo.innerHTML = "TROCAR IMAGEM";
        remover.style.display = "flex";
    } else {
        imagemExibida.src = "";
        imagemExibida.style.display = "none";
        titulo.innerHTML = "ADICIONAR IMAGEM +";
        remover.style.display = "none";
    }
});

function removerImagemObj() {
    imagemInput.value = "";
    imagemExibida.src = "";
    imagemExibida.style.display = "none";
    titulo.innerHTML = "ADICIONAR IMAGEM +";
    remover.style.display = "none";
    console.log(imagemExibida.src);
}
