<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Invoice</title>
    <style>
      h1:{
          color:blueviolet;
      }
      p:{
          color:cornflowerblue;
      }
      .page-break {
          page-break-after: always;
      }
    </style>
</head>
<body>
    <p>Invoice</p> 
    <h1 class="page-break">{{$data['name']}}</h1>
    <a href="{{route('export.pdf')}}" class="btn btn-info">Export</a> 
</body>
</html>