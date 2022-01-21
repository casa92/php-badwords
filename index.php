<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $phrase = 'Lorem ipsum errore dolor sit amet errore consectetur, adipisicing elit. errore Accusantium accusamus vero, errore maxime, errore nemo recusandae voluptatem repudiandae minima sit illum voluptatibus cum id nulla distinctio? errore errore errore Facilis quis saepe ullam blanditiis iusto?';
    $phrase_length = strlen($phrase);
    $word_to_censore = $_GET['deletethisword'];
    $censored_phrase = str_replace($word_to_censore, '***', $phrase);
    $censored_phrase_lenght = strlen($censored_phrase);
    
    ?>

    <h2>Frase scritta con PHP:</h2>

    <p>
        <?php 
            echo $phrase;
        ?>
    </p>

    <h2>Lunghezza della frase:</h2>

    <div>
        <?php
            echo $phrase_length;
        ?>
    </div>

    <h2>Frase censurata:</h2>

    <p>
        <?php
            echo $censored_phrase;
        ?>
    </p>

    <h2>Lunghezza della frase censurata:</h2>

    <div>
        <?php
            echo $censored_phrase_lenght;
        ?>
    </div>



</body>
</html>