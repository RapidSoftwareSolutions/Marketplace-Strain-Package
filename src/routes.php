<?php
$routes = [
    'metadata',
    'getListAllEffects',
    'getListAllFlavors',
    'getAllStrains',
    'getStrainsByName',
    'getStrainsByRace',
    'getStrainsByEffect',
    'getStrainsByFlavor',
    'getEffectsByStrainId',
    'getFlavorsByStrainId'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

