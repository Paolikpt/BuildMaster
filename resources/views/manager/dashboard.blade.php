<?php 
  use Illuminate\Support\Facades\Auth;

  $user = Auth::user();
?>
<!DOCTYPE html>
<html lang="en">

@include('components.default.template-head')

<body>
  
      
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center ">
        <a class="navbar-brand brand-logo " href="/dashboard"><h1 class="h2">BuildMaster<span class="text-warning">.</span></h1></a>
        <a class="navbar-brand brand-logo-mini" href="/dashboard"><img src="../images/logo-mini.svg" alt="logo"/></a>
        
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
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Rechercher" aria-label="search" aria-describedby="search">
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
            <a class="nav-link dropdown-toggle m-0 p-0" style="scale: 2 !important;" href="#" data-toggle="dropdown" id="profileDropdown">
              <i class="bi bi-person-circle m-0 p-0"  ></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a href="/manager/parametre"  class="dropdown-item">
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
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('components.manager.template-sidebar')

      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Bonjour {{ $user->prenom }}</h3>
                  <h6 class="font-weight-normal mb-0">Bienvenue dans le dahboard Manager ! </h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="flex-md-grow-1 flex-xl-grow-0">
                    <button class=" btn btn-sm btn-light bg-white dropdown-toggle">
                     Dashboard Manager
                    </button>
                  
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>






          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
               
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Client</th>
                            <th>Nom du projet</th>
                            <th>Type</th>
                            <th>Durée</th>
                            <th>Budget</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            @if (!$project->managed)
                                <tr>
                                    <td class="py-1">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="py-1">
                                        {{ $project->owner }}
                                    </td>
                                    <td>
                                        {{ $project->nom }}
                                    </td>
                                    <td>
                                        {{ $project->type }}
                                    </td>
                                    <td>
                                        {{ $project->duree }}
                                    </td>
                                    <td>
                                        {{ $project->budget }}
                                    </td>
                                    <td class="text-center">
                                        <a href="/manager/projects/manage/{{ $project->id }}"><button type="button" class="btn btn-warning">Gérer</button></a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                
                </div>
              </div>
            </div>
          </div>







          <div class="row">
           
            <div class="col-md-6 mx-auto grid-margin transparent">
              <div class="row">
                
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Projets validés</p>
                      <p class="fs-30 mb-2">{{  $validated }}</p>

                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Projets en cours</p>
                      <p class="fs-30 mb-2">{{  $validated }}</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-5">
            <div class="card-body">
              <h5 class="card-title">Fonctionnalités</h5>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <button class="btn btn-outline-primary btn-block">
                    <i class="bi bi-gear mr-3"></i> Créer une équipe
                  </button>
                </div>
                <div class="col-md-6 mb-3">
                  <button class="btn btn-outline-primary btn-block">
                    <i class="bi bi-gear mr-3"></i> Créer un Projet
                  </button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <button class="btn btn-outline-warning btn-block">
                    <i class="bi bi-card-checklist mr-3"></i> Créer une tâche
                  </button>
                </div>
                <div class="col-md-6 mb-3">
                  <button class="btn btn-outline-warning btn-block">
                    <i class="bi bi-gear mr-3"></i> Planifier un projet
                  </button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <button class="btn btn-outline-success btn-block">
                    <i class="bi bi-gear mr-3"></i> Passer un message
                  </button>
                </div>
                <div class="col-md-6 mb-3">
                  <button class="btn btn-outline-success btn-block">
                    <i class="bi bi-gear mr-3"></i> Faire une annonce
                  </button>
                </div>
              </div>
            </div>
          </div>
          
         
         
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('components.default.template-footer')

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @include('components.default.template-bottom-links')

  <!-- End custom js for this page-->
</body>

</html>

