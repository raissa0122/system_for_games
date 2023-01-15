<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>A basic HTML table</h2>

<table style="width:100%">
  <tr>
    <th>Name</th>
  </tr>
  <tr>
    @foreach ($genres as $genre )
        <td>{{ $genre->name }}</td>
    @endforeach
    
  </tr>
</table>

<p>To understand the example better, we have added borders to the table.</p>

</body>
</html>