<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  </head>
  <body>
    <title> empolyee_trash</title>
      <div class="container">
        <a href="{{url('/register/view')}}">
        <button type="button" class="btn btn-primary d-inline-block m-2 float-right mt-3">Delete</button>
         </a>
         <a href={{url('/register/restore/')}}>
        <button type="button" class="btn btn-primary d-inline-block m-2 float-right mt-3">Restore</button>
         </a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name </th>
                    <th> Email </th>
                    <th>created_at </th>
                    <th>updated_at </th>
                    <th> Action </th>


                </tr>
            </thead>
            <tbody>
            @foreach ($employee as $employees )
           <tr>
            <td>{{$employees->name}}</td>
            <td>{{$employees->email}}</td>
            <td>{{$employees->created_at}}</td>
            <td>{{$employees->updated_at}}</td>
            <td >
                {{--
                    second metheod
                {{ url('/register/delete/')}}/{{$employees->id }}
                --}}
            <a href="{{route('employee.delete',['id' =>$employees->id])}}">
                <button type="button" class="btn btn-danger m-2">Delete</button>
            </a>
             <a href="{{route('employee.edit',['id' =>$employees->id])}}">
             <button type="button" class="btn btn-primary m-2">Restore</button>
            </a>
            </td>

           </tr>
           @endforeach
            </tbody>

        </table>

      </div>
  </body>
</html>
