<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%address}}`.
 */
class m230814_212609_create_client_table extends Migration 
 
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('client', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string()->notNull(),
            'apellido' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'telefono' => $this->string(15),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%client}}');
    }
}
