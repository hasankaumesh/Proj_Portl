<html>
    <head>
        <title></title>
    </head>
    <body>
        <button><a href="form.php">Upload</a></button>
        <br><br>
        <?php

        $tittle = $_REQUEST['protittle'];
        $folder = $_REQUEST['file'];

        echo"Project File name :$tittle <br>";
        echo"Project File :$folder <br>";
      

        ?>

    </body>
</html>