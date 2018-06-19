<!DOCTYPE html>
<html>
<head>
    <title>Gestion des activités</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Matières</h2>
            </div>
            <div class="pull-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">Create New Matière</button>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Libelle</th>
            <th>Crédit(s)</th>
            <th width="200px">Action</th>
        </tr>
        </thead>
        <tbody></tbody>
    </table>

    <ul id="pagination" class="pagination-sm"></ul>

    <!-- Create Item Modal -->
    @include('matieres.create')
    <!-- Edit Item Modal -->
    @include('matieres.edit')
</div>

<!--script pour la page courante-->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

<script type="text/javascript">
    var url = "<?php echo route('matiere.index')?>";
</script>
<script src="/js/matiere.js"></script>
</body>
</html>