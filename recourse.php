<!DOCTYPE html>
<html lang="en">
<head>
  <title>Recourse Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!--validation-->
  <script>
      function validation()
      {
        var protittle = document.forms["file"]["protittle"].value;
        var probody = document.forms["file"]["probody"].value;
        var tag = document.forms["file"]["tag"].value;
        var desc = document.forms["file"]["desc"].value;
        var filse = document.forms["file"]["file"].value;

        if(protittle=="")
        {
            alert("Fill The File Tittle");
            return false;
        }
        if(probody=="")
        {
            alert("Fill The File Body Area");
            return false;
        }
        if(tag=="")
        {
            alert("Fill The Tag Section");
            return false;
        }
        if(desc=="")
        {
            alert("Fill The Description Section");
            return false;
        }
        if(filse=="")
        {
            alert("choose Your File");
            return false;
        }
      }
  </script>
</head>
<body>

<div class="container">
  <h2>Upload Your Project File</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">File Upload</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <form name="file" method="POST" action="recourse.php" onsubmit="return validation()">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">File Header</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>Project tittle</label>
                <input type="text" class="form-control" placeholder="Project Tittle" name="protittle">
              </div>
              <div class="form-group">
                  <label>Project Body</label>
                  <textarea name="editor1" class="form-control" placeholder="Project Body" name="probody"></textarea>
              </div>
              <div class="checkbox">
                <label><input type="checkbox">Published</label>
              </div>
              <div class="form-group">
                  <label>Meta tags</label>
                  <input type="text" class="form-control" placeholder="Add some tags.." name="tag">
                </div>
              <div class="form-group">
                  <label>Meta Description</label>
                  <input type="text" class="form-control" placeholder="Add Meta Description..." name="desc">
                </div>
              <div class="form-group">
                  <label>Your File</label>
                  <input type="file" class="form-control" placeholder="File" name="file">
                </div>
        </div>
        <div class="modal-footer">
          <input type="reset" class="btn btn-default" data-dismiss="modal" name="Close" value="Close">
          <input type="submit" class="btn btn-primary" data-dismiss="modal" name="Submit" value="Upload">
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

<?php

$tittle = $_REQUEST['protittle'];
$folder = $_REQUEST['file'];

echo"Project File name :$tittle <br>";
echo"Project File :$tittle <br>";

?>

</body>
</html>