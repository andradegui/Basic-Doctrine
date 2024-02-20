<?php

declare(strict_types=1);

namespace Alura\Doctrine\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240220174804 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Criação de uma tabela teste';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

        // Criando com SQL 
        // $this->addSql('CREATE TABLE teste (id INTEGER PRIMARY KEY, coluna_teste VARCHAR(255), primary key (id);)');

        $table = $schema->createTable('teste');
        $table->addColumn('id', 'integer')->setAutoIncrement(true);
        $table->addColumn('coluna_teste', 'string');
        $table->setPrimaryKey(['id']);


    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

        // $this->addSql('DROP TABLE teste;');

        $schema->dropTable('teste');

    }
}
