<?php

class Facade{
    public function findApartments($place, $divId){
        $apfinder = new ApartmentFinder();
        $geolocator = new GeoLocator();
        $gmap = new GoogleMap();

        $aprtments = $apfinder->locateApartments($place);

        foreach ($aprtments as $key => $aprtment) {
            $locations[] = $geolocator->getLocation($aprtment);
        }
        
        $gmap->initialize();
        $gmap->drowLocation($place);
        $gmap->dispatch($divId);
    }
}