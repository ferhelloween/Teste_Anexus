<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Arvore
 *
 * @author fernando
 */
class Arvore {
    
       public function inserir($no, $valor , $usuario, $pontos) {

        if ($no != NULL) {

            if ($valor < $no->valor) {

                if ($no->esquerda != NULL) {
                    $this->inserir($no->esquerda, $valor, $usuario, $pontos);
                } else {
                    $no->esquerda = new No($valor);
                }
            } else if ($valor > $no->valor) {
                if ($no->direita != NULL) {
                    $this->inserir($no->direita, $valor, $usuario, $pontos);
                } else {
                    $no->direita = new No($valor);
                }
            }
        }
    }

    public function buscar($no, $valor, $nivel = 9) {

        if ( $no->valor == $valor ) {
            return $nivel;

        } elseif ( $no->valor < $valor && is_object($no->direita) ) {
            $nivel++;
            $this->buscar($no->direita, $valor, $nivel);

        } elseif ( $no->valor > $valor && is_object($no->esquerda) ) {
            $nivel++;
            $this->buscar($no->esquerda, $valor, $nivel);

        } else {
            return 'false';
        }
    }


}
