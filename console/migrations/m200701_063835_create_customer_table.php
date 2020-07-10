<?php

use yii\db\Migration;

/**
 * customer 主表
 */
class m200701_063835_create_customer_table extends Migration
{
    private $table_str = '{{%customer}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if($this->db->driverName === 'mysql'){
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB COMMENT="客户主表"';
        }
        $this->createTable($this->table_str, [
            'id' => $this->primaryKey()
        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->table_str);
    }
}
