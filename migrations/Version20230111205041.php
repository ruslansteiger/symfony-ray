<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230111205041 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE movie_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE movie (id INT NOT NULL, title_id TEXT DEFAULT NULL, ordering INT DEFAULT NULL, title TEXT DEFAULT NULL, region TEXT DEFAULT NULL, language TEXT DEFAULT NULL, types TEXT DEFAULT NULL, attributes TEXT DEFAULT NULL, is_original_title INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE title.akas');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SCHEMA title');
        $this->addSql('DROP SEQUENCE movie_id_seq CASCADE');
        $this->addSql('CREATE TABLE title.akas ("titleId" TEXT DEFAULT NULL, ordering INT DEFAULT NULL, title TEXT DEFAULT NULL, region TEXT DEFAULT NULL, language TEXT DEFAULT NULL, types TEXT DEFAULT NULL, attributes TEXT DEFAULT NULL, "isOriginalTitle" INT DEFAULT NULL)');
        $this->addSql('DROP TABLE movie');
    }
}
