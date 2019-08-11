<?php

use App\Models\Service;
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
                'description' => 'wew are extra ordinary, lets try our ability today and you see',
            ],

            [
                'name' => 'Access Control',
                'description' => 'We are great let us share with you our experience at this security world,'
            ],
            [
                'name' => 'Fire Alarm',
                'description' => 'very high potensial we gat here',
            ],


        ];

        foreach (SERVICES as $service) {
            Service::create($service);
        }
    }
}
