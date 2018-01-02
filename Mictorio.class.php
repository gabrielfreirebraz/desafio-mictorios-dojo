<?php

/*
 * Mictorio
 */

/**
 * Description of Mictorio
 *
 * @author gabrielfreire
 */
class Mictorio {
   
    
    private $arr_utilizados = array();    
    private $total = 0;
    private $total_disponiveis = 0;


    public function __construct($total, $arr_utilizados) {        
        $this->total = $total;
        $this->arr_utilizados = $arr_utilizados;
    }
        
    
    /**
     * Calcular mictórios disponíveis para que novos mijões possam usar o mictório
     * 
     * 1. checar se posição atual está sendo utilizada
     * 2. checar se posições adjacentes (anterior e próxima) estão sendo utilizadas
     * 3. se condições verdadeiras, add contador no array
     * 
     * 
     * 
     */
    public function calcular_disponiveis() {
        $arr_disponiveis = array();
        
        for ($i=1; $i<=$this->total; $i++) {            
            
            // checar se posição atual está sendo utilizada
            if (in_array($i, $this->arr_utilizados)) {
                continue;
            } else {
                // checar se posições adjacentes (anterior e próxima) estão sendo utilizadas
                if ((!in_array($i-1, $this->arr_utilizados)) &&
                    (!in_array($i+1, $this->arr_utilizados))) {
                    $arr_disponiveis[] = $i;
                } else {
                    continue;
                }
            }
        }
        
        $this->total_disponiveis = count($arr_disponiveis);
    }   
    
    /**
     * 
     * @return type
     */
    public function get_total_disponiveis() {
        return $this->total_disponiveis;
    }
}
