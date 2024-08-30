<?php

class Usuario{
    private $nome;
    private $senha;
    private $email;    
    private $pdo;

    public function __construct(){
        $caminho = "mysql:dbname=etimcontato;host=localhost";
        $usuario = "root";
        $senha   = "";

        try {
            $this->pdo = new PDO($caminho, $usuario, $senha);
        } catch (\Throwable $th) {
            echo "<h2>Banco de dados Indisponivel, tente mais tarde!";
        }
    }

    public function getEmail(){
        return $this->email;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getSenha(){
        return $this->senha;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function insertUser($nome, $email, $senha, $idade){
        $sql = "INSERT INTO usuarios SET nome = :n, email = :e, senha = :s, idade = :i ";

        $sql = $this->pdo->prepare($sql);

        $sql->bindValue(":n", $nome);
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", $senha);
        $sql->bindValue(":i", $idade);


        return $sql->execute();
    }



    public function insertAtividade($nome, $idade, $cel){
        $sql = "INSERT INTO ativivade (nome, idade, cel) VALUES(:n, :i, :c)";

        $sql = $this->pdo->prepare($sql);

        $sql->bindValue(":n", $nome);
        $sql->bindValue(":i", $idade);
        $sql->bindValue(":c", $cel);

        return $sql->execute();
    }
}   