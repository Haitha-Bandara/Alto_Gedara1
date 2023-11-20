<style>
   .clock {
    position: absolute;
    top: 50%;
    left: 10%;
    transform: translateX(-50%) translateY(-50%);
    color: #1c1c1c;
    font-size: 20px;
    font-family: Orbitron;
    letter-spacing: 5px;
}
</style>
<!-- TOP Nav Bar -->
<div class="iq-top-navbar">
   <div class="iq-navbar-custom">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
         <div class="iq-menu-bt d-flex align-items-center">
            <div class="wrapper-menu">
               <div class="main-circle"><i class="ri-menu-line"></i></div>
               <div class="hover-circle"><i class="ri-close-fill"></i></div>
            </div>
            <div class="iq-navbar-logo d-flex justify-content-between ml-3">
               <a href="index.html" class="header-logo">
               <img src="assets/images/Logo(1).png" class="img-fluid rounded" alt="">
               </a>
            </div>
         </div>

         <div class="iq-search-bar">
            <div >  
    <h4 id="date"></h4>
    <h3 id="time"></h3></div>

         </div>
        
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-list">
               <li class="nav-item nav-icon">
                  <a href="https://growelllanka.com/" class="iq-waves-effect bg-success rounded text-dark"><i class="lab la-windows"></i><span class="ripple rippleEffect" ></a>
               </li>
            </ul>
         </div>
         
         <ul class="navbar-list">
            <li class="line-height">
               <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                  <img src="assets/images/user/1.jpg" class="img-fluid rounded mr-3" alt="user">
                  <div class="caption">
                     <h6 class="mb-0 line-height"><?php echo($_SESSION['first_name']." ".$_SESSION['last_name']); ?></h6>
                     <p class="mb-0"><?php //echo($_SESSION['type']); ?></p>
                  </div>
               </a>
               <div class="iq-sub-dropdown iq-user-dropdown">
                  <div class="iq-card shadow-none m-0">
                     <div class="iq-card-body p-0 ">
                        <div class="bg-info p-3">
                           <h5 class="mb-0 text-white line-height">Hello <?php echo($_SESSION['first_name']." ".$_SESSION['last_name']); ?></h5>
                           <span class="text-white font-size-12">Available</span>
                        </div>
                        <div class="d-inline-block w-100 text-center p-3">
                           <a class="bg-primary iq-sign-btn" href="logout" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
         </ul>
      </nav>
   </div>
</div>
<!-- TOP Nav Bar END -->
<script>
        function updateClock() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
            var day = now.getDate();
            var month = now.getMonth() + 1;
            var year = now.getFullYear();

            // Add leading zeros if needed
            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            day = day < 10 ? '0' + day : day;
            month = month < 10 ? '0' + month : month;

            var timeString = hours + ':' + minutes + ':' + seconds;
            var dateString = year + '-' + month + '-' + day;

            document.getElementById('time').innerHTML = timeString;
            document.getElementById('date').innerHTML = dateString;
        }

        // Call updateClock every second
        setInterval(updateClock, 1000);
    </script>