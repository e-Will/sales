<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170319_082252_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $table_option = null;

        if ($this->db->driverName === 'mysql') {
            $table_option = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string(75)->unique(), // email - если авторизация через социальные сети, то email отсутствует, но он должен быть уникален
            'password_hash' => $this->string(), // password_hash - если авторизация через социальные сети, то password_hash отсутствует
            'password_reset_token' => $this->string()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'username' => $this->string()->notNull(),
            'auth_method' => $this->boolean()->notNull()->defaultValue(1), // true => email, false => OAuth
            'lang' => $this->string(3)->notNull()->defaultValue('ru'), // { ru | ua | en }
            'role' => $this->string(50)->notNull()->defaultValue('consumer'),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $table_option);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
