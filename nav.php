<?php
	include 'include-files.php';
?>

<nav class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<ul>
				<li><a href="news.php"><label>News</label></a></li>
				<li><a href="tickets.php"><label>Tickets</label></a></li>
				<li><a href="gallery.php"><label>Gallery</label></a></li>
				<li><a href="mesages.php"><label>Mesages</label></a></li>
				<li><a href="profile.php"><label>My Profile</label></a></li>
					<button class="btn-default">Log In</button>	
			</ul>
		</div>
	</div>
</nav>

<div class="container">
  <h2>Dropdowns</h2>
  <p>The .divider class is used to separate links inside the dropdown menu with a thin horizontal line:</p>
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
      <li class="divider"></li>
      <li><a href="#">About Us</a></li>
    </ul>
  </div>
</div>