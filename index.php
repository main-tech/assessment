
<!DOCTYPE html>
<html>
<body>

<h2>Add institution</h2>

<form method="POST" action="institution.php">
  <label for="aname">Enter name of Institution:</label><br>
  <input type="text" id="aname" name="aname" placeholder="Institution name"><br>
  
  <input type="submit" value="Add Institution">
</form> 
<hr>


<h2>Institutions</h2>

<form method="POST" action="institution.php">

 <input type="hidden" id="institutiion_list" name="institutiion_list" value="institutiion_list">
 
  <input type="submit" value="List institutions">
   <p>The list will appear in a new page</P>
</form> 
<hr>
<h2>Filter search Institutions</h2>

<form method="POST" action="institution.php">

 <input type="hidden" id="institutiion_list" name="institutiion_list" value="institutiion_list">
 
  <input type="submit" value="List institutions">
   <p>The list will appear in a new page</P>
</form> 
<hr>

<h2>Filter search Institutions</h2>
<table>
  <tr>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
</table>
<hr>
<h2>Delete institution</h2>

<form method="POST" action="institution.php">
  <label for="dname">Enter name of Institution:</label><br>
  <input type="text" id="dname" name="ename" placeholder="Institution name"><br>
  
  <input type="submit" value="Delete Institution">
</form> 
<hr>
<h2>Edit institution</h2>

<form method="POST" action="institution.php">
  <label for="ename">Enter name of Institution:</label><br>
  <input type="text" id="ename" name="ename" placeholder="Institution name"><br>
  
  <input type="submit" value="Delete Institution">
</form> 
<hr>

</body>
</html>

