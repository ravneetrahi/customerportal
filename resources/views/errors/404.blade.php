<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Page not found</title>
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type='text/css'>
  <link href="{{ asset('css/default.css') }}" rel="stylesheet" type='text/css'>
  <style>
.notfoundpanel {
  width: 720px;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -55%);
}
@media (max-width: 640px) {
  .notfoundpanel {
    width: auto;
    position: static;
    transform: none;
    padding: 20px;
  }
}
.notfoundpanel h1 {
  font-size: 200px;
  font-weight: 700;
  line-height: 160px;
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, sans-serif;
  color: #9e0b3d;
  margin: 0 0 20px;
}
@media (max-width: 640px) {
  .notfoundpanel h1 {
    font-size: 100px;
    line-height: 100px;
  }
}
.notfoundpanel h3 {
  margin-top: 0;
  font-weight: 300;
  font-size: 26px;
  color: #9e0b3d;
  margin-bottom: 35px;
}
@media (max-width: 640px) {
  .notfoundpanel h3 {
    font-size: 24px;
  }
}

.notfoundpanel .list-inline {
  text-align: left;
}
@media (max-width: 560px) {
  .notfoundpanel .list-inline > li:last-child {
    display: block;
    float: none !important;
    text-align: left;
    margin-top: 10px;
  }
}
@media (max-width: 360px) {
  .notfoundpanel .list-inline > li {
    display: block;
    float: none;
  }
  .notfoundpanel .list-inline > li + li {
    margin-top: 5px;
  }
}

.notfoundpanel p {
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, sans-serif;
  color: #3b4354;
}
</style>
<body>
<section>
  <div class="notfoundpanel">
    <h1>404!</h1>
    <h3>The page you are looking for has not been found.</h3>
    <button onclick="goBack()" class="btn btn-default">Go back</button>
    <button onclick="location.href='{{ url('') }}';" class="btn btn-custom">Dashboard</button>
   <script>
   function goBack() {
       window.history.back();
   }
   </script>

  </div>
</section>
</body>
</html>
