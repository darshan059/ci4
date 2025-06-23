<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserIdToJobEntries extends Migration
{
    public function up()
    {
        $this->forge->addColumn('jobentries', [
            'user_id' => [
                'type' => 'INT',
                'null' => false,
            ],
        ]);
    }


    public function down()
    {
        //
    }
}
