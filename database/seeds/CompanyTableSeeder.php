<?php

use App\Company;
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
                'name' => 'wallah technical systems',
                'bio' => 'wew are extra ordinary, lets try our ability today and you see',
            ],

            [
                'name' => 'Ensibuuko',
                'bio' => 'Lalalalalala'
            ],
            [
                'name' => 'kibs systems limited',
                'bio' => 'very high potential we gat here'
            ]

        ];

        foreach ($companies as $company) {
            Company::create($company);
        }
    }
}
