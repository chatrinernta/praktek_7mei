<form action="" method="post">
  @csrf
  nama <input type="text" value="{{$student->name}}" name="name"><br>
  @error('name')
  {{$message}} <br>
  @enderror
  kelas <input type="text" value="{{$student->class}}" name="class"><br>
  gender <input type="text" value="{{$student->gender}}" name="gender"><br>

<input type="submit">
</form>