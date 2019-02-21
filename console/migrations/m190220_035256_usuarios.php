<?php

use yii\db\Migration;

/**
 * Class m190220_035256_usuarios
 */
class m190220_035256_usuarios extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $fp = fopen ("usuarios.csv","r");
      $security = Yii::$app->getSecurity();
      $existen = [];
      while ($data = fgetcsv ($fp, 300, ",")) {
        $num = count ($data);

        if(!isset($existen[$data[0]])){
          echo "Usuario: ".$data[0]." ".$data[1]."\n";

          $this->insert('{{%user}}', [
              'username' => "".$data[0],
              'auth_key' => '12pemSeqcG-ov-bgrrsQli74vxmmzPOC',
              'password_hash' => $security->generatePasswordHash($data[0]),
              'password_reset_token' => null,
              'email' => 'prueba@email.com',
              'rol_id' => 4,
              'estado_id' => 1,
              'tipo_usuario_id' => 1,
              'created_at' => '2015-01-01 00:00:00',
              'updated_at' => '2015-01-01 00:00:00',
          ]);
          $this->insert('{{%perfil}}', [
              'user_id' => Yii::$app->db->getLastInsertID(),
              'nombre' => $data[2],
              'apellido' => $data[1],
              'genero_id' => 1
          ]);
          $existen[$data[0]] = 1;
        }
      }
      fclose ($fp);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
      $fp = fopen ("usuarios.csv","r");
      $security = Yii::$app->getSecurity();
      $existen = [];
      while ($data = fgetcsv ($fp, 300, ",")) {
        $num = count ($data);

        if(!isset($existen[$data[0]])){
          echo "Usuario: ".$data[0]." ".$data[1]."\n";

          $this->delete('{{%user}}', [
              'username' => "".$data[0],
          ]);
          $this->delete('{{%perfil}}', [
              'nombre' => $data[2],
              'apellido' => $data[1],
          ]);
          $existen[$data[0]] = 1;
        }
      }
      fclose ($fp);

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190220_035256_usuarios cannot be reverted.\n";

        return false;
    }
    */
}
