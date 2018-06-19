@extends('layouts.form')
@section('titre','Gestion des activités')

@section('stylesheets')
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('framework/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
@endsection

@section('contenu')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Databases</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <div class="row">
                    <div class="bs-docs-section">
                        <div class="bs-glyphicons">
                            <ul class="bs-glyphicons-list">
                                <li data-toggle="modal" data-target="#create-activite"x><a href="#"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"> </span>
                                        <span class="glyphicon-class">Activités</span></a>
                                </li>

                                <li  data-toggle="modal" data-target="#create-annee_academique"><a href="#"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                        <span class="glyphicon-class">Années Académiques</span></a>
                                </li>

                                <li data-toggle="modal" data-target="#create-classe"><a href="#"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                                        <span class="glyphicon-class">Classes</span></a>
                                </li>

                                <li data-toggle="modal" data-target="#create-cours"><a href="#"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                        <span class="glyphicon-class">Cours</span></a>
                                </li>

                                <li data-toggle="modal" data-target="#create-chre"><a href="#"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        <span class="glyphicon-class">Creneaux_horaires</span></a>
                                </li>

                                <li data-toggle="modal" data-target="#create-cursus"><a href="#"><span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                                        <span class="glyphicon-class">Cursus</span></a>
                                </li>

                                <li data-toggle="modal" data-target="#create-departement"><a href="#"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                        <span class="glyphicon-class">Départements</span></a>
                                </li>

                                <li data-toggle="modal" data-target="#create-tp"enseignant><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                        <span class="glyphicon-class">Enseignants</span></a>
                                </li>

                                <li  data-toggle="modal" data-target="#create-etudiant"><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                        <span class="glyphicon-class">Etudiants</span></a>
                                </li>

                                <li data-toggle="modal" data-target="#create-examen"><a href="#"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                        <span class="glyphicon-class">Examens</span></a>
                                </li>

                                <li data-toggle="modal" data-target="#create-matiere"><a href="#"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                                        <span class="glyphicon-class">Matières</span></a>
                                </li>

                                <li data-toggle="modal" data-target="#create-niveau_scolaire"><a href="#"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>
                                        <span class="glyphicon-class">Niveaux Scolaires</span></a>
                                </li>

                                <li data-toggle="modal" data-target="#create-roles"><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                        <span class="glyphicon-class">Rôles</span></a>
                                </li>

                                <li data-toggle="modal" data-target="#create-salle_classe"><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                        <span class="glyphicon-class">Salles de classes</span></a>
                                </li>

                                <li data-toggle="modal" data-target="#create-semestre"><a href="#"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span>
                                        <span class="glyphicon-class">Semestres</span></a>
                                </li>

                                <li data-toggle="modal" data-target="#create-suveillant"><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                        <span class="glyphicon-class">Surveillant</span></a>
                                </li>

                                <li id="tp" data-toggle="modal" data-target="#create-tp"><a href="#"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                        <span class="glyphicon-class">Tp</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Create Item Modal -->
            @include('admin.database.tp')

            @include('admin.database.cursus')

            @include('admin.database.creneaux_horaires')

            @include('admin.database.annee_academique')

            @include('admin.database.cours')

            @include('admin.database.activite')

            @include('admin.database.departement')

            @include('admin.database.matiere')

            @include('admin.database.niveau_scolaire')

            @include('admin.database.roles')

            @include('admin.database.salle_classe')

            @include('admin.database.semestre')

            @include('admin.database.suveillant')

            @include('admin.database.examen')
        </div>
    </div>
</div>
@endsection




<!--script pour la page courante-->
@section('script-form')
    <script src="{{ asset("js/databases.js") }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            getOptionDuree("dureeCreneau");
        });
    </script>
    
@endsection