<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%perfil}}`.
 */
class m230814_212954_create_perfil_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('perfil', [
            'id' => $this->primaryKey(),
            'cliente_id' => $this->integer()->notNull(),
            'descripcion' => $this->text(),
            'fecha_creacion' => $this->date(),
        ]);

        $this->addForeignKey(
            'fk-perfil-client',
            'perfil',
            'cliente_id',
            'client', // Nombre de la tabla relacionada
            'id', // Columna en la tabla relacionada
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-perfil-client', 'perfil');
        $this->dropTable('perfil');
    }
}
