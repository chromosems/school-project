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
                'location' => 'sonde',
                'contact' => '070067689',
                'bio' => 'Having a company bio or company overview is important to give 
                a brief summary of your business to your audiences, such as media, customers, analysts and investors. 
                It should be functional and updated over time – for example, 
                when you gain major customers or achieve a target annual revenue.',
                'offer' => 'electronic sales,brokers',
            ],
            [
                'name' => 'Ensibuuko  Technologies limited',
                'location' => 'Uganda',
                'contact' => '078654643',
                'bio' => 'Having a company bio or company overview is important to give 
                a brief summary of your business to your audiences, such as media, customers, analysts and investors.
                It should be functional and updated over time – for example, when you gain major customers or achieve a target annual revenue.',
                'offer' => 'marketing team'
            ],
            [
                'name' => 'Kibs Systems Limited',
                'location' => 'Ntinda',
                'contact' => '0706355311',
                'bio' => 'Having a company bio or company overview is important to give a brief summary of your business to your audiences,
                 such as media, customers,
                 analysts and investors. It should be functional and updated over time – for example, when you gain major customers or achieve a target annual revenue.',
                 'offer'=> 'electronics & installations'
            ],
            [
                'name' => 'House U-In Systems Limited',
                'location' => 'Kireka',
                'contact' => '078355311',
                'bio' => 'Having a company bio or company overview is important to give a brief summary of your business to your audiences, 
                such as media, customers, analysts and investors.
                 It should be functional and updated over time – for example, when you gain major customers or achieve a target annual revenue.',
                 'offer'=>'software development & updates',
            ],
            [
                'name' => 'Kabus Furniture',
                'location' => 'kawempe Kampala',
                'contact' => '079365726',
                'bio' => 'Having a company bio or company overview is important to give a brief summary of your business to your audiences, 
                such as media, customers, analysts and investors.
                 It should be functional and updated over time – for example, when you gain major customers or achieve a target annual revenue.',
                 'offer'=>'house hold equipments'
            ],
            [
                'name' => 'Delton security Universe',
                'location' => 'kyambogo',
                'contact' => '076546527',
                'bio' => 'Having a company bio or company overview is important to give a brief summary of your business to your audiences,
                 such as media, customers, analysts and investors. 
                It should be functional and updated over time – for example, when you gain major customers or achieve a target annual revenue.',
                'offer'=> 'security officers & security officials'
            ],

        ];

        foreach ($companies as $company) {
            Company::create($company);
        }
    }
}
