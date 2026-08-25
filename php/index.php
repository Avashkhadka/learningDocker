<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datatabel</title>
</head>

<body>

    <h1>PHP Ajax & XML</h1>
    <hr>
    <h3>Please select producdt from the below list & add to card</h3>
    <form action="" id="productForm">
        <label for="product">Select Products:</label>
        <select name="product" id="product" onchange="getProductDetails(this.value)">
            <option>--Select Product--</option>
        </select>
        <input type="submit" value="Add to Cart" id="addToCart" onclick="addToCart(event)">
    </form>
    <div id="productDetails"></div>
    <script src="script.js"></script>
</body>

</html>