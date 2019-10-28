<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //First clear the users and role_user tables
      User::truncate();
      DB::table('role_user')->truncate();

      //get the Roles
      $adminRole  = Role::where('name', 'Администратор')->first();
      $expertRole = Role::where('name', 'Експерт')->first();
      $userRole   = Role::where('name', 'Трудов посредник')->first();

      //Populate the mysql_list_table
      $admin1 = User::create([
        'name'  => 'Администратор',
        'email' => 'sswaz@az.bg',
        'password' => Hash::make('123'),
      ]);

      $admin2 = User::create([
        'name'  => 'Антоан Георгиев',
        'email' => 'processcontrol@abv.bg',
        'password' => Hash::make('123'),
      ]);

      $admin3 = User::create([
        'name'  => 'Христофор Георгиев',
        'email' => 'garry@ctc.bg',
        'password' => Hash::make('123'),
      ]);

      $admin4 = User::create([
        'name'  => 'Огнян Кръстев',
        'email' => 'okristeff@alphagraph.eu',
        'password' => Hash::make('123'),
      ]);

      $admin5 = User::create([
        'name'  => 'Виделин Николов',
        'email' => 'videlin@spot.bg',
        'password' => Hash::make('123'),
      ]);

      $expert1 = User::create([
        'name'  => 'Петър Петров',
        'email' => 'p.petrov@ctc.bg',
        'password' => Hash::make('123'),
      ]);

      $expert2 = User::create([
        'name'  => 'Боряна Андонова',
        'email' => 'b.andonova@newideasbg.com',
        'password' => Hash::make('123'),
      ]);

      $user = User::create([
        'name'  => 'Георги Николов',
        'email' => 'george@melakit.com',
        'password' => Hash::make('123'),
      ]);

      //Attach a role to the user
      $admin1->roles()->attach($adminRole);
      $admin2->roles()->attach($adminRole);
      $admin3->roles()->attach($adminRole);
      $admin4->roles()->attach($adminRole);
      $admin5->roles()->attach($adminRole);

      $expert1->roles()->attach($expertRole);
      $expert2->roles()->attach($expertRole);

      $user->roles()->attach($userRole);

    }
}
