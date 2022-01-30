<?php

// student details xml data taken as an String
$xml = '<?xml version="1.0" encoding="utf-8"?>
<cars>
    <cars>
        <name>Suzuki</name>
        <Engine>750cc</Engine>
        <price>1000</price>
    </cars>

    <cars>
        <name>Toyota</name>
        <Engine>1200cc</Engine>
        <price>2000</price>
    </cars>
</cars>';

// Load xml data into xml data object
$xmldata = simplexml_load_string($xml);

// Encode this xml data into json
// using json_encoe function
$jsondata = json_encode($xmldata);

// Display json data
print_r($jsondata);

?>
