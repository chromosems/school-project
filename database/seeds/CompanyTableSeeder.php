<?php

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            [
                'name' => 'Wallah Technical Systems',
                'bio' => 'wew are extra ordinary, lets try our ability today and you see',
            ],
            [
                'name' => 'Ensibuuko',
                'bio' => 'Lalalalalala'
            ],
            [
                'name' => 'Kibs Systems Limited',
                'bio' => 'very high potential we gat here'
            ]
        ];

        foreach ($companies as $company) {
            Company::create($company);
        }
    }
}
