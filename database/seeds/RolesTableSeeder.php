<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //First clear the table
        Role::truncate();

        //Populate the mysql_list_table
        Role::create(['name' => 'Администратор']);
        Role::create(['name' => 'Експерт']);
        Role::create(['name' => 'Трудов посредник']);
    }
}
