<?php

namespace Src\GoogleMapApi;

class GoogleMapApiProxy
{
    private GoogleMapApiInterface $googleMapApi;

    /**
     * @param GoogleMapApiInterface $googleMapApi
     */
    public function __construct(GoogleMapApiInterface $googleMapApi)
    {
        $this->googleMapApi = $googleMapApi;
    }

    public function findPlaceByLatLng(string $lat, string $lan)
    {
        if (env('APP_ENV' == 'production')){
            return $this->googleMapApi->findPlaceByLatLng($lat, $lan);
        }

        return null;
    }
}
