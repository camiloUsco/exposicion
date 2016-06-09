<?php
    $mysongs = simplexml_load_file('songs.xml');
    echo "Exposición Heroku - Juan Camilo - Canciones";
    echo "<ul id='songlist'>";
    foreach ($mysongs as $songinfo):
        $title=$songinfo->title;
        $artist=$songinfo->artist;
        $date=$songinfo['dateplayed'];
        echo "<li><div class='title'>".$title."</div><div class='artist'>by ".$artist."</div><time>".$date."</time></li>";
    endforeach;
    echo "</ul>";
?>