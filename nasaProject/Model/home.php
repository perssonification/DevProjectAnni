<?php

$apiKey = "QdkhWOuytwh0PsHPMLXI2oeYye1HAqAFbyIOOQqt";
$url = "https://api.nasa.gov/planetary/apod?api_key=" . $apiKey;

$response = file_get_contents($url);
$data = json_decode($response, true);

if (isset($data['error'])) {
    echo "<p>Error: " . $data['error']['message'] . "</p>";
    exit;
}

$title = $data['title'] ?? 'NASA Image';
$explanation = $data['explanation'] ?? 'No Information available.';
$imageUrl = $data['url'] ?? 'assets/images/earth2.avif';
$mediaType = $data['media_type'] ?? 'image';

require '../View/index.php';
?>

