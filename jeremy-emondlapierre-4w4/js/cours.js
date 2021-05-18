(function(){
    //let specifique = document.querySelectorAll('.articleCours Spécifique');
    //let image = document.querySelectorAll('.articleCours Image 2d/3d');
    //let web = document.querySelectorAll('.articleCours Web');
    //let jeu = document.querySelectorAll('.articleCours Jeu');
    let nomCours = document.getElementById("nomCours");
    let tableauNom = document.getElementsByTagName("h3");

    nomCours.addEventListener('mousedown', function(){
        if(tableauNom.innerHTML = "Spécifique"){
            document.getElementById("articleCours").style.backgroundColor = "#692426";
        }
        if(tableauNom.innerHTML = "Jeu"){
            document.getElementById("articleCours").style.backgroundColor = "#692426";
        }
        if(tableauNom.innerHTML = "Web"){
            document.getElementById("articleCours").style.backgroundColor = "#692426";
        }
        if(tableauNom.innerHTML = "Image 2d/3d"){
            document.getElementById("articleCours").style.backgroundColor = "#692426";
        }
    })
}())	