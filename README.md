# App Students

## Aplicação criada pra estudos no Doctrine

## Comandos úteis

`php bin/doctrine.php`
`php bin/doctrine.php orm:schema-tool:update --force`

### P/ rodar uma consulta em SQL
`php bin/doctrine.php dbal:run-sql ""`

---

### Comandos migrations
`php vendor/bin/doctrine-migrations`
`php vendor/bin/doctrine-migrations migrations:generate`
`php vendor/bin/doctrine-migrations migrations:migrate`

---

- Inserir Aluno `php bin/insert-student.php`
- Listar Aluno `php bin/list-students.php`
- Atualizar Aluno `php bin/rename-student.php 1 "Gui Lima"`
- Deletar Aluno `php bin/delete-student.php 2`

---

- Inserir Curso `php bin/insert-course.php PHP`
- Inserir Aluno no curso `php bin/enroll-student.php 1 (ID Aluno) 1 (ID Curso)`

--- 

## Anotações 
> $argv[] é o paramêtro p/ pegar o dado a ser inserido, atualizado ou deletado 

