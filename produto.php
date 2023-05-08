<?php
class Produto
{
    private $nome;
    private $preco;
    private $quantidade;
    private $fabricante;
    private $comprador;

    public function __construct($nome, $preco, $quantidade, $fabricante, $comprador = null)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->fabricante = $fabricante;
        $this->comprador = $comprador;
    }

    public function get_nome()
    {
        return $this->nome;
    }

    public function set_nome($nome)
    {
        $this->nome = $nome;
    }

    public function get_preco()
    {
        return $this->preco;
    }

    public function set_preco($preco)
    {
        $this->preco = $preco;
    }

    public function get_quantidade()
    {
        return $this->quantidade;
    }

    public function set_quantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function get_fabricante()
    {
        return $this->fabricante;
    }

    public function set_fabricante($fabricante)
    {
        $this->fabricante = $fabricante;
    }

    public function get_comprador()
    {
        return $this->comprador;
    }

    public function set_comprador($comprador)
    {
        $this->comprador = $comprador;
    }

    public function calcularValorTotal()
    {
        return $this->preco * $this->quantidade;
    }
}
