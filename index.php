<!DOCTYPE html>
<html>
<head>
	<title>Linea del Tiempo • Historia Bíblica</title>
	<?php   require  ('url_base.php'); ?>
	<meta charset="utf-8">
	<meta name="description" content="">
	<link rel="icon" type="image/png" href="css/img/favicon.png" />
	<link rel="stylesheet" type="text/css" href="css/typography.css" />
	<link rel="stylesheet" type="text/css" href="css/timeline.css" />
</head>
<body>



	<!-- ****************************************** -->
	<!-- Mask -->
	<!-- ****************************************** -->
	<div class="mask"><div class="loading"></div></div>





	<!-- ****************************************** -->
	<!-- Menu -->
	<!-- ****************************************** -->
	<div class="menu closed">
		<div class="background"></div>
		<h2>Linea del Tiempo</h2>
		<div class="menu-items-wrap">
			<ul class="menu-items">
				<li class="home"></li>
				<li class="faq fade" data-dropdown="faq"></li>
				<li class="account fade" data-dropdown="account"></li>
				<li class="favorites fade" data-dropdown="favorites"></li>
				<!-- <li class="tools fade"></li> -->
			</ul>
			<div class="search-icon"></div>
			<input type="text" class="search" />
		</div>
		<div class="menu-toggle">
			<div class="inner-circle"></div>
			<span class="open">+</span>
			<span class="close">&ndash;</span>
		</div>
		<div class="dropdowns">
			<!-- FAQ -->
			<div class="dropdown faq">
				<div class="arrow"></div>
				<h4>Preguntas Frecuentes</h4>
				<div class="list">
					<ul>
					<li data-id = "0"> ¿Cuál es la línea de tiempo? </li>
					<li data-id = "1"> ¿Cómo determinó las fechas, particularmente el momento de la creación? </li>
					<li data-id = "2"> ¿Cuáles son sus fuentes principales para la línea de tiempo? </li>
					<li data-id = "3"> ¿Está prediciendo cuándo volverá Cristo? </li>
					<li data-id = "4"> ¿Puedo ver la línea de tiempo en un iPad u otra tableta? </li>
					<li data-id = "5"> ¿Qué navegadores admiten esta línea de tiempo? </li>
					</ul>
				</div>
			</div>
			<!-- Settings -->
			<div class="dropdown account">
				<div class="arrow"></div>
				<h4>Configurar mi cuenta</h4>
				<div class="list">
					<ul>
													<li class="signin">Iniciar</li>
							<li class="signout" style="display:none;">Cerrar</li>
											</ul>
				</div>
			</div>
			<!-- Favorites -->
			<div class="dropdown favorites">
				<div class="arrow"></div>
				<h4>Mis Favoritos</h4>
				<div class="list">
					<ul></ul>
				</div>
			</div>
			<!-- Search -->
			<div class="dropdown search">
				<div class="arrow"></div>
				<h4>No hay resultados</h4>
				<div class="list">
					<ul></ul>
					<script type="text/template" class="result-template">
						<li data-slug="%slug%" class="result">%title%</li>
					</script>
				</div>
			</div>
		</div>
	</div>


	<!-- ****************************************** -->
	<!-- TOOLTIP			 									-->
	<!-- ****************************************** -->
	<div class="tooltip">Has iniciado sesión</div>



	<!-- ****************************************** -->
	<!-- ACCOUNT SETTINGS	 									-->
	<!-- ****************************************** -->
	<div class="modal account-modal">
		<div class="modal-content account-content">
			<div class="modal-inner">
				<div class="heading">
					<p>Configurar mi cuenta</p>
					<h3>Iniciar</h3>
					<a href="#" class="close">Cerrar</a>
				</div>
				<form class="signin">
					<input type="text" name="email" placeholder="Email" tabindex="1" required="required" />
					<input type="password" name="password" placeholder="Password" tabindex="2" required="required" />
					<input type="hidden" name="type" value="signin" />
					<input type="submit" value="Sign In" />
					<p><a href="/accounts/recover_password.php" target="_blank">Olvide la clave</a></p>
					<span class="email">Correo incorrecto</span>
					<span class="password">Clave incorrecta</span>
				</form>

				<p> <strong> Crear una cuenta </strong> </p>
				<p> Cuando crea una cuenta en biblehistory.com, podrá etiquetar a su persona favorita y entradas de eventos e ir directamente a ellas cuando lo desee desde donde quiera. Esta es una gran herramienta para estudiantes de la Biblia y para estudios bíblicos con amigos y familiares. </p>
				<p> ¿Cómo? Simplemente haga clic en el botón "Agregar a favoritos", así de simple. Luego, desde la página de inicio, haga clic en la bandera en el menú principal para ver sus favoritos. </p>
				<p> ¡Regístrate hoy! Ah, y prometemos nunca dar o vender su nombre o correo electrónico a otros. </p>
				<p> <a href="/accounts/create.php" target="_blank"> Crear cuenta ahora </a> </p>
			</div>
		</div>
	</div>




	<!-- ****************************************** -->
	<!-- FAQ	 												-->
	<!-- ****************************************** -->
	<div class="modal faq-modal">
		<div class="modal-content faq-content">
			<div class="heading">
				<p>Preguntas Frecuentes</p>
				<h3>El nacimiento de Cristo</h3>
				<a href="#" class="close">Cerrar</a>
			</div>
			<div class="faq-answer 0">
				<p>Con más de 850 entradas interconectadas, esta línea de tiempo es una herramienta de estudio integral que le permite explorar todos los personajes y eventos principales de la Biblia, desde la creación del mundo hasta las profecías de los últimos días. Cada entrada en la línea de tiempo contiene un artículo breve pero perspicaz con datos interesantes sobre la persona o el evento, además de obras de arte y referencias y pasajes completos de las Escrituras para ayudarlo a encontrarlo en la Biblia.</p>
				<p>Donde sea posible, las entradas también incluyen enlaces a personajes y eventos relacionados y una presentación en video para ayudar a profundizar su comprensión de su lugar en la historia de la Biblia.</p>
				<p>La línea de tiempo se divide en tres secciones principales:</p>
				<ul>
					<li>
						<strong>Dispensación—Creación a c. 1660 AC</strong><br />
						<p>La línea de tiempo comienza con Adán en el Edén, luego a Noé y el diluvio y el nacimiento de Israel a través de Abraham, Isaac y Jacob.</p>
					</li>
					<li>
						<strong>Dispensación de—c. 1660 AC to c. 457 AC</strong><br />
						<p>Cubre la historia de la nación judía, desde Moisés y el Éxodo hasta el rey David y los profetas Daniel e Isaías.</p>
					</li>
					<li>
						<strong>Dispensación de—c. 4 AC a DC 1840</strong>
						<p>Cubre la vida, muerte y resurrección de nuestro Señor Jesucristo; los apóstoles, La reformación; y la IDMJI y la Hna. María Luisa Piraquive.</p>
					</li>
				</ul>
				<p>Each of these sections are further divided into more specific time periods for ease of study.</p>
			</div>

			<div class="faq-answer 1">
			<p> Creemos que la Biblia es la Palabra de Dios inspirada, por lo tanto, nuestra fuente principal de citas y personas en la línea de tiempo de la profecía bíblica son las genealogías de la Biblia y las comparaciones de evento a evento que se encuentran en otras fuentes no bíblicas tradicionalmente aceptadas, como como registros históricos antiguos de Josephus y estudios modernos de teólogos y educadores profesionales. Para esta cronología, confiamos en el texto masorético, en el que se basan las Biblias en inglés. </p>
			<p> Si bien creemos que la Línea de tiempo de la profecía bíblica proporciona la datación más precisa disponible, muchas fechas aún están sujetas a interpretación y algunas conjeturas educadas debido a algunas áreas vagas en la historia bíblica. Al igual que con el árbol genealógico de cualquier persona, cuanto más retrocedas, más confusas pueden volverse las cosas. </p>
			<p> El siguiente es un breve resumen de nuestra fecha calculada de creación, comenzando con la cronología encontrada en Génesis capítulo cinco: </p>
			<table>
				<tr>
				<th> Nombre </th>
				<th> Nacimiento (AC) </th>
				<th> Edad cuando nació el hijo </th>
				<th> Duración de la vida </th>
				<th> Muerte (AC) </th>
				</tr>
				<tr>
				<td> Adam </td>
				<td> 0 </td>
				<td> 130 </td>
				<td> 930 </td>
				<td> 930 </td>
				</tr>
				<tr>
				<td> Seth </td>
				<td> 130 </td>
				<td> 105 </td>
				<td> 912 </td>
				<td> 1042 </td>
				</tr>
				<tr>
				<td> Enosh </td>
				<td> 235 </td>
				<td> 90 </td>
				<td> 905 </td>
				<td> 1140 </td>
				</tr>
				<tr>
				<td> Kenan </td>
				<td> 325 </td>
				<td> 70 </td>
				<td> 910 </td>
				<td> 1235 </td>
				</tr>
				<tr>
				<td> Mahalalel </td>
				<td> 395 </td>
				<td> 65 </td>
				<td> 895 </td>
				<td> 1290 </td>
				</tr>
				<tr>
				<td> Jared </td>
				<td> 460 </td>
				<td> 162 </td>
				<td> 962 </td>
				<td> 1422 </td>
				</tr>
				<tr>
				<td> Enoch </td>
				<td> 622 </td>
				<td> 65 </td>
				<td> 365 </td>
				<td> 987 * </td>
				</tr>
				<tr>
				<td> Matusalén </td>
				<td> 687 </td>
				<td> 187 </td>
				<td> 969 </td>
				<td> 1656 </td>
				</tr>
				<tr>
				<td> Lamech </td>
				<td> 874 </td>
				<td> 182 </td>
				<td> 777 </td>
				<td> 1651 </td>
				</tr>
				<tr>
				<td> Noah </td>
				<td colspan = "2"> 1056 </td>
				<td colspan = "2"> 500 </td>
				</tr>
				</table>

				<p> Los períodos de tiempo en la Biblia generalmente se registran en términos de edades, eventos y reinados del rey. Suponiendo que Adam fue creado en el año 0, asumiremos que su hijo Seth nació en el año 130 después de la creación, o 130 AC. </p>
				<p> (Esta presunción hace que sea imprudente ser dogmático en cuanto al año exacto de la creación. Además, debido a que no se nos dice el mes y el día de cada nacimiento en la Biblia, existe la posibilidad de un error de hasta 364 días en estos cálculos cada vez que se menciona un nuevo nacimiento.) </p>
				<p> Génesis capítulo 5 termina con la declaración de que "después de que Noé tenía 500 años, se convirtió en el padre de Sem, Ham y Jafet". Génesis 9:24 nos dice que Ham era el hijo menor de Noé. Génesis 11:10 nos dice que Shem tenía 100 años dos años después del Diluvio, lo que significa que debe haber nacido cuando Noah tenía 502. Concluimos que Japheth era el hijo que nació cuando Noah tenía 500 años, Shem dos años después, y Ham un período no especificado después de eso. </p>
				<table>
				<tr>
				<th> Nombre </th>
				<th> Nacimiento (AC) </th>
				<th> Edad cuando nació el hijo </th>
				<th> Duración de la vida </th>
				<th> Muerte (AC) </th>
				</tr>
				<tr>
				<td> Noah </td>
				<td> 1056 </td>
				<td> 502 </td>
				<td> 950 </td>
				<td> 2006 </td>
				</tr>
				<tr>
				<td> Shem </td>
				<td> 1558 </td>
				<td> 100 </td>
				<td> 600 </td>
				<td> 2158 </td>
				</tr>
				<tr>
				<td> Arphaxad </td>
				<td> 1658 </td>
				<td> 35 </td>
				<td> 438 </td>
				<td> 2096 </td>
				</tr>
				<tr>
				<td> Shelah </td>
				<td> 1693 </td>
				<td> 30 </td>
				<td> 433 </td>
				<td> 2126 </td>
				</tr>
				<tr>
				<td> Eber </td>
				<td> 1723 </td>
				<td> 34 </td>
				<td> 464 </td>
				<td> 2187 </td>
				</tr>
				<tr>
				<td> Peleg </td>
				<td> 1757 </td>
				<td> 30 </td>
				<td> 239 </td>
				<td> 1996 </td>
				</tr>
				<tr>
				<td> Reu </td>
				<td> 1787 </td>
				<td> 32 </td>
				<td> 239 </td>
				<td> 2026 </td>
				</tr>
				<tr>
				<td> Serug </td>
				<td> 1819 </td>
				<td> 30 </td>
				<td> 230 </td>
				<td> 2049 </td>
				</tr>
				<tr>
				<td> Nahor </td>
				<td> 1849 </td>
				<td> 29 </td>
				<td> 148 </td>
				<td> 1997 </td>
				</tr>
				<tr>
				<td> Taré </td>
				<td colspan = "2"> 1878 </td>
				<td colspan = "2"> 70 </td>
				</tr>
				</table>

				<p> El siguiente punto de interés es la fecha de la muerte de Shem. Con la excepción de Eber, ninguno de los descendientes de Shem lo sobrevivió. Ahora consideremos a los patriarcas hebreos ... </p>
				<table>
				<tr>
				<th> Nombre </th>
				<th> Nacimiento (AC) </th>
				<th> Edad cuando murió el hijo </th>
				<th> Duración de la vida </th>
				<th> Muerte (AC) </th>
				<th> Referencia </th>
				</tr>
				<tr>
				<td> Taré </td>
				<td> 1878 </td>
				<td> 70 </td>
				<td> 205 </td>
				<td> 2083 </td>
				<td> 11:32 </td>
				</tr>
				<tr>
				<td> Abraham </td>
				<td> 1948 </td>
				<td> 100 </td>
				<td> 175 </td>
				<td> 2123 </td>
				<td> 21: 5; 25: 7 </td>
				</tr>
				<tr>
				<td> Isaac </td>
				<td> 2048 </td>
				<td> 60 </td>
				<td> 180 </td>
				<td> 2228 </td>
				<td> 25:26; 35:28 </td>
				</tr>
				<tr>
				<td> Jacob </td>
				<td> 2108 </td>
				<td> 147 </td>
				<td> 2255 </td>
				</tr>
				</table>

				<p> Con Jacob, termina la ordenada progresión de padres e hijos. No se nos dice cuántos años tenía cuando huyó a Harán ni su edad cuando nace alguno de sus hijos. Sin embargo, es posible hacer ejercicio cuando nació Joseph. </p>
				<p> Se nos dice que José tenía 30 años cuando fue nombrado sobre la tierra de Egipto (Génesis 41:46). Siguieron siete años de abundancia y, en el segundo año de la hambruna, José se reveló a sus hermanos (Génesis 45: 6), lo que le daría unos 39 años. Jacob bajó a Egipto cuando tenía 130 años (Génesis 47 : 9), lo que significa que José nació cuando Jacob tenía 91 años, es decir, en 2199 AC. </p>
				<p> Como la mayoría de la familia de Jacob parece haber nacido durante los 20 años que estuvo en Harán, parece que los gemelos Jacob y Esaú tenían unos 70 años cuando ocurrió el engaño sobre el derecho de nacimiento. Suponemos que Jacob tenía 71 años cuando huyó a Harán. Sirvió a Labán durante siete años antes de casarse, y Levi fue el tercer hijo que nació en Leah. Si suponemos que Leah estaba embarazada una vez al año, entonces Jacob tenía 81 años cuando nació Levi. Si Joseph nació alrededor de 2199 AC, su hermano mayor Levi debe haber nacido alrededor de 2189 AC. </p>
				<p> Luego, Dios le dijo a Abraham que sus descendientes serían esclavizados por 400 años o cuatro generaciones (Génesis 15:13). Esto parece ser confirmado por la declaración en Éxodo 12:40, 41 de que los hijos de Israel estuvieron en Egipto durante 430 años. Si Jacob fue a Egipto en el año 2238 AC, eso colocaría el Éxodo en el año 2668 AC. </p>
				<p> Sin embargo, hay un problema. Como se da en Éxodo capítulo 6, Leví, que vivió 137 años, tuvo un hijo llamado Kohat, que vivió 133 años, y una hija, Jochebed. Amram, hijo de Coat, se casó con su tía Jochebed y vivió durante 137 años. Su hijo era Moisés. Esto llega a un total de 407 años, y cuando agregamos la edad de 80 años de Moisés en el momento del Éxodo, parece que tenemos mucho tiempo para encajar en el año 430 de la opresión. </p>
				<p> El problema es que los años no se suman así. La edad promedio de las cuatro generaciones anteriores cuando nació su primer hijo fue de 75 años. Si Levi, Kohat y Amram también tenían 75 años cuando nacieron sus hijos, y Moisés tenía 80 años en el momento del Éxodo, eso hace un lapso de 305 años para la opresión judía, menos la edad de Levi cuando bajó a Egipto, que era 49. La opresión solo pudo haber durado 256 años. </p>
				<p> La solución habitual adoptada por la mayoría de los comentaristas es concluir que los 430 años no se refieren a la opresión sino al tiempo en que Abraham y sus descendientes tendrían que esperar hasta que la tierra de Canaán les perteneciera. Los 430 años son el tiempo desde la visita de Abraham a Egipto hasta el Éxodo. Esto se traduce en aproximadamente 215 años de vagar en Canaán y 215 años de opresión en Egipto. </p>
				<p> Hay evidencia de que así es como los judíos entendieron este pasaje. Josefo, el historiador judío del siglo I d. C., escribió: “Salieron de Egipto en el mes de Xanthicus, el día quince del mes lunar; cuatrocientos treinta años después de que nuestro antepasado Abraham entró en Canaán, pero doscientos quince años después de que Jacob se fuera a Egipto ”(Antigüedades de los judíos II: xv: 2). Un fragmento de desplazamiento del Mar Muerto (4Q559) confirma esta breve cronología. </p>
				<p> Jacob bajó a Egipto en el año 2238 AC y, para nuestros propósitos, colocaremos el Éxodo 215 años después en el año 2453 AC. De nuevo, una aproximación. </p>
				<p> Luego, en 1 Reyes 6: 1, se nos dice que el cuarto año del reinado de Salomón fue el año 480 después del Éxodo. Eso significa una fecha de 2933 AC para el comienzo del trabajo en el templo. </p>
				<p> Dr. Edwin R. Thiele, en The Mysterious Numbers of the Hebrew Kings, establece el año 931 AC como la fecha en que Roboam comenzó a reinar. Suponiendo que tiene razón, 1 Reyes 11:42 nos dice que Salomón reinó durante 40 años, por lo que su reinado comenzó en el año 971 AC, lo que significa que su cuarto año debe haber sido el año 967 AC. </p>
				<p> Por lo tanto, si el cuarto año de Salomón, el año 967 a. C., vino 2933 años después de la creación, entonces podemos decir que este mundo fue creado en el año 3900 a. Como debería ser obvio que esto solo puede ser una fecha aproximada, debería ser igualmente obvio que hay límites en la cantidad que se puede estirar la cronología. Si hacemos que la opresión judía sea de 430 años, incluya el tiempo máximo entre generaciones, y así sucesivamente, lo máximo que podemos agregar es otros mil años más o menos. Ciertamente no hay lugar en las figuras bíblicas para empujar la creación de regreso a 10,000 AC. </p>
				</div>


				<div class = "faq-answer 2">
				<p> La siguiente es una lista de fuentes utilizadas, entre otras, para crear la línea de tiempo: </p>
					<ul>
						<li> Comentario de Adam Clarke sobre toda la Biblia, 1826. </li>
						<li> Bainton, Roland H. <i> Aquí estoy: Una vida de Martin Luther. </i> Nueva York: Abingdon Press, 1950. </li>
						<li> Bokenkotter, Thomas. <i> Una historia concisa de la Iglesia católica. </i> Nueva York: Día doble, 2005. </li>
						<li> Cannon, William R. <i> Historia del cristianismo en la Edad Media: desde la caída de Roma hasta la caída de Constantinopla. </i> Nueva York: Abingdon Press, 1960. </li>
						<li> Mensajero, Jaques. Zwinglio: <i> Un teólogo reformado </i>. Richmond: John Knox Press, 1963. </li>
						<li> Diccionario Bíblico de Easton, 1897. </li>
						<li> González, Justo L. <i> La historia del cristianismo, vol. 1: La Iglesia Primitiva al amanecer de la Reforma. </i> Nueva York: HarperOne, 2010. </li>
						<li> González, Justo L. <i> La historia del cristianismo, vol. 2: La Reforma hasta el día de hoy. </i> Nueva York: HarperOne, 2010. </li>
						<li> Heinze, Rudolph, W. <i> Reforma y conflicto: del mundo medieval a las guerras de religión, AD 1350-1648 </i>, consultores editores John D. Woodbridge y David F. Wright, editor de la serie Tim Dowley Grand Rapids: Baker, 2005. </li>
						<li> House, H. Wayne, <i> Cartas cronológicas y de antecedentes del Nuevo Testamento, </i> Zondervan 2009. </li>
						<li> Kelly, J.N.D. <i> El Diccionario Oxford de Papas. Nueva York: Oxford University Press </i>, 1986. </li>
						<li> Keith Stokes <i> Base de datos de la línea de tiempo de la Biblia </i>, <a href="#" rel="nofollow"> www.brainsanctuary.com </a> </li>
						<li> Lane, Tony. <i> Una historia concisa del pensamiento cristiano: edición completamente revisada y expandida </i>. Grand Rapids: Baker Academic, 2006. </li>
						<li> Lindsay, Thomas M. <i> Una historia de la reforma, vol. 2: En tierras más allá de Alemania. </i> Edimburgo: T & T Clark, 1959. </li>
						<li> Logan, Donald F. <i> Una historia de la Iglesia en la Edad Media. </i> Oxford: Routledge, 2002. </li>
						<li> Comentario conciso de Matthew Henry sobre la Biblia, 1706. </li>
						<li> Precio, Ira Maurice. <i> La ascendencia de nuestra Biblia en inglés. </i> Nueva York: Harper & Row, 1956. </li>
						<li> Schwiebert, <i> E. G. Luther y sus tiempos: la reforma desde una nueva perspectiva, Saint Louis: Concordia, 1950. </li>
						<li> Serie de referencias de comentarios bíblicos de la SDA. Review and Herald Publishing Association: Hagerstown, Maryland, 1979. </li>
						<li> Tenney, Merril C., <i> New Testament Times </i>, Hendrickson Publishers 2001. </li>
						<li> Biblia de estudio de la Universidad Andrews, Andrews University Press: Berrien Springs, Michigan, 2007. </li>
						<li> Walton, John H. <i> Cartas cronológicas y de antecedentes del Antiguo Testamento, </i> Zondervan, 1994. </li>
					</ul>
				</div>

				<div class = "faq-answer 3">
				<p> No. La Biblia dice que en cuanto al día y la hora del regreso de Cristo, nadie lo sabe. Ver Mateo 24:50. Además, el regreso de Cristo solo vendrá después de que ocurrieron otros cumplimientos proféticos, y tampoco sabemos cuándo sucederán. El propósito de la línea de tiempo no es predecir cuándo podrá ser exactamente eventos futuros, sino mostrar la confiabilidad de la Biblia como un registro histórico, su confiabilidad en asuntos de profecía y como una herramienta profunda para el estudio de la Biblia. </p>
				</div>


				<div class = "faq-answer 4">
				<p> Las aplicaciones de Android y iPad están actualmente en desarrollo temprano. Vuelva a consultar para obtener detalles sobre las fechas de lanzamiento. </p>
				</div>


				<div class = "preguntas frecuentes 5">
				<p> La línea de tiempo es compatible con Firefox, Chrome, Safari e Internet Explorer 9+. </p>
				</div>

		</div>
	</div>










	<!-- ****************************************** -->
	<!-- Social 												-->
	<!-- ****************************************** -->
	<!-- <div class="social">
		<ul>
			<li class="google"><a href="#" onclick="javascript:window.open(this.href,
'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Google+</a></li>

			<li class="twitter"><a href="#" onclick="javascript:window.open(this.href,
'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Twitter</a></li>

			<li class="facebook"><a href="#" onclick="javascript:window.open(this.href,
'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Facebook</a></li>
		</ul>
	</div> -->










	<!-- ****************************************** -->
	<!-- Landing Pages 											-->
	<!-- ****************************************** -->
	<div class="landing">
		<div class="zoom">
			<h4>Zoom</h4>
			<ul class="nav">
				<li class="home">Inicio</li>
				<li class="zoom-out">-</li>
				<li class="zoom-in">+</li>
				<li class="full">Zoom</li>
			</ul>
			<ul class="indicator">
				<li>1</li>
				<li class="active">2</li>
				<li>3</li>
			</ul>
		</div>


		<div class="landing-container">
			<!-- Arrows -->
			<div class="arrow left"></div>
			<div class="arrow right"></div>

			<!-- Paper Background -->
			<div class="landing-paper" id="landing-paper"></div>

			<!-- Grid Background -->
			<div class="landing-grid" id="landing-grid"></div>

			<!-- Landing Stage -->
			<div class="landing-stage zoom-2">

				<!-- Date Bar -->
				<div class="landing-date-bar">
					<div class="landing-date-bar-center"></div>
					<ul>
						<li><span>Creación&ndash;</span><span>c.2500 AC</span></li>
						<li><span>c.2500&ndash;</span><span>c.2166AC</span></li>
						<li><span>c.2166&ndash;</span><span>c.1660AC</span></li>
						<li><span>c.1660&ndash;</span><span>c.1445AC</span></li>
						<li><span>c.1445&ndash;</span><span>c.1050AC</span></li>
						<li><span>c.1050&ndash;</span><span>c.930AC</span></li>
						<li><span>c.930&ndash;</span><span>c.586AC</span></li>
						<li><span>c.585&ndash;</span><span>c.457AC</span></li>
						<li><span>c.4AC&ndash;</span><span>c.34DC</span></li>
						<li><span>c.34&ndash;</span><span>c.330DC</span></li>
						<li><span>c.450&ndash;</span><span>c.1517DC</span></li>
						<li><span>c.1517&ndash;</span><span>c.1840DC</span></li>
						<li><span>Creación&ndash;</span><span>Presente</span></li>
					</ul>
				</div>


				<!-- Era Arches -->
				<div class = "arches">
				<div class = "arch arch-1">
				<h3> Edad de los patriarcas </h3>
				<p> La línea de tiempo comienza con Adán en el Edén, luego a Noé y el diluvio y el nacimiento de Israel a través de Abraham, Isaac y Jacob. </p>
				</div>
				<div class = "arch arch-2">
				<h3> Edad de Israel </h3>
				<p> La historia de la nación judía, desde Moisés y el Éxodo hasta el rey David y los profetas Daniel e Isaías. </p>
				</div>
				<div class = "arch arch-3">
				<h3> Edad de Cristo </h3>
				<p> La vida y muerte de Jesús, los apóstoles, la Reforma y los eventos finales de la historia de la tierra. </p>
				</div>
				</div>






				<!-- Periods -->
				<div class="landing-periods">
					<div class="landing-period landing-period-1 hover" data-id="1">
						<div class="image"></div>
						<div class="info">
							<h3>Primera<br /> Generación</h3>
							<div class="dash-line"></div>
							<h4> Desde la creación de Adán y Eva, hasta el asesinato de Abel por Caín, y la historia humana antes del diluvio. </h4>
						</div>
					</div>
					<div class="landing-period landing-period-2 hover" data-id="2">
						<div class="image"></div>
						<div class="info">
							<h3>Noe y<br /> El Diluvio</h3>
							<div class="dash-line"></div>
							<h4> Desde el ministerio de Noé y el diluvio global, hasta Cush, Nimrod y la torre de Babel. </h4>
						</div>
					</div>
					<div class="landing-period landing-period-3 hover" data-id="3">
						<div class="image"></div>
						<div class="info">
							<h3>Los<br /> Patriarcas</h3>
							<div class="dash-line"></div>
							<h4> Desde el llamado de Abraham, a Sodoma y Gomorra, y el surgimiento de 12 tribus judías a través de Isaac y Jacob. </h4>
						</div>
					</div>
					<div class="landing-period landing-period-4 hover" data-id="4">
						<div class="image"></div>
						<div class="info">
							<h3>Egipto<br /> a Canaán</h3>
							<div class="dash-line"></div>
							<h4> Desde que José fue vendido como esclavo, su ascenso al poder en Egipto, y a Moisés y el Éxodo. </h4>
						</div>
					</div>
					<div class="landing-period landing-period-5 hover" data-id="5">
						<div class="image"></div>
						<div class="info">
							<h3>Los<br /> Jueces</h3>
							<div class="dash-line"></div>
							<h4> Desde Moisés y los Diez Mandamientos hasta la entrada de Josué y la expansión judía en la Tierra Prometida. </h4>
						</div>
					</div>
					<div class="landing-period landing-period-6 hover" data-id="6">
						<div class="image"></div>
						<div class="info">
							<h3>Reino<br /> Unido</h3>
							<div class="dash-line"></div>
							<h4> Del rey Saúl al profeta Samuel y al joven rey David y su dinastía real a través de Salomón. </h4>
						</div>
					</div>
					<div class="landing-period landing-period-7 hover" data-id="7">
						<div class="image"></div>
						<div class="info">
							<h3>Reino<br /> Divido</h3>
							<div class="dash-line"></div>
							<h4> Desde la lucha interna que dividió a la nación de Israel hasta los profetas que advirtieron sobre el próximo exilio. </h4>
						</div>
					</div>
					<div class="landing-period landing-period-8 hover" data-id="8">
						<div class="image"></div>
						<div class="info">
							<h3>El<br /> Exilio</h3>
							<div class="dash-line"></div>
							<h4> De la caída de Israel al exilio en Babilonia y los principales profetas que declararon el Mesías venidero. </h4>
						</div>
					</div>
					<div class="landing-period landing-period-9 hover" data-id="9">
						<div class="image"></div>
						<div class="info">
							<h3>Vida de<br /> Cristo</h3>
							<div class="dash-line"></div>
							<h4> Desde el nacimiento del Mesías prometido, Jesús el Cristo, hasta su ministerio y muerte y resurrección. </h4>
						</div>
					</div>
					<div class="landing-period landing-period-10 hover" data-id="10">
						<div class="image"></div>
						<div class="info">
							<h3>Iglesia<br /> Primitiva</h3>
							<div class="dash-line"></div>
							<h4> Desde el martirio de Esteban hasta la persecución y el surgimiento de la iglesia a través de Pablo y los apóstoles. </h4>
						</div>
					</div>
					<div class="landing-period landing-period-11 hover" data-id="11">
						<div class="image"></div>
						<div class="info">
							<h3>Seguno<br /> Tunel</h3>
							<div class="dash-line"></div>
							<h4> Desde la legalización del cristianismo bajo Constantino hasta la persecución de la Edad Media. </h4>
						</div>
					</div>
					<div class="landing-period landing-period-12 hover" data-id="12">
						<div class="image"></div>
						<div class="info">
							<h3>La<br /> Reforma</h3>
							<div class="dash-line"></div>
							<h4> Desde los grandes reformadores, como Luther y Wycliffe, hasta la expansión del movimiento protestante. </h4>
						</div>
					</div>
					<div class="landing-period landing-period-13 hover" data-id="13">
						<div class="image"></div>
						<div class="info">
							<h3>Apocalipsis<br /> </h3>
							<div class="dash-line"></div>
							<h4> Desde el surgimiento del anticristo, la marca de la bestia, hasta el regreso de Cristo y el paraíso restaurado. </h4>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Landing Footer -->
		<div class="landing-footer active">
			<div class="welcome">
				<h3>Fase Beta</h3>
				<p>Todos los derechos reservados</p>
			</div>
			<div class="bar">
				<div class="fact">¿Sabias que? <span class="closed">^</span><span class="opened">v</span></div>
				<div class="toggle"><span class="plus">+</span><span class="minus">&ndash;</span></div>
				<div class="copy">&nbsp;</div>
			</div>
			<div class="info">
				<div class="image"></div>
				<div class="af_logo"></div>

				<!-- Amazing Facts -->
				<p class="amazing-fact">Según Génesis 5: 3, Adán tenía 130 años cuando nació su hijo Seth. Vivió 800 años después de eso y vivió para presenciar el nacimiento de su tatara-tatara-tatara-tatara-tatara-nieto, Lamech, el padre de Noé, el que se salvaría a través del diluvio.</p>
				<p class = "amazing-fact"> El arca era una estructura inmensa que medía hasta 512 pies de largo. También representaba un conocimiento avanzado de la construcción naval, ya que es el diseño óptimo para la estabilidad en mares agitados. El arca tenía un volumen de al menos 1.5 millones de pies cúbicos, o el equivalente de aproximadamente 560 vagones de ferrocarril. </p>
				<p class = "amazing-fact"> Las tabletas Ebla, descubiertas en 1975 y fechadas alrededor del 2300 a. C., verifican la adoración de dioses paganos como Baal, Dagan y Asherah, conocidos anteriormente solo de la Biblia. Mencionan los nombres de Abraham y Ur de los caldeos, su lugar de nacimiento, así como otros nombres de la Biblia, como Esaú, Sodoma y Gomorra. </p>
				<p class = "amazing-fact"> Algunos estudiosos de la Biblia estiman que más de 3.5 millones de judíos participaron en el éxodo de Egipto. La columna de ex esclavos que huía, en líneas de 50 de ancho, se habría extendido por 40 millas a través del desierto y habría tomado alrededor de 15 horas para pasar el mismo punto. </p>
				<p class = "amazing-fact"> Belsasar, un rey de Babilonia nombrado en el libro de Daniel, era considerado una leyenda de la Biblia, pero el Cilindro de Nabonido, descubierto alrededor de 1881, enumeró al rey como el hijo de Nabonido, verificando lo bíblico registro contenido en Daniel. </p>
				<p class = "amazing-fact"> La estela de Tel Dan, descubierta en 1993, revela evidencia histórica del rey David. El gobernante arameo que erigió la inscripción en piedra alrededor del 80 a. C. afirmó haber derrotado al "rey de la casa de David". </p>
				<p class = "amazing-fact"> Jesús fue el cumplimiento de las profecías escritas mucho antes de su nacimiento. El profeta Miqueas dijo que el Mesías nacería en Belén (Miqueas 5: 2). Otros profetas predijeron que Jesús nacería de una virgen (Isaías 7:14) y que habría un intento de asesinato en su joven vida (Jeremías 31:15). </p>
				<p class = "amazing-fact"> Jesús profetizó que el templo judío en Jerusalén sería destruido de manera tal que no quedara una piedra encima de otra. Algunas piedras del templo pesaban más de 100 toneladas. Cumplido en el año 70 d. C. Josephus, un historiador de confianza, informa que los invasores romanos desenterraron los cimientos del templo. </p>
				<p class = "amazing-fact"> La inscripción de Ponto Pilato, descubierta en Cesarea Marítima en 1962, proporciona evidencia histórica de un jugador clave en la crucifixión de Jesús. La inscripción en latín contenía la frase: "Poncio Pilato, prefecto de Judea ha dedicado al pueblo de Cesarea un templo en honor de Tiberio". </p>
			</div>
		</div>


	</div>






	<!-- ****************************************** -->
	<!-- Event Detail 								-->
	<!-- ****************************************** -->

	<div class="detail" name="modal_data" id="modal_data">
		<div class="container">
			<div class="media">
				<div class="mi_imagen"></div>

				<!-- Media Slide Template -->
				<script type="text/template" class="media-template">
					<div class="slide">
						<table>
							<tr class="image">
								<td>
									<div class="loading"></div>
									<div class="copyright-mask"></div>
									<img src="media/images/original/%filename%" alt="%img_alt%" />
								</td>
							</tr>
							<tr class="caption">
								<td><p>%caption%</p></td>
							</tr>
						</table>
					</div>
				</script>

				<ul class="pagination"></ul>
				<a href="" class="detail-back">Volver</a>
			</div>
			<div class="content">

				<!-- Breadcrumbs -->
				<p class="breadcrumbs">
					<span class="era">Age of Patriarchs</span> &nbsp;&raquo;&nbsp;
					<span class="period">The Patriarchs</span>
				</p>

				<div class="solid-line"></div>

				<!-- Event Details -->
				<h1>Abraham</h1>
				<h3>1951&ndash;1775 <span>AC</span></h3>
				<a href="#" class="close">Cerrar</a>
				<a href="#" class="related">Relacionado</a>

				<div class="dashed-line"></div>

				<!-- Nav Bar -->
				<ul class="nav">
					<li class="active"><a href="#">Historia</a></li>
					<li><a href="#">Escrituras</a></li>
					<li><a href="#">Personajes</a></li>
					<li><a href="#">Lugares</a></li>
					<!-- <li class="videos"><a href="#">Videos</a></li> -->
					<li class="favorites"><a href="#">Agregar a Favoritos</a></li>
				</ul>

				<div class="dashed-line"></div>

				<!-- Content Boxes -->
				<div class="box article active">
					<p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</strong></p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="box scriptures">
					<p>Escrituras</p>
				</div>
				<div class="box related">
					<ul></ul>
				</div>
				<div class="box location">
					<p>https://gmapgis.com/viewer.html?fcode=TCP4h4drTs5</p>
				</div>
				<div class="box videos">
					<ul></ul>
				</div>
			</div>
		</div>
	</div>

	<!-- ****************************************** -->
	<!-- Video Detail 											-->
	<!-- ****************************************** -->
	<div class="video-modal">
		<div class="video-wrap">
			<span class="close"></span>
			<div class="video-player flowplayer" data-key="$495596516396314">
				<video><source src="media/videos/empty.mp4" type="video/mp4"></video>
			</div>
			<h3></h3>
			<p></p>
		</div>
	</div>







	<!-- ****************************************** -->
	<!-- Timeline 												-->
	<!-- ****************************************** -->
	<div class="timeline">
		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebars"  id="sidebars">
				<div class="period-1">
					<h3>La dispensación</h3>
					<h2>PRIMERA GENERACIÓN</h2>
					<h4>Creación&ndash;c.2500 <span>AC</span></h4>
					<p>From the creation of Adam and Eve, to the murder of Abel by Cain, and human history before the flood.</p>
				</div>
				<div class="period-2">
					<h3>La dispensación</h3>
					<h2>NOE Y EL DILUVIO</h2>
					<h4>c.2500&ndash;c.2166 <span>AC</span></h4>
					<p>From the ministry of Noah and the global deluge, to Cush, Nimrod, and the tower of Babel.</p>
				</div>
				<div class="period-3">
					<h3>La dispensación</h3>
					<h2>LOS PATRIARCAS</h2>
					<h4>c.2166&ndash;c.1660 <span>AC</span></h4>
					<p>From the call of Abraham, to Sodom and Gomorrah, and the rise of the 12 Jewish tribes through Isaac and Jacob.</p>
				</div>
				<div class="period-4">
					<h3>La dispensación</h3>
					<h2>EGIPTO A CANAÁN</h2>
					<h4>c.1660&ndash;c.1445 <span>AC</span></h4>
					<p>From Joseph being sold into slavery, his rise to power in Egypt, and to Moses and the Exodus.</p>
				</div>
				<div class="period-5">
					<h3>La dispensación</h3>
					<h2>LOS JUECES</h2>
					<h4>c.1445&ndash;c.1050 <span>AC</span></h4>
					<p>From Moses and the Ten Commandments to Joshua's entrance and Jewish expansion into the Promised Land.</p>
				</div>
				<div class="period-6">
					<h3>La dispensación</h3>
					<h2>REINO UNIDO</h2>
					<h4>c.1050&ndash;c.930 <span>AC</span></h4>
					<p>From King Saul to the prophet Samuel and young King David and his royal dynasty through Solomon.</p>
				</div>
				<div class="period-7">
					<h3>La dispensación</h3>
					<h2>REINO DIVIDIDO</h2>
					<h4>c.930&ndash;c.586 <span>AC</span></h4>
					<p>From the internal strife that divided the nation of Israel to the prophets who warned of the coming exile.</p>
				</div>
				<div class="period-8">
					<h3>La dispensación</h3>
					<h2>EL EXILIO</h2>
					<h4>c.585&ndash;c.457 <span>AC</span></h4>
					<p>From Israel's fall to exile in Babylon and the major prophets declaring the coming Messiah.</p>
				</div>
				<div class="period-9">
					<h3>La dispensación</h3>
					<h2>VIDA SEÑOR JESUCRISTO</h2>
					<h4>c.4 <span>AC</span>&ndash;c.34 <span>DC</span></h4>
					<p>From the birth of the promised Messiah, Jesus the Christ, to His ministry and death and resurrection.</p>
				</div>
				<div class="period-10">
					<h3>La dispensación</h3>
					<h2>Iglesia Primitiva</h2>
					<h4>c.34&ndash;c.330 <span>DC</span></h4>
					<p>From the martyrdom of Stephen to the persecution and rise of the church through Paul and the apostles.</p>
				</div>
				<div class="period-11">
					<h3>La dispensación</h3>
					<h2>Segundo Tunel</h2>
					<h4>c.450&ndash;c.1517 <span>DC</span></h4>
					<p>From the legalization of Christianity under Constantine to the persecution of the Dark Ages..</p>
				</div>
				<div class="period-12">
					<h3>La dispensación</h3>
					<h2>La Reforma</h2>
					<h4>c.1517&ndash;c.1840 <span>DC</span></h4>
					<p>From the great reformers, such as Luther and Wycliffe, to the expansion of the Protestant movement.</p>
				</div>
				<div class="period-13">
					<h3>La dispensación</h3>
					<h2>Apocalipsis</h2>
					<h4>Creación&ndash;Presente</h4>
					<p>From the rise of the antichrist, the mark of the beast, to the return of Christ and paradise restored.</p>
				</div>
			</div>
		</div>


		<!-- Stage -->
		<div class="container" id="container">
			<!-- Arrows -->
			<div class="timeline-arrow top"></div>
			<div class="timeline-arrow bottom"></div>
			<div class="timeline-arrow left" style="left: auto;"></div>
			<div class="timeline-arrow right"></div>

			<!-- Paper Background -->
			<div class="paper" id="paper"></div>

			<!-- Grid Background -->
			<div class="grid" id="grid"></div>

			<!-- Date Bar -->
			<div class="date-bar" id="date-bar"><ul><li>4100 AC</li><li>4000 AC</li><li>3900 AC</li><li>3800 AC</li><li>3700 AC</li><li>3600 AC</li><li>3500 AC</li><li>3400 AC</li><li>3300 AC</li><li>3200 AC</li><li>3100 AC</li><li>3000 AC</li><li>2900 AC</li><li>2875 AC</li><li>2850 AC</li><li>2825 AC</li><li>2800 AC</li><li>2775 AC</li><li>2750 AC</li><li>2725 AC</li><li>2700 AC</li><li>2675 AC</li><li>2650 AC</li><li>2625 AC</li><li>2600 AC</li><li>2575 AC</li><li>2550 AC</li><li>2525 AC</li><li>2500 AC</li><li>2475 AC</li><li>2450 AC</li><li>2425 AC</li><li>2400 AC</li><li>2375 AC</li><li>2350 AC</li><li>2325 AC</li><li>2300 AC</li><li>2275 AC</li><li>2250 AC</li><li>2225 AC</li><li>2200 AC</li><li>2175 AC</li><li>2150 AC</li><li>2125 AC</li><li>2100 AC</li><li>2075 AC</li><li>2050 AC</li><li>2025 AC</li><li>2000 AC</li><li>1975 AC</li><li>1950 AC</li><li>1940 AC</li><li>1930 AC</li><li>1920 AC</li><li>1910 AC</li><li>1900 AC</li><li>1890 AC</li><li>1880 AC</li><li>1870 AC</li><li>1860 AC</li><li>1850 AC</li><li>1840 AC</li><li>1830 AC</li><li>1820 AC</li><li>1810 AC</li><li>1800 AC</li><li>1790 AC</li><li>1780 AC</li><li>1770 AC</li><li>1760 AC</li><li>1750 AC</li><li>1740 AC</li><li>1730 AC</li><li>1720 AC</li><li>1710 AC</li><li>1700 AC</li><li>1690 AC</li><li>1680 AC</li><li>1670 AC</li><li>1660 AC</li><li>1650 AC</li><li>1625 AC</li><li>1600 AC</li><li>1575 AC</li><li>1550 AC</li><li>1525 AC</li><li>1500 AC</li><li>1475 AC</li><li>1450 AC</li><li>1425 AC</li><li>1400 AC</li><li>1375 AC</li><li>1350 AC</li><li>1325 AC</li><li>1300 AC</li><li>1275 AC</li><li>1250 AC</li><li>1225 AC</li><li>1200 AC</li><li>1175 AC</li><li>1150 AC</li><li>1125 AC</li><li>1100 AC</li><li>1095 AC</li><li>1090 AC</li><li>1085 AC</li><li>1080 AC</li><li>1075 AC</li><li>1070 AC</li><li>1065 AC</li><li>1060 AC</li><li>1055 AC</li><li>1050 AC</li><li>1045 AC</li><li>1040 AC</li><li>1035 AC</li><li>1030 AC</li><li>1025 AC</li><li>1020 AC</li><li>1015 AC</li><li>1010 AC</li><li>1005 AC</li><li>1000 AC</li><li>995 AC</li><li>990 AC</li><li>985 AC</li><li>980 AC</li><li>975 AC</li><li>970 AC</li><li>965 AC</li><li>960 AC</li><li>955 AC</li><li>950 AC</li><li>945 AC</li><li>940 AC</li><li>935 AC</li><li>930 AC</li><li>925 AC</li><li>920 AC</li><li>915 AC</li><li>910 AC</li><li>905 AC</li><li>900 AC</li><li>895 AC</li><li>890 AC</li><li>885 AC</li><li>880 AC</li><li>875 AC</li><li>870 AC</li><li>865 AC</li><li>860 AC</li><li>855 AC</li><li>850 AC</li><li>845 AC</li><li>840 AC</li><li>835 AC</li><li>830 AC</li><li>825 AC</li><li>820 AC</li><li>815 AC</li><li>810 AC</li><li>805 AC</li><li>800 AC</li><li>795 AC</li><li>790 AC</li><li>785 AC</li><li>780 AC</li><li>775 AC</li><li>770 AC</li><li>765 AC</li><li>760 AC</li><li>755 AC</li><li>750 AC</li><li>745 AC</li><li>740 AC</li><li>735 AC</li><li>730 AC</li><li>725 AC</li><li>720 AC</li><li>715 AC</li><li>710 AC</li><li>705 AC</li><li>700 AC</li><li>695 AC</li><li>690 AC</li><li>685 AC</li><li>680 AC</li><li>675 AC</li><li>670 AC</li><li>665 AC</li><li>660 AC</li><li>655 AC</li><li>650 AC</li><li>645 AC</li><li>640 AC</li><li>635 AC</li><li>630 AC</li><li>625 AC</li><li>620 AC</li><li>610 AC</li><li>600 AC</li><li>590 AC</li><li>580 AC</li><li>570 AC</li><li>560 AC</li><li>550 AC</li><li>540 AC</li><li>530 AC</li><li>520 AC</li><li>510 AC</li><li>500 AC</li><li>490 AC</li><li>480 AC</li><li>470 AC</li><li>460 AC</li><li>450 AC</li><li>440 AC</li><li>430 AC</li><li>420 AC</li><li>410 AC</li><li>400 AC</li><li>390 AC</li><li>380 AC</li><li>370 AC</li><li>360 AC</li><li>350 AC</li><li>340 AC</li><li>330 AC</li><li>320 AC</li><li>310 AC</li><li>300 AC</li><li>290 AC</li><li>280 AC</li><li>270 AC</li><li>260 AC</li><li>250 AC</li><li>240 AC</li><li>230 AC</li><li>220 AC</li><li>210 AC</li><li>200 AC</li><li>190 AC</li><li>180 AC</li><li>170 AC</li><li>160 AC</li><li>150 AC</li><li>140 AC</li><li>130 AC</li><li>120 AC</li><li>110 AC</li><li>100 AC</li><li>99 AC</li><li>98 AC</li><li>97 AC</li><li>96 AC</li><li>95 AC</li><li>94 AC</li><li>93 AC</li><li>92 AC</li><li>91 AC</li><li>90 AC</li><li>89 AC</li><li>88 AC</li><li>87 AC</li><li>86 AC</li><li>85 AC</li><li>84 AC</li><li>83 AC</li><li>82 AC</li><li>81 AC</li><li>80 AC</li><li>79 AC</li><li>78 AC</li><li>77 AC</li><li>76 AC</li><li>75 AC</li><li>74 AC</li><li>73 AC</li><li>72 AC</li><li>71 AC</li><li>70 AC</li><li>69 AC</li><li>68 AC</li><li>67 AC</li><li>66 AC</li><li>65 AC</li><li>64 AC</li><li>63 AC</li><li>62 AC</li><li>61 AC</li><li>60 AC</li><li>59 AC</li><li>58 AC</li><li>57 AC</li><li>56 AC</li><li>55 AC</li><li>54 AC</li><li>53 AC</li><li>52 AC</li><li>51 AC</li><li>50 AC</li><li>49 AC</li><li>48 AC</li><li>47 AC</li><li>46 AC</li><li>45 AC</li><li>44 AC</li><li>43 AC</li><li>42 AC</li><li>41 AC</li><li>40 AC</li><li>39 AC</li><li>38 AC</li><li>37 AC</li><li>36 AC</li><li>35 AC</li><li>34 AC</li><li>33 AC</li><li>32 AC</li><li>31 AC</li><li>30 AC</li><li>29 AC</li><li>28 AC</li><li>27 AC</li><li>26 AC</li><li>25 AC</li><li>24 AC</li><li>23 AC</li><li>22 AC</li><li>21 AC</li><li>20 AC</li><li>19 AC</li><li>18 AC</li><li>17 AC</li><li>16 AC</li><li>15 AC</li><li>14 AC</li><li>13 AC</li><li>12 AC</li><li>11 AC</li><li>10 AC</li><li>9 AC</li><li>8 AC</li><li>7 AC</li><li>6 AC</li><li>5 AC</li><li>4 AC</li><li>3 AC</li><li>2 AC</li><li>1 AC</li><li>1 DC</li><li>2 DC</li><li>3 DC</li><li>4 DC</li><li>5 DC</li><li>6 DC</li><li>7 DC</li><li>8 DC</li><li>9 DC</li><li>10 DC</li><li>11 DC</li><li>12 DC</li><li>13 DC</li><li>14 DC</li><li>15 DC</li><li>16 DC</li><li>17 DC</li><li>18 DC</li><li>19 DC</li><li>20 DC</li><li>21 DC</li><li>22 DC</li><li>23 DC</li><li>24 DC</li><li>25 DC</li><li>26 DC</li><li>27 DC</li><li>28 DC</li><li>29 DC</li><li>30 DC</li><li>31 DC</li><li>32 DC</li><li>33 DC</li><li>34 DC</li><li>35 DC</li><li>40 DC</li><li>45 DC</li><li>50 DC</li><li>55 DC</li><li>60 DC</li><li>65 DC</li><li>70 DC</li><li>75 DC</li><li>80 DC</li><li>85 DC</li><li>90 DC</li><li>95 DC</li><li>100 DC</li><li>105 DC</li><li>110 DC</li><li>115 DC</li><li>120 DC</li><li>125 DC</li><li>130 DC</li><li>135 DC</li><li>140 DC</li><li>145 DC</li><li>150 DC</li><li>155 DC</li><li>160 DC</li><li>165 DC</li><li>170 DC</li><li>175 DC</li><li>180 DC</li><li>185 DC</li><li>190 DC</li><li>195 DC</li><li>200 DC</li><li>205 DC</li><li>210 DC</li><li>215 DC</li><li>220 DC</li><li>225 DC</li><li>230 DC</li><li>235 DC</li><li>240 DC</li><li>245 DC</li><li>250 DC</li><li>255 DC</li><li>260 DC</li><li>265 DC</li><li>270 DC</li><li>275 DC</li><li>280 DC</li><li>285 DC</li><li>290 DC</li><li>295 DC</li><li>300 DC</li><li>305 DC</li><li>310 DC</li><li>315 DC</li><li>320 DC</li><li>325 DC</li><li>330 DC</li><li>335 DC</li><li>340 DC</li><li>345 DC</li><li>350 DC</li><li>375 DC</li><li>400 DC</li><li>425 DC</li><li>450 DC</li><li>475 DC</li><li>500 DC</li><li>525 DC</li><li>550 DC</li><li>575 DC</li><li>600 DC</li><li>625 DC</li><li>650 DC</li><li>675 DC</li><li>700 DC</li><li>725 DC</li><li>750 DC</li><li>775 DC</li><li>800 DC</li><li>825 DC</li><li>850 DC</li><li>875 DC</li><li>900 DC</li><li>925 DC</li><li>950 DC</li><li>975 DC</li><li>1000 DC</li><li>1025 DC</li><li>1050 DC</li><li>1075 DC</li><li>1100 DC</li><li>1125 DC</li><li>1150 DC</li><li>1175 DC</li><li>1200 DC</li><li>1225 DC</li><li>1250 DC</li><li>1275 DC</li><li>1300 DC</li><li>1325 DC</li><li>1350 DC</li><li>1375 DC</li><li>1400 DC</li><li>1425 DC</li><li>1450 DC</li><li>1475 DC</li><li>1500 DC</li><li>1520 DC</li><li>1525 DC</li><li>1530 DC</li><li>1535 DC</li><li>1540 DC</li><li>1545 DC</li><li>1550 DC</li><li>1555 DC</li><li>1560 DC</li><li>1565 DC</li><li>1570 DC</li><li>1575 DC</li><li>1580 DC</li><li>1585 DC</li><li>1590 DC</li><li>1595 DC</li><li>1600 DC</li><li>1605 DC</li><li>1610 DC</li><li>1615 DC</li><li>1620 DC</li><li>1625 DC</li><li>1630 DC</li><li>1635 DC</li><li>1640 DC</li><li>1645 DC</li><li>1650 DC</li><li>1655 DC</li><li>1660 DC</li><li>1665 DC</li><li>1670 DC</li><li>1675 DC</li><li>1680 DC</li><li>1685 DC</li><li>1690 DC</li><li>1695 DC</li><li>1700 DC</li><li>1705 DC</li><li>1710 DC</li><li>1715 DC</li><li>1720 DC</li><li>1725 DC</li><li>1730 DC</li><li>1735 DC</li><li>1740 DC</li><li>1745 DC</li><li>1750 DC</li><li>1755 DC</li><li>1760 DC</li><li>1765 DC</li><li>1770 DC</li><li>1775 DC</li><li>1780 DC</li><li>1785 DC</li><li>1790 DC</li><li>1795 DC</li><li>1800 DC</li><li>1805 DC</li><li>1810 DC</li><li>1815 DC</li><li>1820 DC</li><li>1825 DC</li><li>1830 DC</li><li>1835 DC</li><li>1840 DC</li><li>1865 DC</li><li>1890 DC</li><li>1915 DC</li><li>1940 DC</li><li>1965 DC</li><li>1990 DC</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li></ul></div>
			<div class="date-bar-color" id="date-bar-color"><ul><li>4100 AC</li><li>4000 AC</li><li>3900 AC</li><li>3800 AC</li><li>3700 AC</li><li>3600 AC</li><li>3500 AC</li><li>3400 AC</li><li>3300 AC</li><li>3200 AC</li><li>3100 AC</li><li>3000 AC</li><li>2900 AC</li><li>2875 AC</li><li>2850 AC</li><li>2825 AC</li><li>2800 AC</li><li>2775 AC</li><li>2750 AC</li><li>2725 AC</li><li>2700 AC</li><li>2675 AC</li><li>2650 AC</li><li>2625 AC</li><li>2600 AC</li><li>2575 AC</li><li>2550 AC</li><li>2525 AC</li><li>2500 AC</li><li>2475 AC</li><li>2450 AC</li><li>2425 AC</li><li>2400 AC</li><li>2375 AC</li><li>2350 AC</li><li>2325 AC</li><li>2300 AC</li><li>2275 AC</li><li>2250 AC</li><li>2225 AC</li><li>2200 AC</li><li>2175 AC</li><li>2150 AC</li><li>2125 AC</li><li>2100 AC</li><li>2075 AC</li><li>2050 AC</li><li>2025 AC</li><li>2000 AC</li><li>1975 AC</li><li>1950 AC</li><li>1940 AC</li><li>1930 AC</li><li>1920 AC</li><li>1910 AC</li><li>1900 AC</li><li>1890 AC</li><li>1880 AC</li><li>1870 AC</li><li>1860 AC</li><li>1850 AC</li><li>1840 AC</li><li>1830 AC</li><li>1820 AC</li><li>1810 AC</li><li>1800 AC</li><li>1790 AC</li><li>1780 AC</li><li>1770 AC</li><li>1760 AC</li><li>1750 AC</li><li>1740 AC</li><li>1730 AC</li><li>1720 AC</li><li>1710 AC</li><li>1700 AC</li><li>1690 AC</li><li>1680 AC</li><li>1670 AC</li><li>1660 AC</li><li>1650 AC</li><li>1625 AC</li><li>1600 AC</li><li>1575 AC</li><li>1550 AC</li><li>1525 AC</li><li>1500 AC</li><li>1475 AC</li><li>1450 AC</li><li>1425 AC</li><li>1400 AC</li><li>1375 AC</li><li>1350 AC</li><li>1325 AC</li><li>1300 AC</li><li>1275 AC</li><li>1250 AC</li><li>1225 AC</li><li>1200 AC</li><li>1175 AC</li><li>1150 AC</li><li>1125 AC</li><li>1100 AC</li><li>1095 AC</li><li>1090 AC</li><li>1085 AC</li><li>1080 AC</li><li>1075 AC</li><li>1070 AC</li><li>1065 AC</li><li>1060 AC</li><li>1055 AC</li><li>1050 AC</li><li>1045 AC</li><li>1040 AC</li><li>1035 AC</li><li>1030 AC</li><li>1025 AC</li><li>1020 AC</li><li>1015 AC</li><li>1010 AC</li><li>1005 AC</li><li>1000 AC</li><li>995 AC</li><li>990 AC</li><li>985 AC</li><li>980 AC</li><li>975 AC</li><li>970 AC</li><li>965 AC</li><li>960 AC</li><li>955 AC</li><li>950 AC</li><li>945 AC</li><li>940 AC</li><li>935 AC</li><li>930 AC</li><li>925 AC</li><li>920 AC</li><li>915 AC</li><li>910 AC</li><li>905 AC</li><li>900 AC</li><li>895 AC</li><li>890 AC</li><li>885 AC</li><li>880 AC</li><li>875 AC</li><li>870 AC</li><li>865 AC</li><li>860 AC</li><li>855 AC</li><li>850 AC</li><li>845 AC</li><li>840 AC</li><li>835 AC</li><li>830 AC</li><li>825 AC</li><li>820 AC</li><li>815 AC</li><li>810 AC</li><li>805 AC</li><li>800 AC</li><li>795 AC</li><li>790 AC</li><li>785 AC</li><li>780 AC</li><li>775 AC</li><li>770 AC</li><li>765 AC</li><li>760 AC</li><li>755 AC</li><li>750 AC</li><li>745 AC</li><li>740 AC</li><li>735 AC</li><li>730 AC</li><li>725 AC</li><li>720 AC</li><li>715 AC</li><li>710 AC</li><li>705 AC</li><li>700 AC</li><li>695 AC</li><li>690 AC</li><li>685 AC</li><li>680 AC</li><li>675 AC</li><li>670 AC</li><li>665 AC</li><li>660 AC</li><li>655 AC</li><li>650 AC</li><li>645 AC</li><li>640 AC</li><li>635 AC</li><li>630 AC</li><li>625 AC</li><li>620 AC</li><li>610 AC</li><li>600 AC</li><li>590 AC</li><li>580 AC</li><li>570 AC</li><li>560 AC</li><li>550 AC</li><li>540 AC</li><li>530 AC</li><li>520 AC</li><li>510 AC</li><li>500 AC</li><li>490 AC</li><li>480 AC</li><li>470 AC</li><li>460 AC</li><li>450 AC</li><li>440 AC</li><li>430 AC</li><li>420 AC</li><li>410 AC</li><li>400 AC</li><li>390 AC</li><li>380 AC</li><li>370 AC</li><li>360 AC</li><li>350 AC</li><li>340 AC</li><li>330 AC</li><li>320 AC</li><li>310 AC</li><li>300 AC</li><li>290 AC</li><li>280 AC</li><li>270 AC</li><li>260 AC</li><li>250 AC</li><li>240 AC</li><li>230 AC</li><li>220 AC</li><li>210 AC</li><li>200 AC</li><li>190 AC</li><li>180 AC</li><li>170 AC</li><li>160 AC</li><li>150 AC</li><li>140 AC</li><li>130 AC</li><li>120 AC</li><li>110 AC</li><li>100 AC</li><li>99 AC</li><li>98 AC</li><li>97 AC</li><li>96 AC</li><li>95 AC</li><li>94 AC</li><li>93 AC</li><li>92 AC</li><li>91 AC</li><li>90 AC</li><li>89 AC</li><li>88 AC</li><li>87 AC</li><li>86 AC</li><li>85 AC</li><li>84 AC</li><li>83 AC</li><li>82 AC</li><li>81 AC</li><li>80 AC</li><li>79 AC</li><li>78 AC</li><li>77 AC</li><li>76 AC</li><li>75 AC</li><li>74 AC</li><li>73 AC</li><li>72 AC</li><li>71 AC</li><li>70 AC</li><li>69 AC</li><li>68 AC</li><li>67 AC</li><li>66 AC</li><li>65 AC</li><li>64 AC</li><li>63 AC</li><li>62 AC</li><li>61 AC</li><li>60 AC</li><li>59 AC</li><li>58 AC</li><li>57 AC</li><li>56 AC</li><li>55 AC</li><li>54 AC</li><li>53 AC</li><li>52 AC</li><li>51 AC</li><li>50 AC</li><li>49 AC</li><li>48 AC</li><li>47 AC</li><li>46 AC</li><li>45 AC</li><li>44 AC</li><li>43 AC</li><li>42 AC</li><li>41 AC</li><li>40 AC</li><li>39 AC</li><li>38 AC</li><li>37 AC</li><li>36 AC</li><li>35 AC</li><li>34 AC</li><li>33 AC</li><li>32 AC</li><li>31 AC</li><li>30 AC</li><li>29 AC</li><li>28 AC</li><li>27 AC</li><li>26 AC</li><li>25 AC</li><li>24 AC</li><li>23 AC</li><li>22 AC</li><li>21 AC</li><li>20 AC</li><li>19 AC</li><li>18 AC</li><li>17 AC</li><li>16 AC</li><li>15 AC</li><li>14 AC</li><li>13 AC</li><li>12 AC</li><li>11 AC</li><li>10 AC</li><li>9 AC</li><li>8 AC</li><li>7 AC</li><li>6 AC</li><li>5 AC</li><li>4 AC</li><li>3 AC</li><li>2 AC</li><li>1 AC</li><li>1 DC</li><li>2 DC</li><li>3 DC</li><li>4 DC</li><li>5 DC</li><li>6 DC</li><li>7 DC</li><li>8 DC</li><li>9 DC</li><li>10 DC</li><li>11 DC</li><li>12 DC</li><li>13 DC</li><li>14 DC</li><li>15 DC</li><li>16 DC</li><li>17 DC</li><li>18 DC</li><li>19 DC</li><li>20 DC</li><li>21 DC</li><li>22 DC</li><li>23 DC</li><li>24 DC</li><li>25 DC</li><li>26 DC</li><li>27 DC</li><li>28 DC</li><li>29 DC</li><li>30 DC</li><li>31 DC</li><li>32 DC</li><li>33 DC</li><li>34 DC</li><li>35 DC</li><li>40 DC</li><li>45 DC</li><li>50 DC</li><li>55 DC</li><li>60 DC</li><li>65 DC</li><li>70 DC</li><li>75 DC</li><li>80 DC</li><li>85 DC</li><li>90 DC</li><li>95 DC</li><li>100 DC</li><li>105 DC</li><li>110 DC</li><li>115 DC</li><li>120 DC</li><li>125 DC</li><li>130 DC</li><li>135 DC</li><li>140 DC</li><li>145 DC</li><li>150 DC</li><li>155 DC</li><li>160 DC</li><li>165 DC</li><li>170 DC</li><li>175 DC</li><li>180 DC</li><li>185 DC</li><li>190 DC</li><li>195 DC</li><li>200 DC</li><li>205 DC</li><li>210 DC</li><li>215 DC</li><li>220 DC</li><li>225 DC</li><li>230 DC</li><li>235 DC</li><li>240 DC</li><li>245 DC</li><li>250 DC</li><li>255 DC</li><li>260 DC</li><li>265 DC</li><li>270 DC</li><li>275 DC</li><li>280 DC</li><li>285 DC</li><li>290 DC</li><li>295 DC</li><li>300 DC</li><li>305 DC</li><li>310 DC</li><li>315 DC</li><li>320 DC</li><li>325 DC</li><li>330 DC</li><li>335 DC</li><li>340 DC</li><li>345 DC</li><li>350 DC</li><li>375 DC</li><li>400 DC</li><li>425 DC</li><li>450 DC</li><li>475 DC</li><li>500 DC</li><li>525 DC</li><li>550 DC</li><li>575 DC</li><li>600 DC</li><li>625 DC</li><li>650 DC</li><li>675 DC</li><li>700 DC</li><li>725 DC</li><li>750 DC</li><li>775 DC</li><li>800 DC</li><li>825 DC</li><li>850 DC</li><li>875 DC</li><li>900 DC</li><li>925 DC</li><li>950 DC</li><li>975 DC</li><li>1000 DC</li><li>1025 DC</li><li>1050 DC</li><li>1075 DC</li><li>1100 DC</li><li>1125 DC</li><li>1150 DC</li><li>1175 DC</li><li>1200 DC</li><li>1225 DC</li><li>1250 DC</li><li>1275 DC</li><li>1300 DC</li><li>1325 DC</li><li>1350 DC</li><li>1375 DC</li><li>1400 DC</li><li>1425 DC</li><li>1450 DC</li><li>1475 DC</li><li>1500 DC</li><li>1520 DC</li><li>1525 DC</li><li>1530 DC</li><li>1535 DC</li><li>1540 DC</li><li>1545 DC</li><li>1550 DC</li><li>1555 DC</li><li>1560 DC</li><li>1565 DC</li><li>1570 DC</li><li>1575 DC</li><li>1580 DC</li><li>1585 DC</li><li>1590 DC</li><li>1595 DC</li><li>1600 DC</li><li>1605 DC</li><li>1610 DC</li><li>1615 DC</li><li>1620 DC</li><li>1625 DC</li><li>1630 DC</li><li>1635 DC</li><li>1640 DC</li><li>1645 DC</li><li>1650 DC</li><li>1655 DC</li><li>1660 DC</li><li>1665 DC</li><li>1670 DC</li><li>1675 DC</li><li>1680 DC</li><li>1685 DC</li><li>1690 DC</li><li>1695 DC</li><li>1700 DC</li><li>1705 DC</li><li>1710 DC</li><li>1715 DC</li><li>1720 DC</li><li>1725 DC</li><li>1730 DC</li><li>1735 DC</li><li>1740 DC</li><li>1745 DC</li><li>1750 DC</li><li>1755 DC</li><li>1760 DC</li><li>1765 DC</li><li>1770 DC</li><li>1775 DC</li><li>1780 DC</li><li>1785 DC</li><li>1790 DC</li><li>1795 DC</li><li>1800 DC</li><li>1805 DC</li><li>1810 DC</li><li>1815 DC</li><li>1820 DC</li><li>1825 DC</li><li>1830 DC</li><li>1835 DC</li><li>1840 DC</li><li>1865 DC</li><li>1890 DC</li><li>1915 DC</li><li>1940 DC</li><li>1965 DC</li><li>1990 DC</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li><li>Future</li></ul></div>

			<!-- Current Year -->
			<div class="current-year-line"></div>
			<div class="current-year">1200<span>AC</span></div>

			<!-- Stage and Events -->
			<div class="stage" id="stage" style="width:66990px;">
				<canvas class="pointer"></canvas><!-- Canvas Pointer -->
				<div class="events">
									</div>
			</div>
		</div>


		<!-- Footer -->
		<div class="footer">
			<div class="currently-viewing">
				<h5>Actualmente viendo</h5>
				<h3>
					<span class="link age-name" data-age="3">Age of Christ</span> &raquo;
					<span class="link period-name" data-period="5">United Kingdom</span>
				</h3>
			</div>
			<div class="period-bar" id="period-bar">
				<h5>El Reino Unido</h5>
				<!-- <div class="year-bubble" id="year-bubble"></div> -->
				<table class="years dark">
					<tr>
						<td class="swash">Creación</td>
						<td>3000 AC</td>
						<td>2500 AC</td>
						<td>2000 AC</td>
						<td>1500 AC</td>
						<td>1000 AC</td>
						<td>500 AC</td>
						<td>0</td>
						<td>500 DC</td>
						<td>1000 DC</td>
						<td>1500 DC</td>
						<td class="swash">Presente</td>
					</tr>
				</table>
				<div class="periods">
					<div class="period-1-wrap period" data-period="1"><div><div class="period-1"></div></div></div>
					<div class="period-2-wrap period" data-period="2"><div><div class="period-2"></div></div></div>
					<div class="period-3-wrap period" data-period="3"><div><div class="period-3"></div></div></div>
					<div class="period-4-wrap period" data-period="4"><div><div class="period-4"></div></div></div>
					<div class="period-5-wrap period" data-period="5"><div><div class="period-5"></div></div></div>
					<div class="period-6-wrap period" data-period="6"><div><div class="period-6"></div></div></div>
					<div class="period-7-wrap period" data-period="7"><div><div class="period-7"></div></div></div>
					<div class="period-8-wrap period" data-period="8"><div><div class="period-8"></div></div></div>
					<div class="period-9-wrap period" data-period="9"><div><div class="period-9"></div></div></div>
					<div class="period-10-wrap period" data-period="10"><div><div class="period-10"></div></div></div>
					<div class="period-11-wrap period" data-period="11"><div><div class="period-11"></div></div></div>
					<div class="period-12-wrap period" data-period="12"><div><div class="period-12"></div></div></div>
					<div class="period-13-wrap period" data-period="13"><div><div class="period-13"></div></div></div>
				</div>
			</div>
			<div class="amazing-info">
				<p>&copy; 2020 • IDMJI</p>
			</div>
		</div>
	</div>



	<!-- Period Offsets -->
	<script>
	var json_data = <?php require ('php/events.php'); ?>;
	console.log(json_data);
	var event_consol_array = [];
for (var i = 0; i < json_data.length; i++) {
	labelsize = "";
	if (json_data[i].labelsize === 'major') {
		labelsize = '<div class= "info full">';
	}

	event_consol_array += '"'+'<div class="event hover '+json_data[i].labelsize+' row-'+json_data[i].row+' period-'+json_data[i].period+' " style= "left: '+json_data[i].left+'px; width: '+json_data[i].width+';" data-id= "'+json_data[i].id+'" data-period= "'+json_data[i].period+'" data-hover= "'+json_data[i].id+'" data-slug= "'+json_data[i].slug+'" data-start= "-3954" data-end= "-3024">'+
	labelsize +
				'<h3>'+json_data[i].title+'</h3>'+
				'<h4>3954&ndash;3024 <span>AC</span> <small>(930)</small></h4></div>'+
	 '</div>'+'"';

}
var event_consol = {1:[event_consol_array]};


var events = event_consol;
console.log(events);
		// var events = <?php //require ('php/data/Data_EN.json'); ?>;
		var period_offsets = [[0,1.9704433497537,-4100,1.1],[1320,6.23973727422,-2900,4.4],[5500,4.9261083743842,-1950,11],[8800,1.3136288998358,-1650,4.4],[9680,2.2988505747126,-1450,4.4],[11220,5.5829228243021,-1100,22],[14960,10.180623973727,-930,22],[21780,8.5385878489327,-620,11],[27500,22.167487684729,-100,110],[42240,10.344827586207,35,22],[49170,7.7175697865353,350,4.4],[54340,10.509031198686,1520,22],[61380,8.3743842364532,1840,4.4]];
		var periods = [
		  [
		    -4100,
		    -2900,
		    100,
		    "Primera Generacion ",
		    "Era de los Patriarcas"
		  ],
		  [
		    -2900,
		    -1950,
		    25,
		    "Noe y el Diluvio",
		    "Era de los Patriarcas"
		  ],
		  [
		    -1950,
		    -1650,
		    10,
		    "Los Patriarcas",
		    "Era de los Patriarcas"
		  ],
		  [
		    -1650,
		    -1450,
		    25,
		    "Israel en Egipto",
		    "Era de Israel"
		  ],
		  [
		    -1450,
		    -1100,
		    25,
		    "Los Jueces",
		    "Era de Israel"
		  ],
		  [
		    -1100,
		    -930,
		    5,
		    "El Reino Unido",
		    "Era de Israel"
		  ],
		  [
		    -930,
		    -620,
		    5,
		    "El Reino Dividido",
		    "Era de Israel"
		  ],
		  [
		    -620,
		    -100,
		    10,
		    "El Exilio",
		    "Era de Israel"
		  ],
		  [
		    -100,
		    35,
		    1,
		    "Life of Christ",
		    "Age of Christ"
		  ],
		  [
		    35,
		    350,
		    5,
		    "Early Church",
		    "Age of Christ"
		  ],
		  [
		    350,
		    1520,
		    25,
		    "Middle Ages",
		    "Age of Christ"
		  ],
		  [
		    1520,
		    1840,
		    5,
		    "Reformation",
		    "Age of Christ"
		  ],
		  [
		    1840,
		    3100,
		    25,
		    "Revelation Prophecies",
		    "Age of Christ"
		  ]
		];

		var period_percentages = [21.31, 6.34, 5.05, 7.45, 5.16, 2.93, 5.28, 2.93, 7.16, 5.52, 19.25, 5.63, 5.99];
		var currentPeriod = 1;
		var routerFlag = true;
		var detailCloseFlag = false;
		var currentUser = 0;
	</script>


	<!-- Libraries -->
	<script src="js/libs/jquery.js"></script>
	<script src="js/libs/underscore.min.js"></script>
	<script src="js/libs/backbone.min.js"></script>

	<!-- Device Sniffing -->
	<script>
		var click, hover;
		function deviceSniff(){
			if('ontouchstart' in window || 'onmsgesturechange' in window){
				//var click = window.navigator.msPointerEnabled ? "MSPointerDown" : "touchstart";
				click = window.navigator.msPointerEnabled ? "click" : "touchstart";
				if( window.navigator.msPointerEnabled ){
					hover = 'hoverable';
				} else {
					hover = 'not-hoverable';
				}
			} else {
				click = 'click';
				hover = 'hoverable';
			}
			$('.hover').addClass(hover);
		} deviceSniff();
	</script>

	<!-- Flowplayer -->
	<script src="js/flowplayer/flowplayer.min.js"></script>
	<link rel="stylesheet" type="text/css" href="js/flowplayer/skin/minimalist.css">

	<!-- Scroller Dependencies -->
	<script src="js/scroller/Animate.js"></script>
	<script src="js/scroller/Scroller.js"></script>

	<!-- App -->
	<script src="js/app.js"></script>
	<script src="js/router.js"></script>
	<script src="js/scroller_init.js"></script>
	<script src="js/landing_init.js"></script>


</body>
</html>
