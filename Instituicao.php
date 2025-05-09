<?php

    private $cdDisciplina;
    private $nome;
    private $local;
    private $quantiaAlunos;
    private $periodo;
    private $observacaoAvaliacoes;
    private $professor;

    public NewClass($cdDisciplina, $nome, $local, $quantiaAlunos, $periodo, $observacaoAvaliacoes, $professor) {
        $this-> cdDisciplina = $cdDisciplina;
        $this->nome = $nome;
        $this->local = $local;
        $this->quantiaAlunos = $quantiaAlunos;
        $this->periodo = $periodo;
        $this->observacaoAvaliacoes = $observacaoAvaliacoes;
        $this->professor = $professor;
    }
    
    public function getCdDisciplina()
    {
        return $this->cdDisciplina;
    }

    public function setCdDisciplina($cdDisciplina)
    {
        $this->cdDisciplina = $cdDisciplina;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getLocal()
    {
        return $this->local;
    }

    public function setLocal($local)
    {
        $this->local = $local;
    }

    public function getQuantiaAlunos()
    {
        return $this->quantiaAlunos;
    }

    public function setQuantiaAlunos($quantiaAlunos)
    {
        $this->quantiaAlunos = $quantiaAlunos;
    }
    
    public function getPeriodo()
    {
        return $this->periodo;
    }

    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;
    }

    public function getObservacaoAvaliacoes()
    {
        return $this->observacaoAvaliacoes;
    }

    public function setObservacaoAvaliacoes($observacaoAvaliacoes)
    {
        $this->observacaoAvaliacoes = $observacaoAvaliacoes;
    }

    public function getProfessor()
    {
        return $this->professor;
    }

    public function setProfessor($professor)
    {
        $this->professor = $professor;
    }

