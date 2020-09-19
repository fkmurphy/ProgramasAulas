<?php

use yii\db\Migration;

/**
 * Class m200913_225613_estructura_departamental
 */
class m200913_225613_estructura_departamental extends Migration
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
        $this->createTable('{{%estructura_departamental}}',[
            'id' =>  $this->primaryKey(),
            'departamento_id' =>  $this->integer()->notNull(),
            'asignatura_id' => $this->integer()->notNull(),
            'created_at' => $this->dateTime(),
            'updated_at'  => $this->dateTime(),
            'created_by'  => $this->integer(),
            'updated_by'  => $this->integer(),
        ], $options);
     
        $this->addForeignKey(
            'fk-departamento_id-estructu_departamental-departamento',
            '{{%estructura_departamental}}',
            'departamento_id',
            '{{%departamento}}',
            'id',
            'no action',
            'no action'
        );
        $this->addForeignKey(
            'fk-asignatura_id-estructu_departamental-asignatura',
            '{{%estructura_departamental}}',
            'asignatura_id',
            '{{%asignatura}}',
            'id',
            'no action',
            'no action'
        );
        $this->addForeignKey(
            'fk-created_by-estructu_departamental-user',
            '{{%estructura_departamental}}',
            'created_by',
            '{{%user}}',
            'id',
            'no action',
            'no action'
        );
        $this->addForeignKey(
            'fk-updated_by-estructu_departamental-user',
            '{{%estructura_departamental}}',
            'updated_by',
            '{{%user}}',
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
        echo "m200913_225613_estructura_departamental será revertido...\n";
        $this->dropForeignKey('fk-asignatura_id-estructu_departamental-asignatura','{{%estructura_departamental}}');
        $this->dropForeignKey('fk-departamento_id-estructu_departamental-departamento','{{%estructura_departamental}}');
        $this->dropForeignKey('fk-created_by-estructu_departamental-user','{{%estructura_departamental}}');
        $this->dropForeignKey('fk-updated_by-estructu_departamental-user','{{%estructura_departamental}}');
        $this->dropTable('{{%estructura_departamental}}');
    }

}
