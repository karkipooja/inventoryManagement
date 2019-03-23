<!DOCTYPE html>
<html>

<head>
  <title>Menu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
  <link href="../../assets/css/bootstrap-glyphicons.css" rel="stylesheet">
  <script src="../../assets/js/jQuery.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <style>
    /* .thumbnail {
     padding: 0 0 15px 0;
     border: none;
     border-radius: 0;

   }
.thumbnail img {
     width: 60%;
     height: 60%;
     margin-bottom: 10px;
 }*/
    .img-thimbnail {
      background-color: red;
      /* justify-content: center; */
      padding: 20px;
    }

    .img-resize {
      max-width: 60%;
      max-height: 60%;
      margin-bottom: 20px;
      margin-left: 60px;
    }

    .btn-menu {
      margin-bottom: 10px;
    }

    .menu-div{
      margin-top:10%
    }
  </style>
</head>

<body>
  <!-- <div class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2>
  <h4>What we have created</h4>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="food1.jpg" alt="Paris">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="food2.jpg" alt="New York">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="food3.jpg" alt="San Francisco">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
</div> -->
  <div class="container text-center bg-yellow">
    <h1>STOCK MANAGEMENT</h1><br>
    <h2>to know stock availability</h2>
    <div class="row text-center slideanim slide menu-div">
      <div class="col-sm-4">
        <div class="thumbnail img-thimbnail">
          <img src="food1.jpg" class="img-responsive img-resize" alt="food1">
          <div class="btn-group btn-group-lg">
            <button type="button" class="btn btn-primary btn-menu">VEGETARIAN</button>
          </div>
          <p>momo,pizza,chowmin,burger...etc</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail img-thimbnail">
          <img src="food2.jpg" class="img-responsive img-resize" alt="food2">

          <div class="btn-group btn-group-lg">
            <button type="" button" class="btn btn-primary btn-menu">NON VEGETARIAN</button>
          </div>

          <p>chicken,mutton,chicken chowmin...etc</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail img-thimbnail">
          <img src="food3.jpg" class="img-responsive img-resize" alt="food2">
          <div class="center">
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-primary btn-menu">BEVERAGES</button>
            </div>
            <p>cold drink,ice cream,sHakes...etc</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>