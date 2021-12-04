<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        .stickyfooter{
            position: sticky;
            top: 100%;
            /*background-color: #333333;*/
        }


        .fcontainer {
            background-color: #7f8c8d;
            color: white;
            margin-top: 40px;
        }
        .fcontainer a {
            color: white;
        }
        .ftable {
            display: table;
            width: 100%;
        }
        .frow {
            display: table-row;
        }
        .fcol1 {
            display: table-column;
            margin: 10px 20px 10px 20px;
            width: 20%;
        }
        .fcol2 {
            display: table-column;
            margin: 10px 20px 10px 20px;
            width: 40%;
        }
        .fcol3 {
            display: table-column;
            margin: 10px 20px 10px 20px;
            width: 40%;
            
        }
        .flogo {
            padding: 0px 0px 0px 0px;
            display: table-cell;
            vertical-align: middle;
            width: fit-content;
            
        }
        .flinks {
            padding: 10px 20px 10px 20px;
            display: table-cell;
            vertical-align: middle;
        }
        .fcontact {
            padding: 10px 20px 10px 20px;
            display: table-cell;
            vertical-align: middle;
            list-style: none;
        }
        .fcontact a {
            text-decoration: none;
        }
    </style>
</head>
<body>
  <footer class="stickyfooter custom-border-top">
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-lg-3">
                  <div class="block-5 mb-5">
                      <h3 class="footer-heading mb-4">Contact Info</h3>
                      <ul class="list-unstyled">
                        <li class="address">203 Fake St. Mountain View, Colombo 03, Sri Lanka.</li>
                        <li class="phone"><a href="tel://94332837895">+94 33 283 7895</a></li>
                        <li class="email">SportsJam@gmail.com</li>
                  </ul>
                  </div>

              </div>
              <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
                  <div class="row">
                      <div class="col-md-12">
                          <h3 class="footer-heading mb-4">Quick Links</h3>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <ul class="list-unstyled">
                            <li style="margin-bottom: 2px;"><a href="about.html">About Us</a></li>
                            <li style="margin-bottom: 2px;"><a href="contact.php">Contact Us</a></li>
                          </ul>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <ul class="list-unstyled">
                            <li style="margin-bottom: 2px;"><a href="contact.php">Privacy & Policy</a></li>
                            <li style="margin-bottom: 2px;"><a href="contact.php">Terms & Conditions</a></li>
                          </ul>
                      </div>
                  </div>
              </div>

              <div class="col-md-6 col-lg-3">
                  <div class="block-5 mb-5">
                      
                  </div>

              </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
              <div class="col-md-12">
                <p>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Compilation Error.</a>
                </p>
              </div>

          </div>
      </div>      </footer>
  </body>
</html>