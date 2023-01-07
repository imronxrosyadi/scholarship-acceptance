<?php

namespace Database\Seeders;

use App\Models\Alternative;
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
        $this->call([
            ValueWeightSeeder::class,
            IndeksRandomConsistencySeeder::class,
            AlternativeSeeder::class,
            CriteriaSeeder::class
        ]);
        // User::factory(3)->create();

        // Category::create([
        //     'name' => 'Programming',
        //     'slug' => 'programming'
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Category::create([
        //     'name' => 'Data Science',
        //     'slug' => 'data-science'
        // ]);

        // Post::factory(20)->create();

        // User::create([
        //     'name' => 'Imron Rosyadi',
        //     'email' => 'imron@mail.com',
        //     'password' => bcrypt('password')
        // ]);

        // User::create([
        //     'name' => 'Benedict',
        //     'email' => 'benedict@mail.com',
        //     'password' => bcrypt('password')
        // ]);

        // Post::create([
        //     'title' => 'First Post',
        //     'slug' => 'first-post',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ipsa laudantium culpa impedit, et nulla optio facilis fugit quas est earum, magni nemo iste, aliquam saepe qui accusamus. Nulla, ipsa numquam quasi eaque amet adipisci aspernatur.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ipsa laudantium culpa impedit, et nulla optio facilis fugit quas est earum, magni nemo iste, aliquam saepe qui accusamus. Nulla, ipsa numquam quasi eaque amet adipisci aspernatur. Ipsam facilis et nobis necessitatibus quasi vel. Fuga provident veniam libero dicta molestias. At eum soluta maxime harum veritatis mollitia exercitationem vero, consequatur fugiat omnis, possimus voluptatum tempore qui officiis? Beatae quod totam, est necessitatibus, eum quas dignissimos delectus, repudiandae tenetur consequatur corrupti mollitia fuga atque enim itaque inventore placeat doloribus. Cum sunt fugiat maiores ex nihil magnam porro molestias, adipisci quam eum impedit, dolor in explicabo reprehenderit deleniti eos nemo ipsa. Maxime esse similique vero eius. Dignissimos, blanditiis quaerat. Minus atque aspernatur dolorum.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Second Post',
        //     'slug' => 'second-post',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ipsa laudantium culpa impedit, et nulla optio facilis fugit quas est earum, magni nemo iste, aliquam saepe qui accusamus. Nulla, ipsa numquam quasi eaque amet adipisci aspernatur.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ipsa laudantium culpa impedit, et nulla optio facilis fugit quas est earum, magni nemo iste, aliquam saepe qui accusamus. Nulla, ipsa numquam quasi eaque amet adipisci aspernatur. Ipsam facilis et nobis necessitatibus quasi vel. Fuga provident veniam libero dicta molestias. At eum soluta maxime harum veritatis mollitia exercitationem vero, consequatur fugiat omnis, possimus voluptatum tempore qui officiis? Beatae quod totam, est necessitatibus, eum quas dignissimos delectus, repudiandae tenetur consequatur corrupti mollitia fuga atque enim itaque inventore placeat doloribus. Cum sunt fugiat maiores ex nihil magnam porro molestias, adipisci quam eum impedit, dolor in explicabo reprehenderit deleniti eos nemo ipsa. Maxime esse similique vero eius. Dignissimos, blanditiis quaerat. Minus atque aspernatur dolorum.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Third Post',
        //     'slug' => 'third-post',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ipsa laudantium culpa impedit, et nulla optio facilis fugit quas est earum, magni nemo iste, aliquam saepe qui accusamus. Nulla, ipsa numquam quasi eaque amet adipisci aspernatur.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ipsa laudantium culpa impedit, et nulla optio facilis fugit quas est earum, magni nemo iste, aliquam saepe qui accusamus. Nulla, ipsa numquam quasi eaque amet adipisci aspernatur. Ipsam facilis et nobis necessitatibus quasi vel. Fuga provident veniam libero dicta molestias. At eum soluta maxime harum veritatis mollitia exercitationem vero, consequatur fugiat omnis, possimus voluptatum tempore qui officiis? Beatae quod totam, est necessitatibus, eum quas dignissimos delectus, repudiandae tenetur consequatur corrupti mollitia fuga atque enim itaque inventore placeat doloribus. Cum sunt fugiat maiores ex nihil magnam porro molestias, adipisci quam eum impedit, dolor in explicabo reprehenderit deleniti eos nemo ipsa. Maxime esse similique vero eius. Dignissimos, blanditiis quaerat. Minus atque aspernatur dolorum.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Fourth Post',
        //     'slug' => 'fourth-post',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ipsa laudantium culpa impedit, et nulla optio facilis fugit quas est earum, magni nemo iste, aliquam saepe qui accusamus. Nulla, ipsa numquam quasi eaque amet adipisci aspernatur.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ipsa laudantium culpa impedit, et nulla optio facilis fugit quas est earum, magni nemo iste, aliquam saepe qui accusamus. Nulla, ipsa numquam quasi eaque amet adipisci aspernatur. Ipsam facilis et nobis necessitatibus quasi vel. Fuga provident veniam libero dicta molestias. At eum soluta maxime harum veritatis mollitia exercitationem vero, consequatur fugiat omnis, possimus voluptatum tempore qui officiis? Beatae quod totam, est necessitatibus, eum quas dignissimos delectus, repudiandae tenetur consequatur corrupti mollitia fuga atque enim itaque inventore placeat doloribus. Cum sunt fugiat maiores ex nihil magnam porro molestias, adipisci quam eum impedit, dolor in explicabo reprehenderit deleniti eos nemo ipsa. Maxime esse similique vero eius. Dignissimos, blanditiis quaerat. Minus atque aspernatur dolorum.',
        //     'category_id' => 3,
        //     'user_id' => 2,
        // ]);
    }
}
