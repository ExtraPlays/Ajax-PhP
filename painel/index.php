<?php

session_start();

?>

<!doctype html>
<html lang="en">
<head>
<title>Title</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<link rel="stylesheet" href="../css/chat.css">

</head>
<body>


<div class="container">



    <div class="bg-light mt-5 p-3 rounded shadow-md">
    

        <div class="row">
        
        
            <div class="col-md-3">

                <div class="avatar text-center">
                
                    <img src=<?php echo $_SESSION['avatar'] ?> class="circle shadow-md border-2" width="150px" height="150px" alt="">

                    <h5 class="mt-2"><?php echo $_SESSION['usuario'] ?></h5>

                </div>

            </div>

            <div class="col-md-9">
              
                <div class="border-bottom mb-4">

                    <div class="row">
                        <div class="col-md-9">
                            <h4>Configurações da Conta</h4> 
                        </div>
                        <div class="col-md-3 text-right align-top mb-2">
                            <button id="btn-sair" class="btn btn-danger">Sair</button>
                        </div>
                    </div>

                </div>                


                
                <form id="form-senha">               
                    <label>Alterar senha:</label>     
                    <div class="row">                                                
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Nova senha" name="novaSenha">
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Confirmar senha" name="confirmarSenha">
                        </div>
                        <div class="col">
                            <button class="btn btn-success">Salvar</button>
                        </div>
                    </div>
                </form>

            </div>
        
        
        </div>
    
    
    </div>    

</div>


    
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../js/xhttp.js"></script>
<script src="../js/painel.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>