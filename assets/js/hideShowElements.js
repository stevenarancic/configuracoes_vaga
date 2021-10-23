document.getElementById("div_create_disciplina").style.display = "none";
document.getElementById("div_create_atuacao").style.display = "none";
document.getElementById("div_create_categoria").style.display = "none";

function hideShowDisciplina() {
    var x = document.getElementById("div_create_disciplina");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function hideShowAtuacao() {
    var x = document.getElementById("div_create_atuacao");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function hideShowCategoria() {
    var x = document.getElementById("div_create_categoria");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}