<?php ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <select name = "customer">
        <?php foreach($allCustomers AS $customerItem):?>

            <option value="<?php echo $customerItem->getId()?>"

                <?php if(isset($_GET["customer"]) && $_GET["customer"] == $customerItem->getId()){
                    echo ' selected="selected"';}
                ?>>

                <?php echo $customerItem->getName()?>

            </option>
            <!-- Notice that we put the getID in the value
            and the getName in the displayed field So, what is says is: when the user will
            select the name from the drop down, the id of that name will be put into
            the value. That value will be used to fetch all your info, through the return function.
            Be aware: if you would put "name" instead of "id" in the value , you would have to rewrite all the function to use name to look up information!-->
        <?php endforeach; ?>
    </select>

    <select name = "product">
        <?php foreach($allProducts AS $productItem):?>

            <option value="<?php echo $productItem->getId()?>"

                <?php if(isset($_GET["product"]) && $_GET["product"] == $productItem->getId()){
                    echo ' selected="selected"';}
                ?>>

                <?php echo $productItem->getName()?>

            </option>
        <?php endforeach; ?>
    </select>

    <button type="submit">Submit</button>
</form>

<h2>Your name <?php echo $customer->getName()?> </h2>
<h2>Your product <?php echo $product->getName()?> </h2>

</body>
</html>
