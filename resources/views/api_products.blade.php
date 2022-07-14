<h3> Response from Product API</h3>

<table border="2px solid black">
        <tr>
        <td> Id</td>
        <td> Email</td> 
        <td> Name</td> 
        <td> Profile Photo</td> 
        </tr>
     
        @foreach ($users as $users)
            <tr>
            <td> {{$users['id']}} </td>
            <td> {{$users['email']}} </td>
            <td> {{$users['first_name'] .' '.$users['last_name']}} </td>
            <td> {{$users['avatar']}} </td>
            </tr>
        @endforeach
</table>