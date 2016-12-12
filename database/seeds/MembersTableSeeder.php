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
                'shop'           => 'admin',
                'state'          => 1,
                'password'       => bcrypt('king0105'),
            ],[
                'work_id'        => 2,
                'name'           => '倪永梅',
                'mobile'         => '139211229133',
                'shop'           => 'admin',
                'state'          => 1,
                'password'       => bcrypt('NYM9133'),
            ],[
                'work_id'        => 3,
                'name'           => '倪娟梅',
                'shop'           => 'admin',
                'state'          => 1,
                'mobile'         => '15995357165',
                'password'       => bcrypt('NJM7165'),
            ],[
                'work_id'        => 5,
                'name'           => '陆鹏',
                'shop'           => 'admin',
                'state'          => 1,
                'mobile'         => '15298340938',
                'password'       => bcrypt('LP0938'),
            ],[
                'work_id'        => 6,
                'name'           => '崔寒',
                'shop'           => 'admin',
                'state'          => 1,
                'mobile'         => '13773916857',
                'password'       => bcrypt('CH6857'),
            ]
        ]);
    }
}
