<div id="headlayer" class="Layertitle">
	<p><a href="movie.html">MacMovie home</a> | <a href="registeration.html">A2: User Registration </a>| <a href="movieentry.html">A2: Enter Movies</a> | <a href="movielist.php"> Browse Movie DB</a> | <a href="search.php">Search</a> | 
<?php 
// if privilege is 1, then this is admin, show add new movie link
if(isset($_SESSION['pri']) && $_SESSION['pri'] == 1){
		print("<a href='movieentry.php'> New movie entry</a> | ");
		print("<a href='addpeopleformovie.php'> New people entry</a> | ");
		print("<a href='logout.php'> Admin logout</a>");
}else{
		print("<a href='login.php'> Admin login</a>");

}
?></p>
	<p><span id="movieText" class="movingtext" onmouseover="stopMoving()" onmouseout="resumeMoving()" >Enter favorite movies</span></p>
</div>