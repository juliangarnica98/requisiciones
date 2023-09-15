<?php

namespace Database\Seeders;

use App\Models\Level_satisfaction;
use App\Models\Sex;
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
        $this->call(
            [
                AreaFactorySeeder::class,
                ActivationChargeSeeder::class,
                CategorySeeder::class,
                CenterDistributionSeeder::class,
                ChargeSeeder::class,
                CitySeeder::class,
                ManagementSeeder::class,
                RegionalSeeder::class,
                SexSeeder::class,
                TypeActivationSeeder::class,
                RolSeeder::class,
                UserSeeder::class,
                AreaManagementSeeder::class,
                LevelSatisfactionSeeder::class,
                QuestionSatisfactionSeeder::class,
                RetirementCitySeeder::class,
                RetirementPositionSeeder::class,
            ]
        );
       
    }
}
