<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240108093344 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fond_urgence CHANGE epargne_minimum epargne_minimum VARCHAR(10) DEFAULT NULL, CHANGE epargne_place epargne_place VARCHAR(10) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fond_urgence CHANGE epargne_minimum epargne_minimum TINYINT(1) DEFAULT NULL, CHANGE epargne_place epargne_place TINYINT(1) DEFAULT NULL');
    }
}
