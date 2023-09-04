<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $posts = [
        [
            "title" => "First Post Title",
            "slug" => "first-post-title",
            "author" => "Muhammad Mujahid",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore architecto atque ducimus sunt doloremque minima eligendi nemo repellendus illo maxime tempora similique aliquid tenetur, ea harum voluptatibus quibusdam repudiandae laboriosam expedita, in eveniet temporibus. Nam omnis, minus odit laudantium temporibus ea, dicta nobis soluta quo in tenetur rem maiores praesentium ut recusandae fugiat explicabo est veritatis facere vel. Voluptate esse cum pariatur possimus, corporis adipisci ea dignissimos enim consequuntur laborum eligendi! Sunt dolore dolor laboriosam distinctio dicta vitae quam accusantium."
        ],
        [
            "title" => "Second Post Title",
            "slug" => "second-post-title",
            "author" => "Mamat",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos quia blanditiis voluptatum eaque possimus, facilis officiis voluptatibus quis ipsa molestiae, incidunt, tenetur deserunt. Nemo cupiditate, corporis corrupti minus maiores sunt nostrum accusantium rerum mollitia, veniam dignissimos quia esse reiciendis vitae ullam veritatis soluta iusto officiis labore dolorem dolores sed voluptatibus et temporibus. Quibusdam vitae non aliquid soluta nostrum laudantium itaque illum sit hic. Blanditiis veritatis asperiores ratione ab qui ullam architecto accusamus, ipsa, iure corrupti mollitia alias earum omnis. Aperiam, molestiae porro tempore recusandae ratione laudantium excepturi dolorem necessitatibus animi doloremque, quos pariatur, ipsum iure explicabo. Commodi quis obcaecati incidunt."
        ]
    ];
    return view('blog', [
        'title' => 'Home',
        'posts' => $posts
    ]);
});
Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            "title" => "First Post Title",
            "slug" => "first-post-title",
            "author" => "Muhammad Mujahid",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore architecto atque ducimus sunt doloremque minima eligendi nemo repellendus illo maxime tempora similique aliquid tenetur, ea harum voluptatibus quibusdam repudiandae laboriosam expedita, in eveniet temporibus. Nam omnis, minus odit laudantium temporibus ea, dicta nobis soluta quo in tenetur rem maiores praesentium ut recusandae fugiat explicabo est veritatis facere vel. Voluptate esse cum pariatur possimus, corporis adipisci ea dignissimos enim consequuntur laborum eligendi! Sunt dolore dolor laboriosam distinctio dicta vitae quam accusantium."
        ],
        [
            "title" => "Second Post Title",
            "slug" => "second-post-title",
            "author" => "Mamat",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos quia blanditiis voluptatum eaque possimus, facilis officiis voluptatibus quis ipsa molestiae, incidunt, tenetur deserunt. Nemo cupiditate, corporis corrupti minus maiores sunt nostrum accusantium rerum mollitia, veniam dignissimos quia esse reiciendis vitae ullam veritatis soluta iusto officiis labore dolorem dolores sed voluptatibus et temporibus. Quibusdam vitae non aliquid soluta nostrum laudantium itaque illum sit hic. Blanditiis veritatis asperiores ratione ab qui ullam architecto accusamus, ipsa, iure corrupti mollitia alias earum omnis. Aperiam, molestiae porro tempore recusandae ratione laudantium excepturi dolorem necessitatibus animi doloremque, quos pariatur, ipsum iure explicabo. Commodi quis obcaecati incidunt."
        ]
    ];
    $singlePost = [];
    foreach($posts as $post){
        if ($post["slug"] === $slug) {
            $singlePost = $post;
        }
    }
    return view('post', [
        'title' => 'Single Post',
        'post' => $singlePost
    ]);
});
