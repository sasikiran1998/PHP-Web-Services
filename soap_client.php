<h1>PHP SOAP Client</h1>
    <p>Select a fruit to obtain the price from the SOAP Server</p>

    <form action="soap_client.php" method="post">
        Request:
        <select name="request">		
            <option>Apples</option>
            <option>Bananas</option>
            <option>Cherries</option>		
        </select>	
        <input type="submit" name="submit">
    </form>

    <br /><br />

    <?php
	
        if (isset($_POST['submit'])) {
            /* We must define the location of the service in the client
            because we don't have a WSDL file */
            $options = array("location" =>"http://localhost/soap_service.php",
                "uri" => "http://localhost");
			
            try {
			
                /* Provides a client to read from the service
                It either received a WSDL file, or null and the options */
                $client = new SoapClient(null, $options);
			
                $chosen_fruit = strtolower($_POST['request']);
                echo $chosen_fruit . " costs £";
			
                /* Call the function in the Fruit class */
                $fruit_price = $client->getFruitPrice($chosen_fruit);
			
                echo $fruit_price . "<br />";
            } catch(SoapFault $ex) {
                var_dump($ex);
            }
        }
    ?>