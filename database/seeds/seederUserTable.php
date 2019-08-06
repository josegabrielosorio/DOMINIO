<?php

use Illuminate\Database\Seeder;

class seederUserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user=Role::where('nombre','user')->first();
        $role_admin=Role::where('nombre','admin')->first();

        
    }
}
