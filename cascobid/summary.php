<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Casco </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/summary.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  
  <body>
    <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <img   id="logo" src="cascopng.png"> 
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown-hover">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Quotes <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="/cascobid/index.html">New</a></li>
            <li><a href="/cascobid/quotes.html">Search</a></li>
            
          </ul>
        </li>

        <li class="dropdown-hover">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Customers <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="/cascobid/newcustomer.html">New</a></li>
            <li><a href="/cascobid/customers.html">Search</a></li>
            
          </ul>
        </li>
        <li class="dropdown-hover">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            
                        Account
                        <b class ="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-sm-4 ">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="text-left"><strong>Tony Gentile</strong></p>
                                        <p class="text-left small">me@vishrutdixit.com</p>
                                        <p class="text-left">
                                            <a href="/cascobid/accountsettings.html" class="btn btn-primary btn-block btn-sm">Settings</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>
                                            <a href="/cascobid/login.html" class="btn btn-danger btn-block">Logout</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
  <div class="container-fluid lpadding" >
    <div class="lpadding col-sm-12">
      <ol class="breadcrumb">
        <li><a href="/cascobid/global.html">Global Options</a></li>
        <li><a href="/cascobid/index.html">Configuration</a></li>
        <li><a href ='/summary.html'>Review</a></li>
      </ol>    
      <div class ="col-sm-8">
      <div class="panel panel-default" id = "panel1">
      <div class="panel-body">
        <div class ="col-sm-2">
          <div id = "rectangle"></div> 
        </div>
        <div class="col-xs-4">
        <h4>Summary</h4>
        
       <table>
          <tr>
          <td id ="type">Window Type: <?php
          if(!isset($_POST['windowtype']))
          {
          echo " ";
        ?><br><?php
         }else{
          echo $_POST['windowtype'];
        ?><br><?php
        }
        ?></td></tr>
          <tr>
          <td id ="dims">Dimensions: <?php
          if(!isset($_POST['dimension']))
          {
          echo " ";
        ?><br><?php
         }else{
          echo $_POST['dimension'];
        ?><br><?php
        }
        ?></td></tr>
          <tr>
          <td id ="finish">Finish: <?php
          if(!isset($_POST['finish']))
          {
          echo " ";
        ?><br><?php
         }else{
          echo $_POST['finish'];
        ?><br><?php
        }
        ?></td></tr>
          <tr>
          <td id ="screens">Screens: <?php
          if(!isset($_POST['screens']))
          {
          echo " ";
        ?><br><?php
         }else{
          echo $_POST['screens'];
        ?><br><?php
        }
        ?></td></tr>
          <tr>
          <td id ="screenColor">Screen Color: <?php
          if(!isset($_POST['screenColor']))
          {
          echo " ";
        ?><br><?php
         }else{
          echo $_POST['screenColor'];
        ?><br><?php
        }
        ?></td></tr>
          <tr>
          <td id ="hardColor">Hardware Color: <?php
          if(!isset($_POST['hardwareColor']))
          {
          echo " ";
        ?><br><?php
         }else{
          echo $_POST['hardwareColor'];
        ?><br><?php
        }
        ?></td></tr>
          <tr>
          <td id ="grilleSize">Grille Size: <?php
          if(!isset($_POST['grilleS']))
          {
          echo " ";
        ?><br><?php
         }else{
          echo $_POST['grilleS'];
        ?><br><?php
        }
        ?></td></tr>
          <tr>
          <td id="grilleColor">Grille Color: <?php
          if(!isset($_POST['grilleCo']))
          {
          echo " ";
        ?><br><?php
         }else{
          echo $_POST['grilleCo'];
        ?><br><?php
        }
        ?></td></tr>
          <tr>
          <td id ="extColor">Exterior Color: <?php
          if(!isset($_POST['extColor']))
          {
          echo " ";
        ?><br><?php
         }else{
          echo $_POST['extColor'];
        ?><br><?php
        }
        ?></td></tr>
          <tr>
          <td id ="jambSize">Jamb Size: <?php
          if(!isset($_POST['jambS']))
          {
          echo " ";
        ?><br><?php
         }else{
          echo $_POST['jambS'];
        ?><br><?php
        }
        ?></td></tr>
          <tr>
          <td id ="glass">Glass Type: <?php
          if(!isset($_POST['glass']))
          {
          echo " ";
        ?><br><?php
         }else{
          echo $_POST['glass'];
        ?><br><?php
        }
        ?></td></tr>
          <tr>
          <td id ="total"><strong>Total:$<?php
          echo $_POST['troll'];
        ?>
       <br></strong></td></tr>
          </table>

      </div>
        
          
        </div>
      
            <div class ="col-sm-12 lpadding">
      <div class="panel panel-default" id = "panel2">
      <div class="panel-body">
        <div class ="col-sm-2">
          <div id = "rectangle"></div> 
        </div>
        <div class="col-xs-4">
        <h4>Summary</h4>
        
        Summary of Stuff:<br>
        <br>
        Summary of Stuff:<br>
        <br>
        Summary of Stuff:<br>
        <br>
        Summary of Stuff:<br>
        </div>

      </div>
        
          
        </div>
      </div>
            <div class ="col-sm-12 lpadding">
      <div class="panel panel-default" id = "panel2">
      <div class="panel-body">
        <div class ="col-sm-2">
          <div id = "rectangle"></div> 
        </div>
        <div class="col-xs-4">
        <h4>Summary</h4>
        
        Summary of Stuff:<br>
        <br>
        Summary of Stuff:<br>
        <br>
        Summary of Stuff:<br>
        <br>
        Summary of Stuff:<br>
        </div>

      </div>
        
          
        </div>
      </div>
    </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default" id = "panel3">
      <h3>Shipping Info</h3>
    <div class="form-horizontal">
    <div class="form-group">
        <div class="col-md-6">
            <textarea class="form-control" rows="3" placeholder="What's up?" required></textarea>
        </div>
    </div>
</div>


      </div>
      <div class="panel panel-default" id = "panel3">
      <h3>Other Info</h3>
    Lorem ipsum dolor sit amet, ei fugit principes interpretaris usu, consul soluta tempor et vix. Cu possim ancillae oporteat his. Ea duis illum augue quo, eos at error antiopam adolescens. At esse altera voluptaria vim, ex dictas dolorem facilisi mei, ne sed sanctus recusabo adversarium.

Vel an nonumy feugait. Reque nostrum mandamus sit ad. Nam an commodo indoctum, esse libris quaerendum no vel. Erant simul democritum ne has, invidunt quaestio duo ut. Qui ea eruditi erroribus, ne vis natum luptatum, mel ex nisl wisi efficiantur.

An quo conceptam reprimique, eum option expetenda scribentur an, in commodo appareat nec. Has apeirian scripserit ut. No pro partem voluptatum, duo eros euismod eu. Duo velit expetenda no. No quis bonorum vix, vim esse erat ei.

Pri duis homero cu, te sed tempor euripidis signiferumque. Dicunt utamur intellegat vix an. Diceret delectus necessitatibus ne cum. Pro placerat accusamus gubergren ei, audiam numquam scripserit in has. Nam eros brute elaboraret in, mea at nostrud pericula corrumpit, ea has utinam maiorum menandri. Paulo iudico meliore ius te, errem virtute voluptatum an mel, solum nemore consequat usu ex.
<br>


      </div>
      <br>
      <div class="col-sm-4 lpadding">
      <div class = "button">
          <button type = "button" class = "btn btn-success">Submit</button>
      </div>
      </div>
  </div>

  </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap.js"></script>
    <script> 
       $(function(){
        $(".dropdown-hover").hover(            
            function() {
                //$('.dropdown-menu', this).stop( true, true ).fadeIn("slow");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                //$('.dropdown-menu', this).stop( true, true ).fadeOut("slow");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    </script>

  </body>
</html>