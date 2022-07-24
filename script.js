var competences_count=1;
var loisirs_count=1;
var education_count=1;
var experiences_count=1;

// Méthode pour ajouter une autre compétence
function ajouterCompetences(){
    let ajouterCompetences = document.getElementById('ajouterCompetences');
    let competencesHide = document.getElementById('competences_hide');
    if(competences_count<5)
    {
        ++competences_count;
        var field = 
        `<div class="mb-3">
            <label class="form-label">Nom de la compétence</label>
            <input type="text" class="form-control" name="competence${competences_count}">
            <select class="form-select mt-2" name="competence_niveau${competences_count}">
            <option value="">Niveau</option>
            <option value="1">1 - Débutant</option>
            <option value="2">2 - Moyen</option>
            <option value="3">3 - Avancée</option>
            <option value="4">4 - Expert</option>
            </select>
        </div>`;
        console.log(field);
        var htmlObject = document.createElement('div');
        htmlObject.innerHTML=field;
        ajouterCompetences.insertAdjacentElement("beforeend", htmlObject);
    }
    if(competences_count==5)
    {
        competencesHide.style = "display:none";
    }
}

// Méthode pour ajouter un autre loisir
function ajouterLoisirs(){
    let ajouterLoisirs = document.getElementById('ajouterLoisirs');
    let loisirsHide = document.getElementById('loisirs_hide');
    if(loisirs_count<5)
    {
        ++loisirs_count;
        var field = 
        `<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Loisir</label>
            <input type="text" name="loisir${loisirs_count}" class="form-control">
        </div>`;
        var htmlObject = document.createElement('div');
        htmlObject.innerHTML=field;
        ajouterLoisirs.insertAdjacentElement("beforeend", htmlObject);
    }
    if(loisirs_count==5)
    {
        loisirsHide.style = "display:none";
    }
}

// Méthode pour ajouter une autre formation
function ajouterEducation(){
    let ajouterEducation = document.getElementById('ajouterEducation');
    let educationHide = document.getElementById('education_hide');
    if(education_count<5)
    {
        ++education_count;
        var field = 
        `<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ecole/Université</label>
            <input type="text" name="ecole${education_count}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Niveau</label>
            <input type="text" name="education_niveau${education_count}" class="form-control">
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <div>
                <label for="exampleInputEmail1" class="form-label">Date début</label>
                <input type="text" name="dateDebut${education_count}" class="form-control">
            </div>
            <div>
                <label for="exampleInputEmail1" class="form-label">Date fin</label>
                <input type="text" name="dateFin${education_count}" class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Résultat</label>
            <input type="text" name="resultat${education_count}" class="form-control">
        </div>`;
        var htmlObject = document.createElement('div');
        htmlObject.innerHTML=field;
        ajouterEducation.insertAdjacentElement("beforeend", htmlObject);
    }
    if(education_count==5)
    {
        educationHide.style = "display:none";
    }
}

// Méthode pour ajouter une autre expérience
function ajouterExperiences(){
    let ajouterExperiences = document.getElementById('ajouterExperiences');
    let experiencesHide = document.getElementById('experiences_hide');
    if(experiences_count<5)
    {
        ++experiences_count;
        var field = 
        `<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titre</label>
            <input type="text" name="titre${experiences_count}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text" name="description${experiences_count}" class="form-control">
        </div>`;
        var htmlObject = document.createElement('div');
        htmlObject.innerHTML=field;
        ajouterExperiences.insertAdjacentElement("beforeend", htmlObject);
    }
    if(experiences_count==5)
    {
        experiencesHide.style = "display:none";
    }
}