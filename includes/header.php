<?php include_once('db/conn.php'); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Cellux Lanka Admin Panel</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="assets/images/celuxfav.png" /> 
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="assets/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="assets/css/responsive.css">
      <!-- flatpickr -->
      <link rel="stylesheet" href="assets/css/flatpickr.min.css">
      <!-- error -->
      <link rel="stylesheet" href="assets/modules/izitoast/css/iziToast.min.css">
      <!-- data table -->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
      <!-- validation parsly -->
      <link rel="stylesheet" href="assets/css/validation.css">
      <!-- select 2 -->
      <link rel="stylesheet" href="assets/modules/select2/dist/css/select2.min.css">

   </head>
   <style>
.select2-container--default .select2-selection--single {
    height: 46px !important;
    padding: 10px 16px;
    font-size: 13px;

}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
    top: 85% !important;
}

.select2-container--default .select2-selection--single {
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
}
.mobile-nav {
        background: #fff;
        position: fixed;
        bottom: 0;
        height: 65px;
        width: 100%;
        display: flex;
        justify-content: space-around;
        z-index: 1000 !important;
        -webkit-transform: translateZ(1000px);
        transform: translate3d(0,0,0);
        -webkit-transform: translateZ(42px);
         padding: 10px;
         box-shadow: 5px 10px 8px 10px #888888;
        }
        .bloc-icon {
        justify-content: center;
        align-items: center;
        text-align: center;
        }
        .bloc-icon img {
        width: 35px;
        padding-top: 3px;
        }
        @media screen and (min-width: 600px) {
        .mobile-nav {
            display: none;
        }
        }
        
/* Add Animation */
.modal-content-image, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content-image {
    width: 100%;
  }
}
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal-image {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 2000; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content-image{
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}
   </style>
   <body>
      <!-- loader Start -->
      <!-- <div id="loading">
         <div id="loading-center">
         </div>
      </div> -->
      <!-- loader END -->
      <!-- loader END -->
      <!-- Wrapper Start -->
       <div class="wrapper">
         <?php 

          date_default_timezone_set('Asia/Colombo');
          $current_date = date('Y-m-d');
          $current_year = date('Y');
          $current_time = date('H:i:s');
          $user_id=$_SESSION['user_id'];

         ?>

