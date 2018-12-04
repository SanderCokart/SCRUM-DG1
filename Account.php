<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="Stylesheet.css">
    <meta charset="utf-8">
    <title>Account</title>
  </head>
  <body>

    <div class="Header">
      <a href="Account.php"><img id="accounticon" src="https://www.materialui.co/materialIcons/action/account_circle_white_192x192.png" alt="Account">
      <a href="Homepage.php"><img class="back" src="https://lh3.ggpht.com/sqPcTNRtM6vc4pzWXWXIR6KxnRwbIz4LIYKvqwr1l__gPYkx24sV4Ak1oc2sN99dVA=s180" width="100px" alt="">
    </div>

    <?php include("include/Menu.php");?>

<div class="accountbox">
  <label for="name">Name</label>
  <input class="account" type="text" name="name" id="name" value="">
  <label for="password">Password</label>
  <input class="account" type="password" name="password" id="password" value=""><br >
  <label for="email">E-Mail</label>
  <input class="account" type="text" name="email" id="email" value="">
  <label for="date">Date Of Birth</label>
  <input class="account" type="text" name="date" id="date" value=""><br>
  <center><input class="submit" type="submit" name="submit" id="submit" value="Submit"></center>
</div>

  </body>
</html>
