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
Route::get('androidGetListEtudiant', ['as'=>'androidGetListEtudiant', 'uses'=>'AndroidApi\GetListEtudiantController@getListEtudiants']);
Route::get('androidGetListAllEtudiant', ['as'=>'androidGetListAllEtudiant', 'uses'=>'AndroidApi\GetListEtudiantController@getListAllEtudiants']);
Route::get('androidVerifierEmail', ['as'=>'androidVerifierEmail', 'uses'=>'AndroidApi\AuthController@verifierEmail']);
Route::get('androidLogin', ['as'=>'androidLogin', 'uses'=>'AndroidApi\AuthController@login']);
Route::get('androidScanCodeBare', ['as'=>'androidScanCodeBare', 'uses'=>'AndroidApi\GestionActiviteController@ajouterEtudiantEnSalle']);
Route::get('androidRegister', ['as'=>'androidRegister', 'uses'=>'AndroidApi\AuthController@register']);
Route::get('androidResetLogin', ['as'=>'androidResetLogin', 'uses'=>'AndroidApi\AuthController@resetPass']);
Route::get('androidAddStudent', ['as'=>'androidAddStudent', 'uses'=>'AndroidApi\GestionActiviteController@ajouterEtudiantEnSalle']);
Route::get('androidStudentFinish', ['as'=>'androidStudentFinish', 'uses'=>'AndroidApi\GestionActiviteController@ajouterEtudiantAyantTerminer']);
Route::get('androidStudentExclus', ['as'=>'androidStudentExclus', 'uses'=>'AndroidApi\GestionActiviteController@ajouterEtudiantsExclus']);


Route::group(['middleware' => ['guest']], function() {
    Route::get('/', function () {
        //return view('welcome');
        return view('auth.login');
    });
});

Auth::routes();


Route::group(['middleware' => ['auth']], function(){

    Route::get('hello', ['as'=>'hello', 'uses'=>'HelloWorldController@bonjour']);


    Route::get('/home', 'HomeController@index');
    Route::get('/inbox',['as'=>'inbox','uses'=>'InboxController@index']);
    Route::get('/contacts',['as'=>'contacts','uses'=>'ContactsController@index']);
    Route::get('/profil',['as'=>'profil','uses'=>'ProfilsController@index']);
    Route::get('/Activite-Rapports/',['as'=>'rapportActivite','uses'=>'RapportsController@index']);
    Route::get('/Activite-Plannings/',['as'=>'planningActivite','uses'=>'PlanningsController@index']);
    /*
     * Route pour l'admin'
     */
    Route::resource('admin', 'Users\AdminController');
    Route::get('database',['as'=>'dataBase', 'uses'=>'Users\AdminController@pageMenu']);
    /*
     * Route pour l'enseignant'
     */
    Route::resource('ens_chef_dpts', 'Ens_chef_dptsController');

    /*
     * Route pour le visiteur
     */
    Route::resource('visiteur', 'Users\VisiteurController');

    /**
     * Route pour le surveillants
     */
    Route::resource('surveillants', 'SurveillantsController');

    /*
     * route activiter
     */
    Route::resource('activite', 'ActivitesController');

    Route::get('mes_activites', ['as'=>'mes_activites', 'uses'=>'ActivitesController@accueille']);
    Route::get('activites-encours', ['as'=>'activites-encours', 'uses'=>'ActivitesController@en_cours']);
    Route::get('activite-ListEtudiant',['as' => 'getFormListEtudiant', 'uses' => 'ActivitesController@showListEtudiant']);

    Route::post('activiteStore',['as' => 'activiteStore', 'uses' => 'ActivitesController@store']);

    //Route::resource('activite_conc_classe', 'Activite_conc_classesController');
    //Route::resource('salle_activite', 'Salle_activitesController');
    Route::post('addMatiereExamen', ['as'=>'addMatiereExamen', 'uses'=>'ExamensController@store']);
    Route::post('addMatiereCours', ['as'=>'addMatiereCours', 'uses'=>'CourssController@store']);
    Route::get('addMatiereTp', ['as'=>'addMatiereTp', 'uses'=>'TpsController@store']);
    Route::post('addClasseActivite', ['as'=>'addClasseActivite', 'uses'=>'Activite_conc_classesController@store']);
    Route::post('addSalleActivite', ['as'=>'addSalleActivite', 'uses'=>'Salle_activitesController@store']);

    Route::delete('delMatiereExamen', ['as'=>'delMatiereExamen', 'uses'=>'ExamensController@destroy']);
    Route::delete('delClasseActivite', ['as'=>'addClasseActivite', 'uses'=>'Activite_conc_classesController@destroy']);
    Route::delete('delSalleActivite', ['as'=>'addSalleActivite', 'uses'=>'Salle_activitesController@destroy']);

    Route::post('matiere_activiter', 'ExamensController@index2');
    Route::post('AjaxExamen', ['as'=>'AjaxExamen', 'uses'=>'ExamensController@AjaxExamen' ]);
    Route::post('classeActivite', 'Activite_conc_classesController@show');
    Route::post('salleActivite', 'Salle_activitesController@show');
    Route::post('getTypeActivite', ['as'=>'getTypeActivite', 'uses'=>'ActivitesController@getTypeActivite']);
    Route::post('getListEtudiant',['as' => 'getListEtudiant', 'uses' => 'ActivitesController@showListEtudiant']);
    Route::post('getListExamenEnCour',['as' => 'getListExamenEnCour', 'uses' => 'ActivitesController@examenEnCours']);
    Route::post('getListTpEnCour',['as' => 'getListTpEnCour', 'uses' => 'ActivitesController@tpEnCours']);
    Route::post('getListCoursEnCour',['as' => 'getListCoursEnCour', 'uses' => 'ActivitesController@coursEnCours']);
    Route::post('getListCcEnCour',['as' => 'getListCcEnCour', 'uses' => 'ActivitesController@ccEnCours']);
    Route::post('getListEtudiantsEnSalle',['as' => 'getListEtudiantsEnSalle', 'uses' => 'ActivitesController@showListEtudiantEtudiantEnSalle']);
    Route::post('getSurveillant', ['as'=>'getSurveillant', 'uses'=>'SurveillantsController@show']);
    Route::post('getEnseignant', ['as'=>'getEnseignant', 'uses'=>'EnseignantsController@show']);
    Route::post('getSalleLibre', ['as'=>'getSalleLibre', 'uses'=>'Salle_activitesController@findClasse']);
    Route::post('getMatiereActivite',['as' => 'getMatiereActivite', 'uses' => 'ActivitesController@getmatiereActivite']);
    Route::get('getMatiereActivite',['as' => 'getMatiereActivite', 'uses' => 'ActivitesController@getmatiereActivite']);



    /*
     * Route pour les matières
     */
    Route::post('matieres','MatieresController@matiere');
    Route::post('getMatieres','MatieresController@show');

    /********Route for annee_academiques*************/
    Route::post('getAnneeAcademique', ['as'=>'getAnneeAcademique', 'uses'=>'Annee_academiquesController@show']);
    Route::post('addAnneeAca', ['as'=>'addAnneeAca', 'uses'=>'Annee_academiquesController@store']);


    /**
     * Route for creneaux_horaire
     */
    Route::post('getCreneaux', ['as'=>'getCreneaux', 'uses'=>'Creneaux_horairesController@show']);
    Route::post('addCreneaux', ['as'=>'addCreneaux', 'uses'=>'Creneaux_horairesController@store']);

    /**
     * Route for cursus_acc
     */
    //Route::resource('cursus_acc', 'Cursus_accsController');
    Route::post('getCursus', ['as'=>'getCursus', 'uses'=>'Cursus_accsController@show']);

    /**
     * Route for classes
     */
    Route::post('getClasse', ['as'=>'getClasse', 'uses'=>'ClassesController@show']);

    /**
     * Route for departements
     **/
    Route::post('getDepartement', ['as'=>'getDepartement', 'uses'=>'DepartementsController@show']);

    /**
     * Route for salles
     */
    Route::post('getSalle', ['as'=>'getSalle', 'uses'=>'SallesController@show']);

    /**
     * Route for examens
     */
    Route::post('getExamen', ['as'=>'getExamen', 'uses'=>'ExamensController@show']);

    /**
     * Route for cours
     */
    Route::post('getCours', ['as'=>'getCours', 'uses'=>'CourssController@show']);

    /**
     * Route for tps
     */
    //Route::resource('tp', 'TpsController');
    Route::post('getTp', ['as'=>'getTp', 'uses'=>'TpsController@show']);

    /**
     * Route for Niveau
     */
    Route::post('getNiveau', ['as'=>'getNiveau', 'uses'=>'NiveauController@show']);

    /**
     * Route for Semestre
     */
    Route::post('getSemestre', ['as'=>'getSemestre', 'uses'=>'SemestresController@show']);

    /**
     * Route for Session
     */
    Route::post('getSession', ['as'=>'getSession', 'uses'=>'SessionsController@show']);
});

