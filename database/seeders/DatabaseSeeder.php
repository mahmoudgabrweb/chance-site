<?php

namespace Database\Seeders;

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
            DataTypesTableSeeder::class,
            DataRowsTableSeeder::class,
            MenusTableSeeder::class,
            MenuItemsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionsTableSeeder::class,
            PermissionRoleTableSeeder::class,
            SettingsTableSeeder::class,
            UsersTableSeeder::class,
            PermissionRoleTableSeeder::class,
        ]);

        $this->call([
            SliderPermissionSeeder::class,
            ServicePermissionSeeder::class,
            ArticlePermissionSeeder::class,
            EventPermissionSeeder::class,
        ]);
    }
}
