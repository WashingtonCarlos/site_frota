<?php
    session_start();
    include_once("seguraca.php");
    include_once("conexao.php");
    echo "Bem Vindo Administrador: </br>";
    echo "CPF: ".$_SESSION['cpf']."  Nome: ".$_SESSION['nomeUsuario'];

?>
<br>
<a href="sair.php">Sair</a>
<br>
<br>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <title>Administrativo</title>
</head>

<body>

    <?php
        $resultado = mysqli_query($conectar,"SELECT * FROM funcionario ORDER BY 'id'");
        $linhas = mysqli_num_rows($resultado); 
    ?>

    <div class="container">
            <ul class="nav col-md-4">
                <li class="nav-item col-md-4">
                    <a class="nav-link active" href="cad_usuario.php">Cadastro</a>
                </li>
                <li class="nav-item col-md-4">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item col-md-4">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        <div class="row">


            <div class="col-md-12">
                <h4>Tabela de Cadastrados</h4>
                <div class="table-responsive">


                    <table id="mytable" class="table table-bordred table-striped">

                        <thead>
                            <th><input type="checkbox" id="checkall" /></th>
                            <th> ID </th>
                            <th>nome</th>
                            <th>CPF</th>
                            <th>Email</th>
                            <th>Nivel de Acesso</th>
                            <th>Editar</th>
                            <th>Deletar</th>
                            <th>Visualizar</th>
                        </thead>
                        <tbody>

                            <?php
                                //lista de dados do banco
                                while($linhas = mysqli_fetch_array($resultado)){
                                    echo "<tr>";
                                    echo "<td><input type='checkbox' class='checkthis' /></td>";
                                    echo "<td>".$linhas['id']."</td>";
                                    echo "<td>".$linhas['nome']."</td>";
                                    echo "<td>".$linhas['cpf']."</td>";
                                    echo "<td>".$linhas['email']."</td>";
                                    echo "<td class = 'text-center'>".$linhas['nivel_acesso_id']."</td>";
                                    ?>
                                                               <td>
                                        <p data-placement='top' data-toggle='tooltip' title='Editar'>
                                            <a href='editar_usuario.php?&id=<?php  echo $linhas['id']; ?>'><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal'
                                                data-target='#edit'>
                                                <span
                                                    class='glyphicon glyphicon-pencil'>
                                                </span>
                                            </button></a>
                                        </p>
                                        </td>
                                        <td>
                                        <p data-placement='top' data-toggle='tooltip' title='Deletar'>
                                            <a href = 'processar/del_usuario.php?&id=<?php  echo $linhas['id']; ?>'><button class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete'>
                                                <span class='glyphicon glyphicon-trash'>
                                                
                                                </span>
                                            </button></a>
                                        </p>
                                        </td>
                                        <td>
                                        <p data-placement='top' data-toggle='tooltip' title='Visualizar'>
                                            <a href = 'visualiza_usuario.php?&id=<?php  echo $linhas['id']; ?>'><button class='btn btn-info btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete'>
                                                <span class='glyphicon glyphicon-eye-open'>
                                                
                                                </span>
                                            </button></a>
                                        </p>
                                        </td>
                                    </tr>
                                    <?php
                                } 
                                ?>
                        </tbody>

                    </table>

                    <div class="clearfix"></div>
                    <ul class="pagination pull-right">
                        <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                    </ul>

                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                            class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Mohsin">
                    </div>
                    <div class="form-group">

                        <input class="form-control " type="text" placeholder="Irshad">
                    </div>
                    <div class="form-group">
                        <textarea rows="2" class="form-control"
                            placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


                    </div>
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span
                            class="glyphicon glyphicon-ok-sign"></span> Update</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>



    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                            class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                </div>
                <div class="modal-body">

                    <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure
                        you want to delete this Record?</div>

                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-success"><span
                            class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span
                            class="glyphicon glyphicon-remove"></span> No</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</body>

</html>