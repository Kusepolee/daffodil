<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            [
                'parent_id' => 0,
                'order' => 1,
                'name' => '根',
                'name_en' => 'root',
                'code' => '1',
                'create_by' => 0,
            ],
            [
                'parent_id' => 1,
                'order' => 2,
                'name' => '内部',
                'name_en' => 'staff',
                'code' => '1-2',
                'create_by' => 0,
            ],
            [
                'parent_id' => 1,
                'order' => 3,
                'name' => '客户',
                'name_en' => 'customer',
                'code' => '1-3',
                'create_by' => 0,
            ],
            [
                'parent_id' => 1,
                'order' => 4,
                'name' => '供应商',
                'name_en' => 'supplier',
                'code' => '1-4',
                'create_by' => 0,
            ],
        ]);
    }
}