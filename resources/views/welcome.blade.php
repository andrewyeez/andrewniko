<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Andrew Niko Yee</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300" rel="stylesheet" type="text/css">
        <style>
            body{
                background: -webkit-repeating-linear-gradient(
                    rgba(35, 135, 95, 0.8), 
                    rgba(10, 95, 160, 0.8)),
                    url('/public/img/winter-s.jpg') no-repeat center center fixed;
                
                background: -o-repeating-linear-gradient(
                    rgba(35, 135, 95, 0.8), 
                    rgba(10, 95, 160, 0.8)),
                    url('/public/img/winter-s.jpg') no-repeat center center fixed;
                
                background: -moz-repeating-linear-gradient(
                    rgba(35, 135, 95, 0.8), 
                    rgba(10, 95, 160, 0.8)),
                    url('/public/img/winter-s.jpg') no-repeat center center fixed;
                
                background: repeating-linear-gradient(
                    rgba(35, 135, 95, 0.8), 
                    rgba(10, 95, 160, 0.8)), 
                    url('/public/img/winter-s.jpg') no-repeat center center fixed;
                
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                font-weight: 100;
                font-family: 'Lato';
                /* padding-top: 70px; */
            }
            @media screen and (orientation : portrait)
            { 
                body{
                    font-weight: 400;
                }
            }
            
            @media screen and (orientation:landscape)
            { 
                body{
                    font-weight: 400;
                }
            }
            
            .center{
                /*
                background: rgba(20, 30, 40, 0.8);
                */
                color: white;
                padding: 20px;
                margin-top: 20px;
            }
            a{
                color: #daffc7;
            }
            img{
                height: 250px;
                border: 3px solid white;
            }
            .sub-title {
                
            }
            .sub-title-list{
                padding: 25px 50px;
            }
            .sp-list {
                color: white;
                padding: 5px 20px;
                border-radius: 15px;
                border: 1px solid white;
                display: inline-block;
                margin: 10px;
                width: 100px;
                text-align: center;
                /*
                background: rgba(42, 158, 162, 0.8);
                background: -webkit-linear-gradient(to right, rgb(0, 159, 135) ,rgb(69, 114, 194));
                background: -o-linear-gradient(to right, rgb(0, 159, 135) ,rgb(69, 114, 194));
                background: -moz-linear-gradient(to right, rgb(0, 159, 135) ,rgb(69, 114, 194));
                background: linear-gradient(to right, rgb(0, 159, 135) ,rgb(69, 114, 194));
                */
            }
            address > .glyphicon {
                margin-right: 8px;
            }
            .h-divider{
                border-bottom: 2px solid white;
                padding: 12px;
            }
            .navbar {
                background: rgba(20, 30, 40, 0.8);
                color: white;
            }
            .logo {
                height: 45px;
                padding: 10px;
                vertical-align: middle;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            
            <!--
            <div class="row">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-left" href="#">
                                <img class="logo" alt="Brand" src="/public/img/a-white.png">
                            </a>
                        </div>
                    </div>
                </nav>
            -->
            
            <div class="center col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
                        <img src="/public/img/selfie-m.jpg" alt="selfie" class="img-circle">
                    </div>
                    <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1>Andrew Yee</h1>
                        <address>
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                            <a href="mailto:#">andrew.yee@mail.com</a>
                            <br>
                            <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                            <a href="#">(818) 731-8139</a>
                        </address>
                    </div>
                    
                    <div class="text-center">
                        <div class="sub-title col-xs-12 col-md-12 col-sm-12">
                            <h3>About</h3>
                        </div>
                        <div class="h-divider col-xs-8 col-md-8 col-sm-8 col-md-offset-2 col-xs-offset-2 col-sm-offset-2"></div>
                        <div class="sub-title-list col-xs-12 col-md-12 col-sm-12" style="text-align: left;padding: 25px 80px;">
                            <p>
                                I am a 2014 CSUEB graduate who majored in 
                                Computer Science and Engineering with a minor in 
                                Mathematics. From 2012-14 I worked as a student 
                                assistant for CSUEB Web Service department. In 2015,   
                                I worked as a Software Engineer for a YC backed  
                                startup and from 2016 til now, I am a Ruby on Rails 
                                developer for Metaformers Inc.
                            </p>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <div class="sub-title col-xs-12 col-md-12 col-sm-12">
                            <h3>Languages</h3>
                        </div>
                        <div class="h-divider col-xs-8 col-md-8 col-sm-8 col-md-offset-2 col-xs-offset-2 col-sm-offset-2"></div>
                        <div class="sub-title-list col-xs-12 col-md-12 col-sm-12">
                        <span class="sp-list">Ruby</span>
                        <span class="sp-list">Javascript</span>
                        <span class="sp-list">PHP</span>
                        <span class="sp-list">HTML</span>
                        <span class="sp-list">CSS</span>
                        <span class="sp-list">C++</span>
                        <span class="sp-list">SQL</span>
                        <span class="sp-list">Java</span>
                    </div>
                    </div>

                    <div class="text-center">
                        <div class="sub-title col-xs-12 col-md-12 col-sm-12">
                        <h3>Frameworks</h3>
                    </div>
                    <div class="h-divider col-xs-8 col-md-8 col-sm-8 col-md-offset-2 col-xs-offset-2 col-sm-offset-2"></div>
                        <div class="sub-title-list col-xs-12 col-md-12 col-sm-12">
                        <span class="sp-list">Rails</span>
                        <span class="sp-list">Angular1</span>
                        <span class="sp-list">Laravel</span>
                        <span class="sp-list">Sinatra</span>
                        <span class="sp-list">Hibernate</span>
                        <span class="sp-list">JQuery</span>
                        <span class="sp-list">Bootstrap</span>
                        <span class="sp-list">Foundation</span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
