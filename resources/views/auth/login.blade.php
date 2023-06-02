@extends('layouts.auth')

@section('title', 'Page d\'accueil')

@section('content') 
<main id="main">
     <!-- ======= Get Started Section ======= -->
     <section id="get-started" class="get-started section-bg mt-5" style="height: 70vh !important" >
      <div class="mt-5"></div>

        <div class="container">
  
          <div class="row justify-content-between gy-4">
  
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
              <div class="content">
                <h2>BuildMaster facilite la collaboration entre gestionnaires et clients pour des projets réussis.</h2>
               
              </div>
            </div>
  
            <div class="col-lg-5" data-aos="fade">
              <form action="/login" method="post" class="php-email-form" enctype="multipart/form-data">
                @csrf
                <h3> Connexion</h3>
  
               
                <div class="row gy-3">
  
                  <div class="col-md-12 ">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                  </div>
  
                  <div class="col-md-12">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
                  </div>
                 <p>Vous n'avez pas un compte, <a href="/register">S'inscrire</a>.</p>
                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                  <button type="submit">Se connecter</button>
                  </div>
  
                </div>
              </form>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Get Started Section
</main>
    
  
@endsection
