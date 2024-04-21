<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JOBOpsCMS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <style>
    .content {
    max-width: 1000px;
    margin: auto;
    background: white;
    padding: 10px;
   }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  

    <!-- Main content -->
    <section class="content">
      <div class="center">
        <div class="container-fluid">        
          <div class="center">
            
            <h1>My Ticket</h1>

            <br>
            <!-- general form elements -->
           
              <div>
                <a href="create.blade.php" class="btn btn-success btn-sm" title="Add New Student">New Ticket</a>
              </div>                         
           
              <br>                
            <div class="card card-primary">
              <div class="navbar">
                <div>
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>                  
                </div>              
              </div>
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-hover table-sm text-center">
                    <thead>
                        <tr>
                          <th>Requested by<i class='fas fa-sort'></i></a></th>
                          <th>Department<i class='fas fa-sort'></i></a></th>
                          <th>Unit<i class='fas fa-sort'></i></a> </th>   
                          <th>Request<i class='fas fa-sort'></i></a></th>
                          <th>Description<i class='fas fa-sort'></i></a> </th> 
                          <th>Assigned Staff<i class='fas fa-sort'></i></a> </th>
                          <th>Status<i class='fas fa-sort'></i></a> </th>  
                          <th>Actions</i></a> </th>                         
                        </tr>
                    </thead>
                    <tbody>
                    
                            <tr>
                              <td class="align-middle">Carla</td>
                              <td class="align-middle">CCS</td>
                              <td class="align-middle">Repair Unit</td>   
                              <td class="align-middle">Monitor</td>
                              <td class="align-middle">Screen</td>
                              <td class="align-middle">Rey</td> 
                              <td class="align-middle">On Progress</td>
                              <td class="align-middle">  
                                <a href="" title="View Ticket"><button class="btn btn-info btn-sm">View</button></a>
                                <a href="" title="View Edit"><button class="btn btn-primary btn-sm">Edit</button></a>
                                <a href="" title="View Delete"><button class="btn btn-danger btn-sm">Delete</button></a>
                              </td>                           
                            </tr>
                    </tbody>
                </table>               
            </div>            
        </div>

        <div class="card card-primary">
                      
                      <div class="card-body">
                        
                        <form action="" method="POST" enctype="multipart/form-data">
                          <div class="card-body">
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="name" class="form-control" id="Name" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputDepartment">Department</label>
                                <select name="department" id="department">
                                  <option value="cea">CEA</option>
                                  <option value="ccs">CCS</option>
                                  <option value="cas">CAS</option>
                                  <option value="ctde">CTDE</option>
                                  <option value="cthbm">CTHBM</option>
                                  <option value="chs">CHS</option>
                                </select>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputUnit">Unit</label>
                                <select name="unit" id="unit">
                                  <option value="" selected="selected">Please select unit</option>
                                </select>
                            </div>
          
                            <div class="form-group">
                              <label for="exampleInputRequest">Request</label>
                              <select name="request" id="request">
                                <option value="" selected="selected">Please select request</option>
                              </select>
                            </div>
      
                            <div class="form-group">
                              <label for="exampleInputAssignedStaff">Assigned Staff</label>
                              <select name="assignedstaff" id="assignedstaff">
                                <option value=""> Assigned Staff</option>
                              </select>
                            </div>
      
                            <div class="form-group">
                              <label for="exampleInputDescription">Description</label>
                              <textarea class="form-control" id="resources" name="resources"></textarea>
                            </div>
                            <div>
                              <label for="exampleInput">File Upload</label>
                              <input type="file" id="myFile" name="filename">
                            </div>
      
                          </div>
                          <!-- /.card-body -->
          
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary" onlick="add()">Create Ticket</button>
                          </div>
                        </form>
      
                        <script>
                          var unitObject = {
                              "Repair Unit": {
                                  "ICT": ["China"],
                                  "Printer": ["Angelo"],
                                  "Monitor": ["Jess"]
                              },
                              "Network Unit": {
                                  "Internet": ["China"],
                                  "LiveStream": ["Jess"]    
                              },
                              "MIS Unit": {
                                  "IDIssues": ["Angelo"],
                                  "Information": ["Jess"]
                              }
                          };
      
                          window.onload = function() {
                              var unitSel = document.getElementById("unit");
                              var requestSel = document.getElementById("request");
                              var assignedstaffSel = document.getElementById("assignedstaff");
                              
                              for (var x in unitObject) {
                                  unitSel.options[unitSel.options.length] = new Option(x, x);
                              }
                              
                              unitSel.onchange = function() {
                                  requestSel.length = 1;
                                  assignedstaffSel.length = 1;
                                  
                                  for (var y in unitObject[this.value]) {
                                      requestSel.options[requestSel.options.length] = new Option(y, y);
                                  }
                              };
                              
                              requestSel.onchange = function() {
                                  assignedstaffSel.length = 1;
                                  
                                  var z = unitObject[unitSel.value][this.value];
                                  for (var i = 0; i < z.length; i++) {
                                      assignedstaffSel.options[assignedstaffSel.options.length] = new Option(z[i], z[i]);
                                  }
                              };
                          };
                          </script>
                      </div>
                    </div>
              
              </div>
      </div>
    </section>
    
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
