<?php

class Song {

    function __construct($song) {
        echo "Song $song is created \n";
    }
}
$song = new Song("Bad romance");