let productDetails = []
function getProducts() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var xmlDoc = xhr.responseXML;
            var products = xmlDoc.getElementsByTagName("product")


            for (var i = 0; i < products.length; i++) {
                var id = products[i].getElementsByTagName("id")[0].textContent;
                var name = products[i].getElementsByTagName("name")[0].textContent;
                var price = products[i].getElementsByTagName("price")[0].textContent;
                var description = products[i].getElementsByTagName("description")[0].textContent;
                productDetails.push({ id, name, price, description })
                let option = document.createElement("option")
                option.value = name;
                option.innerText = name;
                document.getElementById("product").appendChild(option)

            }
        }
    }
    xhr.open("GET", "product.xml", true);
    xhr.send();
}

getProducts()


function getProductDetails(str) {
    let selectedProduct = productDetails.find((p) => { return p.name == str })

    let card = document.querySelector("#productDetails")
    card.innerHTML = ""

    let head = document.createElement("h3")
    let det = document.createElement("div");
    head.innerText = selectedProduct.name
    console.log(selectedProduct)
    det.innerHTML = /*html*/`
        <span>${selectedProduct.price}</span>
        <span>${selectedProduct.description}</span>
    `
    card.appendChild(head)
    card.appendChild(det)



}