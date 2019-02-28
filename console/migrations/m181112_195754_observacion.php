<?php

use yii\db\Migration;

/**
 * Class m181112_195754_observacion
 */
class m181112_195754_observacion extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $options = null;
      if ( $this->db->driverName=='mysql' ) {
        $options = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=innodb';
      }
      $this->createTable('{{observacion}}',[
        'id'      =>  $this->primaryKey(),
        'texto'   =>  $this->text()->notNull(),
        'programa_id' => $this->integer(),
        'created_at'  => $this->dateTime(),
        'updated_at'  => $this->dateTime(),
        'created_by'  => $this->integer(),
        'updated_by'  => $this->integer(),
      ], $options);
      $this->addForeignKey(
        'programaobservacion',
        'observacion',
        'programa_id',
        'programa',
        'id',
        'no action',
        'no action'
      );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
      $this->dropForeignKey('programaobservacion','{{programa}}');
      $this->dropTable('{{observacion}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181112_195754_observacion cannot be reverted.\n";

        return false;
    }
    */
}
