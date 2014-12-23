<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BreweriesTableSeeder extends Seeder {

	public function run()
	{
		$bdb = new Pintlabs_Service_Brewerydb($_ENV['BREWERYDB_API_KEY']);
        $bdb->setFormat('json'); // if you want to get php back.  'xml' and 'json' are also valid options.
        $params = ['locality' => 'San Antonio'];
        // The first argument to request() is the endpoint you want to call
        // 'brewery/BrvKTz', 'beers', etc.
        // The third parameter is the HTTP method to use (GET, PUT, POST, or DELETE)
        $results = $bdb->request('locations', $params, 'GET'); // where $params is a keyed array of parameters to send with the API call.

        foreach($results['data'] as $key =>$result) {

            if (
                $result['id'] != 'vnyGCY' &&
                $result['id'] != '0ZIlVA' &&
                $result['id'] != 'ct1Zeb' &&
                $result['id'] != 'p0DdoE' &&
                $result['id'] != 'CZ6MCK' &&
                $result['id'] != 'jhFynd' &&
                $result['id'] != '7NXAeC' &&
                $result['id'] != 'V3oMUl' &&
                $result['id'] != 'Y7h4Lz' &&
                $result['id'] != 'ARPsVQ'
            ) {
                $brewery = new Brewery();
                $brewery->name=$result['brewery']['name'];
                $brewery->streetAddress=$result['streetAddress'];
                $brewery->locality=$result['locality'];
                $brewery->region=$result['region'];
                $brewery->postalCode=$result['postalCode'];

                    if (isset($result['yearOpened'])){
                        $brewery->yearOpened=$result['yearOpened'];
                    }else{
                        $brewery->yearOpened="not provided";
                    }
                $brewery->story=$result['brewery']['description'];
                $brewery->latitude=$result['latitude'];
                $brewery->longitude=$result['longitude'];
                $brewery->website=$result['brewery']['website'];
                $brewery->image=$result['brewery']['images']['medium'];
                $brewery->save();
            }
        }
    }
}
