<?php

session_start();

?>

<!doctype html>
<html lang="pt-br">
<head>
<title>Title</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<link rel="stylesheet" href="css/chat.css">

</head>
<body>


<div class="container">

    <div class="d-flex justify-content-center">
    
        <div class="bg-light rounded mt-4 shadow-lg">

            <div class="p-3" style="width: 350px">
                
                <form id="form-cadastro">                    

                    <div class="form-group">
                        <label>Usuario:</label>
                        <input type="text" name="usuario" class="form-control" placeholder="Exemplo">                                                
                    </div>                  
                    
                    <div class="form-group">
                        <label>Senha:</label>
                        <input type="password" name="senha" class="form-control" placeholder="********">                                                
                    </div>
                    <p class="text-center"><small>Ja possui uma conta? <a href="index.php">Logue-se aqui.</a></small></p>                                        

                    <div class="form-group">
                        <button type="submit" id="btn-login" class="form-control btn btn-dark">Cadastrar</button>   
                    </div>
                </form>

            </div>      
        </div>
    
    </div>

</div>


    
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/xhttp.js"></script>
<script src="js/cadastro.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>