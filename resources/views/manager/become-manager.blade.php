<?php 
  use Illuminate\Support\Facades\Auth;

  $user = Auth::user();

  $current = null;
?>
<!DOCTYPE html>
<html lang="en">

@include('components.default.template-head-sub')

<body>
  
      
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center ">
        <a class="navbar-brand brand-logo " href="/dashboard"><h1 class="h2">BuildMaster<span class="text-warning">.</span></h1></a>
        <a class="navbar-brand brand-logo-mini" href="/dashboard"><img src="../../../../images/logo-mini.svg" alt="logo"/></a>
        
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
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" style="scale: 2 !important;" id="profileDropdown">
                <i class="bi bi-person-circle m-0 p-0"  ></i>
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
      @include('components.manager.template-sidebar')


       <!-- partial -->
       <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-5 mb-xl-0 mx-auto">
                  <h3 class="font-weight-bold">Modifier le projet : $project->id   $project->nom </h3>
                </div>
                <div class="col-8 grid-margin stretch-card mx-auto mt-3">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">$project->nom </h4>
                        
                       
                        <form action="/manager/projects/{{ $project->id }}/tasks/add" method="POST">
                            @csrf

                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-2 col-form-label">Taches</label>
                                <div class="col-sm-8 ">
                                  <input type="text" class="form-control" name="tache" id="exampleInputUsername2" placeholder="Nom de la tâche..." required>
                                </div>
                                <button type="submit"   class="btn btn-primary h-50">Ajouter</button>
            
                              </div>
                        </form>
                              <div class="row">
                                <div class="col-md-12 grid-margin stretch-card">
                                  <div class="card">
                                    <div class="card-body">
                                      <p class="card-title mb-0">Liste des tâches</p>
                                      <div class="table-responsive" style=" max-height: 300px; overflow: scroll;">
                                        <table class="table table-striped table-borderless">
                                          <thead>
                                            <tr>
                                              <th>Nom</th>
                                       
                                            </tr>  
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>Search Engine Marketing</td>
                                              
                                            </tr>

                                           
                                           
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              
                              </div>



                              <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-2 col-form-label   ">Equipe</label>
                                <div class="col-sm-8 ">
                                  <input type="text" class="form-control" name="nom" id="exampleInputUsername2" placeholder="membre@gmail.com" required>
                                </div>
                                <a href="#" class="col-sm-1"><button type="button"  class="btn btn-primary ">Ajouter</button></a>
            
                              </div>
                              <div class="row">
                                <div class="col-md-12 grid-margin stretch-card">
                                  <div class="card">
                                    <div class="card-body">
                                      <p class="card-title mb-0">Membres Equipe projet</p>
                                      <div class="table-responsive" style=" max-height: 300px; overflow: scroll;">
                                        <table class="table table-striped table-borderless">
                                          <thead>
                                            <tr>
                                              <th>Email</th>
                                            </tr>  
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>Search Engine Marketing</td>
                                                                            </tr>

                                           
                                           
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              
                              </div>







                            
                        
                           
                        
                            <button type="submit" class="btn btn-primary">Créer le projet</button>
















                             </div>
                    
                                    </div>
                                </div>
                </div>


                            

























                        
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
  @include('components.manager.template-bottom-links2')

  
  <!-- End custom js for this page-->
</body>

</html>

