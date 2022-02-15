<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        

        User::create([
            'name' => 'Frima Skn',
            'username' => 'fskn',
            'email' => 'frima@gmail.com',
            'password' => bcrypt('1234')
        ]);

        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'Judul 1',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-1',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit autem inventore officia ullam, voluptate tempore aliquid nostrum reprehenderit labore voluptatibus voluptates nobis repellat molestiae consequuntur! Voluptate animi corrupti nam? Deserunt dolorem ex temporibus nihil modi expedita,',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit autem inventore officia ullam, voluptate tempore aliquid nostrum reprehenderit labore voluptatibus voluptates nobis repellat molestiae consequuntur! Voluptate animi corrupti nam? Deserunt dolorem ex temporibus nihil modi expedita, quasi obcaecati aperiam? Voluptate, voluptatum maxime! Assumenda nostrum debitis totam quia vero est esse odio, amet deserunt dignissimos laborum vel non aut.</p><p> Iusto, quos dicta ipsam laudantium facilis, perspiciatis adipisci vitae sit quaerat quae dolores. Eos expedita consequatur ratione vero odit. Aspernatur doloremque eos ut dicta. Unde in aliquid quasi quam rerum blanditiis, qui a optio ea ipsam itaque quisquam dignissimos, nesciunt deserunt? Ab.</p>'
        //  ]);

        // Post::create([
        //     'title' => 'Judul 2',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-2',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit autem inventore officia ullam, voluptate tempore aliquid nostrum reprehenderit labore voluptatibus voluptates nobis repellat molestiae consequuntur! Voluptate animi corrupti nam? Deserunt dolorem ex temporibus nihil modi expedita,',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit autem inventore officia ullam, voluptate tempore aliquid nostrum reprehenderit labore voluptatibus voluptates nobis repellat molestiae consequuntur! Voluptate animi corrupti nam? Deserunt dolorem ex temporibus nihil modi expedita, quasi obcaecati aperiam? Voluptate, voluptatum maxime! Assumenda nostrum debitis totam quia vero est esse odio, amet deserunt dignissimos laborum vel non aut.</p><p> Iusto, quos dicta ipsam laudantium facilis, perspiciatis adipisci vitae sit quaerat quae dolores. Eos expedita consequatur ratione vero odit. Aspernatur doloremque eos ut dicta. Unde in aliquid quasi quam rerum blanditiis, qui a optio ea ipsam itaque quisquam dignissimos, nesciunt deserunt? Ab.</p>'
        //  ]);
        // Post::create([
        //     'title' => 'Judul 3',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-3',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit autem inventore officia ullam, voluptate tempore aliquid nostrum reprehenderit labore voluptatibus voluptates nobis repellat molestiae consequuntur! Voluptate animi corrupti nam? Deserunt dolorem ex temporibus nihil modi expedita,',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit autem inventore officia ullam, voluptate tempore aliquid nostrum reprehenderit labore voluptatibus voluptates nobis repellat molestiae consequuntur! Voluptate animi corrupti nam? Deserunt dolorem ex temporibus nihil modi expedita, quasi obcaecati aperiam? Voluptate, voluptatum maxime! Assumenda nostrum debitis totam quia vero est esse odio, amet deserunt dignissimos laborum vel non aut.</p><p> Iusto, quos dicta ipsam laudantium facilis, perspiciatis adipisci vitae sit quaerat quae dolores. Eos expedita consequatur ratione vero odit. Aspernatur doloremque eos ut dicta. Unde in aliquid quasi quam rerum blanditiis, qui a optio ea ipsam itaque quisquam dignissimos, nesciunt deserunt? Ab.</p>'
        //  ]);

        Post::factory(20)->create();
    }
}
