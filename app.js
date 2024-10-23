
function validarForm() {
    const formEmail = document.querySelector('#formEmail');
    const formMensagem = document.querySelector('#formMensagem');
    const formPais = document.querySelector('#formPais');


    const formEmailValue = formEmail.value;
    const formMensagemValue = formMensagem.value;
    const formPaisValue = formPais.value;
    

    let flagFocus = false;
    let textoErro = "";

    if (formEmailValue == "") {
        textoErro += "\nFalta preencher o Email!!";
        formEmail.classList.add("input-red");
        formEmail.foucus();
        flagFocus = true;
    } else {
        formEmail.classList.remove("input-red");
    }

    if (formMensagemValue == "") {
        textoErro += "\nFalta preencher o Mensagem!!";
        formMensagem.classList.add("input-red");
        if (!flagFocus) {
            formMensagem.focus();
            flagFocus = true;
        }
    } else if (formMensagemValue.length < 10) {
        textoErro += "\nMensagem deve ter 10 ou mais caracteres!!";
        formMensagem.classList.add("input-red");
        if (!flagFocus) {
            formMensagem.focus();
            flagFocus = true;
        }
    } else {
        formMensagem.classList.remove("input-red");
    }

    if (formPaisValue == "") {
        textoErro += "\nFalta escolher o País!!";
        formPais.classList.add("input-red");
        if (!flagFocus) {
            formPais.focus();
        }

    } else {
        formPais.classList.remove("input-red");
    }

    if (textoErro != "") {
        alert(textoErro);
        return false;
    }

}


