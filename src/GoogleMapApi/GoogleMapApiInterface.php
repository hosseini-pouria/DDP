<?php

namespace Src\GoogleMapApi;

interface GoogleMapApiInterface
{
    public function findPlaceByLatLng(string $lat, string $lng);
}
