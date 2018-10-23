function numeros(e){
    console.log(e)
    // console.log(document.all)
    // tecla = (document.all) ? e.keyCode : e.which;
    if (document.all){
        tecla = e.keyCode;
    }else{
        tecla = e.which;
    }
    if (tecla==8) return true; // 3{}
    patron =/[\d]/;
    te = String.fromCharCode(tecla); // 5
    return patron.test(te);
}
var cont=true;

var validar = function(){
    var doc = document.getElementById("doc").value;
    var Nom = document.getElementById("Nom").value;
    var App= document.getElementById("App").value;
    var Mail= document.getElementById("Mail").value;
    var rol= document.getElementById("rol");
    if(doc.length == 0  || Nom.length==0 || App.length==0 || Mail.length==0|| rol.value==""){
        document.getElementById("error").innerHTML = '<div id="error"><b>Por favor, verifique si tiene campos vacíos.</b></div>';
        if(cont==true){
            document.getElementById("error").style.color ="black";
            document.getElementById("error").style.border="3px solid black";
            cont=false;
        }else{
            document.getElementById("error").style.border="3px solid red";
            cont=true;
        }
        return false;
    }else{
        alert("Datos envíados");
        return true;
        }
    }