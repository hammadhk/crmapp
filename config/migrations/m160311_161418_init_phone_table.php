<?php

use yii\db\Schema;

class m160311_161418_init_phone_table extends \yii\db\Migration
{
    public function up()
    {
		$this->createTable(
			'phone',
			[
				'id' => 'pk',
				'customer_id' => 'int unique',
				'number' => 'string'
			],
			'ENGINE=InnoDB'
		);
		$this->addForeignKey('customer_phone_numbers', 'phone', 'customer_id', 'customer', 'id');
    }

    public function down()
    {
    	$this->dropForeignKey('customer_phone_numbers');
    	$this->dropTable('phone');
    }
}
