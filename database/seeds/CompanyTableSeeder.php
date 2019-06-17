<?php

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
        //


        $companies = [
            [
                'name' => 'walaw technical systems',
                'bio' => 'wew are extra ordinary, lets try our ability today and you see',
            ],

            [
                'name' => 'Ensibuuko',
                'bio' => 'Lalalalalala'
            ],
            [
                'name' => 'kibs systems limited',
                'bio' => 'very high potensial we gat here'
            ]

        ];

        foreach ($companies as $company) {
            \App\Company::create($company);
        }
    }
}

