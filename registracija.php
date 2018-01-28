<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="stil.css" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<meta name="description" content="">

<meta name="keywords" content="">

<meta name="author" content="Domagoj Joć">



<title>UEFA Champions League</title>
<div class="container">
  <img src="http://goldwallpapers.com/uploads/posts/uefa-champions-league-wallpaper/uefa_champions_league_wallpaper_018.jpg" style="width: 100%; height: 300px;" class="img-fluid" alt="Responsive image">
</div>
</head>
<body>
<div id="navigacija"></div>

<div class="container">

<h2 align="center" style="margin-top:10px">Register</h2>

<form action="register.php" method="post" class="form-horizontal" style="margin-top:60px"  role="form">
		
		<div class="form-group">

            <div class="form-group">
            <div class="col-md-2">
                
                    <label class="control-label">Username:</label>

                </div>

                <div class="col-md-3 col-md-pull-1">

                    <input type="text" name="username"  id="username" class="form-control" required="true" />

                </div>

            </div>
            
            </div>
            

            <div class="form-group">


	         <div class="form-group">

                <div class="col-md-2">

                    <label class="control-label">Email:</label>

                </div>

                <div class="col-md-3 col-md-pull-1">

                    <input type="email" class="form-control" id="email"  name="email" required="true">

                </div>

            </div>

            

           

            

            <div class="form-group">

                <div class="col-md-2">

                    <label class="control-label">Password:</label>

                </div>

                <div class="col-md-3 col-md-pull-1">

                    <input type="password" class="form-control" id="password"  name="password" required="true">

                </div>

            </div>

            <div class="form-group">

                <div class="col-md-offset-1 col-md-2">

                    <button type="submit" class="btn btn-success">Register</button>

                </div>

            </div>

        </form>

    </div>

</div>
        
		
<footer align="center"  class="footer container" style="margin-top:30px; margin-bottom:20px">

        <span class="text-muted">Copyright &copy; 2017. Domagoj Joć</span>

    </footer>
	
	<script>$("#navigacija").load("navigacija.php");</script>
</body>


</html>