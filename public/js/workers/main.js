// HelloWebWorkerJSON.js associé à HelloWebWorkersJSON.htm

// sérialisé puis désérialisé via le parseur JSON natif
/**
 * Notre objet WorkerMessage sera automatiquement
 * @param cmd
 * @param parameter
 * @constructor
 */
function WorkerMessage(cmd, parameter) {
    this.cmd = cmd;
    this.parameter = parameter;
}

/**
 * Le div où sera affiché les messages en retour du worker
 * @type {HTMLElement}
 * @private
 */
var contenu = $("#ligneActivite");



/* Vérifie si les Web Workers sont supportés */
if (window.Worker) {

    /*$(document).ready(function(event){
        contenu.empty();

        var rows ='<tr><td class="column-title">'+event+'</td>';
        rows +='<td class="column-title">'+event+'</td>';
        rows +='<td class="column-title">'+event+'</td>';
        rows +='<td class="column-title">'+event+'</td></tr>';

        //contenu.textContent = rows;
        contenu.append(rows)  ;

    });*/

    /**
     * On récupère les instances de nos 6 éléments HTML restant
     * @type {HTMLElement}
     * @private
     */
    var btnSend = $("#getEtudiants");

    /**
     * On instantie le Worker
     * @type {Worker}
     */
    var myWorker = new Worker('js/workers/manager.js');
    var i = 0;

    /**
     * on branche l'venement click sur le bouton create afin de commancer une note worker
     */
    btnSend.click(function (event) {
        /**
         * On se prépare à traiter le message de retour qui sera
         * renvoyé par le worker
         */
        myWorker.addEventListener("message", function (event) {
            contenu.empty();
            var rows ='<tr><td class="column-title">'+event.data+'</td>';
            rows +='<td class="column-title">'+event.data+'</td>';
            rows +='<td class="column-title">'+event.data+'</td>';
            rows +='<td class="column-title">'+event.data+'</td></tr>';

            //contenu.textContent = rows;
            contenu.append(rows)  ;
        }, false);
        /**
         * On démarre le worker en lui envoyant la commande 'init'
         */
        myWorker.postMessage(new WorkerMessage('init', null));
        setInterval(envoyetAuto,2000);
    });



    function envoyetAuto(){

        myWorker.postMessage(new WorkerMessage('hello', 'je compte : '+(i++)+' jusquà l infinie'));
    }

    /*
     // On branche l'évènement click sur le bouton Kill
     // pour stopper le worker. Il ne sera plus utilisable après
     _killWorker.addEventListener("click", function (event) {
     // On aurait pu créer une commande 'stop' qui aurait été traitée
     // au sein du worker qui se serait fait hara-kiri via .close()
     monWorker.terminate();
     _output.textContent = "Le worker a été stoppé.";
     }, false);
     */


}
else {
    _output.innerHTML = "Les Web Workers ne sont pas supportés par votre navigateur. Réessayez avec IE10 : <a href=\"http://ie.microsoft.com/testdrive\">téléchargez la dernière Platform Preview d'IE10 </a>";
}

