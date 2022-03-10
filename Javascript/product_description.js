var price;
var description;
var image;

window.addEventListener('load', async() => {

    //Get parameters set in url
    let url = new URLSearchParams(location.search);
    console.log(url)
    let quantity = url.get('quantity');
    let aisle = url.get('aisle');
    let product = url.get('product');


    //Get necessary data from json file
    var json = await fetch("backend/product_info.json")
    .then(response => {
       return response.json();
    })
    
    price = json[aisle][product].Price;
    description = json[aisle][product].Description;
    image = json[aisle][product].image;

    //Display data
    document.getElementById("description").innerHTML = description;
    document.getElementById("product_img").src = image;
    document.getElementById("item_name").innerHTML = product;






    if(quantity != null){
        document.getElementById("quantity_input").value = quantity;
        update_input();
    }
    

  });



function update_input(){
    let quantity = document.getElementById("quantity_input").value;

    if(quantity<0){ //Alert if below 0 (invalid)
        document.getElementById("price_update").style.color = "red";

    }else{
        document.getElementById("price_update").style.color = "#32CD32";

    }

    console.log(window.location.href.indexOf("?"))
    if(window.location.href.indexOf("?") == -1){
        history.replaceState("","",window.location.href+"?quantity="+quantity) //Updates quantity parameter in url

    }else{
        history.replaceState("","",window.location.href+"&quantity="+quantity) //Updates quantity parameter in url

    }

    document.getElementById("price_update").innerHTML = "$"+quantity*price; //Update price



}