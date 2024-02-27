<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230720095313 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE texte (id INT AUTO_INCREMENT NOT NULL, texte_intro LONGTEXT DEFAULT NULL, accueil_grille_texte_1 LONGTEXT DEFAULT NULL, accueil_grille_texte_2 LONGTEXT DEFAULT NULL, accueil_grille_texte_3 LONGTEXT DEFAULT NULL, page2_grille_texte_1 LONGTEXT DEFAULT NULL, page2_grille_texte_2 LONGTEXT DEFAULT NULL, page2_grille_texte_3 LONGTEXT DEFAULT NULL, page2_grille_texte_4 LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE texte');
    }
}
