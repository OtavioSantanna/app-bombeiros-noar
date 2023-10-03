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

    // Verifica se pelo menos um input está preenchido
    for (var i = 0; i < inputs.length; i++) {
        var input = inputs[i];
        if (input.value.trim() !== "") {
            algumPreenchido = true;
            break; // Sai do loop assim que um input for preenchido
        }
    }

    // Define o estilo da div "jabuti" com base no resultado da verificação
    if (algumPreenchido) {
        divJabuti.style.display = "flex";
    } else {
        divJabuti.style.display = "none";
    }
}

var forms = document.getElementsByClassName("form");
for (var i = 0; i < forms.length; i++) {
    var form = forms[i];
    var inputs = form.getElementsByTagName("input");
    for (var j = 0; j < inputs.length; j++) {
        var input = inputs[j];
        input.addEventListener("input", function() {
            verificarPreenchimento(form.id);
        });
    }
}

