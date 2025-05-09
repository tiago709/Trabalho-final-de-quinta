CREATE TABLE Disciplina(
	cdDisciplina SERIAL PRIMARY KEY,
	nome VARCHAR(255),
	local VARCHAR(255),
	quantiaAlunos INT,
  periodo VARCHAR(255),
  observacaoAvaliacoes VARCHAR(255),
  professor VARCHAR(255)
)

CREATE TABLE Instituicao(
	cdInstituicao SERIAL PRIMARY KEY,
	cnpj CHAR(14),
  nomeInstituicao VARCHAR(255),
  endereco VARCHAR(255),
  email VARCHAR(255),
  telefone CHAR(15)
)
