<?php

// Load the "book.xml" file into a SimpleXML object
$xml = simplexml_load_file('book.xml');

// Loop through each book element and display its attributes and elements
foreach ($xml->book as $book) {
    echo "Title: " . $book->title . "<br/>";
    echo "Author: " . $book->author . "<br/>";
    echo "Price: " . $book->price . "<br/>";
    echo "<br/>";
}

?>
