@extends('layouts.auth')

@section('title', 'Page d\'accueil')

@section('content')
<main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg-register mt-5">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h2>BuildMaster, la solution complète pour une gestion simplifiée et transparente de vos projets.</h2>
             
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="/register" method="post" class="php-email-form form-check" enctype="multipart/form-data">
              @csrf
              <h3>Inscription</h3>

             
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                </div>

                <div class="col-md-12">
                  <input type="text" name="prenom" class="form-control" placeholder="Prenom" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="telephone" placeholder="Téléphone" required>
                </div>

                <div class="col-md-12">
                  <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
                </div>

                <div class="col-md-12">
                  <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer le mot de passe" required>
                </div>
                <div class="col-md-12">
                  <label for="role">S'inscrire en tant que :</label><br>
                  
                 <div class="text-center mt-2 ">
                 <input type="radio" id="entreprise" name="role" value="entreprise"  required>
                  <label for="entreprise" class="me-5">Entreprise</label>
                  
                  <input type="radio" id="client" name="role" value="client"  required>
                  <label for="client">Client</label><br><br>

                  


               

              
                 </div>
                  </div>
                <p>Vous avez déja un compte, <a href="/login">connectez-vous.</a>.</p>
                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                <button type="submit">S'inscrire</button>
                </div>

              </div>
              
            </form>

            


          </div>
     

        </div>
        

      </div>
    </section>

    

    </main>
  
    






 
@endsection
