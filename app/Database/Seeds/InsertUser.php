<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertUser extends Seeder
{
	public function run()
	{
		$data = [
			'name' => 'admin',
			'email' => 'iqbalihwanul99@gmail.com',
			'password' => password_hash('admin', PASSWORD_BCRYPT),
			'role' => 'admin'
		];

		$this->db->table('users')->insert($data);
	}
}
