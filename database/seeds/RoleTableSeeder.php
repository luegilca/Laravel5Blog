<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_candidate = new Role();
	    $role_candidate->name = 'candidate';
	    $role_candidate->description = 'A candidate user';
	    $role_candidate->save();

	    $role_assistant = new Role();
	    $role_assistant->name = 'assitant';
	    $role_assistant->description = 'An asistant user';
	    $role_assistant->save();

	    $role_admin = new Role();
	    $role_admin->name = 'admin';
	    $role_admin->description = 'An administrator user';
	    $role_admin->save();
    }
}
