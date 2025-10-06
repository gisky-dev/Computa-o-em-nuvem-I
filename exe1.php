<?php 

//funcao para converter uma string para binario

function stringParaBinario($string){
    //a funcao str_split divide a string em um array de caracteres
    //a funcao ord pega o valor ASCII de cada caractere
    //a funcao decbin converte o valor ASCII em binário

    $binario = '';
    foreach(str_split($string) as $char){
        // converte o caractere para o valor binário de 8 bits
        $binario .= str_pad(decbin(ord($char)), 8, '0', STR_PAD_LEFT) . ' ';
    }
    return $binario;
}

//exemplo de uso
$frase = "Olá, Mundo!";
$fraseBinario = stringParaBinario($frase);

//exibinido a frase origial e a versao binario
echo"Frase original: " . $frase . "<br>";
echo"Frase original: " . $fraseBinario . "<br>";



?>