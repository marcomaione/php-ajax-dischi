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

    </header>
    <main>
        <div class="container">
            <?php
                require __DIR__ . '/database.php';

                foreach ($database as $cards => $card) {
    
                    foreach ($card as $content) {
                        echo '<h1 class="domanda">'. $content['title'] . '</h1>';
                        echo '<p class="risposta">'. nl2br($content['year']) . '</p>';
                        echo '<p class="risposta">'. nl2br($content['author']) . '</p>';
                        echo '<img>'. ($content['poster']) . '</img>';
                        
                    }
                } 
            ?>
        </div>
    </main>
</body>
</html>