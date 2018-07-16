<?php


Route::singularResourceParameters();

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**
 * routes pour l'application android
*/
Route::get('androidLogin', ['as'=>'androidLogin', 'uses'=>'AndroidApi\AuthController@login']);
Route::get('androidRegister', ['as'=>'androidRegister', 'uses'=>'AndroidApi\AuthController@register']);
Route::get('androidResetLogin', ['as'=>'androidResetLogin', 'uses'=>'AndroidApi\AuthController@resetPass']);
Route::get('androidGetListEtudiant', ['as'=>'androidGetListEtudiant', 'uses'=>'AndroidApi\GetListEtudiantController@getListEtudiants']);
Route::get('androidGetListAllEtudiant', ['as'=>'androidGetListAllEtudiant', 'uses'=>'AndroidApi\GetListEtudiantController@getListAllEtudiants']);
Route::get('androidVerifierEmail', ['as'=>'androidVerifierEmail', 'uses'=>'AndroidApi\AuthController@verifierEmail']);
Route::get('androidScanCodeBare', ['as'=>'androidScanCodeBare', 'uses'=>'AndroidApi\GestionActiviteController@ajouterEtudiantEnSalle']);
Route::get('androidAddStudent', ['as'=>'androidAddStudent', 'uses'=>'AndroidApi\GestionActiviteController@ajouterEtudiantEnSalle']);
Route::get('androidStudentFinish', ['as'=>'androidStudentFinish', 'uses'=>'AndroidApi\GestionActiviteController@ajouterEtudiantAyantTerminer']);
Route::get('androidStudentExclus', ['as'=>'androidStudentExclus', 'uses'=>'AndroidApi\GestionActiviteController@ajouterEtudiantsExclus']);
//Route::get('testApi', ['as'=>'testApi', 'uses'=>'AndroidApi\Main@test']);


Route::group(['middleware' => ['guest']], function() {
    Route::get('/', function () {
        //return view('welcome');
        return view('auth.login');
    });
});

Auth::routes();

Route::group(['middleware' => ['auth']], function(){

    //Route::group(['middleware' => ['admin']], function(){
        //route enseignant ici
        Route::get('database',['as'=>'dataBase', 'uses'=>'Users\AdminController@pageMenu']);
        Route::resource('admin', 'Users\AdminController');

        //Route pour l'enseignant'
        Route::resource('ens_chef_dpts', 'Ens_chef_dptsController');    
        Route::get('formAddEnseignant',['as' => 'formAddEnseignant', 'uses' => 'EnseignantsController@index']);

        Route::post('AddEnseignant',['as' => 'AddEnseignant', 'uses' => 'EnseignantsController@store']);
        Route::post('getEnseignant', ['as'=>'getEnseignant', 'uses'=>'EnseignantsController@show']);        
        Route::post('getEnseignant0', ['as'=>'getEnseignant0', 'uses'=>'EnseignantsController@show0']);
        //end.

        //Route pour les Etudiants
        Route::get('formAddEtudiant',['as' => 'formAddEtudiant', 'uses' => 'EtudiantsController@indexForm']);
        Route::post('AddEtudiant',['as' => 'AddEtudiant', 'uses' => 'EtudiantsController@store']);       
        Route::post('getListEtudiantScolarise',['as' => 'getListEtudiantScolarise', 'uses' => 'EtudiantsController@show']);
        Route::post('getInfoEtudiant',['as' => 'getInfoEtudiant', 'uses' => 'EtudiantsController@showInfo']);
        //end.


        //Route Surveillant
        Route::get('formAddSurveillant',['as' => 'formAddSurveillant', 'uses' => 'SurveillantsController@index']);
        Route::post('getSurveillant0', ['as'=>'getSurveillant0', 'uses'=>'SurveillantsController@show0']);
        //end.
        
        Route::post('addAnneeAca', ['as'=>'addAnneeAca', 'uses'=>'Annee_academiquesController@store']);
        Route::post('addCreneaux', ['as'=>'addCreneaux', 'uses'=>'Creneaux_horairesController@store']);
    //});

    //Route::get('/home', 'HomeController@index');
    Route::get('/home',['as'=>'home','uses'=>'HomeController@index']);
    Route::get('/contacts',['as'=>'contacts','uses'=>'ContactsController@index']);
    Route::get('/profil',['as'=>'profil','uses'=>'ProfilsController@index']);
    //Route::get('/Activite-Rapports/',['as'=>'rapportActivite','uses'=>'RapportsController@index']);

    //Route pour les mails
    Route::get('/inbox',['as'=>'inbox','uses'=>'MailController@index']);
    Route::post('getInbox',['as'=>'getInbox','uses'=>'MailController@show']);
    Route::post('verifierMail',['as'=>'verifierMail','uses'=>'MailController@verifierMail']);
    Route::post('verifierMailRecive',['as'=>'verifierMailRecive','uses'=>'MailController@verifierMailRecive']);
    Route::post('getInfoUser',['as'=>'getInfoUser','uses'=>'MailController@getInfoUser']);
    Route::post('getContentMsg',['as'=>'getContentMsg','uses'=>'MailController@getContentMsg']);
    Route::post('sendMail',['as'=>'sendMail','uses'=>'MailController@store']);
    Route::post('lectureMail',['as'=>'lectureMail','uses'=>'MailController@lectureMail']);
    Route::delete('delMail',['as'=>'delMail','uses'=>'MailController@destroy']);


    //Route pour le visiteur
    Route::resource('visiteur', 'Users\VisiteurController');
    //end.

    //Route pour le surveillants
    Route::resource('surveillants', 'SurveillantsController');
    Route::post('getSurveillant', ['as'=>'getSurveillant', 'uses'=>'SurveillantsController@show']);
    //end.

    //route activiter
    Route::resource('activite', 'ActivitesController');
    Route::get('mes_activites', ['as'=>'mes_activites', 'uses'=>'ActivitesController@accueille']);
    Route::get('activites-encours', ['as'=>'activites-encours', 'uses'=>'ActivitesController@en_cours']);
    Route::get('activite-ListEtudiant',['as' => 'getFormListEtudiant', 'uses' => 'ActivitesController@showListEtudiant']);
    Route::post('addClasseActivite', ['as'=>'addClasseActivite', 'uses'=>'Activite_conc_classesController@store']);
    Route::post('classeActivite', 'Activite_conc_classesController@show');
    Route::post('getTypeActivite', ['as'=>'getTypeActivite', 'uses'=>'ActivitesController@getTypeActivite']);
    Route::post('getListEtudiant',['as' => 'getListEtudiant', 'uses' => 'ActivitesController@showListEtudiant']);
    Route::post('getListExamenEnCour',['as' => 'getListExamenEnCour', 'uses' => 'ActivitesController@examenEnCours']);
    Route::post('getMatiereActivite',['as' => 'getMatiereActivite', 'uses' => 'ActivitesController@getmatiereActivite']);
    Route::post('getListTpEnCour',['as' => 'getListTpEnCour', 'uses' => 'ActivitesController@tpEnCours']);
    Route::post('getListCoursEnCour',['as' => 'getListCoursEnCour', 'uses' => 'ActivitesController@coursEnCours']);
    Route::post('getListCcEnCour',['as' => 'getListCcEnCour', 'uses' => 'ActivitesController@ccEnCours']);
    Route::post('activiteStore',['as' => 'activiteStore', 'uses' => 'ActivitesController@store']);
    Route::post('salleActivite', 'Salle_activitesController@show');
    Route::post('getSalleLibre', ['as'=>'getSalleLibre', 'uses'=>'Salle_activitesController@findClasse']);
    Route::post('addSalleActivite', ['as'=>'addSalleActivite', 'uses'=>'Salle_activitesController@store']);
    Route::post('getListEtudiantsEnSalle',['as' => 'getListEtudiantsEnSalle', 'uses' => 'ActivitesController@showListEtudiantEtudiantEnSalle']);
    Route::delete('delSalleActivite', ['as'=>'addSalleActivite', 'uses'=>'Salle_activitesController@destroy']);
    Route::delete('delClasseActivite', ['as'=>'addClasseActivite', 'uses'=>'Activite_conc_classesController@destroy']);
    //end.

    //Route pour les Planning
    Route::get('planningActivite',['as'=>'planningActivite','uses'=>'PlanningActiviteController@planningActivite']);
    Route::post('getOptionActivite', ['as'=>'getOptionActivite', 'uses'=>'PlanningActiviteController@getOptionActivite']);
    Route::post('getOptionTypeActivite', ['as'=>'getOptionTypeActivite', 'uses'=>'PlanningActiviteController@getOptionTypeActivite']);
    Route::post('getMatierePlanning', ['as'=>'getMatierePlanning', 'uses'=>'PlanningActiviteController@getMatierePlanning']);
    //end.

    //Route pour les Rapports d'activite
    Route::get('rapportActivite',['as'=>'rapportActivite','uses'=>'RapportActiviteController@rapportActivite']);
    Route::post('getListePresence',['as'=>'getListePresence','uses'=>'RapportActiviteController@getListePresence']);
    Route::post('getListeTricheur',['as'=>'getListeTricheur','uses'=>'RapportActiviteController@getListeTricheur']);
    Route::post('getListAbsent',['as'=>'getListAbsent','uses'=>'RapportActiviteController@getListAbsent']);
    Route::post('getNombre',['as'=>'getNombre','uses'=>'RapportActiviteController@getNombre']);
    Route::post('getOptionMatiere',['as'=>'getOptionMatiere','uses'=>'RapportActiviteController@getOptionMatiere']);
    Route::post('getOptionTypeActivite', ['as'=>'RapportActiviteController', 'uses'=>'RapportActiviteController@getOptionTypeActivite']);
    //end.


    //Route pour les matières
    Route::post('matieres','MatieresController@matiere');
    Route::post('getMatieres','MatieresController@show');
    //end.

    /********Route for annee_academiques*************/
    Route::post('getAnneeAcademique', ['as'=>'getAnneeAcademique', 'uses'=>'Annee_academiquesController@show']);
    //end.

    //Route for creneaux_horaire
    Route::post('getCreneaux', ['as'=>'getCreneaux', 'uses'=>'Creneaux_horairesController@show']);
    //end.

    //Route for cursus_acc
    //Route::resource('cursus_acc', 'Cursus_accsController');
    Route::post('getCursus', ['as'=>'getCursus', 'uses'=>'Cursus_accsController@show']);
    //end.

    //Route for classes
    Route::post('getClasse', ['as'=>'getClasse', 'uses'=>'ClassesController@show']);
    //end.

    //Route for departements
    Route::post('getDepartement', ['as'=>'getDepartement', 'uses'=>'DepartementsController@show']);
    //end.

    //Route for salles
    Route::post('getSalle', ['as'=>'getSalle', 'uses'=>'SallesController@show']);
    //end.

    //Route for examens
    Route::post('getExamen', ['as'=>'getExamen', 'uses'=>'ExamensController@show']);
    Route::post('addMatiereExamen', ['as'=>'addMatiereExamen', 'uses'=>'ExamensController@store']);
    Route::post('matiere_activiter', 'ExamensController@index2');
    Route::post('AjaxExamen', ['as'=>'AjaxExamen', 'uses'=>'ExamensController@AjaxExamen' ]);
    Route::delete('delMatiereExamen', ['as'=>'delMatiereExamen', 'uses'=>'ExamensController@destroy']);
    //end.

    //Route for cours
    Route::post('addMatiereCours', ['as'=>'addMatiereCours', 'uses'=>'CourssController@store']);
    Route::post('getCours', ['as'=>'getCours', 'uses'=>'CourssController@show']);
    //end.

    //Route for tps
    //Route::resource('tp', 'TpsController');
    Route::post('getTp', ['as'=>'getTp', 'uses'=>'TpsController@show']);
    Route::post('addMatiereTp', ['as'=>'addMatiereTp', 'uses'=>'TpsController@store']);
    //end.

    //Route for Niveau
    Route::post('getNiveau', ['as'=>'getNiveau', 'uses'=>'NiveauController@show']);
    //end.

    //Route for Semestre
    Route::post('getSemestre', ['as'=>'getSemestre', 'uses'=>'SemestresController@show']);
    //end.

    //Route for Session
    Route::post('getSession', ['as'=>'getSession', 'uses'=>'SessionsController@show']);
    //end.

});