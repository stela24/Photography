<?php
$_SESSION['username']='admin';
  if($_SESSION['username']=='admin'){
?>
<!DOCTYPE html>
<html>
    <head>

        <link href="https://fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic" rel="stylesheet">
        <link rel="stylesheet" href="css/admin.css">

    </head>
    <body>
        <div id="admin-panel">
            <div class="title-container">
              <div class="title">
                  <h1>Админ панел Silvia Dimitrova</h1>
              </div>
            </div>
            <div class="container">
                <h1>Качване на снимка в Галерия</h1>
                <form action="upload.php" method="post" enctype="multipart/form-data" class="formAdmin">
                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
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
                    <input type="submit" value="Upload Image" name="submit"  id="submit">
                </form>
                <?php if(isset($_SESSION['username'])){
                            if($_SESSION['username']=='admin'){
                                ?>
                    <h1>Качване на снимка в Слайдер</h1>
                    <form action="slide1.php" method="post" enctype="multipart/form-data">
                    Select image to upload to slider:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <select name="slideOption">
                      <option value="slide1">Слайд 1</option>
                      <option value="slide2">Слайд 2</option>
                      <option value="slide3">Слайд 3</option>
                      <option value="slide4">Слайд 4</option>
                    </select>
                    <input type="submit" value="Upload Image" name="submit" id="submit">
                        <?php
                    }
                }?>
            </div>
        </div>
    </body>
    <?php }?>
</html>



