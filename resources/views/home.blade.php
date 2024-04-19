<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add</title>
</head>
<body>

<form action="{{route('store')}}" method="post">
	@csrf
	name<br> <input type="text" name="name"><br>
	hobbies<br> <input type="checkbox" name="hobbie[]" value="coding"> coding<br>
	<input type="checkbox" name="hobbie[]" value="reading"> reading <br>
	gender <br><input type="radio" name="gender" value="male">Male <br>
	<input type="radio" name="gender" value="female">Female <br>
	city <br>
	<select name="city">
		<option value="Ahemdabad">
			Ahemdabad
		</option>
		<option value="Rajkot">
			Rajkot
		</option>
	</select>
	<input type="submit"> 

</form>
</body>
</html>