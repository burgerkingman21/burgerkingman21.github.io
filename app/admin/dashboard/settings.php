<?php
session_start();
if (!isset($_SESSION['user_id']) && !isset($_SESSION['username'])) {
    header('Location: /admin/login');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Coinbase</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon"
        href="https://images.ctfassets.net/q5ulk4bp65r7/3TBS4oVkD1ghowTqVQJlqj/2dfd4ea3b623a7c0d8deb2ff445dee9e/Consumer_Wordmark.svg"
        type="image/png">

    <style>
        body {
            background: #2c2c3f;
            background-size: cover;
            height: 100vh;
            margin: 0;
            color: #e0e0e0;
            font-family: 'Roboto Mono', Tahoma, Geneva, Verdana, sans-serif;
            padding-left: 220px;
            /* Adjust padding to give room for the navbar */
        }

        .navbar {
            background-color: #0000005d;
            padding: 10px;
            display: flex;
            flex-direction: column;
            /* Make the navbar vertical */
            height: 100%;
            /* Full height */
            box-shadow: 0 0 10px #242429;
            ;
            position: fixed;
            /* Fix the navbar to the left side */
            top: 0;
            /* Align to the top */
            left: 0;
            /* Align to the left */
            width: 200px;
            /* Set a width for the navbar */
        }

        .navbar a {
            color: #e0e0e0;
            text-decoration: none;
            padding: 10px;
            /* Add padding for clickable area */
            width: 100%;
            /* Full width for links */
            box-sizing: border-box;
            /* Include padding in width */
        }

        .navbar a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            /* Add hover effect */
        }

        .admin-nav {
            display: flex;
            flex-direction: column;
            /* Stack links vertically */
            align-items: center;
            /* Center the links horizontally */
            font-size: 25px;
        }

        .admin-nav-link {
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            font-size: 18px;
            transition: background-color 0.3s;
            margin-bottom: 0px;
            margin: 5px 0;
            /* Space out links */
            display: flex;
            flex-direction: column;
        }

        .admin-nav-link:hover {
            background-color: #0000005d;
        }

        .switch {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            width: 45px;
            height: 20px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ffffff3b;
            transition: .4s;
            border-radius: 20px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 20px;
            width: 20px;
            background-color: white;
            transition: .4s;
            border-radius: 20px;
        }

        input:checked+.slider {
            background-color: #28a745;
        }

        input:checked+.slider:before {
            transform: translateX(26px);
        }

        form {
            display: flex;
            align-items: center;
        }

        input[type="password"],
        button {
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            border: none;
        }

        input[type="password"] {
            background-color: #060505;
            color: #fff;
            border: 1px solid #ffffff3b;
        }

        button {
            background-color: #28a745;
            color: white;
            cursor: pointer;
        }

        .divider-line {
            height: 1px;
            /* Adjust the thickness/size of the line */
            background-color: #ffffff34;
            /* Default color */
            border-radius: 50px;
            /* Curved edges */
            width: 100%;
            /* Full width by default */
        }

        /* Optional: Custom width */
        .divider-line.short {
            width: 50%;
            /* Adjust the width of the divider */
        }

        .header-subheader-text {
            font-weight: bold;
            font-size: 15;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .header-box {
            flex: 1;
            height: 140px;
            border-radius: 10px;
            background-color: #0000005d;
            text-align: left;
            margin: 10px;
            padding: 25px;
            /* This will already create space at the top */
            line-height: normal;
            /* Reset line-height to avoid centering effect */
            box-shadow: 0 0 10px #242429;
            ;
        }

        .header-head-text {
            font-weight: bold;
            font-size: 19px;
            padding-bottom: 10px;
        }

        .header-subheader-text {
            font-weight: bold;
            font-size: 15;
        }

        .header-sub-text {
            font-weight: normal;
            font-size: 12;
        }

        .settings-container {
            height: 50%;
            width: auto;
            border-radius: 10px;
            background-color: #0000005d;
            margin: 0 10px;
            padding: 25px;
            box-shadow: 0 0 10px #242429;
        }

        .settings-box {
            padding: 17px;
            width: 50%;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .settings-sector {
            display: flex;
            padding-bottom: 25px;
            align-items: center;
            /* Aligns the text and switch vertically */
            gap: 15px;
            /* Space between the text and switch */
        }

        .settings-sub-text {
            font-weight: normal;
            color: #bdbdbd;
            font-size: 12;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div style="align-items: center; text-align: center;">
            <img src="/app/admin/dashboard/logo.png" alt="Logo"
                style="width: 50px; height: auto; padding-top: 25px; padding-bottom: 20px;">
            <div class="divider-line"></div>
            <div class="header-subheader-text" style="padding-top: 10px;">COINBASE PANEL</div>
        </div>
        <nav class="admin-nav">
            <div>
                <a href="/admin/settings" class="admin-nav-link">SETTINGS</a>
            </div>
            <div class="divider-line"></div>
            <div>
                <a href="/admin" class="admin-nav-link">DASHBOARD</a>
            </div>
        </nav>
    </div>
    <div class="header-container">
        <div class="header-box">
            <div class="header-head-text">Coinbase | Settings</div>

            <div class="header-sub-text">
                Built by the best, for the best.
            </div>
        </div>
        <div class="header-box">
            <div class="header-head-text">Lorem ipsum</div>

            <div class="header-sub-text">
                Lorem ipsum odor amet, consectetuer adipiscing elit. Duis molestie nulla; elementum auctor sagittis
                dignissim.
            </div>
        </div>
    </div>
    <div class="settings-container">
        <div class="settings-row">
            <div class="settings-sector">
                <div>
                    <div class="header-subheader-text"></div>
                    <div class="settings-sub-text"></div>
                </div>
            </div>
            <div class="settings-sector">
                <div>
                    <div class="header-subheader-text">Toggle Panel</div>
                    <div class="settings-sub-text">Manage the site's status</div>
                </div>
                <label class="switch">
                    <input type="checkbox" id="panelToggle">
                    <span class="slider"></span>
                </label>
            </div>
            <div class="settings-sector">
                <div>
                    <div class="header-subheader-text">Toggle Cloudflare</div>
                    <div class="settings-sub-text">Manage cloudflare's page </div>
                </div>
                <label class="switch">
                    <input type="checkbox" id="cloudflareToggle">
                    <span class="slider"></span>
                </label>
            </div>
            <div class="settings-sector">
                <div>
                    <div class="header-subheader-text">Change Admin Password</div>
                    <div class="settings-sub-text">Change the password used to sign-in</div>
                </div>
                <form id="passwordChangeForm">
                    <input id="passwordChange" type="password" placeholder="New Password" name="newPassword" required>
                    <button type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            fetch('/admin/actions?action=view_panel')
                .then(response => response.json())
                .then(data => {
                    var cloudflare = document.getElementById('cloudflareToggle');
                    var cloudflareSwitch = document.getElementsByClassName('switch')[1];
                    if (data.panel == 1) {
                        document.getElementById('panelToggle').checked = true;
                        cloudflare.disabled = false;
                        document.getElementsByClassName('switch')[1].style.opacity = 1;
                    } else {
                        cloudflare.disabled = true;
                        document.getElementsByClassName('switch')[1].style.opacity = 0.2
                    }
                });

            fetch('/admin/actions?action=view_cf')
                .then(response => response.json())
                .then(data => {
                    if (data.cf == 1) {
                        document.getElementById('cloudflareToggle').checked = true;
                    }
                });
        });

        document.getElementById('panelToggle').addEventListener('change', function () {
            var panelStatus = this.checked ? 'on' : 'off';
            fetch(`/admin/actions?action=turn_${panelStatus}_panel`)
                .then(response => response.json())
                .then(data => {
                    Swal.fire({
                        title: 'Status',
                        text: data.message,
                        icon: 'success',
                        confirmButtonText: 'Done',
                        background: '#060505',
                        color: '#e0e0e0',
                        fontFamily: 'Segoe UI',
                        fontSize: '16px'
                    })
                    var cloudflare = document.getElementById('cloudflareToggle');
                    if (panelStatus == 'off'){
                        document.getElementsByClassName('switch')[1].style.opacity = 0.2;
                        cloudflare.disabled = true;
                    }
                    else {
                        document.getElementsByClassName('switch')[1].style.opacity = 1;
                        cloudflare.disabled = false;
                    }
                });
        });

        document.getElementById('passwordChangeForm').addEventListener('submit', function (e) {
            e.preventDefault();
            var newPassword = document.getElementById('passwordChange').value;
            fetch(`/admin/actions?action=change_password&newPassword=${newPassword}`)
                .then(response => response.json())
                .then(data => Swal.fire({
                    title: 'Status',
                    text: data.message,
                    icon: 'success',
                    confirmButtonText: 'Done',
                    background: '#060505',
                    color: '#e0e0e0',
                    fontFamily: 'Segoe UI',
                    fontSize: '16px'
                }));
        });

        document.getElementById('cloudflareToggle').addEventListener('change', function () {
            var cloudflareStatus = this.checked ? 'on' : 'off';
            fetch(`/admin/actions?action=turn_${cloudflareStatus}_cf`)
                .then(response => response.json())
                .then(data => Swal.fire({
                    title: 'Status',
                    text: data.message,
                    icon: 'success',
                    confirmButtonText: 'Done',
                    background: '#060505',
                    color: '#e0e0e0',
                    fontFamily: 'Segoe UI',
                    fontSize: '16px'
                }));
        });

    </script>
</body>

</html>