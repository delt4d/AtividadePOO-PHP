<?php

class Cliente
{
    private $nome;
    private $email;
    private $cpf;
    private $telefone;
    private $cnpj;
    private $endereco;

    function __construct($nome, $email, $cpf, $telefone, $cnpj, $endereco)
    {
        $this->$nome = $nome;
        $this->$email = $email;
        $this->$cpf = $cpf;
        $this->$telefone = $telefone;
        $this->$cnpj = $cnpj;
        $this->$endereco = $endereco;
    }

    public function get_nome()
    {
        return $this->nome;
    }

    public function set_nome($nome)
    {
        $this->nome = $nome;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function set_email($email)
    {
        $this->email = $email;
    }

    public function get_cpf()
    {
        return $this->cpf;
    }

    public function set_cpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function get_telefone()
    {
        return $this->telefone;
    }

    public function set_telefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function get_cnpj()
    {
        return $this->cnpj;
    }

    public function set_cnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function get_endereco()
    {
        return $this->endereco;
    }

    public function set_endereco($endereco)
    {
        $this->endereco = $endereco;
    }
}
