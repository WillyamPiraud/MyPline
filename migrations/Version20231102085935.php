<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231102085935 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE besoin_vital_repas (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, lundi_petit_dejeuner TIME NOT NULL, lundi_dejeuner TIME NOT NULL, lundi_dinner TIME NOT NULL, mardi_petit_dejeuner TIME NOT NULL, mardi_dejeuner TIME NOT NULL, mardi_dinner TIME NOT NULL, mercredi_petit_dejeuner TIME NOT NULL, mercredi_dejeuner TIME NOT NULL, mercredi_dinner TIME NOT NULL, jeudi_petit_dejeuner TIME NOT NULL, jeudi_dejeuner TIME NOT NULL, jeudi_dinner TIME NOT NULL, vendredi_petit_dejeuner TIME NOT NULL, vendredi_dejeuner TIME NOT NULL, vendredi_dinner TIME NOT NULL, samedi_petit_dejeuner TIME NOT NULL, samedi_dejeuner TIME NOT NULL, samedi_dinner TIME NOT NULL, dimanche_petit_dejeuner TIME NOT NULL, dimanche_dejeuner TIME NOT NULL, dimanche_dinner TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE besoin_vital_repas');
    }
}
