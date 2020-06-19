window.onload = function(){

    var form_cadastro = document.querySelector("#form-cadastro");

    form_cadastro.onsubmit = function(){

        event.preventDefault();
        console.log("Click");

        event.preventDefault();
        var form = new FormData(form_cadastro);

        xmlHttpPost("metodos/cadastrar", function(){

            success(function(){

                var response = xhttp.responseText;
                
                if (response == "sucesso"){

                    Toastify({
                        text: "Cadastrado com sucesso. <br> Redirecionando...",
                        duration: 1500,                     
                        newWindow: true,
                        close: false,
                        gravity: "top", // `top` or `bottom`
                        position: 'right', // `left`, `center` or `right`
                        backgroundColor: "linear-gradient(to right, #27ae60, #2ecc71)",
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        onClick: function(){} // Callback after click
                      }).showToast(); 

                    setTimeout(() => {
                        window.location.href = "index.php";
                    }, 2000);


                }else if (response == "usuario ja cadastrado"){

                    Toastify({
                        text: "Esse usúario já esta cadastrado",
                        duration: 4500,                     
                        newWindow: true,
                        close: true,
                        gravity: "top", // `top` or `bottom`
                        position: 'right', // `left`, `center` or `right`
                        backgroundColor: "linear-gradient(to right, #e74c3c, #c0392b)",
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        onClick: function(){} // Callback after click
                      }).showToast();

                }else if (response == "senha curta"){

                    Toastify({
                        text: "Sua senha deve ter 8 ou mais Caracteres ",
                        duration: 4500,                     
                        newWindow: true,
                        close: true,
                        gravity: "top", // `top` or `bottom`
                        position: 'right', // `left`, `center` or `right`
                        backgroundColor: "linear-gradient(to right, #e74c3c, #c0392b)",
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        onClick: function(){} // Callback after click
                      }).showToast();

                }


            });

        }, form);


    }



}