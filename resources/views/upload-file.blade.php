<h3>Upload file</h3>
<form action="uploadfile" method="POST" enctype="multipart/form-data">

@csrf

<input type="file" name="ufile" id="">

<button type="submit">Upload</button>


</form>