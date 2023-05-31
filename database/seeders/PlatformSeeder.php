<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Platform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Platform::truncate();
        Schema::enableForeignKeyConstraints();
        for($i = 0; $i < 20; $i++) {

            $new_platform = new Platform();
            $new_platform->name = fake()->name;
            $new_platform->slug = Str::slug($new_platform->name);
            $new_platform->save();

        }
    }
}
