<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: orange !important;">
    <div class="container">			
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.php" target="_self">
                <img src="img/favicon.ico" alt="Home" style="height: 20px; width: 20px;"/> <!-- Replace with your favicon path -->
            </a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="../index.php" style="color: orange; text-shadow: 1px 1px 2px white;">Lis4381</a></li>
                <li><a href="../a1/index.php" style="color: orange; text-shadow: 1px 1px 2px white;">A1</a></li>
                <li><a href="../a2/index.php" style="color: orange; text-shadow: 1px 1px 2px white;">A2</a></li>
                <li><a href="../a3/index.php" style="color: orange; text-shadow: 1px 1px 2px white;">A3</a></li>
                <li><a href="../a4/index.php" style="color: orange; text-shadow: 1px 1px 2px white;">A4</a></li>
                <li><a href="../a5/index.php" style="color: orange; text-shadow: 1px 1px 2px white;">A5</a></li>
                <li><a href="../p1/index.php" style="color: orange; text-shadow: 1px 1px 2px white;">P1</a></li>
                <li><a href="../p2/index.php" style="color: orange; text-shadow: 1px 1px 2px white;">P2</a></li>
                <li><a href="../test/index.php" style="color: orange; text-shadow: 1px 1px 2px white;">Test</a></li>					
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<?php
date_default_timezone_set('America/New_York');
$today = date("m/d/y g:ia");
echo $today;
?>
