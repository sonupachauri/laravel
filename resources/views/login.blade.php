<h3> This is login page</h3>
<div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif
    <form action ="userLogin" method="post">
       @csrf
       <p><input type="text" name="username" placeholder="Enter Username"></p>
       <span> @error('username')
           {{$message}}
       @enderror</span>
       <p> <input type="password" name="password" placeholder="Enter Password"></p>
       <span> @error('password')
        {{$message}}
    @enderror</span>
       <p> <input type="submit" value="Submit"></p>
   </div>