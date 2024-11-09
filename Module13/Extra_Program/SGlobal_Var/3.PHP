<!-- $_FILES: Create a form that allows users to upload a file. Handle the uploaded file
 using the $_FILES super global and display information about the file. -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="file.php" method="POST" enctype="multipart/form-data">
     <label for="file"> filename</label>
     <input type="file" name="file" id="file">
     <input type="submit" name="submit" value="Submit">
    </form>

 </body>
 </html>
 <?php
    if($_FILES['files']>0){
        echo "you have selected a file to upload";
    }
 ?>