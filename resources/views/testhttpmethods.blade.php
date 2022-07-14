<h2> Test Http Methods ! </h2>

<div>
 <form action ="/getHttpMethodData" method="post">
    @csrf
    {{method_field('put')}}
    <p><input type="text" name="username" placeholder="Enter Username"></p>
    <p> <input type="password" name="password" placeholder="Enter Password"></p>
    <p> <input type="submit" value="Submit"></p>
</div>