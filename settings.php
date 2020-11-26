<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="settings.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            
            <a  class="navbar-brand" href="dashboard.php">Daily Expense Manager</a>
        </nav>
        
    
        
        <div class="container container-form">
            <div class="card-body">
            <h2 class="form-title">Edit Information</h2>
            <form action="" method="post">

                <div class="form-group row">
                    <label class="col-lg-5 col-form-label">Name</label>
                    <div class="col-lg-7">
                      <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-5 col-form-label">Password</label>
                    <div class="col-lg-7">
                      <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-5 col-form-label">Old Password</label>
                    <div class="col-lg-7">
                      <input type="password" class="form-control" id="old_pass" placeholder="Old Password">
                </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-5 col-form-label">New Password</label>
                    <div class="col-lg-7">
                      <input type="password" class="form-control" id="new_pass" placeholder="New Password">
                </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-5 col-form-label">Re-type Password</label>
                    <div class="col-lg-7">
                      <input type="password" class="form-control" id="re_pass" placeholder="Re-type Password">
                </div>
                </div>
            <div class="Change-btn">
                <input type="submit" value="Submit" class="btn btn-primary btn-md" id="Change"></input>
            </div>
            </form>
        </div>
        </div>

        
    </body>


</html>
