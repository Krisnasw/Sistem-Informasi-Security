<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
        	'id' => '1',
            'nama' => 'Krisnasw',
            'username' => 'krisnasw',
            'password' => Hash::make('hehe'),
            'alamat' => 'Wiyung 1/8',
            'nohp' => '085608980363',
            'foto' => 'images/logo.png',
            'kota' => 'Surabaya',
            'provinsi' => 'Jawa Timur',
            'pos' => '60228',
            'email' => 'outattacker@gmail.com',
            'admin' => '1'
        	]);
            
            DB::table('users')->insert([
        	'id' => '2',
            'nama' => 'Member',
            'username' => 'demo',
            'password' => Hash::make('demo'),
            'alamat' => 'Wiyung 1/8',
            'nohp' => '085608980363',
            'foto' => 'images/logo.png',
            'kota' => 'Surabaya',
            'provinsi' => 'Jawa Timur',
            'pos' => '60228',
            'email' => 'outattackesr@gmail.com',
            'admin' => '0'
        	]);
    }
}
