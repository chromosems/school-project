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
                'description' => ' closed-circuit television camera can produce images or 
                recordings for surveillance or other private purposes. Cameras can be either video 
                cameras, or digital stills cameras. Walter Bruch was the inventor of the CCTV camera.
                 The main purpose of a CCTV camera is to capture light and convert it into a video signal',
            ],

            [
                'name' => 'Access Control',
                'description' => 'Access control is a way of limiting access to 
                a system or to physical or virtual resources. In computing, access control
                 is a process by which users are granted access and certain privileges to systems, 
                 resources or information.,'
            ],
            
            [
                'name' => 'Fire Alarm',
                'description' => 'A fire alarm system has a number o
                f devices working together to detect and warn people through 
                visual and audio appliances when smoke, fire, carbon',
            ],
            [
                'name' => 'Biometric',
                'description' => 'Biometrics is the technical term for
                 body measurements and calculations. It refers to metrics related to human characteristics. Biometrics authentication
                 (or realistic authentication) is used in computer science as a form of identification and access control.',
            ],
            [
                'name' => 'Intercom',
                'description' => 'We make customer messaging apps for sales, marketing, 
                and support, connected on one platform. Our mission is to make business personal again',
            ],
            [
                'name' => 'Plumbers',
                'description' => 'A plumber is tradesperson who specializes in 
                installing and maintaining systems used for potable (drinking) water, sewage and drainage in plumbing systems.',
            ],
            [
                'name' => 'House Renting',
                'description' => 'A property from which the owner receives payment from the occupant(s),
                 known as tenants, in return for occupying or using the property. Rental properties may be either residential or commercial.
                 The owner of rental property may be allowed to take certain tax deductions such as mortgage interest and depreciation',
            ],
                
        ];

        foreach ($services as $service) {
            $service = new Service($service);
            $service->slug = str_slug($service->name);
            $service->save();
        }
    }
}
