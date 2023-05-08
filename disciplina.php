<?php

class Disciplina
{
    private $nome;
    private $codigo;
    private $professor;
    private $carga_horaria;
    private $ementa;

    public function __construct($nome, $codigo, $professor, $carga_horaria, $ementa)
    {
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->professor = $professor;
        $this->carga_horaria = $carga_horaria;
        $this->ementa = $ementa;
    }

    public function get_nome()
    {
        return $this->nome;
    }

    public function set_nome($nome)
    {
        $this->nome = $nome;
    }

    public function get_codigo()
    {
        return $this->codigo;
    }

    public function set_codigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function get_professor()
    {
        return $this->professor;
    }

    public function set_professor($professor)
    {
        $this->professor = $professor;
    }

    public function get_carga_horaria()
    {
        return $this->carga_horaria;
    }

    public function set_carga_horaria($carga_horaria)
    {
        $this->carga_horaria = $carga_horaria;
    }

    public function get_ementa()
    {
        return $this->ementa;
    }

    public function set_ementa($ementa)
    {
        $this->ementa = $ementa;
    }
}
