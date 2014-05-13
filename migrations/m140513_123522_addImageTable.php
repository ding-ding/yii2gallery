<?php

use yii\db\Schema;

class m140513_123522_addImageTable extends \yii\db\Migration
{
    public function up()
    {
		$columns = [
			'id' => 'INTEGER AUTO_INCREMENT PRIMARY KEY',
			'name' => 'VARCHAR(50) NOT NULL',
			'location_shooting' => 'VARCHAR(200) NOT NULL',
			'file' => 'TEXT NOT NULL',
			'upload_date' => 'DATE NOT NULL',
		];
		$options = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
		
		$this->createTable('image', $columns, $options);
    }

    public function down()
    {
		$this->dropTable('image');
    }
}
