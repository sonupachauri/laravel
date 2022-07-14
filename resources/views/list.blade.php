<h2> User List </h2>

<div>
    <div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{$error}}
            @endforeach
        @endif
       
        @if (isset($showData))
          <form action ="/userUpdate" method="post">
            @csrf
            <p><input type="text" name="name" value="{{$showData['name']}}" placeholder="Enter Name"></p>
            <span> @error('name')
                {{$message}}
            @enderror</span>
            <input type="hidden" name="id" value="{{$showData['id']}}">
            <p> <input type="text" name="email" value="{{$showData['email']}}" placeholder="Enter Email"></p>
            <span> @error('email')
                {{$message}}
            @enderror</span>
            <p> <input type="text" name="address" value="{{$showData['address']}}" placeholder="Enter Address"></p>
            <span> @error('address')
                {{$message}}
            @enderror</span>
        @else
        <form action ="userSaveData" method="post">
            @csrf
            <p><input type="text" name="name" placeholder="Enter Name"></p>
            <span> @error('name')
                {{$message}}
            @enderror</span>
            <p> <input type="text" name="email" placeholder="Enter Email"></p>
            <span> @error('email')
                {{$message}}
            @enderror</span>
            <p> <input type="text" name="address" placeholder="Enter Address"></p>
            <span> @error('address')
                {{$message}}
            @enderror</span>
        @endif
       <p> <input type="submit" value="Submit"></p>
    </div>
 
    @if (empty($showData))
    <table border="1px black" cellpadding="4" cellspacing="5">
        <thead>
                <tr>
                    <td> Id</td>
                    <td> Name</td>
                    <td> Email</td>
                    <td> Address</td>
                    <td> Actions </td>
                </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                <td> {{$user['id']}}</td>
                <td> {{$user['name']}}</td>
                <td> {{$user['email']}}</td>
                <td> {{$user['address']}}</td>
                <td><a href="{{"user/edit/".$user['id']}}">Edit</a>|<a href="user/delete/{{$user['id']}}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
        </table>
    
        <div>
        {{$users->links();}}
        </div>
    </div>
    @endif
<style>
  .w-5{
    display: none;
  }
</style>