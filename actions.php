<?php
$m = new MongoClient( 'mongodb://localhost:25000');
$cursor = $m->tem->users->find( array( 'name' => 'marat'));
$result = $cursor->getNext();
echo json_encode( $result); 
?>
