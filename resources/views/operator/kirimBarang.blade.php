<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Indoexpress</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../stisla/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../stisla/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('stisla/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/assets/css/components.css') }}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <!-- NAVBAR -->
        @include('operator/header')
      <!-- /NAVBAR -->
      <div class="main-sidebar">
      <!-- SIDEBAR -->
        @include('operator/sidebar')
      <!-- /SIDEBAR -->
      </div>-
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                </div>
          </div>

          <div class="section-body">
           <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <a href="" class="btn btn-secondary">Tambah Data</a>
                      <table class="table table-striped" id="table-1">
                      <thead>
                          <tr>
                          <th class="text-center">
                              #
                          </th>
                          <th>Task Name</th>
                          <th>Progress</th>
                          <th>Members</th>
                          <th>Due Date</th>
                          <th>Status</th>
                          <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                          <td>
                              1
                          </td>
                          <td>Create a mobile app</td>
                          <td class="align-middle">
                              sdkjfnsd
                          </td>
                          <td>
                              sdhsdk
                          </td>
                          <td>2018-01-20</td>
                          <td><div class="badge badge-success">Completed</div></td>
                          <td>
                              <a href="#" class="btn btn-warning">Edit</a>
                              <a href="#" class="btn btn-danger">hapus</a>
                          </tr>
                          <tr>
                          <td>
                              2
                          </td>
                          <td>Redesign homepage</td>
                          <td class="align-middle">
                            sdfjsdf
                          </td>
                          <td>
                              dsfhsdhs
                          </td>
                          <td>2018-04-10</td>
                          <td>
                              <div class="badge badge-info">Todo</div>
                          </td>
                          <td>
                              <a href="#" class="btn btn-warning">Edit</a>
                              <a href="#" class="btn btn-danger">hapus</a>
                          </td>
                          </tr>
                          <tr>
                          <td>
                              3
                          </td>
                          <td>Backup database</td>
                          <td class="align-middle">
                            djhgfsdfsjdfd
                          </td>
                          <td>
                              sdkjfhgsajkhf
                          </td>
                          <td>2018-01-29</td>
                          <td>
                              <div class="badge badge-warning">In Progress</div>
                          </td>
                          <td>
                              <a href="#" class="btn btn-warning">Edit</a>
                              <a href="#" class="btn btn-danger">hapus</a>
                          </td>
                          </tr>
                          <tr>
                          <td>
                              4
                          </td>
                          <td>Input data</td>
                          <td class="align-middle">
                              dgfhsdfd
                          </td>
                          <td>
                              ashfas
                          </td>
                          <td>2018-01-16</td>
                          <td>
                              <div class="badge badge-success">Completed</div>
                          </td>
                          <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">hapus</a>
                          </td>
                          </tr>
                      </tbody>
                      </table>
                  </div>
                </div>
                <div class="card-footer bg-whitesmoke">
                Indoexpress @2021
                </div>
            </div>
          </div>
        </section>
      </div>
      <!-- FOOTER -->
      <footer class="main-footer">
        <div class="footer-left">
        Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
        2.3.0
    </div>    
</footer>
      <!-- /FOOTER -->
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('stisla/assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  <script src="../stisla/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="../stisla/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../stisla/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>

  <!-- Template JS File -->
  <script src="{{ asset('stisla/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('stisla/assets/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('stisla/assets/js/page/index.js') }}"></script>
</body>
</html>
