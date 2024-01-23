<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
        <div class="container mt-3" style="center">
        <a href="create.php"class="btn btn-sm btn-success float-end">Add user</a>
        <table class="table">
        <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
                </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Asraf</td>
            <td>asraf@info.net</td>
            <td>09859856</td>
            <th>
            <a href="index.php"class="btn btn-sm btn-success">Edit</a>
            <a href="index.php"class="btn btn-sm btn-danger">Delete</a>
                </th>
            </tr>
        </tbody>

        </div>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>