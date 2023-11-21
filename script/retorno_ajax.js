$(document).ready(function () {
    $('#submitButton').click(function () {
        var formData = $('#form1').serialize();

        $.ajax({
            type: 'POST',
            url: '../php/requests/request_ocorrencia.php',
            data: formData,
            dataType: 'json',
            success: function (response) {
                console.log(response); // Adicionado para ver o objeto de resposta completo

                if (response.error) {
                    alert('Erro: ' + response.error);
                } else {
                    var cardOcorrencia = $('.card_ocorrencia');
                    cardOcorrencia.empty();

                    if (response.result && response.result.length > 0) {
                        $.each(response.result, function (index, resultado) {
                            // Verifique se há um campo 'cabecalho'
                            if (resultado.cabecalho) {
                                // Parse do JSON no campo 'cabecalho'
                                var cabecalho = JSON.parse(resultado.cabecalho);

                                // Atribua os valores corretos
                                var data = cabecalho[0];
                                var sexo = cabecalho[1];
                                var hospital = cabecalho[2];
                                var nome = cabecalho[3];
                                var idade = cabecalho[4];
                                var cpf = cabecalho[5];
                                var telefone = cabecalho[6];
                                var acompanhante = cabecalho[7];
                                var idade_acompanhante = cabecalho[8];
                                var local = cabecalho[9];

                                console.log('Nome:', nome);
                                console.log('Local:', local);
                                console.log('Hospital:', hospital);
                                console.log('Acompanhante:', acompanhante);
                                
                                // Crie o HTML usando os dados
                                var cardHtml = '<div class="card_ocorrencia" id="card_'+ index +'">';
                                cardHtml += '<h>Nome: '+ nome +', Idade: '+ idade +'</h>';
                                cardHtml += '<p> Local da ocorrência: '+ local +'</p>';
                                cardHtml += '<p> Hospital: '+ hospital +'</p>';
                                cardHtml += '<p>Acompanhante: '+ acompanhante +'</p>';
                                cardHtml += '</div>';
                                
                                cardOcorrencia.append(cardHtml);
                            } else {
                                alert('Erro: O campo "cabecalho" não está presente no resultado.');
                            }
                        });
                    } else {
                        alert('Erro: Resultado vazio ou não formatado corretamente.');
                    }
                }
            },
            error: function (xhr, status, error) {
                alert('Erro: Não foi possível comunicar com o servidor. Status: ' + status + ', Error: ' + error);
            }
        });
    });
});
