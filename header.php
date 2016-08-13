<html>
 <div class="container">
	<div class="row">
	<div class="col-lg-3 text-center">
    <div class="brand"><img src="../img/Logo.png" alt="Donovan's logo image" ></div></div>
	<div class="col-lg-9 text-center">
    <div class="address-bar"> 102 Fort Eddy Road| Concord, NH 03301 | 603-226-2225</div></div></div>
	</div>
   <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../"><img src="../img/Logomini.png" alt="Donovan's logo image"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
		
		<div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li <?php echo ($page == 'home') ? 'class="active"' : '';?>><a href="../">Home</a></li>
            <li <?php echo ($page == 'supplies') ? 'class="active"' : '';?>><a href="../party/">Party Supplies</a></li>
            <li <?php echo ($page == 'gifts') ? 'class="active"' : '';?>><a href="../gifts/">Gifts</a></li>
			<li <?php echo ($page == 'wedding') ? 'class="active"' : '';?>><a href="../wedding/">Wedding</a></li>
			<li <?php echo ($page == 'costumes') ? 'class="active"' : '';?>><a href="../costumes/">Costumes</a></li>
            <li <?php echo ($page == 'contact') ? 'class="active"' : '';?>><a href="../contact/">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
</html>