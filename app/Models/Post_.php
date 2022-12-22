<?php

namespace App\Models;

class Post_
{
    private static $blog_posts = [
        [
            "title" => "First Post",
            "slug" => "first-post",
            "body" => "Lorem ipsum dolor sit amet"
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "body" => "Lorem ipsum dolor sit amet second"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
