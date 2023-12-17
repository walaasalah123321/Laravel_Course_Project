<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class UserLogin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:login';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name=$this->ask("enter youe name");
        $email=$this->ask("enter youe email");

        $password=$this->ask("enter youe pass");
        User::create([
            "name"=>$name,
            "email"=>$email,
            "password"=>Hash::make($password),

        ]);

    }
}
