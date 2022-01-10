<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Company::factory(5000)->create()
            ->each(function ($company) {
                $user = \App\Models\User::factory(1)->create(['company_id' => $company->id]);
                \App\Models\Article::factory(random_int(1, 10))->create(['user_id' => $user[0]->id]);
                \App\Models\Comment::factory(10)->create();
                \App\Models\Email::factory(10)->create();
            });
    }
}
