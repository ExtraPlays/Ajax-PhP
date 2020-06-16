window.onload = function(){



    var form_logar = document.querySelector("#logar");    
    var avatar = document.querySelector("#user-image");
    
    

    //setInterval(() => {
      //  mensagens();
    //}, 1000);    

    form_logar.onsubmit = function(){

        event.preventDefault();
        var form = new FormData(form_logar);

        xmlHttpPost("metodos/logar", function(){

            success(function(){                                

                
                var response = xhttp.responseText;

                console.log(xhttp);

                if (response == "ok"){

                    Toastify({
                        text: "Voce acabou de fazer login",
                        duration: 1500,                     
                        newWindow: true,
                        close: false,
                        gravity: "top", // `top` or `bottom`
                        position: 'right', // `left`, `center` or `right`
                        backgroundColor: "linear-gradient(to right, #27ae60, #2ecc71)",
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        onClick: function(){} // Callback after click
                      }).showToast();                                          

                      xmlHttpGet("metodos/avatar", function(){                        

                        success(function(){
                            
                            setTimeout(() => {
                                console.log(xhttp);
                                avatar.innerHTML = '<img src="' + xhttp.responseText + '" class="rounded-circle shadow-lg" width="200px" height="200px">';                                
                            }, 500);


                        });

                      });
                        

                }else if (response == "dados invalidos"){

                    Toastify({
                        text: "Dados invalidos tente novamente. Ou talvez o usuario não existe em nosso banco de dados",
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
