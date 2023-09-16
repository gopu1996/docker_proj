<html>
    <body>
    <div>
    <h1>Apparel:   </h1>
            <ul>

                    <?php
                    $json = file_get_contents('http://apparel');
                    $price_items = json_decode($json);
                    foreach($price_items as $price_item){
                        echo "<li>$price_item->name</li>";
                    }
                    ?>
            </ul>
      
    </div>
    <div>
        <h1>Apparel Prices:  </h1>
            <ul>

                    <?php
                    $json = file_get_contents('http://prices');
                    $price_items = json_decode($json);
                    foreach($price_items as $price_item){
                        echo "<li>$price_item->price</li>";
                    }
                    ?>
            </ul>
      
    </div>
    </body>
</html>