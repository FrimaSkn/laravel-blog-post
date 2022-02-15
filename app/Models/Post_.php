<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts =[
        [
            "title" => "Judul 1",
            "slug" => "judul-1",
            "body" => "<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit autem inventore officia ullam, voluptate tempore aliquid nostrum reprehenderit labore voluptatibus voluptates nobis repellat molestiae consequuntur! Voluptate animi corrupti nam? Deserunt dolorem ex temporibus nihil modi expedita, quasi obcaecati aperiam? Voluptate, voluptatum maxime! Assumenda nostrum debitis totam quia vero est esse odio, amet deserunt dignissimos laborum vel non aut.</p><p> Iusto, quos dicta ipsam laudantium facilis, perspiciatis adipisci vitae sit quaerat quae dolores. Eos expedita consequatur ratione vero odit. Aspernatur doloremque eos ut dicta. Unde in aliquid quasi quam rerum blanditiis, qui a optio ea ipsam itaque quisquam dignissimos, nesciunt deserunt? Ab.</p>"
        ],
        [
            "title" => "Judul 2",
            "slug" => "judul-2",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit autem inventore officia ullam, voluptate tempore aliquid nostrum reprehenderit labore voluptatibus voluptates nobis repellat molestiae consequuntur! Voluptate animi corrupti nam? Deserunt dolorem ex temporibus nihil modi expedita, quasi obcaecati aperiam? Voluptate, voluptatum maxime! Assumenda nostrum debitis totam quia vero est esse odio, amet deserunt dignissimos laborum vel non aut. Iusto, quos dicta ipsam laudantium facilis, perspiciatis adipisci vitae sit quaerat quae dolores. Eos expedita consequatur ratione vero odit. Aspernatur doloremque eos ut dicta. Unde in aliquid quasi quam rerum blanditiis, qui a optio ea ipsam itaque quisquam dignissimos, nesciunt deserunt? Ab."
        ]
    ];
    
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post =[];
        // foreach ($posts as $p) {
        //     if ($posts["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }

    // Post::create([
    //     'title' => 'Judul 3',
    //     'category_id' => 3,
    //     'slug' => 'judul-3',
    //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit autem inventore officia ullam, voluptate tempore aliquid nostrum reprehenderit labore voluptatibus voluptates nobis repellat molestiae consequuntur! Voluptate animi corrupti nam? Deserunt dolorem ex temporibus nihil modi expedita,',
    //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit autem inventore officia ullam, voluptate tempore aliquid nostrum reprehenderit labore voluptatibus voluptates nobis repellat molestiae consequuntur! Voluptate animi corrupti nam? Deserunt dolorem ex temporibus nihil modi expedita, quasi obcaecati aperiam? Voluptate, voluptatum maxime! Assumenda nostrum debitis totam quia vero est esse odio, amet deserunt dignissimos laborum vel non aut.</p><p> Iusto, quos dicta ipsam laudantium facilis, perspiciatis adipisci vitae sit quaerat quae dolores. Eos expedita consequatur ratione vero odit. Aspernatur doloremque eos ut dicta. Unde in aliquid quasi quam rerum blanditiis, qui a optio ea ipsam itaque quisquam dignissimos, nesciunt deserunt? Ab.</p>'
    // ]);
    // Category::create([
    //     'name' => 'Programming',
    //     'slug' => 'programming'
    // ])
}
