<!DOCTYPE html>
   <?php 
	  session_start();
	  require("data.php");
   ?>
<html>
<head>
<title> search </title>
<link rel="stylesheet" href="css2.css">
</head>
    <body id="SEA">
	    <h1> SEARCH HERE </h1>
		</br>
		<hr>
		</br>
		<input id="searchField" type="text" placeholder="Search..">
		<div id="searchResult"></div>
		
		<script>
		var searchField = document.getElementById("searchField");
			searchField.oninput = function(){
				showResult(searchField.value);
			}
			
		function showResult(searchConstraint){
			
			if(searchConstraint.length == 0){
				document.getElementById("searchResult").innerHTML = "";
				return;
			}
			
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			}
			
			xmlhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById("searchResult").innerHTML = this.responseText;
				}
			}
			
			xmlhttp.open("GET" , "liveSearch.php?q=" + searchConstraint ,true);
			xmlhttp.send();
		}
			
		</script>
    </body>
</html>
