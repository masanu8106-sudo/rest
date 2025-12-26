mess1.onkeyup = cenzor;
function cenzor(){
    var stroka = document.getElementById('mess1').value;
    stroka= stroka.replace(/козел/gi, '*****');
    stroka = stroka.replace(/дурак/gi, '*****');
    document.getElementById('mess1').value = stroka;
}