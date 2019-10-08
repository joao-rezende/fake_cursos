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
                        <a id="btn_add_course" class="btn btn-danger"><i class="fa fa-plus"></i> Adicionar Curso</a>

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