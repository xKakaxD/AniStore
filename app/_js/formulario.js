function validaForm(){ //Função responsável pelo tratamento

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    if (name === "" ||  email === "" ||  message === "") {
        alert("Preencha os campos corretamente");
        return false;

    } else {
        // Se todos os campos estiverem preenchidos, envie o formulário
        document.getElementById("contatoForm").submit();
    }


}