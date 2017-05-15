<?php
$_SESSION['username']='admin';
  if($_SESSION['username']=='admin'){
?><!DOCTYPE html>
<html>
<body class="admin">

<form action="upload.php" method="post" enctype="multipart/form-data" class="formAdmin">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    <select name="categoryOption">
  <option value="kids">Деца</option>
  <option value="weddings">Сватби</option>
  <option value="nature">Природа</option>
  <option value="portraits">Портрети</option>
  </select>
  <select name="heightOption">
  <option value="height">Височина</option>
  <option value="width">Широчина</option>
</select>

</form>

<?php if(isset($_SESSION['username'])){
            if($_SESSION['username']=='admin'){
                ?>
                <form action="slide1.php" method="post" enctype="multipart/form-data">
    Select image to upload to slider:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    <select name="slideOption">
  <option value="slide1">Слайд 1</option>
  <option value="slide2">Слайд 2</option>
  <option value="slide3">Слайд 3</option>
  <option value="slide4">Слайд 4</option>
  </select>
                <?php
            }
        }?>
</body>
</html> <?php }?>



