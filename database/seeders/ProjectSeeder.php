<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name' => 'Cadastral Survey',
            'location' => 'Barekese Ashanti - Ghana',
            'client' => 'Consar Ghana Ltd',
            'image' => '',
        ]);

        Project::create([
            'name' => 'Cadastral & Topographical survey of 400 acres of land at Pakyi No.2.',
            'location' => 'Peki No.2 Ashanti Region',
            'client' => 'Energyone Solar Company, Canada',
            'image' => '',
        ]);

        Project::create([
            'name' => 'Demarcation and boundary survey of 1300 acres of land belonging to Baworo Stool.',
            'location' => 'Baworo',
            'client' => 'Nana Baworo Hene And Elder',
            'image' => '',
        ]);
        Project::create([
            'name' => 'Cadastral & Topographical survey of 233.5 acres of rock concession at Kona.',
            'location' => 'Kona - Ashanti Region',
            'client' => 'Northern Mines And Stone Quarry',
            'image' => '',
        ]);
        Project::create([
            'name' => 'Demarcation of 15 industrial and 160 residential plots and planting pillars along Asokore Mampong and Ayigya boundary',
            'location' => 'Asokore Mampong , Ashanti Region',
            'client' => 'Nana Asokore Mampong Hene',
            'image' => '',
        ]);
        Project::create([
            'name' => 'Demarcation and Survey of 500 acres of land at Kwamo. Approx',
            'location' => 'Kwamo , Ashanti Region',
            'client' => 'Nana Kwamo Hene',
            'image' => '',
        ]);
    }
}
