<!Doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Checkboxes and text area </title>
</head>
<body>
  <form action="result.php" method='Post'>
   Name:<input type="text" name="inp" value="Nitt"/><br>
   Male<input type="Checkbox" name='male' value='M'/><br>
   Female<input type="Checkbox" name='male' value='fM'/><br>
   Other<input type="Checkbox" name='male' value='fM' checked><br>
   Motto:<br>
   <textarea rows="5" cols="29" name='arear'> Hello India!</textarea>
   <br>
   Hobbies:
   <br>
   <input type="radio" name='sing'/>Singing 
                             <!-- When a user clicks on a radio-button, it becomes checked, and all other radio-buttons if  with same name  become unchecked.(in case of radio button)
                                -->                                     
   <input type="radio" name='sing' checked />Dance            <!-- use checked to set some value by default --><br><br>
    <select name='dropdown'>
      <option value='Maths' selected>Maths</option> 
      <option value='computer'>Computer</option>
    </select>
     <br><br>
     <input type="button" name="ok" value="OK" /> 
     <input type="reset" name="reset" value="Reset" />
     <br>
    
     <input type="submit" value="Submit">
    
   </form>
</body>
</html>

<!--
 <input type="image" name="imagebutton" src="../images/cartoon.png" />
<img src="../images/logo.png">
          __ ______ ________
          |    |       |
          |    |       |___ 3. Get the file named "logo.png"
          |    |
          |    |___ 2. Go inside "images/" subdirectory
          | 
          | 
          |____ 1. Go one level up
          -->