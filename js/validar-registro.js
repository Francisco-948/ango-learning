        function validarFormulario() {
            var nome = document.getElementById("nome").value;
            var email = document.getElementById("email").value;
            var senha = document.getElementById("senha").value;
            var senha2 = document.getElementById("senha2").value;
            
            // Limpar mensagens de erro anteriores
            document.getElementById("error-nome").innerHTML = "";
            document.getElementById("error-email").innerHTML = "";
            document.getElementById("error-senha").innerHTML = "";
            document.getElementById("error-senha2").innerHTML = "";
            
            var hasErrors = false;
            
            if (nome === "") {
                document.getElementById("error-nome").innerHTML = "Campo obrigatório.";
                hasErrors = true;
            }
            if (email === "") {
                document.getElementById("error-email").innerHTML = "Campo obrigatório.";
                hasErrors = true;
            }
            if (senha === "") {
                document.getElementById("error-senha").innerHTML = "Campo obrigatório.";
                hasErrors = true;
            }
            if (senha2 === "") {
                document.getElementById("error-senha2").innerHTML = "Campo obrigatório.";
                hasErrors = true;
            }
            
            if (senha !== senha2) {
                document.getElementById("error-senha2").innerHTML = "As senhas não coincidem. Tente novamente.";
                hasErrors = true;
            }
            
            if (hasErrors) {
                return false; // Impede o envio do formulário
            }
            
            return true; // Permite o envio do formulário se a validação for bem-sucedida
        }