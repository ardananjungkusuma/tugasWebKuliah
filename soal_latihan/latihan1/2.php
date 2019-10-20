<!DOCTYPE html>
<html>
    <head>
        <title>Beli</title>
    </head>
    <body>
        <form method="POST" action="checkout.php">
            <center><h2>FORM PEMBELIAN BARANG</h2></center>
            <input type="radio" value="Pants" name="Pants">Pants
            <input type="radio" value="Shirt" name="Shirt">Shirt<br>
            Product Name : <input type="text" placeholder="Jeans Bekantan" name="productName"><br>
            Unit Price : <input type="number" placeholder="100000" name="unitPrice"><br>
            Purchase Amount : <input type="text" placeholder="3" name="purchaseAmount"><br>
            <button type="submit" value="submit">Buy</button>
            <button type="reset" value="reset">Reset</button>
        </form>
    </body>
</html>