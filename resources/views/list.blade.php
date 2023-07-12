<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

        </style>
        </head>
        <body>
    <center><h2>Candidates List</h2></center>

        <table class="table" id="customers">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Experience</th>
      <th scope="col">Skill Set</th>
      <th scope="col">Preferred Salary</th>
      <th scope="col">Notice Period</th>
    </tr>
  </thead>
  <tbody>
  @foreach($candidate as $resp)
    <tr>
      <th scope="row">{{ $resp->id}}</th>
      <td>{{ $resp->name}}</td>
      <td>{{ $resp->email}}</td>
      <td>{{ $resp->phone}}</td>
      <td>{{ $resp->experience}}</td>
      <td>{{ $resp->skill_set}}</td>
      <td>{{ $resp->preferred_salary}}</td>
      <td>{{ $resp->Notice_period}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>