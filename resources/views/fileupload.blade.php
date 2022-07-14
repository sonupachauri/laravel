<h2> File Upload !</h2>

<form action="/uploadFile" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <input type="submit" name="Upload FIle">
</form>