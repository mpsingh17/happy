<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\User;
use App\Post;
use App\Like;
use App\Comment;
use App\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        //deleting data from all tables.
        Role::truncate();
        Permission::truncate();
        Tag::truncate();
        User::truncate();
        Post::truncate();
        Comment::truncate();
        
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(CreateAdminSeeder::class);

        $userQuantity    = 10;
        $postQuantity    = 20;
        $commentQuantity = 30;

        factory(User::class, $userQuantity)->create();
        factory(Post::class, $postQuantity)->create();
        factory(Comment::class, $commentQuantity)->create();

    }
}
