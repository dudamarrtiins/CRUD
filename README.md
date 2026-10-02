# CRUD - GESTÃO DE ALUNOS 

O Sistema de Gestão Escolar é uma aplicação completa voltada para o gerenciamento e controle de registros acadêmicos. O projeto implementa as operações fundamentais do CRUD (Create, Read, Update, Delete) integrando autenticação segura e conexão direta com banco de dados relacional.

## 📌 Sobre o Projeto
O objetivo principal deste sistema é fornecer uma solução eficiente e organizada para a administração de dados de alunos em instituições de ensino. A aplicação conta com uma camada de segurança onde apenas usuários autenticados (via e-mail e senha previamente cadastrados) possuem permissão para acessar o painel e realizar as operações de leitura, inclusão, alteração ou exclusão de registros.
Toda a persistência de dados é feita de forma dinâmica e segura em um banco de dados PostgreSQL denominado ESCOLA, estruturado e gerenciado diretamente através da integração com o VS Code.

## 🚀 Funcionalidades Principais
-  Autenticação de Usuários (RF-001): Sistema de login com validação de e-mail e senha cadastrados no site para liberação do acesso às funcionalidades.
-  Cadastro de Alunos (RF-002): Inclusão de novos alunos no sistema com armazenamento direto no banco de dados.
-  Visualização Geral de Alunos (RF-003): Listagem completa de todos os alunos cadastrados no banco de dados.
-  Consulta Filtrada (RF-004): Busca específica para visualizar os dados de um único aluno utilizando a instrução WHERE.
-  Atualização de Cadastros (RF-005): Edição e atualização de dados dos alunos existentes na base.
-  Remoção de Alunos (RF-006): Exclusão permanente de registros de alunos do banco de dados.

## 📐 Regras de Negócio e Engenharia de Requisitos
Regras de Negócio Fundamentais (RN)
- RN-001 (Acesso Autenticado): Nenhuma funcionalidade do CRUD pode ser executada sem a autenticação prévia do usuário por e-mail e senha.
- RN-002 (Integridade dos Dados): Cada registro de aluno possui identificador exclusivo (id) para permitir consultas e alterações pontuais via filtro WHERE.
- RN-003 (Persistência Instantânea): Qualquer alteração efetuada na aplicação reflete em tempo real na base de dados ESCOLA.

## 🛠️ Tecnologias Utilizadas
O projeto foi desenvolvido utilizando:
-  Visual Studio Code (VS Code)
-  PostgreSQL
   - Nome da Base de Dados: ESCOLA
   - Tabela de Dados: alunos
