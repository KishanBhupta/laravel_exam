<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
</head>
<body>

<a href="/addnew"> Add new data </a>
<table border="2">
    <tr>
        <th>
            id
        </th>
        <th>
            name
        </th>
        <th>
            hobbies 
        </th>

        <th>
            gender 
        </th>
        <th>
            city
        </th>
        <th>
            Action
        </th>
    </tr>
    
    @foreach ( $stud as $st)
      <tr>
        <th>
            {{$st->id}}
        </th>
        <th>
            {{$st->name}}
        </th>
        <th>
            {{$st->hobbies}}
        </th>

        <th>
            {{$st->gender}}
        </th>
        <th>
            {{$st->city}}
        </th>
        <th>
            <a href="/delete/{{$st->id}}"> Delete</a>
            <a href ="/edit/{{$st->id}}"> Update</a>
        </th>
    </tr>
    @endforeach
</table>

</body>
</html>