<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        $this->call('users');
        $this->call('menus');
        $this->call('slides');
        $this->call('galleries');
        $this->call('projects');
        $this->command->info('Table is full !');

        Model::reguard();
    }
}
