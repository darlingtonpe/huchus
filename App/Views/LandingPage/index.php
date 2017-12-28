<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Get connected with freinds on huchus</title>

    <link rel="stylesheet" href="./public/css/bootstrap.css" />
    <link rel="stylesheet" href="./public/css/huchus.css" />
    <link rel="stylesheet" href="./public/css/ionicons.css" />


  <!-- <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lily+Script+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet"> -->

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
  </head>
  <body>


  <div id="lp-register">
    	<div class="container wrapper">
        <div class="row align-items-center">
        	<div class="col-sm-5">
            <h1 class="text-white">Huchus is the coolest place to make new friends.</h1>
            <p class="text-white">Huchus is a social network that can be used to connect people. <br>
              We offer a lot of interactivity, News Feed, Image/Video Feed, Chat Box, Timeline and lots more.</p>
          </div>

        	<div class="col-sm-6 offset-sm-1 move">
            <div class="reg-form-container">


              <div class="reg-options">
                <ul class="nav nav-tabs">
                  <li class="active"><a class="no-line" href="#register" data-toggle="tab">Register</a></li>
                  <li><a class="no-line" href="#login" data-toggle="tab">Login</a></li>
                </ul>
              </div>

              <div class="tab-content">
                <div class="tab-pane active" id="register">
                  <h3 class="our-txt-color">Register Now</h3>
                  <p class="text-muted">Get connected with friends on Huchus.</p>

                  <form name="registration_form" id="registration_form">
                    <div class="row">
                      <div class="form-group form-shift col-xs-6">
                        <label for="firstname" class="sr-only">First Name</label>
                        <input id="firstname" class="form-control input-group-lg" type="text" name="firstname" title="Enter first name" placeholder="First name"/>
                      </div>
                      <div class="form-group form-shift col-xs-6">
                        <label for="lastname" class="sr-only">Last Name</label>
                        <input id="lastname" class="form-control input-group-lg" type="text" name="lastname" title="Enter last name" placeholder="Last name"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12 form-shift">
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" class="form-control input-group-lg long-input" type="text" name="Email" title="Enter Email" placeholder="Your Email"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12 form-shift">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" class="form-control input-group-lg long-input" type="password" name="password" title="Enter password" placeholder="Password"/>
                      </div>
                    </div>
                    <div class="row">
                      <p class="birth"><strong>Date of Birth</strong></p>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select class="form-control" id="day">
                          <option value="Day" disabled selected>Day</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select class="form-control" id="month">
                          <option value="month" disabled selected>Month</option>

                        </select>
                      </div>
                      <div class="form-group col-sm-6 col-xs-12">
                        <label for="year" class="sr-only"></label>
                        <select class="form-control" id="year">
                          <option value="year" disabled selected>Year</option>

                        </select>
                      </div>
                    </div>
                    <div class="form-group gender">
                      <label class="radio-inline">
                        <input type="radio" name="optradio" class="for-radio" checked>Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="optradio" class="for-radio">Female
                      </label>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6 form-shift">
                        <label for="city" class="sr-only">City</label>
                        <input id="city" class="form-control input-group-lg reg_name" type="text" name="city" title="Enter city" placeholder="Your city"/>
                      </div>
                      <div class="form-group col-xs-6 form-shift">
                        <label for="country" class="sr-only"></label>
                        <select class="form-control" id="country">
                          <option value="country" disabled selected>Country</option>

                        </select>
                      </div>
                    </div>
                  </form>
                  <p><a class="our-txt-color" href="#">Already have an account?</a></p>
                  <button class="btn btn-primary our-bg-color">Register</button>
                </div>


                <div class="tab-pane" id="login">
                  <h3 class="our-txt-color">Login</h3>
                  <p class="text-muted">Log into your account</p>


                  <form name="Login_form" id='Login_form'>
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-email" class="sr-only">Email</label>
                        <input id="my-email" class="form-control input-group-lg" type="text" name="Email" title="Enter Email" placeholder="Your Email"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password" class="sr-only">Password</label>
                        <input id="my-password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password"/>
                      </div>
                    </div>
                  </form>
                  <p><a class="our-txt-color" href="#">Forgot Password?</a></p>
                  <button class="btn btn-primary our-bg-color">Login</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <script src="./public/js/jquery.min.js"></script>
  <script src="./public/js/bootstrap.js"></script>
</body>
</html>
