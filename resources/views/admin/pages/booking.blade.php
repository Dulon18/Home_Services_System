

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Pannel</title>
  <!-- bootstrap file -->
  <link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://fontawesome.com/v5.15/icons?d=gallery&p=2&m=free">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- s -->

  <style>
       .modal-header {
           background: #F7941E;
           color: #fff;
       }
      
       .required:after {
           content: "*";
           color: red;
       }
   </style>
</head>
<body>
  
<div class="container mt-5">

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Add</button>
<div class="modal" id="myModal">
    <div class="modal-dialog">
       <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Service Provider</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                         <label class="form-label required">First Name</label>
                        <input type="fname" class="form-control">
                    </div>
                    <div class="mb-3">
                         <label class="form-label required">Last Name</label>
                        <input type="lname" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label required">Profession</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Address</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Phone Number</label>
                        <input type="text" class="form-control" min="0" max="11">
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Experience</label>
                        <input type="text" class="form-control">
                    </div>
                   
                    <div class="mb-3">
                        <label class="form-label required">Salary</label>
                        <input type="text" class="form-control">
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn btn-danger">Cancel</button>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" 
crossorigin="anonymous"></script>



</body>
</html>
