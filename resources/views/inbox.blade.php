@extends('layouts.form')
@section('titre','Inbox')

@section('stylesheets')

@endsection

@section('contenu')
<div class="">

    <div class="page-title">
        <div class="title_left">
            <h3>Inbox <small></small></h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <!--div class="x_title">
                    <h2>Inbox Design<small>User Mail</small></h2>
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
                </div-->
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-3 mail_list_column">
                            <button id="compose" class="btn btn-sm btn-success btn-block" type="button">COMPOSE</button>
                            <hr>

                            <div id="listMail"></div>
                        </div>
                        <!-- /MAIL LIST -->

                        <!-- CONTENT MAIL -->
                        <div class="col-sm-9 mail_view">
                            <div id="libellemsg" class="inbox-body">
                                <div class="mail_heading row">                                    
                                    <div id="objectifmsg" class="col-md-12"></div>
                                </div>
                                <div class="sender-info">
                                    <div class="row">
                                        <div id="infoSender" class="col-md-12"></div>
                                    </div>
                                </div>
                                <div class="view-mail" id="mainMsg"></div>
                                
                                <div id="goupeBtn" class="btn-group" style="padding-top: 20px;"></div>
                            </div>
                        </div>
                        <!-- /CONTENT MAIL -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script-form')
    <script type="text/javascript">
        var iduser = "<?php echo Auth::user()->id; ?>";
    </script>
    <script src="{{ asset('js/compose.js') }}"></script>
@endsection