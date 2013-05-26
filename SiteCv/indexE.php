<?php require_once 'inc/main_inc1.php' ?>

<meta name="description" content="Curriculum vitae de Sidoine"/>   

<meta name="keywords" content="accueil, CV" />

<title>Personal Website of Sidoine Tardieu</title>

<link type="text/css" href="jquery/css/jquery-ui-1.8rc2.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="jquery/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/js/jquery-ui-1.8rc2.custom.min.js"></script>

<script type="text/javascript">
			$(function(){
	
				// Tabs
				$('#content').tabs();
				$('#cadre').tabs();
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

		<h1>Curriculum vitae de<br/>Sidoine TARDIEU </h1>



	</div>



	<div id="menu">
    
    		<div id="langue">

			  	  <a  href="indexE.php"><img src="EN.png" alt="flagEnglish" title="flagEnglish"/></a>

				  <a  href="index.php"><img src="GF.png" alt="flagFrancais" title="flagFrancais"/></a> 
             </div>



		<ul>
				<li><a href="#corps">My CV</a></li>
				<li><a href="#corps2">Documents</a></li>
				<li><a href="#corps3">Contact me</a></li>
		</ul>

	</div>



	<div id="corps">

	  <h1> Sidoine's Curriculum vitae</h1> 

		   <p id="cadre">
     	<br  />
       <img id="idenphoto"src="Photo1.JPG" alt="Photo d'identité de Sidoine" title="Photo d'identité de Sidoine"/>
			<br  />
            
			Sidoine Tardieu <br/> 

			-54 rue Victor Hugo <br/>

			38200 - Vienne <br/>

			-50 rue de la Claire <br/>

			69009 - Vaise <br/>

			Phone : 06 07 27 10 14 <br/>

			Mail: tardieu.sidoine@gmail.com <br/>

			15 août 1989  
            <br  />
            <br  />
         </p>
		

    	<h3>Languages </h3> 

		<ul>

			<li>English: Technique </li>

		</ul>



		<h3>Training and certification</h3>

		<ul>
        	<li><strong>Back to school 2008</strong> : Higher  school computer <strong>Supinfo</strong> second year.</li>
            
        	<li><strong>Back to school 2008</strong> : Higher  school computer <strong>Supinfo</strong> first year.</li>

			<li><strong>2008</strong> :  Integration of laboratory <strong>Supinfo</strong>-Linux.</li>

			<li><strong>Back to school 2008</strong> : Higher  school computer <strong>Supinfo.</strong></li>

			<li><strong>2008</strong>: Driving license B</li>

			<li><strong>2008</strong> : Get the Baccalauréat Scientific-Engineering Science(distinction) .</li>

			<li><strong>2004</strong> : Obtaining Patent Colleges.</li>

		</ul>

	

    	<h3>Professional experiences</h3>

		<dl>

			<dt><strong>2008</strong> : Construction worker in the company of his SMBR .</dt>

				<dd>restorations of historic buildings, the roof of the cloister of the Frejus's cathedral.</dd>

			<dt><strong>2008</strong> :  Seasonal Agricultural.</dt>

				<dd>CCD in a farm during the vintager season. </dd>

			<dt><strong>2006</strong> : A public service of the Vienne's municipality of Vienne.</dt>

				<dd>Enployer in public in the city of Vienne for the renovation of a hall building.</dd>

			<dt><strong>2004</strong> : Stage 3rd to the Ministry of Culture.</dt>

				<dd> service system and network. Stage with professional computer for observation,maintenance of computer operation to update the operating system (from Windows XP). </dd>

		</dl>

	

		<h3>Skills</h3>

		<ul>

			<li>Software: Word / Excel / Office / solidworks / dev c + + / Dreamweaver CS4 / Visual Studio 2008.</li>

			<li>Knowledge in C/C++/C#, Python, UML, PHP, XML, HTML, CSS et Java script.</li>

			<li>Working Environment: Windows (Seven, Vista, XP, serveur 2008); linux; MAC OS X .</li>

			<li>Database : Oracle 10g SQL  PL/SQL .</li>

			<li>Networks : Cisco CCNA .</li>

		</ul>

	

		<h3>Points of interest</h3>

		<ul>

			<li>Sports: Equestrian (in club), mountain biking, rock climbing (on room) </li>

			<li>passion for music and cinema and science (astronomy, physics, ...) </li>

			<li>Travel: Spain, England, Switzerland, Quebec, Italy, Germany 

(Travel and cultural tourism).</li>

			<li>Citizen: Donor blood and organs</li>

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