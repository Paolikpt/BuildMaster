<?php 
  use Illuminate\Support\Facades\Auth;

  $user = Auth::user();

  $current = null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Build master, Dashboard Client</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  
</head>
<body>
  
      
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center ">
        <a class="navbar-brand brand-logo " href="/dashboard"><h1 class="h2">BuildMaster<span class="text-warning">.</span></h1></a>
        <a class="navbar-brand brand-logo-mini" href="/dashboard"><img src="images/logo-mini.svg" alt="logo"/></a>
        
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Paramètres</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
              Paramètres
              </a>
              <a class="dropdown-item"  href="/logout">
                <i class="ti-power-off text-primary"></i>
                Déconnexion
              </a>
            </div>
          </li>
         
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
       
          
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
              <i class="icon-grid menu-icon bi bi-house"></i>
              <span class="menu-title">Accueil</span>
            </a>
          </li>
        
          <div class="text-center  mx-auto">
            <div class="my-4 text-center" ></div>

         </div>
          
        
          <li class="nav-item">
            <a class="nav-link" href="/user_projects">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Projets</span>
            </a>
          </li>
        
         <div class="text-center  mx-auto">
            <div class="my-4 text-center" ></div>

         </div>

       
          
        <li class="nav-item">
          <a class="nav-link" href="/user_taches">
            <i class="icon-contract menu-icon"></i>
            <span class="menu-title">Tâches</span>
          </a>
        </li>
        <div class="text-center  mx-auto">
          <div class="my-4 text-center" ></div>

       </div>
        <li class="nav-item">
          <a class="nav-link" href="/user_parametre">
            <i class="icon-head menu-icon"></i>
            <span class="menu-title">Paramètres</span>
          </a>
        </li>

         
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Projets de {{ $user->prenom }}</h3>
                </div>
                
              </div>
            </div>
          </div>
        

          <div class="card mb-5">
            <div class="card-body">
              <h5 class="card-title">Fonctionnalités</h5>
              <div class="row">
                <div class="col-md-6 mb-3 mx-auto">
                  <button type="button"  class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#myModal">
                    <i class=" bi bi-cloud-upload mr-3" style="scale: 2 !important"></i> Soumettre un projet
                  </button>
                  <!-- Le bouton -->



<!-- Le modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form class="forms-sample" method="POST" action="/projects">
          @csrf
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel"><i class="bi bi-bag mr-3" style="scale: 2 !important"></i> Soumission d'un Projet</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <!-- Votre formulaire -->
              
                <div class="form-group row">
                  <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nom" id="exampleInputUsername2" placeholder="projet de contruction du port autonome de..." required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleTextarea1" class="col-sm-3 col-form-label">Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="description" id="exampleTextarea1" rows="4" placeholder="Une petite description de votre preojet ici..." required></textarea>

                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputMobile" class="col-sm-3 col-form-label">Type</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="type" id="exampleInputMobile" placeholder="Type de Projet..." required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputMobile1" class="col-sm-3 col-form-label">Durée</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="duree" id="exampleInputMobile1" placeholder="10 mois..." required>
                  </div>
                </div>
   
               
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" required>
                    Je certifie que ces informations sont conformes et vraies
                  </label>
                </div>
               
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
              <button type="submit" class="btn btn-primary">Enregistrer</button>
          </div>
        </form>

      </div>
  </div>
</div>

                  
                </div>
               
              </div>
           
            </div>
          </div>
        
         
          
         
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Mes Projets</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>N*</th>
                          <th>Nom</th>
                          <th>Type</th>
                          <th>Durée</th>
                          <th class="text-center">Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                       @foreach ($projects as $project)
                       <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td class="font-weight-bold"> {{ $project->nom }} </td>
                        <td>{{ $project->type }}</td>
                        <td>{{ $project->duree }}</td>

                        <td class="text-center">
                 
                                                

                                                  <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                                    @csrf
                                                    <a href="/projects/{{ $project->id }}"><button type="button" class="btn btn-warning">Modifier </button> </a>
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                                </form>
                                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                        <form class="forms-sample" method="PUT" action="/projects/{{ $project->id }}">
                                                          @csrf
                                                          @method('PUT')
                                                          <div class="modal-header">
                                                              <h5 class="modal-title" id="myModalLabel"><i class="bi bi-bag mr-3" style="scale: 2 !important"></i> Modification du Projet : {{ $project->nom }} </h5>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                              </button>
                                                          </div>
                                                          <div class="modal-body">
                                                              <!-- Votre formulaire -->
                                                              
                                                              
                                                                <div class="form-group row">
                                                                  <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom</label>
                                                                  <div class="col-sm-9">
                                                                    <input type="text" value="{{ $project->nom }}" class="form-control" name="nom" id="exampleInputUsername2" placeholder="projet de contruction du port autonome de..." required>
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                  <label for="exampleTextarea1" class="col-sm-3 col-form-label">Description</label>
                                                                  <div class="col-sm-9">
                                                                    <textarea class="form-control" name="description" id="exampleTextarea1" rows="4" placeholder="Une petite description de votre preojet ici..." required>{{ $project->description }}</textarea>
                                                
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                  <label for="exampleInputMobile" class="col-sm-3 col-form-label">Type</label>
                                                                  <div class="col-sm-9">
                                                                    <input type="text" value="{{ $project->type }}" class="form-control" name="type" id="exampleInputMobile" placeholder="Type de Projet..." required>
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                  <label for="exampleInputMobile1" class="col-sm-3 col-form-label">Durée</label>
                                                                  <div class="col-sm-9">
                                                                    <input type="text" class="form-control" value="{{ $project->duree }}" name="duree" id="exampleInputMobile1" placeholder="10 mois..." required>
                                                                  </div>
                                                                </div>
                                                   
                                                               
                                                            
                                                               
                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                                                              <button type="submit" class="btn btn-primary">Modifier</button>
                                                          </div>
                                                        </form>
                                                
                                                      </div>
                                                  </div>
                                                </div>
                                                

                          </td>
                          

                      </tr>
                           
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

