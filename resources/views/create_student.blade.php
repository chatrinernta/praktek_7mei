<form action="" method="post">
  @csrf
  nama <input type="text" name="name"><br>
  @error('name')
  {{$message}} <br>
  @enderror
  kelas <input type="text" name="class"><br>

  gender <input type="text" name="gender"><br>

<input type="submit">
</form>