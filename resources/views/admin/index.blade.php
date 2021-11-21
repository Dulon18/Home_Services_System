<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    
    <link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://fontawesome.com/v5.15/icons?d=gallery&p=2&m=free">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
    <!-- css file -->
    <link rel="stylesheet" href="{{url('Backend/css/style.css')}}">
    <!-- bootstraap file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <div class="contain">
       @include('admin.partials.sidebar')
        <!-- header start -->

         <div class="main">

         @include('admin.partials.header')
               <!-- header End -->
              <!-- card start -->
            @yield('content')
                 
                <!-- <div class="card">
                    <div>
                        <div class="numbers">25</div>
                        <div class="cardname">Total Sevices Provider</div>
                    </div>
                </div> -->
            <!-- card end -->
  
         </div></div>
      <!-- js code -->
      <script>
          function toggleMenu(){
              let toggle = document.querySelector('.toggle');
              let sidebar= document.querySelector('.sidebar');
              let main = document.querySelector('.main');
              toggle.classList.toggle('active');
              sidebar.classList.toggle('active');
              main.classList.toggle('active');
              
          }
      </script>
      
    
</body>
</html>