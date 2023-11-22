var ImagemAtual = "";

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
        novaImagem.style.width = "30px";
        novaImagem.style.borderRadius = "5px";

        // Adicione a nova imagem à div de contêiner
        DivDasImagens.appendChild(novaImagem);


        // Adicionar um evento de clique para apagar a imagem
        novaImagem.addEventListener('click', function () {
            DivDasImagens.removeChild(novaImagem);
        });
    }
}
function MudarImagemFratura(){
    ImagemAtual = "../img/luxacoes.png";
}
function MudarImagemFerimento(){
    ImagemAtual = "../img/diversos.png";
}
function MudarImagemHemorragia(){
    ImagemAtual = "../img/hemoragias.png";
}
function MudarImagemQueimadura1(){
    ImagemAtual = "../img/queimadura1.png";
}
function MudarImagemQueimadura3(){
    ImagemAtual = "../img/queimadura3.png";
}
function MudarImagemQueimadura2(){
    ImagemAtual = "../img/queimadura2.png";
}
function MudarImagemEsviceracao(){
    ImagemAtual = "../img/eviceracoes.png";
}
function MudarImagemFABFAF(){
    ImagemAtual = "../img/fnaf.png";
}
function MudarImagemAmputacao(){
    ImagemAtual = "../img/amputacao.png";
}