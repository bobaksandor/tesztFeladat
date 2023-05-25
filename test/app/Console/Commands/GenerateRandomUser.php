<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class GenerateRandomUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a user with random data';

    public function handle()
    {
        $faker = Faker::create();
        $name = $faker->name;
        $email = $faker->unique()->safeEmail;
        $pwd = $faker->password;

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($pwd),
        ]);

        $this->info('User created!');
        $this->info('Name: ' . $name);
        $this->info('Email: ' . $email);
        $this->info('Password: ' . $pwd);
    }
}