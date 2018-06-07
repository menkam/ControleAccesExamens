@extends('layouts.form')
@section('titre','Activité en cours')
@section('stylesheets')
@endsection
@section('page_content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <table class="table table-striped jambo_table bulk_action">
                <thead>
                <tr class="headings">
                    <th class="column-title"># </th>
                    <th class="column-title">Matricule </th>
                    <th class="column-title">Nom Prénom </th>
                    <th class="column-title">Email </th>
                    <th class="column-title">Date Nais. </th>
                    <th class="column-title">Régime </th>
                    <th class="column-title">Etat </th>
                </tr>
                </thead>
                <tbody id="lignesListeEtudiantEnSalle"></tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript" src="js/activite_en_cour.js"></script>

    </script>
@endsection