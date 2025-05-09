<?php

include 'Database.php';

class ControlaInstituicao
{
    private $tabela = 'Instituicao';
    private $db;
    private $connection;

    public function __construct()
    {
        $this->db = new Database();
        $this->connection = $this->db->getConnection();
    }

    public function salvar(Instituicao $instituicao)
    {
        try {
            $sql = "INSERT INTO $this->tabela (cnpj, nomeInstituicao, endereco, email, telefone) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$instituicao->getNomeInstituicao(), $instituicao->getCnpj(), $instituicao->getEndereco(), $instituicao->getEmail(), $instituicao->getTelefone()]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao inserir instituicao: " . $e->getMessage());
        }
    }

    public function listar()
    {
        try {
            $sql = "SELECT * FROM $this->tabela";
            $stmt = $this->connection->query($sql);
            $instituicao = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->db->closeConnection();
            return $instituicao;
        } catch (\Exception $e) {
            throw new \Exception("Erro ao listar instituicao: " . $e->getMessage());
        }
    }

    public function excluir($id)
    {
        try {
            $sql = "DELETE FROM $this->tabela WHERE id = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$id]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao excluir instituicao: " . $e->getMessage());
        }
    }

    public function buscarPorId($id)
    {
        try {
            $sql = "SELECT * FROM $this->tabela WHERE id = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$id]);
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->db->closeConnection();
            return $instituicao;
        } catch (\Exception $e) {
            throw new \Exception("Erro ao buscar instituicao: " . $e->getMessage());
        }
    }

    public function atualizar(Instituicao $instituicao)
    {
        try {
            $sql = "UPDATE $this->tabela SET cnpj = ?, nomeInstituicao = ?, endereco = ?, email = ?, telefone = ? WHERE cdInstituicao = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([
                $instituicao->getCnpj(),
                $instituicao->getNomeInstituicao(),
                $instituicao->getEndereco(),
                $instituicao->getEmail(),
                $instituicao->getTelefone(),
                $instituicao->getCdInstituicao()
            ]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao atualizar instituicao: " . $e->getMessage());
        }
    }
}
