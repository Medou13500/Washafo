<body class="bg-primary text-white">
 <div class="container d-flex justify-content-center align-items-start pt-5" style="min-height: 80vh;">

    <div class="w-100" style="max-width: 600px;">

      <!-- En-tête -->
      <div class="text-center mb-4">
        <img src="assets/logo.png" alt="" class="rounded-circle shadow-sm mb-3"
             style="width: 110px; height: 110px; object-fit: cover;">
        <h2 class="font-weight-bold text-white">Mot de passe oublié</h2>
        <p class="text-light mb-0">Indiquez votre adresse e-mail pour réinitialiser votre mot de passe</p>
      </div>

      <!-- Formulaire -->
      <div class="card shadow-lg text-dark rounded-lg border-0">
        <div class="card-body p-5">
          <form action="?page=home" method="post">
            <div class="form-group mb-4">
              <label for="email" class="font-weight-bold">Adresse e-mail</label>
              <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="ex : contact@washafo.com" required>
            </div>

            <button type="submit" class="btn btn-primary btn-lg btn-block font-weight-bold">
              Réinitialiser le mot de passe
            </button>
          </form>
        </div>
      </div>

    </div>
  </div>
</body>
