<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="refresh" content="3;url={{ route('admin.login') }}" />
  <title>Splash Screen</title>
  <style>
    body {
      margin: 0; display: flex; justify-content: center; align-items: center; height: 100vh; background: #fff;
    }
    img {
      max-width: 80%; max-height: 80%;
    }
  </style>
</head>
<body>
  <img src="{{ asset('assets/22.jpg') }}" alt="Logo" />
</body>
</html>
