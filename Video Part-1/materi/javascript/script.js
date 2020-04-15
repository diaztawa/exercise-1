(function (){
    "use_strict";
    var my_function = function(event){
        alert("Hello Mahasiswa Primakara");
        event.preventDefault();

    };

    var form = document.getElementById("cart-hplus");

    form.addEventListener("submit", my_function, true);
})();