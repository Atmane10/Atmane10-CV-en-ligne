<?php
  require 'vendor/autoload.php';
  use Dompdf\Dompdf;
  use Dompdf\Options;
/*
// include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
*/
  define('Token','HGsZOXpfNC');
  $skills = [];
  $skill_levels = [];
  $hobbies = [];
  $institutes = [];
  $degrees = [];
  $froms = [];
  $tos = [];
  $grades = [];
  $titles = [];
  $descriptions = [];
  if(Token == $_POST['token'])
  {
    $temp_profile = $_FILES['photo']['tmp_name'];
    $profile = $_FILES['photo']['name'];
    move_uploaded_file($temp_profile,'images/'.$profile);
    $first_name = $_POST['nom'];
    $last_name = $_POST['prenom'];
    $profession = $_POST['profession'];
    $email = $_POST['email'];
    $phone = $_POST['numeroTelephone'];
    $about_me = $_POST['apropos'];
    array_push($skills,$_POST['competence1']);
    array_push($skill_levels,intval($_POST['competence_niveau1']));
    array_push($hobbies,$_POST['loisir1']);
    array_push($institutes,$_POST['ecole1']);
    array_push($degrees,$_POST['education_niveau1']);
    array_push($froms,$_POST['dateDebut1']);
    array_push($tos,$_POST['dateFin1']);
    array_push($grades,$_POST['resultat1']);
    array_push($titles,$_POST['titre1']);
    array_push($descriptions,$_POST['description1']);

    //**************************les competences*****************************************/

    // cas competence 2
    if(isset($_POST['competence2']) && !empty($_POST['competence2']))
    {
      if(isset($_POST['competence_niveau2']) && !empty($_POST['competence_niveau2']))
      {
        array_push($skills,$_POST['competence2']);
        array_push($skill_levels,intval($_POST['competence_niveau2']));
      }
    }

     // cas competence 3
    if(isset($_POST['competence3']) && !empty($_POST['competence3']))
    {
      if(isset($_POST['competence_niveau3']) && !empty($_POST['competence_niveau3']))
      {
        array_push($skills,$_POST['competence3']);
        array_push($skill_levels,intval($_POST['competence_niveau3']));
      }
    }

     // cas competence 4
    if(isset($_POST['competence4']) && !empty($_POST['competence4']))
    {
      if(isset($_POST['competence_niveau4']) && !empty($_POST['competence_niveau4']))
      {
        array_push($skills,$_POST['competence4']);
        array_push($skill_levels,intval($_POST['competence_niveau4']));
      }
    }

     // cas competence 5
    if(isset($_POST['competence5']) && !empty($_POST['competence5']))
    {
      if(isset($_POST['competence_niveau5']) && !empty($_POST['competence_niveau5']))
      {
        array_push($skills,$_POST['competence5']);
        array_push($skill_levels,intval($_POST['competence_niveau5']));
      }
    }

    //**************************les loisirs*****************************************/

     // cas loisir 2
    if(isset($_POST['loisir2']) && !empty($_POST['loisir2']))
    {
      array_push($hobbies,$_POST['loisir2']);
    }

     // cas loisir 3
    if(isset($_POST['loisir3']) && !empty($_POST['loisir3']))
    {
      array_push($hobbies,$_POST['loisir3']);
    }

     // cas loisir 4
    if(isset($_POST['loisir4']) && !empty($_POST['loisir4']))
    {
      array_push($hobbies,$_POST['loisir4']);
    }

     // cas loisir 5
    if(isset($_POST['loisir5']) && !empty($_POST['loisir5']))
    {
      array_push($hobbies,$_POST['loisir5']);
    }

   //**************************les formations*****************************************/

    //  cas école 2
    if(isset($_POST['ecole2']) && !empty($_POST['ecole2']))
    {
      if(isset($_POST['education_niveau2']) && !empty($_POST['education_niveau2']))
      {
        if(isset($_POST['dateDebut2']) && !empty($_POST['dateDebut2']))
        {
          if(isset($_POST['dateFin2']) && !empty($_POST['dateFin2']))
          {
            if(isset($_POST['resultat2']) && !empty($_POST['resultat2']))
            {
              array_push($institutes,$_POST['ecole2']);
              array_push($degrees,$_POST['education_niveau2']);
              array_push($froms,$_POST['dateDebut2']);
              array_push($tos,$_POST['dateFin2']);
              array_push($grades,$_POST['resultat2']);
            }
          }
        } 
      }
    }

    //  cas école 3
    if(isset($_POST['ecole3']) && !empty($_POST['ecole3']))
    {
      if(isset($_POST['education_niveau3']) && !empty($_POST['education_niveau3']))
      {
        if(isset($_POST['dateDebut3']) && !empty($_POST['dateDebut3']))
        {
          if(isset($_POST['dateFin3']) && !empty($_POST['dateFin3']))
          {
            if(isset($_POST['resultat3']) && !empty($_POST['resultat3']))
            {
              array_push($institutes,$_POST['ecole3']);
              array_push($degrees,$_POST['education_niveau3']);
              array_push($froms,$_POST['dateDebut3']);
              array_push($tos,$_POST['dateFin3']);
              array_push($grades,$_POST['resultat3']);
            }
          }
        } 
      }
    }

    //  cas école 4
    if(isset($_POST['ecole4']) && !empty($_POST['ecole4']))
    {
      if(isset($_POST['education_niveau4']) && !empty($_POST['education_niveau4']))
      {
        if(isset($_POST['dateDebut4']) && !empty($_POST['dateDebut4']))
        {
          if(isset($_POST['dateFin4']) && !empty($_POST['dateFin4']))
          {
            if(isset($_POST['resultat4']) && !empty($_POST['resultat4']))
            {
              array_push($institutes,$_POST['ecole4']);
              array_push($degrees,$_POST['education_niveau4']);
              array_push($froms,$_POST['dateDebut4']);
              array_push($tos,$_POST['dateFin4']);
              array_push($grades,$_POST['resultat4']);
            }
          }
        } 
      }
    }

    //  cas école 5
    if(isset($_POST['ecole5']) && !empty($_POST['ecole5']))
    {
      if(isset($_POST['education_niveau5']) && !empty($_POST['education_niveau5']))
      {
        if(isset($_POST['dateDebut5']) && !empty($_POST['dateDebut5']))
        {
          if(isset($_POST['dateFin5']) && !empty($_POST['dateFin5']))
          {
            if(isset($_POST['resultat5']) && !empty($_POST['resultat5']))
            {
              array_push($institutes,$_POST['ecole5']);
              array_push($degrees,$_POST['education_niveau5']);
              array_push($froms,$_POST['dateDebut5']);
              array_push($tos,$_POST['dateFin5']);
              array_push($grades,$_POST['resultat5']);
            }
          }
        } 
      }
    }

   //**************************les expériences*****************************************/

    //cas experience 2
    if(isset($_POST['titre2']) && !empty($_POST['titre2']))
    {
      if(isset($_POST['description2']) && !empty($_POST['description2']))
      {
        array_push($titles,$_POST['titre2']);
        array_push($descriptions,$_POST['description2']);
      }
    }
    
    //cas experience 3
    if(isset($_POST['titre3']) && !empty($_POST['titre3']))
    {
      if(isset($_POST['description3']) && !empty($_POST['description3']))
      {
        array_push($titles,$_POST['titre3']);
        array_push($descriptions,$_POST['description3']);
      }
    }
  }
      
    //cas experience 4
    if(isset($_POST['titre4']) && !empty($_POST['titre4']))
    {
      if(isset($_POST['description4']) && !empty($_POST['description4']))
      {
        array_push($titles,$_POST['titre4']);
        array_push($descriptions,$_POST['description4']);
      }
    }
      
    //cas experience 5
    if(isset($_POST['titre5']) && !empty($_POST['titre5']))
    {
      if(isset($_POST['description5']) && !empty($_POST['description5']))
      {
        array_push($titles,$_POST['titre5']);
        array_push($descriptions,$_POST['description5']);
      }
    }

  else
  {
    header('location/projet-Génerateur de CV/submit.php');
  }
 

  // fonction dompdf




function php_func(){

  require 'vendor/autoload.php';

  $options = new Options();

  $options->set('enable_html5_parser', true);

  $options->set('chroot', 'path-to-test-html-files');

  $dompdf = new Dompdf();

  //$dompdf->loadHtml($html);
  $dompdf->loadHtml($html);
    
    // (Optional) Setup the paper size and orientation
  //$dompdf->setPaper('A4', 'landscape');
  $dompdf->setPaper("a4", "portrait");
    
    // Render the HTML as PDF
    /*$dompdf->setOptions('enable_remote', TRUE);*/
    /*$dompdf->loadHtmlFile('URL_OF_HTML_FILE');*/
  $dompdf->render();
  ob_end_clean();
    // Output the generated PDF to Browser
  $dompdf->stream();
}
if (isset($_GET['cvFinal'])) {
  php_func();
}
?>

<!-- Fichier HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  
  <title><?php echo ucwords($first_name). ' CV'; ?></title>
</head>
<body>

<!-- navbar -->
<div class="topnav" id="myTopnav">
  <a class="active">Votre CV est prêt !</a>
  <a onclick="javascript:history.back();" >Modifier votre CV</a>
  <a href='submit.php?cvFinal=true'>télécharger en PDF</a>
  <a href="Logout.php">Déconnexion</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<!-- fin navbar -->

  <div class="grid-container">

    <!-- La zone 1 -->
    <div class="zone-1">
      <div class="toCenter">
        <img src="images/<?php echo $profile;?>" class="profile">
      </div>
      <div class="contact-box">
        <div class="title">
          <h2>Contacts</h2>
        </div>
        <div class="call"><i class="fas fa-phone-alt"></i>
          <div class="text"><?php echo $phone;?></div>
        </div>
        <div class="email"><i class="fas fa-envelope"></i>
          <div class="text"><?php echo $email;?></div>
        </div>
      </div>
      <div class="personal-box">
        <div class="title">
          <h2>Compétences</h2>
        </div>
        <?php 
        for($j=0; $j<count($skills); $j++){
            echo "<div class='skill-1'>
                    <p><strong>" . strtoupper($skills[$j]) . "</strong></p>
                    <div class='progress'>";
              for($i=0;$i<$skill_levels[$j];$i++){
                echo '<div class="fas fa-star active"></div>';             
              }
              echo '</div></div>';
            }
        ?>
      </div>
      <div class="hobbies-box">
        <div class="titre">
          <h2>Loisirs</h2>
        </div>
        <?php 
          foreach($hobbies as $loisir)
          {
            echo "<div class='d-flex align-items-center'>
            <div class='circle'></div>
            <div><strong>" . ucwords($loisir) . "</strong></div>
          </div>";
          }
          
          
        ?>
      </div>
    </div>

    <!-- La zone 2 -->
    <div class="zone-2">
      <div class="headTitle">
        <h1><?php echo ucwords($first_name.'  ');?><?php echo ucwords($last_name);?><br></h1>
      </div>
      <div class="subTitle">
        <h1><?php echo ucwords($profession);?><h1>
      </div>
      <div class="group-1">
        <div class="title">
          <div class="box">
            <h2>---Description</h2>
          </div>
        </div>
        <div class="desc"><?php echo $about_me;?></div>
      </div>
      <div class="group-2">
        <div class="title">
          <div class="box">
            <h2>---Education</h2>
          </div>
        </div>
        <div class="desc">
          <?php 
            for($i=0; $i<count($institutes);$i++)
            {
              echo "<ul>
              <li>
                <div class='msg-1'>" . $froms[$i] . "-" . $tos[$i]. " | " . ucwords($degrees[$i]) . ", " . $grades[$i]. "</div>
                <div class='msg-2'>" . ucwords($institutes[$i]) . "</div>
              </li>
            </ul>";
            }
          ?>
        </div>
      </div>
      <div class="group-3">
        <div class="title">
          <div class="box">
            <h2>---Experiences</h2>
          </div>
        </div>
        <div class="desc">
        <?php 
            for($i=0; $i<count($titles);$i++)
            {
              echo "<ul>
              <li>
                <div class='msg-1'><br></div>
                <div class='msg-2'>" . ucwords($titles[$i]) ."</div>
                <div class='msg-3'>" . ucfirst($descriptions[$i]) . "</div>
              </li>
              </ul>";
            }
          ?>
        </div>
      </div>
      </div> 
    </div>
<div>
</div>
<script>
function writeMsg(){
    $.ajax({url:"test.php", success:function(result){
    $("div").text(result);
   /* console.log("ok qkjdsfbkjsbdfs");*/

  }
})
} 
</script>
</body>
</html>
<?php



