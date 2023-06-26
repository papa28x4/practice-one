<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('depts')->delete();

        \DB::table('depts')->insert(array (
            0 => 
            array (
                'id' => 21,
                'name' => 'Customer Services and Logistics',
                'slug' => 'customer-services-logistics',
                'created_at' => '2022-01-07 16:47:02',
                'updated_at' => '2022-01-07 16:47:02',
            ),
            1 => 
            array (
                'id' => 22,
                'name' => 'Marketing',
                'slug' => 'marketing',
                'created_at' => '2022-01-07 16:47:02',
                'updated_at' => '2022-01-07 16:47:02',
            ),
            2 => 
            array (
                'id' => 23,
                'name' => 'Sales',
                'slug' => 'sales',
                'created_at' => '2022-01-07 16:47:02',
                'updated_at' => '2022-01-07 16:47:02',
            ),
            3 => 
            array (
                'id' => 24,
                'name' => 'Finance',
                'slug' => 'finance',
                'created_at' => '2022-01-07 16:47:02',
                'updated_at' => '2022-01-07 16:47:02',
            ),
            4 => 
            array (
                'id' => 25,
                'name' => 'Human Resources',
                'slug' => 'human-resources',
                'created_at' => '2022-01-07 16:47:02',
                'updated_at' => '2022-01-07 16:47:02',
            ),
            5 => 
            array (
                'id' => 26,
                'name' => 'MD Office',
                'slug' => 'md-office',
                'created_at' => '2022-01-07 16:47:02',
                'updated_at' => '2022-01-07 16:47:02',
            ),
        ));
    }
}
