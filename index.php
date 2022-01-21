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
    //variabile contenente una frase
    $phrase = 'Lorem ipsum errore dolor sit amet errore consectetur, adipisicing elit. errore Accusantium accusamus vero, errore maxime, errore nemo recusandae voluptatem repudiandae minima sit illum voluptatibus cum id nulla distinctio? errore errore errore Facilis quis saepe ullam blanditiis iusto?';
    //lunghezza di ciò che è contenuto nella variabile
    $phrase_length = strlen($phrase);
    //parametro che da inserire con get
    $word_to_censore = $_GET['deletethisword'];
    //funzione che sostituisce nella frase la parola scelta dall'utente con '***'
    $censored_phrase = str_replace($word_to_censore, '***', $phrase);
    //lunghezza della nuova frase
    $censored_phrase_lenght = strlen($censored_phrase);
    
    ?>

    <h2>Frase scritta con PHP:</h2>

    <p>
        <?php
            //stampo la frase 
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