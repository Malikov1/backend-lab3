<h1>Upload file</h1>
<form action="upload" method="POST" enctype="multipart/form-data">
@csrf 
<input type="text" placeholder="name" name="name">
<input type="text" placeholder="surname" name="surname">
<input type="email" placeholder="email" name="email">
<input type="file" name="file"> <br><br>
<button type="submit">upload</button>

</form>