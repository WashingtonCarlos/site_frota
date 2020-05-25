<?php
    session_start();
    include_once("seguraca.php");
    include_once("conexao.php");
    echo "Bem Vindo Administrador: </br>";
    echo "CPF: ".$_SESSION['cpf']."  Nome: ".$_SESSION['nomeUsuario'];

    //Editar Usuario:
    $id = $_GET['id'];
    //Executa consulta:
    $result = mysqli_query($conectar,"SELECT * FROM funcionario WHERE id = '$id' LIMIT 1 ");
    $resultado = mysqli_fetch_assoc($result);
?>
<br>
<a href="administrativo.php">voltar</a>
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
    <title>Edita Usuario</title>
</head>

<body>

    <div class="container">
        <form class="col-md-12" method="POST" action="processar/edit_usuario.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCPF">CPF</label>
                    <input type="text" class="form-control" name="cpf" placeholder="Apenas os numeros" value= "<?php echo $resultado['cpf']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="Senha">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Endereço de email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="inputEmail" aria-describedby="emailHelp"
                    placeholder="Seu email" value="<?php echo $resultado['email']; ?>">
            </div>
            <div class="form-group">
                <label for="inputAddress">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome Completo" value="<?php echo $resultado['nome']; ?>">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control"  name="endereco" placeholder="Apartamento, hotel, casa, etc." value="<?php echo $resultado['endereco']; ?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name ="cidade" value="<?php echo $resultado['cidade']; ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputNivel">Nivel de Acesso</label>
                    <select id="inputNivel" class="form-control" name="nivel_de_acesso">
                        <option>Escolher...</option>
                        <option value="1"
                        <?php
                            if($resultado['nivel_acesso_id']==1){
                                echo 'selected';
                            }
                        ?>
                        >Administrador</option>
                        <option value="2"
                        <?php
                            if($resultado['nivel_acesso_id']==2){
                                echo 'selected';
                            }
                        ?>
                        >Usuario</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEstado">Estado</label>
                    <select name="inputEstado" class="form-control">
                        <option>Escolher...</option>
                        <option value="Acre"
                        <?php
                            if($resultado['estado']=="Acre"){
                                echo 'selected';
                            }
                        ?>
                        >AC - Acre</option>
                        <option value="Alagoas"
                        <?php
                            if($resultado['estado']=="Alagoas"){
                                echo 'selected';
                            }
                        ?>
                        >AL - Alagoas</option>
                        <option value="Amapá"
                        <?php
                            if($resultado['estado']=="Amapá"){
                                echo 'selected';
                            }
                        ?>
                        >AP - Amapá</option>
                        <option value="Amazonas"
                        <?php
                            if($resultado['estado']=="Amazonas"){
                                echo 'selected';
                            }
                        ?>
                        >AM - Amazonas</option>
                        <option value="Bahia"
                        <?php
                            if($resultado['estado']=="Bahia"){
                                echo 'selected';
                            }
                        ?>
                        >BA - Bahia</option>
                        <option value="Ceará"
                        <?php
                            if($resultado['estado']=="Ceará"){
                                echo 'selected';
                            }
                        ?>
                        >CE - Ceará</option>
                        <option value="Distrito Federal"
                        <?php
                            if($resultado['estado']=="Distrito Federal"){
                                echo 'selected';
                            }
                        ?>
                        >DF - Distrito Federal</option>
                        <option value="Espirito Santo"
                        <?php
                            if($resultado['estado']=="Espirito Santo"){
                                echo 'selected';
                            }
                        ?>
                        >ES - Espirito Santo</option>
                        <option value="Goiás"
                        <?php
                            if($resultado['estado']=="Goiás"){
                                echo 'selected';
                            }
                        ?>
                        >GO - Goiás</option>
                        <option value="Maranhão"
                        <?php
                            if($resultado['estado']=="Maranhão"){
                                echo 'selected';
                            }
                        ?>
                        >MA - Maranhão</option>
                        <option value="Mato Grosso"
                        <?php
                            if($resultado['estado']=="Mato Grosso"){
                                echo 'selected';
                            }
                        ?>
                        >MT - Mato Grosso</option>
                        <option value="Mato Grosso do Sul"
                        <?php
                            if($resultado['estado']=="Mato Grosso do Sul"){
                                echo 'selected';
                            }
                        ?>
                        >MS - Mato Grosso do Sul</option>
                        <option value="Minas Gerais"
                        <?php
                            if($resultado['estado']=="Minas Gerais"){
                                echo 'selected';
                            }
                        ?>
                        >MG - Minas Gerais</option>
                        <option value="Pará"
                        <?php
                            if($resultado['estado']=="Pará"){
                                echo 'selected';
                            }
                        ?>
                        >PA - Pará</option>
                        <option value="Paraíba"
                        <?php
                            if($resultado['estado']=="Paraíba"){
                                echo 'selected';
                            }
                        ?>
                        >PB - Paraíba</option>
                        <option value="Paraná"
                        <?php
                            if($resultado['estado']=="Paraná"){
                                echo 'selected';
                            }
                        ?>
                        >PR - Paraná</option>
                        <option value="Pernambuco"
                        <?php
                            if($resultado['estado']=="Pernambuco"){
                                echo 'selected';
                            }
                        ?>
                        >PE - Pernambuco</option>
                        <option value="Piauí"
                        <?php
                            if($resultado['estado']=="Piauí"){
                                echo 'selected';
                            }
                        ?>
                        >PI - Piauí</option>
                        <option value="Rio de Janeiro"
                        <?php
                            if($resultado['estado']=="Rio de Janeiro"){
                                echo 'selected';
                            }
                        ?>
                        >RJ - Rio de Janeiro</option>
                        <option value="Rio Grande do Norte"
                        <?php
                            if($resultado['estado']=="Rio Grande do Norte"){
                                echo 'selected';
                            }
                        ?>
                        >RN - Rio Grande do Norte</option>
                        <option value="Rio Grande do Sul"
                        <?php
                            if($resultado['estado']=="Rio Grande do Sul"){
                                echo 'selected';
                            }
                        ?>
                        >RS - Rio Grande do Sul</option>
                        <option value="Rondônia"
                        <?php
                            if($resultado['estado']=="Rondônia"){
                                echo 'selected';
                            }
                        ?>
                        >RO - Rondônia</option>
                        <option value="Roraima"
                        <?php
                            if($resultado['estado']=="Roraima"){
                                echo 'selected';
                            }
                        ?>
                        >RR - Roraima</option>
                        <option value="Santa Catarina"
                        <?php
                            if($resultado['estado']=="Santa Catarina"){
                                echo 'selected';
                            }
                        ?>
                        >SC - Santa Catarina</option>
                        <option value="São Paulo"
                        <?php
                            if($resultado['estado']=="São Paulo"){
                                echo 'selected';
                            }
                        ?>
                        >SP - São Paulo</option>
                        <option value="Sergipe"
                        <?php
                            if($resultado['estado']=="Sergipe"){
                                echo 'selected';
                            }
                        ?>
                        >SE - Sergipe</option>
                        <option value="Tocantins"
                        <?php
                            if($resultado['estado']=="Tocantins"){
                                echo 'selected';
                            }
                        ?>
                        >TO - Tocantins</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputCEP">CEP</label>
                    <input type="text" class="form-control" name="cep" value="<?php echo $resultado['cep']; ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group col-md-3">
                    <label for="inputTEL">telefone</label>
                    <input class="form-control" type="text" name="telefone" value="<?php echo $resultado['telefone']; ?>">
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">
            <div>
                <button type="submit" class="btn btn-primary col-md-4">Editar</button>
            </div>
        </form>
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