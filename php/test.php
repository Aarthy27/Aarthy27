<?php

if(extension_loaded("mongodb")){
    try{
    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

    $query = new MongoDB\Driver\Query([]);

    $cursor = $manager->executeQuery("guvi.register", $query);

    foreach($cursor as $document){
        var_dump($document);
        echo "Database mydb selected";
    }
} catch(MongoConnectionException $e){
    var_dump($e);
}
}


/*
   // connect to mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
	
   // select a database
   $db = $m->mydb;
   echo "Database mydb selected";
   $collection = $db->createCollection("mycol");
   echo "Collection created succsessfully";
   */
?>