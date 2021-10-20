<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        /* .work_profile h4{
    font-size: 18px;
    margin-top: 13px;
    color: #585656;
    font-weight: 500;
    border-bottom: 1px solid #ddd;
    padding-bottom: 9px;
    margin-bottom: 17px;
    padding-left: 10px;
}
.work_profile img
{height: 125px;
    border-radius: 50%;
    width: 125px;
    margin: auto;
    display: block;
}
.work_profile{
padding: 15px 0px;
}

.work_profile h3{
    font-size: 18px;
    color: #000;
    font-weight: 600;
    margin-bottom: 3px;
}

.profile_txt h6{
    font-size: 14px;
    font-weight: 500;
    color: #353638;
    margin-bottom: 13px;
    text-transform: uppercase;
    margin-top: 40px;
}

.profile_txt h4{
    font-size: 17px;
    color: #000;
  
}
.profile_txt h2{
font-size: 31px;
font-weight: 600;
}
.profile_txt p{
    font-size: 15px;
    font-weight: 400;
    color: #000;
}
.profile_txt p span{
    float: right;
}

.profile_txt i{
padding-right: 5px;
}
.profile_txt h5{
    font-size: 17px;
    color: #016ff9;
    margin-bottom: 24px;
    font-weight: 600;
}

.profile_txt{
    padding: 20px 25px;
}

.profile_txt h2 span{
    font-size: 13px;
    padding-left: 15px;
    color: #243b58;
}

.book_mrk{
    float: right;
    top: 22px;
    position: relative;
    font-size: 14px !IMPORTANT;
    color: #858687 !important;
} */


.main-body {
    padding: 15px;
}
/* .card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
} */

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border-radius: .25rem;
    box-shadow: none;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
    </style>

</head>
<body>
    <div class="d-flex minhyt80" id="wrapper">
        <div class="" id="sidebar-wrapper">
          <app-left-menu></app-left-menu>
        </div>
      
        <div class="" id="page-content-wrapper">
    <app-header> </app-header>
     
    <!-- <div class="container-fluid bckgry px-5 pt-4 ">
        
       <div class="row">
            <div class="col-md-3 col-lg-3 col-12 col-sm-6 col-12">
                <div class="card shadow-none">
                <div class="work_profile">
              <img src="../../../assets/images/profile.png" alt="">
              <h4>Work</h4>
            <div class="px-2">
              <h3>Noida Sector  <span class="badge badge-primary pull-right">Primary</span> </h3>
              <p> 170 William Street, Delhi . </p>
              <h3>Lucknow  <span class="badge badge-primary pull-right">Secondary</span> </h3>
              <p> 175 Gomati Nagar,  UP. </p>
            </div>
              <h4>Skills</h4>
              <div class="px-2">
              <h6>Branding</h6>
              <h6>UI/ UX</h6>
              <h6>Web Design</h6>
              <h6>Packaging</h6>
              </div>
    
            </div></div>
            </div>
            <div class="col-md-8 col-lg-8 col-12 col-sm-8 col-12">
                <div class="card shadow-none">
             <div class="profile_txt">
            <h2>Kishan Kumar <span> <i class="fa fa-map-marker"></i> New Delhi </span>   </h2>
            <h5>Frondend Developer</h5>
    
           <h4>   <i class="fa fa-user"></i> About </h4>
           <h6>Contact Information</h6>
           <div class="col-md-6">
             <p> Phone:  <span>  +91-8400721219 </span>  </p>
             <p> Address:  <span>  170 William Street, Delhi . </span>  </p>
             <p> Email:  <span> kishansahaniq313@gmail.com </span>  </p>
             <p> Site:  <span>  kishankumar.com</span>  </p>
           </div>
            
           <h6>Basic Information</h6>
           <div class="col-md-6">
            <p> Birthday:  <span>  13 Feb, 1996 </span>  </p>
            <p> Gender:  <span>  Male </span>  </p>
          </div>
    
    
             </div>
            </div>
            </div>
        </div> 
         
    
    </div> -->
    
    
    <div class="container-fluid">
        <div class="main-body">
        
            
        
              <div class="row ">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="../../../assets/images/profile.png" alt="" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <h4>K.K. Sahani</h4>
                          <p class="text-secondary mb-1">Full Stack Developer</p>
                          <p class="text-muted font-size-sm">Saket, New Delhi 222000</p>
                        
                          <button class="btn btn-outline-primary">Message</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                        <span class="text-secondary">https://sahani.com</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                        <span class="text-secondary">sahani</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                        <span class="text-secondary">@sahani</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                        <span class="text-secondary">sahani</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                        <span class="text-secondary">sahani</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                         Kishan Kumar
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          kishansahaniq313@gmail.com
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          (239) 816-9029
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Mobile</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          (320) 380-4539
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            Saket, New Delhi 222000
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <a class="btn btn-info "  href="#">Edit</a>
                        </div>
                      </div>
                    </div>
                  </div>
    
                  <div class="row gutters-sm">
                    <div class="col-sm-6 mb-3">
                      <div class="card h-100">
                        <div class="card-body">
                          <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                          
                          <div class="col-sm-12">

                          <small>Web Design</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>Website Markup</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>One Page</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>Mobile Template</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>Backend API</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                      <div class="card h-100">
                        <div class="card-body">
                          <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                          <small>Web Design</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>Website Markup</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>One Page</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>Mobile Template</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>Backend API</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
    
    
    
                </div>
              </div>
    
            </div>
        </div>
        <div class="container-fluid bckgry px-5 pt-4 ">
    
          <div class="row">
              <div class="col-md-3 col-lg-3 col-12 col-sm-6 col-12">
                  <div class="card shadow-none">
                  <div class="work_profile">
                <img src="{{emp_img}}" alt="">
                <!-- <h4>Work</h4> -->
              <!-- <div class="px-2">
                <h3>Noida Sector  <span class="badge badge-primary pull-right">Primary</span> </h3>
                <p> 170 William Street, Delhi . </p>
                <h3>Lucknow  <span class="badge badge-primary pull-right">Secondary</span> </h3>
                <p> 175 Gomati Nagar,  UP. </p>
              </div> -->
                <!-- <h4>Skills</h4>
                <div class="px-2">
                <h6>Branding</h6>
                <h6>UI/ UX</h6>
                <h6>Web Design</h6>
                <h6>Packaging</h6>
                </div> -->
      
              </div></div>
              </div>
              <div class="col-md-8 col-lg-8 col-12 col-sm-8 col-12">
                  <div class="card shadow-none">
               <div class="profile_txt">
              <h2> {{emp_name}}
                <!-- <span> <i class="fa fa-map-marker"></i> New Delhi </span>    -->
              </h2>
              <h5>{{emp_desg}}</h5>
      
             <!-- <h4>   
               <i class="fa fa-user"></i> About 
              </h4> -->
             <h6>Employee Information</h6>
             <div class="col-md-6">
               <p> Mobile No:  <span>  +91-{{emp_mobile}} </span>  </p>
               <p> Email :  <span>  {{emp_email}} . </span>  </p>
               <p> Date of Birth:  <span> {{emp_dob | date : 'dd-MMM-yyyy'}} </span>  </p>
               <p> Date of Joining:  <span> {{emp_doj  | date : 'dd-MMM-yyyy'}}</span>  </p>
             </div>
              
             <!-- <h6>Basic Information</h6>
             <div class="col-md-6">
              <p> Birthday:  <span>  13 Feb, 1996 </span>  </p>
              <p> Gender:  <span>  Male </span>  </p>
            </div> -->
      
      
               </div>
              </div>
              </div>
          </div>
           
      
      </div>
    
</body>
</html>