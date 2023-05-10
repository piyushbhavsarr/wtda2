<?php
// load the XML file using DOMDocument
$xml = new DOMDocument();
$xml->load('Movie.xml');

// get all the movie elements
$movies = $xml->getElementsByTagName('MovieInfo');

// loop through each movie element and print the movie title and actor name
foreach ($movies as $movie) {
    // get the movie title and actor name elements
    $movieTitle = $movie->getElementsByTagName('MovieTitle')->item(0)->nodeValue;
    $actorName = $movie->getElementsByTagName('ActorName')->item(0)->nodeValue;
    
    // print the movie title and actor name
    echo "Movie Title: " . $movieTitle . "<br>";
    echo "Actor Name: " . $actorName . "<br>";
    echo "<br>";
}
?>
