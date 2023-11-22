// LOCALIZAÇÃO DOS TRAUMAS

function imgSelect(x){
    var symbol = document.getElementById('symbol');
    var symb = x;
    switch (symb){
        case symbol1:
            symbol.src="../img/1.png";
            break;
        
        case symbol2:
            symbol.src="../img/2.png";
            break;

        case symbol3:
            symbol.src="../img/3.png";
            break;

        case symbol4:
            symbol.src="../img/4.png";
            break;
    }
    
}


    // Seu código JavaScript aqui
    function addSymbol(event) {
        var symbol = document.getElementById('symbol');
        
        
        // Cria uma cópia do símbolo
        var newSymbol = symbol.cloneNode(true);

        // Obtém as coordenadas do clique em relação à imagem de fundo
        var rect = event.target.getBoundingClientRect();
        
        // Subtrai 10 pixels das coordenadas x e y
        var x = event.clientX - rect.left - 25;
        var y = event.clientY - rect.top - 25;

        // Define a posição da cópia do símbolo
        newSymbol.style.left = x + 'px';
        newSymbol.style.top = y + 'px';

        // Adiciona o símbolo ao contêiner
        document.getElementById('container').appendChild(newSymbol);
    }

