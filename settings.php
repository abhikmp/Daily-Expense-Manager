<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="settings.css">
    </head>

    <body>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top navbar-header">
            <a class="navbar-brand" >Daily Expense Manager</a>
        </div>


    </style>
        
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
