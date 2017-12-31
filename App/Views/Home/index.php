<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-type" content="text/html;charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Huchus |Home</title>

    <!-- css -->
    <link rel="stylesheet" href="./public/css/hc.css" />
    <link rel="stylesheet" href="./public/css/bootstrap-grid.css" />
    <link rel="stylesheet" href="./public/css/ionicons.css" />
    <link rel="stylesheet" href="./public/css/home.css" />
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <script src="./public/js/app.js"></script>



<!--check the icon, it\s not supposed to be there  -->

    </head>
  <body>
        <!-- nav holder starts here -->
          <div class="nav-holder">
            <div class="container-fluid">
              <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="ion-ios-home-outline hc-icon-size"></i> Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="ion-paper-airplane hc-icon-size"></i> Messages</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="ion-android-notifications-none hc-icon-size"></i> Notification</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link"data-toggle="modal" data-target="#createStory"><i class="ion-edit hc-icon-size"></i> Create Story</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link"data-toggle="tooltip" data-html="true" title="Join a circle"><i class="ion-ios-people-outline hc-icon-size"></i></a>
                    </li>

                  </ul>




                      <div class="push-right">
                        <ul class="nav navbar-nav float-sm-right">
                          <li>
                              <input type="text" class="form-control hc-search hc-large"
                               placeholder="Search...">
                          </li>

                      </div>

                  </ul>

                </div>
              </nav>
            </div>
          </div>
        <!-- nav holder ends here -->
          <!--scripts-->
          <!-- Modal -->
<div class="modal fade" id="createStory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!--modal title starts here-->
        <div class="modal-title" id="exampleModalLabel">

          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="form-group">
              <label for="exampleFormControlSelect1">Category</label>
              <select class="form-control add-cursor" id="exampleFormControlSelect1">
                <option select>Category</option>
                <option>Inspirational</option>
                <option>News</option>
                <option>Poems</option>
                <option>Romance</option>
                <option>Gospel</option>
              </select>
            </div>
          </nav>
        </div>
        <!--modal title ends here -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="add-cursor">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      
                  <div class="form-group">
                    <textarea class="form-control text-area editor" id="editor" rows="3"></textarea>
                  </div>
      
                  <div class="form-group down-pad">
                    <div class="row">
                      <div class="col-sm-2">
                          <i class="ion-android-image hc-icon-size icons-style add-cursor"></i>
                      </div>
                      <div class="col-sm-2">
                          <i class="ion-pricetag hc-icon-size icons-style move-back add-cursor"></i>
                      </div>
                      <div class="offset-sm-3 col-md-2">
                        <button type="button" class="btn btn-danger add-cursor" data-dismiss="modal">Close</button>
                      </div>
                      <div class="col-sm-2">
                        <button type="button" class="btn btn-primary add-story add-cursor">Add Story</button>
                      </div>
                    </div>
                  </div>
      
            </div>
    </div>
  </div>
</div>




          <!--scripts-->
          <script src="./public/js/jquery.min.js"></script>
          <script src="./public/js/bootstrap.js"></script>
          <script src="./public/js/popper.min.js"></script>


  </body>
</html>
