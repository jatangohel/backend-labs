<!-- Write a PHP script to sort the given array based on Year.

$spiderman_movies = [
    ["name" => "Spider Man", "year" => "2002"],
    ["name" => "Spider Man 2", "year" => "2004"],
    ["name" => "Spider Man 3", "year" => "2007"],
    ["name" => "The Amazing Spider Man", "year" => "2012"],
    ["name" => "The Amazing Spider Man 2", "year" => "2014"],
    ["name" => "Spider Man: Into the Spider-Verse", "year" => "2018"],
    ["name" => "Spider Man Homecoming", "year" => "2017"],
    ["name" => "Spider Man:Far From Home", "year" => "2019"],

]; -->

<?php

 $spiderman_movies = [
     ["name" => "Spider Man", "year" => "2002"],
     ["name" => "Spider Man 2", "year" => "2004"],
     ["name" => "Spider Man 3", "year" => "2007"],
     ["name" => "The Amazing Spider Man", "year" => "2012"],
     ["name" => "The Amazing Spider Man 2", "year" => "2014"],
     ["name" => "Spider Man: Into the Spider-Verse", "year" => "2018"],
     ["name" => "Spider Man Homecoming", "year" => "2017"],
     ["name" => "Spider Man:Far From Home", "year" => "2019"],

 ];
 usort($spiderman_movies, function($a, $b) {
     return $a['year'] <=> $b['year'];
 });
 print_r($spiderman_movies);
 ?>
