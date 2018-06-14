
  <nav class="navbar navbar-default">
  <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
        data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a class="navbar-brand" href="index.php">LasitTeaCompany</a>
      </div>
      <div id="navR">
          <ul class="nav navbar-nav navbar-right">    
            <?php 
            if(isset($_SESSION['username'])){ ?>      
            <li> <a href="#" id="nam2" > Hi <span id="nam"><?php echo $_SESSION['username']; ?></span></a></li>
          <li><a href="#" id="mes"> New Messages: <span class="badge">2</span> </a> </li>        
          <li><a href="php/logout.php" >Logout <span  id="lg" class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>   
    <?php } ?>
              
        </ul>
      </div>
  </div>
  </nav>