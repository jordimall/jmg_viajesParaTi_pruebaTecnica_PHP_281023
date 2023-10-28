<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231028152609 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE proveedor ADD esta_activo TINYINT(1) NOT NULL, DROP estaActivo, CHANGE correoElectronico correo_electronico VARCHAR(100) NOT NULL, CHANGE telefonoContacto telefono_contacto VARCHAR(9) NOT NULL, CHANGE tipoProveedor tipo_proveedor VARCHAR(20) NOT NULL, CHANGE fechaInsercion fecha_insercion DATE NOT NULL, CHANGE fechaUltimaModificacion fecha_ultima_modificacion DATE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE proveedor ADD estaActivo TINYINT(1) DEFAULT 1, DROP esta_activo, CHANGE correo_electronico correoElectronico VARCHAR(100) NOT NULL, CHANGE telefono_contacto telefonoContacto VARCHAR(9) NOT NULL, CHANGE tipo_proveedor tipoProveedor VARCHAR(20) NOT NULL, CHANGE fecha_insercion fechaInsercion DATE NOT NULL, CHANGE fecha_ultima_modificacion fechaUltimaModificacion DATE DEFAULT NULL');
    }
}
