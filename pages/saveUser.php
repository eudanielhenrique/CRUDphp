<?php
            switch($_REQUEST["action"]) {
              case 'register':
                $name = $_POST["name"];
                $email = $_POST["email"];
                $password = md5($_POST["password"]);
                $data_nasc = $_POST["data_nasc"];

                $sql = "INSERT INTO usuarios (name, email, password, data_nasc) VALUES ('{$name}','{$email}', '{$password}', '{$data_nasc}')";
                $res = $conn -> query($sql);

                if ($res == true){
                  print "<div class='alert alert-success'>Usuario cadastrado com sucesso!</div>";
                  print '<a href="?page=newUser" ><button type="submit" class="btn btn-primary">Novo Cadastro</button></a>';
                }else{
                  print "<div class='alert alert-danger'>Erro ao cadastrar usuario!</div>";
                  print '<a href="?page=newUser" ><button type="submit" class="btn btn-danger">Voltar</button></a>';
                }
                break;

              case 'edit':
                $name = $_POST["name"];
                $email = $_POST["email"];
                $password = md5($_POST["password"]);
                $data_nasc = $_POST["data_nasc"];

                $sql = "UPDATE usuarios SET name='{$name}', email='{$email}', data_nasc='{$data_nasc}', password='{$password}'
                WHERE id=".$_REQUEST["id"];

                $res = $conn -> query($sql);
                if ($res==true){
                  print "<div class='alert alert-success'>Usuario alterado com sucesso!</div>";
                  print "<script>location.href='?page=listUser';</script>";
                }else{
                  print "<div class='alert alert-danger'>Erro ao atualizar usuario!</div>";
                  print "<script>location.href='?page=listUser';</script>";
                }
              break;
              
              case 'delete':
                $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
                $res = $conn -> query($sql);
                if($res==true){
                  print "<div class='alert alert-success'>Usuario excluido com sucesso!</div>";
                  print "<script>location.href='?page=listUser';</script>";
                }else{
                  print "<div class='alert alert-danger'>Erro ao excluir usuario!</div>";
                  print "<script>location.href='?page=listUser';</script>";
                }
              break;
            }
