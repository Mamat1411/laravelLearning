<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
class Post
{
    private static $blog_posts = [
        [
            "title" => "First Post Title",
            "slug" => "first-post-title",
            "author" => "Mamat",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, non ipsum inventore magnam praesentium autem omnis in, alias vitae perferendis saepe quia quisquam eveniet necessitatibus corrupti. Ipsum sit ex, sed repellat expedita voluptatibus quo labore asperiores perspiciatis natus nesciunt quis, assumenda impedit modi nobis. Dignissimos laudantium rerum distinctio laboriosam quaerat voluptatibus nihil perferendis aperiam assumenda earum incidunt vero corrupti, reiciendis tenetur iusto asperiores ipsa velit ex illum possimus omnis repellendus cum repudiandae ad! Vero omnis vitae deserunt quo excepturi illum?"
        ],
        [
            "title" => "Second Post Title",
            "slug" => "second-post-title",
            "author" => "Muhammad",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, non ipsum inventore magnam praesentium autem omnis in, alias vitae perferendis saepe quia quisquam eveniet necessitatibus corrupti. Ipsum sit ex, sed repellat expedita voluptatibus quo labore asperiores perspiciatis natus nesciunt quis, assumenda impedit modi nobis. Dignissimos laudantium rerum distinctio laboriosam quaerat voluptatibus nihil perferendis aperiam assumenda earum incidunt vero corrupti, reiciendis tenetur iusto asperiores ipsa velit ex illum possimus omnis repellendus cum repudiandae ad! Vero omnis vitae deserunt quo excepturi illum?"
        ]
    ];

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }

        return $post;
    }
}
