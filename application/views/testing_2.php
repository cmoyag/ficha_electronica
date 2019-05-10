﻿<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>Formulario de Pre-Inscripcion</title>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<LINK REL=StyleSheet HREF="/landing/contents/css/multi_archivos.css" TYPE="text/css" MEDIA=screen>
<link rel="icon" href="http://www.claseejecutiva.com/wp-content/themes/ejecutivaclase/assets/img/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <script src="/landing/contents/js/jquery.min.js" tppabs="/landing/contents/js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
<script type="text/javascript" src="/landing/contents/js/validate.min.js" ></script> 
 <script src="/landing/contents/js/ficha.js" ></script> 
<script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
	  dateFormat: "dd-mm-yy"
    });
  } );  
</script>
<style type="text/css">
.error {
  color: #d93636;
}
</style>


</head>
<body>
<div class="container border border-dark">
<div class=".hidden-xs-down">	
	<div class="header clearfix">
	
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
			
			
				<!-- Button trigger modal -->
				<br>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				  Reglamento del Alumno 
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Listado de Documentos</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<a href="/landing/contents/imagenes/Reglamento_del_Alumno_de_Educacion_Continua_2017.pdf" download="Reglamento_del_Alumno_de_Educacion_Continua_2017.pdf">Reglamento del Alumno de Educacion Continua</a><br>
						<a href="/landing/contents/imagenes/Reglamento_Clase_Ejecutiva_mayo_2017.pdf" download="Reglamento_Clase_Ejecutiva_mayo_2017.pdf">Reglamento Clase Ejecutiva</a><br>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
					
					  </div>
					</div>
				  </div>
				</div>
				
			
				


			 
            </li>
          </ul>
		  <img src="/landing/contents/images/logo-uc.jpg" alt="Logo"  width="163">
        </nav>
     </div>
 </div> 
	<br>
   <div  class=".hidden-xs-down mx-auto">
   <center>
   <strong><h3>Ficha de Inscripción</h3> </strong>
   </center>
	 <hr> 
	</div>

		<?php echo $error;?>

		<?php echo form_open_multipart('testing/do_upload',array('id' => 'form_pre'));?>
		
		 <input type="hidden" name="idOp" value="<?php echo $idOp; ?>" readonly>
		
		
		
		<div class="form-group row">			
			<div  class="col-md-3 field-label-responsive"><strong> Fecha de Inscripción: </strong></div>
			  <div class="col-md-3">
			  <input type="text" name="f_inscripcion" class="form-control" placeholder="Fecha de Inscripción"  value="<?php $date=date("d/m/Y");echo $date; ?>" readonly>
			</div>
			
		<div  class="col-md-2 field-label-responsive"><strong> Matriculado por: </strong></div>
			 <div class="col-md-3">
			  <input type="text" name="ejecutivo"class="form-control" placeholder="Ejecutivo(a):"readonly value="<?php if($jsondecode){echo $jsondecode->ejec->name;}else{echo '';} ?>" >
			 </div>			
		</div>	
		   
		<hr> <!--Productos -->
		<div  class="form-group row">
			<div class="col-md-3 field-label-responsive"><strong></strong></div>
			<div  class="col-md-5 field-label-responsive"></div>
			<div  class="col-md-3 field-label-responsive"><strong> Arancel($): </strong></div>
        </div>

		<div class="form-group row">		
		<div  class="col-md-8 field-label-responsive">
		<table class="table" class="table table-nonfluid">
			  <thead>
				<tr>
				  <th>Programas(s)de estudio:</th>
				  <th>Malla</th>

				</tr>
			  </thead>
			  <tbody>
		<?php
			foreach ($jsondecode->productos as $k){
				$pos=strpos($k->ProductCode,'C-');
				echo "<tr>";	
				if($pos!==false){
				echo "<td>".$k->Name."</td>";
				}else{
				echo "<td>".$k->Name."</td>";
				echo "<td>".'<button type="button" data-toggle="modal" data-target="#ModalMalla" class="btn btn-warning d" id="malla" onclick="malla_diplo('.$k->ProductCode.')" >Ver</button>'."</td>";
				echo "</tr>";
				}
				//data-toggle="modal" data-target="#ModalMalla"
			}
		?>
			  </tbody>
			</table>
	</div>
	<!-- Modal data-toggle="modal" -->
				<div class="modal fade" id="ModalMalla" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">MALLA</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
                     Malla en proceso de frabricacion
					  		<?php
							
							//$url_ce='https://ws2.diplomadosuc.cl/soapSF/ws/pre_inscripcion.php?idOp=41&action=malla';			
							$url_ce='<script> document.write(url) </script>';			
							$ch = curl_init($url_ce);//URL A ENVIAR EL CONTENIDO
							curl_setopt_array($ch, array(
							CURLOPT_RETURNTRANSFER => true,
							CURLOPT_URL =>  $url_ce));
							$response = curl_exec($ch); 		
							curl_close($ch);
							$dataMalla = json_decode($response);
							//die(print_r($jsondecode));
							//echo $response;
							
							?>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
					
					  </div>
					</div>
				  </div>
				</div>
<!--Fin del Modal -->		   	
		
		
			<div class="col-md-3">
			  <input type="" name="valor"class="form-control" placeholder="$" readonly value="<?php if($jsondecode){echo $jsondecode->dataOp->fields->Monto_Final__c;}else{echo '';} ?>">
		    </div>
		</div>
	   	 <!--Productos -->	
	 
			
		<hr>
	<!--Disclaimer data-toggle="collapse"-->
		<div class="collapse" id="collapseProgramas">
		<!--
		<div class="col-md-3 field-label-responsive"> <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapseProgramas">Ver</button></div>
        -->
		</div>		
	<!--Disclaimer -->		
	
       <!--Datos Personales -->
		<div  class="form-group row">
			<div  class="col-md-6 field-label-responsive"><strong>Datos del Alumno:</strong><p style="color:red;">(campos obligatorios)</p></div>
        </div>
		<br>
		<div class="form-group row">
			<div  class="col-md-3 field-label-responsive"><strong> Nombres: </strong></div>
			 <div class="col-md-3">
			  <input type="text" name="nombre"class="form-control" placeholder="Nombre" value="<?php if($jsondecode){echo $jsondecode->dataCta->fields->FirstName;}else{echo '';} ?>">
			 </div>
			 <div  class="col-md-2 field-label-responsive"><strong> Apellido Paterno: </strong></div>
			 <div class="col-md-3">
			  <input type="text" name="apellidoPaterno"class="form-control" placeholder="Apellidos" value="<?php if($jsondecode){echo $jsondecode->dataCta->fields->LastName;}else{echo '';} ?>">
			 </div>
        </div>
		
		<div class="form-group row">
		  <div  class="col-md-3 field-label-responsive"><strong> Documento de identidad: </strong></div>
			<div class="col-md-3">
			  <input type="text" name="dni"class="form-control" placeholder="DNI o RUT" value="<?php if($jsondecode){echo $jsondecode->dataCta->fields->RUT__c;}else{echo '';} ?>" >
			</div>
			 <div  class="col-md-2 field-label-responsive"><strong> Apellido Materno: </strong></div>
			 <div class="col-md-3">
			  <input type="text" name="apellidoMaterno"class="form-control" placeholder="Apellido Materno" value="">
			 </div>			
        </div>
		
		<div class="form-group row">
		  <div  class="col-md-3 field-label-responsive"><strong> Empresa donde trabaja: </strong></div>
			<div class="col-md-3">
			  <input type="text" name="empresa"class="form-control" placeholder="Trabajo" value="<?php if($jsondecode){echo $jsondecode->dataCta->fields->Empresa__c;}else{echo '';} ?>" >
		    </div>
			<div  class="col-md-2 field-label-responsive"><strong> Cargo: </strong></div>
			<div class="col-md-3">
			  <input type="text" name="cargo"class="form-control" placeholder="Cargo" value="<?php if($jsondecode){echo $jsondecode->dataCta->fields->Cargo__c;}else{echo '';} ?>" >
		    </div>
        </div>
		
		<div class="form-group row">
		  <div  class="col-md-3 field-label-responsive"><strong> Direccion domicilio particular: </strong></div>
			<div class="col-md-3">
			  <input type="text" name="dir"class="form-control" placeholder="Domicilio particular" value="<?php if($jsondecode){echo $jsondecode->dataCta->fields->dir_calle__pc;}else{echo '';} ?>">
		    </div>
			<div  class="col-md-2 field-label-responsive"><strong> Pais: </strong></div>
			<div class="col-md-3">
			  <Select type="text" name="pais" id="pais" class="form-control" placeholder="Pais"  >
                                                    <option value="" selected>Seleccione país</option>
                                                    <option value='Afganistán'> Afganistán</option>
                                                    <option value='Albania'> Albania</option>
                                                    <option value='Alemania'> Alemania</option>
                                                    <option value='Andorra'> Andorra</option>
                                                    <option value='Angola'> Angola</option>
                                                    <option value='Antigua y Barbuda'> Antigua y Barbuda</option>
                                                    <option value='Arabia Saudita'> Arabia Saudita</option>
                                                    <option value='Argelia'> Argelia</option>
                                                    <option value='Argentina'> Argentina</option>
                                                    <option value='Armenia'> Armenia</option>
                                                    <option value='Australia'> Australia</option>
                                                    <option value='Austria'> Austria</option>
                                                    <option value='Azerbaiyán'> Azerbaiyán</option>
                                                    <option value='Bahamas'> Bahamas</option>
                                                    <option value='Bangladés'> Bangladés</option>
                                                    <option value='Barbados'> Barbados</option>
                                                    <option value='Baréin'> Baréin</option>
                                                    <option value='Bélgica'> Bélgica</option>
                                                    <option value='Belice'> Belice</option>
                                                    <option value='Benín'> Benín</option>
                                                    <option value='Bielorrusia'> Bielorrusia</option>
                                                    <option value='Birmania'> Birmania</option>
                                                    <option value='Bolivia'> Bolivia</option>
                                                    <option value='Bosnia y Herzegovina'> Bosnia y Herzegovina</option>
                                                    <option value='Botsuana'> Botsuana</option>
                                                    <option value='Brasil'> Brasil</option>
                                                    <option value='Brunéi'> Brunéi</option>
                                                    <option value='Bulgaria'> Bulgaria</option>
                                                    <option value='Burkina Faso'> Burkina Faso</option>
                                                    <option value='Burundi'> Burundi</option>
                                                    <option value='Bután'> Bután</option>
                                                    <option value='Cabo Verde'> Cabo Verde</option>
                                                    <option value='Camboya'> Camboya</option>
                                                    <option value='Camerún'> Camerún</option>
                                                    <option value='Canadá'> Canadá</option>
                                                    <option value='Catar'> Catar</option>
                                                    <option value='Chad'> Chad</option>
                                                    <option value='Chile' > Chile</option>
                                                    <option value='China'> China</option>
                                                    <option value='Chipre'> Chipre</option>
                                                    <option value='Ciudad del Vaticano'> Ciudad del Vaticano</option>
                                                    <option value='Colombia'> Colombia</option>
                                                    <option value='Comoras'> Comoras</option>
                                                    <option value='Corea del Norte'> Corea del Norte</option>
                                                    <option value='Corea del Sur'> Corea del Sur</option>
                                                    <option value='Costa de Marfil'> Costa de Marfil</option>
                                                    <option value='Costa Rica'> Costa Rica</option>
                                                    <option value='Croacia'> Croacia</option>
                                                    <option value='Cuba'> Cuba</option>
                                                    <option value='Dinamarca'> Dinamarca</option>
                                                    <option value='Dominica'> Dominica</option>
                                                    <option value='Ecuador'> Ecuador</option>
                                                    <option value='Egipto'> Egipto</option>
                                                    <option value='El Salvador'> El Salvador</option>
                                                    <option value='Emiratos Árabes Unidos'> Emiratos Árabes Unidos</option>
                                                    <option value='Eritrea'> Eritrea</option>
                                                    <option value='Eslovaquia'> Eslovaquia</option>
                                                    <option value='Eslovenia'> Eslovenia</option>
                                                    <option value='España'> España</option>
                                                    <option value='Estados Unidos'> Estados Unidos</option>
                                                    <option value='Estonia'> Estonia</option>
                                                    <option value='Etiopía'> Etiopía</option>
                                                    <option value='Filipinas'> Filipinas</option>
                                                    <option value='Finlandia'> Finlandia</option>
                                                    <option value='Fiyi'> Fiyi</option>
                                                    <option value='Francia'> Francia</option>
                                                    <option value='Gabón'> Gabón</option>
                                                    <option value='Gambia'> Gambia</option>
                                                    <option value='Georgia'> Georgia</option>
                                                    <option value='Ghana'> Ghana</option>
                                                    <option value='Granada'> Granada</option>
                                                    <option value='Grecia'> Grecia</option>
                                                    <option value='Guatemala'> Guatemala</option>
                                                    <option value='Guyana'> Guyana</option>
                                                    <option value='Guinea'> Guinea</option>
                                                    <option value='Guinea ecuatorial'> Guinea ecuatorial</option>
                                                    <option value='Guinea-Bisáu'> Guinea-Bisáu</option>
                                                    <option value='Haití'> Haití</option>
                                                    <option value='Honduras'> Honduras</option>
                                                    <option value='Hungría'> Hungría</option>
                                                    <option value='India'> India</option>
                                                    <option value='Indonesia'> Indonesia</option>
                                                    <option value='Irak'> Irak</option>
                                                    <option value='Irán'> Irán</option>
                                                    <option value='Irlanda'> Irlanda</option>
                                                    <option value='Islandia'> Islandia</option>
                                                    <option value='Islas Marshall'> Islas Marshall</option>
                                                    <option value='Islas Salomón'> Islas Salomón</option>
                                                    <option value='Israel'> Israel</option>
                                                    <option value='Italia'> Italia</option>
                                                    <option value='Jamaica'> Jamaica</option>
                                                    <option value='Japón'> Japón</option>
                                                    <option value='Jordania'> Jordania</option>
                                                    <option value='Kazajistán'> Kazajistán</option>
                                                    <option value='Kenia'> Kenia</option>
                                                    <option value='Kirguistán'> Kirguistán</option>
                                                    <option value='Kiribati'> Kiribati</option>
                                                    <option value='Kuwait'> Kuwait</option>
                                                    <option value='Laos'> Laos</option>
                                                    <option value='Lesoto'> Lesoto</option>
                                                    <option value='Letonia'> Letonia</option>
                                                    <option value='Líbano'> Líbano</option>
                                                    <option value='Liberia'> Liberia</option>
                                                    <option value='Libia'> Libia</option>
                                                    <option value='Liechtenstein'> Liechtenstein</option>
                                                    <option value='Lituania'> Lituania</option>
                                                    <option value='Luxemburgo'> Luxemburgo</option>
                                                    <option value='Madagascar'> Madagascar</option>
                                                    <option value='Malasia'> Malasia</option>
                                                    <option value='Malaui'> Malaui</option>
                                                    <option value='Maldivas'> Maldivas</option>
                                                    <option value='Malí'> Malí</option>
                                                    <option value='Malta'> Malta</option>
                                                    <option value='Marruecos'> Marruecos</option>
                                                    <option value='Mauricio'> Mauricio</option>
                                                    <option value='Mauritania'> Mauritania</option>
                                                    <option value='México'> México</option>
                                                    <option value='Micronesia'> Micronesia</option>
                                                    <option value='Moldavia'> Moldavia</option>
                                                    <option value='Mónaco'> Mónaco</option>
                                                    <option value='Mongolia'> Mongolia</option>
                                                    <option value='Montenegro'> Montenegro</option>
                                                    <option value='Mozambique'> Mozambique</option>
                                                    <option value='Namibia'> Namibia</option>
                                                    <option value='Nauru'> Nauru</option>
                                                    <option value='Nepal'> Nepal</option>
                                                    <option value='Nicaragua'> Nicaragua</option>
                                                    <option value='Níger'> Níger</option>
                                                    <option value='Nigeria'> Nigeria</option>
                                                    <option value='Noruega'> Noruega</option>
                                                    <option value='Nueva Zelanda'> Nueva Zelanda</option>
                                                    <option value='Omán'> Omán</option>
                                                    <option value='Países Bajos'> Países Bajos</option>
                                                    <option value='Pakistán'> Pakistán</option>
                                                    <option value='Palaos'> Palaos</option>
                                                    <option value='Panamá'> Panamá</option>
                                                    <option value='Papúa Nueva Guinea'> Papúa Nueva Guinea</option>
                                                    <option value='Paraguay'> Paraguay</option>
                                                    <option value='Perú'> Perú</option>
                                                    <option value='Polonia'> Polonia</option>
                                                    <option value='Portugal'> Portugal</option>
                                                    <option value='Reino Unido'> Reino Unido</option>
                                                    <option value='República Centroafricana'> República Centroafricana</option>
                                                    <option value='República Checa'> República Checa</option>
                                                    <option value='República de Macedonia'> República de Macedonia</option>
                                                    <option value='República del Congo'> República del Congo</option>
                                                    <option value='República Democrática del Congo'> República Democrática del Congo</option>
                                                    <option value='República Dominicana'> República Dominicana</option>
                                                    <option value='República Sudafricana'> República Sudafricana</option>
                                                    <option value='Ruanda'> Ruanda</option>
                                                    <option value='Rumanía'> Rumanía</option>
                                                    <option value='Rusia'> Rusia</option>
                                                    <option value='Samoa'> Samoa</option>
                                                    <option value='San Cristóbal y Nieves'> San Cristóbal y Nieves</option>
                                                    <option value='San Marino'> San Marino</option>
                                                    <option value='San Vicente y las Granadinas'> San Vicente y las Granadinas</option>
                                                    <option value='Santa Lucía'> Santa Lucía</option>
                                                    <option value='Santo Tomé y Príncipe'> Santo Tomé y Príncipe</option>
                                                    <option value='Senegal'> Senegal</option>
                                                    <option value='Serbia'> Serbia</option>
                                                    <option value='Seychelles'> Seychelles</option>
                                                    <option value='Sierra Leona'> Sierra Leona</option>
                                                    <option value='Singapur'> Singapur</option>
                                                    <option value='Siria'> Siria</option>
                                                    <option value='Somalia'> Somalia</option>
                                                    <option value='Sri Lanka'> Sri Lanka</option>
                                                    <option value='Suazilandia'> Suazilandia</option>
                                                    <option value='Sudán'> Sudán</option>
                                                    <option value='Sudán del Sur'> Sudán del Sur</option>
                                                    <option value='Suecia'> Suecia</option>
                                                    <option value='Suiza'> Suiza</option>
                                                    <option value='Surinam'> Surinam</option>
                                                    <option value='Tailandia'> Tailandia</option>
                                                    <option value='Tanzania'> Tanzania</option>
                                                    <option value='Tayikistán'> Tayikistán</option>
                                                    <option value='Timor Oriental'> Timor Oriental</option>
                                                    <option value='Togo'> Togo</option>
                                                    <option value='Tonga'> Tonga</option>
                                                    <option value='Trinidad y Tobago'> Trinidad y Tobago</option>
                                                    <option value='Túnez'> Túnez</option>
                                                    <option value='Turkmenistán'> Turkmenistán</option>
                                                    <option value='Turquía'> Turquía</option>
                                                    <option value='Tuvalu'> Tuvalu</option>
                                                    <option value='Ucrania'> Ucrania</option>
                                                    <option value='Uganda'> Uganda</option>
                                                    <option value='Uruguay'> Uruguay</option>
                                                    <option value='Uzbekistán'> Uzbekistán</option>
                                                    <option value='Vanuatu'> Vanuatu</option>
                                                    <option value='Venezuela'> Venezuela</option>
                                                    <option value='Vietnam'> Vietnam</option>
                                                    <option value='Yemen'> Yemen</option>
                                                    <option value='Yibuti'> Yibuti</option>
                                                    <option value='Zambia'> Zambia</option>
                                                    <option value='Zimbabue'> Zimbabue </option>
                                                </select>
		    </div>
        </div>
		
		<div class="form-group row">			
			<div  class="col-md-3 field-label-responsive"><strong> Email: </strong></div>
			<div class="col-md-3">
			  <input type="text" name="email"class="form-control" placeholder="noreply@diplomadosuc.cl" value="<?php if($jsondecode){echo $jsondecode->dataCta->fields->Correo_Electronico__c;}else{echo '';} ?>">
		    </div>
			
			<div  class="col-md-2 field-label-responsive d-none" id="label-region1"><strong> Region: </strong></div>
			<div class="col-md-3 d-none" id="region1" >
			  <input type="text" name="region"class="form-control " placeholder="Region"  value="<?php if($jsondecode){echo $jsondecode->dataCta->fields->Region__c;}else{echo '';} ?>" >
		    </div>
			
		
			<div class="col-md-3 d-none" id="region2" >

			    <Select type="text" name="region"class="form-control " placeholder="Region" >
                                                    <option value="" selected>Seleccione region</option>
                                                    <option value='Arica y Parinacota'>Arica y Parinacota</option>
													<option value='Tarapacá'>Tarapacá</option>
													<option value='Antofagasta'>Antofagasta</option>
													<option value='Atacama'>Atacama</option>
													<option value='Coquimbo'>Coquimbo</option>
													<option value='Valparaíso'>Valparaíso</option>
													<option value='Metropolitana'>Metropolitana</option>
													<option value='Libertador General Bernardo OHiggins'>Libertador General Bernardo OHiggins</option>
													<option value='Maule'>Maule</option>
													<option value='Bío Bío'>Bío Bío</option>
													<option value='La Araucanía'>La Araucanía</option>
													<option value='Los Ríos'>Los Ríos</option>
													<option value='Los Lagos'>Los Lagos</option>
													<option value='Aysén del General Carlos Ibáñez del Campo'>Aysén del General Carlos Ibáñez del Campo</option>
													<option value='Magallanes y la Antártica Chilena'>Magallanes y la Antártica Chilena</option>
                </select>				
			
		
		    

		    </div>			
        </div>		

		<div class="form-group row">
		  <div  class="col-md-3 field-label-responsive"><strong> Celular: </strong></div>
			<div class="col-md-3">
			  <input type="text" name="tel"class="form-control" placeholder="+569" value="<?php if($jsondecode){echo $jsondecode->dataCta->fields->Phone;}else{echo '';} ?>">
		    </div>
			
       	<div  class="col-md-2 field-label-responsive d-none"id="label-comuna"><strong> Comuna: </strong></div>
       	<div  class="col-md-2 field-label-responsive d-none"id="label-ciudad"><strong> Ciudad: </strong></div>
		<div class="col-md-3 d-none" id="comuna1">
		  <input type="text" name="comuna"class="form-control " placeholder="Comuna o Ciudad"  value="<?php if($jsondecode){echo $jsondecode->dataCta->fields->Comuna__c;}else{echo '';} ?>">
		  
		</div>
       
		<div class="col-md-3 d-none" id="comuna2">
		

		  <select type="text" name="comuna"class="form-control " placeholder="Comuna" >
          <option value="" selected>Seleccione Comuna</option>
		  <option value='EL CARMEN'>EL CARMEN</option>
			<option value='EL MONTE'>EL MONTE</option>
			<option value='EL QUISCO'>EL QUISCO</option>
			<option value='EL TABO'>EL TABO</option>
			<option value='EMPEDRADO'>EMPEDRADO</option>
			<option value='ERCILLA'>ERCILLA</option>
			<option value='FLORIDA'>FLORIDA</option>
			<option value='FREIRE'>FREIRE</option>
			<option value='FREIRINA'>FREIRINA</option>
			<option value='FRESIA'>FRESIA</option>
			<option value='FRUTILLAR'>FRUTILLAR</option>
			<option value='FUTALEUFU'>FUTALEUFU</option>
			<option value='FUTRONO'>FUTRONO</option>
			<option value='GALVARINO'>GALVARINO</option>
			<option value='GENERAL LAGOS'>GENERAL LAGOS</option>
			<option value='GORBEA'>GORBEA</option>
			<option value='GRANEROS'>GRANEROS</option>
			<option value='GUAITECAS'>GUAITECAS</option>
			<option value='HIJUELAS'>HIJUELAS</option>
			<option value='HUALAIHUE'>HUALAIHUE</option>
			<option value='HUALAÑÉ'>HUALAÑÉ</option>
			<option value='HUALQUI'>HUALQUI</option>
			<option value='HUARA'>HUARA</option>
			<option value='HUASCO'>HUASCO</option>
			<option value='ILLAPEL'>ILLAPEL</option>
			<option value='IQUIQUE'>IQUIQUE</option>
			<option value='ISLA DE MAIPO'>ISLA DE MAIPO</option>
			<option value='ISLA DE PASCUA'>ISLA DE PASCUA</option>
			<option value='JUAN FERNANDEZ'>JUAN FERNANDEZ</option>
			<option value='LA CALERA'>LA CALERA</option>
			<option value='LA CRUZ'>LA CRUZ</option>
			<option value='LA ESTRELLA'>LA ESTRELLA</option>
			<option value='LA HIGUERA'>LA HIGUERA</option>
			<option value='LA LIGUA'>LA LIGUA</option>
			<option value='LA SERENA'>LA SERENA</option>
			<option value='LA UNION'>LA UNION</option>
			<option value='LAGO RANCO'>LAGO RANCO</option>
			<option value='LAGO VERDE'>LAGO VERDE</option>
			<option value='LAGUNA BLANCA'>LAGUNA BLANCA</option>
			<option value='LAJA'>LAJA</option>
			<option value='LAMPA'>LAMPA</option>
			<option value='LANCO'>LANCO</option>
			<option value='LAS CABRAS'>LAS CABRAS</option>
			<option value='LAUTARO'>LAUTARO</option>
			<option value='LEBU'>LEBU</option>
			<option value='LICANTEN'>LICANTEN</option>
			<option value='LIMACHE'>LIMACHE</option>
			<option value='LINARES'>LINARES</option>
			<option value='LITUECHE'>LITUECHE</option>
			<option value='LOLOL'>LOLOL</option>
			<option value='LONCOCHE'>LONCOCHE</option>
			<option value='LONGAVI'>LONGAVI</option>
			<option value='LONQUIMAY'>LONQUIMAY</option>
			<option value='LOS ALAMOS'>LOS ALAMOS</option>
			<option value='LOS ANDES'>LOS ANDES</option>
			<option value='LOS ANGELES'>LOS ANGELES</option>
			<option value='LOS LAGOS'>LOS LAGOS</option>
			<option value='LOS MUERMOS'>LOS MUERMOS</option>
			<option value='LOS SAUCES'>LOS SAUCES</option>
			<option value='LOS VILOS'>LOS VILOS</option>
			<option value='LOTA'>LOTA</option>
			<option value='LUMACO'>LUMACO</option>
			<option value='LLANQUIHUE'>LLANQUIHUE</option>
			<option value='LLAY LLAY'>LLAY LLAY</option>
			<option value='MACHALI'>MACHALI</option>
			<option value='MAFIL'>MAFIL</option>
			<option value='MALLOA'>MALLOA</option>
			<option value='MARCHIGUE'>MARCHIGUE</option>
			<option value='MARIA ELENA'>MARIA ELENA</option>
			<option value='MARIA PINTO'>MARIA PINTO</option>
			<option value='SAN JOSE DE MARIQUINA'>SAN JOSE DE MARIQUINA</option>
			<option value='MAULE'>MAULE</option>
			<option value='MAULLIN'>MAULLIN</option>
			<option value='MEJILLONES'>MEJILLONES</option>
			<option value='MELIPEUCO'>MELIPEUCO</option>
			<option value='MELIPILLA'>MELIPILLA</option>
			<option value='MOLINA'>MOLINA</option>
			<option value='MONTE PATRIA'>MONTE PATRIA</option>
			<option value='MOSTAZAL'>MOSTAZAL</option>
			<option value='MULCHEN'>MULCHEN</option>
			<option value='NACIMIENTO'>NACIMIENTO</option>
			<option value='NANCAGUA'>NANCAGUA</option>
			<option value='PUERTO NATALES'>PUERTO NATALES</option>
			<option value='CABO DE HORNOS (EX NAVARINO)'>CABO DE HORNOS (EX NAVARINO)</option>
			<option value='NAVIDAD'>NAVIDAD</option>
			<option value='NEGRETE'>NEGRETE</option>
			<option value='NINHUE'>NINHUE</option>
			<option value='NOGALES'>NOGALES</option>
			<option value='NUEVA IMPERIAL'>NUEVA IMPERIAL</option>
			<option value='ÑIQUEN'>ÑIQUEN</option>
			<option value='O'HIGGINS'>O'HIGGINS</option>
			<option value='OLIVAR'>OLIVAR</option>
			<option value='OLMUE'>OLMUE</option>
			<option value='OLLAGUE'>OLLAGUE</option>
			<option value='OSORNO'>OSORNO</option>
			<option value='OVALLE'>OVALLE</option>
			<option value='PAIHUANO'>PAIHUANO</option>
			<option value='PAILLACO'>PAILLACO</option>
			<option value='PAINE'>PAINE</option>
			<option value='PALENA'>PALENA</option>
			<option value='PALMILLA'>PALMILLA</option>
			<option value='PANGUIPULLI'>PANGUIPULLI</option>
			<option value='PANQUEHUE'>PANQUEHUE</option>
			<option value='PAPUDO'>PAPUDO</option>
			<option value='PAREDONES'>PAREDONES</option>
			<option value='PARRAL'>PARRAL</option>
			<option value='PELARCO'>PELARCO</option>
			<option value='PELLUHUE'>PELLUHUE</option>
			<option value='PEMUCO'>PEMUCO</option>
			<option value='PENCAHUE'>PENCAHUE</option>
			<option value='PENCO'>PENCO</option>
			<option value='PEÑAFLOR'>PEÑAFLOR</option>
			<option value='PERALILLO'>PERALILLO</option>
			<option value='PERQUENCO'>PERQUENCO</option>
			<option value='PETORCA'>PETORCA</option>
			<option value='PEUMO'>PEUMO</option>
			<option value='PICA'>PICA</option>
			<option value='PICHIDEGUA'>PICHIDEGUA</option>
			<option value='PICHILEMU'>PICHILEMU</option>
			<option value='PINTO'>PINTO</option>
			<option value='PIRQUE'>PIRQUE</option>
			<option value='PITRUFQUEN'>PITRUFQUEN</option>
			<option value='PLACILLA'>PLACILLA</option>
			<option value='PORTEZUELO'>PORTEZUELO</option>
			<option value='PORVENIR'>PORVENIR</option>
			<option value='POZO ALMONTE'>POZO ALMONTE</option>
			<option value='PRIMAVERA'>PRIMAVERA</option>
			<option value='PUCON'>PUCON</option>
			<option value='PUCHUNCAVI'>PUCHUNCAVI</option>
			<option value='PUERTO MONTT'>PUERTO MONTT</option>
			<option value='PUERTO OCTAY'>PUERTO OCTAY</option>
			<option value='PUERTO SAAVEDRA'>PUERTO SAAVEDRA</option>
			<option value='PUERTO VARAS'>PUERTO VARAS</option>
			<option value='PUMANQUE'>PUMANQUE</option>
			<option value='PUNITAQUI'>PUNITAQUI</option>
			<option value='PUNTA ARENAS'>PUNTA ARENAS</option>
			<option value='PUQUELDON'>PUQUELDON</option>
			<option value='PUREN'>PUREN</option>
			<option value='PURRANQUE'>PURRANQUE</option>
			<option value='PUTAENDO'>PUTAENDO</option>
			<option value='PUTRE'>PUTRE</option>
			<option value='PUYEHUE'>PUYEHUE</option>
			<option value='QUEILEN'>QUEILEN</option>
			<option value='QUELLON'>QUELLON</option>
			<option value='QUEMCHI'>QUEMCHI</option>
			<option value='QUILPUE'>QUILPUE</option>
			<option value='QUILACO'>QUILACO</option>
			<option value='QUILLON'>QUILLON</option>
			<option value='QUILLOTA'>QUILLOTA</option>
			<option value='QUINCHAO'>QUINCHAO</option>
			<option value='QUINTA DE TILCOCO'>QUINTA DE TILCOCO</option>
			<option value='QUINTERO'>QUINTERO</option>
			<option value='QUIRIHUE'>QUIRIHUE</option>
			<option value='RANCAGUA'>RANCAGUA</option>
			<option value='RANQUIL'>RANQUIL</option>
			<option value='RAUCO'>RAUCO</option>
			<option value='RENAICO'>RENAICO</option>
			<option value='CONCHALI'>CONCHALI</option>
			<option value='CERRO NAVIA'>CERRO NAVIA</option>
			<option value='CERRILLOS'>CERRILLOS</option>
			<option value='EL BOSQUE'>EL BOSQUE</option>
			<option value='ESTACION CENTRAL'>ESTACION CENTRAL</option>
			<option value='HUECHURABA'>HUECHURABA</option>
			<option value='INDEPENDENCIA'>INDEPENDENCIA</option>
			<option value='LAS CONDES'>LAS CONDES</option>
			<option value='LA CISTERNA'>LA CISTERNA</option>
			<option value='LO BARNECHEA'>LO BARNECHEA</option>
			<option value='LO ESPEJO'>LO ESPEJO</option>
			<option value='LA FLORIDA'>LA FLORIDA</option>
			<option value='LA GRANJA'>LA GRANJA</option>
			<option value='LO PRADO'>LO PRADO</option>
			<option value='LA PINTANA'>LA PINTANA</option>
			<option value='LA REINA'>LA REINA</option>
			<option value='MAIPU'>MAIPU</option>
			<option value='MACUL'>MACUL</option>
			<option value='ÑUÑOA'>ÑUÑOA</option>
			<option value='PROVIDENCIA'>PROVIDENCIA</option>
			<option value='PUENTE ALTO'>PUENTE ALTO</option>
			<option value='PEDRO AGUIRRE CERDA'>PEDRO AGUIRRE CERDA</option>
			<option value='PEÑALOLEN'>PEÑALOLEN</option>
			<option value='PUDAHUEL'>PUDAHUEL</option>
			<option value='QUILICURA'>QUILICURA</option>
			<option value='QUINTA NORMAL'>QUINTA NORMAL</option>
			<option value='RENCA'>RENCA</option>
			<option value='RECOLETA'>RECOLETA</option>
			<option value='SAN BERNARDO'>SAN BERNARDO</option>
			<option value='SAN JOAQUIN'>SAN JOAQUIN</option>
			<option value='SAN MIGUEL'>SAN MIGUEL</option>
			<option value='SAN RAMON'>SAN RAMON</option>
			<option value='SANTIAGO'>SANTIAGO</option>
			<option value='VITACURA'>VITACURA</option>
			<option value='SAN JOSE DE MAIPO'>SAN JOSE DE MAIPO</option>
			<option value='ALGARROBO'>ALGARROBO</option>
			<option value='ALHUE'>ALHUE</option>
			<option value='ALTO DEL CARMEN'>ALTO DEL CARMEN</option>
			<option value='ANCUD'>ANCUD</option>
			<option value='ANDACOLLO'>ANDACOLLO</option>
			<option value='ANGOL'>ANGOL</option>
			<option value='ANTOFAGASTA'>ANTOFAGASTA</option>
			<option value='ANTUCO'>ANTUCO</option>
			<option value='ARAUCO'>ARAUCO</option>
			<option value='ARICA'>ARICA</option>
			<option value='AYSEN'>AYSEN</option>
			<option value='BUIN'>BUIN</option>
			<option value='BULNES'>BULNES</option>
			<option value='CABILDO'>CABILDO</option>
			<option value='CABRERO'>CABRERO</option>
			<option value='CALAMA'>CALAMA</option>
			<option value='CALBUCO'>CALBUCO</option>
			<option value='CALDERA'>CALDERA</option>
			<option value='CATEMU'>CATEMU</option>
			<option value='CALERA DE TANGO'>CALERA DE TANGO</option>
			<option value='CALLE LARGA'>CALLE LARGA</option>
			<option value='CAMARONES'>CAMARONES</option>
			<option value='CAMIÑA'>CAMIÑA</option>
			<option value='CANELA O MINCHA'>CANELA O MINCHA</option>
			<option value='CAÑETE'>CAÑETE</option>
			<option value='CARAHUE'>CARAHUE</option>
			<option value='CARTAGENA'>CARTAGENA</option>
			<option value='CASABLANCA'>CASABLANCA</option>
			<option value='CASTRO'>CASTRO</option>
			<option value='CAUQUENES'>CAUQUENES</option>
			<option value='CISNES'>CISNES</option>
			<option value='COCHAMO'>COCHAMO</option>
			<option value='COCHRANE'>COCHRANE</option>
			<option value='CODEGUA'>CODEGUA</option>
			<option value='COELEMU'>COELEMU</option>
			<option value='COIHUECO'>COIHUECO</option>
			<option value='COINCO'>COINCO</option>
			<option value='COLBUN'>COLBUN</option>
			<option value='COLCHANE'>COLCHANE</option>
			<option value='COLINA'>COLINA</option>
			<option value='COLTAUCO'>COLTAUCO</option>
			<option value='COLLIPULLI'>COLLIPULLI</option>
			<option value='COMBARBALA'>COMBARBALA</option>
			<option value='CONCEPCION'>CONCEPCION</option>
			<option value='CONSTITUCION'>CONSTITUCION</option>
			<option value='CONTULMO'>CONTULMO</option>
			<option value='COPIAPO'>COPIAPO</option>
			<option value='COQUIMBO'>COQUIMBO</option>
			<option value='CORONEL'>CORONEL</option>
			<option value='CORRAL'>CORRAL</option>
			<option value='COYHAIQUE'>COYHAIQUE</option>
			<option value='CUNCO'>CUNCO</option>
			<option value='CURACAUTIN'>CURACAUTIN</option>
			<option value='CURACAVI'>CURACAVI</option>
			<option value='CURACO DE VELEZ'>CURACO DE VELEZ</option>
			<option value='CURANILAHUE'>CURANILAHUE</option>
			<option value='CURARREHUE'>CURARREHUE</option>
			<option value='CUREPTO'>CUREPTO</option>
			<option value='CURICO'>CURICO</option>
			<option value='CHAITEN'>CHAITEN</option>
			<option value='CHANCO'>CHANCO</option>
			<option value='CHAÑARAL'>CHAÑARAL</option>
			<option value='CHEPICA'>CHEPICA</option>
			<option value='CHILE CHICO'>CHILE CHICO</option>
			<option value='CHILLAN'>CHILLAN</option>
			<option value='CHIMBARONGO'>CHIMBARONGO</option>
			<option value='CHONCHI'>CHONCHI</option>
			<option value='DALCAHUE'>DALCAHUE</option>
			<option value='DIEGO DE ALMAGRO'>DIEGO DE ALMAGRO</option>
			<option value='DOÑIHUE'>DOÑIHUE</option>
			<option value='RENGO'>RENGO</option>
			<option value='REQUINOA'>REQUINOA</option>
			<option value='RETIRO'>RETIRO</option>
			<option value='RINCONADA'>RINCONADA</option>
			<option value='RIO BUENO'>RIO BUENO</option>
			<option value='RIO CLARO'>RIO CLARO</option>
			<option value='RIO HURTADO'>RIO HURTADO</option>
			<option value='RIO IBAQEZ'>RIO IBAQEZ</option>
			<option value='RIO NEGRO'>RIO NEGRO</option>
			<option value='RIO VERDE'>RIO VERDE</option>
			<option value='ROMERAL'>ROMERAL</option>
			<option value='SAGRADA FAMILIA'>SAGRADA FAMILIA</option>
			<option value='SALAMANCA'>SALAMANCA</option>
			<option value='SAN JAVIER'>SAN JAVIER</option>
			<option value='SAN ANTONIO'>SAN ANTONIO</option>
			<option value='SAN CARLOS'>SAN CARLOS</option>
			<option value='SAN CLEMENTE'>SAN CLEMENTE</option>
			<option value='SAN ESTEBAN'>SAN ESTEBAN</option>
			<option value='SAN FABIAN'>SAN FABIAN</option>
			<option value='SAN FELIPE'>SAN FELIPE</option>
			<option value='SAN FERNANDO'>SAN FERNANDO</option>
			<option value='SAN GREGORIO'>SAN GREGORIO</option>
			<option value='SAN IGNACIO'>SAN IGNACIO</option>
			<option value='SAN JUAN DE LA COSTA'>SAN JUAN DE LA COSTA</option>
			<option value='SAN NICOLAS'>SAN NICOLAS</option>
			<option value='SAN PABLO'>SAN PABLO</option>
			<option value='SAN PEDRO'>SAN PEDRO</option>
			<option value='SAN ROSENDO'>SAN ROSENDO</option>
			<option value='SAN VICENTE DE TAGUA TAGUA'>SAN VICENTE DE TAGUA TAGUA</option>
			<option value='SANTA CRUZ'>SANTA CRUZ</option>
			<option value='SANTA JUANA'>SANTA JUANA</option>
			<option value='SANTA MARIA'>SANTA MARIA</option>
			<option value='SANTO DOMINGO'>SANTO DOMINGO</option>
			<option value='SIERRA GORDA'>SIERRA GORDA</option>
			<option value='SN.PEDRO DE ATACAMA'>SN.PEDRO DE ATACAMA</option>
			<option value='TALAGANTE'>TALAGANTE</option>
			<option value='TALCA'>TALCA</option>
			<option value='TALCAHUANO'>TALCAHUANO</option>
			<option value='TENO'>TENO</option>
			<option value='TALTAL'>TALTAL</option>
			<option value='TEMUCO'>TEMUCO</option>
			<option value='TEODORO SCHMIDT'>TEODORO SCHMIDT</option>
			<option value='TIERRA AMARILLA'>TIERRA AMARILLA</option>
			<option value='TILTIL'>TILTIL</option>
			<option value='TIMAUKEL'>TIMAUKEL</option>
			<option value='TIRUA'>TIRUA</option>
			<option value='TOCOPILLA'>TOCOPILLA</option>
			<option value='TOLTEN'>TOLTEN</option>
			<option value='TOME'>TOME</option>
			<option value='TORRES DEL PAINE'>TORRES DEL PAINE</option>
			<option value='TORTEL'>TORTEL</option>
			<option value='TRAIGUEN'>TRAIGUEN</option>
			<option value='TREHUACO'>TREHUACO</option>
			<option value='TUCAPEL'>TUCAPEL</option>
			<option value='VALDIVIA'>VALDIVIA</option>
			<option value='VALPARAISO'>VALPARAISO</option>
			<option value='VALLENAR'>VALLENAR</option>
			<option value='VICTORIA'>VICTORIA</option>
			<option value='VICUÑA'>VICUÑA</option>
			<option value='VICHUQUEN'>VICHUQUEN</option>
			<option value='VILCUN'>VILCUN</option>
			<option value='VILLA ALEGRE'>VILLA ALEGRE</option>
			<option value='VILLA ALEMANA'>VILLA ALEMANA</option>
			<option value='VILLARRICA'>VILLARRICA</option>
			<option value='VIÑA DEL MAR'>VIÑA DEL MAR</option>
			<option value='YERBAS BUENAS'>YERBAS BUENAS</option>
			<option value='YUMBEL'>YUMBEL</option>
			<option value='YUNGAY'>YUNGAY</option>
			<option value='ZAPALLAR'>ZAPALLAR</option>
			<option value='COBQUECURA'>COBQUECURA</option>
			<option value='QUILLECO'>QUILLECO</option>
			<option value='SANTA BARBARA'>SANTA BARBARA</option>
			<option value='CHILOE'>CHILOE</option>
			<option value='CONCON'>CONCON</option>
			<option value='LLOLLEO'>LLOLLEO</option>
			<option value='PADRE HURTADO'>PADRE HURTADO</option>
			<option value='CHIGUAYANTE'>CHIGUAYANTE</option>
			<option value='MALLOCO'>MALLOCO</option>
			<option value='SAN RAFAEL'>SAN RAFAEL</option>
			<option value='SAN PEDRO DE LA PAZ'>SAN PEDRO DE LA PAZ</option>
			<option value='PADRE LAS CASAS'>PADRE LAS CASAS</option>
			<option value='ANTARTICA'>ANTARTICA</option>
			<option value='CHILLAN VIEJO'>CHILLAN VIEJO</option>
			<option value='ALTO BIOBIO'>ALTO BIOBIO</option>
			<option value='HUALPEN'>HUALPEN</option>
			<option value='ALTO HOSPICIO'>ALTO HOSPICIO</option>
			<option value='CHOLCHOL'>CHOLCHOL</option>
			<option value='EXTRANJERO'>EXTRANJERO</option>
		</select>

		</div>		
			
			
			
        </div>	
      <hr>		
		<!--Datos Personales -->
	
		<!--Forma de Pago -->
		<div id="fpagoA"class="visible">		
		<div  class="form-group row" >
			<div  class="col-md-6 field-label-responsive"><strong>Forma de Pago:</strong><small  class="form-text text-muted"><p style="color:red;">(marque la opción que corresponda)</p></small></div>
            <div  class="col-md-12 field-label-responsive"><strong>Nota:La inscripción del alumno se hace efectiva una vez se documenta el valor total del Diplomado </strong></div>    
	   </div>		
          
       
<!-- Modal data-toggle="modal" -->
				<div class="modal fade" id="TranferenciaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Transferencia Bancaria Internacional (pago contado)</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
							<h6>Depositar en la cuenta de la Pontificia Universidad Católica  el monto a pagar en dólares indicado en “Monto a pagar en dólares”.</h6><br><br>
							<b>Datos de la cuenta</b><br><br>
								<table>
							<tr>
								<td><b>NOMBRE CUENTA:</b></td><td>PONTIFICIA UNIVERSIDAD CATOLICA DE CHILE	</td>
							</tr>
							<tr>
								<td><b>NOMBRE DEL BANCO:</b></td><td>CITIBANK </td>
							</tr>
							<tr>
								<td><b>DIRECCION:</b></td><td>111 WALL STREET NEW YORK, N.Y.		</td>
							</tr>
							<tr>
								<td><b>NUMERO DE CTA.CTE.:</b>	</td><td>36315872</td>
							</tr>
							<tr>
								<td><b>ABA:</b></td><td>021000089	</td>
							</tr>
							<tr>
								<td><b>SWITF:</b></td><td>CITIUS33</td>
							</tr>
							<tr>
								<td><b>CONTACTO:</b></td><td>Eduardo Calquin</td>
							</tr>
							<tr>
								<td><b>DIRECCION:</b></td><td>Avenida Libertador Bernardo O’Higgins 340 , Santiago - Chile</td>
							</tr>
							<tr>
								<td><b>FONO:</b></td><td>562-226862402 </td>
							</tr>
							<tr>
								<td><b>E-MAIL:</b></td><td>ecalquin@uc.cl </td>
							</tr>
							<tr>
								<td><b>MONEDA TRANSADA:</b></td><td>US$ DOLARES</td>
							</tr>
							</table><br></li>
								<li>Adicionalmente debe pagar la comisión por transferencias internacionales que aplica su banco según el convenio que Ud. posea (*).</li>
								<li>Escanear el comprobante de depósito.</li>
								</ol><br>
								<h6>(*): Es muy posible que al realizar el depósito bancario su banco le cobre una comisión por transferencia internacional, por tal motivo debe pagar este cobro al momento de hacer el depósito a nombre de la Pontificia Universidad Católica de Chile. Si Ud. descuenta este costo del monto a transferir quedará con un saldo a pagar en la siguiente cuota.</h6>

					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
					
					  </div>
					</div>
				  </div>
				</div>
<!--Fin del Modal -->
<!-- Modal data-toggle="modal" -->
				<div class="modal fade" id="ModalCheque" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Cheque</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
                       Definir Texto
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
					
					  </div>
					</div>
				  </div>
				</div>
<!--Fin del Modal -->
<!-- Modal data-toggle="modal" -->
				<div class="modal fade" id="ModalOC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Orden de Compra</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
                       Definir Texto
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
					
					  </div>
					</div>
				  </div>
				</div>
<!--Fin del Modal -->		
<!-- Modal data-toggle="modal" -->
				<div class="modal fade" id="ModalCuponera" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Cuponera</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
                       Definir Texto
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
					
					  </div>
					</div>
				  </div>
				</div>
<!--Fin del Modal -->	
<!-- Modal data-toggle="modal" -->
				<div class="modal fade" id="ModalTC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tarjeta de Credito Presencial</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
                       Definir Texto
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
					
					  </div>
					</div>
				  </div>
				</div>
<!--Fin del Modal -->	

<!-- Modal data-toggle="modal" -->
				<div class="modal fade" id="ModalWP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Web Pay Plus</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
                       Definir Texto
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
					
					  </div>
					</div>
				  </div>
				</div>
<!--Fin del Modal -->	
		
<!-- Modal data-toggle="modal" -->
				<div class="modal fade" id="TranferenciaChile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Transferencia Bancaria/Deposito</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
							<b>Datos de la cuenta</b><br><br>
								<table>
							<tr>
								<td><b>NOMBRE CUENTA:</b></td><td>PONTIFICIA UNIVERSIDAD CATOLICA DE CHILE	</td>
							</tr>
							<tr>
								<td><b>NOMBRE DEL BANCO:</b></td><td>BANCO SANTANDER</td>
							</tr>
							<tr>
								<td><b>NUMERO DE CTA.CTE.:</b>	</td><td>080104190-8</td>
							</tr>
							<tr>
								<td><b>CONTACTO:</b></td><td><?php echo $jsondecode->ejec->name;?></td>
							</tr>
						    <tr>
								<td><b>EMAIL:</b></td><td><?php echo $jsondecode->ejec->email;?></td>
							</tr>					
							<tr>
								<td><b>DIRECCION:</b></td><td>Avenida Libertador Bernardo O’Higgins 340 , Santiago - Chile</td>
							</tr>
							<tr>
								<td><b>FONO:</b></td><td>+56 22 8400800 </td>
							</tr>
							</table><br>
								<h5>Adicionalmente debe escanear el comprobante del depósito y enviarlo a su ejecutiva.</h5>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
					
					  </div>
					</div>
				  </div>
				</div>
<!--Fin del Modal -->	

		<div class="form-check form-check-inline d" id="inlineCheckbox1">
		  <input class="form-check-input" name="mpago" type="radio" id="DataCheckbox1" value="Transferencia Bancaria Internacional (pago contado)">
		  <a class="form-check-label" data-toggle="modal" href="#TranferenciaModal">Transferencia Bancaria Internacional</a>
		</div>
					
		<div class="form-check form-check-inline d" id="inlineCheckbox2">
		  <input class="form-check-input" name="mpago" type="radio" id="DataCheckbox2" value="Cheque">
		   <a class="form-check-label" data-toggle="modal" href="#ModalCheque">Cheque</a>
		</div>	
		
		<div class="form-check form-check-inline d" id="inlineCheckbox3">
		  <input class="form-check-input" name="mpago" type="radio" id="DataCheckbox3" value="Orden de Compra">
		   <a class="form-check-label" data-toggle="modal" href="#ModalOC">Orden de Compra</a>
		</div>			
		<br><br>
		  <div class="form-check form-check-inline d"id="inlineCheckbox4" >
		  <input class="form-check-input " name="mpago" type="radio" id="DataCheckbox4" value="Cuponera">
		 <a class="form-check-label" data-toggle="modal" href="#ModalCuponera">Cuponera (Pago en cuotas)</a>
		</div>
		
		<div class="form-check form-check-inline d" id="inlineCheckbox5">
		  <input class="form-check-input" name="mpago" type="radio" id="DataCheckbox5" value="Tarjeta Bancaria">
		  <a class="form-check-label" data-toggle="modal" href="#ModalTC">Tarjeta Bancaria</a>
		</div>	
		
		<div class="form-check form-check-inline d" id="inlineCheckbox6">
		  <input class="form-check-input" name="mpago" type="radio" id="DataCheckbox6" value="WebPay">
		  <a class="form-check-label" data-toggle="modal" href="#ModalWP">WebPay</a>
		</div>	

		<div class="form-check form-check-inline d" id="inlineCheckbox7">
		  <input class="form-check-input" name="mpago" type="radio" id="DataCheckbox7" value="Transferencia/Deposito">
		  <a class="form-check-label" data-toggle="modal" href="#TranferenciaChile">Transferencia/Deposito</a>
		</div>			
		
		</div>
		
		
       		
<hr>
<br>
		<div  class="form-group row" >
			<div  class="col-md-3 field-label-responsive"><strong>Detalle del Pagador:</strong><small  class="form-text text-muted"><p style="color:red;">Indicar detalle</p></small></div>
			
		 <div  class="col-md-3 field-label-responsive"><strong>  </strong></div> 
		 <div class="col-md-4">
			<Select type="text" name="tipo_p" id="tipo_p" class="form-control" placeholder="Tipo de Persona"  >
                                                    <option value="" selected>Seleccione.</option>
                                                    <option value='Juridica'> Empresa</option>
													 <option value='Natural'> Alumno</option>
													</Select>
		 </div>			
        </div>
<br>		
<!--Datos de Pago class="d-none" -->
		<div id="datosPagoPN" class="d-none">	
		
		<div  class="form-group row" >
			<div  class="col-md-6 field-label-responsive"><strong>Alumno:</strong></div>
				
        </div>
		
		<div class ="form-group row">
		<div  class="col-md-3 field-label-responsive"><strong> Nombre del Pagador: </strong></div> 
		 <div class="col-md-3">
			<input type="text" name="nom_pn"class="form-control" placeholder="nombre" value="">
		 </div>
		 
		<div  class="col-md-2 field-label-responsive"><strong> Apellido del Pagador: </strong></div>
		<div class="col-md-3">
			 <input type="text" name="ape_pn"class="form-control" placeholder="Apellido" value="">
		</div>		 
		 
		</div>
		
		<hr>
		</div>
		
		<!--Datos de Pago" -->
		
		
		<!--Persona Jurida -->
		<div id="datosPagoPJ" class="d-none">	
		
		<div  class="form-group row" >
			<div  class="col-md-6 field-label-responsive"><strong>Facturar a:</strong></div>
				
        </div>
		
		<div class ="form-group row">
		<div  class="col-md-3 field-label-responsive"><strong> Razon Social: </strong></div> 
		 <div class="col-md-3">
			<input type="text" name="razon_social"class="form-control" placeholder="nombre" value="">
		 </div>
		 
		<div  class="col-md-2 field-label-responsive"><strong> Sitio web Empresa: </strong></div>
		<div class="col-md-3">
			 <input type="text" name="web_e"class="form-control" placeholder="https://www.google.com" value="">
		</div>		 
		 
		</div>
		
		
		<div class ="form-group row">
		<div  class="col-md-3 field-label-responsive"><strong> Giro: </strong></div> 
		 <div class="col-md-3">
			<input type="text" name="giro"class="form-control" placeholder="giro" value="">
		 </div>
		 
		<div  class="col-md-2 field-label-responsive"><strong> Nombre Representante Legal: </strong></div>
		<div class="col-md-3">
			 <input type="text" name="nombre_rl"class="form-control" placeholder="Nombre" value="">
		</div>	
		 
		</div>
		
		<div class ="form-group row">
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
		
		<div  class="col-md-2 field-label-responsive"><strong> Rut Representante Legal: </strong></div>
		<div class="col-md-3">
			 <input type="text" name="rut_rl"class="form-control" placeholder="Rut" value="">
		</div>			
		</div>
		
		<hr>
		</div>
		
		<!--Persona Jurida -->				
		
	    <!--Direccion -->
		<div id="Direccion_contacto" class="d-none">	
		<div  class="form-group row" >
			<div  class="col-md-6 field-label-responsive"><strong>Direccion del Pagador:</strong></div>
				
        </div>
		
		<div class ="form-group row">
		<div  class="col-md-3 field-label-responsive"><strong> Direccion: </strong></div> 
		 <div class="col-md-3">
			<input type="text" name="dir_pagador"class="form-control" placeholder="direccion" value="">
		 </div>
		 
		<div  class="col-md-2 field-label-responsive"><strong> ciudad: </strong></div>
		<div class="col-md-3">
			 <input type="text" name="ciudad_pagador"class="form-control" placeholder="ciudad" value="">
		</div>		 
		 
		</div>	

		<div class ="form-group row">
		<div  class="col-md-3 field-label-responsive"><strong> Pais: </strong></div> 
		 <div class="col-md-3">
		
		<Select type="text" name="pais_pagador" id="pais" class="form-control" placeholder="Pais"  >
															<option value="" selected>Seleccione país</option>
															<option value='Afganistán'> Afganistán</option>
															<option value='Albania'> Albania</option>
															<option value='Alemania'> Alemania</option>
															<option value='Andorra'> Andorra</option>
															<option value='Angola'> Angola</option>
															<option value='Antigua y Barbuda'> Antigua y Barbuda</option>
															<option value='Arabia Saudita'> Arabia Saudita</option>
															<option value='Argelia'> Argelia</option>
															<option value='Argentina'> Argentina</option>
															<option value='Armenia'> Armenia</option>
															<option value='Australia'> Australia</option>
															<option value='Austria'> Austria</option>
															<option value='Azerbaiyán'> Azerbaiyán</option>
															<option value='Bahamas'> Bahamas</option>
															<option value='Bangladés'> Bangladés</option>
															<option value='Barbados'> Barbados</option>
															<option value='Baréin'> Baréin</option>
															<option value='Bélgica'> Bélgica</option>
															<option value='Belice'> Belice</option>
															<option value='Benín'> Benín</option>
															<option value='Bielorrusia'> Bielorrusia</option>
															<option value='Birmania'> Birmania</option>
															<option value='Bolivia'> Bolivia</option>
															<option value='Bosnia y Herzegovina'> Bosnia y Herzegovina</option>
															<option value='Botsuana'> Botsuana</option>
															<option value='Brasil'> Brasil</option>
															<option value='Brunéi'> Brunéi</option>
															<option value='Bulgaria'> Bulgaria</option>
															<option value='Burkina Faso'> Burkina Faso</option>
															<option value='Burundi'> Burundi</option>
															<option value='Bután'> Bután</option>
															<option value='Cabo Verde'> Cabo Verde</option>
															<option value='Camboya'> Camboya</option>
															<option value='Camerún'> Camerún</option>
															<option value='Canadá'> Canadá</option>
															<option value='Catar'> Catar</option>
															<option value='Chad'> Chad</option>
															<option value='Chile' > Chile</option>
															<option value='China'> China</option>
															<option value='Chipre'> Chipre</option>
															<option value='Ciudad del Vaticano'> Ciudad del Vaticano</option>
															<option value='Colombia'> Colombia</option>
															<option value='Comoras'> Comoras</option>
															<option value='Corea del Norte'> Corea del Norte</option>
															<option value='Corea del Sur'> Corea del Sur</option>
															<option value='Costa de Marfil'> Costa de Marfil</option>
															<option value='Costa Rica'> Costa Rica</option>
															<option value='Croacia'> Croacia</option>
															<option value='Cuba'> Cuba</option>
															<option value='Dinamarca'> Dinamarca</option>
															<option value='Dominica'> Dominica</option>
															<option value='Ecuador'> Ecuador</option>
															<option value='Egipto'> Egipto</option>
															<option value='El Salvador'> El Salvador</option>
															<option value='Emiratos Árabes Unidos'> Emiratos Árabes Unidos</option>
															<option value='Eritrea'> Eritrea</option>
															<option value='Eslovaquia'> Eslovaquia</option>
															<option value='Eslovenia'> Eslovenia</option>
															<option value='España'> España</option>
															<option value='Estados Unidos'> Estados Unidos</option>
															<option value='Estonia'> Estonia</option>
															<option value='Etiopía'> Etiopía</option>
															<option value='Filipinas'> Filipinas</option>
															<option value='Finlandia'> Finlandia</option>
															<option value='Fiyi'> Fiyi</option>
															<option value='Francia'> Francia</option>
															<option value='Gabón'> Gabón</option>
															<option value='Gambia'> Gambia</option>
															<option value='Georgia'> Georgia</option>
															<option value='Ghana'> Ghana</option>
															<option value='Granada'> Granada</option>
															<option value='Grecia'> Grecia</option>
															<option value='Guatemala'> Guatemala</option>
															<option value='Guyana'> Guyana</option>
															<option value='Guinea'> Guinea</option>
															<option value='Guinea ecuatorial'> Guinea ecuatorial</option>
															<option value='Guinea-Bisáu'> Guinea-Bisáu</option>
															<option value='Haití'> Haití</option>
															<option value='Honduras'> Honduras</option>
															<option value='Hungría'> Hungría</option>
															<option value='India'> India</option>
															<option value='Indonesia'> Indonesia</option>
															<option value='Irak'> Irak</option>
															<option value='Irán'> Irán</option>
															<option value='Irlanda'> Irlanda</option>
															<option value='Islandia'> Islandia</option>
															<option value='Islas Marshall'> Islas Marshall</option>
															<option value='Islas Salomón'> Islas Salomón</option>
															<option value='Israel'> Israel</option>
															<option value='Italia'> Italia</option>
															<option value='Jamaica'> Jamaica</option>
															<option value='Japón'> Japón</option>
															<option value='Jordania'> Jordania</option>
															<option value='Kazajistán'> Kazajistán</option>
															<option value='Kenia'> Kenia</option>
															<option value='Kirguistán'> Kirguistán</option>
															<option value='Kiribati'> Kiribati</option>
															<option value='Kuwait'> Kuwait</option>
															<option value='Laos'> Laos</option>
															<option value='Lesoto'> Lesoto</option>
															<option value='Letonia'> Letonia</option>
															<option value='Líbano'> Líbano</option>
															<option value='Liberia'> Liberia</option>
															<option value='Libia'> Libia</option>
															<option value='Liechtenstein'> Liechtenstein</option>
															<option value='Lituania'> Lituania</option>
															<option value='Luxemburgo'> Luxemburgo</option>
															<option value='Madagascar'> Madagascar</option>
															<option value='Malasia'> Malasia</option>
															<option value='Malaui'> Malaui</option>
															<option value='Maldivas'> Maldivas</option>
															<option value='Malí'> Malí</option>
															<option value='Malta'> Malta</option>
															<option value='Marruecos'> Marruecos</option>
															<option value='Mauricio'> Mauricio</option>
															<option value='Mauritania'> Mauritania</option>
															<option value='México'> México</option>
															<option value='Micronesia'> Micronesia</option>
															<option value='Moldavia'> Moldavia</option>
															<option value='Mónaco'> Mónaco</option>
															<option value='Mongolia'> Mongolia</option>
															<option value='Montenegro'> Montenegro</option>
															<option value='Mozambique'> Mozambique</option>
															<option value='Namibia'> Namibia</option>
															<option value='Nauru'> Nauru</option>
															<option value='Nepal'> Nepal</option>
															<option value='Nicaragua'> Nicaragua</option>
															<option value='Níger'> Níger</option>
															<option value='Nigeria'> Nigeria</option>
															<option value='Noruega'> Noruega</option>
															<option value='Nueva Zelanda'> Nueva Zelanda</option>
															<option value='Omán'> Omán</option>
															<option value='Países Bajos'> Países Bajos</option>
															<option value='Pakistán'> Pakistán</option>
															<option value='Palaos'> Palaos</option>
															<option value='Panamá'> Panamá</option>
															<option value='Papúa Nueva Guinea'> Papúa Nueva Guinea</option>
															<option value='Paraguay'> Paraguay</option>
															<option value='Perú'> Perú</option>
															<option value='Polonia'> Polonia</option>
															<option value='Portugal'> Portugal</option>
															<option value='Reino Unido'> Reino Unido</option>
															<option value='República Centroafricana'> República Centroafricana</option>
															<option value='República Checa'> República Checa</option>
															<option value='República de Macedonia'> República de Macedonia</option>
															<option value='República del Congo'> República del Congo</option>
															<option value='República Democrática del Congo'> República Democrática del Congo</option>
															<option value='República Dominicana'> República Dominicana</option>
															<option value='República Sudafricana'> República Sudafricana</option>
															<option value='Ruanda'> Ruanda</option>
															<option value='Rumanía'> Rumanía</option>
															<option value='Rusia'> Rusia</option>
															<option value='Samoa'> Samoa</option>
															<option value='San Cristóbal y Nieves'> San Cristóbal y Nieves</option>
															<option value='San Marino'> San Marino</option>
															<option value='San Vicente y las Granadinas'> San Vicente y las Granadinas</option>
															<option value='Santa Lucía'> Santa Lucía</option>
															<option value='Santo Tomé y Príncipe'> Santo Tomé y Príncipe</option>
															<option value='Senegal'> Senegal</option>
															<option value='Serbia'> Serbia</option>
															<option value='Seychelles'> Seychelles</option>
															<option value='Sierra Leona'> Sierra Leona</option>
															<option value='Singapur'> Singapur</option>
															<option value='Siria'> Siria</option>
															<option value='Somalia'> Somalia</option>
															<option value='Sri Lanka'> Sri Lanka</option>
															<option value='Suazilandia'> Suazilandia</option>
															<option value='Sudán'> Sudán</option>
															<option value='Sudán del Sur'> Sudán del Sur</option>
															<option value='Suecia'> Suecia</option>
															<option value='Suiza'> Suiza</option>
															<option value='Surinam'> Surinam</option>
															<option value='Tailandia'> Tailandia</option>
															<option value='Tanzania'> Tanzania</option>
															<option value='Tayikistán'> Tayikistán</option>
															<option value='Timor Oriental'> Timor Oriental</option>
															<option value='Togo'> Togo</option>
															<option value='Tonga'> Tonga</option>
															<option value='Trinidad y Tobago'> Trinidad y Tobago</option>
															<option value='Túnez'> Túnez</option>
															<option value='Turkmenistán'> Turkmenistán</option>
															<option value='Turquía'> Turquía</option>
															<option value='Tuvalu'> Tuvalu</option>
															<option value='Ucrania'> Ucrania</option>
															<option value='Uganda'> Uganda</option>
															<option value='Uruguay'> Uruguay</option>
															<option value='Uzbekistán'> Uzbekistán</option>
															<option value='Vanuatu'> Vanuatu</option>
															<option value='Venezuela'> Venezuela</option>
															<option value='Vietnam'> Vietnam</option>
															<option value='Yemen'> Yemen</option>
															<option value='Yibuti'> Yibuti</option>
															<option value='Zambia'> Zambia</option>
															<option value='Zimbabue'> Zimbabue </option>
														</select>
		 </div>
		 
		<div  class="col-md-2 field-label-responsive"><strong> comuna: </strong></div>
		<div class="col-md-3">
			 <input type="text" name="com_pagador"class="form-control" placeholder="comuna" value="">
		</div>		 
		 
		</div>			
		<hr>
		
        </div>		
		<!--Direccion -->

	    <!--informacion_de_contacto -->
		<div id="informacion_de_contacto_PJ" class="d-none">	
		<div  class="form-group row" >
			<div  class="col-md-6 field-label-responsive"><strong>Informacion del contacto:</strong></div>
		</div>
		 
        <div class ="form-group row">
		<div  class="col-md-3 field-label-responsive"><strong> Nombre Contacto: </strong></div> 
		 <div class="col-md-3">
			<input type="text" name="nom_con"class="form-control" placeholder="Nombre" value="">
		 </div>
		 
		<div  class="col-md-2 field-label-responsive"><strong> Cargo Contacto: </strong></div>
		<div class="col-md-3">
			 <input type="text" name="cargo_con"class="form-control" placeholder="Cargo" value="">
		</div>		 
		 
		</div>				

        <div class ="form-group row">
		<div  class="col-md-3 field-label-responsive"><strong> Apellido Paterno Contacto: </strong></div> 
		 <div class="col-md-3">
			<input type="text" name="ape_pat_con"class="form-control" placeholder="Apellido Paterno" value="">
		 </div>
		 
		<div  class="col-md-2 field-label-responsive"><strong> Correo Electronico Contacto: </strong></div>
		<div class="col-md-3">
			 <input type="email" name="email_con"class="form-control" placeholder="contacto@claseejecutiva.cl" value="">
		</div>		 
		 
		</div>	

        <div class ="form-group row">
		<div  class="col-md-3 field-label-responsive"><strong> Apellido Materno Contacto: </strong></div> 
		 <div class="col-md-3">
			<input type="text" name="ape_mat_con"class="form-control" placeholder="Apellido Materno" value="">
		 </div>
		 
		<div  class="col-md-2 field-label-responsive"><strong> Telefono Contato: </strong></div>
		<div class="col-md-3">
			 <input type="email" name="tel_con"class="form-control" placeholder="+569" value="">
		</div>		 
		 
		</div>	
		
       
		<hr>
		</div>
    <!--informacion_de_contacto -->
	
	     	<!--Forma de Pago -->
		
		<br><br>
		<div class="border border-info col-md-8 mx-auto">
		<!--Seccion upload  -->
		<div  class="form-group row mx-auto">
			<div  class="col-md-10 field-label-responsive"><strong>Archivos a Subir:</strong><p style="color:red;">(Favor de subir sus antecedentes y/o Cheques en formato pdf,word o jpg. Maximo 5MB)</p></div>
        </div>

			<div  class="mx-auto">
				<div id="main">
				<input type="button" class="btn btn-primary"id="btAdd" value="Añadir Elemento" class="bt" />
				<input type="button" class="btn btn-secondary"id="btRemove" value="Eliminar Elemento" class="bt" />
				<input type="button" class="btn btn-danger"id="btRemoveAll" value="Eliminar Todo" class="bt" /><br />
				</div><br>			
			</div>
			 <p style="color:red;" class="error"><?php echo $error['error'];?></p>
			 
		<div class="progress">
			<div class="progress-bar progress-bar-striped bg-info"></div >
			<div class="percent">0%</div >
		</div> 
			<br>
			
			
		</div><br><br>
		<!--Fin upload-->
		
	   <div class="form-check form-check-inline">
	    <div class="form-check form-check-inline">
		  <input class="form-check-input" name="acepta" type="checkbox" id="inlineCheckbox3" name="acepta" value="1">
		  <label class="form-check-label" for="inlineCheckbox1">Acepto recibir información de Clase Ejecutiva</label>
		</div> 
	 </div>
   	 
	 <div class="form-group row">
		 <div class="col-md-6">
		 </div>
		 <div class="col-md-12">
		 <br><br>
		 </div>
		<div class="col-md-4">
		  <input type="submit" id="ok" class="btn btn-success btn-lg  btn-block" value="Enviar" />
		</div>
		 <div class="col-md-3">
		 <img src="/landing/contents/imagenes/ajax-loader.gif" class="img-circle invisible" id="loader" />
		 </div>
      </div>	
  </form>
 



 

   </div>
 </div>
</body>
</html>