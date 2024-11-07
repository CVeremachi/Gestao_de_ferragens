
    
    var modal = document.getElementById("modal");
    var btn = document.querySelector("#add-material-button");
    var span = document.getElementById("close-modal");
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
