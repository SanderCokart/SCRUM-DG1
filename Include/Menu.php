<center>
  <div class="nav">
    <ul class="nav">
      <?php
      $tabs = array("Home"=>"Homepage.php",
                    "Gaming"=>"Gaming.php",
                    "Technology"=>"Technology.php",
                    "Content Creation"=>"Content Creation.php",
                    "Cars"=>"Cars.php",
                    "Hobbies"=>"Hobbies.php");

      foreach ($tabs as $key => $value) {
        echo ("<li class=\"nav\"><a class=\"nav\" href=\"".$value."\">".$key."</a></li>");
      }

      ?>
      </ul>
  </div>
</center>
