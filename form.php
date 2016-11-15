<html>
<title>Application form</title>
<body>
	<form action="" method="post">
		<legend>Form fillup</legend>
		<br/>
		<br/>
		First name:<input type="text" name="firstname";>    
		
		Last name:<input type="text" name="lastname";>
		<br/>
		<br/>
		Password: <input type="pasword" name="psw">
		<br/>
		<br/>
		Gender:<br>
		
		 <input type="radio" name="gender" value="male" >Male<br> 
		 <input type="radio" name="gender" value="female">Female<br> 
		 <input type="radio" name="gender" value="other">Other<br>
		<br/>
		
		<br/>
		Birth of date: <select name="month">
		<option value="jan">Jan</option>
		<option value="feb">Feb</option>
		<option value="mar">Mar</option>
	</select>
	<select name="date">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<select name="year">
		<option value="1990">1990</option>
		<option value="1991">1991</option>
		<option value="1992">1992</option>
		<option value="1993">1993</option>
		<option value="1994">1994</option>
	</select>
	<br/>

		<br/>
		Birthday in AD: <input type="date" name="bday">
		<br/>
		<br/>
		Language:<input type="checkbox" name="lang" value="english">Eng  <input type="checkbox" name="lang" value="nepali">Nep <input type="checkbox" name="lang" value="newari">New
		<br/>
		

		<br/>
		Copies(inbetween 1 and 8)
		<input type="number" name="quantity" min="1" max="8">
		<br/>
		<br/>
		Another Copies: <input type="range" name="point" min="1" max="10">
		<br/>
		<br/>
		Comment: <textarea name="message" ></textarea>
		<br/>
		<br/>
		Email: <input type="email" name="email">
		<br/>
		<br/>

		<input type="submit" value="Submit"> 
		<br/>
		<input type="submit" value="Cancel">
		<br/>
		<br/>
		<input type="button" onclick="alert('hello isa!')" value="Click me!">
		<br/>
	

	</form>
</body>
</html>