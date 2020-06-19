var form_senha = document.querySelector("#form-senha");
var btn_sair = document.querySelector("#btn-sair");


form_senha.onsubmit = function(){

    event.preventDefault();


    var form = new FormData(form_senha);
    xmlHttpPost("../metodos/senha", function(){


        success(function(){

            response = JSON.parse(xhttp.responseText);

            console.log(response.response);

            if (response.response == "sucesso"){
                form_senha.reset();

                Toastify({
                    text: "Senha alterada com sucesso!",
                    duration: 1500,                     
                    newWindow: true,
                    close: false,
                    gravity: "top", // `top` or `bottom`
                    position: 'right', // `left`, `center` or `right`
                    backgroundColor: "linear-gradient(to right, #27ae60, #2ecc71)",
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    onClick: function(){} // Callback after click
                  }).showToast();

            }else if (response.response == "senha pequena"){

                form_senha.reset();

                Toastify({
                    text: "Sua senha deve ter 8 ou mais caracteres",
                    duration: 4500,                     
                    newWindow: true,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: 'right', // `left`, `center` or `right`
                    backgroundColor: "linear-gradient(to right, #e74c3c, #c0392b)",
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    onClick: function(){} // Callback after click
                  }).showToast();

            }else if (response.response == "senhas diferentes"){

                form_senha.reset();

                Toastify({
                    text: "As senhas não coincidem",
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


btn_sair.onclick = function(){

    console.log("click");
    window.location.href = "../metodos/sair.php";

}