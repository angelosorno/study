<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Linea del Tiempo • Historia Bíblica</title>
	<base href='http://app.idmji.org/study/'>
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
	<div class="menu open">
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
						<li data-id="0">What is the Bible Prophecy Timeline?</li>
						<li data-id="1">How did you determine dates—particularly the time of creation?</li>
						<li data-id="2">What are you primary sources for the timeline?</li>
						<li data-id="3">Are you predicting when Christ will return?</li>
						<li data-id="4">Can I view the timeline on an iPad or other tablet?</li>
						<li data-id="5">What browsers support this timeline?</li>
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
					<p><a href="http://www.biblehistory.com/accounts/recover_password.php" target="_blank">Olvide la clave</a></p>
					<span class="email">Correo incorrecto</span>
					<span class="password">Clave incorrecta</span>
				</form>

				<p><strong>Crear una cuenta</strong></p>
				<p>When you create an account on biblehistory.com, you’ll be able to tag your favorite person and event entries and go straight to them whenever you like from wherever you like. This is a great tool for Bible students and for Bible studies with friends and family.</p>
				<p>How? Just click the “Add to Favorites” Button—it’s that simple. Then, from the homepage, click the flag in the main menu to see your favorites.</p>
				<p>Sign up today! Oh, and we promise never to give or sell your name or email to others..</p>
				<p><a href="http://www.biblehistory.com/accounts/create.php" target="_blank">Crear cuenta ahora</a></p>
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
				<p>With more than 850 interconnected entries, the Bible Prophecy Timeline is a comprehensive study tool that allows you to explore every character and major event of the Bible, from the creation of the world to last-day prophecies. Each entry in the Timeline contains a brief but insightful article with interesting facts about the person or event, plus artwork and full Scripture references and passages to help you find it in the Bible.</p>
				<p>Where possible, entries also include links to related characters and events and a video presentation to help deepen your understanding of their place in Bible history.</p>
				<p>The Timeline is divided into three major sections:</p>
				<ul>
					<li>
						<strong>Age of Patriarchs—Creation to c. 1660 BC</strong><br />
						<p>The timeline begins with Adam in Eden, then on to Noah and the Flood and the birth of Israel through Abraham, Isaac, and Jacob.</p>
					</li>
					<li>
						<strong>Age of Israel—c. 1660 BC to c. 457 BC</strong><br />
						<p>Covers the history of the Jewish nation, from Moses and the Exodus to King David and the prophets Daniel and Isaiah.</p>
					</li>
					<li>
						<strong>Age of Christ—c. 4 BC to AD 1840</strong>
						<p>Covers the life, death, and resurrection of Jesus; the apostles; the Reformation; and the final events of earth’s history.</p>
					</li>
				</ul>
				<p>Each of these sections are further divided into more specific time periods for ease of study.</p>
			</div>

			<div class="faq-answer 1">
				<p>We believe the Bible is the inspired Word of God, thus our primary source for dating events and people in the Bible Prophecy Timeline are the Bible’s genealogies and event-to-event comparisons found in other traditionally accepted non-biblical sources, such as ancient historical records by Josephus and modern-day scholarship by professional theologians and educators. For this chronology, we relied on the Masoretic text, on which English Bibles are based.</p>
				<p>While we believe the Bible Prophecy Timeline provides the most accurate dating available, many dates are still subject to interpretation and some educated guesswork due to a few vague areas in Bible history. As with anyone’s family tree, the farther back you go the fuzzier things can become.</p>
				<p>The following is a brief summary of our calculated date of creation, beginning with the chronology found in Genesis chapter five:</p>
				<table>
					<tr>
						<th>Name</th>
						<th>Birth (AC)</th>
						<th>Age when son born</th>
						<th>Length of life</th>
						<th>Death  (AC)</th>
					</tr>
					<tr>
						<td>Adam</td>
						<td>0</td>
						<td>130</td>
						<td>930</td>
						<td>930</td>
					</tr>
					<tr>
						<td>Seth</td>
						<td>130</td>
						<td>105</td>
						<td>912</td>
						<td>1042</td>
					</tr>
					<tr>
						<td>Enosh</td>
						<td>235</td>
						<td>90</td>
						<td>905</td>
						<td>1140</td>
					</tr>
					<tr>
						<td>Kenan</td>
						<td>325</td>
						<td>70</td>
						<td>910</td>
						<td>1235</td>
					</tr>
					<tr>
						<td>Mahalalel</td>
						<td>395</td>
						<td>65</td>
						<td>895</td>
						<td>1290</td>
					</tr>
					<tr>
						<td>Jared</td>
						<td>460</td>
						<td>162</td>
						<td>962</td>
						<td>1422</td>
					</tr>
					<tr>
						<td>Enoch</td>
						<td>622</td>
						<td>65</td>
						<td>365</td>
						<td>987*</td>
					</tr>
					<tr>
						<td>Methuselah</td>
						<td>687</td>
						<td>187</td>
						<td>969</td>
						<td>1656</td>
					</tr>
					<tr>
						<td>Lamech</td>
						<td>874</td>
						<td>182</td>
						<td>777</td>
						<td>1651</td>
					</tr>
					<tr>
						<td>Noah</td>
						<td colspan="2">1056</td>
						<td colspan="2">500</td>
					</tr>
				</table>

				<p>Timespans in the Bible are typically recorded in terms of people’s ages, events, and king’s reigns. Presuming that Adam was created in year 0, we’ll assume that his son Seth was born in the year 130 After Creation—or 130 AC.</p>
				<p>(This presumption makes it reckless to be dogmatic as to the exact year of creation. Additionally, because we are not told the month and day of each birth in the Bible, there is the potential for an error of up to 364 days in these calculations every time a new birth is mentioned.)</p>
				<p>Genesis chapter 5 ends with the statement that “after Noah was 500 years old he became the father of Shem, Ham, and Japheth.” Genesis 9:24 tells us that Ham was Noah’s youngest son. Genesis 11:10 tells us that Shem was 100 years old two years after the Flood, which means he must have been born when Noah was 502. We conclude that Japheth was the son born when Noah was 500 years old, Shem two years later, and Ham an unspecified period after that.</p>
				<table>
					<tr>
						<th>Name</th>
						<th>Birth (AC)</th>
						<th>Age when son born</th>
						<th>Length of life</th>
						<th>Death  (AC)</th>
					</tr>
					<tr>
						<td>Noah</td>
						<td>1056</td>
						<td>502</td>
						<td>950</td>
						<td>2006</td>
					</tr>
					<tr>
						<td>Shem</td>
						<td>1558</td>
						<td>100</td>
						<td>600</td>
						<td>2158</td>
					</tr>
					<tr>
						<td>Arphaxad</td>
						<td>1658</td>
						<td>35</td>
						<td>438</td>
						<td>2096</td>
					</tr>
					<tr>
						<td>Shelah</td>
						<td>1693</td>
						<td>30</td>
						<td>433</td>
						<td>2126</td>
					</tr>
					<tr>
						<td>Eber</td>
						<td>1723</td>
						<td>34</td>
						<td>464</td>
						<td>2187</td>
					</tr>
					<tr>
						<td>Peleg</td>
						<td>1757</td>
						<td>30</td>
						<td>239</td>
						<td>1996</td>
					</tr>
					<tr>
						<td>Reu</td>
						<td>1787</td>
						<td>32</td>
						<td>239</td>
						<td>2026</td>
					</tr>
					<tr>
						<td>Serug</td>
						<td>1819</td>
						<td>30</td>
						<td>230</td>
						<td>2049</td>
					</tr>
					<tr>
						<td>Nahor</td>
						<td>1849</td>
						<td>29</td>
						<td>148</td>
						<td>1997</td>
					</tr>
					<tr>
						<td>Terah</td>
						<td colspan="2">1878</td>
						<td colspan="2">70</td>
					</tr>
				</table>

				<p>The next point of interest is the date of Shem’s death. With the exception of Eber, none of Shem’s descendants outlived him. Now let us consider the Hebrew patriarchs …</p>
				<table>
					<tr>
						<th>Name</th>
						<th>Birth (AC)</th>
						<th>Age when son born</th>
						<th>Length of life</th>
						<th>Death  (AC)</th>
						<th>Reference</th>
					</tr>
					<tr>
						<td>Terah</td>
						<td>1878</td>
						<td>70</td>
						<td>205</td>
						<td>2083</td>
						<td>11:32</td>
					</tr>
					<tr>
						<td>Abraham</td>
						<td>1948</td>
						<td>100</td>
						<td>175</td>
						<td>2123</td>
						<td>21:5; 25:7</td>
					</tr>
					<tr>
						<td>Isaac</td>
						<td>2048</td>
						<td>60</td>
						<td>180</td>
						<td>2228</td>
						<td>25:26; 35:28</td>
					</tr>
					<tr>
						<td>Jacob</td>
						<td>2108</td>
						<td>147</td>
						<td>2255</td>
					</tr>
				</table>

				<p>With Jacob, the tidy progression of fathers and sons ends. We are not told how old he was when he fled to Haran nor given his age when any of his children are born. It is possible, however, to work out when Joseph was born.</p>
				<p>We are told Joseph was 30 when he was appointed over the land of Egypt (Genesis 41:46). There followed seven years of plenty and, in the second year of the famine, Joseph revealed himself to his brothers (Genesis 45:6), which would make him about 39. Jacob came down to Egypt when he was 130 years old (Genesis 47:9), which means that Joseph was born when Jacob was 91—that is, in 2199 AC. </p>
				<p>As most of Jacob’s family seems to have been born during the 20 years that he was in Haran, it appears that the twins Jacob and Esau were about 70 when the deception over the birthright occurred. We assume then that Jacob was 71 when he fled to Haran. He served Laban for seven years before marrying, and Levi was the third son to be born to Leah. If we assume that Leah was pregnant once a year, then Jacob was 81 when Levi was born. If Joseph was born about 2199 AC, his older brother Levi must have been born about 2189 AC.</p>
				<p>Next, God told Abraham that his descendants would be enslaved for 400 years or four generations (Genesis 15:13). This seems to be confirmed by the statement in Exodus 12:40, 41 that the children of Israel were in Egypt for 430 years. If Jacob went to Egypt in the year 2238 AC, that would place the Exodus in the year 2668 AC.</p>
				<p>There is, however, a problem. As given in Exodus chapter 6, Levi, who lived 137 years, had a son called Kohath, who lived 133 years, and a daughter, Jochebed. Amram, son of Kohath, married his aunt Jochebed, and lived for 137 years. Their son was Moses. This comes to a total of 407 years, and when we add in Moses’ age of 80 at the time of the Exodus, we seem to have plenty of time to fit in the 430 year of the oppression.</p>
				<p>The trouble is that the years don’t just add up like that. The average age of the preceding four generations when their first son was born was 75. If Levi, Kohath, and Amram were also 75 when their sons were born—and Moses was 80 at the time of the Exodus—that makes a span of 305 years for the Jewish oppression, minus Levi’s age when he went down into Egypt, which was 49. The oppression can only have lasted 256 years.</p>
				<p>The usual solution adopted by most commentators is to conclude that the 430 years refer not to the oppression but to the time that Abraham and his descendants would have to wait until the land of Canaan belonged to them. The 430 years is the time from Abraham’s visit to Egypt until the Exodus. This works out as approximately 215 years of wandering in Canaan and 215 years of oppression in Egypt.</p>
				<p>There is evidence that this is how the Jews understood this passage. Josephus, the 1st century AD Jewish historian, wrote, “They left Egypt in the month Xanthicus, on the fifteenth day of the lunar month; four hundred and thirty years after our forefather Abraham came into Canaan, but two hundred and fifteen years only after Jacob removed into Egypt” (Antiquities of the Jews II:xv:2). A scroll fragment from the Dead Sea (4Q559) confirms this short chronology.</p>
				<p>Jacob went down into Egypt in the year 2238 AC and, for our purposes, we will place the Exodus 215 years later in the year 2453 AC. Again, an approximation.</p>
				<p>Next, in 1 Kings 6:1, we are told that the fourth year of Solomon’s reign was the 480th year after the Exodus. That means a date of 2933 AC for the commencement of work on the temple.</p>
				<p>Dr. Edwin R. Thiele, in The Mysterious Numbers of the Hebrew Kings, establishes the year 931 BC as the date when Rehoboam began to reign. Assuming he’s correct, 1 Kings 11:42 tells us that Solomon reigned for 40 years, so his reign began in the year 971 BC, which means that his fourth year must have been the year 967 BC.</p>
				<p>Therefore, if Solomon’s fourth year, the year 967 BC, came 2933 years after creation, then we can say that this world was created in the year 3900 BC. As it should be obvious that this can only be an approximate date, it should be equally obvious that there are limits to the amount one can stretch the chronology. If we make the Jewish oppression 430 years, include maximum time between generations, and so on, the most we can add in is another thousand years or so. Certainly there is no room in the biblical figures for pushing creation back to 10,000 BC.</p>
			</div>








			<div class="faq-answer 2">
				<p>The following is a list of sources used, among others, to create the timeline:</p>
				<ul>
					<li>Adam Clarke’s Commentary on the Whole Bible, 1826.</li>
					<li>Bainton, Roland H. <i>Here I Stand: A Life of Martin Luther.</i> New York: Abingdon Press, 1950.</li>
					<li>Bokenkotter, Thomas. <i>A Concise History of the Catholic Church.</i> New York: Double Day, 2005.</li>
					<li>Cannon, William R. <i>History of Christianity in the Middle Ages: From the Fall of Rome to the Fall of Constantinople.</i> New York: Abingdon Press, 1960.</li>
					<li>Courvoisier, Jaques. Zwingli: <i>A Reformed Theologian</i>. Richmond: John Knox Press, 1963.</li>
					<li>Easton’s Bible Dictionary, 1897.</li>
					<li>González, Justo L. <i>The Story of Christianity, Vol. 1: The Early Church to the Dawn of the Reformation.</i> New York: HarperOne, 2010.</li>
					<li>González, Justo L. <i>The Story of Christianity, Vol. 2: The Reformation to the Present Day.</i> New York: HarperOne, 2010.</li>
					<li>Heinze, Rudolph, W. <i>Reform and Conflict: From the Medieval World to the Wars of Religion, A.D. 1350-1648</i>, consulting editors John D. Woodbridge and David F. Wright, series editor Tim Dowley. Grand Rapids: Baker, 2005.</li>
					<li>House, H. Wayne, <i>Chronological and Background Charts of the New Testament,</i> Zondervan 2009.</li>
					<li>Kelly, J.N.D. <i>The Oxford Dictionary of Popes. New York: Oxford University Press</i>, 1986.</li>
					<li>Keith Stokes <i>Bible Timeline Database</i>, <a href="www.brainsanctuary.com" rel="nofollow">www.brainsanctuary.com</a></li>
					<li>Lane, Tony. <i>A Concise History of Christian Thought: Completely Revised and Expanded Edition</i>. Grand Rapids: Baker Academic, 2006.</li>
					<li>Lindsay, Thomas M. <i>A History of the Reformation, Vol. 2: In Lands Beyond Germany.</i> Edinburgh: T & T Clark, 1959.</li>
					<li>Logan, Donald F. <i>A History of the Church in the Middle Ages.</i> Oxford: Routledge, 2002.</li>
					<li>Matthew Henry’s Concise Commentary on the Bible, 1706.</li>
					<li>Price, Ira Maurice. <i>The Ancestry of Our English Bible.</i> New York: Harper & Row, 1956.</li>
					<li>Schwiebert, <i>E. G. Luther and His Times: The Reformation from a New Perspective,</i> Saint Louis: Concordia, 1950.</li>
					<li>SDA Bible Commentary Reference Series. Review and Herald Publishing Association: Hagerstown, Maryland, 1979.</li>
					<li>Tenney, Merril C., <i>New Testament Times</i>, Hendrickson Publishers 2001.</li>
					<li>Andrews University Study Bible, Andrews University Press: Berrien Springs, Michigan, 2007.</li>
					<li>Walton, John H. <i>Chronological and Background Charts of the Old Testament,</i> Zondervan, 1994.</li>
				</ul>
			</div>


			<div class="faq-answer 3">
				<p>No. The Bible says that as to the day and hour of Christ’s return, no one knows. See Matthew 24:50. Moreover, the return of Christ will only come after other prophetic fulfillments occur—and we don’t know when those will happen either. The timeline’s purpose is not to predict when exactly future events will occur, but rather to show the Bible’s reliability as an historical record, its trustworthiness in matters of prophecy, and as an in-depth tool for Bible study.</p>
			</div>


			<div class="faq-answer 4">
				<p>Android and iPad apps are currently in early development. Please check back for details on release dates.</p>
			</div>


			<div class="faq-answer 5">
				<p>The timeline supports Firefox, Chrome, Safari, and Internet Explorer 9+.</p>
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
				<li class="full">Pantalla Completa</li>
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
				<div class="arches">
					<div class="arch arch-1">
						<h3>Age of Patriarchs</h3>
						<p>The timeline begins with Adam in Eden, then on to Noah and the Flood and the birth of Israel through Abraham, Isaac, and Jacob.</p>
					</div>
					<div class="arch arch-2">
						<h3>Age of 	Israel</h3>
						<p>The history of the Jewish nation, from Moses and the Exodus to King David and the prophets Daniel and Isaiah.</p>
					</div>
					<div class="arch arch-3">
						<h3>Age of Christ</h3>
						<p>The life and death of Jesus, the apostles, the Reformation, and the final events of earth’s history.</p>
					</div>
				</div>






				<!-- Periods -->
				<div class="landing-periods">
					<div class="landing-period landing-period-1 hover" data-id="1">
						<div class="image"></div>
						<div class="info">
							<h3>Primera<br /> Generación</h3>
							<div class="dash-line"></div>
							<h4>From the creation of Adam and Eve, to the murder of Abel by Cain, and human history before the flood.</h4>
						</div>
					</div>
					<div class="landing-period landing-period-2 hover" data-id="2">
						<div class="image"></div>
						<div class="info">
							<h3>Noe y<br /> El Diluvio</h3>
							<div class="dash-line"></div>
							<h4>From the ministry of Noah and the global deluge, to Cush, Nimrod, and the tower of Babel.</h4>
						</div>
					</div>
					<div class="landing-period landing-period-3 hover" data-id="3">
						<div class="image"></div>
						<div class="info">
							<h3>Los<br /> Patriarcas</h3>
							<div class="dash-line"></div>
							<h4>From the call of Abraham, to Sodom and Gomorrah, and the rise of 12 Jewish tribes through Isaac and Jacob.</h4>
						</div>
					</div>
					<div class="landing-period landing-period-4 hover" data-id="4">
						<div class="image"></div>
						<div class="info">
							<h3>Egipto<br /> a Canaán</h3>
							<div class="dash-line"></div>
							<h4>From Joseph being sold into slavery, his rise to power in Egypt, and to Moses and the Exodus.</h4>
						</div>
					</div>
					<div class="landing-period landing-period-5 hover" data-id="5">
						<div class="image"></div>
						<div class="info">
							<h3>Los<br /> Jueces</h3>
							<div class="dash-line"></div>
							<h4>From Moses and the Ten Commandments to Joshua’s entrance and Jewish expansion into the Promised Land.</h4>
						</div>
					</div>
					<div class="landing-period landing-period-6 hover" data-id="6">
						<div class="image"></div>
						<div class="info">
							<h3>Reino<br /> Unido</h3>
							<div class="dash-line"></div>
							<h4>From King Saul to the prophet Samuel and young King David and his royal dynasty through Solomon.</h4>
						</div>
					</div>
					<div class="landing-period landing-period-7 hover" data-id="7">
						<div class="image"></div>
						<div class="info">
							<h3>Reino<br /> Divido</h3>
							<div class="dash-line"></div>
							<h4>From the internal strife that divided the nation of Israel to the prophets who warned of the coming exile.</h4>
						</div>
					</div>
					<div class="landing-period landing-period-8 hover" data-id="8">
						<div class="image"></div>
						<div class="info">
							<h3>El<br /> Exilio</h3>
							<div class="dash-line"></div>
							<h4>From Israel’s fall to exile in Babylon and the major prophets declaring the coming Messiah.</h4>
						</div>
					</div>
					<div class="landing-period landing-period-9 hover" data-id="9">
						<div class="image"></div>
						<div class="info">
							<h3>Vida de<br /> Cristo</h3>
							<div class="dash-line"></div>
							<h4>From the birth of the promised Messiah, Jesus the Christ, to His ministry and death and resurrection.</h4>
						</div>
					</div>
					<div class="landing-period landing-period-10 hover" data-id="10">
						<div class="image"></div>
						<div class="info">
							<h3>Iglesia<br /> Primitiva</h3>
							<div class="dash-line"></div>
							<h4>From the martyrdom of Stephen to the persecution and rise of the church through Paul and the apostles.</h4>
						</div>
					</div>
					<div class="landing-period landing-period-11 hover" data-id="11">
						<div class="image"></div>
						<div class="info">
							<h3>Seguno<br /> Tunel</h3>
							<div class="dash-line"></div>
							<h4>From the legalization of Christianity under Constantine to the persecution of the Dark Ages.</h4>
						</div>
					</div>
					<div class="landing-period landing-period-12 hover" data-id="12">
						<div class="image"></div>
						<div class="info">
							<h3>La<br /> Reforma</h3>
							<div class="dash-line"></div>
							<h4>From the great reformers, such as Luther and Wycliffe, to the expansion of the Protestant movement.</h4>
						</div>
					</div>
					<div class="landing-period landing-period-13 hover" data-id="13">
						<div class="image"></div>
						<div class="info">
							<h3>Apocalipsis<br /> </h3>
							<div class="dash-line"></div>
							<h4>From the rise of the antichrist, the mark of the beast, to the return of Christ and paradise restored.</h4>
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
				<div class="slides"></div>

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
					<h3>La era de</h3>
					<h2>PRIMERA GENERACIÓN</h2>
					<h4>Creation&ndash;c.2500 <span>AC</span></h4>
					<p>From the creation of Adam and Eve, to the murder of Abel by Cain, and human history before the flood.</p>
				</div>
				<div class="period-2">
					<h3>La era de</h3>
					<h2>NOE Y EL DILUVIO</h2>
					<h4>c.2500&ndash;c.2166 <span>AC</span></h4>
					<p>From the ministry of Noah and the global deluge, to Cush, Nimrod, and the tower of Babel.</p>
				</div>
				<div class="period-3">
					<h3>La era de</h3>
					<h2>LOS PATRIARCAS</h2>
					<h4>c.2166&ndash;c.1660 <span>AC</span></h4>
					<p>From the call of Abraham, to Sodom and Gomorrah, and the rise of the 12 Jewish tribes through Isaac and Jacob.</p>
				</div>
				<div class="period-4">
					<h3>La era de</h3>
					<h2>EGIPTO A CANAÁN</h2>
					<h4>c.1660&ndash;c.1445 <span>AC</span></h4>
					<p>From Joseph being sold into slavery, his rise to power in Egypt, and to Moses and the Exodus.</p>
				</div>
				<div class="period-5">
					<h3>La era de</h3>
					<h2>LOS JUECES</h2>
					<h4>c.1445&ndash;c.1050 <span>AC</span></h4>
					<p>From Moses and the Ten Commandments to Joshua's entrance and Jewish expansion into the Promised Land.</p>
				</div>
				<div class="period-6">
					<h3>La era de</h3>
					<h2>REINO UNIDO</h2>
					<h4>c.1050&ndash;c.930 <span>AC</span></h4>
					<p>From King Saul to the prophet Samuel and young King David and his royal dynasty through Solomon.</p>
				</div>
				<div class="period-7">
					<h3>La era de</h3>
					<h2>REINO DIVIDIDO</h2>
					<h4>c.930&ndash;c.586 <span>AC</span></h4>
					<p>From the internal strife that divided the nation of Israel to the prophets who warned of the coming exile.</p>
				</div>
				<div class="period-8">
					<h3>La era de</h3>
					<h2>EL EXILIO</h2>
					<h4>c.585&ndash;c.457 <span>AC</span></h4>
					<p>From Israel's fall to exile in Babylon and the major prophets declaring the coming Messiah.</p>
				</div>
				<div class="period-9">
					<h3>La era de</h3>
					<h2>VIDA SEÑOR JESUCRISTO</h2>
					<h4>c.4 <span>AC</span>&ndash;c.34 <span>DC</span></h4>
					<p>From the birth of the promised Messiah, Jesus the Christ, to His ministry and death and resurrection.</p>
				</div>
				<div class="period-10">
					<h3>La era de</h3>
					<h2>Iglesia Primitiva</h2>
					<h4>c.34&ndash;c.330 <span>DC</span></h4>
					<p>From the martyrdom of Stephen to the persecution and rise of the church through Paul and the apostles.</p>
				</div>
				<div class="period-11">
					<h3>La era de</h3>
					<h2>Segundo Tunel</h2>
					<h4>c.450&ndash;c.1517 <span>DC</span></h4>
					<p>From the legalization of Christianity under Constantine to the persecution of the Dark Ages..</p>
				</div>
				<div class="period-12">
					<h3>La era de</h3>
					<h2>La Reforma</h2>
					<h4>c.1517&ndash;c.1840 <span>DC</span></h4>
					<p>From the great reformers, such as Luther and Wycliffe, to the expansion of the Protestant movement.</p>
				</div>
				<div class="period-13">
					<h3>La era de</h3>
					<h2>Apocalipsis</h2>
					<h4>Creation&ndash;Present</h4>
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
	var event_consol = "";
for (var i = 0; i < json_data.length; i++) {
	event_consol = {parseInt(json_data[i].period):["<div class=\"event hover major row-11 period-1 \" style=\"left: "+json_data[i].left +"; width: "+json_data[i].width+";\" data-id="+json_data[i].id+" data-period="+parseInt(json_data[i].period)+" data-hover="+json_data[i].id+" data-slug="+json_data[i].slug+" data-start=\"-3954\" data-end=\"-3024\"><div class=\"info full\"><h3>"+json_data[i].title +"</h3><h4>3954&ndash;3024 <span>AC</span> <small>(930)</small></h4></div><div class=\"image\";></div></div>"
]},;
}
console.log((event_consol));
var events = event_consol;

		var events_original = <?php require ('php/data/Data_EN.json'); ?>;
		var period_offsets = [[0,1.9704433497537,-4100,1.1],[1320,6.23973727422,-2900,4.4],[5500,4.9261083743842,-1950,11],[8800,1.3136288998358,-1650,4.4],[9680,2.2988505747126,-1450,4.4],[11220,5.5829228243021,-1100,22],[14960,10.180623973727,-930,22],[21780,8.5385878489327,-620,11],[27500,22.167487684729,-100,110],[42240,10.344827586207,35,22],[49170,7.7175697865353,350,4.4],[54340,10.509031198686,1520,22],[61380,8.3743842364532,1840,4.4]];
		var periods = <?php require ('php/data/periods.json'); ?>;
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
