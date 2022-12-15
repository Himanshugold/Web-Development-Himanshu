<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Travel Website</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,500&display=swap" rel="stylesheet">
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <a class="navbar-brand" href="#">Travel Website</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="service.php">Services</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
               </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
         </div>
      </nav>
      <div id="demo" class="carousel slide" data-ride="carousel">
         <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
         </ul>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="images/newyork.jpg" alt="New York" width="1100" height="500">
               <div class="carousel-caption">
                  <h3>New York</h3>
                  <p>We had such a great time in NY!</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="images/bangkok.jpg" alt="Bangkok" width="1100" height="500">
               <div class="carousel-caption">
                  <h3>Bangkok</h3>
                  <p>Thank you, Bangkok!</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="images/dubai.jpg" alt="Dubai" width="1100" height="500">
               <div class="carousel-caption">
                  <h3>Dubai</h3>
                  <p>We love the Dubai</p>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#demo" data-slide="prev">
         <span class="carousel-control-prev-icon"></span>
         </a>
         <a class="carousel-control-next" href="#demo" data-slide="next">
         <span class="carousel-control-next-icon"></span>
         </a>
      </div>
      <section class="my-5">
         <div class="py-5">
            <h3 class="text-center">About us</h3>
         </div>
         <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
               <img src="images/travel.jpg" class="img-fluid aboutimg" >
            </div>
            <div class="col-lg-6 col-md-6 col-12">
               <h1 class="display-4">We are Best Holiday Provoider</h1>
               <p class="py-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. </p>
               <a href="about.php" class="btn btn-success">know more about us</a>
            </div>
         </div>
      </section>

      <section class="my-5">
         <div class="py-5">
            <h2 class="text-center">Our Services</h2>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-12">
                  <div class="card" style="width:400px">
                     <img class="card-img-top" src="images/friends.jpg" alt="Card image">
                     <div class="card-body">
                        <h4 class="card-title">Family Trip</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#  " class="btn btn-primary">See Profile</a>
                     </div>
                  </div>
               </div>
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="card" style="width:400px">
                     <img class="card-img-top" src="images/honeymoon.jpg" alt="Card image">
                     <div class="card-body">
                        <h4 class="card-title">Honeymoon Trip</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#  " class="btn btn-primary">See Profile</a>
                     </div>
                  </div>
               </div>
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="card" style="width:400px">
                     <img class="card-img-top" src="images/Friends.jpg" alt="Card image">
                     <div class="card-body">
                        <h4 class="card-title">Friends Trip</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#  " class="btn btn-primary">See Profile</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="my-5">

         <div class="py-5 ">
            <h2 class="text-center">Our Gallery</h2>
         </div>
         <div class="container-fluid">
           <div class="row">
             <div class="col-lg-4 col-md-4 col-12">
               <img src="images/china.jpg" class="img-fluid pb-4">
             </div>
             <div class="col-lg-4 col-md-4 col-12">
               <img src="images/pisa.jpg" class="img-fluid pb-4 ">
             </div>
             <div class="col-lg-4 col-md-4 col-12">
               <img src="images/london.jpg" class="img-fluid pb-4">
             </div>
             <div class="col-lg-4 col-md-4 col-12">
               <img src="images/rio.jpg" class="img-fluid pb-4">
             </div>
             <div class="col-lg-4 col-md-4 col-12">
               <img src="images/china.jpg" class="img-fluid pb-4">
             </div>
             <div class="col-lg-4 col-md-4 col-12">
               <img src="images/pisa.jpg" class="img-fluid pb-4">
             </div>
             <div class="col-lg-4 col-md-4 col-12">
               <img src="images/rio.jpg" class="img-fluid pb-4">
             </div>
             <div class="col-lg-4 col-md-4 col-12">
               <img src="images/china.jpg" class="img-fluid pb-4">
             </div>
             <div class="col-lg-4 col-md-4 col-12">
               <img src="images/pisa.jpg" class="img-fluid pb-4">
             </div>
           </div>
         </div>
      </section>

      <section class="my-5">
         <div class="py-5">
            <h2 class="text-center">Our Services</h2>
         </div>

         <div class="w-50 m-auto">
           <form action="userinfo.php" method="post" >
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="user"autocomplete="off"class="form-control" >
              </div>
              <div class="form-group">
                <label>Email id</label>
                <input type="text" name="email"autocomplete="off"class="form-control" >
              </div>
              <div class="form-group">
                <label>Mobile No</label>
                <input type="text" name="mobile"autocomplete="off"class="form-control" >
              </div>
              <div class="form-group">
                <label>comments</label>
                <textarea class="form-control" name="comment">
                </textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
           </form>
         </div>
      </section>

      <footer>
        <p class="p-3 bg-dark text-white text-center">@HimanshuTechnical</p>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>