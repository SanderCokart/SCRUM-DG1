<center>
  <div class="nav">
    <ul>
      <?php
      $tabs = array("Home"=>"/Opdrachten/SCRUM Assignment 1/Homepage.php",
                    "Gaming"=>"/Opdrachten/SCRUM Assignment 1/Gaming.php",
                    "Technology"=>"/Opdrachten/SCRUM Assignment 1/Technology.php",
                    "Content Creation"=>"/Opdrachten/SCRUM Assignment 1/Content Creation.php",
                    "Cars"=>"/Opdrachten/SCRUM Assignment 1/Cars.php",
                    "Hobbies"=>"/Opdrachten/SCRUM Assignment 1/Hobbies.php");

      foreach ($tabs as $key => $value) {
        echo ("<li class=\"nav\"><a class=\"nav\" href=\"".$value."\">".$key."</a></li>");
      }

      ?>
      </ul>
  </div>
</center>
