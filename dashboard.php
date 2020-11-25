<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="dashboard.css" />
</head>

<script>
  payment = 0
  function removePayment() {
    if(payment >= 1) {
      document.getElementById('paymentInput').remove();
      payment = 0
    }
  }

  function addCard() {
    if(payment >= 1) {
      removePayment()
    }
    payment = 1
    var obj = document.getElementById("paymentDetail");
    const div = document.createElement('div')
    div.innerHTML = `<div id="paymentInput">
                      <label for="exampleFormControlSelect1">Card</label>
                        <select class="form-control" id="modeform">
                          <!-- Fetching list from card added by particular user and showing it here -->
                          <option>HDFC Card</option>
                          <option>AXIS BANK</option>
                          <option>PNG CARD</option>
                        </select> 
                    </div>`;

    obj.appendChild(div);
    
  }

  function addBanking() {
    if(payment >= 1) {
      removePayment()
    }
    payment = 1
    var obj = document.getElementById("paymentDetail");
    const div = document.createElement('div')
    div.innerHTML = `<div id="paymentInput">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Bank Detail</label>
                        <input type="text" class="form-control" id="bankDetail" placeholder="Bank Detail">
                      </div>
                    </div>`;

    obj.appendChild(div);
    
  }

</script>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="dashboard.php" class="navbar-brand">Daily Expense Manager</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Hi User</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">View past transactions</a>
                        <a href="#" class="dropdown-item">Edit Information</a>
                        <a type="button" class="dropdown-item" data-toggle="modal" data-target="#myModal">Add card</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
<!-- Dialog box for add card -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">

          <!-- Form for entering card details -->
            <form>
              <div class="form-group">
                <label for="card name"><h5>Card name</h5></label>
                <input type="text" class="form-control" id="cardname" placeholder="card name">
              </div>
              <button type="submit" class="btn btn-primary" data-dismiss="modal">Submit</button>
            </form>
          </div>
          <!-- Form ending -->
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
   </div>
<!-- Dialog box for add card -->

<!-- First row for showing summary -->
    <div class="firstrow">
        <div class="row">
            <div class="col-6 row1col1">
                <div class="currentmonth">
                    <h2 id="currentmonthname">November</h2>
                    <div class="transactiondetails">
                        <p id="moneyspent">Total Money spent : <b>12345</b></p>
                        <p id="totallimit">Total Limit : <b>15000</b></p>
                        <p id="totalcredit">Overall Credit : <b>15000</b></p>
                        <p id="totaldebit">Overall Debit : <b>2655</b></p>
                    </div>
                </div>
            </div>
            <div class="col-6 row1col2">
                <div class="prevmonth">
                    <h2 id="prevmonthname">October</h2>
                    <div class="transactiondetails">
                        <p id="moneyspent">Total Money spent : <b>12345</b></p>
                        <p id="totallimit">Total Limit : <b>15000</b></p>
                        <p id="totalcredit">Overall Credit : <b>15000</b></p>
                        <p id="totaldebit">Overall Debit : <b>2655</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- First row for showing summary -->

<!-- Second row for adding details and showing latest transactions -->
    <div class="secondrow">
        <div class="row">
            <div class="col-6 row2col1">
                <h2 id="adddetails">Add details</h2>
                <div class="formentry">

                <!-- FORM FOR ENTERING TRANSACTION DETAILS -->
                    <form>
                        <div class="form-group">
                          <label class="control-label" for="date">Date</label>
                          <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="date" max="<?php echo date("Y-m-d"); ?>"/>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Title</label>
                          <input type="text" class="form-control" id="titleform" placeholder="Title">
                        </div>
                        <div class="form-group">
                          <label for="paymentType">Payment Type</label>
                        </div>  
                        <div class="form-group">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="paymentType" id="cashPayment" value="cashPayment" checked onclick="removePayment()">
                                <label class="form-check-label" for="inlineRadio2">Cash</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="paymentType" id="cardPayment" value="cardPayment" onclick="addCard()">
                                <label class="form-check-label" for="inlineRadio1">Card</label>
                              </div>
                              
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="paymentType" id="internetBanking" value="internetBanking" onclick="addBanking()">
                                <label class="form-check-label" for="inlineRadio2">Internet Banking</label>
                              </div>
                        </div>
                        <div class="form-group" id="paymentDetail"></div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Amount</label>
                            <input type="number" class="form-control" id="amountform" placeholder="Amount">
                        </div>
                        
                        <div class="form-group">
                          <label for="type">Type</label>
                        </div>  
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="debitform" value="debit" checked>
                                <label class="form-check-label" for="inlineRadio2">Debit</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="creditform" value="credit">
                                <label class="form-check-label" for="inlineRadio1">Credit</label>
                            </div>
                              
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                      
                </div>
            </div>
            <div class="col-6 row2col2">
                <h2 id="transactiondetailstable">Transaction details <button class="btn btn-primary" type="submit" style="margin-left: 25px;">View all</button> </h2>
                
                <div class="transactiontable">
                    <div class="table-responsive">
                        <table class="table table-hover table-dark">
                            <thead class="thead-dark">
                              <tr>
                                <th class="header" scope="col">Sl No.</th>
                                <th class="header" scope="col">Title</th>
                                <th class="header" scope="col">Amount</th>
                                <th class="header" scope="col">Mode</th>
                                <th class="header" scope="col">Type</th>
                                <th class="header" scope="col">Details</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Coffee</td>
                                <td>50</td>
                                <td>Card</td>
                                <td>Debit</td>
                                <td>
                                    <button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#exampleModal">
                                        More
                                      </button>
                                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              ...
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>