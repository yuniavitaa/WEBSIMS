<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePendaftaranAnggota extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'nomor_hp' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => false,
            ],
            'domisili' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
            ],
            'perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'jabatan' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'alamat_perusahaan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'id_type' => [
                'type' => 'ENUM',
                'constraint' => ['ktp', 'sims', 'pasport'],
                'null' => false,
            ],
            'nomor_id' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
            ],
            'gender' => [
                'type' => 'ENUM',
                'constraint' => ['laki-laki', 'perempuan'],
                'null' => false,
            ],
            'payment_method' => [
                'type' => 'ENUM',
                'constraint' => ['transfer', 'gopay', 'shoppepay', 'dana'],
                'null' => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('pendaftaran_anggota');
    }
    public function down()
    {
        $this->forge->dropTable('pendaftaran_anggota');
    }
}
