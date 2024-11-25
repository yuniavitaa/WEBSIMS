<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePendaftaranAnggotaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nomor_hp' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ],
            'domisili' => [
                'type' => 'TEXT',
            ],
            'perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'jabatan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'alamat_perusahaan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'id_type' => [
                'type' => 'ENUM',
                'constraint' => ['ktp', 'sims', 'pasport'],
            ],
            'nomor_id' => [
                'type' => 'VARCHAR',
                'constraint' => 15, // Ubah sesuai kebutuhan
            ],

            'gender' => [
                'type' => 'ENUM',
                'constraint' => ['laki-laki', 'perempuan'],
            ],
            'payment_method' => [
                'type' => 'ENUM',
                'constraint' => ['transfer', 'gopay', 'shoppepay', 'dana'],
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
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('pendaftaran_anggota');
    }

    public function down()
    {
        $this->forge->dropTable('pendaftaran_anggota');
    }
}
