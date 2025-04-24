<?php

interface Reproducible {
    public function reproducir();
}

class Pelicula implements Reproducible {
    public function reproducir() {
        echo "Reproduciendo película.mp4<br>";
  }
}

class Podcast implements Reproducible {
    public function reproducir() {
        echo "Reproduciendo podcast.mp3<br>";
  }
}

$reproducibles = [new Pelicula(), new Podcast()];

foreach ($reproducibles as $reproducible) {
    $reproducible->reproducir();
}
?>

