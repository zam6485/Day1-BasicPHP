<style type="text/css">
.bold {
		font-weight: bold;
	}

	td{ text-align: center; width: 200px;}
</style>

<?php
   $states = array("Selangor", "Johor", "kedah", "Melaka", "Perak", "Perlis", "Kelantan", "Terengganu", "Pulau Pinang", "Pahang", "Sabah", "Sarawak", "Kuala Lumpur", "Labuan", "Putrajaya");
   $ibunegeri = array("Shah Alam", "Johor Bahru", "Negeri Sembilan", "Melaka", "Perak", "Perlis", "Kelantan", "Terengganu", "Pulau Pinang", "Pahang", "Sabah", "Sarawak", "Kuala Lumpur", "Labuan", "Putrajaya");
   $shortname = array("SGR", "JHR", "kedah", "Melaka", "Perak", "Perlis", "Kelantan", "Terengganu", "Pulau Pinang", "Pahang", "Sabah", "Sarawak", "Kuala Lumpur", "Labuan", "Putrajaya");
   $num = 0;
   do{
       echo "<table border='1' cellspacing='0' cellpadding='0'>";

       if ($states[$num]=='Johor' && $ibunegeri[$num] =='Johor Bahru' && $shortname[$num]=='JHR'){
       echo "<tr><td class='bold'>". $states[$num]. "</b></td><td class='bold'>". $ibunegeri[$num]. "</td><td class='bold'>". $shortname[$num]. "</td></tr>";
       }
       else
       { echo "<tr><td width=100px>". $states[$num]. "</td><td width=100px>". $ibunegeri[$num]. "</td><td width=100px>". $shortname[$num]. "</td></tr>";}

       $num++;
   }while($num <= 13);
   		echo "</table>";
 ?>

 		