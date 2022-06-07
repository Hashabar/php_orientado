<?php

class Pessoa{
    //public
    //private apenas por dentro da classe
    //protected
    protected $nome; //variavel nome
    const ESPECIE = "Humana"; //def const no class
    
    public function __construct($tmpNome)
    {
        $this->nome = $tmpNome;
    }


    public function setNome($novoNome){
        $this->nome = $novoNome;

    }

    public function getNome(){
        return $this->nome;

    }


    //this=objeto local
    //public function falarNome(){
        //echo $this->nome;
    //}
    
}