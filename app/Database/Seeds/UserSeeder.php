<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            'nama' => 'Admiral Radja',
            'username' => 'admrlrdj',
            'password' => password_hash('12345', PASSWORD_BCRYPT),
            'level' => 'petugas'
        );

        $this->db->table('user')->insert($data);
    }
}
