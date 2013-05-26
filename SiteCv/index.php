<?php require_once 'inc/main_inc1.php' ?>

<meta name="description" content="Curriculum vitae de Sidoine"/>   

<meta name="keywords" content="accueil, CV" />

<title>Site personnel de Sidoine Tardieu</title>

<link type="text/css" href="jquery/css/jquery-ui-1.8rc2.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="jquery/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/js/jquery-ui-1.8rc2.custom.min.js"></script>

<script type="text/javascript">
			$(function(){
	
				$('#content').tabs();
				$('#cadre').tabs();
				$('#doc').tabs();
				$('#form').tabs();
				$('#nom').tabs();
				$('#prenom').tabs();
				$('#email').tabs();
				$('#object').tabs();
				$('#text').tabs();
				
			
			});
</script>

</head >



<body>

<div id="content">
	
    <div id="haut">

		<h1>Curriculum vitae de<br/>TARDIEU Sidoine</h1>



	</div>
	
    <div id="menu">
    
    		<div id="langue">

			  	  <a  href="indexE.php"><img src="EN.png" alt="flagEnglish" title="flagEnglish"/></a>

				  <a  href="index.php"><img src="GF.png" alt="flagFrancais" title="flagFrancais"/></a> 
             </div>



		<ul>
				<li><a href="#corps">Mon CV</a></li>
				<li><a href="#corps2">Documents</a></li>
                <li><a href="#corps3">Me contacter</a></li>
		</ul>

	</div>
    
    <div id="corps">

	  <h1> Curriculum vitae de Sidoine </h1> 

		   

      <p id="cadre">
     	<br  />
       <img id="idenphoto"src="Photo1.JPG" alt="Photo d'identit� de Sidoine" title="Photo d'identit� de Sidoine"/>
			<br  />
            
			Tardieu Sidoine <br/> 

			-54 rue Victor Hugo <br/>

			38200 - Vienne <br/>

			-50 rue de la Claire <br/>

			69009 - Vaise <br/>

			Tel : 06 07 27 10 14 <br/>

			Mail: tardieu.sidoine@gmail.com <br/>

			15 ao�t 1989 
            <br  />
            <br  />
         </p>
            
	
 	  <h3>Langues </h3> 

		<ul>

			<li>Anglais : Technique</li>

		</ul>



		<h3>Formations et dipl�me</h3>

		<ul>
        	
			<li><strong>Rentr�e scolaire 2009</strong> :�cole sup�rieur d�informatique <strong><a href	="http://www.supinfo.com/" title="supinfo">Supinfo</a></strong> en deuxi�me ann�e</li>

			<li><strong>Rentr�e scolaire 2008</strong> :�cole sup�rieur d�informatique <strong><a href	="http://www.supinfo.com/" title="supinfo">Supinfo</a></strong>en premier ann�e</li>

			<li><strong>2008</strong> : Obtention du permis B</li>

			<li><strong>2008</strong> : Obtention du Baccalaur�at s�rie Scientifique-Science de l�ing�nieur(mention Assez Bien)</li>

			<li><strong>2004</strong> : Obtention du Brevet des Coll�ges</li>

		</ul>

	

		<h3>Exp�riences professionnelles</h3>

		<dl>
        	<dt><strong>2009</strong> : Stage de fin d'ann�e au sein de l'association G�n�ration Oxyg�ne </dt>

				<dd>Gestion du parc informatique durant la p�riode de pr�paration du Semi-Marathon de Lyon et Management d'une �quipe pendant le week-end du Semi-Marathon de Lyon.</dd>

			<dt><strong>2008</strong> : Ouvrier au sien de l�entreprise SMBR </dt>

				<dd>restauration de monuments historiques, de la charpente du clo�tre de la cath�drale de Fr�jus)</dd>

			<dt><strong>2008</strong> : Saisonnier agricole</dt>

				<dd>CCD au sein d'une ferme agricole lors de la saison des vendanges.</dd>

			<dt><strong>2006</strong> : Travaux public au service de la commune de  Vienne</dt>

				<dd> Enployer aux travaux public de la ville de Vienne pour la r�novation d'un hall d'immeuble</dd>

			<dt><strong>2004</strong> : Stage de 3�me au Minist�re de la Culture.</dt>

				<dd> Service syst�me informatique et r�seau.

					Stage avec des professionnels d�informatique pour observation, entretien du parc informatique,

					op�ration de mise � jour du syst�me d�exploitation (passage sous Windows XP) </dd>

		</dl>

	

		<h3>Comp�tences</h3>

		<ul>

			<li>Logiciels : Word / Excel / Office / solidworks / dev c + + / Dreamweaver CS4 / Visual Studio 2008</li>

			<li>Connaissance en langage C/C++/C#, Python, UML, PHP, XML, HTML, CSS et Java script</li>

			<li>Environnement de travail : Windows (Seven, Vista, XP, serveur 2008) ; linux ; MAC OS X</li>

			<li>Base de donn�es : Oracle SQL 10G, PL/SQL</li>

			<li>R�seaux : Cisco CCNA</li>

		</ul>

	

		<h3>Centre d�int�r�ts</h3>

		<ul>

			<li>Sports : Equitation (en club),V�lo tout terrain , escalade (en salle)</li>

			<li>Passionn� de musique et de cin�ma ainsi que de sciences (astronomie, physique,...)</li>

			<li>Voyage : Espagne, Angleterre, Suisse, Qu�bec, Italie, Allemagne<br/> (Voyages touristiques et culturels).</li>

			<li>Citoyen : Donneur de sang et d�organes</li>

		</ul>
        
      </div>
      <div id="corps3"> 
      	
        <div id="form">

    			<form name="contact" action="envois_mail.php" method="POST" onSubmit="return form_verif();" >

	   				Nom :<br /><input id="nom" type="text" name="name" size="30"/><br/>
	        		Prenom :<br /><input id="prenom" type ="text" name="surname" size="30"/><br />

    	    		*Email :<br /><input id="email" type="text" name="email" size="40"/><br />
        			*Objet :<br /><input id="object" type="text" name="objet" size="60"/><br /><br />
        			<textarea id="text" name="content" cols="100%" rows="20"></textarea>
                    <div id="envoyer">
        				<input type="submit" value="Envoyer" id="send" name="send" />
        			</div>
	    		</form>      	
    		
        </div>

      </div>
      <div id="corps2"> <?php require_once 'inc/main_inc2.php' ?> </div>
      

 
<?php require_once 'inc/main_inc3.php' ?>