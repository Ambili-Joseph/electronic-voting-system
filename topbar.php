<style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: #5D6D7E;
    padding: 5px 11px;
    border-radius: 50% 50%;
    color: #5D6D7E;
}
</style>

<nav class="navbar navbar-light" style="background-color: #D7BDE2 ;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
  				<i class="fa fa-poll-h"></i>
  			</div>
  		</div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>