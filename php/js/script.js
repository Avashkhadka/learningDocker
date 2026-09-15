$(document).ready(function () {
    $.ajax({
        url: "controller/product-controller.php",
        method: "GET",
        data: {
            action: "fetchProducts"
        },
        dataType: "json",
        success: function (data) {
            console.log(data);
            var products = JSON.parse(data);
            let productList = $('#product-list');
            let tableHtml = ""
            products.forEach(function (product) {
                tableHtml += "<tr>";
                tableHtml += "<td>" + product.id + "</td>";
                tableHtml += "<td>" + product.title + "</td>";
                tableHtml += "<td>" + product.description + "</td>";
                tableHtml += "<td>$" + product.price.toFixed(2) + "</td>";
                tableHtml += "<td>" + product.category + "</td>";
                tableHtml += "</tr>";
            });
            productList.find('tbody').html(tableHtml);
        },
        error: function (xhr, status, error) {
            console.error("Error fetching products:", error);
            console.error("Error fetching products:", status);
            console.error("Error fetching products:", xhr.responseText);
        }
    })
});