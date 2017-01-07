<!DOCTYPE html>
<html>
    <head>
        <title>Andrew Niko Yee</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="/public/css/main.css" rel="stylesheet" type="txt/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            /* ----------- iPhone 6 ----------- */

            /* Portrait and Landscape */
            @media only screen 
              and (min-device-width: 375px) 
              and (max-device-width: 667px) 
              and (-webkit-min-device-pixel-ratio: 2) { 

            }

            /* Portrait */
            @media only screen 
              and (min-device-width: 375px) 
              and (max-device-width: 667px) 
              and (-webkit-min-device-pixel-ratio: 2)
              and (orientation: portrait) { 
                  .center{
                      width: 90% !important;
                      height: 90% !important;
                      max-width: none !important;
                  }
            }

            /* Landscape */
            @media only screen 
              and (min-device-width: 375px) 
              and (max-device-width: 667px) 
              and (-webkit-min-device-pixel-ratio: 2)
              and (orientation: landscape) { 

            }
            
            body{
                padding: 20px;
                background: linear-gradient(
                    rgba(145, 186, 206, 0.25), 
                    rgba(145, 186, 206, 0.25)),
                    url('/public/img/beach.jpg') no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                font-weight: 100;
                font-family: 'Lato';
            }
            .main{

            }
            .row {
                
            }
            .center{
                background: rgba(19, 27, 39, 0.6);
                color: white;
                height: 800px;
                width: 75%;
                max-width: 500px;
                transform: translate(-50%, -50%);
                position: absolute;
                top: 50%;
                left: 50%;
                padding: 20px;
                overflow: auto;
                border-radius: 5px;
                
            }
            .title {
                font-size: 50px;
                margin: 0px 0px 20px 0px;
            }
            .sub-title {
                font-size: 24px;
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
            }
            .title-box {
                margin: 15px 35px 35px 35px;
                padding: 0px 18px;
            }
            .title-box-img {
                height: 150px;
                width: 150px;
                display: inline-block;
            }
            .title-box-img img{
                width: 100%;
                height: 100%;
                border-radius: 50%;
            }
            .title-box-info{
                margin: 0px 15px;
                display: inline-block;
                vertical-align: middle;
            }
            .title-box-info .name{
                font-size: 40px;
            }
            .title-box-info .text{
                font-size: 15px;
            }
        </style>
    </head>
    <body>
        <div class="main">
            <div class="center">
                <div class="row">
                    <div class="title-box">
                        <div class="title-box-img">
                            <img src="https://scontent.fsnc1-5.fna.fbcdn.net/v/t1.0-9/15578602_10154763017469400_2557445869749072963_n.jpg?oh=2e9bb72c6d1be42d6dafaabd4a4b34f8&oe=58D9C3C9">
                        </div>
                        <div class="title-box-info">
                            <div class="name">
                                Andrew Yee
                            </div>
                            <div class="text">
                                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>  (818) 731-8139 <br>
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  andrew.yee@mail.com
                            </div>
                        </div>
                    </div>
                    
                    <div class="sub-title col-xs-12 col-md-12 col-sm-12">
                        Languages:
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
                    
                    <div class="sub-title col-xs-12 col-md-12 col-sm-12">
                        Frameworks:
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
