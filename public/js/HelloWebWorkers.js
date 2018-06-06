// HelloWebWorkerJSON.js associé à HelloWebWorkersJSON.htm

// sérialisé puis désérialisé via le parseur JSON natif
/**
 * Notre objet WorkerMessage sera automatiquement
 * @param cmd
 * @param parameter
 * @constructor
 */
function WorkerMessage(activite, parameter) {
    this.cmd = cmd;
    this.parameter = parameter;
}

/**
 * Le div où sera affiché les messages en retour du worker
 * @type {HTMLElement}
 * @private
 */
var _output = document.getElementById("output");

/* Vérifie si les Web Workers sont supportés */
if (window.Worker) {
    // On récupère les instances de nos 3 éléments HTML restant
    var _btnSubmit = document.getElementById("btnSubmit");
    var _btnCreate = document.getElementById("btnCreate");
    var _inputForWorker = document.getElementById("inputForWorker");
    var _killWorker = document.getElementById("killWorker");
    var i = 0;

    // on fait un simple déclartion de l'objet Worker
    var monWorker;

    /**
     * on branche l'venement click sur le bouton create afin de commancer une note worker
     */
    _btnCreate.addEventListener("click", function (event) {

        /**
         * On instantie le Worker
         * @type {Worker}
         */
        monWorker = new Worker('js/helloworkers.js');

        /**
         * On se prépare à traiter le message de retour qui sera
         * renvoyé par le worker
         */
        monWorker.addEventListener("message", function (event) {
            _output.textContent = event.data;
        }, false);

        /**
         * On démarre le worker en lui envoyant la commande 'init'
         */
        monWorker.postMessage(new WorkerMessage('init', null));

        //setInterval(envoyetAuto,2000);

        /**
         * On branche l'évènement click sur le bouton Submit
         * pour envoyer le contenu de l'input au worker
         */
        _btnSubmit.addEventListener("click", function (event) {
            // On envoit désormais les messages via la commande 'hello'
            monWorker.postMessage(new WorkerMessage('hello', _inputForWorker.value));
        }, false);



        function envoyetAuto(){

            monWorker.postMessage(new WorkerMessage('hello', 'je compote de '+(i++)+' à l infinie'));
        }

    }, false);



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

