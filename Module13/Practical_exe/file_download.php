<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Download file</title>
</head>
<body>
  <h1>Download Your File</h1>
    <form action="#" method="post">
        <input type="submit" name="submit" value="Download file">
    </form>

  <?php  
 
    $file_url = 'G:\PHP_assignment\Module13\Practical_exe\index.php';  
    $f_n=basename($file_url);
    if(file_put_contents($f_n,file_get_contents($file_url))){
        echo "file downloaded successfully.";
        header('Content-Type: application/octet-stream');  
        header("Content-Transfer-Encoding: utf-8");   
        header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");   
        readfile($file_url);  

    }
    else{
        echo "sorry not found.";
    }

?> 

</body>
</html>