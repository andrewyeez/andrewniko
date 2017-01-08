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
                padding: 20px;
                background: -webkit-linear-gradient(left,
                    rgba(178, 215, 174, 0.5), 
                    rgba(125, 108, 192, 0.5)), 
                    url('/public/img/winter.jpg') no-repeat center center fixed;
                
                background: -o-linear-gradient(right,
                    rgba(178, 215, 174, 0.5), 
                    rgba(125, 108, 192, 0.5)),
                    url('/public/img/winter.jpg') no-repeat center center fixed;
                
                background: -moz-linear-gradient(right,
                    rgba(178, 215, 174, 0.5), 
                    rgba(125, 108, 192, 0.5)), 
                    url('/public/img/winter.jpg') no-repeat center center fixed;
                
                background: linear-gradient(to right,
                    rgba(178, 215, 174, 0.5), 
                    rgba(125, 108, 192, 0.5)),
                    url('/public/img/winter.jpg') no-repeat center center fixed;
                
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                font-weight: 100;
                font-family: 'Lato';
            }
            @media screen and (orientation : portrait)
            { 
                body{
                    font-weight: 400;
                }
            }
            .center{
                background: rgba(20, 30, 40, 0.8);
                color: white;
                padding: 20px;
                border-radius: 5px;
            }
            a{
                color: #8ffeb3;
            }
            img{
                height: 300px;
            }
            .sub-title {
                text-align: left;
                padding-left: 40px;
            }
            .sub-title-list{
                padding: 12px 50px;
            }
            .sp-list {
                color: white;
                padding: 5px 20px;
                border-radius: 5px;
                background: rgba(42, 158, 162, 0.8);
                display: inline-block;
                margin: 10px;
                width: 100px;
                text-align: center;
                background: -webkit-linear-gradient(left, rgb(34, 113, 101) , rgb(30, 87, 143));
                background: -o-linear-gradient(right, rgb(34, 113, 101), rgb(30, 87, 143));
                background: -moz-linear-gradient(right, rgb(34, 113, 101), rgb(30, 87, 143));
                background: linear-gradient(to right, rgb(34, 113, 101) ,rgb(30, 87, 143));
            }
            address > .glyphicon {
                margin-right: 8px;
            }
            .h-divider{
                border-bottom: 2px solid white;
                padding: 12px;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="center col-xs-12 col-sm-12 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
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

                    <div class="h-divider col-xs-8 col-md-8 col-sm-8 col-md-offset-2 col-xs-offset-2 col-sm-offset-2"></div>

                    <div class="sub-title col-xs-12 col-md-12 col-sm-12">
                        <h3>About</h3>
                    </div>

                    <div class="sub-title-list col-xs-12 col-md-12 col-sm-12">
                        <p>
                            I am a 2014 CSUEB graduate with a major in 
                            Computer Science and Engineering with a minor in 
                            Mathematics. From 2012-14 I worked as a student 
                            assistant for CSUEB Web Service department. In 2015,   
                            I worked as a Software Engineer for a YC startup 
                            company and ever since the beginning of 2016 I am 
                            a Ruby on Rails developer for Metaformers.
                        </p>
                    </div>
                    
                    <div class="h-divider col-xs-8 col-md-8 col-sm-8 col-md-offset-2 col-xs-offset-2 col-sm-offset-2"></div>

                    <div class="sub-title col-xs-12 col-md-12 col-sm-12">
                        <h3>Languages</h3>
                    </div>
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
                    
                    <div class="h-divider col-xs-8 col-md-8 col-sm-8 col-md-offset-2 col-xs-offset-2 col-sm-offset-2"></div>

                    <div class="sub-title col-xs-12 col-md-12 col-sm-12">
                        <h3>Frameworks</h3>
                    </div>
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
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
