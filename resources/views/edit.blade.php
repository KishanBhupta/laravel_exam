<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add</title>
</head>
<body>

<form action="{{ route('update', $data->id) }}" method="post">
	@csrf
	name<br> <input type="text" name="name" value="{{ $data->name}}"><br>

	hobbies<br> <input type="checkbox" name="hobbie[]" value="coding" @if(in_array('coding', $data->hobbies)) checked @endif}}> coding<br>

	<input type="checkbox" name="hobbie[]" value="reading" @if(in_array('reading', $data->hobbies)) checked @endif> reading <br>

	gender <br><input type="radio" name="gender" value="male" {{$data->gender == "male" ? 'checked' : ''}}>Male <br>
	<input type="radio" name="gender" value="female" {{$data->gender == "female" ? 'checked' : ''}}>Female <br>
	city <br>
	<select name="city">
		<option value="Ahemdabad" {{$data->city == "Ahemdabad" ? 'selected' : ''}}>
			Ahemdabad
		</option>
		<option value="Rajkot" {{$data->city == "Rajkot" ? 'selected' : ''}}>
			Rajkot
		</option>
	</select>
	<input type="submit"> 

</form>
</body>
</html>