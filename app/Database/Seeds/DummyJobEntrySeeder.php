<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DummyJobEntrySeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 100; $i++) {
            $data = [
                'user_id'     => 1,
                'job_no'      => 'JOB' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'design_no'   => 'D' . rand(100, 999),
                'fabric'      => $faker->word,
                'pcs'         => rand(1, 50),
                'top'         => $faker->word,
                'sleeve'      => $faker->word,
                'colors'      => rand(1, 5),
                'panna'       => rand(30, 60),
                'consumption' => rand(1, 10),
                'bottom'      => $faker->word,
                'dupatta'     => $faker->word,
                'less'        => rand(0, 5),
                'date'        => $faker->date(),
                'pass'        => rand(0, 1),
                'total_mtr'   => rand(10, 100),
                'pn_km'       => rand(1, 10),
                'set_copy'    => rand(1, 3),
                'allover'     => $faker->word,
                'lot'         => rand(1, 100),
                'roll'        => rand(1, 20),
                'print'       => $faker->word,
                'wastage'     => rand(0, 5),
                'images'      => '', // optional: add path if testing file uploads
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ];

            $this->db->table('jobentries')->insert($data);
        }
    }
}
