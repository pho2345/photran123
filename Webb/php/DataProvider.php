
<?php
class DataProvider
{
	public static function executeQuery($sql)
	{
		include('database.inc');
		if(!($connection=mysqli_connect($hostName,$username,$password)))
		{
			die ("couldn't connect to localhost");
		}
		if(!(mysqli_select_db($connection,$databaseName)))
		{
			die ("couldn't connect to database webbansach");
		}
		if (!(mysqli_query($connection,"set names 'utf8'")))
			showError();
		if(!($result=mysqli_query($connection,$sql)))
			showError();
		if(!(mysqli_close($connection)))
			showError();
		return $result;
	}
}
?>