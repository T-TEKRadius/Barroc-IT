<?php

use Illuminate\Database\Seeder;
use App\Client;
use App\Sale;
class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($x = 0; $x < 30; $x++){
            $client = new Client();
            $sale = new Sale();

            $company_name = $faker->name;

            $client->company_name = $company_name;
            $client->address_1 = $faker->address;
            $client->zipcode_1 = $faker->postcode;
            $client->residence_1 = $faker->city;
            $client->contact_person = $faker->name;
            $client->initials = str_random(1);
            $client->phone_number = $faker->phoneNumber;
            $client->fax_number = $faker->phoneNumber;
            $client->email = $faker->email;
            $client->credit_worthy = rand(0,1);
            $client->discount_percentage = rand(0, 100);
            $client->prospect = rand(0,1);
            $client->save();

            $id = $client->select('id')->where('company_name', $company_name)->get();
            $sale->client_id = $id[0]['id'];
            $sale->offer_number = rand(0, 5);
            $sale->offer_status = rand(0, 3);
            $sale->date_of_action = $faker->dateTime;
            $sale->next_action = $faker->dateTime;
            $sale->last_contact_date = $faker->dateTime;
            $sale->save();
        }
    }
}
