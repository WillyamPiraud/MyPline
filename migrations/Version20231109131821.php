<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231109131821 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE obligation_familiale_tempo (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, lundi_matin TIME NOT NULL, lundi_midi TIME NOT NULL, lundi_soir TIME NOT NULL, mardi_matin TIME NOT NULL, mardi_midi TIME NOT NULL, mardi_soir TIME NOT NULL, mercredi_matin TIME NOT NULL, mercredi_midi TIME NOT NULL, mercredi_soir TIME NOT NULL, jeudi_matin TIME NOT NULL, jeudi_midi TIME NOT NULL, jeudi_soir TIME NOT NULL, vendredi_matin TIME NOT NULL, vendredi_midi TIME NOT NULL, vendredi_soir TIME NOT NULL, samedi_matin TIME NOT NULL, samedi_midi TIME NOT NULL, samedi_soir TIME NOT NULL, dimanche_matin TIME NOT NULL, dimanche_midi TIME NOT NULL, dimanche_soir TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE obligation_familiale ADD id_obligation VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE obligation_familiale_tempo');
        $this->addSql('ALTER TABLE obligation_familiale DROP id_obligation');
    }
}
