<?php

/* include autoloader */

require_once 'dompdf/autoload.inc.php';

/* reference the Dompdf namespace */

use Dompdf\Dompdf;

/* instantiate and use the dompdf class */

$dompdf = new Dompdf();

$html = '  <div class="grid-container">

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
</script>';

$dompdf->loadHtml($html);

/* Render the HTML as PDF */

$dompdf->render();

/* Output the generated PDF to Browser */

$dompdf->stream();

?>