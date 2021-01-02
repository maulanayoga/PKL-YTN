<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableSiswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true,
			],

			'no_hp' => [
				'type' => 'VARCHAR',
				'constraint' => 12,
			],

			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],

			'tgl_pemesanan' => [
				'type' => 'DATE'
			]
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->addUniqueKey('no_hp');
		$this->forge->createTable('member');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('member');
	}
}
