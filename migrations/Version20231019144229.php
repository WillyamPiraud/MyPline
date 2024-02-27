<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231019144229 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $tableName = 'to_do_list';
        $columnName = 'remarque';

        if ($schema->getTable($tableName)->hasColumn($columnName)) {
            $this->addSql("ALTER TABLE $tableName DROP $columnName");
        }
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $tableName = 'to_do_list';
        $columnName = 'remarque';

        if (!$schema->getTable($tableName)->hasColumn($columnName)) {
            $this->addSql("ALTER TABLE $tableName ADD $columnName VARCHAR(255) DEFAULT NULL");
        }
    }
}
