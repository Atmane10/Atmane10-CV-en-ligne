<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container text-light">
    <h1 class="text-center my-5 fw-bold">Générateur de CV</h1>
    <div class="form-container">
        <form action="submit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="token" value="HGsZOXpfNC">

            <!-- Les informations génerale -->
            <div class="border border-dark p-3 mb-3">    
                <h2>Informations génerale</h2>
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <label class="form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" required>
                    </div>
                    <div>
                        <label class="form-label">Prénom</label>
                        <input type="text" name="prenom" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Profession</label>
                    <input type="text" class="form-control" name="profession" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Adresse mail</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">numéro de téléphone</label>
                    <input type="tel" class="form-control" id="numeroTelephone" name="numeroTelephone" placeholder="0766223344">
                </div>
            </div>

            <!-- text area pour A propos de moi -->
            <div class="border border-dark p-3 mb-3">    
                <h2>A propos de moi</h2>
                <div class="form-floating">
                    <textarea class="form-control" name="apropos" style="height: 100px" required></textarea>
                </div>
            </div>

            <!-- L'ajoute d'un photo -->
            <div class="border border-dark p-3 mb-3">    
                <h2>Ajouter une photo</h2>
                <div class="mb-3">
                    <label class="form-label">Image carrée 1:1</label>
                    <input class="form-control" name="photo" type="file" required>
                </div>
            </div>

            <!-- L'ajoute des compétences -->
            <div class="border border-dark p-3 mb-3">    
                <h2>Compétences</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom de la compétence</label>
                    <input type="text" class="form-control" name="competence1" required>
                    <select class="form-select mt-2" name="competence_niveau1" required>
                        <option value="">Niveau</option>
                        <option value="1">1 - Débutant</option>
                        <option value="2">2 - Moyen</option>
                        <option value="3">3 - Avancée</option>
                        <option value="4">4 - Expert</option>
                    </select>
                </div>
                <div id="ajouterCompetences"></div>
                <div class="mb-3">
                    <button type="button" id="competences_hide" class="btn btn-primary form-control" onclick="ajouterCompetences()">+</button>
                </div>
            </div>

            <!-- L'ajoute des loisirs -->
            <div class="border border-dark p-3 mb-3">    
                <h2>Loisirs</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Loisir</label>
                    <input type="text" name="loisir1" class="form-control" required>
                </div>
                <div id="ajouterLoisirs"></div>
                <div class="mb-3">
                    <button type="button" id="loisirs_hide" class="btn btn-primary form-control" onclick="ajouterLoisirs()">+</button>
                </div>
            </div>

            <!-- L'ajoute de l'éducation -->
            <div class="border border-dark p-3 mb-3">    
                <h2>Éducation</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ecole/Université</label>
                    <input type="text" name="ecole1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Niveau</label>
                    <input type="text" name="education_niveau1" class="form-control">
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <div>
                        <label for="exampleInputEmail1" class="form-label">Date début</label>
                        <input type="text" name="dateDebut1" class="form-control">
                    </div>
                    <div>
                        <label for="exampleInputEmail1" class="form-label">Date fin</label>
                        <input type="text" name="dateFin1" class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Résultat</label>
                    <input type="text" name="resultat1" class="form-control">
                </div>
                <div id="ajouterEducation"></div>
                <div class="mb-3">
                    <button type="button" id="education_hide" class="btn btn-primary form-control" onclick="ajouterEducation()">+</button>
                </div>
            </div>

            <!-- L'ajoute des expériences -->
            <div class="border border-dark p-3 mb-3">    
                <h2>Expérience</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Titre</label>
                    <input type="text" name="titre1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" name="description1" class="form-control">
                </div>
                <div id="ajouterExperiences"></div>
                <div class="mb-3">
                    <button type="button" id="experiences_hide" class="btn btn-primary form-control" onclick="ajouterExperiences()">+</button>
                </div>
            </div>

            <!-- L'envoie des données et l'affichage du CV -->
            <input type="submit" class="form-control my-2">
        </form>
    </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

