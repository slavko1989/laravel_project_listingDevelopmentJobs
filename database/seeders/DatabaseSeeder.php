<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Listing;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
       // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name'=>'John Doe',
            'email'=>'j@gmail.com'

        ]);
        Listing::factory(6)->create([
            'user_id'=>$user->id
        ]);

       //  \App\Models\User::factory()->create([
       //      'name' => 'Test User',
      //      'email' => 'test@example.com',
      //   ]);

      /*Listing::create([

         'title'=>'Laravel Seinor Developer',
         'tags'=>'Laravel,javascript',
         'company'=>'Microsoft',
         'location'=>'SAD',
         'email'=>'developer@gmail.com',
         'website'=>'www.developer.com',
         'descripton'=>'Laravel Seinor Developer,
         Laravel Junior Developer, sql database developer, find us'

      ]);
       Listing::create([

         'title'=>'Full stack Developer',
         'tags'=>'Laravel,javascript,sql,oop',
         'company'=>'Microsoft',
         'location'=>'SAD',
         'email'=>'developer@gmail.com',
         'website'=>'www.developer.com',
         'descripton'=>'Laravel Seinor Developer,
         Laravel Junior Developer, sql database developer, find us'

      ]);*/
    }
}
