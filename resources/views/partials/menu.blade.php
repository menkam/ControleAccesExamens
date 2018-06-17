<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>MENU</h3>
        @if(\Auth::user()->hasRole('admin') || \Auth::user()->hasRole('enseignant') || \Auth::user()->hasRole('etudiant') || \Auth::user()->hasRole('visiteur'))
        <ul class="nav side-menu"> <!-- /2 - menu de messagerie -->
            <li>
                <a href="{{ route('inbox') }}"><i class="fa fa-inbox"></i> Inbox</a></li>
            @if(\Auth::user()->hasRole('admin') || \Auth::user()->hasRole('enseignant') || \Auth::user()->hasRole('etudiant'))    
            <li><!-- /3 - menu des contacts -->
                <a href="{{ route('contacts') }}"><i class="fa fa-users"></i> Contacts</a></li>
            @endif    
        </ul>
        @endif
        <h3>PERSONNEL</h3>
        <ul class="nav side-menu">
            @if(\Auth::user()->hasRole('admin'))
                <li><!--  - menu de gestion des information de elementaire dans la base de données -->
                    <a href="{{ route('dataBase') }}"><i class="fa fa-database"></i> Data Bases</a></li>
                <!--- menu de creation des utilisateurs -->
                <li><a><i class="fa fa-users"></i> Utilisateur <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{ route('formAddEnseignant') }}"><i class="dropdown-item fa fa-user"></i>Enseignants</a></li>
                        <li><a href="{{ route('formAddEtudiant') }}"><i class="dropdown-item fa fa-user"></i>Etudiants</a></li>
                        <li><a href="{{ route('formAddSurveillant') }}"><i class="dropdown-item fa fa-user"></i>Surveillants</a></li>
                    </ul>
                </li>
                @endif
                        <!-- /4 - menu des activites -->

                @if(\Auth::user()->hasRole('admin') || \Auth::user()->hasRole('enseignant') || \Auth::user()->hasRole('etudiant'))        
                <li><a><i class="fa fa-tasks"></i> Activiter <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        @if(\Auth::user()->hasRole('admin') || \Auth::user()->hasRole('enseignant'))
                            <li><a href="{{ route('mes_activites') }}"><i class="fa fa-edit"></i>Gestion d'activités</a></li>
                        @endif
                        <!--li><a href="{{ route('mes_activites', ['activite'=>1]) }}"><i class="fa fa-eye"></i> Virsualiser</a></li-->
                        <li><a href="{{ route('activites-encours') }}"><i class="fa fa-play"></i>Activité en cours</a></li>
                        <li><a href="{{ route('getFormListEtudiant') }}"><i class="fa fa-list"></i> Liste des étudiants</a></li>
                    </ul>
                </li>
                @endif

                <!-- /5 - menu des impressions ou virsualisation -->
                @if(\Auth::user()->hasRole('admin') || \Auth::user()->hasRole('enseignant') || \Auth::user()->hasRole('etudiant'))
                <li><a><i class="fa fa-table"></i> Planning <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{ route('planningActivite') }}"><i class="fa fa-graduation-cap"></i> Planning Activite</a></li>
                        <li><a href="#"><i class="fa fa-exclamation-triangle"></i>Autres Planning</a></li>
                    </ul>
                </li>
                @endif

                <!-- /6 - menu des rapports d'activité -->

                @if(\Auth::user()->hasRole('admin') || \Auth::user()->hasRole('enseignant') || \Auth::user()->hasRole('etudiant'))
                <li><a><i class="fa fa-bar-chart-o"></i> Rapports <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{ route('rapportActivite') }}"><i class="fa fa-graduation-cap"></i>Rapport Activité</a></li>
                        <li><a href="#"><i class="fa fa-exclamation-triangle"></i>Autre rapport</a></li>
                    </ul>
                </li>
                @endif
                <!-- /(fin) menu de l'enseignant  -->
        </ul>
        <ul class="nav side-menu">
            <!-- /7 - menu du profil du l'utilisateur -->
            <li>
                <a href="{{ route('profil') }}"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li><a href="javascript:void(0)"><i class="fa fa-spinner"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
        </ul>
    </div>

</div>


@section('scripts_menu')
<script type="text/javascript">

    /*$('ul.li.a')
        .click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
        .on('shown.bs.tab', function (e) {
            $('#actif').text($(e.target).text())
            $('#precedent').text($(e.relatedTarget).text())
        })

*/
</script>
@endsection