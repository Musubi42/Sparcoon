<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        \App\Models\Example::factory(60)->create();

        //  Création des permissions Catégories par défault
        \Spatie\Permission\Models\Permission::factory()->create([
            'name' => 'categorie.create',
        ]);
        \Spatie\Permission\Models\Permission::factory()->create([
            'name' => 'categorie.show',
        ]);
        \Spatie\Permission\Models\Permission::factory()->create([
            'name' => 'categorie.update',
        ]);
        \Spatie\Permission\Models\Permission::factory()->create([
            'name' => 'categorie.delete',
        ]);

        //  Création des permissions Images par défault

        \Spatie\Permission\Models\Permission::factory()->create([
            'name' => 'image.create',
        ]);
        \Spatie\Permission\Models\Permission::factory()->create([
            'name' => 'image.show',
        ]);
        \Spatie\Permission\Models\Permission::factory()->create([
            'name' => 'image.update',
        ]);
        \Spatie\Permission\Models\Permission::factory()->create([
            'name' => 'image.delete',
        ]);

        //  Création des permissions Objects par défault

        \Spatie\Permission\Models\Permission::factory()->create([
            'name' => 'object.create',
        ]);
        \Spatie\Permission\Models\Permission::factory()->create([
            'name' => 'object.show',
        ]);
        \Spatie\Permission\Models\Permission::factory()->create([
            'name' => 'object.update',
        ]);
        \Spatie\Permission\Models\Permission::factory()->create([
            'name' => 'object.delete',
        ]);

        // Création des permissions Patrimoine par défault
        \Spatie\Permission\Models\Permission::factory()->create([
            'name' => 'patrimoine.index',
        ]);
        
    }
}
