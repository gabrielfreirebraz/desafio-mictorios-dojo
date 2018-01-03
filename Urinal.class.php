<?php

/*
 * Mictório
 */

/**
 * Classe Mictorio
 *
 * @author gabrielfreire
 */
class Urinal {    
    
    // Sequência de mictórios disponíveis
    private $arr_the_sequence_of_available_urinals = array(); 
    
    // Sequência de mictórios utilizados
    private $arr_the_sequence_of_urinals_being_used = array(); 
    
    // Total de mictórios
    private $total_of_urinals = 0;                   
    
    // Total de mictórios disponíveis
    private $total_of_available_urinals = 0;       


    public function __construct($total_of_urinals, $arr_the_sequence_of_urinals_being_used) {        
        $this->total_of_urinals = $total_of_urinals;
        $this->arr_the_sequence_of_urinals_being_used = $arr_the_sequence_of_urinals_being_used;
    }
    
    /**
     * Calcular mictórios disponíveis para que novos mijões possam 
     * usar o mictório sem constragimento
     */
    public function calculate_available_urinals() {
        $this->arr_the_sequence_of_available_urinals = array();
        
        for ($i=1; $i<=$this->total_of_urinals; $i++) {            
            
            // Checar se posição atual está sendo utilizada
            if (in_array($i, $this->arr_the_sequence_of_urinals_being_used)) {
                continue;
            } elseif (!$this->has_the_urinal_an_adjacent_position($i)) {
                $this->arr_the_sequence_of_available_urinals[] = $i;
            }
        }
        $this->total_of_available_urinals = count($this->arr_the_sequence_of_available_urinals);
    }   
    
    /**
     * Checar se posições adjacentes já estão sendo utilizadas
     * 
     * @param type $position
     */
    protected function has_the_urinal_an_adjacent_position($position) {
        if ((in_array($position-1, $this->arr_the_sequence_of_urinals_being_used)) &&
            (in_array($position+1, $this->arr_the_sequence_of_urinals_being_used))) {
            return true;
        }
    }

    /**
     * Retornar um número inteiro com o TOTAL de mictórios disponíveis para uso
     * OBS: 1° item solicitado na questão Dojo
     * 
     * @return int
     */
    public function get_total_of_available_urinals() {
        return $this->total_of_available_urinals;
    }
    
    /**
     * Retornar array de POSIÇÕES dos mictórios disponíveis para uso
     * OBS: 2° item solicitado na questão Dojo
     * 
     * @return array
     */
    public function get_available_urinals_positions() {
        return $this->arr_the_sequence_of_available_urinals;
    }
}


