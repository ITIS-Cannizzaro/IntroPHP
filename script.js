// Funzione per aggiornare l'orario in tempo reale
function aggiornaOrario() {
  var orario = new Date();
  var ore = orario.getHours();
  var minuti = orario.getMinutes();
  var secondi = orario.getSeconds();

  // Formattiamo l'orario come "HH:MM:SS"
  var orarioFormattato =
    "L'ora corrente &egrave;: " +
    pad(ore) +
    ":" +
    pad(minuti) +
    ":" +
    pad(secondi);

  // Aggiorniamo il contenuto della divisione "orario"
  document.getElementById("orario").innerHTML = orarioFormattato;
}

// Funzione per aggiungere uno zero davanti a numeri < 10
function pad(numero) {
  return (numero < 10 ? "0" : "") + numero;
}

// Aggiorniamo l'orario ogni secondo
setInterval(aggiornaOrario, 1000);

// Eseguiamo la funzione per la prima volta
aggiornaOrario();
