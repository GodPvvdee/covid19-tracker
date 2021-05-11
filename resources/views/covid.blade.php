@extends('layouts.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>covid</title>
</head>
<body>

<div dir="ltr">

<div>
    <ul class="stats">
      <li>
        <span id="NewConfirmed">Шинээр бүртгэгдсэн</span>
        <?php if(isset($my_vars)){ echo $my_vars['NewConfirmed'];} ?>


      </li>
      <li>
        <span id="TotalConfirmed">Нийт батлагдсан</span>
        <?php if(isset($my_vars)){ echo $my_vars['TotalConfirmed'];} ?>

      </li>
      <li>
      <span id="TotalRecovered">Нийт эдгэрсэн</span>
        <?php if(isset($my_vars)){ echo $my_vars['TotalRecovered'];} ?>
     
      </li>
     
      <li>
        <span id="TotalDeaths" >Нийт нас барсан</span>
        <?php if(isset($my_vars)){ echo $my_vars['TotalDeats'];} ?>
      </li>
      <li>
        <span>Хаана</span>
        <span id="county">Дэлхийд</span>
      </li>
     
    </ul>
</div>
  

<br>

<style>

@import url("https://fonts.googleapis.com/css?family=Amiri:400,700|Roboto:400,900&display=swap");
body {
  font-family: Roboto, 'Amiri', sans-serif;
  background-color: #edf2f7;
  min-height: 100vh;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
 
  top:0;
}
.stats {
  display: grid;
  grid-template-columns: repeat(5, minmax(160px, 1fr));
  grid-gap: 20px;
}
.stats li {
  background: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1), 0 1px 2px 0 rgba(0,0,0,0.06);
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
}
.stats li span:first-child {
  margin-bottom: 15px;
  font-size: 16px;
}
.stats li span:last-child {
  font-weight: 900;
}
#NewConfirmed {
  color: #f56565;
}
#NewRecovered {
  color: #f56565;
}
#NewDeaths {
  color: #ed8936;
}
#TotalConfirmed {
  color: #48bb78;
}
#TotalDeaths {
  color: #a0aec0;
}
#TotalRecovered {
  color: #1d8348;
}
#county {
  color: #1d8348;
}
/* animation */


</style>
</body>
</html>
@endsection