<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input,button{
        width: 200px;
        margin-bottom: 4px;
        border:1px solid 
    }
    button{
        background-color: aquamarine
    }
</style>
<body>
    {{-- @if($errors->any())
        @foreach($errors->all() as $err)
            <li style="color:red">{{$err}}</li>
        @endforeach
    @endif --}}
    <form action="{{route('postregister')}}" method="post">
        @csrf
        {{-- {{csrf_field()}}
        <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}

        <input type="text" name="fullname" placeholder="Fullname" 
            value="{{old('fullname')}}">
            @if($errors->has('fullname'))
                @foreach($errors->get('fullname') as $err)
                    <li style="color:red">{{$err}}</li>
                @endforeach
            @endif
        <br>
        <input type="email" name="email" placeholder="Email" 
            value="{{old('email')}}">
        <br>
        <input type="date" name="birthdate">
        <br>
        <input type="text" name="address" placeholder="Address">
        <br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <input type="password" name="confirm_password" placeholder="Re Enter Password">
            @if($errors->has('confirm_password'))
                @foreach($errors->get('confirm_password') as $err)
                    <li style="color:red">{{$err}}</li>
                @endforeach
            @endif
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>