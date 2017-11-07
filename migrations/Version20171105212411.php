<?php

namespace Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171105212411 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $schema->createTable('goal')
            ->addColumn('id', 'integer');
        $schema->createTable('match')
            ->addColumn('id', 'integer');
        $schema->createTable('player')
            ->addColumn('id', 'integer');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $schema->dropTable('goal');
        $schema->dropTable('match');
        $schema->dropTable('player');
    }
}
