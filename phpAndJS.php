<!DOCTYPE html>
<html>

<head>
    <title>Pagina PHP Dinamica</title>
</head>

<body>
    <h1>Benvenuti nella pagina PHP dinamica !</h1>
    <h2>(sia lato server che client!)</h2>
    <p>
        Nessuno può impedire di chiedere al server del codice JavaScript, così nasco io
        che posso combinare le due cose! &#x1F60E;
    </p>

    <?php
        // Questo codice è identico a quello che trovate sull'esempio php.php
        $oraCorrente = date("H:i:s");
        echo "<p>L'ora all'ultimo refresh era: " . $oraCorrente . "</p>";
        echo "<div id=\"orario\"></div>"; // posso scrivere codice HTML stampato dall'interprete php
        echo "<script src=\"script.js\"></script>"; // e anche codice JavaScript
    ?>

    <!-- Metto il div che verrà modificato dallo script -->
    


    <p>Questa pagina cambier&agrave; ogni volta che la ricaricherete (ma anche in tempo reale).</p>


</body>

</html>