<?php

namespace Database\Seeders;

use App\Models\Components\Type as ComponentType;
use App\Services\Component\ComponentTypeEnum;
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
        $component_types = ComponentTypeEnum::cases();
        foreach ($component_types as $component_type) {
            ComponentType::create(['name' => $component_type->value])->save();
        }

    }
}
