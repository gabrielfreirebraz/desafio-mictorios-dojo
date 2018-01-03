<?php

/* 
 * RESOLUÇÃO DO PROBLEMA DOJO - TESTE EMPRESA BTIME
 * 
 * Autor: Gabriel Freire Braz
 * Social: @gabrielfreirebraz 
 * 
 * 
 * Distribuição de Mictórios
 * 
 * Um problema enfrentado pelos homens no uso de mictórios em banheiros públicos 
 * é o constrangimento causado por outro homem urinando no mictório ao lado. 
 * Uma situação contrangedora é definida quando dois "mijões" deveriam ocupar 
 * mictórios adjacentes.
 * 
 * Dada uma quantidade de mictórios em um banheiro e a ocupação inicial deles 
 * (informando em qual deles já existe um "mijão"), determine quantos "mijões" 
 * ainda podem usar os mictórios e qual a posição deles antes para que não ocorra 
 * uma situação constrangedora.
 */

require './Urinal.class.php';



// Total mictórios no banheiro 
$total_of_urinals = 13;

// Sequência de mijões que estão usando o Mictório (>1)
// OBS: Aceito apenas valores INTEIROS e POSITIVOS e < $total!
$arr_the_sequence_of_urinals_being_used = array(3,5,9);

// Iniciar Mictorio
$Urinal = new Urinal($total_of_urinals, $arr_the_sequence_of_urinals_being_used);
$Urinal->calculate_available_urinals();

// Exibir resultado 
echo "Quantidade de mijões que ainda podem usar os mictórios: ".$Mictorio->get_amount_of_available_urinals();
echo "Posição dos novos mijões para evitar constrangimento: ".$Mictorio->get_available_urinals_positions();




