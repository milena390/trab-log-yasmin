<?php

class Usuario {
    // Propriedades privadas para encapsular os dados do usuário
    private $id;          // Identificador único do usuário (geralmente autoincrementado no banco)
    private $email;       // E-mail do usuário (usado como login/identificador único)
    private $nomeC;
    private $senha_hash;  // Senha do usuário armazenada de forma segura (hash)
    private $created_at;  // Data/hora de criação do usuário (geralmente definida pelo banco)

    // Getters (métodos para acessar os valores das propriedades)
    public function getId() { 
        return $this->id; 
    }

    public function getNomeC() { 
        return $this->nomeC; 
    }

    public function getEmail() { 
        return $this->email; 
    }

    public function getSenhaHash() { 
        return $this->senha_hash; 
    }

    public function getNome() { 
        return $this->nome; 
    }
    public function getCreatedAt() { 
        return $this->created_at; 
    }

    // Setters (métodos para definir/modificar os valores das propriedades)
    public function setNomeC($nomeC) { 
        $this->nomeC = $nomeC; 
    }

    public function setEmail($email) { 
        $this->email = $email; 
    }

    public function setSenhaHash($senha_hash) { 
        $this->senha_hash = $senha_hash; 
    }

    public function setSenhaHash($senha_hash) { 
        $this->nome = $nome; 
    }
}
?>