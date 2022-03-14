<?php
require __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <div class="ricerca">
    <div class="logo">
        <img src="https://cantabrialabsdifacooper.it/wp-content/uploads/2021/03/png-clipart-spotify-logo-spotify-computer-icons-podcast-music-apps-miscellaneous-angle-1-e1614848134495-300x300.png" alt="">
    </div>
    <div class="select">
        <select v-model="selectedGenre" @change="$emit('selectedGenreEvt', selectedGenre)">
            <option value="">seleziona un genere</option>
            <option v-for="(genre, index) in genresList" :value="genre" :key="index">{{genre}}</option>
        </select>
    </div>
    
</div>

    </header>
    <main>
        <div class="back">
            <div class="container">
                <?php
                    foreach ($database as $content) {
                        echo 'div class="card">';
                            echo "<img src=" . $content['poster'] . ">";
                            echo '<h3>'. $content['title'] . '</h3>';
                            echo '<p>'.($content['author']) . '</p>';
                            echo '<p>'.($content['year']) . '</p>';
                        echo "</div>";    
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>