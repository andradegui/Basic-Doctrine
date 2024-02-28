# App Students

## Aplicação criada pra estudos no Doctrine

## Comandos úteis Doctrine

`php bin/doctrine.php`
`php bin/doctrine.php orm:schema-tool:update --force`

### Comando para descrever uma Entity
`php bin/doctrine.php orm:mapping:describe Course`

### Apagar cache de resultados da query
`php bin/doctrine.php orm:clear-cache:result`

### Apagar cache de query
`php bin/doctrine.php orm:clear-cache:query`

### Apagar cache de metadata
`php bin/doctrine.php orm:clear-cache:metadata`

### Rodar uma consulta em SQL
`php bin/doctrine.php dbal:run-sql ""`

---

### Comandos migrations
`php vendor/bin/doctrine-migrations`

#### Criar migration com o SQL "na unha"
`php vendor/bin/doctrine-migrations migrations:generate`

#### Gerar migration de acordo com o mapeamento da Entity
`php vendor/bin/doctrine-migrations migrations:diff`

#### Rodar a migration
`php vendor/bin/doctrine-migrations migrations:migrate`

## Funcionalidades do projeto

### Funcionalidades de Student
- Inserir Aluno `php bin/insert-student.php "Aluno"`
- Listar Aluno `php bin/list-students.php`
- Atualizar Aluno `php bin/rename-student.php 1 "Gui Lima"`
- Deletar Aluno `php bin/delete-student.php 2`

### Funcionalidades de Course
- Inserir Curso `php bin/insert-course.php "PHP"`
- Inserir Aluno no curso `php bin/enroll-student.php 1 (ID Aluno) 1 (ID Curso)`

## Anotações 
> $argv[] é o paramêtro p/ pegar o dado a ser inserido, atualizado ou deletado 

> As configurações de Middleware servem pra ativar um debug das querys e gerar logs, e isso ajuda a entender a performace da aplicação

