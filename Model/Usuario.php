<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author fernando
 */
class Usuario {
   private $id; 
   private $usuario; 
   private $pontos = null; 
   private $parent = null; 
    
   public function __construct($id, $usuario, $pontos, $parent) {
       $this->id = $id;
       $this->usuario = $usuario; 
       $this->pontos = $pontos;
       $this->parent = $parent;
   }
   
   public function  getId() { 
       return $this->id;
   }
   
   public function getUsuario() {
       return $this->usuario;
   }

   public function getPontos() {
       return $this->pontos;
   }
   
   public function getParent() {
       return $this->parent;
   }
   
   public function setId($id) {
       $this->id = $id;
   }
     
   public function setUsuario($usuario) {
       $this->usuario = $usuario;
   }

   public function setPontos($pontos) {
       $this->pontos = $pontos;
   }

   public function setParent($parent) {
       $this->parent = $parent;
   }
   
   
   public function exibeArvoreUsuarios() { 
        if($this->getParent() != null) { 
             echo "<p>||||".$this->getUsuario().": ".$this->getPontos()." pontos|||</p>";                       
        } 
        
    }
   
}
