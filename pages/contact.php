  <title>Contact Washafo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav bg-primary">
  <!-- CONTENEUR CENTRAL -->
 <!-- CONTENEUR CENTRAL -->
<div class="container d-flex justify-content-center align-items-start pt-5" style="min-height: 80vh;">

  <div class="col-md-10">
    
    <!-- Texte au-dessus du formulaire -->
    <div class="text-center mb-4">
      <h2 class="font-weight-bold text-white">Formulaire de contact</h2>
      <p class="text-light mb-0">
        Une question, une demande ? Remplissez ce formulaire et notre équipe vous répondra dans les meilleurs délais.
      </p>
    </div>

    <!-- Formulaire dans une carte -->
    <div class="card shadow">
      <div class="card-header d-flex justify-content-center">
        <h1 class="card-title font-weight-bold text-dark">Nous contacter</h1>
      </div>

      <div class="card-body p-4">
        <form action="traitement_contact.php" method="post">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nom" class="text-dark font-weight-bold">Nom</label>
              <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom">
            </div>
            <div class="form-group col-md-6">
              <label for="prenom" class="text-dark font-weight-bold">Prénom</label>
              <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom">
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="text-dark font-weight-bold">Adresse email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="@exemple.com">
          </div>

          <div class="form-group">
            <label for="message" class="text-dark font-weight-bold">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message..."></textarea>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block"><span class="text-white">Envoyer le message</span></button>
            <small class="d-block mt-2 text-primary">Besoin d’aide ? <a href="?page=aide">Consultez notre FAQ</a></small>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
