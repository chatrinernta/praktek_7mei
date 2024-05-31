<a href="praktek/create"> tambah siswa</a>
<table border="1">
    <tr>
    <td>nama</td>
    <td>kelas</td>
    <td>gender</td>
    <td>action</td>

</tr>
@foreach($student as $student)
<tr>

 <td> {{$student->name}}</td>
 <td> {{$student->class}}</td>
 <td> {{$student->gender}}</td>
<td> 
  <a href="praktek/{{$student->id}}/delete">hapus</a>
  <a href="praktek/{{$student->id}}/edit">edit</a>
</td>

</tr>
  @endforeach

</table>