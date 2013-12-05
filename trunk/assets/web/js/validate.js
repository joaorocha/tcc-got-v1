function validate() {
        if(document.cadastro.lido.checked) {
            document.getElementById("go").innerHTML="<input type='submit' name='yt0' value='Cadastrar'>";
        } else {
            document.getElementById("go").innerHTML="Você precisa concordar com os termos para continuar";
        }
};