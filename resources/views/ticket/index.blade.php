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
                <button class="btn btn-primary">New Ticket</button>
                <a href="{{ route('ticket.create') }}"></a>
              </div>                         
           
              <br>                
            <div class="card card-primary">
              <div class="navbar">
                <div>
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>                  
                </div>              
              </div>
              <div class="card-body">
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
                                <div class="btn-group align-middle" role="group" aria-label="Basic example">
                                  <a href="" type="button" class="btn btn-warning">
                                  <i class="fas fa-edit"></i>
                                  </a>

                                  <button class="btn btn-danger" onclick="confirmDelete('')">
                                  <i class="fas fa-trash"></i>
                                  </button>

                                  <script>
                                      function confirmDelete(url) {
                                          if (confirm('Delete?')) {
                                          // Create a hidden form and submit it programmatically
                                          var form = document.createElement('form');
                                          form.action = url;
                                          form.method = 'POST';
                                          form.innerHTML = '@csrf @method("delete")';
                                          document.body.appendChild(form);
                                          form.submit();
                                          }
                                      }
                                  </script>
                                {{-- </div> --}}
                              </td>                           
                            </tr>
                    </tbody>
                </table>

                <br>
                <br>
                <br>

                <br>
                <br>
                <br>
                <br>
              
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
