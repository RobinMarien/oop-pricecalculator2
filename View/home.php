<?php ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Price Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="View/css/style.css">

</head>
<body class="text-center">
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

    <button type="submit">Search</button>
</form>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>Customer:</h2>
            <ul class="text-left">
                <li>Name: <?php echo $customer->getName()?></li>
                <li>ID: <?php echo $customer->getId()?></li>
                <li>Group: <?php echo $customer->getGroup()?></li>
            </ul>
        </div>
        <div class="col-md-4">
            <h2>Product:</h2>
            <ul class="text-left">
                <li>Name: <?php echo $product->getName()?></li>
                <li>Id: <?php echo $product->getId()?></li>
                <li>Description: <?php echo $product->getDescription()?></li>
                <li>Price: <?php echo $product->getPrice()?></li>
            </ul>
        </div>
        <div class="col-md-4">
            <h2>Group:</h2>
            <ul class="text-left">
                <li>Name: <?php echo $group->getName()?></li>
                <li>Discount: <?php echo $group->getDiscount()?></li>
                <li>Group: <?php echo $group->getGroup()?></li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
