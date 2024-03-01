<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ config('app.name') }} - Register</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../node_modules/selectric/public/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    @stack('customStyleAuth')
    <style>
        /* The following styles are reused from the login page */
        .full-screen-card {
            height: 100vh;
            width: 100vw;
            margin: 0;
        }

        .input-container label {
            margin-bottom: 20px;
        }

        .full-height-card {
            height: 100vh;
            width: 100vw;
            margin: 0;
            padding: 0;
        }

        .card-body {
            height: 100vh;
            width: 100%;
            overflow: auto;
            margin: 0;
        }

        .rounded-input {
            border-radius: 15px;
        }

        .welcome-text {
            padding-left: 50px;
        }

        /* Container untuk input */
        .input-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 30px;
            margin-left: 50px;
            margin-right: 50px;

        }

        /* Input style */
        .input-container input[type="date"],
        .input-container input[type="text"],
        .input-container input[type="email"],
        .input-container input[type="password"] {
            border-radius: 15px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .input-container button {
            border-radius: 15px;
            padding: 10px;
        }

        .text-link {
            color: #1F3C88;

        }

        .text-link-register {
            color: #EE6F57;
        }

        .role-card {
            cursor: pointer;
            width: 230px;
            height: 80px;
            overflow: hidden;
            border-radius: 15px;
        }

        .role-card img {
            width: auto;
            width: 35%;
        }

        .role-card:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .role-card.active {
            box-shadow: 0 0 20px #070D59;
        }

        #user-pengajar-card {
            background-color: #d2d8e7;
        }

        #user-card {
            background-color: #d2d8e7;
        }

        .role-card .card-body {
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .role-card .card-body h4 {
            margin-left: 30px;
            color: #070D59;
            font-weight: bold;
        }

        .btn.btn-lg {
            padding: 0.55rem 1.5rem;
            font-size: 12px;

        }
    </style>
</head>

<body>
    <div id="app">
        <section class="section full-screen-section p-0">
            <div class="row d-flex justify-content-between m-0">
                @yield('pageAuth')
            </div>
        </section>
    </div>

    <script>
        // Script to handle role selection
        function selectRole(role) {

            // const penjual = document.getElementById(role + 'user-penjual-card').innerHTML;
            // const pengguna = document.getElementById(role + 'user-pengguna-card').innerHTML;
            const nikInput = document.getElementById("penjual-nik");
            const dateInput = document.getElementById("penjual-tanggal");

            var cards = document.getElementsByClassName('role-card');

            for (var i = 0; i < cards.length; i++) {
                cards[i].classList.remove('active');
            }

            if (role === 'penjual') {
                nikInput.style.display = 'block';
                dateInput.style.display = 'block';
            } else if (role === 'pengguna') {
                nikInput.style.display = 'none';
                dateInput.style.display = 'none';
            }
        }
    </script>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="../node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="../node_modules/selectric/public/jquery.selectric.min.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/auth-register.js"></script>
    @stack('customScriptAuth')
</body>

</html>
