<?php


function tweet($string)
{
	//Format to get the strings/name.

    $regex = '|(@)((\w)+)|';
    //replace string with the name only and the the url to the link should have the '@'
    //with preg match, $0="full string",$1="@" and then $2="String without the @"
    return  preg_replace($regex, '<a href="#$2">$2</a>', $string);

}

	//After the clicked on Submit button.
if (isset($_POST['submit'])) {
	
	//get the strings from the textarea, using the name.;
	$string=$_POST['talk'];

	//call the function.
	echo tweet($string);
}

?>

<!-- Creare a form which does everything on same page -->
<form method="post" action="twitter.php">
	<textarea name="talk">
		
	</textarea>	

	<input type="submit" name="submit">
</form>

<footer>
	<span>Built by Rapheal Prince.</span>
</footer>
