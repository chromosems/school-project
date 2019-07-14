<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'name' => 'CCTV Camera',
                'bio' => 'wew are extra ordinary, lets try our ability today and you see',
            ],

            [
                'name' => 'Access Control',
                'bio' => 'We are great let us share with you our experience at this security world,'
            ],
            [
                'name' => 'Fire Alarm',
                'bio' => 'very high potensial we gat here',
            ],


        ];

        foreach ($services as $service) {
            \App\Service::create($service);
        }

    }
}
