<?php 
  use Illuminate\Support\Facades\Auth;

  $user = Auth::user();

  $current = null;
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
        <form class="forms-sample" method="POST" action="/user/projects">
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
                  <label for="exampleInputMobile1" class="col-sm-3 col-form-label">Durée (En mois)</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="duree" id="exampleInputMobile1" placeholder="10 mois..." required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputMobilex" class="col-sm-3 col-form-label">Budget</label>
                  <div class="col-sm-9">
                    <input type="Number" class="form-control"  name="budget" id="exampleInputMobilex" placeholder="budget du projet" required>
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
                          <th>Budget</th>
                          <th class="text-center">Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                       @foreach ($projects as $project)
                       <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td class="font-weight-bold"> {{ $project->nom }} </td>
                        <td>{{ $project->type }}</td>
                        <td>{{ $project->duree }} mois</td>
                        <td>{{ $project->budget }}</td>

                        <td class="text-center">
                 
                                                

                                                  <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                                    @csrf
                                                    <a href="/user/projects/{{ $project->id }}"><button type="button" class="btn btn-warning">Modifier </button> </a>
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
                                                                    <input type="number" class="form-control" value="{{ $project->duree }}" name="duree" id="exampleInputMobile1" placeholder="10 mois..." required>
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                  <label for="exampleInputMobilex" class="col-sm-3 col-form-label">Budget</label>
                                                                  <div class="col-sm-9">
                                                                    <input type="number" class="form-control" value="{{ $project->budget }}" name="budget" id="exampleInputMobilex" placeholder="budget du projet" required>
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

