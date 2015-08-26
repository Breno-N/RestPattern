<?php
/**
 * Usuarios
 * 
 * @Entity
 * @Table(name="usuarios")
 */
class Usuarios
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;
    
    /**
     * @Column(type="string", name="nome")
     */
    protected $nome;
    
    /**
     * @Column(type="integer", name="idade")
     */
    protected $idade;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }
    
    public function __toArray()
    {
        $data = [];
        foreach ($this as $k => $v) $data[$k] = $v;
        return $data;
    }

}