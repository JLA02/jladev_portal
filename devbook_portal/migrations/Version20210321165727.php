<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210321165727 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE items (id INT AUTO_INCREMENT NOT NULL, type ENUM(\'VIDEO\', \'PICTURE\') NOT NULL COMMENT \'(DC2Type:ItemEnumType)\', name VARCHAR(64) NOT NULL, id_project INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projects (id INT AUTO_INCREMENT NOT NULL, type ENUM(\'DESKTOP\', \'MOBILE\', \'GAMES\', \'WEB\', \'R&D\') NOT NULL COMMENT \'(DC2Type:ProjectEnumType)\', title VARCHAR(45) NOT NULL, briefdesc VARCHAR(255) NOT NULL, description VARCHAR(1024) NOT NULL, has_pictures TINYINT(1) NOT NULL, has_videos TINYINT(1) NOT NULL, has_download TINYINT(1) NOT NULL, repository VARCHAR(128) DEFAULT NULL, download VARCHAR(64) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE items');
        $this->addSql('DROP TABLE projects');
    }
}
