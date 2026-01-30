<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260128203455 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE product (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, price NUMERIC(5, 2) DEFAULT NULL, active BOOLEAN DEFAULT true, created_at timestamp(0) WITHOUT TIME ZONE NULL, updated_at timestamp(0) WITHOUT TIME ZONE default CURRENT_TIMESTAMP null, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE product');
    }
}
