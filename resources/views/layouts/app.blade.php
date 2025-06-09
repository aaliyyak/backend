<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Dashboard</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>

  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
      font-size: 20px;
    }
    .sidebar {
      background-color: #009ccf;
      height: 140vh;
      padding-top: 60px;
      color: white;
      box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }
    .sidebar h4 {
      text-align: center;
      margin-bottom: 40px;
      font-size: 24px;
    }
    .sidebar a {
      color: white;
      display: flex;
      align-items: center;
      padding: 14px 20px;
      margin: 12px 15px;
      border-radius: 10px;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    .sidebar a i {
      margin-right: 12px;
      font-size: 20px;
      width: 25px;
      text-align: center;
    }
    .sidebar a:hover {
      background-color: #007ba7;
      padding-left: 30px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .footer {
      text-align: center;
      padding: 20px;
      color: #666;
      font-size: 14px;
    }
    .content {
      background-color: white;
      padding: 30px;
      flex-grow: 1;
    }
    @media (max-width: 768px) {
      .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 250px;
        height: 100vh;
        transform: translateX(-100%);
        z-index: 1045;
      }
      .sidebar.show {
        transform: translateX(0);
      }
      .content {
        padding: 15px;
      }
      #overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1040;
      }
      #overlay.show {
        display: block;
      }
      #sidebarToggle {
        display: inline-block;
        margin: 10px;
        font-size: 24px;
        color: #009ccf;
        cursor: pointer;
      }
    }
    @media (min-width: 769px) {
      #sidebarToggle {
        display: none;
      }
    }
  </style>
</head>
<body>
  <!-- Toggle Button -->
  <i id="sidebarToggle" class="fas fa-bars"></i>

  <!-- Overlay -->
  <div id="overlay"></div>

  <div class="d-flex">
    <div class="sidebar col-md-2 col-12" id="sidebar">
      <h4>Welcome Admin!</h4>
      <a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
      <a href="{{ route('fasilitas.index') }}"><i class="fas fa-building"></i> Fasilitas</a>
      <a href="{{ route('dosen.index') }}"><i class="fas fa-chalkboard-teacher"></i> Dosen</a>
      <a href="{{ route('kaprodi.index') }}"><i class="fas fa-user-tie"></i> Kaprodi</a>

      <!-- Logout Button di Sidebar -->
      <a href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
        <i class="fas fa-sign-out-alt"></i> Logout
      </a>
    </div>

    <div class="col-md-10 col-12 content">
      @yield('content')
      <div class="footer">
        <hr />
        Copyright © UNIVERSITAS INDO GLOBAL MANDIRI 2025
      </div>
    </div>
  </div>

  <!-- Modal Logout -->
  <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          Apakah Anda yakin ingin keluar dari akun?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <a href="{{ route('admin.logout') }}" class="btn btn-danger"
             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
          </a>
          <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#sidebarToggle').click(function () {
        $('#sidebar').toggleClass('show');
        $('#overlay').toggleClass('show');
      });

      $('#overlay').click(function () {
        $('#sidebar').removeClass('show');
        $(this).removeClass('show');
      });
    });
  </script>
</body>
</html>
