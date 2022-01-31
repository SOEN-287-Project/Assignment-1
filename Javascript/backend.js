//Check value of #selectBackend and serve corresponding html
function check_display_backend(){
    var choice = document.getElementById("selectBackend").value;
    if (choice == "products"){
        $( "#backend_display" ).load( "backend/products.html" );

    }else if(choice == "orders"){
        $( "#backend_display" ).load( "backend/orders.html" );

    }


}