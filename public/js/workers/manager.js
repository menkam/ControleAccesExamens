
function messageHandler(event) {
    /**
     * On récupère le message envoyé par la page principale
     * @type {event.data|*}
     */
    var messageSent = event.data;


    /**
     * On teste la commande envoyée
     */
    switch (messageSent.cmd) {
        case 'init':
            // On peut initialiser certaines parties de nos objets qui serviront
            // dans ce worker (attention au scope cependant !)
            break;
        case 'hello':
            // On prépare le message de retour
            var messageReturned = messageSent.parameter;
            // On renvoit le tout à la page principale
            this.postMessage(messageReturned);
            break;
    }
}

// On définit la fonction à appeler lorsque la page principale nous sollicite
this.addEventListener('message', messageHandler, false);

