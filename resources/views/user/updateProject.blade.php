<?php 
  use Illuminate\Support\Facades\Auth;

  $user = Auth::user();

  $current = null;
?>
<!DOCTYPE html>
<html lang="en">

@include('components.default.template-head2')

<body>
  
      
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center ">
        <a class="navbar-brand brand-logo " href="/dashboard"><h1 class="h2">BuildMaster<span class="text-warning">.</span></h1></a>
        <a class="navbar-brand brand-logo-mini" href="/dashboard"><img src="../../images/logo-mini.svg" alt="logo"/></a>
        
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
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../../images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a href="/user/parametre"  class="dropdown-item">
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
      @include('components.default.template-sidebar')


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-5 mb-xl-0 mx-auto">
                  <h3 class="font-weight-bold">Modifier le projet : {{ $project->nom }}</h3>
                </div>
                <div class="col-8 grid-margin stretch-card mx-auto mt-3">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">{{ $project->nom }}</h4>
                        
                        <form class="forms-sample" action="/user/projects/{{ $project->id }}" method="POST">
                            @csrf
                            @method("PUT")
                          <div class="form-group">
                            <label for="exampleInputUsername2" >Nom</label>
                            <input type="text" value="{{ $project->nom }}" class="form-control" name="nom" id="exampleInputUsername2" placeholder="projet de contruction du port autonome de..." required>
                        </div>
                          <div class="form-group">
                            <label for="exampleTextarea1">Description</label>
                            <textarea class="form-control" name="description" id="exampleTextarea1" rows="4" placeholder="Une petite description de votre preojet ici..." required>{{ $project->description }}</textarea>
                        </div>
                          <div class="form-group">
                            <label for="exampleInputMobile">Type</label>
                            <input value="{{ $project->type }}" type="text" class="form-control" name="type" id="exampleInputMobile" placeholder="Type de Projet..." required>
                        </div>
                    <div class="form-group">
                        <label for="exampleInputMobile1">Durée</label>
                        <input value="{{ $project->duree }}" type="number" class="form-control" name="duree" id="exampleInputMobile1" placeholder="10 mois..." required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputMobilex">Budget (EN FCFA)</label>
                      <input value="{{ $project->budget }}" type="number" class="form-control" name="budget" id="exampleInputMobilex" placeholder="budget du projet"  required>
                  </div>
                  
                          
                <div class="text-center">
                    <a href="/user/projects"><button type="button"  class="btn btn-secondary">Annuler</button></a>
                    <button type="submit" class="btn btn-primary mr-2">Modifier</button>


                </div>
             
                        </form>
                      </div>
                    </div>
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

  <!-- plugins:js -->
  @include('components.default.template-bottom-links2')

  
  <!-- End custom js for this page-->
</body>

</html>

