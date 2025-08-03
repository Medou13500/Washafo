<body class="hold-transition layout-top-nav bg-primary">
  <!-- CONTENEUR CENTRAL -->
  <div class="container d-flex justify-content-center align-items-start pt-5" style="min-height: 80vh;">
    <div class="col-md-10"> <!-- élargi ici -->
      
      <!-- Texte au-dessus du formulaire -->
      <div class="text-center mb-4">
        <h2 class="font-weight-bold text-white">Création de votre espace</h2>
        <p class="text-light mb-0">Merci de remplir le formulaire pour accéder à votre espace personnel. </p>
      </div>

      <!-- Formulaire -->
      <div class="card shadow">
        <div class="card-header d-flex justify-content-center">
          <h1 class="card-title font-weight-bold text-dark">Créer un compte</h1>
        </div>
        <div class="card-body p-4">
          <form action="../pages/home.php" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nom" class="text-dark font-weight-bold">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
              </div>
              <div class="form-group col-md-6">
                <label for="prenom" class="text-dark font-weight-bold">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="text-dark font-weight-bold">Adresse email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="@mail.com">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="password" class="text-dark font-weight-bold">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <div class="form-group col-md-6">
                <label for="confirm" class="text-dark font-weight-bold">Confirmation</label>
                <input type="password" class="form-control" id="confirm" name="confirm">
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary btn-block text-white font-weight-bold">Créer un compte</button>
              <small class="d-block mt-2 text-primary">Déjà inscrit ? <a href="?page=login">Connectez-vous</a></small>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
