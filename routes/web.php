<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Mujahid",
        "email" => "muhammadmujahid14@gmail.com",
        "image" => "img/mamat.png"
    ]);
});

Route::get('/posts', function () {
    $blog_posts = [
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
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//single post page
Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
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
    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
