<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="Stylesheet.css">
    <meta charset="utf-8">
    <title>New Topic Catagory</title>
  </head>
  <body>

    <div class="Header">
      <a href="Account.php"><img id="accounticon" src="https://www.materialui.co/materialIcons/action/account_circle_white_192x192.png" alt="Account">
    </div>

    <?php include("include/Menu.php");?>

<div class="newtopic">
  <h2 class="newtopic">inside which theme is the new topic located?</h2>
  <label for="theme">Put A New Subject Inside Theme</label>
  <select class="newtopic" name="">
    <option value="">Cars</option>
    <option value="">Technology</option>
    <option value="">Gaming</option>
    <option value="">Content Creation</option>
    <option value="">Hobbies</option>
  </select>
  <label for="topiccat">New Topic Catagory Name is</label>
  <input class="newtopic" type="text" name="topiccat" id="topiccat" value=""><br >
  <center><input class="submit" type="submit" name="submit" id="submit" value="Submit"></center>
</div>

  </body>
</html>
