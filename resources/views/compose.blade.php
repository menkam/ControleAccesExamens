<!-- compose -->
<div class="compose col-md-5 col-xs-12">
    <div class="compose-header">
        Nouveau Message
        <button type="button" class="close compose-close">
            <span>×</span>
        </button>
    </div>

    <div class="compose-body">
        <div id="alerts"></div>

        <!--div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
            <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                <ul class="dropdown-menu">
                </ul>
            </div>

            <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a data-edit="fontSize 5">
                            <p style="font-size:17px">Huge</p>
                        </a>
                    </li>
                    <li>
                        <a data-edit="fontSize 3">
                            <p style="font-size:14px">Normal</p>
                        </a>
                    </li>
                    <li>
                        <a data-edit="fontSize 1">
                            <p style="font-size:11px">Small</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="btn-group">
                <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
            </div>

            <div class="btn-group">
                <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
            </div>

            <div class="btn-group">
                <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
            </div>

            <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                <div class="dropdown-menu input-append">
                    <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                    <button class="btn" type="button">Add</button>
                </div>
                <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
            </div>

            <div class="btn-group">
                <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
            </div>

            <div class="btn-group">
                <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
            </div>
        </div>
        <div id="editor" class="editor-wrapper"></div-->
        <form data-toggle="validator" action="" method="POST">
                {{ csrf_field() }}

            <!--div class="form-group">
                <label class="control-label" for="matricule_enseignant">Destinataire</label>
            </div-->

            <div class="form-group">
                <label class="control-label" for="emailFrom">De :</label>
                <input style="color: green" type="email" name="emailFrom" id="emailFrom" value="{{ Auth::user()->email }}" class="form-control" data-error="from." required>
                <input type="hidden" name="id_user_from" id="id_user_from" value="{{ Auth::user()->id }}" class="form-control" data-error="from." required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label class="control-label" for="emailTo">A :</label>
                <input type="email" name="emailTo" id="emailTo" class="form-control" data-error="A." required>
                <input type="hidden" name="id_user_to" id="id_user_to" value="1" class="form-control" data-error="To." required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <label class="control-label" for="objet">Objet :</label>
                 <input type="text" name="objet" id="objet" class="form-control" data-error="objet." required>
                 <div class="help-block with-errors"></div>
            </div>
            <label class="" for="message">Message :</label>
            <textarea id="message"  name="message" class="form-control" data-error="message." required></textarea>            

            <div class="compose-footer">
                <button type="submit" id="send" class="btn btn-success">Send</button>
            </div>
        </form>    
        
    </div>

    
</div>
<!-- /compose -->