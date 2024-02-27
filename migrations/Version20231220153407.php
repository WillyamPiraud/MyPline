<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231220153407 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE plan_action ADD titre VARCHAR(255) NOT NULL, ADD description LONGTEXT NOT NULL, ADD temps_prevu TIME NOT NULL, ADD frequence VARCHAR(255) NOT NULL, DROP days_of_week');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE plan_action ADD days_of_week LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', DROP titre, DROP description, DROP temps_prevu, DROP frequence');
    }
}
