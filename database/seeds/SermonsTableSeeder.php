<?php

use Illuminate\Database\Seeder;
use GuzzleHttp\Client;
use App\Sermon;

class SermonsTableSeeder extends Seeder
{
    /**
     * Seeds Table with Elevation Sermons through the given API.
     *
     * @return void
     */
    public function run()
    {
        Sermon::truncate();
        $client = new Client();
        $getSermonsUrl = env('ELEVATION_API_BASE_URL') . '/getSermonsList';
        $sermonQuery = $client->get($getSermonsUrl);
        $sermons = json_decode($sermonQuery->getBody(), true);

        foreach($sermons['return'] as $sermon){
            Sermon::create(array(
                'id' => $sermon['youtubeID'],
                'title' => $sermon['title'],
                'description' => $sermon['description']
            ));
        };
    }
}
