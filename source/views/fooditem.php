<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title;
         ?> </title>
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
 .img-resize {
     width: 60%;
     height: 60%;
     /*margin-bottom: 10px;*/
 }
  </style>
</head>
<body>
 <div class="container-fluid text-center bg-yellow">
   <h1>STOCK MANAGEMENT</h1><br>
   <h2>to know stock availability</h2>
  <div class="row text-center slideanim slide">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="food1.jpg" class="img-responsive img-resize" alt="food1">
        <p><strong>
        <div class="btn-group btn-group-lg">
          <button type="button" class="btn btn-primary">VEGETARIAN</button>
        </div></strong></p>
        <p>momo,pizza,chowmin,burger...etc</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="food2.jpg" class="img-rounded" alt="food2" width="200" height="300" >
        <p><strong>
          <div class="btn-group btn-group-lg">
            <button type="" button" class="btn btn-primary">NON VEGETARIAN</button>
        </div></strong></p>
        <p>chicken,mutton,chicken chowmin...etc</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="food3.jpg" class="img-rounded" alt="food2" width="200" height="300" >
        <p><strong>
          <div class="btn-group btn-group-lg">
           <button type="button" class="btn btn-primary">BEVERAGES</button>
          </div></strong></p>
        <p>cold drink,ice cream,sHakes...etc</p>
      </div>
    </div>
</div>
</div>
</body>
</html>