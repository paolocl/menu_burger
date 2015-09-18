<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="style_burger.css"/>
</head>
<body>
<script>
  function show() {
    document.getElementById('toto').style.display = 'inline-block';
    document.getElementById('aff').style.display = 'none';
  }
    
    function hid() {
    document.getElementById('aff').style.display = 'inline-block';
    document.getElementById('toto').style.display = 'none';
  }
    
</script>
 
<p><a href='javascript: show()' id="aff">
    <img alt="Menu" title="Menu" src="img/burger.png"/>
         </a></p>
    
 
     
     <div style='display:none;' id='toto'> <!-- toto est une idée d'e-kiwi -->
         
         <div id="tete">
            <nav class="menu">
                <ul>
    <li class="survol"><a href="fiction.php">Fiction</a>
        <ul class="sub_nav">
            <li><a href="cinema.php">Cinéma</a></li>
            <li><a href="serie.php">Séries</a></li>
            <li><a href="publicites.php">Publicités</a></li>        
        </ul>
    </li>
    <li><a href="tv.php">TV</a></li>
    <li ><a href="art.php">Art et Culture</a></li>
    <li><a href="insti">Institutionnel</a></li>
    <li><a href="cv">Curriculum Vitae</a></li>
</ul>
    </nav>
         </div>
         
         <div id="tata">
             <a href='javascript: hid()'><div id="hidden"></div></a>               
         </div>
         
     </div>
    

</body>
</html>