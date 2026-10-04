$(document).ready(function () {
    $.ajax({
        url: "controller/product-controller.php",
        method: "GET",
        data: {
            action: "fetchProducts"
        },
        dataType: "json",
        success: function (products) {

            let productList = $('#productTable');
            let tableHtml = "";

            products.forEach(function (product) {
                tableHtml += "<tr>";
                tableHtml += "<td>" + product.id + "</td>";
                tableHtml += "<td>" + product.title + "</td>";
                tableHtml += "<td>" + product.description + "</td>";
                tableHtml += "<td>$" + parseFloat(product.price).toFixed(2) + "</td>";
                tableHtml += "<td>" + product.category + "</td>";
                tableHtml += "</tr>";
            });

            productList.find('tbody').html(tableHtml);
        },
        error: function (xhr) {
            console.log(xhr.responseText);
        }
    });
});