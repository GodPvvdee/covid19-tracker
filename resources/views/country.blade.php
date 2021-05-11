@extends('layouts.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Орон нутаг</title>
</head>
<body>
    <div class="container">
    
        <table class="table">
                <tr>
                    <th>#</th>
                    <th>Байршил</th>
                    <th>Нийт</th>
                </tr>
                        @foreach ($my_vars['country'] as $aimag)
                        <tr>
                            <th>{{ $aimag->id }}</th>
                            <th>{{ $aimag->name }}</th>
                            <th>{{ $aimag->total  }}</th>
                        </tr>
                        @endforeach
        </table>
    </div>
</body>
</html>

@endsection