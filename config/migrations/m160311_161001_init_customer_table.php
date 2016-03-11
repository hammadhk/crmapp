<?php

use yii\db\Schema;

class m160311_161001_init_customer_table extends \yii\db\Migration
{
    public function up()
    {
		$this->createTable(
			'customer',
			[
				'id' => 'pk',
				'name' => 'string',
				'birth_date' => 'date',
				'notes' => 'text'
			],
			'ENGINE=InnoDB'
		);
    }

    public function down()
    {
        $this->dropTable('customer');
    }
}
