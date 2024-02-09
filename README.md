#App Students

## aplicação criada pra estudos no Doctrine

## Comandos úteis

- php bin/doctrine.php
- php bin/doctrine.php orm:schema-tool:update --force
- php bin/doctrine.php dbal:run-sql ""
- 

- *Inserir Aluno* php bin/insert-student.php
- *Listar Aluno* php bin/list-student.php
- *Atualizar Aluno* php bin/rename-student.php 1 "Gui Lima"
- *Deletar Aluno* php bin/delete-student.php 2

- *Inserir Curso* php bin/insert-course.php PHP

- *Inserir Aluno no curso* php bin/enroll-student.php 1 (ID Aluno) 1 (ID Curso)

- $argv[] é o paramêtro p/ pegar o dado a ser inserido, atualizado ou deletado 

