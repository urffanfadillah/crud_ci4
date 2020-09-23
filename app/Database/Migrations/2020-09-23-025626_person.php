<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Person extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],
			'person_name' => [
				'type' => 'VARCHAR',
				'constraint' => '255'
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => '255'
			],
			'alamat' => [
				'type' => 'TEXT'
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('person');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('person');
	}
}
