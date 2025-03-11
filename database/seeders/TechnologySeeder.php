<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            [
                'name' => 'PHP',
                'icon' => 'bx bxl-php',
            ],
            [
                'name' => 'Javascript',
                'icon' => 'bx bxl-javascript',
            ],
            [
                'name' => 'Python',
                'icon' => 'bx bxl-python',
            ],
            [
                'name' => 'React',
                'icon' => 'bx bxl-react',
            ],
            [
                'name' => 'Postgres',
                'icon' => 'bx bxl-postgresql',
            ],
            [
                'name' => 'HTML5',
                'icon' => 'bx bxl-html5',
            ],
            [
                'name' => 'CSS3',
                'icon' => 'bx bxl-css3',
            ],
            [
                'name' => 'Bootstrap',
                'icon' => 'bx bxl-bootstrap',
            ],
            [
                'name' => 'Tailwind',
                'icon' => 'bx bxl-tailwind-css',
            ],
            [
                'name' => 'Flutter',
                'icon' => 'bx bxl-flutter',
            ],
            [
                'name' => 'Android',
                'icon' => 'bx bxl-android',
            ],
            [
                'name' => 'IOS',
                'icon' => 'bx bxl-apple',
            ],
            
        ];
        foreach ($technologies as $technology) {
            Technology::create($technology);
        }
    }
}
