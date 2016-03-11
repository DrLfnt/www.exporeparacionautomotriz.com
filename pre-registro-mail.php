<?php
include('config.php');
include 'inyeccion.php' ; 

///consulta de datos registrados en el 2014///////////////////////////
$_GET['result211']=mysql_query("SELECT * FROM  tb_registro2015 WHERE id_registro='$_GET[id_registro]' ");
while($vec=mysql_fetch_array($_GET['result211'])){
		   $_GET['id']=$vec[0];
		 	$_GET['nombre1']=$vec[1];
			$_GET['nombre2']=$vec[2];
			$_GET['appaterno']=$vec[3];
			$_GET['apmaterno']=$vec[4];
			$_GET['compania']=$vec[5];
			$_GET['cargo']=$vec[6];
			$_GET['giro']=$vec[7];
			$_GET['sector']=$vec[8];
			$_GET['direccion']=$vec[9];
			$_GET['colonia']=$vec[10];
			$_GET['ciudad']=$vec[11];
			$_GET['municipio']=$vec[12];
			$_GET['estado']=$vec[13];
			$_GET['cp']=$vec[14];
			$_GET['pais']=$vec[15];
			$_GET['tel1']=$vec[16];
			$_GET['tel2']=$vec[17];
			$_GET['mail']=$vec[18];
			$_GET['edad']=$vec[59];
			///// preguntas ////////////////
			
			$_GET['a']=$vec[19];
			
			$_GET['b']=$vec[20];
			
			
			if($vec[21]=="Invitacion impresa"){
			 $_GET['c1']="checked='checked'";
				}
			if($vec[22]=="Recomendacion de un conocido"){
				$_GET['c2']="checked='checked'";
				}
			if($vec[23]=="Invitacion de un expositor"){
				$_GET['c3']="checked='checked'";
				}
			    if($vec[24]=="Revista especializada"){
				$_GET['c4']="checked='checked'";
				}$_GET['otroc4']=$vec[25];
			
				if($vec[26]=="Periodico"){
				$_GET['c5']="checked='checked'";
				}$_GET['otroc5']=$vec[27];
			
				if($vec[28]=="Radio"){
				$_GET['c6']="checked='checked'";
				}$_GET['otroc6']=$vec[29];
			
				if($vec[30]=="Pagina web del evento"){
				$_GET['c7']="checked='checked'";
				}
				
				if($vec[31]=="Correo electronico"){
				$_GET['c8']="checked='checked'";
				}
				
				if($vec[32]=="Facebook"){
				$_GET['c9']="checked='checked'";
				}
				
				if($vec[33]=="Twitter"){
				$_GET['c10']="checked='checked'";
				}
				
				if($vec[34]=="Otro"){
				$_GET['c11']="checked='checked'";
				}$_GET['otroc11']=$vec[35];
						
				
								
				
				if($vec[36]=="Pintura Automotriz"){
				$_GET['d1']="checked='checked'";
				}
				if($vec[37]=="Equipos y Herramientas para el taller"){
				$_GET['d2']="checked='checked'";
				}
				if($vec[38]=="Materiales para la aplicacion de pintura"){
				$_GET['d3']="checked='checked'";
				}
				if($vec[39]=="Materiales para la reparacion de carroceria"){
				$_GET['d4']="checked='checked'";
				}
				if($vec[40]=="Cristales y parabrisas"){
				$_GET['d5']="checked='checked'";
				}
				if($vec[41]=="Componentes y partes electronicas"){
				$_GET['d6']="checked='checked'";
				}
				if($vec[42]=="Refacciones y/o  accesorios automotrices"){
				$_GET['d7']="checked='checked'";
				}
				if($vec[43]=="Productos para el mantenimiento automotriz"){
				$_GET['d8']="checked='checked'";
				}
				if($vec[44]=="Equipo de seguridad para el taller"){
				$_GET['d9']="checked='checked'";
				}
				if($vec[45]=="Consultoria de procesos para el taller"){
				$_GET['d10']="checked='checked'";
				}
				if($vec[46]=="Software de valuacion de danos"){
				$_GET['d11']="checked='checked'";
				}
				if($vec[47]=="Capacitacion gratuita"){
				$_GET['d12']="checked='checked'";
				}
				if($vec[48]=="Conocer nuevos productos"){
				$_GET['d13']="checked='checked'";
				}
				if($vec[49]=="Contacto con una compania de seguros"){
				$_GET['d14']="checked='checked'";
				}		
				if($vec[50]=="Distribucion o representacion"){
				$_GET['d15']="checked='checked'";
				}
				if($vec[51]=="Otro"){
				$_GET['d16']="checked='checked'";
				}
				$_GET['otrosinteres']=$vec[52];
				
				$_GET['e']=$vec[53];
		
		
		if($vec[54]=="Automovil"){
				$_GET['f1']="checked='checked'";
				}
		if($vec[55]=="Autobus"){
				$_GET['f2']="checked='checked'";
				}
		if($vec[56]=="Avion"){
				$_GET['f3']="checked='checked'";
				}
		if($vec[57]=="Otro"){
				$_GET['f4']="checked='checked'";
				}						
		
		$_GET['otrof']=$vec[58];
}
////////////////////////////////////////////////////////////



	
	
if( $_GET['NOMBRE1']!='' and $_GET['appaterno']!=''  and $_GET['apmaterno']!='' and $_GET['COMPANIA']!='' and  $_GET['CARGO']!='' and $_GET['GIRO']!='' and  $_GET['SECTOR']!='' and $_GET['DIRECCION']!='' and $_GET['COLONIA']!='' and $_GET['CP']!='' ){
	
	
	$_GET['sql']="SELECT mail FROM tb_registro2016  WHERE mail='$_GET[MAIL]' AND mail!=''";
	$_GET['result'] = mysql_query($_GET['sql']) or die ($_GET['sql'].mysql_error());	

		if (!$_GET['row']=mysql_fetch_array($_GET['result']))
			{

		//// Registro de Datos"; 
		
 $_GET['sql'] = "INSERT INTO tb_registro2016 ( id_registro, nombre1 ,nombre2,appaterno,apmaterno,  compania,  cargo,  giro,  sector ,  direccion,  colonia, cp , pais, estado, ciudad ,  municipio,  tel1 ,  tel2, mail ,  opcionA ,  opcionB ,  opcionC1 ,  opcionC2 ,  opcionC3 ,  opcionC4 ,  opcionC5,  opcionC6 ,  opcionC7,  opcionC8 , opcionC9 ,  opcionC10,  opcionC11 , otroc4,otroc5,otroc6,otroc11,
opcionD1,opcionD2,opcionD3,opcionD4,opcionD5,opcionD6,opcionD7,opcionD8,opcionD9,opcionD10,opcionD11,opcionD12,opcionD13,opcionD14,opcionD15,opcionD16,otrosinteres,  opcionE ,fecha_registro,edad,opcionF1,opcionF2,opcionF3,opcionF4,otroF,era2014,privacidad)";
				$_GET['sql'] .= "VALUES ('','$_GET[NOMBRE1]','$_GET[NOMBRE2]','$_GET[appaterno]','$_GET[apmaterno]','$_GET[COMPANIA]','$_GET[CARGO]','$_GET[GIRO]','$_GET[SECTOR]','$_GET[DIRECCION]','$_GET[COLONIA]','$_GET[CP]','$_GET[pais]','$_GET[estado]','$_GET[CIU]','$_GET[ciudad]','$_GET[TEL1]','$_GET[TEL2]','$_GET[MAIL]','$_GET[A]','$_GET[B]','$_GET[C1]','$_GET[C2]','$_GET[C3]','$_GET[C4]','$_GET[C5]','$_GET[C6]','$_GET[C7]','$_GET[C8]','$_GET[C9]','$_GET[C10]','$_GET[C11]','$_GET[otroc4]','$_GET[otroc5]','$_GET[otroc6]','$_GET[otroc11]','$_GET[D1]','$_GET[D2]','$_GET[D3]','$_GET[D4]','$_GET[D5]','$_GET[D6]','$_GET[D7]','$_GET[D8]','$_GET[D9]','$_GET[D10]','$_GET[D11]','$_GET[D12]','$_GET[D13]','$_GET[D14]','$_GET[D15]','$_GET[D16]','$_GET[CUALINTER]','$_GET[E]',NOW(),'$_GET[edad]','$_GET[F1]','$_GET[F2]','$_GET[F3]','$_GET[F4]','$_GET[otrof]','SI','$_GET[PRI]')";
				$_GET['result'] = mysql_query($_GET['sql']) or die ($_GET['sql'].mysql_error()) ;		
											
		/// Fin de Registro de Datos
	}else{
			$_GET['mensaje']="El Correo $_GET[MAIL] ya esta registrado!!!";
			print "<script>alert('$_GET[mensaje]')</script>";
			$_GET['impr']="no";
	}		
		
		}
	
	
/* echo"N&uacute;mero de visitas:";
$mypage = basename($PHP_SELF);
include "acountphp/acounter.php";
$ani_counter = new acounter();
echo $ani_counter->create_output();	 */
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>14ª Expo Reparación y Mantenimiento Automotriz</title>
    <meta name="description" content="14ª Expo Reparación y Mantenimiento Automotriz" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <link href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body id="index">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54074410-1', 'auto');
  ga('send', 'pageview');

</script>


	

<script type="text/javascript" src="http://exporeparacionautomotriz.com/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	cargar_paises();
	$("#pais").change(function(){dependencia_estado();});
	$("#estado").change(function(){dependencia_ciudad();});
	$("#estado").attr("disabled",true);
	$("#ciudad").attr("disabled",true);
});


function cargar_paises()
{
	$.get("Scripts/cargar-paises.php", function(resultado){
		if(resultado == false)
		{
			alert("Error");
		}
		else
		{
			$('#pais').append(resultado);			
		}
	});	
}
function dependencia_estado()
{
	var code = $("#pais").val();
	$.get("Scripts/dependencia-estado.php", { code: code },
		function(resultado)
		{
			if(resultado == false)
			{
				alert("Error");
			}
			else
			{
				$("#estado").attr("disabled",false);
				document.getElementById("estado").options.length=1;
				$('#estado').append(resultado);			
			}
		}

	);
}

function dependencia_ciudad()
{
	var code = $("#estado").val();
	$.get("Scripts/dependencia-ciudades.php?", { code: code }, function(resultado){
		if(resultado == false)
		{
			alert("Error");
		}
		else
		{
			$("#ciudad").attr("disabled",false);
			document.getElementById("ciudad").options.length=1;
			$('#ciudad').append(resultado);			
		}
	});	
	
}

function otroff(){
if(form1.F4.checked == false){
    form1.otrof.disabled=true;
}else{
    form1.otrof.disabled=false;
}
}




function otroc4_f(){
if(form1.C4.checked == false){
    form1.otroc4.disabled=true;
}else{
    form1.otroc4.disabled=false;
}
}


function otroc5_f(){
if(form1.C5.checked == false){
    form1.otroc5.disabled=true;
}else{
    form1.otroc5.disabled=false;
}
}
function otroc6_f(){
if(form1.C6.checked == false){
    form1.otroc6.disabled=true;
}else{
    form1.otroc6.disabled=false;
}
}
function otroc11_f(){
if(form1.C11.checked == false){
    form1.otroc11.disabled=true;
}else{
    form1.otroc11.disabled=false;
}
}



function checarcombo(){
if(form1.SECTOR.value=="OTRO"){
    form1.CUAL.disabled=false;
}else{
    form1.CUAL.disabled=true;
}
}

function checarcombo22(){
if(form1.CARGO.value=="OTRO"){
    form1.CUAL2.disabled=false;
}else{
    form1.CUAL2.disabled=true;
}
}

function checarcombo2(){
if(form1.A.value=="NINGUNA"){
	for (i=0; rad = form1.CLF[i]; i++)
    rad.disabled = true;	

}else{
	for (i=0; rad = form1.CLF[i]; i++)
		 rad.disabled = false;		 
}
}
function checarcombo3(){
if(form1.D16.checked == false){
    form1.CUALINTER.disabled=true;
}else{
    form1.CUALINTER.disabled=false;
}
}
function checkvalidate(checks) {
    for (i = 0; lcheck = checks[i]; i++) {
        if (lcheck.checked) {
            return true;
        }
    }
    return false;
}
function validararchivo(form1)
{
var error = "Por favor, antes de enviar el formulario,\ncomplete los siguientes campos:\n\n";
var a = ""

    if (form1.NOMBRE1.value == "") { a += "PRIMER NOMBRE\n"; }
	if (form1.appaterno.value == "") { a += "PRIMER APELLIDO\n"; }
	if (form1.apmaterno.value == "") { a += "SEGUNDO APELLIDO\n"; }
	if (form1.edad.value == "") { a += "EDAD\n"; }
	if (form1.COMPANIA.value == "") { a += "COMPANIA\n"; }
	
	if (form1.DIRECCION.value == "") { a += "DIRECCION\n"; }
    if (form1.COLONIA.value == "") { a += "COLONIA\n"; }
    if (form1.CP.value == "") { a += "CP\n"; }
  
	if (form1.CIU.value == "") { a += " CIUDAD\n"; }
    if (form1.TEL1.value == "") { a += " TELÉFONO\n"; }
	
	if ((form1.MAIL.value == "") ||
//Si no contiene un arroba
(form1.MAIL.value.indexOf('@') == -1) ||
//o un punto
(form1.MAIL.value.indexOf('.') == -1)) {
//lo informamos.
a += " FALTA CORREO O ESTA INCORRECTO \n";
}
	

	if (form1.C[0].checked == false && form1.C[1].checked == false && form1.C[2].checked == false && form1.C[3].checked == false && form1.C[4].checked == false && form1.C[5].checked == false && form1.C[6].checked == false && form1.C[7].checked == false && form1.C[8].checked == false && form1.C[9].checked == false && form1.C[10].checked == false  ) { a += "  PREGUNTA C)\n"; }	
	
	if (form1.C4.checked == true && form1.otroc4.value == "" ) { a += " C4: OTRO ¿CUÁL?\n"; }	
	if (form1.C5.checked == true && form1.otroc5.value == "" ) { a += " C5: OTRO ¿CUÁL?\n"; }	
	if (form1.C6.checked == true && form1.otroc6.value == "" ) { a += " C6: OTRO ¿CUÁL?\n"; }	
	if (form1.C11.checked == true && form1.otroc11.value == "" ) { a += " C11: OTRO ¿CUÁL?\n"; }	
		
	
	if (form1.D[0].checked == false && form1.D[1].checked == false && form1.D[2].checked == false && form1.D[3].checked == false && form1.D[4].checked == false && form1.D[5].checked == false && form1.D[6].checked == false && form1.D[7].checked == false && form1.D[8].checked == false && form1.D[9].checked == false&& form1.D[10].checked == false && form1.D[11].checked == false&& form1.D[12].checked == false&& form1.D[13].checked == false&& form1.D[14].checked == false&& form1.D[15].checked == false) { a += "  PREGUNTA D)\n"; }	
	
	if (form1.D16.checked == true && form1.CUALINTER.value == "" ) { a += " D: OTRO ¿CUÁL?\n"; }	
	


	if (form1.F[0].checked == false && form1.F[1].checked == false && form1.F[2].checked == false && form1.F[3].checked == false  ) { a += "  PREGUNTA F)\n"; }	
if (form1.F4.checked == true && form1.otrof.value == "" ) { a += " F4: OTRO ¿CUÁL?\n"; }	

if (form1.PRI[0].checked == false && form1.PRI[1].checked == false   ) { a += " Políticas de  privacidad\n"; }

	     
    
    if (a != "") { alert(error + a); return true; }
form1.submit()
}
</script>

<nav id="topNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#index">
                    <img class="visible-xs logotipoNav" src="images/erma-logotipo2.png" alt="ERMA">
                </a>
            </div>
            <div class="hidden-md hidden-lg col-sm-12 collapse" id="bs-navbar">
                <ul class="nav nav-pills nav-stacked">
                    <li><a class="page-scroll" class="navbar-toggle" data-toggle="collapse" data-target="#infoMenu">Información <span class="caret"></span></a></li>
                    <div id="infoMenu" class="collapse">
                        li><a class="page-scroll text-capitalize" href="index.html#informacion">&nbsp;&nbsp;&nbsp;&nbsp;Información General</a></li>
                        <li><a class="page-scroll text-capitalize" href="14-edicion-expo-reparacion-y-mantenimiento-automotriz-2016.html">&nbsp;&nbsp;&nbsp;&nbsp;14<sup>a</sup> Edición 2016</a></li>
                        <li><a class="page-scroll text-capitalize" href="estadisticas.html">&nbsp;&nbsp;&nbsp;&nbsp;Estadísticas</a></li>
                        <li><a class="page-scroll text-capitalize" href="index.html#organizador">&nbsp;&nbsp;&nbsp;&nbsp;Acerca del Organizador</a></li>
                    </div>

                    <li><a class="page-scroll" class="navbar-toggle" data-toggle="collapse" data-target="#expositoresMenu">Expositores <span class="caret"></span></a></li>
                    <div id="expositoresMenu" class="collapse">
                        <li><a class="page-scroll text-capitalize" href="porque-participar-en-erma.html">&nbsp;&nbsp;&nbsp;&nbsp;¿Por qué participar?</a></li>
                        <li><a class="page-scroll text-capitalize" href="caracteristicas-del-stand.html">&nbsp;&nbsp;&nbsp;&nbsp;Caracteristicas del Stand</a></li>
                        <li><a class="page-scroll text-capitalize" href="plano-de-stands.html">&nbsp;&nbsp;&nbsp;&nbsp;Plano de Stands</a></li>
                    </div>

                    <li><a class="page-scroll" class="navbar-toggle" data-toggle="collapse" data-target="#visitantesMenu">Visitantes <span class="caret"></span></a></li>
                    <div id="visitantesMenu" class="collapse">
                        <li><a class="page-scroll text-capitalize" href="expositores-participantes.html">&nbsp;&nbsp;&nbsp;&nbsp;Expositores participantes</a></li>
                        <li><a class="page-scroll text-capitalize" href="atracciones-en-el-evento.html#demostracion">&nbsp;&nbsp;&nbsp;&nbsp;Zona de Demostración</a></li>
                        <li><a class="page-scroll text-capitalize" href="atracciones-en-el-evento.html#capacitacion">&nbsp;&nbsp;&nbsp;&nbsp;Zona de Capacitación</a></li>
                        <li><a class="page-scroll text-capitalize" href="novedades.html">&nbsp;&nbsp;&nbsp;&nbsp;Novedades</a></li>
                    </div>

                    <li><a class="page-scroll" class="navbar-toggle" data-toggle="collapse" data-target="#galeriaMenu">Galería <span class="caret"></span></a></li>
                    <div id="galeriaMenu" class="collapse">
                        <li><a class="page-scroll text-capitalize" href="videos-erma.html">&nbsp;&nbsp;&nbsp;&nbsp;Videos</a></li>
                        <li><a class="page-scroll text-capitalize" href="fotos-erma.html">&nbsp;&nbsp;&nbsp;&nbsp;Fotos</a></li>
                        <li><a class="page-scroll text-capitalize" href="wallpapers.html">&nbsp;&nbsp;&nbsp;&nbsp;Descargas</a></li>
                    </div>

                    <li><a class="pre-registro-active page-scroll active" href="pre-registro.php">Pre-Registro</a></li>

                    <li><a class="page-scroll" href="general-information.html">English Information</a></li>

                    <li><a class="page-scroll" href="http://www.clubsameva.com/Externos/ExpoRepAutomotriz/Mailing_13aExpoRepAutomotriz.html">Hoteles y Aerolineas</a></li>
                    <li><br></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="menuRafa container-fluid col-md-12" style="height: 120px; background-color: #FFFFFF; z-index: 3; position: fixed;">
        <div class="container col-md-12">
            <div class="pull-left">
                <a class="navbar-brand page-scroll" href="index.html">
                    <img src="images/erma-logotipo2.png" style="width: 150px;" alt="Expo Reparación y Mantenimiento">
                </a>
            </div>
            <div class="pull-right">
                <h4 style="margin-top:20px;" class="pull-right">
                    <span style="color: #190707; font-weight: bold;">MARZO</span> <span style="color: #c2272d; margin-right: 70px;">10, 11 y 12</span>
                    <span style="color: #190707; font-weight: bold;">FALTAN:</span>&nbsp;<span style="color: #c2272d; margin-right: 70px;">
                    <script>
                        TargetDate = "03/10/2016 11:00 AM";
                        BackColor = "transparent";
                        ForeColor = "#c2272d";
                        CountActive = true;
                        CountStepper = -1;
                        LeadingZero = true;
                        DisplayFormat = "%%D%% Días, %%H%%:%%M%%:%%S%%";
                        FinishMessage = "COMENZAMOS!!!";
                    </script>
                    <script src="js/countDown.js"></script>
                    </span>
                    <a href="https://www.facebook.com/ERMA2016/" target="_blank"><img style="width: 30px;" src="images/facebook.png"></a>
                    <a href="https://twitter.com/ERMA2016" target="_blank"><img style="width: 30px;" src="images/twitter.png"></a>
                    <a href="https://www.youtube.com/user/CESVITV" target="_blank"><img style="width: 30px;" src="images/youtube.png"></a>
                    
                </h4>
                <div class="navbar-collapse collapse" id="bs-navbar">
                    <ul style="border-top:3px solid #c2272d; position:absolute; top:67px; right:0px; font-size:0.87em; font-weight: bold;" class="pull-right nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a style="color: #000!important;" href="informacion.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Información <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="page-scroll" href="index.html#informacion">Información general</a></li>
                                <li><a class="page-scroll" href="14-edicion-expo-reparacion-y-mantenimiento-automotriz-2016.html">14<sup>a</sup> Edición 2016</a></li>
                                <li><a class="page-scroll" href="estadisticas.html">Estadísticas</a></li>
                                <li><a class="page-scroll" href="index.html#organizador">Acerca del organizador</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a style="color: #000!important;" href="porque-participar-en-erma.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Expositores <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="page-scroll" href="porque-participar-en-erma.html">¿Por qué participar?</a></li>
                                <li><a class="page-scroll" href="caracteristicas-del-stand.html">Características del stand</a></li>
                                <li><a class="page-scroll" href="plano-de-stands.html">Plano de Stands</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a style="color: #000!important;" href="expositores-participantes.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Visitantes <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="page-scroll" href="expositores-participantes.html">Expositores participantes</a></li>
                                <li><a class="page-scroll" href="atracciones-en-el-evento.html#demostracion">Zona de demostración</a></li>
                                <li><a class="page-scroll" href="atracciones-en-el-evento.html#capacitacion">Zona de capacitación</a></li>
                                <li><a class="page-scroll" href="novedades.html">Novedades</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a style="color: #000!important;" href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galería <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="page-scroll" href="videos-erma.html">Videos</a></li>
                                <li><a class="page-scroll" href="fotos-erma.html">Fotos</a></li>
                                <li><a class="page-scroll" href="wallpapers.html">Descargas</a></li>
                            </ul>
                        </li>
                        <li style="background: #c2272d!important; color: !important;" class="dropdown">
                            <a style="color: #fff!important;" class="active page-scroll" href="pre-registro.php">Pre-Registro</a>
                        </li>
                        <li class="dropdown">
                            <a style="color: #000!important;" href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">English info <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="page-scroll" href="general-information.html">General Information</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a style="color: #000!important;" href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hoteles y Aerolineas <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div style="width:100%; max-width:300px; min-width:200px; min-height:110px; margin:10px auto; text-align:center; vertical-align:middle; border:1px solid #290147; border-radius:10px; background-color:#85559a; background: -webkit-linear-gradient(#c697cb, #48186d);background: -moz-linear-gradient(#c697cb, #48186d); background: linear-gradient(#c697cb, #48186d);"><div style="width:100%; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#FFFFFF; text-shadow:1px 1px 0px #46166b; display:inline-block;">Planee su visita a la Expo<br /><strong>con tarifas preferenciales</strong></div><div style="width:99%; min-height:50px; margin:5px 0px 0px 0px; padding:0px; display:inline-block; float:left;"><a href="http://www.clubsameva.com/Externos/ExpoRepAutomotriz/Mailing_13aExpoRepAutomotriz.html" target="_blank" style="font-family:Arial, Helvetica, sans-serif; color:#FFFFFF; text-shadow:1px 1px 0px #46166b; text-decoration:none;"><img src="http://gsameva.com/upload/images/hotelSameva.png" width="60" height="40" /><div class="texto" style="font-size:12px; font-weight:bold;">Hoteles</div></a></div></div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

	<section class="bg-pre-registro" style="padding: 160px 0;" id="preRegistro">
	        <div class="container">
				<div class="row white">
					<h2 class="text-center margin-top-0">
						PRE-REGISTRO
					</h2>
					
					<div class="col-md-12">
						

    <form name="impr"  method="get" >
     <p>&nbsp;</p>
     <table width="904" border="0" cellpadding="0" cellspacing="0">
       <tr>
          <td><div align="right" class="style11">
           
          </div></td>
        </tr>
        <tr>
          <td><div align="right" class="style11">
            <div align="left">
              <p>Nota: &quot;Evitar abreviaturas,puntos,comas y acentos&quot;</p>
</div>
          </div></td>
        </tr>
        <tr>
          <td><div align="right" class="style11">
            <div align="left">*Datos Obligatorios. </div>
          </div></td>
        </tr>
        <tr>
          <td  align="left"><a href="Bases.pdf"  target="_blank">Bases de participación para ganarte cuatro Mini Ipad</a></td>
        </tr>
        <tr>
          <td  align="left"><a href="bases_hotel.pdf"  target="_blank">Bases para el sorte de 3 estancias en hotel Fiesta Americana </a></td>
        </tr>
       
    </table>

      <p><br />
      </p>
</form>
    <form  method="get"  name="form1" >
    <input name="id_registro" type="hidden" value="<?= $_GET['id_registro']; ?>" />
      <table width="905" border="0" align="left" cellpadding="0" cellspacing="0">
        <tr>
          <td width="466" ><div align="right"></div></td>
          <td width="439" ><div align="right"></div></td>
        </tr>
        <tr>
          <td ><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td width="128" height="28" align="left"><strong>* PRIMER NOMBRE:</strong></td>
              <td width="338" align="left"><label>
                <input name="NOMBRE1" type="text" id="NOMBRE1" onChange="javascript:this.value=this.value.toUpperCase();" size="50" value="<?=  $_GET['nombre1']; ?>" style="color:#000" />
              </label></td>
            </tr>
             <tr>
              <td width="128" height="28" align="left"><strong> SEGUNDO NOMBRE:</strong></td>
              <td width="338" align="left"><label>
                <input name="NOMBRE2" type="text" id="NOMBRE2" onChange="javascript:this.value=this.value.toUpperCase();" size="50" style="color:#000" value="<?=  $_GET['nombre2']; ?>" />
              </label></td>
            </tr>
             <tr>
              <td width="128" height="28" align="left"><strong>* PRIMER APELLIDO:</strong></td>
              <td width="338" align="left"><label>
                <input name="apmaterno" type="text" id="apmaterno" onChange="javascript:this.value=this.value.toUpperCase();" size="50" value="<?= $_GET['apmaterno']; ?>" style="color:#000"/>
                <input name="appaterno" type="text" id="appaterno" onChange="javascript:this.value=this.value.toUpperCase();" size="50"  value="<?= $_GET['appaterno']; ?>" style="color:#000"/>
              </label></td>
            </tr>
             <tr>
              <td width="128" height="28" align="left"><strong>* SEGUNDO APELLIDO:</strong></td>
              <td width="338" align="left">&nbsp;</td>
            </tr>
             <tr>
              <td width="128" height="28" align="left"><strong>*EDAD:</strong></td>
              <td width="338" align="left"><label>
                <input name="edad" type="text" id="edad" onChange="javascript:this.value=this.value.toUpperCase();" size="5"  value="<?= $_GET['edad']; ?>" style="color:#000"/>
              </label></td>
            </tr>
            <tr>
              <td height="28" align="left"><strong>*COMPAÑIA:</strong></td>
              <td align="left"><label>
                <input name="COMPANIA" type="text" id="COMPANIA" onChange="javascript:this.value=this.value.toUpperCase();" size="50"  value="<?= $_GET['compania']; ?>" style="color:#000"/>
              </label></td>
            </tr>
             <tr>
              <td height="28" align="left"><strong>*CARGO:</strong></td>
              <td align="left"><label>
                <select name="CARGO"   onchange="checarcombo22();" style="color:#000" >
                  <option value="<?= $_GET['cargo']; ?>"><?= $_GET['cargo']; ?></option>
                   	 <option value="PROPIETARIO">PROPIETARIO</option>
                     <option value="SOCIO">SOCIO</option>
                     <option value="INVERSIONISTA">INVERSIONISTA</option>
                     <option value="DIRECTOR GENERAL / AREA">DIRECTOR GENERAL / AREA</option>
                     <option value="GERENTE GENERAL / AREA">GERENTE GENERAL / AREA</option>
                     <option value="JEFE ">JEFE </option>
                     <option value="SUPERVISOR">SUPERVISOR</option>
                     <option value="ANALISTA / AUXILIAR">ANALISTA / AUXILIAR</option>
                     <option value="ADMINISTRATIVO">ADMINISTRATIVO</option>
                     <option value="VENDEDOR">VENDEDOR</option>
                     <option value="CAPACITADOR">CAPACITADOR</option>
                     <option value="ASISTENTE AREA">ASISTENTE AREA</option>
                     <option value="AJUSTADOR">AJUSTADOR</option>
                     <option value="VALUADOR">VALUADOR</option>
                     <option value="AGENTE DE SEGUROS">AGENTE DE SEGUROS</option>
                     <option value="ASESOR DE SERVICIO">ASESOR DE SERVICIO</option>
                     <option value="ALMACENISTA">ALMACENISTA</option>
                     <option value="HOJALATERO">HOJALATERO</option>
                     <option value="PINTOR">PINTOR</option>
                     <option value="AYUDANTE GENERAL">AYUDANTE GENERAL</option>
                     <option value="MECANICO">MECANICO</option>
                     <option value="MANTENIMIENTO">MANTENIMIENTO</option>
                     <option value="ESTUDIANTE">ESTUDIANTE</option>
                     <option value="ACOMPANANTE">ACOMPA&Ntilde;ANTE</option>
                   </select>
              </label></td>
            </tr>
           <!-- <tr>
              <td height="28" align="left"><strong>OTRO ¿CUÁL?:</strong></td>
              <td align="left"><label>
                <input name="CUAL2" type="text" disabled="disabled=true" onchange="javascript:this.value=this.value.toUpperCase();" size="50" />
              </label></td>
            </tr> -->
            
            <tr>
              <td height="28" align="left"><strong>*GIRO:</strong></td>
              <td align="left"><label>
                <select name="GIRO"   onchange="checarcombo();" style="color:#000" >
                     <option value="<?= $_GET['giro']; ?>"><?= $_GET['giro']; ?></option>
                     <option value="TALLER / AGENCIA AUTOMOTRIZ">TALLER / AGENCIA AUTOMOTRIZ</option>
                     <option value="COMPANIA DE SEGUROS">COMPA&Ntilde;ÍA DE SEGUROS</option>
                     <option value="PROVEEDOR DEL SECTOR">PROVEEDOR DEL SECTOR</option>
                     <option value="GOBIERNO">GOBIERNO</option>
                     <option value="ASOCIACION">ASOCIACION</option>
                     <option value="DE DISTRIBUCION">DE DISTRIBUCION</option>
                     <option value="DE PRODUCCION ">DE PRODUCCION </option>
                     <option value="DE SERVICIOS">DE SERVICIOS</option>
                     <option value="PROFESIONISTA INDEPENDIENTE">PROFESIONISTA INDEPENDIENTE</option>
                </select>
              </label></td>
            </tr>
             <tr>
              <td height="28" align="left"><strong>*SECTOR:</strong></td>
              <td align="left"><label>
                <select name="SECTOR"   onchange="checarcombo();" style="color:#000" >
                  <option value="<?= $_GET['sector']; ?>"><?= $_GET['sector']; ?></option>
                  <option value="PRIVADO">PRIVADO</option>
                  <option value="PUBLICO">PUBLICO</option>
                </select>
              </label></td>
            </tr>
            <!--<tr>
              <td height="28" align="left"><strong>OTRO ¿CUÁL?:</strong></td>
              <td align="left"><label>
                <input name="CUAL" type="text" disabled="disabled=true" onchange="javascript:this.value=this.value.toUpperCase();" size="50" />
              </label></td>
            </tr> -->
           
            
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table></td>
          <td><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td height="28" align="left"><strong>*DIRECCIÓN:</strong></td>
              <td align="left"><label>
                <input name="DIRECCION" type="text" id="DIRECCION" onChange="javascript:this.value=this.value.toUpperCase();" size="50" value="<?= $_GET['direccion']; ?>" style="color:#000"/>
              </label></td>
            </tr>
            <tr>
              <td height="28" align="left"><strong>*COLONIA:</strong></td>
              <td align="left"><label>
                <input name="COLONIA" type="text" id="COLONIA" onChange="javascript:this.value=this.value.toUpperCase();" size="50" value="<?= $_GET['colonia']; ?>" style="color:#000" />
              </label></td>
            </tr>
            <tr>
              <td height="28" align="left"><strong>*C.P.:</strong></td>
              <td align="left"><label>
                <input name="CP" type="text" id="CP" onChange="javascript:this.value=this.value.toUpperCase();" size="50" value="<?= $_GET['cp']; ?>" style="color:#000" />
              </label></td>
            </tr>
            <tr>
              <td width="115" height="28" align="left"><strong>*PAÍS:</strong></td>
              <td width="324" align="left"><select id="pais" name="pais" style="color:#000">
              
              <?php 
			  $_GET['result2111']=mysql_query("SELECT   pais.pais FROM   pais WHERE   pais.idpais ='$_GET[pais]' ");
		while($vec=mysql_fetch_array($_GET['result2111'])){
		   $_GET['nom_pais']=$vec[0];
		 }
			  ?>              
              
                <option value="<?= $_GET['pais']; ?>" ><?= $_GET['nom_pais']; ?> </option>
              </select>   </td>
            </tr>
            <tr>
              <td height="28" align="left"><strong>*ESTADO:</strong></td>
              <td align="left"><select id="estado" name="estado" style="color:#000">
                <?php 
			  $_GET['result26']=mysql_query("SELECT estado.estado FROM estado WHERE estado.idestado ='$_GET[estado]' ");
		while($vec21=mysql_fetch_array($_GET['result26'])){
		   $_GET['nom_estado']=$vec21[0];
		 }
			  ?>  
                <option value="<?= $_GET['estado']; ?>"><?= $_GET['nom_estado']; ?></option>
              </select></td>
            </tr>
            <tr>
              <td height="28" align="left"><strong>*MUNICIPIO:</strong></td>
              <td align="left"><select id="ciudad" name="ciudad" style="color:#000">
                <option value="<?= $_GET['municipio']; ?>""><?= $_GET['municipio']; ?></option>
              </select></td>
            </tr>
            <tr>
              <td height="28" align="left"><strong>*CIUDAD:</strong></td>
              <td align="left"><input name="CIU" type="text" id="CIU"  size="50" value="<?= $_GET['ciudad']; ?>" style="color:#000"/></td>
            </tr>
           
            <tr>
              <td height="28" align="left"><strong>*LADA + TELÉFONO:</strong></td>
              <td align="left"><input name="TEL1" type="text" id="TEL1"  onchange="javascript:this.value=this.value.toUpperCase();" size="50" value="<?= $_GET['tel1']; ?>" style="color:#000"/></td>
            </tr>
            <tr>
              <td align="left"><strong>EXTENSION: </strong></td>
              <td align="left"><input name="TEL2" type="text" id="TEL2" onChange="javascript:this.value=this.value.toUpperCase();" size="50" value="<?= $_GET['tel2']; ?>" style="color:#000"/></td>
            </tr>
             <tr>
              <td height="28" align="left"><strong>*E-MAIL:</strong></td>
              <td align="left"><input name="MAIL" type="text" id="MAIL"  size="50" value="<?= $_GET['mail']; ?>" style="color:#000"/></td>
            </tr>
             <tr>
               <td height="28" align="left">&nbsp;</td>
               <td align="left">&nbsp;</td>
             </tr>
          </table></td>
        </tr>
        <tr>
          <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="461" align="left"><strong><em>*a) ¿CUÁNTAS VECES HA ASISTIDO A LA EXPO REPARACIÓN AUTOMOTRIZ ?</em></strong></td>
            </tr>
            
            <tr>
              <td align="left"><label>
                <select name="A" id="A" style="color:#000">
                  <option value="<?= $_GET['a']; ?>"><?= $_GET['a']; ?></option>
                  <option value="NINGUNA , ES MI PRIMERA VEZ">NINGUNA, ES MI PRIMERA VEZ</option>
                  <option value="UNA VEZ">UNA VEZ</option>
                  <option value="DOS VECES">DOS VECES</option>
                  <option value="TRES VECES">TRES VECES</option>
                  <option value="CUATRO VECES">CUATRO VECES</option>
                  <option value="CINCO VECES">CINCO VECES</option>
                  <option value="SEIS VECES">SEIS VECES</option>
                  <option value="SIETE VECES">SIETE VECES</option>
                  <option value="OCHO VECES">OCHO VECES</option>
                  <option value="NUEVE VECES">NUEVE VECES</option>
                  <option value="DIEZ VECES">DIEZ VECES</option>
                   <option value="ONCE VECES">ONCE VECES</option>
                    <option value="DOCE VECES">DOCE VECES</option>
                     <option value="TRECE VECES">TRECE VECES</option>
                </select>
              </label></td>
            </tr>
             <tr>
              <td width="461" align="left"><p>&nbsp;</p>
              <strong><em>*b) ¿TIEMPO QUE TIENE DESTINADO PARA VISITAR LA EXPO ?</em></strong></td>
            </tr>
            
            <tr>
              <td align="left"><label>
                <select name="B" id="B" style="color:#000" >
                  <option value="<?= $_GET['b']; ?>"><?= $_GET['b']; ?></option>
                  <option value="UN DIA">UN DIA</option>
                  <option value="DOS DIAS">DOS DIAS</option>
                </select>
              </label></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="36" align="left"><strong><em>*c)¿POR CUÁL (ES) MEDIO (S) SE ENTERÓ DEL EVENTO?</em></strong></td>
            </tr>
            <tr>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25"><label>
                    <input name="C1" type="checkbox" id="C" value="Invitacion impresa"  <?= $_GET['c1']; ?>/>
                  </label></td>
                  <td width="424" align="left">Invitacion impresa</td>
                </tr>
                <tr>
                  <td><input name="C2" type="checkbox" id="C" value="Recomendacion de un conocido"  <?= $_GET['c2']; ?>/></td>
                  <td align="left">Recomendación de un conocido</td>
                </tr>
                <tr>
                  <td height="25"><input name="C3" type="checkbox" id="C" value="Invitacion de un expositor" <?= $_GET['c3']; ?> /></td>
                  <td align="left">Invitación de un expositor</td>
                </tr>
                <tr>
                  <td><input name="C4" type="checkbox" id="C" value="Revista especializada" onChange="otroc4_f();" <?= $_GET['c4']; ?> /></td>
                  <td align="left">Revista especializada</td>
                </tr>
                 <tr>
                  <td>&nbsp;</td>
                  <td align="left">¿Cuál?&nbsp;&nbsp;<input name="otroc4" type="text" disabled="disabled=true" id="otroc4" size="60"   value="<?= $_GET['otroc4']; ?>" style="color:#000" /></td>
                </tr>
                <tr>
                  <td><input name="C5" type="checkbox" id="C" value="Periodico" onChange="otroc5_f();" <?= $_GET['c5']; ?>/></td>
                  <td align="left">Periodico</td>
                </tr>
                 <tr>
                  <td>&nbsp;</td>
                  <td align="left">¿Cuál?&nbsp;&nbsp;<input name="otroc5" type="text" disabled="disabled=true" id="otroc5" size="60"  value="<?= $_GET['otroc5']; ?>" style="color:#000"/></td>
                </tr>
                <tr>
                  <td><input name="C6" type="checkbox" id="C" value="Radio"  onchange="otroc6_f();" <?= $_GET['c6']; ?>/></td>
                  <td align="left">Radio</td>
                </tr>
                 <tr>
                  <td>&nbsp;</td>
                  <td align="left">¿Cuál?&nbsp;&nbsp;<input name="otroc6" type="text" disabled="disabled=true" id="otroc6" size="60"  value="<?= $_GET['otroc6']; ?>" style="color:#000"/></td>
                </tr>
                <tr>
                  <td><input name="C7" type="checkbox" id="C" value="Pagina web del evento" <?= $_GET['c7']; ?>/></td>
                  <td align="left">Pagina web del evento</td>
                </tr>
                <tr>
                  <td><input name="C8" type="checkbox" id="C" value="Correo electronico" <?= $_GET['c8']; ?>/></td>
                  <td align="left">Correo electronico</td>
                </tr>
                <tr>
                  <td><input name="C9" type="checkbox" id="C" value="Facebook" <?= $_GET['c9']; ?>/></td>
                  <td align="left">Facebook</td>
                </tr>
                <tr>
                  <td><input name="C10" type="checkbox" id="C" value="Twitter" <?= $_GET['c10']; ?>/></td>
                  <td align="left">Twittero</td>
                </tr>
                <tr>
                  <td><input name="C11" type="checkbox" id="C" value="Otro"  onchange="otroc11_f();" <?= $_GET['c11']; ?> " /></td>
                  <td align="left">Otro</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td align="left"> ¿Cuál?:
                    <input name="otroc11" type="text" disabled="disabled=true" id="otroc11" size="52"   value="<?= $_GET['otroc11']; ?>" style="color:#000"/></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td align="left"><strong>¿Estas de acuerdo y acepto las <a href="http://www.cesvimexico.com.mx/avisodeprivacidad/" target="_new"><strong><em>políticas de  privacidad</em></strong></a> ?</strong></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td align="left"><table width="100" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><input name="PRI" type="radio" id="PRI" value="SI"  /></td>
                      <td>SI</td>
                      <td><input name="PRI" type="radio" id="PRI" value="NO"  /></td>
                      <td>NO</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td align="left">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
          
            
          </table></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left"><em><strong>*d) PRINCIPAL INTERÉS: </strong></em></td>
            </tr>
            <tr>
              <td height="40"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><label>
                    <input name="D1" type="checkbox" id="D" value="Pintura Automotriz" <?= $_GET['d1']; ?>/>
                  </label></td>
                  <td align="left">Pintura Automotriz</td>
                </tr>
                <tr>
                  <td><input name="D2" type="checkbox" id="D" value="Equipos y Herramientas para el taller"  <?= $_GET['d2']; ?>/></td>
                  <td align="left">Equipos y Herramientas para el taller</td>
                </tr>
                <tr>
                  <td><input name="D3" type="checkbox" id="D" value="Materiales para la aplicacion de pintura" <?= $_GET['d3']; ?>/></td>
                  <td  align="left">Materiales para la aplicación de pintura</td>
                </tr>
                <tr>
                  <td><input name="D4" type="checkbox" id="D" value="Materiales para la reparacion de carroceria" <?= $_GET['d4']; ?> /></td>
                  <td align="left"> Materiales para la reparación de carrocería</td>
                </tr>
                <tr>
                  <td><input name="D5" type="checkbox" id="D" value="Cristales y parabrisas" <?= $_GET['d5']; ?>/></td>
                  <td align="left">Cristales y parabrisas</td>
                </tr>
                <tr>
                  <td><input name="D6" type="checkbox" id="D" value="Componentes y partes electronicas" <?= $_GET['d6']; ?>/></td>
                  <td align="left">Componentes y partes electrónicas</td>
                </tr>
                <tr>
                  <td><input name="D7" type="checkbox" id="D" value="Refacciones y/o  accesorios automotrices" <?= $_GET['d7']; ?>/></td>
                  <td align="left">Refacciones y/o  accesorios automotrices</td>
                </tr>
                <tr>
                  <td><input name="D8" type="checkbox" id="D" value="Productos para el mantenimiento automotriz" <?= $_GET['d8']; ?>/></td>
                  <td align="left">Productos para el mantenimiento automotriz</td>
                </tr>
                <tr>
                  <td><input name="D9" type="checkbox" id="D" value="Equipo de seguridad para el taller" <?= $_GET['d9']; ?>/></td>
                  <td align="left">Equipo de seguridad para el taller </td>
                </tr>
                <tr>
                  <td><input name="D10" type="checkbox" id="D" value="Consultoria de procesos para el taller" <?= $_GET['d10']; ?>/></td>
                  <td align="left">Consultoría de procesos para el taller </td>
                </tr>
                <tr>
                  <td><input name="D11" type="checkbox" id="D" value="Software de valuacion de danos" <?= $_GET['d11']; ?>/></td>
                  <td align="left"> Software de valuacion de daños</td>
                </tr>
                <tr>
                  <td><input name="D12" type="checkbox" id="D" value="Capacitacion gratuita" <?= $_GET['d12']; ?>/></td>
                  <td align="left"> Capacitacion gratuita</td>
                </tr>
                <tr>
                  <td><input name="D13" type="checkbox" id="D" value="Conocer nuevos productos" <?= $_GET['d13']; ?>/></td>
                  <td align="left">Conocer nuevos productos </td>
                </tr>
                <tr>
                  <td><input name="D14" type="checkbox" id="D" value="Contacto con una compania de seguros" <?= $_GET['d14']; ?>/></td>
                  <td align="left">Contacto con una compañia de seguros</td>
                </tr>
                <tr>
                  <td><input name="D15" type="checkbox" id="D" value="Distribucion o representacion" <?= $_GET['d15']; ?>/></td>
                  <td align="left">Distribución o representación </td>
                </tr>
                <tr>
                  <td><input name="D16" type="checkbox" id="D" value="Otro"  onchange="checarcombo3();" <?= $_GET['d16']; ?>/></td>
                  <td align="left">Otro (¿Cuál?): </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td align="left"><strong>
                    <input name="CUALINTER" type="text" id="CUALINTER" size="60" disabled="disabled=true"  value="<?= $_GET['otrosinteres']; ?>" style="color:#000"/>
                  </strong></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="25" align="left"><strong><em>*e) NIVEL DE TOMA DE DECISIONES: </em></strong></td>
            </tr>
            <tr>
              <td align="left"><label>
                <select name="E" id="E" style="color:#000">
                  <option value="<?= $_GET['e']; ?>"><?= $_GET['e']; ?></option>
                  <option value="DECIDO">DECIDO</option>
                  <option value="EVALUO">EVALUO</option>
                  <option value="RECOMIENDO">RECOMIENDO</option>
                  <option value="NINGUNA DE LAS ANTERIORES">NINGUNA DE LOS ANTERIORES</option>
                </select>
              </label></td>
            </tr>
            <tr>
              <td align="left">&nbsp;</td>
            </tr>
            <tr>
              <td align="left"><strong><em>*f) ¿MEDIO DE TRANSPORTE QUE UTILIZARA PARA LLEGAR A LA EXPO?: </em></strong></td>
            </tr>
            <tr>
              <td align="left"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="8%"><input name="F1" type="checkbox" id="F" value="Automovil"  onchange="checarcombo3();" <?= $_GET['f1']; ?>/></td>
                  <td width="92%" align="left">Automovil</td>
                </tr>
                <tr>
                  <td><input name="F2" type="checkbox" id="F" value="Autobus"   <?= $_GET['f2']; ?>/></td>
                  <td align="left">Autobus</td>
                </tr>
                <tr>
                  <td><input name="F3" type="checkbox" id="F" value="Avion"  <?= $_GET['f3']; ?>/></td>
                  <td align="left">Avion</td>
                </tr>
                <tr>
                  <td><input name="F4" type="checkbox" id="F" value="Otro" onChange="otroff();"  <?= $_GET['f4']; ?>/></td>
                  <td align="left">Otro (¿Cuál?): </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td align="left"><label for="otrof"></label>
                    <input name="otrof" type="text" id="otrof" size="60" value="<?= $_GET['otrosinteres']; ?>" style="color:#000"/></td>
                </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="ENVIAR" type="button" id="ENVIAR" value=":::         ENVIAR         :::" onClick="validararchivo(form1)" style="color:#000"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
   <!--/*    <p>*Si te interesa informarte sobre las tarifas de hospedaje<a href="../hospedaje.html"> haz click  aquí.</a></p> */ -->
    </form>


					</div>
				</div>
			</div>
	    </section>
</body>
</html>

 
<?php

if( $_GET['NOMBRE1']!='' and $_GET['COMPANIA']!='' and  $_GET['DIRECCION']!='' and $_GET['COLONIA']!='' and  $_GET['ciudad']!='' and $_GET['MAIL']!='' and $_GET['TEL1']!='' and $_GET['CP']!='' and  $_GET['impr']==''  ){
 
					$_GET['result29']=mysql_query("SELECT id_registro, compania, tel1, CONCAT( NOMBRE1, ' ', NOMBRE2, ' ', APPATERNO, ' ', APMATERNO ) AS NOMBRE FROM  tb_registro2016 WHERE mail='$_GET[MAIL]'");
		   				while($vecf=mysql_fetch_array($_GET['result29'])){
							$_GET['id']=$vecf[0];					
							$_GET['COMPANIA']=$vecf[1];							
							$_GET['TELEFONO']=$vecf[2];
							$_GET['nombreCC']=$vecf[3];
							
						}			
						
						echo "<script language='JavaScript' type='text/JavaScript'>		   								
								window.location = 'http://www.cesvimexico.com.mx/expo/pdf.php?id=$_GET[id]&nombre=$_GET[nombreCC]&mail=$_GET[MAIL]&comania=$_GET[COMPANIA]&telefono=$_GET[TELEFONO]'; 
					  		  </script>";
						exit; 
 }
 /* if( $_GET['MAIL2']!='' ){
			
			$_GET['sql']="SELECT mail FROM tb_registro2015  WHERE mail='$_GET[MAIL2]'";
			$_GET['result'] = mysql_query($_GET['sql']) or die ($_GET['sql'].mysql_error());	
			
			if ($_GET['row']=mysql_fetch_array($_GET['result'])){
								$_GET['result2']=mysql_query("SELECT id_registro, compania, tel1, CONCAT( NOMBRE1, ' ', NOMBRE2, ' ', APPATERNO, ' ', APMATERNO ) AS NOMBRE FROM  tb_registro2015 WHERE mail='$_GET[MAIL2]' ");
									while($vec=mysql_fetch_array($_GET['result2'])){
										$_GET['id']=$vec[0];
										$_GET['nombreCC']=$vec[3];
										$_GET['COMPANIA']=$vec[1];							
										$_GET['TELEFONO']=$vec[2];
							
									}			
									
									echo "<script language='JavaScript' type='text/JavaScript'>		   								
											window.location = 'pdf.php?id=$_GET[id]&nombre=$_GET[nombreCC]&mail=$_GET[MAIL2]&comania=$_GET[COMPANIA]&telefono=$_GET[TELEFONO]'; 
										  </script>";
									exit;
			}else{
					$_GET['mensaje']="El Correo $_GET[MAIL2] no existe!!!";
					print "<script>alert('$_GET[mensaje]')</script>";
			}
					
 } */
 ?>