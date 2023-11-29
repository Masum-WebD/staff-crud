<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <section class="w-50 bg-body-secondary mx-auto my-5">
        <form class="p-4" action="{{route('staff.update',$staff->id)}}" method="post">
            @csrf
            @method('put')
            <div class="form-group mb-1">
              <label for="exampleInputEmail1" >Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter Name" name="name" value="{{$staff->name}}"  required>
            </div>
            <div class="form-group mb-1">
                <label for="exampleInputPassword1">Positon</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="position">
                  <option selected>Select Position</option>
                  @foreach($designations as $key => $desig)
                  <option value="{{$desig->id}}" @if($staff->deg_id == $desig->id) selected @endif> {{ $desig->name }} </option>
                  @endforeach
                </select>
              </div>
              <div class="form-group mb-1">
                <label for="exampleInputPassword1">Date of birth </label>
                <input type="date" class="form-control" value="{{$staff->birth_date}}" id="exampleInputPassword1" placeholder="Select date" name="date" required>
              </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
