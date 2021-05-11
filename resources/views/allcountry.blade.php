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
                    <th>Country</th>
                    <th>TotalConfirmed</th>
                    <th>TotalDeaths</th>
                    <th>TotalRecovered</th>
                </tr>
                        @foreach ($my_vars['allcountry'] as $all)
                        <tr>
                            <th>{{ $all->Country }}</th>
                            <th>{{ $all->TotalConfirmed }}</th>
                            <th>{{ $all->TotalDeaths  }}</th>
                            <th>{{ $all->TotalRecovered  }}</th>
                            
                        </tr>
                        @endforeach
        </table>
    </div>
</body>
</html>

@endsection