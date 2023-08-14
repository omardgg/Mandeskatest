<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%client}}`.
 */
class m230814_212936_create_address_table extends Migration
  {
  /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%address}}', [
            'id' => $this->primaryKey(),
            'client_id' => $this->integer()->notNull(),
            'calle' => $this->string(),
            'ciudad' => $this->string(),
            'codigo_postal' => $this->string(10),
        ]);
        $this->addForeignKey
            (
            'fk-address-client',
            'address',
            'client_id',
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
        $this->dropForeignKey('fk-address-client', 'address');
        $this->dropTable('address');
    }

}