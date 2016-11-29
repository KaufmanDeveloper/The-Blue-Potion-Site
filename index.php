<?php

require('connect.php');
$name = $_POST['name'];
$comment = $_POST['comment'];
$submit = $_POST['submit'];

if($submit){
  if($name && $comment){
    $insert = mysqli_query($con, "INSERT INTO comment (name, comment) VALUES
    ('$name', '$comment')");
  }
  else{
    echo "Please fill out all fields.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>The Blue Potion</title>
<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<body>
  <!-- Our divs can be within the main type, Container -->
  <!-- <div id = "Header"> This is the header. </div> -->
<div id = "Header">
  <img src = "images/logo.png" alt = "Logo">
  <ul>
    <!-- <li> <img src = "logo.png" alt = "Logo" class = "logo"> </li> -->
    <li> <a href = "#home"> Home </a> </li>
    <li> <a href = "http://www.thebluepotion.com/cms"> Wordpress </a> </li>
    <li> <a href = "#contact"> Contact </a> </li>
    <li> <a href = "#about"> About </a> </li>
  </ul>
</div>

  <div id = "Container">

  <div id = "Mainbody">
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.

Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.

Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.

Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut scelerisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. Nunc iaculis mi in ante. Vivamus imperdiet nibh feugiat est.

Ut convallis, sem sit amet interdum consectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed augue. Integer eu magna sit amet metus fermentum posuere. Morbi sit amet nulla sed dolor elementum imperdiet. Quisque fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque adipiscing eros ut libero. Ut condimentum mi vel tellus. Suspendisse laoreet. Fusce ut est sed dolor gravida convallis. Morbi vitae ante. Vivamus ultrices luctus nunc. Suspendisse et dolor. Etiam dignissim. Proin malesuada adipiscing lacus. Donec metus. Curabitur gravida.
  </div>

<!-- After our body text, let's have a comment box -->
  <form action = "index.php" method = "POST">
  <table>

  <tr> <td>Name: </td> <td><input type = "text" name = "name" /> </td> </tr>
  <tr> <td colspan = "2">Comment: </td> </tr>
  <tr> <td colspan = "2"><textarea name = "comment"> </textarea> </td> </tr>
  <tr> <td colspan = "2"><input type = "submit" name = "submit" value = "Comment"
    /> </td> </tr>

  </table>



  <div id = "Footer">
    <img src = "images/github.png" alt = "Github">
  </div>
  </div>
</body>

</html>