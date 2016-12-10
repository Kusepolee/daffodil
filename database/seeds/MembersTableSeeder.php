<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'work_id'        => 1,
                'name'           => '倪昌盛',
                'mobile'         => '13901752021',
                'password'       => bcrypt('king0105'),
            ],[
                'work_id'        => 2,
                'name'           => '倪永梅',
                'mobile'         => '139211229133',
                'password'       => bcrypt('NYM9133'),
            ],[
                'work_id'        => 3,
                'name'           => '倪娟梅',
                'mobile'         => '15995357165',
                'password'       => bcrypt('NJM7165'),
            ],[
                'work_id'        => 5,
                'name'           => '陆鹏',
                'mobile'         => '15298340938',
                'password'       => bcrypt('LP0938'),
            ],[
                'work_id'        => 6,
                'name'           => '崔寒',
                'mobile'         => '13773916857',
                'password'       => bcrypt('CH6857'),
            ]
        ]);
    }
}
