<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Admin - Specie</title>

	<!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--Custom Style-->
	<link href="main.css" rel="stylesheet">
	<!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">



</head>
<body>

	<nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0 nav2">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
  </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-1 mb-1 text-muted">
              <span>Home</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="sidebar"></span>
              </a>
            </h6>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="Dashboard.php">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Maintenance</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="shield"></span>
              </a>
            </h6>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="Family.php">
                  <span data-feather="book"></span>
                  Family 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Genus.php">
                  <span data-feather="book"></span>
                  Genus
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="book"></span>
                  Specie <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Characteristics.php">
                  <span data-feather="book-open"></span>
                  Characteristics
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="CultureMedia.php">
                  <span data-feather="clipboard"></span>
                  Culture Media
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Preservation.php">
                  <span data-feather="battery"></span>
                  Preservation
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Storage.php">
                  <span data-feather="archive"></span>
                  Storage
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Transaction</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="repeat"></span>
              </a>
            </h6>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="MicrobeCollection.php">
                  <span data-feather="package"></span>
                  Microbe Collection
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="MicrobeRequest.php">
                  <span data-feather="clipboard"></span>
                  Microbe Request
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="MicrobeDeposit.php">
                  <span data-feather="clipboard"></span>
                  Microbe Deposit Request
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="InputApprovals.php">
                  <span data-feather="check-square"></span>
                  Input Approvals
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Utilities</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="settings"></span>
              </a>
            </h6>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="Members.php">
                  <span data-feather="users"></span>
                  Admins
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Members2.php">
                  <span data-feather="users"></span>
                  Lab Personnel
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Query/Reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="database"></span>
              </a>
            </h6>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="Historylog.php">
                  <span data-feather="book"></span>
                  History Logs
                </a>
              </li>
            </ul>

            <ul class="nav flex-column mt-3 mb-4">
              <li class="nav-item">
                <a class="nav-link" href="login.php">
                  <span data-feather="log-out"></span>
                  Logout
                </a>
              </li>
            </ul>


          </div>
		    </nav>
		
		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Specie</h1>

                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#SpecieModal">
                        <span data-feather="plus-circle"></span>
                        Add Data
                        </button>
                    </div>
                </div>
            </div>

            

            <div class="row mt-4">
                <div class="col-md-6"> 
                    <div class="d-flex justify-content-end"> 
                        <div class="space">
                            <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#Search">
                            <span data-feather="search"></span>
                            Search
                            </button>
                        </div>
                            <input type="text" class="form-control" id="charsearch" placeholder="">
                        </div>
                    </div>
                </div>


                <div class="card mb-4 mt-2">
                    <div class="card-body">
                        <h5 class="card-title">Specie</h5>
                        <div class="tables">
                            <div class="table-responsive">
                                <div class="container">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sample</th>
                                                <th scope="col">Sample</th>
                                                <th scope="col">Sample</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">SAMPLE</td>
                                                <td>SAMPLE</td>
                                                <td>SAMPLE</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">SAMPLE</td>
                                                <td>SAMPLE</td>
                                                <td>SAMPLE</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">SAMPLE</td>
                                                <td>SAMPLE</td>
                                                <td>SAMPLE</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





		  
        </main>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="SpecieModal" tabindex="-1" role="dialog" aria-labelledby="SpecieModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-light" id="SpecieModal">Add Specie Data</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label for="colBSL">Genus</label>
                            <select class="custom-select d-block w-100" id="colBSL" required>
                                <option value="">...</option>
                                <option>sample</option>
                                <option>sample</option>
                                <option>sample</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid choice.
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="SpecieName">Specie Name</label>
                            <input type="text" class="form-control" id="SpecieName" placeholder="....">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-danger">Confirm</button>
                </div>
            </div>
        </div>
    </div>
	  




	<!--Javascripts-->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap4.min.js"></script>
  <script src="js/sweetalert.min.js"></script>


	<!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>



	

</body>
</html>