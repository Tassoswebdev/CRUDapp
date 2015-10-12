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

     //   Model::reguard();
     $this->call('EmploeeTableSeeder');
    }
}

class EmploeeTableSeeder extends Seeder
{
	public function run()
	{
		App\Emploee::truncate();

		factory(App\Emploee::class, 17)->create();
	}
}
