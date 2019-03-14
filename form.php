<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <!-- Modal content-->
      <div class="modal-content">
        <form name="file" method="POST">
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

      <?php

            $tittle = $_REQUEST['protittle'];
            $folder = $_REQUEST['file'];

            echo"Project File name :$tittle <br>";
            echo"Project File :$folder <br>";

        ?>

    </body>
</html>