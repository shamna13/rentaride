<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>
<body class="background">
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booking.php">Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About us</a>
          </li>
        </ul>
      </nav>
    <center><p class="textstyle">Rent A Ride</p></center>
    <div class="container">
        <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <table class="table">
                    <center><p>Bookings</p></center>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" class="form-control"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                        <td>Contact Number</td>
                        <td><input type="text" class="form-control"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Email id</td>
                        <td><input type="text" class="form-control"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Travel Date</td>
                        <td>From:</td>
                        <td><input type="text" class="form-control"></td>
                        <td>To:</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td>Pickup</td>
                        <td><input type="text" class="form-control"></td>
                        <td>Dropdown</td>
                        <td><input type="text" class="form-control"></td>
                        
                    </tr>
                    <tr>
                        <td><button class="btn btn-warning">SelectCar</button></td>
                        <td><button class="btn btn-success">Submit</button></td>
                    </tr>
                </table>
                </div>
                <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
            </div>
        </div>
</body>
</html>