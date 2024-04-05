<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Posts 
{
    private static $blog = [
        [
            "title" => "48 hukum kekuasaan",
            "author" => "haikal",
            "slug" => "post-pertama",
            "text" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sunt dolorum est, corrupti, voluptas suscipit dicta, quos rerum mollitia velit vitae dolores. Dolorem voluptates officiis, voluptas officia adipisci, dolore provident vero fuga deserunt distinctio esse? Iusto mollitia adipisci reprehenderit soluta itaque voluptates praesentium magni tenetur eum architecto officiis, at quam numquam voluptas blanditiis doloribus nobis est fugiat quos? Quod, dicta!"
        ],
        [
            "title" => "Psychology of money",
            "slug" => "post-kedua",
            "author" => "Hafiz",
            "text" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sunt dolorum est, corrupti, voluptas suscipit dicta, quos rerum mollitia velit vitae dolores."
        ]
    ];

    public static function all() {
        return collect(self::$blog);
    }

    public static function find($slug) {
        $post = static::all();
        return $post->firstWhere('slug', $slug);  
    }
}
