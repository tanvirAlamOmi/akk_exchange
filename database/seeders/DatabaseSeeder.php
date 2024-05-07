<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Settings\Menu;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $passSystem = 'Aa@123456';
        $userSystem = User::create([
            'name' => 'System Admin',
            'email' => 'system.admin@yopmail.com',
            'mobile_no' => '01816389710',
            'type' => 'system',
            'weight' => 99.99,
            'status' => true,
            'password' => bcrypt($passSystem),
        ]);

        $passAdmin = 'aA@123456';
        $userAdmin = User::create([
            'name' => 'Admin',
            'email' => 'admin@yopmail.com',
            'mobile_no' => '01789456123',
            'type' => 'client',
            'weight' => 50,
            'status' => true,
            'password' => bcrypt($passAdmin),
        ]);

        $seedMenus = getSeedMenus();
        foreach ($seedMenus as $key => $data) {
            $menu = Menu::create([
                'parent_id' => $data['parent_id'],
                'name' => $data['name'],
                'slug' => $data['slug'],
                'position' => $data['position'],
                'type' => $data['type'],
                'link_url' => $data['link_url'],
                'name' => $data['name'],
                'display_options' => $data['display_options'],
                'status' => true,
            ]);
        }
    }
}
