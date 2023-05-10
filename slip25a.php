Here is a PHP script that creates a cricket.xml file with the specified structure and adds multiple elements for the category country="India":

<?php
$doc = new DOMDocument();
$doc->formatOutput = true;

$root = $doc->createElement('CricketTeam');
$doc->appendChild($root);

$team = $doc->createElement('Team');
$team->setAttribute('country', 'Australia');
$root->appendChild($team);

$player = $doc->createElement('player', '____');
$team->appendChild($player);

$runs = $doc->createElement('runs', '______');
$team->appendChild($runs);

$wicket = $doc->createElement('wicket', '____');
$team->appendChild($wicket);

$doc->save('cricket.xml');

// Adding multiple elements for category country="India"
$doc = new DOMDocument();
$doc->load('cricket.xml');

$root = $doc->getElementsByTagName('CricketTeam')->item(0);

$team = $doc->createElement('Team');
$team->setAttribute('country', 'India');
$root->appendChild($team);

$player = $doc->createElement('player', '____');
$team->appendChild($player);

$runs = $doc->createElement('runs', '______');
$team->appendChild($runs);

$wicket = $doc->createElement('wicket', '____');
$team->appendChild($wicket);

$doc->save('cricket.xml');
?>