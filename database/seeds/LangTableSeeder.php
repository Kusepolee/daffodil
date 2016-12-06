<?php

use Illuminate\Database\Seeder;

class LangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('lang')->insert([
            [
                'name' => 'menu_tools',
                'text' => '工作面版',
                'text_en' => 'Tools',
            ],
            [
                'name' => 'menu_crm',
                'text' => '客户关系',
                'text_en' => 'CRM',
            ],
            [
                'name' => 'menu_manage',
                'text' => '内部管理',
                'text_en' => 'Manage',
            ],
            [
                'name' => 'menu_orders',
                'text' => '订单',
                'text_en' => 'Orders',
            ],

        ]);
        
    }
}