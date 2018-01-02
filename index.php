<?php

/* 
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

require './Mictorio.class.php';


/**
 * Total mictórios no banheiro
 */
$total = 10;

/**
 * Posição dos mijões que estão usando o Mictório
 * OBS: Não colocar posições com valor superior a variável $total_mictorios
 */
$arr_utilizados = array(3,5,9);


/**
 * 
 */
$Mictorio = new Mictorio($total, $arr_utilizados);
$Mictorio->calcular_disponiveis();

echo $Mictorio->get_total_disponiveis();

