<?php

include 'Database.php';

class ControlaDisciplina
{
    private $tabela = 'Disciplina';
    private $db;
    private $connection;

    public function __construct()
    {
        $this->db = new Database();
        $this->connection = $this->db->getConnection();
    }

    public function salvar(Disciplina $disciplina)
    {
        try {
            $sql = "INSERT INTO $this->tabela (nome, local, quantiaAlunos, periodo, observacaoAvaliacoes, professor) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$disciplina->getNome(), $disciplina->getLocal(), $disciplina->getQuantiaAlunos(), $disciplina->getPeriodo(), $disciplina->getObservacaoAvaliacoes(), $disciplina->getProfessor()]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao inserir usuÃ¡rio: " . $e->getMessage());
        }
    }

    public function listar()
    {
        try {
            $sql = "SELECT * FROM $this->tabela";
            $stmt = $this->connection->query($sql);
            $disciplina = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->db->closeConnection();
            return $disciplina;
        } catch (\Exception $e) {
            throw new \Exception("Erro ao listar disciplina: " . $e->getMessage());
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
            throw new \Exception("Erro ao excluir disciplina: " . $e->getMessage());
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
            return $disciplina;
        } catch (\Exception $e) {
            throw new \Exception("Erro ao buscar disciplina: " . $e->getMessage());
        }
    }

    public function atualizar(Disciplina $disciplina)
    {
        try {
            $sql = "UPDATE $this->tabela SET nome = ?, local = ?, quantiaAlunos = ?, periodo = ?, observacaoAvaliacoes = ?, professor = ? WHERE cdDisciplina = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([
                $disciplina->getNome(),
                $disciplina->getQuantiaAlunos(),
                $disciplina->getPeriodo(),
                $disciplina->getObservacaoAvaliacoes(),
                $disciplina->getProfessor(),
                $disciplina->getCdDisciplina()
            ]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao atualizar disciplina: " . $e->getMessage());
        }
    }
}
