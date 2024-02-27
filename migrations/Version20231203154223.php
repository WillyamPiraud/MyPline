<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231203154223 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mes_loisirs ADD temps_prevue TIME NOT NULL, ADD frequence VARCHAR(255) NOT NULL, ADD nombre_action INT DEFAULT NULL, ADD jour_recurrence DATE NOT NULL, ADD lieu VARCHAR(255) DEFAULT NULL, DROP lundi, DROP mardi, DROP mercredi, DROP jeudi, DROP vendredi, DROP samedi, DROP dimanche');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mes_loisirs ADD mardi TIME NOT NULL, ADD mercredi TIME NOT NULL, ADD jeudi TIME NOT NULL, ADD vendredi TIME NOT NULL, ADD samedi TIME NOT NULL, ADD dimanche TIME NOT NULL, DROP frequence, DROP nombre_action, DROP jour_recurrence, DROP lieu, CHANGE temps_prevue lundi TIME NOT NULL');
    }
}
