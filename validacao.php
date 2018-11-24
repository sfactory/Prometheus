<?php 
include('cadastro_medico.html');

if( isset( $_POST['crm']) && is_numeric( $_POST['crm'])){
	alert('Preencha o campo CRM corretamente.');
}

if( isset( $_POST['nome']) && empty( $_POST['nome'])){
	alert('Preencha o campo nome corretamente.');
}

// verifica se um esta esta de escrito de forma correta
function validarCep($cep) {
    // retira espacos em branco
    $cep = trim($cep);
    // expressao regular para avaliar o cep
    $avaliaCep = ereg("^[0-9]{5}-[0-9]{3}$", $cep);
    
    // verifica o resultado
    if(!$avaliaCep) {            
        echo "CEP nao Valido";
    }
    else
    {
        echo "CEP Valido";
    }
}
 
validarCep("99999-000");


?>