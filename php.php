<!DOCTYPE html>
<html>

<head>
    <title>Pagina PHP Dinamica</title>
</head>

<body>
    <h1>Benvenuti nella pagina PHP dinamica !</h1>
    <h2>(ma solo lato server...)</h2>
    <p>
        Io sono una pagina php dinamica, posso cambiare il mio contenuto
        ma è il server a cambiare il mio contenuto su richiesta,
        finche non fai il refresh anche il mio testo è fisso e non potete farci nulla,
        ma almeno mi muovo un po' di più della mia cugina HTML &#x1F610;
    </p>

    <?php
    // Da questo tag si inizia col PHP, anche i commenti cambiano (simile al Java, vero?)

    // Utilizziamo la funzione date() per ottenere l'ora corrente
    $oraCorrente = date("H:i:s");
    //Le variabili cominciano sempre con il simbolo del dollaro

    // Stampiamo l'ora corrente nella pagina
    echo "<p>L'ora all'ultimo refresh era: " . $oraCorrente . "</p>";
    // echo è come il System.out.println ma stampa su browser!
    ?> <!-- da qui è di nuovo tutto codice HTML, anche questo commento -->

    <p>Questa pagina cambier&agrave; ogni volta che la ricaricherete.</p>
</body>

</html>