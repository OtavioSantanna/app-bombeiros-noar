/*
function abrirBloco(x)
{
    var bloco  = document.getElementById(x)
    if (bloco.style.display === "flex") {
        bloco.style.display = "none";
    } 
    else {
        bloco.style.display = "flex";
    }
}
*/

function abrirBloco(x) {
    // Pega o bloco específico que foi clicado
    var bloco = document.getElementById(x);

    // Se o bloco clicado já estiver aberto, fecha-o
    if (bloco.style.display === "flex") {
        bloco.style.display = "none";
    } else {
        // Oculta todos os blocos
        var todosBlocos = document.querySelectorAll('.bloco');
        todosBlocos.forEach(function(outroBloco) {
            outroBloco.style.display = "none";
        });

        // Exibe o bloco clicado
        bloco.style.display = "flex";
    }
}

function blocoClicado(event) {
    // Impede a propagação do evento de clique para a div form
    event.stopPropagation();


}

function verificarPreenchimento(formId) {
    var form = document.getElementById(formId);
    var inputs = form.getElementsByTagName("input");
    var divJabuti = document.getElementById("jabuti_" + formId);

    var algumPreenchido = false;
    var estadoAnterior = divJabuti.style.display === "flex"; // Rastreia o estado anterior

    // Verifica se pelo menos um input está preenchido
    for (var i = 0; i < inputs.length; i++) {
        var input = inputs[i];
        if(input.id!="radio_m" && input.id != "radio_f")
        {
            if (input.value.trim() !== "") {
            
                    algumPreenchido = true;
                    console.log(inputs[i],input.value)
                
                
            
                break; // Sai do loop assim que um input for preenchido
            }
        }
    }

    // Define o estilo da div "jabuti" com base no resultado da verificação
    //console.log("Antes de definir o estilo:", divJabuti.style.display);

    if (algumPreenchido) {
        divJabuti.style.display = "flex";
    } else {
        divJabuti.style.display = "none";
    }
    
    //console.log("Depois de definir o estilo:", divJabuti.style.display);

}

function abrirPES(x){
    var subdiv = document.getElementById(x);

    //console.log("Antes de definir o estilo:", divJabuti.style.display);


    if (subdiv.style.display === "flex") {
        subdiv.style.display = "none";
    } 
    else {
        subdiv.style.display = "flex";
    }

    //console.log("Depois de definir o estilo:", divJabuti.style.display);
}

function abrirMensagemEnvio() {
    var envioDiv = document.getElementById("envioDiv");

    if (envioDiv) {
        if (envioDiv.style.display === "flex") {
            envioDiv.style.display = "none";
        } else {
            envioDiv.style.display = "flex";
        }
    } else {
        console.error("Elemento com ID 'envioDiv' não encontrado.");
    }
}

function abrirMenuFoto() {
    var menuFotoDiv = document.getElementById("menuFotoDiv");

    if (menuFotoDiv) {
        if (menuFotoDiv.style.display === "flex") {
            menuFotoDiv.style.display = "none";
        } else {
            menuFotoDiv.style.display = "flex";
        }
    } else {
        console.error("Elemento com ID 'menuFotoDiv' não encontrado.");
    }
}

