
<?php



$title="Home";
include "layouts/header.php";
include "App/Http/middlewares/Auth.php";
include "layouts/navbar.php";

?>
 
  <div>
    <form method="post" action="Result.php">
      <br>
      <h1 class="text-center mb-3 text-info" style="font-size:85px; ">H O S P I T A L</h1>
    
      <?php

    
    $Qarray=["Are you satisfied with the level of cleanliness",
    "Are you satisfied with the service prices",
    "Are you satisfied with the nursing service",
    "Are you satisfied with the level of the doctor",
    "Are you satisfied with the calmness in the hospital"
  ];
 $message='
<div class="mt-5">
<table class="table container table-striped">
<thead>
    <tr>
      <th scope="col">Questions</th>
      <th scope="col">bad</th>
      <th scope="col">good</th>
      <th scope="col">v.good</th>
      <th scope="col">excellent</th>
    </tr>
  </thead>
  <tbody>';

  for($i=0;$i<count($Qarray);$i++)
  {
    $message.="
    <tr >
      <th scope='row'>$Qarray[$i]?</th>
      <td><div class='form-check'><input name='q$i'; class='form-check-input' type='radio' id='flexRadioDefault1' value=0>
  <label class='form-check-label' for='flexRadioDefault1'></label></div></td>
      <td><div class='form-check'><input name='q$i' class='form-check-input' type='radio' id='flexRadioDefault1' value='3'>
  <label class='form-check-label' for='flexRadioDefault1'></label></div></td>
      <td><div class='form-check'><input name='q$i' class='form-check-input' type='radio' id='flexRadioDefault1' value='5'>
  <label class='form-check-label' for='flexRadioDefault1'></label></div></td>
      <td><div class='form-check'><input name='q$i' class='form-check-input' type='radio' id='flexRadioDefault1' value='10'>
  <label class='form-check-label' for='flexRadioDefault1'></label></div></td>
    </tr>";
  }
    $message.='
  </tbody>
</table>
<div class="container  d-flex justify-content-center  mt-4 ml-5">
<button type="submit" class="btn btn-info mb-5">Submit</button>

</div></div>';
echo $message;
?>
<!-- <script>window.location.href="Result.php"</script> -->
<?php
 
// $new_session=$_SESSION['phone'[0]];
// $_SESSION['new_session'[0]]=$new_session[0];
?>

    </form>
    <?php

//header('location:Result.php');
    ?>
  </div>
  <footer class="bg-light text-center mt-5 text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3 mb-0 bg-info " >
    © 2022 Copyright:
    <a class="text-dark" href="https://visitegypt.gov.eg/">visitegypt.gov.eg</a>
  </div>
  <!-- Copyright -->
</footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>
</html>