<?php
// À copier dans le dossier /var/www/html de l'image httpd
echo <<<FDL
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<h1><center><span style="color: rgb(215, 112, 16);">420-4D4: DockerHub+GitHub</span></center></h1>
<h2><center><span style="color: rgb(34, 139, 60);">Exemple d'une image de conteneur</span></center></h2>
<h2><center><span style="color: rgb(34, 139, 60);">Reconstruite et publiée automatiquement</span></center></h2>
<h3><center><span style="color: rgb(165, 8, 8);">Je suis la version 1.0 de l'image</span></center></h2>
<hr/><br/><br/><br/>

<h1><center>Vous avez été servis par: <span style="color: rgb(165, 8, 8);">
FDL;
echo gethostname() . "</span></center></h1>";
?>

<br /><br /><br />
<hr>
<h6 style="text-align:right; padding-right:1em;">Document préparé par Nathan Ethier - 2021.04.26</h6>