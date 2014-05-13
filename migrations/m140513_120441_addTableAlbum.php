<?php

use yii\db\Schema;

class m140513_120441_addTableAlbum extends \yii\db\Migration
{
    public function up()
    {
		$columns = [
			'id' => 'integer AUTO_INCREMENT PRIMARY KEY',
			'name' => 'varchar(50) NOT NULL',
			'description' => 'varchar(200) NOT NULL',
			'email' => 'varchar(100)',
			'phone' => 'varchar(20)',
			'create_date' => 'date NOT NULL',
			'change_date' => 'date', // дата изменения информации об альбоме
			'last_upload' => 'date',
			'number_of_photos' => 'integer',
		];
		$options = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
		
		$this->createTable('album', $columns, $options);
    }

    public function down()
    {
		$this->dropTable('album');
    }
}
