<?php

class Professor
{
    private $nome;
    private $matricula;
    private $email;
    private $telefone;
    private $disciplinas;

    public function __construct($nome, $matricula, $email, $telefone, $disciplinas = [])
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->disciplinas = $disciplinas;
    }

    public function get_nome()
    {
        return $this->nome;
    }

    public function set_nome($nome)
    {
        $this->nome = $nome;
    }

    public function get_matricula()
    {
        return $this->matricula;
    }

    public function set_matricula($matricula)
    {
        $this->matricula = $matricula;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function set_email($email)
    {
        $this->email = $email;
    }

    public function get_telefone()
    {
        return $this->telefone;
    }

    public function set_telefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function get_disciplinas()
    {
        return $this->disciplinas;
    }

    public function set_disciplinas($disciplinas)
    {
        $this->disciplinas = $disciplinas;
    }

    public function adicionar_disciplina($disciplina)
    {
        $this->disciplinas[] = $disciplina;
    }

    public function remover_disciplina($disciplina)
    {
        $index = array_search($disciplina, $this->disciplinas);
        if ($index === false) return;
        array_splice($this->disciplinas, $index, 1);
    }
}
