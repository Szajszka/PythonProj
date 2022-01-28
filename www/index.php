<?php
	include 'include/db.php';
	$site = (isset($_GET['action'])) ? $_GET['action'] : 'home';
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Porównywarka cen Kart Graficznych</title>

 <link rel="stylesheet" type="text/css" href="css/style.css" />
 
</head>

<body style="cursor: default;">

    <div style="background-color: #bab5b2;">
	</div>
	<div id="tabsWrapper">
		<div id="mainwrapper">
            <div id="tabs">
	    <ul>	<li>
		<a href="/index.php" class="tip" target="_self">Porównywarka cen</a></li>
	</ul>
        </div>
	</div>
</div>
<div id="mainwrapper">
<div id="innerwrapper">
	<div id="navigation">
		<div id="nav"></div>
		<div id="search">
	</div>
</div>

<?php
	include 'opis.php';
	include 'karty.php';
	include 'aktualizacje.php';
?>
</div></div>
<div id="footer">
	<div id="mainwrapper" style="text-align: right;">
	    <span style="line-height: 20px;">© 2022 by Arek Prądziński & <a href="https://steamcommunity.com/id/vankillah" target="_blank" style="color: #C1C1C1">Bartosz Bachusz</a></span><br>
	</div>
</div>
</body>
</html>
