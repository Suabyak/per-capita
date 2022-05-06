function show_hide() {
    var x = document.getElementById("register");

    if (x.style.display === "block") {

        x.style.display = "none";
    }
    else {
        x.style.display = "block";
    }}
    function show_hide_first(){
        var y = document.getElementById("first_reg");  
        if (y.style.display === "block") {

            y.style.display = "none";
        }
        else {
            y.style.display = "block";
        }
    }
    function show_hide_exit() {
        var x = document.getElementById("register");
        var y = document.getElementById("first_reg");
    
        if (y.style.display === "block") {
            y.style.display = "none";
        }
        else {
            y.style.display = "block";
        }
        if (x.style.display === "block") {

            x.style.display = "none";
        }
        else {
            x.style.display = "block";
        }
     
        
}
