<!Doctype Html>  
<Html>     
<Head>      
<Title>     
Create a Registration form   
</Title>  
</Head>  
<Body>   
The following tags are used in this Html code for creating the Registration form:  
<br>    
<form action=<?php echo $_SERVER['PHP_SELF'] ?> method ="POST">   
<label> Firstname </label>           
<input type="text" name="firstname" size="15"/> <br> <br>   
<label> Lastname: </label>           
<input type="text" name="lastname" size="15"/> <br> <br>    
<label>     
Course :    
</label>     
<select>    
<option value="Course">Course</option>    
<option value="BCA">BCA</option>    
<option value="BBA">BBA</option>    
<option value="B.Tech">B.Tech</option>    
<option value="MBA">MBA</option>    
<option value="MCA">MCA</option>    
<option value="M.Tech">M.Tech</option>    
</select>    
<br>    
<br>    
<label>     
Gender :    
</label><br>    
<input type="radio" name="gender"/> Male <br>    
<input type="radio" name="gender"/> Female <br>    
<input type="radio" name="gender"/> Other    
<br>    
<br>    
<label>   
Phone :    
</label>      
<input type="number" name="phone" size="10"> <br> <br>    
Address    
<br>    
<textarea cols="80" rows="5" value="address">    
</textarea>    
<br> <br>    
Email:    
<input type="email" id="email" name="email"> <br>      
<br> <br>    
Password:    
<input type="Password" id="pass" name="pass"> <br>     
<br> <br>    
<input type="submit" value="Submit">    
<input type="reset" value="Reset">  
</form>    
</Body>   
</Html>
<?php
if(isset($_POST['SUBMIT']))
{
    echo $_POST['NAME'];
    echo $_POST['LASTNAME'];
    echo $_POST['COURSE'];
    echo $_POST['PHONE'];
}
?>