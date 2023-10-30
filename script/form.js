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
        if (input.id !== "radio_m" && input.id !== "radio_f") {
            if (input.type === "checkbox") {
                if (input.checked) {
                    algumPreenchido = true;
                    console.log(inputs[i], "Checkbox marcada");
                    break; // Sai do loop assim que uma caixa de seleção for marcada
                } 
                // Acrescente aqui qualquer outro tipo de input que deseja verificar
            } else if (input.type === "text" || input.type === "date" || input.type === "file" || input.type === "number" || input.tagName === "textarea") {
                if (input.type === "file" && input.files.length > 0) {
                    algumPreenchido = true;
                } else if (input.value.trim() !== "") {
                    algumPreenchido = true;
                    console.log(inputs[i], input.value);
                }
                if (algumPreenchido) {
                    break; // Sai do loop assim que um input for preenchido
                }
            }
        }
    }

    // Define o estilo da div "jabuti" com base no resultado da verificação
    if (algumPreenchido) {
        divJabuti.style.display = "flex";
    } else {
        divJabuti.style.display = "none";
    }
}


gcs.style.display="none";
function md5a(){
    
    var idade = document.getElementById("idade");
    var menores = document.getElementById("menoresd5a");
    var maiores = document.getElementById("maioresd5a");
    var gcs = document.getElementById("gcs");
    var avisoIdade = document.getElementById("avisoIdade");

    if(idade.value != ""){
        if(idade.value <= 5){
            menores.style.display="flex";
            maiores.style.display="none";
            gcs.style.display="flex";
            avisoIdade.style.display="none";
        }else{
            menores.style.display="none";
            maiores.style.display="flex";
            gcs.style.display="flex";
            avisoIdade.style.display="none";
        }
    }else{
        menores.style.display="none";
        maiores.style.display="none";
        gcs.style.display="none";
        avisoIdade.style.display="flex";
    }

}




