
<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Student-Register-form</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link href="./dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="main-wrapper">
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <div class="preloader">
        <div class="lds-ripple">
          <div class="lds-pos"></div>
          <div class="lds-pos"></div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <div
        class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
          bg-dark
        "
      >
        <div class="auth-box bg-dark border-top border-secondary">
          <div>
            <div class="text-center pt-3 pb-3">
              <span class="db"
                ><img src="./assets/images/logo.png" alt="logo"
              /></span>
            </div>
            <!-- Form -->
            <form class="form-horizontal mt-3" method="post" action="student_registration.php">

              <!-- role -->
              <div class="form-group">
                 
                <input type="hidden" name="role" id="role" value="1" />
            </div>
           
              <!--firstname-->
              <div class="row pb-4">
                <div class="col-12">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-success text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-account fs-4"></i
                      ></span>
                    </div>
                    
                    <input
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="firstname"
                      aria-label="firstname"
                      aria-describedby="basic-addon1"
                      name="firstname"
                      id="firstname"
                      required
                    />
                    </div>
                  
                       <!--Middle Name-->
                    <div class="row pb-4">
                      <div class="col-12">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span
                              class="input-group-text bg-success text-white h-100"
                              id="basic-addon1"
                              ><i class="mdi mdi-account fs-4"></i
                            ></span>
                          </div>
                          
                          <input
                            type="text"
                            class="form-control form-control-lg"
                            placeholder="middlename"
                            aria-label="middlename"
                            aria-describedby="basic-addon1"
                            name="middlename"
                            id="middlename"
                            required
                          />
                          </div>

                    

                    <!--Last Name-->
                    <div class="row pb-4">
                      <div class="col-12">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span
                              class="input-group-text bg-success text-white h-100"
                              id="basic-addon1"
                              ><i class="mdi mdi-account fs-4"></i
                            ></span>
                          </div>
                          
                          <input
                            type="text"
                            class="form-control form-control-lg"
                            placeholder="lastname"
                            aria-label="lastname"
                            aria-describedby="basic-addon1"
                            name="lastname"
                            id="lastname"
                            required
                          />
                         </div>
                          <!--gender-->
                          <div class="row pb-4">
                            <div class="col-12">
                              <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                 
                                  <span
                                    class="input-group-text bg-success text-white h-100"
                                    id="basic-addon1"
                                    ><i class="mdi mdi-human-male-female fs-4"></i
                                  ></span>
                                 
                               </div>
                         <select name="gender" class="form-control form-control-lg" class="input-group-text text-white h-100" >
                         <option >select gender</option>
                         <option value="female">female</option>
                         <option value="male">male</option>   
                      </select>
                    </div>
                         
                    
                    
                        
                          <!--DOB-->
                    <div class="row pb-4">
                      <div class="col-12">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span
                              class="input-group-text bg-success text-white h-100"
                              id="basic-addon1"
                              ><i class="mdi mdi-calendar-text"></i
                            ></span>
                          </div>
                          
                          <input
                            type="date"
                            class="form-control form-control-lg"
                            aria-label="date"
                            aria-describedby="basic-addon1"
                            name="date_of_birth"
                            id="date_of_birth"
                            required
                          />
                          </div>

                          <!--Contact NO-->
                    <div class="row pb-4">
                      <div class="col-12">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span
                              class="input-group-text bg-success text-white h-100"
                              id="basic-addon1"
                              ><i class="mdi mdi-account-circle"></i
                            ></span>
                          </div>
                          
                          <input
                            type="text"
                            class="form-control form-control-lg"
                            placeholder="contact_no"
                            aria-label="contact_no"
                            aria-describedby="basic-addon1"
                            name="contact_no"
                            id="contact_no"
                            required
                          />
                          </div>


                  <!-- email -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-danger text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-email fs-4"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="Enter email_id"
                      name="email_id"
                      id="email_id"
                      aria-label="email_id"
                      aria-describedby="basic-addon1"
                      required
                    />
                  </div>
                  <!--password-->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-warning text-white h-100"
                        id="basic-addon2"
                        ><i class="mdi mdi-lock fs-4"></i
                      ></span>
                    </div>
                    <input
                      type="password"
                      class="form-control form-control-lg"
                      placeholder="Enter Password"
                      aria-label="password"
                      name="password"
                      id="password"
                      aria-describedby="basic-addon1"
                      required
                    />
                  </div>
                  <!--ConfirmPassoword-->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-info text-white h-100"
                        id="basic-addon2"
                        ><i class="mdi mdi-lock fs-4"></i
                      ></span>
                    </div>
                    <input
                      type="password"
                      class="form-control form-control-lg"
                      placeholder="Enter Confirm Password"
                      aria-label="confirmPassword"
                      aria-describedby="basic-addon1"
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="row border-top border-secondary">
                <div class="col-12">
                  <div class="form-group">
                    <div class="pt-3 d-grid">

                      <button
                      name="register_btn"
                        class="btn btn-block btn-lg btn-info"
                        type="submit"
                      >
                        Sign Up
                      </button>

                      <br>
                      <div class="text-center text-primary fw-bold"><small>Already Registered? <a href="index.html"
                        class="text-white">Login Now</a></small>
                    </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
      $(".preloader").fadeOut();
    </script>
    </form>
  </body>
</html>