function numeros(e)
{
    console.log(e)
    console.log(document.all)
    tecla = (document.all) ? e.keyCode : e.which;
    // if (document.all)
    // {
    //     tecla = e.keyCode;
    // }else
    // {
    //     tecla = e.which;
    // }
    if (tecla==8) return true; // 3{}
    patron =/[\d]/;
    te = String.fromCharCode(tecla); // 5
    return patron.test(te);
}
var cont=true;
var f= true;
    
var validar = function()
{
    var doc = document.getElementById("doc").value;
    var Nom = document.getElementById("Nom").value;
    var App= document.getElementById("App").value;
    var Mail= document.getElementById("Mail").value;
    var telefono = document.getElementById("telefono").value;
    var rol= document.getElementById("rol");
    var sexo = document.getElementsByName("sexo");

    if(doc.length == 0  || Nom.length==0 || App.length==0 || Mail.length==0|| rol.value==""||telefono.length==0)
    {
        if(cont==true)
        {
            document.getElementById("error").style.color ="black";
            document.getElementById("error").innerHTML='<div class="borde1" id="error"><b>Por favor, verifique si tiene campos vacíos.</b></div>';
            cont=false;
        }else
        {
            document.getElementById("error").innerHTML = '<div class="borde" id="error"><b>Por favor, verifique si tiene campos vacíos.</b></div>';
            cont=true;
        }
        return false;

    }else
    {
        if(doc.length <5 )
        {
            if (f==true) {
                document.getElementById("error").innerHTML = '<div class="borde1" id="error"><b>El número de documento no puede tener menos de cinco digitos</b></div>';
                document.getElementById("doc").focus();
                f=false;
            }else{
                document.getElementById("error").innerHTML = '<div class="borde" id="error"><b>El número de documento no puede tener menos de cinco digitos</b></div>';
                document.getElementById("doc").focus();
                f=true;
            }
            return false;
        }else
        {
            alert("Datos envíados");
            return true;
        }
    }

    if (document.getElementById("Hombre").checked==true || document.getElementById("Mujer").checked[1]==true) {
        alert("lo que sea")


        }
        else{
             alert("Seleccione el sexo con el que nacio");
             return false;
    }
}









    if (telefono.length<7||telefono.length) {
        document.getElementById("error").innerHTML = '<div class="borde1" id="error"><b>Su telefono fijo no puede tener mas de 7 numeros</b></div>';
    }
    else if (telefono.length) {}