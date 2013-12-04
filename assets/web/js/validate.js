function validate() {
        if(document.getElementById("lido").checked) {
            document.getElementById("go").innerHTML="<input type='submit' name='yt0' value='Cadastrar'>";
        } else {
            document.getElementById("go").innerHTML="<input type='submit' name='yt0' value='Cadastrar' disabled='true'>";
        }
};