<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href=
    "https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
            rel="stylesheet">
    <title>Document</title>
</head>
<body>
  <form class="pl-96 pr-96 pt-96 "method="POST" action="{{url('/employee')}}">
    @csrf
    @method("post")
    <h1 class="pb-20">Create User</h1>
    <input aria-label="Enter your name" 
           name="name"
           type="text" placeholder="Name" 
           class="text-sm text-gray-base w-full 
                  mr-3 py-5 px-4 h-2 border 
                  border-gray-200 rounded mb-2" />
    <input aria-label="Enter your surname" 
           name="surname"
           type="text" placeholder="Surname" 
           class="text-sm text-gray-base w-full 
                  mr-3 py-5 px-4 h-2 border 
                  border-gray-200 rounded mb-2" /> 
    <input aria-label="Enter your Email" 
           name="email"
           type="text" placeholder="Email"
           class="text-sm text-gray-base w-full mr-3 
                  py-5 px-4 h-2 border border-gray-200 
                  rounded mb-2" />
    <button type="submit"
            class="bg-blue-400 w-full mt-4">
        Submit
    </button>
</form>
</body>
</html>