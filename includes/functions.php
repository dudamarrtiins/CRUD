<?php
require_once __DIR__ . '/../database/connect.php';

function cadastrar($conexao, $nome, $turma, $nasc, $ativo, $email)
{
    require_once __DIR__ . '/../database/connect.php';

    $sql = "INSERT INTO alunos (nome, turma, nasc, ativo, email) VALUES (:nome, :turma, :nasc, :ativo, :email)";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":turma", $turma);
        $stmt->bindParam(":nasc", $nasc);
        $stmt->bindParam(":ativo", $ativo);
        $stmt->bindParam(":email", $email);

        $stmt->execute();
        echo "Aluno inserido com sucesso!";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

function relatorio($conexao)
{


    $sql = "SELECT * FROM alunos";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->execute();

        $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($alunos as $aluno) {
            echo "ID: {$aluno['id']}<br>";
            echo "nome: {$aluno['nome']}<br>";
            echo "turma: {$aluno['turma']}<br>";
            echo "email: {$aluno['email']}<br>";
            echo "ativo: {$aluno['ativo']}<br>";
            echo "<hr>";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

function apagar($conexao, $id)
{
    $sql = "DELETE FROM alunos WHERE id = :id";
    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        echo "Usuário $id removido com sucesso!";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

function consultar($conexao, $id)
{

    $sql = "SELECT nome, turma, nasc, ativo, email FROM alunos WHERE id = :id";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $aluno = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Aluno: {$aluno['nome']} <br>";
        echo "Turma: {$aluno['turma']}<br>";
        echo "Nasc: {$aluno['nasc']}<br>";
        echo "Ativo: {$aluno['ativo']}<br>";
        echo "Email: {$aluno['email']}<br>";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

function atualizar($conexao, $id, $nome, $turma, $nasc, $ativo, $email)
{
    require_once '../database/connect.php';

    $sql = "UPDATE alunos SET nome = :nome , turma = :turma , nasc = :nasc , ativo = :ativo , email = :email WHERE id = :id";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":turma", $turma);
        $stmt->bindParam(":nasc", $nasc);
        $stmt->bindParam(":ativo", $ativo);
        $stmt->bindParam(":email", $email);

        $stmt->execute();
        echo "Aluno inserido com sucesso!";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

// Funções para o login:

function cadastrar_user($conexao, $email, $senha)
{
    require_once '../database/connect.php';

    $sql = "INSERT INTO usuarios (email, senha) VALUES (:email, :senha)";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);

        $stmt->execute();
        echo "Usuário cadastrado com sucesso!!";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

function consulta_user($conexao, $email)
{

    $sql = "SELECT id, email, senha FROM usuarios WHERE email = :email";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        return $usuario; // para globalizar ela
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
