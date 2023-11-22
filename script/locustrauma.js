var ImagemAtual = "seta.png";

function inserirImagem(event) {
    var DivDasImagens = document.getElementById("div_traumas_localizados");
    if (DivDasImagens.contains(event.target)) {
        // Obtenha as coordenadas do clique do mouse em relação à div
        var x = event.clientX - DivDasImagens.getBoundingClientRect().left;
        var y = event.clientY - DivDasImagens.getBoundingClientRect().top;

        // Crie uma nova imagem
        var novaImagem = document.createElement("img");
        novaImagem.src = ImagemAtual;

        // Defina o tamanho da imagem
        novaImagem.style.width = "40px"; // Defina a largura desejada

        // Defina a posição da imagem exatamente onde o mouse foi clicado na div
        novaImagem.style.position = "absolute"; // Use "absolute" para posicionar em relação à div pai (div_traumas_localizados)
        novaImagem.style.left = x-11 + "px";
        novaImagem.style.top = y-11 + "px";
        novaImagem.style.zIndex = "1"; // Certifique-se de que o z-index seja maior

        // Adicione a nova imagem à div de contêiner
        DivDasImagens.appendChild(novaImagem);


        // Adicionar um evento de clique para apagar a imagem
        novaImagem.addEventListener('click', function () {
            DivDasImagens.removeChild(novaImagem);
        });
    }
}
function MudarImagemFratura(){
    ImagemAtual = "X.svg";
}
function MudarImagemFerimento(){
    ImagemAtual = "jarro.png";
}
function MudarImagemHemorragia(){
    ImagemAtual = "IMAGENS/Hemorragias.png";
}
function MudarImagemQueimadura1(){
    ImagemAtual = "IMAGENS/Queimadura-de-1.png";
}
function MudarImagemQueimadura3(){
    ImagemAtual = "IMAGENS/Queimadura-de-3.png";
}
function MudarImagemQueimadura2(){
    ImagemAtual = "IMAGENS/Queimadura-de-2.png";
}
function MudarImagemEsviceracao(){
    ImagemAtual = "IMAGENS/Esviceração.png";
}
function MudarImagemFABFAF(){
    ImagemAtual = "IMAGENS/F.A.B-F.A.F.png";
}
function MudarImagemAmputacao(){
    ImagemAtual = "IMAGENS/Amputação.png";
}