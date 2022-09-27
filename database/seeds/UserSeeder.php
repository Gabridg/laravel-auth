<?php


use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_user = new User();
        $new_user->name = 'gabrieledg';
        $new_user->email = 'gabri99.del@gmial.ocm';
        $new_user->password = bcrypt("password");

        $new_user->save();
    }
}
