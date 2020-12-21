<html>
<head>
<title>Ma page de traitement</title>
<style>
.imag{
   float:left;
   margin-right: 20px;
   margin-left: 10px;
   width: 150px;
   height: 150px;
}
</style>
</head>
<body>

<span>
<?php
if (isset($_POST['nom']) && isset($_POST['prenom'])) {
	echo '<h1>'.$_POST['nom']' '.$_POST['prenom'].'</h1>';
}
?> </span><span>
  <?php
     if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['photo']['name'];
        $file_size =$_FILES['photo']['size'];
        $file_tmp =$_FILES['photo']['tmp_name'];
        $file_type=$_FILES['photo']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

        $extensions= array("jpeg","jpg","png");

        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }

        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }

        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"photo/".$file_name);
           echo "Success";
        }
     }
  ?>



</span>
<div>
 &nbsp; &nbsp; &nbsp; <h2>Détails</h2><br>
 <hr size="2" width="80%" color="black" align=center><br>
<ul>
  <li><?php if (isset($_POST['ville']){
  echo "string"; $_POST['ville']; }?></li>

  <li><?php if (isset($_POST['adress']){
  echo $_POST['adress']; }?></li>

  <li><?php if (isset($_POST['tele']){
  echo $_POST['tele']; } ?></li>

  <li><?php if (isset($_POST['email']){
   echo $_POST['email']; } ?></li>

  <li><?php if (isset($_POST['naissance']){
   echo $_POST['naissance']; } ?></li>

  <li><?php if (isset($_POST['lien']){
  echo $_POST['lien'];  }?></li>

</ul>
</div>

<br><br><br>
<div>
 &nbsp; &nbsp; &nbsp; <h2>Contenu Professionnel</h2><br>
 <hr size="2" width="80%" color="black" align=center><br>

<h4>Synthèse Professionnelle</h4>
<?php if (isset($_POST['profil']){
 echo $_POST['profil']; } ?> <br><br>

<h4>Parcours Éducatif</h4><br>
<?php if (isset($_POST['formation']){
echo $_POST['formation']; }?> <br><br>

<h4>Expériences Professionnelles</h4><br>
<?php if (isset($_POST['experience']){
echo $_POST['experience']; } ?> <br><br>

<h4>Compétences </h4><br>
<?php if (isset($_POST['Compétences ']){
echo $_POST['Compétences ']; }?> <br><br>

<h4>Certificats</h4><br>
<?php if (isset($_POST['certificats']){
echo $_POST['certificats']; }?> <br><br>

<h4>Centre d'intérêt</h4><br>
<?php if (isset($_POST['intérêt']){
echo $_POST['intérêt']; }?> <br><br>

<h4>Expériences de bénévolat</h4><br>
<?php if (isset($_POST['experience1']){
echo $_POST['experience1']; }?> <br><br>

</div>
</body>
</html>
