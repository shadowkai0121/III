<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'firstName' => str_random(10),
            'departmentId' => str_random(5) . '@' . str_random(5) . 'com'
        ]);
    }
}