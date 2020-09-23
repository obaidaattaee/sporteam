<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Pricing example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
?>
<?php
include_once "Team.php";

$team1 = new Team("team 1", 't1', 'this is team 1' , "img/attachment_84104055.jpeg");
$team2 = new Team("team 2", 't2', 'this is team 2' , 'img/e-sports-team-logo-template-with-king_23-2147821565.jpg');
$team3 = new Team("team 3", 't3', 'this is team 3' , 'img/index.jpeg');
$team4 = new Team("team 4", 't4', 'this is team 4' , 'img/e-sports-team-logo-template-with-king_23-2147821565.jpg');

$teams = [$team1, $team2, $team3, $team4];

?>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
    </nav>
    <a class="btn btn-outline-primary" href="login.html">Sign in</a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">games today</h1>

</div>

<div class="container">

    <?php
    $i=0;
    $len = count($teams);
    for ($i=0; $i< $len; $i++) {
        echo '<form  class="form-group" id="'."d$i".'" method="get" action="team.php">';
        echo '<input type="hidden" name="team_name" value="'.$teams[$i]->name.'">';
        echo '<input type="hidden" name="team_slug" value="'.$teams[$i]->slug.'">';
        echo '<input type="hidden" name="team_logo" value='.$teams[$i]->logo.'>';
        echo '<input type="hidden" name="team_description" value="'.$teams[$i]->description.'">';
        echo '</form>';
    echo '<div class="card-deck mb-3 text-center"> ';
    echo '    <div class="card mb-4 box-shadow"> ';
    echo '       <div class="card-header">';

        echo '          <img src='.$teams[$i]->logo.' width="72" hight="72" class="bd-placeholder-img rounded-circle">' ;
        echo '          <h4 class="my-0 font-weight-normal">' . $teams[$i]->slug. '</h4>';
    echo '</div>';
    echo ' <div class="card-body">';
       echo '          <ul class="list-unstyled mt-3 mb-4">';
    echo '               <li>' . $teams[$i]->name  . '</li>';
    echo '           </ul>';
        echo "<p>".$teams[$i]->description."</p>" ;
    echo '        <button type="submit" form="d'.$i.'" class="btn btn-lg btn-block btn-primary">show team details</button>';
    echo '      </div> ';
    echo '   </div>';

    echo "<h1 class='mt-5 pt-5'> VS  </h1>" ;
        ++$i;
        echo '<form  class="form-group" id="d'."$i".'" method="get" action="team.php">';
        echo '<input type="hidden" name="team_name" value="'.$teams[$i]->name.'">';
        echo '<input type="hidden" name="team_slug" value="'.$teams[$i]->slug.'">';
        echo '<input type="hidden" name="team_logo" value='.$teams[$i]->logo.'>';
        echo '<input type="hidden" name="team_description" value="'.$teams[$i]->description.'">';
        echo '</form>';
    echo '   <div class="card mb-4 box-shadow">';
    echo '        <div class="card-header">';

        echo '          <img src='.$teams[$i]->logo.' width="72" hight="72" class="bd-placeholder-img rounded-circle">' ;
        echo '           <h4 class="my-0 font-weight-normal">' . $teams[$i]->slug. '</h4>';

        echo '       </div>';
    echo '       <div class="card-body">';
      echo '           <ul class="list-unstyled mt-3 mb-4">';
    echo '               <li>'. $teams[$i]->name.'</li>';

    echo '           </ul>';
        echo "<p>".$teams[$i]->description."</p>" ;
    echo '           <button type="submit" form="d'.$i.'" class="btn btn-lg btn-block btn-primary">show team details</button>';
    echo '       </div>';
    echo '   </div>';
    echo ' </div> ';


    }

    ?>

</div>

</body>
</html>