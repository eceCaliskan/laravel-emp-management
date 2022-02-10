<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="grid place-items-center pt-28">
        <a href="/employee/create">Add A New Employee</a>
    </div>
    <table class="grid place-items-center ">
    @foreach ($employee as $person)
    <tr>
        
         <td class="pr-10 pb-20 pt-20 pl-10 ">{{$person->name}}</td>
         <td class="pr-10 pb-20 pl-10 pt-20 ">{{$person->surname}}</td>
         <td class="pr-10 pb-20 pl-20 pt-20 ">{{$person->email}}</td>
         <td class="pr-10 pb-20 pl-20 pt-20 "><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">Remove</button></td>
    </tr>
         <br>
  @endforeach
 
  <td class="">{{ $employee->links() }}</td>
  
</table>
</body>

</html>