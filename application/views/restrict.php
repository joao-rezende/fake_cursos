<section class="light-bg conteudo">
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 text-center">
                <div class="section-title">
                    <h2>ÁREA RESTRITA</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-offset-5 col-lg-2 text-center">
                <div class="form-group">
                    <a class="btn btn-link"><i class="fa fa-user"></i></a>
                    <a class="btn btn-link" href="restrict/logoff"><i class="fa fa-sign-out"></i></a>
                </div>
            </div>
        </div>

        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_courses" class="tab-restrict" role="tab" data-toggle="tab">Cursos</a></li>
                <li><a href="#tab_team" class="tab-restrict" role="tab" data-toggle="tab">Equipe</a></li>
                <li><a href="#tab_user" class="tab-restrict" role="tab" data-toggle="tab">Usuários</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab_courses" class="tab-pane active">
                    <div class="container-fluid">
                        <h2 class="text-center"><strong>Gerenciar Cursos</strong></h2>
                        <a id="btn_add_course" class="btn btn-danger" data-toggle="modal" data-target="#modal_course">
                            <i class="fa fa-plus"></i> Adicionar Curso
                        </a>

                        <table id="dt_courses" class="table table-striped table-bordered table-restrict">
                            <thead>
                                <tr class="tableheader">
                                    <th>Nome</th>
                                    <th>Imagem</th>
                                    <th>Duração</th>
                                    <th>Descrição</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="tab_team" class="tab-pane">
                    <div class="container-fluid">
                        <h2 class="text-center"><strong>Gerenciar Equipe</strong></h2>
                        <a id="btn_add_member" class="btn btn-danger"><i class="fa fa-plus"></i> Adicionar Membro</a>

                        <table id="dt_team" class="table table-striped table-bordered table-restrict">
                            <thead>
                                <tr class="tableheader">
                                    <th>Nome</th>
                                    <th>Foto</th>
                                    <th>Descrição</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="tab_user" class="tab-pane">
                    <div class="container-fluid">
                        <h2 class="text-center"><strong>Gerenciar Usuários</strong></h2>
                        <a id="btn_add_user" class="btn btn-danger"><i class="fa fa-plus"></i> Adicionar Usuários</a>

                        <table id="dt_users" class="table table-striped table-bordered table-restrict">
                            <thead>
                                <tr class="tableheader">
                                    <th>Login</th>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</section>

<div id="modal_course" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">Cursos</h4>
            </div>

            <div class="modal-body">
                <form id="form_course">
                    <input name="course_id" type="hidden">

                    <div class="form-group">
                        <label class="col-xs-12 col-lg-2 control-label">Nome</label>
                        <div class="col-xs-12 col-lg-10">
                            <input id="course_name" name="course_name" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-12 col-lg-2 control-label">Imagem</label>
                        <div class="col-xs-12 col-lg-10">
                            <input id="course_img" name="course_img" class="form-control" type="file" accept="image/*">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-12 col-lg-2 control-label">Duração</label>
                        <div class="col-xs-12 col-lg-10">
                            <input id="course_duration" name="course_duration" class="form-control" type="number" min="0">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-12 col-lg-2 control-label">Descrição</label>
                        <div class="col-xs-12 col-lg-10">
                            <textarea id="course_description" name="course_description" class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button id="btn_save_couse" type="submit" class="btn btn-danger">
                            <i class="fa fa-save"></i> Salvar
                        </button>
                        <span class="help-block"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>