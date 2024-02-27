<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231126191254 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        if (!$schema->hasTable('besoin_vital_repas')) {
            $this->addSql('CREATE TABLE besoin_vital_repas (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, lundi_petit_dejeuner TIME NOT NULL, lundi_dejeuner TIME NOT NULL, lundi_dinner TIME NOT NULL, mardi_petit_dejeuner TIME NOT NULL, mardi_dejeuner TIME NOT NULL, mardi_dinner TIME NOT NULL, mercredi_petit_dejeuner TIME NOT NULL, mercredi_dejeuner TIME NOT NULL, mercredi_dinner TIME NOT NULL, jeudi_petit_dejeuner TIME NOT NULL, jeudi_dejeuner TIME NOT NULL, jeudi_dinner TIME NOT NULL, vendredi_petit_dejeuner TIME NOT NULL, vendredi_dejeuner TIME NOT NULL, vendredi_dinner TIME NOT NULL, samedi_petit_dejeuner TIME NOT NULL, samedi_dejeuner TIME NOT NULL, samedi_dinner TIME NOT NULL, dimanche_petit_dejeuner TIME NOT NULL, dimanche_dejeuner TIME NOT NULL, dimanche_dinner TIME NOT NULL, id_besoin_vital INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        }
        if (!$schema->hasTable('journalier')) {
            $this->addSql('CREATE TABLE journalier (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, date_journalier DATE NOT NULL, temps_task TIME NOT NULL, user_id INT NOT NULL, statut TINYINT(1) NOT NULL, affilier TINYINT(1) NOT NULL, id_zoom VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        }
        if (!$schema->hasTable('obligation_familiale_tempo')) {
            $this->addSql('CREATE TABLE obligation_familiale_tempo (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, lundi_matin TIME NOT NULL, lundi_midi TIME NOT NULL, lundi_soir TIME NOT NULL, mardi_matin TIME NOT NULL, mardi_midi TIME NOT NULL, mardi_soir TIME NOT NULL, mercredi_matin TIME NOT NULL, mercredi_midi TIME NOT NULL, mercredi_soir TIME NOT NULL, jeudi_matin TIME NOT NULL, jeudi_midi TIME NOT NULL, jeudi_soir TIME NOT NULL, vendredi_matin TIME NOT NULL, vendredi_midi TIME NOT NULL, vendredi_soir TIME NOT NULL, samedi_matin TIME NOT NULL, samedi_midi TIME NOT NULL, samedi_soir TIME NOT NULL, dimanche_matin TIME NOT NULL, dimanche_midi TIME NOT NULL, dimanche_soir TIME NOT NULL, id_obligation INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        }
        if (!$schema->hasTable('obligation_metier')) {
            $this->addSql('CREATE TABLE obligation_metier (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, intitule VARCHAR(255) NOT NULL, employeur VARCHAR(255) DEFAULT NULL, lundi TIME NOT NULL, mardi TIME NOT NULL, mercredi TIME NOT NULL, jeudi TIME NOT NULL, vendredi TIME NOT NULL, samedi TIME NOT NULL, dimanche TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        }
        if (!$schema->hasTable('routine_travail')) {
            $this->addSql('CREATE TABLE routine_travail (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, intitule VARCHAR(255) NOT NULL, temps_prevue TIME NOT NULL, frequence VARCHAR(100) NOT NULL, nombre_action INT NOT NULL, premier_jour DATE NOT NULL, lieu VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        }
        if (!$schema->hasTable('task')) {
            $this->addSql('CREATE TABLE task (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, statut TINYINT(1) DEFAULT NULL, id_todo INT NOT NULL, remarque VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        }
        if (!$schema->hasTable('to_do_list')) {
            $this->addSql('CREATE TABLE to_do_list (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, user_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        }
        if ($schema->getTable('objectif')->hasColumn('id_objectif')) {
            $this->addSql('ALTER TABLE objectif DROP id_objectif');
        }
        if (!$schema->getTable('obligation_familiale')->hasColumn('id_obligation')) {
            $this->addSql('ALTER TABLE obligation_familiale ADD id_obligation VARCHAR(255) DEFAULT NULL');
        }
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE besoin_vital_repas');
        $this->addSql('DROP TABLE journalier');
        $this->addSql('DROP TABLE obligation_familiale_tempo');
        $this->addSql('DROP TABLE obligation_metier');
        $this->addSql('DROP TABLE routine_travail');
        $this->addSql('DROP TABLE task');
        $this->addSql('DROP TABLE to_do_list');
        $this->addSql('ALTER TABLE objectif ADD id_objectif INT NOT NULL');
        $this->addSql('ALTER TABLE obligation_familiale DROP id_obligation');
    }
}
