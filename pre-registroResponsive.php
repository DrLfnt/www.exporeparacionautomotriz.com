<?php
include('config.php');
	if( $HTTP_GET_VARS['NOMBRE1']!='' and $HTTP_GET_VARS['appaterno']!=''  and $HTTP_GET_VARS['apmaterno']!='' and $HTTP_GET_VARS['COMPANIA']!='' and  $HTTP_GET_VARS['CARGO']!='' and $HTTP_GET_VARS['GIRO']!='' and  $HTTP_GET_VARS['SECTOR']!='' and $HTTP_GET_VARS['DIRECCION']!='' and $HTTP_GET_VARS['COLONIA']!='' and $HTTP_GET_VARS['CP']!='' ){
	
	$HTTP_GET_VARS['sql']="SELECT mail FROM tb_registro2016  WHERE mail='$HTTP_GET_VARS[MAIL]' AND mail!=''";
	$HTTP_GET_VARS['result'] = mysql_query($HTTP_GET_VARS['sql']) or die ($HTTP_GET_VARS['sql'].mysql_error());	

		if (!$HTTP_GET_VARS['row']=mysql_fetch_array($HTTP_GET_VARS['result']))
			{

		//// Registro de Datos"; 
		
 $HTTP_GET_VARS['sql'] = "INSERT INTO tb_registro2016 ( id_registro, nombre1 ,nombre2,appaterno,apmaterno,  compania,  cargo,  giro,  sector ,  direccion,  colonia, cp , pais, estado, ciudad ,  municipio,  tel1 ,  tel2, mail ,  opcionA ,  opcionB ,  opcionC1 ,  opcionC2 ,  opcionC3 ,  opcionC4 ,  opcionC5,  opcionC6 ,  opcionC7,  opcionC8 , opcionC9 ,  opcionC10,  opcionC11 , otroc4,otroc5,otroc6,otroc11,
opcionD1,opcionD2,opcionD3,opcionD4,opcionD5,opcionD6,opcionD7,opcionD8,opcionD9,opcionD10,opcionD11,opcionD12,opcionD13,opcionD14,opcionD15,opcionD16,otrosinteres,  opcionE ,fecha_registro,edad,opcionF1,opcionF2,opcionF3,opcionF4,otroF,privacidad)";
				$HTTP_GET_VARS['sql'] .= "VALUES ('','$HTTP_GET_VARS[NOMBRE1]','$HTTP_GET_VARS[NOMBRE2]','$HTTP_GET_VARS[appaterno]','$HTTP_GET_VARS[apmaterno]','$HTTP_GET_VARS[COMPANIA]','$HTTP_GET_VARS[CARGO]','$HTTP_GET_VARS[GIRO]','$HTTP_GET_VARS[SECTOR]','$HTTP_GET_VARS[DIRECCION]','$HTTP_GET_VARS[COLONIA]','$HTTP_GET_VARS[CP]','$HTTP_GET_VARS[pais]','$HTTP_GET_VARS[estado]','$HTTP_GET_VARS[CIU]','$HTTP_GET_VARS[ciudad]','$HTTP_GET_VARS[TEL1]','$HTTP_GET_VARS[TEL2]','$HTTP_GET_VARS[MAIL]','$HTTP_GET_VARS[A]','$HTTP_GET_VARS[B]','$HTTP_GET_VARS[C1]','$HTTP_GET_VARS[C2]','$HTTP_GET_VARS[C3]','$HTTP_GET_VARS[C4]','$HTTP_GET_VARS[C5]','$HTTP_GET_VARS[C6]','$HTTP_GET_VARS[C7]','$HTTP_GET_VARS[C8]','$HTTP_GET_VARS[C9]','$HTTP_GET_VARS[C10]','$HTTP_GET_VARS[C11]','$HTTP_GET_VARS[otroc4]','$HTTP_GET_VARS[otroc5]','$HTTP_GET_VARS[otroc6]','$HTTP_GET_VARS[otroc11]','$HTTP_GET_VARS[D1]','$HTTP_GET_VARS[D2]','$HTTP_GET_VARS[D3]','$HTTP_GET_VARS[D4]','$HTTP_GET_VARS[D5]','$HTTP_GET_VARS[D6]','$HTTP_GET_VARS[D7]','$HTTP_GET_VARS[D8]','$HTTP_GET_VARS[D9]','$HTTP_GET_VARS[D10]','$HTTP_GET_VARS[D11]','$HTTP_GET_VARS[D12]','$HTTP_GET_VARS[D13]','$HTTP_GET_VARS[D14]','$HTTP_GET_VARS[D15]','$HTTP_GET_VARS[D16]','$HTTP_GET_VARS[CUALINTER]','$HTTP_GET_VARS[E]',NOW(),'$HTTP_GET_VARS[edad]','$HTTP_GET_VARS[F1]','$HTTP_GET_VARS[F2]','$HTTP_GET_VARS[F3]','$HTTP_GET_VARS[F4]','$HTTP_GET_VARS[otrof]','$HTTP_GET_VARS[PRI]')";
				$HTTP_GET_VARS['result'] = mysql_query($HTTP_GET_VARS['sql']) or die ($HTTP_GET_VARS['sql'].mysql_error()) ;		
											
		/// Fin de Registro de Datos
	}else{
			$HTTP_GET_VARS['mensaje']="El Correo $HTTP_GET_VARS[MAIL] ya esta registrado!!!";
			print "<script>alert('$HTTP_GET_VARS[mensaje]')</script>";
			$HTTP_GET_VARS['impr']="no";
	}		
		
		}
	
	
/* echo"N&uacute;mero de visitas:";
$mypage = basename($PHP_SELF);
include "acountphp/acounter.php";
$ani_counter = new acounter();
echo $ani_counter->create_output();	 */
?>

<!DOCTYPE html>
<html lang="es_MX">
<head>  
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <meta name="theme-color" content="#ED2A24" />
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="refresh" content="1600" />
    <!-- <meta name="author" content="Rafael Ramírez | Argenis Oldair Palacios" /> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="cleartype" content="on" />
    <!--[if IEMobile]><meta http-equiv="cleartype" content="on" /><![endif]-->
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="msapplication-TileImage" content="images/icons/icon.png" />
    <meta name="msapplication-TileColor" content="#ED2A24" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
    <meta name="description" content="Expo Reparación y Mantenimiento Automotriz, Reparación automotriz, Manejo Defensivo, Seguridad Vial, Evaluación de riesgos en Flotillas, Campañas de Educación Vial, Reconstrucción de accidentes de tránsito, Década de la seguridad vial, Dictámenes técnicos, Manejo Seguro, Consultoría flotillas, Consultoría para compañías de seguros, Consultoría para talleres, Capacitación para compañías de seguros, Plan de talleres, Talleres de reparación automotriz, Disminución de siniestralidad, Crash test, Capacitación para talleres de hojalatería y pintura, Guía de deslinde, Talleres de Equipo Pesado, Valuación de automóviles, Tabuladores de reparación, Curso virtuales para aseguradoras, Cesviteca, Identificación Vehicular, Certificación de Talleres, Certificación de Localizadores, Evaluación de talleres, Certificación CMX2009" />
    <!-- App Name and Title -->
    <meta name="application-name" content="Expo Reparación y Mantenimiento Automotriz" />
    <meta name="apple-mobile-web-app-title" content="Expo Reparación y Mantenimiento Automotriz" />
    <!-- App Name and Title -->
    <title>Pre-Registro | 14ª Expo Reparación y Mantenimiento Automotriz</title>
    <link rel="icon" href="images/icons/favicon.ico" />
    <!-- Android Icon -->
    <link rel="icon" sizes="196x196" href="images/icons/icon-196.png" />
    <link rel="icon" sizes="128x128" href="images/icons/icon-128.png" />
    <!-- Android Icon -->
    <!-- Apple Icon -->
    <link rel="apple-touch-startup-image" href="images/icons/icon.png" />
    <link rel="apple-touch-icon" href="images/icons/icon.png" />
    <link rel="apple-touch-icon" sizes="128x128" href="images/icons/icon-128.png" />
    <link rel="apple-touch-icon-precomposed" sizes="128x128" href="images/icons/icon-128.png" />
    <!-- Apple Icon -->
    <!-- Apple Retina Icon -->
    <link rel="apple-touch-icon" sizes="76x76" href="images/icons/icon-76.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="images/icons/icon-120.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="images/icons/icon-152.png" />
    <!-- Apple Retina Icon -->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
    <!-- Robots.txt -->
    <meta name="robots" content="index,follow" href="robots.txt" />
    <!-- Robots.txt -->
    <script>
    (function(doc){var addEvent='addEventListener',type='gesturestart',qsa='querySelectorAll',scales=[1,1],meta=qsa in doc?doc[qsa]('meta[name=viewport]'):[];function fix(){meta.content='width=device-width,minimum-scale='+scales[0]+',maximum-scale='+scales[1];doc.removeEventListener(type,fix,true);}if((meta=meta[meta.length-1])&&addEvent in doc){fix();scales=[.25,1.6];doc[addEvent](type,fix,true);}}(document));
    </script>
    <!-- Styles -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css?DisainCo" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css?DisainCo" />
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css?DisainCo" />
    <link rel="stylesheet" href="css/styles.css?DisainCo" />
    <!-- Styles -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-73291127-1', 'auto');
    ga('send', 'pageview');
    </script>
</head>

<body id="index">

<script type="text/javascript" src="http://exporeparacionautomotriz.com/js/jquery-1.3.2.min.js"></script>
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
	$.get("http://exporeparacionautomotriz.com/Scripts/cargar-paises.php", function(resultado){
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
	$.get("http://exporeparacionautomotriz.com/Scripts/dependencia-estado.php", { code: code },
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
	$.get("http://exporeparacionautomotriz.com/Scripts/dependencia-ciudades.php?", { code: code }, function(resultado){
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
	if (form1.CARGO.selectedIndex == "0") { a += "CARGO\n"; }
	if (form1.GIRO.selectedIndex == "0") { a += "GIRO\n"; }
    if (form1.SECTOR.selectedIndex == "0") { a += "SECTOR\n"; }
	if (form1.DIRECCION.value == "") { a += "DIRECCION\n"; }
    if (form1.COLONIA.value == "") { a += "COLONIA\n"; }
    if (form1.CP.value == "") { a += "CP\n"; }
    if (form1.pais.selectedIndex == "0") { a += "PAIS\n"; }
    if (form1.estado.selectedIndex == "0") { a += "ESTADO\n"; }
    if (form1.ciudad.selectedIndex == "0") { a += "MUNICIPIO\n"; }
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
	
	if (form1.A.selectedIndex == "0") { a += "PREGUNTA A)\n"; }	
	if (form1.B.selectedIndex == "0") { a += "PREGUNTA B)\n"; }	
	if (form1.C[0].checked == false && form1.C[1].checked == false && form1.C[2].checked == false && form1.C[3].checked == false && form1.C[4].checked == false && form1.C[5].checked == false && form1.C[6].checked == false && form1.C[7].checked == false && form1.C[8].checked == false && form1.C[9].checked == false && form1.C[10].checked == false  ) { a += "  PREGUNTA C)\n"; }	
	
	if (form1.C4.checked == true && form1.otroc4.value == "" ) { a += " C4: OTRO ¿CUÁL?\n"; }	
	if (form1.C5.checked == true && form1.otroc5.value == "" ) { a += " C5: OTRO ¿CUÁL?\n"; }	
	if (form1.C6.checked == true && form1.otroc6.value == "" ) { a += " C6: OTRO ¿CUÁL?\n"; }	
	if (form1.C11.checked == true && form1.otroc11.value == "" ) { a += " C11: OTRO ¿CUÁL?\n"; }	
		
	
	if (form1.D[0].checked == false && form1.D[1].checked == false && form1.D[2].checked == false && form1.D[3].checked == false && form1.D[4].checked == false && form1.D[5].checked == false && form1.D[6].checked == false && form1.D[7].checked == false && form1.D[8].checked == false && form1.D[9].checked == false&& form1.D[10].checked == false && form1.D[11].checked == false&& form1.D[12].checked == false&& form1.D[13].checked == false&& form1.D[14].checked == false&& form1.D[15].checked == false) { a += "  PREGUNTA D)\n"; }	
	
	if (form1.D16.checked == true && form1.CUALINTER.value == "" ) { a += " D: OTRO ¿CUÁL?\n"; }	
	
	if (form1.E.selectedIndex == "0") { a += "PREGUNTA E)\n"; }

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
                        <li><a class="page-scroll text-capitalize" href="zona-demostracion.html">&nbsp;&nbsp;&nbsp;&nbsp;Zona de Demostración</a></li>
                        <li><a class="page-scroll text-capitalize" href="zona-capacitacion.html">&nbsp;&nbsp;&nbsp;&nbsp;Zona de Capacitación</a></li>
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
                                <li><a class="page-scroll" href="zona-demostracion.html">Zona de demostración</a></li>
                                <li><a class="page-scroll" href="zona-capacitacion.html">Zona de capacitación</a></li>
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
						
						<!-- Formulario -->
						<div id="main">
                            <script type="text/javascript" src="http://exporeparacionautomotriz.com/js/jquery-1.3.2.min.js"></script>
                            <script type="text/javascript">
                                $(document).ready(function(){cargar_paises();$("#pais").change(function(){dependencia_estado();});$("#estado").change(function(){dependencia_ciudad();});$("#estado").attr("disabled",true);$("#ciudad").attr("disabled",true);});function cargar_paises(){$.get("http://exporeparacionautomotriz.com/Scripts/cargar-paises.php", function(resultado){if(resultado==false){alert("Error");}else{$('#pais').append(resultado);}});}function dependencia_estado(){var code=$("#pais").val();$.get("http://exporeparacionautomotriz.com/Scripts/dependencia-estado.php",{code: code},function(resultado){if(resultado==false){alert("Error");}else{$("#estado").attr("disabled",false);document.getElementById("estado").options.length=1;$('#estado').append(resultado);}});}function dependencia_ciudad(){var code=$("#estado").val();$.get("http://exporeparacionautomotriz.com/Scripts/dependencia-ciudades.php?",{code: code}, function(resultado){if(resultado==false){alert("Error");}else{$("#ciudad").attr("disabled",false);document.getElementById("ciudad").options.length=1;$('#ciudad').append(resultado);}});}function otroff(){if(form1.F4.checked==false){form1.otrof.disabled=true;}else{form1.otrof.disabled=false;}}function otroc4_f(){if(form1.C4.checked==false){form1.otroc4.disabled=true;}else{form1.otroc4.disabled=false;}}function otroc5_f(){if(form1.C5.checked==false){form1.otroc5.disabled=true;}else{form1.otroc5.disabled=false;}}function otroc6_f(){if(form1.C6.checked==false){form1.otroc6.disabled=true;}else{form1.otroc6.disabled=false;}}function otroc11_f(){if(form1.C11.checked==false){form1.otroc11.disabled=true;}else{form1.otroc11.disabled=false;}}function checarcombo(){if(form1.SECTOR.value=="OTRO"){form1.CUAL.disabled=false;}else{form1.CUAL.disabled=true;}}function checarcombo22(){if(form1.CARGO.value=="OTRO"){form1.CUAL2.disabled=false;}else{form1.CUAL2.disabled=true;}}function checarcombo2(){if(form1.A.value=="NINGUNA"){for (i=0; rad=form1.CLF[i]; i++) rad.disabled=true;}else{for (i=0; rad=form1.CLF[i]; i++) rad.disabled=false;}}function checarcombo3(){if(form1.D16.checked==false){form1.CUALINTER.disabled=true;}else{form1.CUALINTER.disabled=false;}}function checkvalidate(checks){for (i=0; lcheck=checks[i]; i++){if (lcheck.checked){return true;}}return false;}function validararchivo(form1){var error="Por favor, antes de enviar el formulario,\ncomplete los siguientes campos:\n\n";var a="" if (form1.NOMBRE1.value==""){a +="PRIMER NOMBRE\n";}if (form1.appaterno.value==""){a +="PRIMER APELLIDO\n";}if (form1.apmaterno.value==""){a +="SEGUNDO APELLIDO\n";}if (form1.edad.value==""){a +="EDAD\n";}if (form1.COMPANIA.value==""){a +="COMPANIA\n";}if (form1.CARGO.selectedIndex=="0"){a +="CARGO\n";}if (form1.GIRO.selectedIndex=="0"){a +="GIRO\n";}if (form1.SECTOR.selectedIndex=="0"){a +="SECTOR\n";}if (form1.DIRECCION.value==""){a +="DIRECCION\n";}if (form1.COLONIA.value==""){a +="COLONIA\n";}if (form1.CP.value==""){a +="CP\n";}if (form1.pais.selectedIndex=="0"){a +="PAIS\n";}if (form1.estado.selectedIndex=="0"){a +="ESTADO\n";}if (form1.ciudad.selectedIndex=="0"){a +="MUNICIPIO\n";}if (form1.CIU.value==""){a +=" CIUDAD\n";}if (form1.TEL1.value==""){a +=" TELÉFONO\n";}if ((form1.MAIL.value=="") ||//Si no contiene un arroba(form1.MAIL.value.indexOf('@')==-1) ||//o un punto(form1.MAIL.value.indexOf('.')==-1)){//lo informamos.a +=" FALTA CORREO O ESTA INCORRECTO \n";}if (form1.A.selectedIndex=="0"){a +="PREGUNTA A)\n";}if (form1.B.selectedIndex=="0"){a +="PREGUNTA B)\n";}if (form1.C[0].checked==false && form1.C[1].checked==false && form1.C[2].checked==false && form1.C[3].checked==false && form1.C[4].checked==false && form1.C[5].checked==false && form1.C[6].checked==false && form1.C[7].checked==false && form1.C[8].checked==false && form1.C[9].checked==false && form1.C[10].checked==false ){a +=" PREGUNTA C)\n";}if (form1.C4.checked==true && form1.otroc4.value=="" ){a +=" C4: OTRO ¿CUÁL?\n";}if (form1.C5.checked==true && form1.otroc5.value=="" ){a +=" C5: OTRO ¿CUÁL?\n";}if (form1.C6.checked==true && form1.otroc6.value=="" ){a +=" C6: OTRO ¿CUÁL?\n";}if (form1.C11.checked==true && form1.otroc11.value=="" ){a +=" C11: OTRO ¿CUÁL?\n";}if (form1.D[0].checked==false && form1.D[1].checked==false && form1.D[2].checked==false && form1.D[3].checked==false && form1.D[4].checked==false && form1.D[5].checked==false && form1.D[6].checked==false && form1.D[7].checked==false && form1.D[8].checked==false && form1.D[9].checked==false&& form1.D[10].checked==false && form1.D[11].checked==false&& form1.D[12].checked==false&& form1.D[13].checked==false&& form1.D[14].checked==false&& form1.D[15].checked==false){a +=" PREGUNTA D)\n";}if (form1.D16.checked==true && form1.CUALINTER.value=="" ){a +=" D: OTRO ¿CUÁL?\n";}if (form1.E.selectedIndex=="0"){a +="PREGUNTA E)\n";}if (form1.F[0].checked==false && form1.F[1].checked==false && form1.F[2].checked==false && form1.F[3].checked==false ){a +=" PREGUNTA F)\n";}if (form1.F4.checked==true && form1.otrof.value=="" ){a +=" F4: OTRO ¿CUÁL?\n";}if (form1.PRI[0].checked==false && form1.PRI[1].checked==false ){a +=" Políticas de privacidad\n";}if (a !=""){alert(error + a); return true;}form1.submit()}
                            </script>
                            <form class="row" name="impr" method="get" >
                                <p>&nbsp;</p>
                                <table border="0" >
                                    <tr>
                                        <td>
                                            <div align="center">
                                                Reimpresión de Pre-Registro.
                                            </div>
                                        </td>
                                    </tr>
                                    <tr> 
                                        <td>
                                            <table border="0" >
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <div><em>Correo</em>:
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input name="MAIL2" type="text" style="color:#000" />
                                                        &nbsp;&nbsp;&nbsp;
                                                        <input name="Imprimir" type="submit" value="Imprimir" style="color:#000"/>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table border="0" >
                                    <tr>
                                        <td>
                                            <div>
                                                <div>
                                                    <p>&nbsp;</p>
                                                    <p>
                                                        Es recomendable que usted cuente con un correo electrónico para hacerle llegar su registro al evento. En caso de no contar con un correo, asegúrese tener lista la impresora para que le imprima su registro. Si tiene problemas para impresión, entonces el día del evento acuda a la zona de Pre-registro (identificada con ese nombre) para solo proporcionar su nombre y su credencial de elector, para que le impriman inmediatamente su gafete.
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <div>
                                                    <p>
                                                        Nota: &quot;Evitar abreviaturas,puntos,comas y acentos&quot;
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </table>
                                <p>
                                    <br />
                                </p>
                            </form>
                            <form class="row" method="get" name="form1">
                                <table class="col-md-12" border="0"  >
                                    <tr class="col-md-12">
                                        <td class="col-md-6">
                                            <div></div>
                                        </td>
                                        <td class="col-md-6">
                                            <div></div>
                                        </td>
                                    </tr>
                                    <tr class="col-md-12">
                                        <td class="col-md-6">
                                            <table class="col-md-12" border="0"  >
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            * PRIMER NOMBRE:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="NOMBRE1" type="text" id="NOMBRE1" onchange="javascript:this.value=this.value.toUpperCase();" style="color:#000" />
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong> 
                                                        * SEGUNDO NOMBRE:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="NOMBRE2" type="text" id="NOMBRE2" onchange="javascript:this.value=this.value.toUpperCase();" style="color:#000"/>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            * PRIMER APELLIDO:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="appaterno" type="text" id="appaterno" onchange="javascript:this.value=this.value.toUpperCase();" style="color:#000"/>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            * SEGUNDO APELLIDO:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="apmaterno" type="text" id="apmaterno" onchange="javascript:this.value=this.value.toUpperCase();" style="color:#000"/>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            * EDAD:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="edad" type="text" id="edad" onchange="javascript:this.value=this.value.toUpperCase();" style="color:#000"/>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            *COMPAÑIA:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="COMPANIA" type="text" id="COMPANIA" onchange="javascript:this.value=this.value.toUpperCase();" style="color:#000"/>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            * CARGO:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <select name="CARGO" onchange="checarcombo22();"  style="color:#000" >
                                                                <option value="0">Selecciona Uno...</option>
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
                                                        </label>
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                    <td>
                                                        <strong>OTRO ¿CUÁL?:</strong>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="CUAL2" type="text" disabled="disabled=true" onchange="javascript:this.value=this.value.toUpperCase();" >
                                                        </label>
                                                    </td>
                                                </tr> -->
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            * GIRO:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <select name="GIRO" onchange="checarcombo();" style="color:#000" >
                                                                <option value="0">Selecciona Uno...</option>
                                                                <option value="TALLER / AGENCIA AUTOMOTRIZ">TALLER / AGENCIA AUTOMOTRIZ</option>
                                                                <option value="COMPANIA DE SEGUROS">COMPA&Ntilde;ÍA DE SEGUROS</option>
                                                                <option value="PROVEEDOR DEL SECTOR">PROVEEDOR DEL SECTOR</option>
                                                                <option value="GOBIERNO">GOBIERNO</option>
                                                                <option value="ASOCIACION">ASOCIACION</option>
                                                                <option value="DE DISTRIBUCION">DE DISTRIBUCION</option>
                                                                <option value="DE PRODUCCION ">DE PRODUCCION</option>
                                                                <option value="DE SERVICIOS">DE SERVICIOS</option>
                                                                <option value="PROFESIONISTA INDEPENDIENTE">PROFESIONISTA INDEPENDIENTE</option>
                                                            </select>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            *SECTOR:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <select name="SECTOR" onchange="checarcombo();" style="color:#000" >
                                                                <option value="0">Selecciona Uno...</option>
                                                                <option value="PRIVADO">PRIVADO</option>
                                                                <option value="PUBLICO">PUBLICO</option>
                                                            </select>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                    <td>
                                                        <strong>
                                                            OTRO ¿CUÁL?:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <label>
                                                        <input name="CUAL" type="text" disabled="disabled=true" onchange="javascript:this.value=this.value.toUpperCase();" >
                                                        </label>
                                                    </td>
                                                </tr>-->
                                                <tr>
                                                    <td>&nbsp;&nbsp;</td>
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
                                          </table>
                                        </td>
                                        <td class="col-md-6">
                                            <table class="col-md-12" border="0"  >
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            *DIRECCIÓN:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="DIRECCION" type="text" id="DIRECCION" onchange="javascript:this.value=this.value.toUpperCase();" style="color:#000"/>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            *COLONIA:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="COLONIA" type="text" id="COLONIA" onchange="javascript:this.value=this.value.toUpperCase();" style="color:#000"/>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            *C.P.:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="CP" type="text" id="CP" onchange="javascript:this.value=this.value.toUpperCase();" style="color:#000"/>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            *PAÍS:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <select id="pais" name="pais" style="color:#000" >
                                                            <option value="0">Selecciona Uno...</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            *ESTADO:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <select id="estado" name="estado" style="color:#000">
                                                            <option value="0">Selecciona Uno...</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            *MUNICIPIO:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <select id="ciudad" name="ciudad" style="color:#000">
                                                            <option value="0">Selecciona Uno...</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            *CIUDAD:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <input name="CIU" type="text" id="CIU" style="color:#000"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            *LADA + TELÉFONO:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <input name="TEL1" type="text" id="TEL1" onchange="javascript:this.value=this.value.toUpperCase();" style="color:#000"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            EXTENSION:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <input name="TEL2" type="text" id="TEL2" onchange="javascript:this.value=this.value.toUpperCase();" style="color:#000"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            *E-MAIL:
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <input name="MAIL" type="text" id="MAIL" style="color:#000"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                          </table>
                                        </td>
                                    </tr>
                                    <tr class="col-md-12">
                                        <td class="col-md-6">
                                            <table class="col-md-12" border="0" >
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            <em>*a) ¿CUÁNTAS VECES HA ASISTIDO A LA EXPO REPARACIÓN AUTOMOTRIZ ?</em>
                                                        </strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <select name="A" id="A" style="color:#000" >
                                                                <option value="0">Selecciona Uno...</option>
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
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                        <strong>
                                                            <em>*b) ¿TIEMPO QUE TIENE DESTINADO PARA VISITAR LA EXPO ?</em>
                                                        </strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <select name="B" id="B"  style="color:#000">
                                                                <option value="0">Selecciona Uno...</option>
                                                                <option value="UN DIA">UN DIA</option>
                                                                <option value="DOS DIAS">DOS DIAS</option>
                                                                <option value="TRES DIAS">TRES DIAS</option>
                                                            </select>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            <em>*c)¿POR CUÁL (ES) MEDIO (S) SE ENTERÓ DEL EVENTO?</em>
                                                        </strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table border="0" >
                                                            <tr>
                                                                <td>
                                                                    <label>
                                                                        <input name="C1" type="checkbox" id="C" value="Invitacion impresa"/>
                                                                    </label>
                                                              </td>
                                                                <td>
                                                                    Invitacion impresa
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="C2" type="checkbox" id="C" value="Recomendacion de un conocido"/>
                                                                </td>
                                                                <td>
                                                                    Recomendación de un conocido
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="C3" type="checkbox" id="C" value="Invitacion de un expositor"/>
                                                                </td>
                                                                <td>
                                                                    Invitación de un expositor
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="C4" type="checkbox" id="C" value="Revista especializada" onchange="otroc4_f();"/>
                                                                </td>
                                                                <td>
                                                                    Revista especializada
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>
                                                                    ¿Cuál?&nbsp;&nbsp;
                                                                    <input name="otroc4" type="text" disabled="disabled=true" id="otroc4" style="color:#000"/>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="C5" type="checkbox" id="C" value="Periodico" onchange="otroc5_f();"/>
                                                                </td>
                                                                <td>
                                                                    Periodico
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>
                                                                    ¿Cuál?&nbsp;&nbsp;
                                                                    <input name="otroc5" type="text" disabled="disabled=true" id="otroc5" style="color:#000"/>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="C6" type="checkbox" id="C" value="Radio" onchange="otroc6_f();"/>
                                                                </td>
                                                                <td>
                                                                    Radio
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>
                                                                    ¿Cuál?&nbsp;&nbsp;
                                                                    <input name="otroc6" type="text" disabled="disabled=true" id="otroc6" style="color:#000"/>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="C7" type="checkbox" id="C" value="Pagina web del evento"/>
                                                                </td>
                                                                <td>
                                                                    Pagina web del evento
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="C8" type="checkbox" id="C" value="Correo electronico"/>
                                                                </td>
                                                                <td>
                                                                    Correo electronico
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="C9" type="checkbox" id="C" value="Facebook"/>
                                                                </td>
                                                                <td>
                                                                    Facebook
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="C10" type="checkbox" id="C" value="Twitter"/>
                                                                </td>
                                                                <td>
                                                                    Twitter
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="C11" type="checkbox" id="C" value="Otro" onchange="otroc11_f();"/>
                                                                </td>
                                                                <td>
                                                                    Otro
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td> 
                                                                    ¿Cuál?: 
                                                                    <input name="otroc11" type="text" disabled="disabled=true" id="otroc11" style="color:#000"/>
                                                                </td>
                                                            </tr>
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
                                                                <td>
                                                                    <strong>
                                                                        ¿Estas de acuerdo y acepto las <a href="http://www.cesvimexico.com.mx/aviso-de-privacidad.html" target="_blank"><strong><em>políticas de privacidad</em></strong></a> ?
                                                                    </strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>
                                                                    <table border="0" >
                                                                        <tr>
                                                                            <td>
                                                                                <input name="PRI" type="radio" id="PRI" value="SI"/>
                                                                            </td>
                                                                            <td>
                                                                                &nbsp;SI&nbsp;&nbsp;
                                                                            </td>
                                                                            <td>
                                                                                <input name="PRI" type="radio" id="PRI" value="NO"/>
                                                                            </td>
                                                                            <td>
                                                                                &nbsp;NO&nbsp;&nbsp; 
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="col-md-6">
                                            <table class="col-md-12" border="0" >
                                                <tr>
                                                    <td>
                                                        <em><strong>
                                                            *d) PRINCIPAL INTERÉS: 
                                                        </strong></em>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table border="0" >
                                                            <tr>
                                                                <td>
                                                                    <label>
                                                                        <input name="D1" type="checkbox" id="D" value="Pintura Automotriz"/>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    Pintura Automotriz
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="D2" type="checkbox" id="D" value="Equipos y Herramientas para el taller"/>
                                                                </td>
                                                                <td>
                                                                    Equipos y Herramientas para el taller
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="D3" type="checkbox" id="D" value="Materiales para la aplicacion de pintura"/>
                                                                </td>
                                                                <td>
                                                                    Materiales para la aplicación de pintura
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="D4" type="checkbox" id="D" value="Materiales para la reparacion de carroceria"/>
                                                                </td>
                                                                <td> 
                                                                    Materiales para la reparación de carrocería
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="D5" type="checkbox" id="D" value="Cristales y parabrisas"/>
                                                                </td>
                                                                <td>
                                                                    Cristales y parabrisas
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="D6" type="checkbox" id="D" value="Componentes y partes electronicas"/>
                                                                </td>
                                                                <td>
                                                                    Componentes y partes electrónicas
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="D7" type="checkbox" id="D" value="Refacciones y/o accesorios automotrices"/>
                                                                </td>
                                                                <td>
                                                                    Refacciones y/o accesorios automotrices
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="D8" type="checkbox" id="D" value="Productos para el mantenimiento automotriz"/>
                                                                </td>
                                                                <td>
                                                                    Productos para el mantenimiento automotriz
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="D9" type="checkbox" id="D" value="Equipo de seguridad para el taller"/>
                                                                </td>
                                                                <td>
                                                                    Equipo de seguridad para el taller
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="D10" type="checkbox" id="D" value="Consultoria de procesos para el taller"/>
                                                                </td>
                                                                <td>
                                                                    Consultoría de procesos para el taller
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="D11" type="checkbox" id="D" value="Software de valuacion de danos"/>
                                                                </td>
                                                                <td>
                                                                    Software de valuacion de daños
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="D12" type="checkbox" id="D" value="Capacitacion gratuita"/>
                                                                </td>
                                                                <td>
                                                                    Capacitacion gratuita
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="D13" type="checkbox" id="D" value="Conocer nuevos productos"/>
                                                                </td>
                                                                <td>
                                                                    Conocer nuevos productos
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="D14" type="checkbox" id="D" value="Contacto con una compania de seguros"/>
                                                                </td>
                                                                <td>
                                                                    Contacto con una compañia de seguros
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="D15" type="checkbox" id="D" value="Distribucion o representacion"/>
                                                                </td>
                                                                <td>
                                                                    Distribución o representación
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="D16" type="checkbox" id="D" value="Otro" onchange="checarcombo3();"/>
                                                                </td>
                                                                <td>
                                                                    Otro (¿Cuál?):
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>
                                                                    <strong>
                                                                        <input name="CUALINTER" type="text" id="CUALINTER" disabled="disabled=true" style="color:#000"/>
                                                                    </strong>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <strong><em>
                                                            *e) NIVEL DE TOMA DE DECISIONES: 
                                                        </em></strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <select name="E" id="E" style="color:#000">
                                                                <option value="0">Selecciona Uno...</option>
                                                                <option value="DECIDO">DECIDO</option>
                                                                <option value="EVALUO">EVALUO</option>
                                                                <option value="RECOMIENDO">RECOMIENDO</option>
                                                                <option value="NINGUNA DE LAS ANTERIORES">NINGUNA DE LOS ANTERIORES</option>
                                                            </select>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong><em>
                                                            *f) ¿MEDIO DE TRANSPORTE QUE UTILIZARA PARA LLEGAR A LA EXPO?:
                                                        </em></strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table border="0" >
                                                            <tr>
                                                                <td>
                                                                    <input name="F1" type="checkbox" id="F" value="Automovil" onchange="checarcombo3();"/>
                                                              </td>
                                                                <td>
                                                                    Automovil
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="F2" type="checkbox" id="F" value="Autobus"/>
                                                                </td>
                                                                <td>
                                                                    Autobus
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="F3" type="checkbox" id="F" value="Avion"/>
                                                                </td>
                                                                <td>
                                                                    Avion
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input name="F4" type="checkbox" id="F" value="Otro" onchange="otroff();"/>
                                                                </td>
                                                                <td>
                                                                    Otro (¿Cuál?):
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>
                                                                    <label for="otrof"></label>
                                                                    <input name="otrof" type="text" id="otrof" style="color:#000"/>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <label></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <center>
                                                <input name="ENVIAR" type="button" id="ENVIAR" value="::: ENVIAR :::" onclick="validararchivo(form1)"  style="color:#000"/>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                              </table>
                            </form>
                        </div>
						<!-- Formulario -->

					</div>
				</div>
			</div>
	    </section>
</body>
</html>
<?php
if( $HTTP_GET_VARS['NOMBRE1']!='' and $HTTP_GET_VARS['COMPANIA']!='' and  $HTTP_GET_VARS['DIRECCION']!='' and $HTTP_GET_VARS['COLONIA']!='' and  $HTTP_GET_VARS['ciudad']!='' and $HTTP_GET_VARS['MAIL']!='' and $HTTP_GET_VARS['TEL1']!='' and $HTTP_GET_VARS['CP']!='' and  $HTTP_GET_VARS['impr']=='' ){
 
					$HTTP_GET_VARS['result2']=mysql_query("SELECT id_registro, compania, tel1, CONCAT( NOMBRE1, ' ', NOMBRE2, ' ', APPATERNO, ' ', APMATERNO ) AS NOMBRE FROM  tb_registro2016 WHERE mail='$HTTP_GET_VARS[MAIL]'");
		   				while($vec=mysql_fetch_array($HTTP_GET_VARS['result2'])){
							$HTTP_GET_VARS['id']=$vec[0];					
							$HTTP_GET_VARS['COMPANIA']=$vec[1];							
							$HTTP_GET_VARS['TELEFONO']=$vec[2];
							$HTTP_GET_VARS['nombreCC']=$vec[3];
							
						}			
						
						echo "<script language='JavaScript' type='text/JavaScript'>		   								
								window.location = 'pdf.php?id=$HTTP_GET_VARS[id]&nombre=$HTTP_GET_VARS[nombreCC]&mail=$HTTP_GET_VARS[MAIL]&comania=$HTTP_GET_VARS[COMPANIA]&telefono=$HTTP_GET_VARS[TELEFONO]'; 
					  		  </script>";
						exit; 
 }
 if( $HTTP_GET_VARS['MAIL2']!='' ){
			
			$HTTP_GET_VARS['sql']="SELECT mail FROM tb_registro2016  WHERE mail='$HTTP_GET_VARS[MAIL2]'";
			$HTTP_GET_VARS['result'] = mysql_query($HTTP_GET_VARS['sql']) or die ($HTTP_GET_VARS['sql'].mysql_error());	
			
			if ($HTTP_GET_VARS['row']=mysql_fetch_array($HTTP_GET_VARS['result'])){
								$HTTP_GET_VARS['result2']=mysql_query("SELECT id_registro, compania, tel1, CONCAT( NOMBRE1, ' ', NOMBRE2, ' ', APPATERNO, ' ', APMATERNO ) AS NOMBRE FROM  tb_registro2016 WHERE mail='$HTTP_GET_VARS[MAIL2]' ");
									while($vec=mysql_fetch_array($HTTP_GET_VARS['result2'])){
										$HTTP_GET_VARS['id']=$vec[0];
										$HTTP_GET_VARS['nombreCC']=$vec[3];
										$HTTP_GET_VARS['COMPANIA']=$vec[1];							
										$HTTP_GET_VARS['TELEFONO']=$vec[2];
							
									}			
									
									echo "<script language='JavaScript' type='text/JavaScript'>		   								
											window.location = 'pdf.php?id=$HTTP_GET_VARS[id]&nombre=$HTTP_GET_VARS[nombreCC]&mail=$HTTP_GET_VARS[MAIL2]&comania=$HTTP_GET_VARS[COMPANIA]&telefono=$HTTP_GET_VARS[TELEFONO]'; 
										  </script>";
									exit;
			}else{
					$HTTP_GET_VARS['mensaje']="El Correo $HTTP_GET_VARS[MAIL2] no existe!!!";
					print "<script>alert('$HTTP_GET_VARS[mensaje]')</script>";
			}
					
 }
 ?>
