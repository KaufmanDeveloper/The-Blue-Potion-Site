<?php

require('connect.php');
$name = $_POST['name'];
$comment = $_POST['comment'];
$submit = $_POST['submit'];

if($submit){
  if($name && $comment){
    $insert = mysqli_query($con, "INSERT INTO comment (name, comment) VALUES
    ('$name', '$comment')");
    header( 'Location: index.php');
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
  <a href = "http://thebluepotion.com">
  <img src = "images/logo.png" alt = "Logo">
</a>
  <ul>
    <!-- <li> <img src = "logo.png" alt = "Logo" class = "logo"> </li> -->
    <li> <a href = "../wordpress"> Wordpress Site </a> </li>
  </ul>
</div>

  <div id = "Container">

  <div id = "Mainbody">
    <u> Education</u>: Bachelor degree in Computer Science at Maryville
    College. <br> <br>
    <u> Coursework</u>: Software Development, Computer Architecture,
    Database Management Systems, Computational Theory.

    <ul>
      <li> Experienced in HTML, CSS, and JavaScript web development languages. </li>
      <li> Proficient in MySQL query scripting. </li>
      <li> Proficient in PHP and web page/database interactions, an example of
        which being the comment box on this page. </li>
      <li> Experienced in developing using the MAMP server interface. </li>
      <li> Well versed in WordPress design practices. </li>
      <li> Communication, organizational and project management skills gained
        from larger Maryville College projects. </li>
      <li> Experienced in C++, Java, and iOS application framework programming. </li>
    </ul>

  </div>

<!-- After our body text, let's have a comment box -->
  <div id = "Commentbox">
  <form action = "index.php" method = "POST">
  <table>

  <tr> <td>Name: </td> <td><input type = "text" name = "name" /> </td> </tr>
  <tr> <td colspan = "2">Comment: </td> </tr>
  <tr> <td colspan = "2"><textarea name = "comment"> </textarea> </td> </tr>
  <tr> <td colspan = "2"><input type = "submit" name = "submit" value = "Comment"
    /> </td> </tr>

  </table>

</div>

  <?php
  $sqldata = "SELECT id, name, comment FROM comment";
  $result = $con->query($sqldata);

  echo '<div id = "Comment">';
  if($result->num_rows > 0){
    //We'll output the data of each row
    while($row = $result->fetch_assoc()) {
      echo "Name: " . $row["name"] . "<br>" . "Comment: " . $row["comment"] .
      "<br>" . "<br>";
    }
  }
  else {
    echo "0 results";
  }

  echo '</div>';

  $con->close();
   ?>


  <div id = "Footer">
    <a href = "https://github.com/MakMcFly">
    <img src = "images/github.png" alt = "Github"> </a>
    <a href = "https://www.linkedin.com/in/michael-kaufman-0911939a?trk=hp-identity-name">
    <img src = "images/linkedin.png" alt = "Linkedin"> </a>
  </div>
  </div>
</body>

</html>
