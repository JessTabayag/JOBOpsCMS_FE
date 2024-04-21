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
               
              <br>
              <br>
              <div class="card card-primary">
                      
                      <div class="card-body">
                        
                        <form action="" id="ticket-form" method="POST" enctype="multipart/form-data">
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
                                    
                           <input class="btn btn-success add-btn" type="submit" value="Create Ticket">
                         
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
        <div>                      
           
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
                    <tbody id="ticket-list">
                    
                            <tr>
                              <td class="align-middle">Carla</td>
                              <td class="align-middle">CCS</td>
                              <td class="align-middle">Repair Unit</td>   
                              <td class="align-middle">Monitor</td>
                              <td class="align-middle">Screen</td>
                              <td class="align-middle">Rey</td> 
                              <td class="align-middle">On Progress</td>
                              <td >  
                                <a href=""><button class="btn btn-info btn-sm view">View</button></a>
                                <a href="#"><button class="btn btn-warning btn-sm edit">Edit</button></a>
                                <a href="#"><button class="btn btn-danger btn-sm delete">Delete</button></a>
                              </td>                           
                            </tr>
                    </tbody>
                </table>

                <script>
                  var selectRow = null;

                  function showAlerts(message, className){
                    const div = document.createElement("div");
                    div.className = `alert alert-${className}`;

                    div.appendChild(document.createTextNote(message));
                    const container = document.querySelector(".container");
                    const main = document.querySelector(".main");
                    container.insertBefore(div, main);

                    setTimeout(() => document.querySelector(".alert").remove(), 3000);
                  }

                  function clearField(){
                    document.querySelector("#name").value = "";
                    document.querySelector("#department").value = "";
                    document.querySelector("#unit").value = "";
                    document.querySelector("#request").value = "";
                    document.querySelector("#assignedstaff").value = "";
                    document.querySelector("#description").value = "";
                    document.querySelector("#status").value = "";
                  }

                  document.querySelector("#ticket-list").addEventListener("submit", (e) =>{
                    e.preventDefault();

                    const name = document.querySelector("#name").value;
                    const name = document.querySelector("#department").value;
                    const name = document.querySelector("#unit").value;
                    const name = document.querySelector("#request").value;
                    const name = document.querySelector("#assignedstaff").value;
                    const name = document.querySelector("#description").value;
                    const name = document.querySelector("#status").value;

                    if(name== "" || department== "" || unit== "" || request== "" || assignedstaff== "" || description== "" || status== "" ||){
                      showAlert("Please fill in all field", "danger");
                    }
                    else{
                      if(selectedRow == null){
                          const list = document.querySelector("#ticket-list");
                          const row = document.createElement("tr");

                          row.innerHTML = `
                            <td>${name}</td>
                            <td>${department}</td>
                            <td>${unit}</td>
                            <td>${request}</td>
                            <td>${assignedstaff}</td>
                            <td>${description}</td>
                            <td>${status}</td>
                            <td>
                                <a href="index.blade.php"><button class="btn btn-info btn-sm view">View</button></a>
                                <a href="#"><button class="btn btn-warning btn-sm edit">Edit</button></a>
                                <a href="#"><button class="btn btn-danger btn-sm delete">Delete</button></a>
                            </td>
                          `;
                          list.appendChild(row);
                          selectedRow = null;
                          showAlert("Ticket Added", "success");
                      }
                    }
                    else{
                      selectedRow.children[0].textContent = name;
                      selectedRow.children[1].textContent = department;
                      selectedRow.children[2].textContent = unit;
                      selectedRow.children[3].textContent = request;
                      selectedRow.children[4].textContent = assignedstaff;
                      selectedRow.children[5].textContent = description;
                      selectedRow.children[6].textContent = status;
                      selectedRow = null;
                      showAlert("Ticket info Edited", "info");            
                    }

                    clearField();
                  });

                  document.querySelector("#ticket-list").addEventListener("click", (e) =>{
                    target = e.target;
                    if(target.classList.contains("edit")){
                      selectedRow = target.parentElement.parentElement;
                      document.querySelector("#name").value = selectedRow.children[0].textContent;
                      document.querySelector("#department").value = selectedRow.children[1].textContent;
                      document.querySelector("#unit").value = selectedRow.children[2].textContent;
                      document.querySelector("#request").value = selectedRow.children[3].textContent;
                      document.querySelector("#assignedstaff").value = selectedRow.children[4].textContent;
                      document.querySelector("#description").value = selectedRow.children[5].textContent;
                      document.querySelector("#status").value = selectedRow.children[6].textContent;
                    }
                  });

                  document.querySelector("#ticket-list").addEventListener("click", (e) => {
                    target = e.target;
                    if(target.classList.contains("delete")){
                      target.parentElement.parentElement.remove();
                      showAlert("Ticket Data Deleted", "danger");
                    }
                  });
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
