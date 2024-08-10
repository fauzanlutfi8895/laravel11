<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Fauzan Luthfi', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Fauzan Luthfi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit vitae dignissimos, error iure molestiae veritatis temporibus quae aspernatur optio quam rem nisi in, obcaecati quasi maiores nesciunt explicabo quia? Quia!',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Fauzan Luthfi',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur ipsum, deserunt, molestias vel alias repellat sapiente at aliquid, illo doloribus a unde eum voluptatem asperiores. Laboriosam recusandae quibusdam at repudiandae!',
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Fauzan Luthfi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit vitae dignissimos, error iure molestiae veritatis temporibus quae aspernatur optio quam rem nisi in, obcaecati quasi maiores nesciunt explicabo quia? Quia!',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Fauzan Luthfi',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur ipsum, deserunt, molestias vel alias repellat sapiente at aliquid, illo doloribus a unde eum voluptatem asperiores. Laboriosam recusandae quibusdam at repudiandae!',
        ]
    ];

    $post = Arr::first($posts, function($post) use($slug){
        return $post['slug'] == $slug;
    });

    // dd($post);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
