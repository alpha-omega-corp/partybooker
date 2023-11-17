<?php

namespace App\Services;

use App\Interfaces\ILocaleService;
use GuzzleHttp\Client;
use Spatie\Geocoder\Geocoder;

class LocaleService implements ILocaleService
{
    private Geocoder $geocoder;

    public function __construct()
    {
        $client = new Client();

        $geocoder = new Geocoder($client);
        $geocoder->setApiKey(config('geocoder.key'));
        $geocoder->setCountry(config('geocoder.country', 'US'));
        $this->geocoder = $geocoder;
    }

    public function addressValues(string $address): array
    {
        $items = [];
        collect($this->geocoder->getCoordinatesForAddress($address)['address_components'])
            ->each(function ($el) use (&$items) {
                $items[$el->types[0]] = $el->short_name;
            })->toArray();

        return $items;
    }
}
