function numeros(e)
{
    // console.log(e)
    // console.log(document.all)
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
    var Nom1 = document.getElementById("Nom1").value;
    var Nom2 = document.getElementById("Nom2").value;
    var App= document.getElementById("App").value;
    var Mail= document.getElementById("Mail").value;
    var telefono = document.getElementById("telefono").value;
    var rol= document.getElementById("rol");
<<<<<<< HEAD
    var sexo = document.getElementsByName("sexo");

    if(doc.length == 0  || Nom.length==0 || App.length==0 || Mail.length==0|| rol.value==""||telefono.length==0)
=======
    var mail2= document.getElementById("Mail2").value;
    var index= mail2.indexOf(".");
    var mail= Mail.length;
    console.log(". ="+index);
    console.log("lenght:"+mail)
    if(doc.length == 0  || Nom1.length==0 ||Nom2.length==0 || App.length==0 || Mail.length==0|| rol.value=="" || mail2.length==0)
>>>>>>> e9253ea575ab886a034c5c77daf34cba18795ab9
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
<<<<<<< HEAD

    }else
=======
    }
    if(doc.length <5 )
>>>>>>> e9253ea575ab886a034c5c77daf34cba18795ab9
    {
        if (f==true) 
        {
            var nose = document.getElementById("Mail");
            nose.addEventListener('blur', function(){
                if(Mail == "1@a.algo"){
                    alert("AAAA")
                }else{
                    alert("EEEEE")
                }
            });
            
            document.getElementById("error").innerHTML = '<div class="borde1" id="error"><b>El número de documento no puede tener menos de cinco digitos</b></div>';
            document.getElementById("doc").focus();
            f=false;
        }else
        {
            document.getElementById("error").innerHTML = '<div class="borde" id="error"><b>El número de documento no puede tener menos de cinco digitos</b></div>';
            document.getElementById("doc").focus();
            f=true;
        }
        return false;
    }
    if (index != "-1") 
    {
        if(mail2.indexOf('.') == 0){
            document.getElementById("error").innerHTML = '<div class="borde" id="error"><b>el "." debe tener algo antes y despues de él</b></div>';
            document.getElementById("Mail2").focus();
            return false;
        }else{
            console.log("Sí HAY PUNTO")
            var final_mail = Mail+"@"+mail2;
            alert(final_mail)
            document.getElementById("Mail").innerHTML='<input class="form-control  col-6 offset-1" type="text" name="correo" id="Mail" value="'+final_mail+'">';
        }
    }else
    {
        document.getElementById("error").innerHTML = '<div class="borde" id="error"><b>Por favor, verifique su email, ya que debe tener un punto después del "@"</b></div>';
        document.getElementById("Mail2").focus();
        console.log("NO HAY UN PUNTO")
        return false;
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