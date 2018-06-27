<?php

use App\Models\Auth\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

/**
 * Class UserTableSeeder.
 */
class UserTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();

        // Add the master administrator, user id of 1
        User::create([
            'first_name'        => 'Admin',
            'last_name'         => 'Istrator',
            'email'             => 'admin@admin.com',
            'password'          => 'secret',
            'confirmation_code' => md5(uniqid(mt_rand(), true)),
            'confirmed'         => true,
        ]);

        User::create([
            'first_name'        => 'Backend',
            'last_name'         => 'User',
            'email'             => 'executive@executive.com',
            'password'          => 'secret',
            'confirmation_code' => md5(uniqid(mt_rand(), true)),
            'confirmed'         => true,
        ]);

        User::create([
            'first_name'        => 'Default',
            'last_name'         => 'User',
            'email'             => 'user@user.com',
            'password'          => 'secret',
            'confirmation_code' => md5(uniqid(mt_rand(), true)),
            'confirmed'         => true,
        ]);

        User::create([
            'first_name'        => 'Leif',
            'last_name'         => 'Roger',
            'email'             => 'leif@roger.no',
            'password'          => 'secret',
            'confirmation_code' => md5(uniqid(mt_rand(), true)),
            'confirmed'         => true,
        ]);

        User::create([
            'first_name'        => 'Nils Gunnar',
            'last_name'         => 'Strømnes',
            'email'             => 'user123@user.com',
            'password'          => 'secret',
            'confirmation_code' => md5(uniqid(mt_rand(), true)),
            'confirmed'         => true,
        ]);



        $faker = Faker::create();
        foreach (range(1, 35) as $index) {

            User::create([
                'first_name'        => $faker->firstName,
                'last_name'         => $faker->lastName,
                'email'             => $faker->email,
                'password'          => 'secret',
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'confirmed'         => true,
            ]);

        }

        $this->enableForeignKeys();
    }
}
