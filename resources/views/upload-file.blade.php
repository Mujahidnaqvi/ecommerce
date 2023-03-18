<h3>Upload file</h3>

@if (session('uploaded'))
    <h3>Your File Uploaded Successfully <img src="{{ url('storage/app/'.session('uploaded')) }}" alt=""> </h3>
@endif

<form action="uploadfile" method="POST" enctype="multipart/form-data">

@csrf

<input type="file" name="ufile" id="">

<button type="submit">Upload</button>


</form>