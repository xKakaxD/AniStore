function validaLogin(){ //Função responsável pelo tratamento

    var login = document.getElementById("login").value;
    var senha = document.getElementById("senha").value;
   

    if (login === "" ||  senha === "" ) {
        alert("Preencha os campos corretamente");
        return false;

    } else {
        // Se todos os campos estiverem preenchidos, envie o formulário
        document.getElementById("loginForm").submit();
    }


}