<body class="bg-primary text-white">

<div class="container d-flex justify-content-center align-items-start pt-5" style="min-height: 80vh;">

    <div class="w-100" style="max-width: 600px;">

      <!-- Logo + Titre -->
      <div class="text-center mb-4">
       
        <h2 class="font-weight-bold text-white">Connexion à votre espace</h2>
        <p class="text-light mb-0">Merci de renseigner vos identifiants</p>
      </div>

      <!-- Formulaire -->
      <div class="card shadow-lg border-0 rounded-lg">
        <div class="card-body p-5 text-dark">
          <form action="/ma-page-de-traitement" method="post">

            <div class="form-group">
              <label for="email" class="font-weight-bold">Adresse e-mail</label>
              <input type="email" id="email" class="form-control form-control-lg" name="email" placeholder="ex : contact@washafo.com">
            </div>

            <div class="form-group">
              <label for="password" class="font-weight-bold">Mot de passe</label>
              <input type="password" id="password" class="form-control form-control-lg" name="password" placeholder="••••••••">
            </div>

            <div class="d-flex justify-content-between mb-4">
              <a href="?page=mdpOublie" class="text-primary font-weight-bold">Mot de passe oublié ?</a>
              <a href="?page=register" class="text-primary font-weight-bold">Créer un compte</a>
            </div>

            <button type="submit" class="btn btn-primary btn-block btn-lg">Se connecter</button>

          </form>
        </div>
      </div>

    </div>
  </div>

</body>
