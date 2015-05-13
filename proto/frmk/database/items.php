<?php
	function createItemType ($category, $description, $name, $public, $purchasePrice, $rentPrice){
		global $conn;
		$stmt = $conn->prepare("INSERT INTO ItemType VALUES (?,?,?,?,?,?)");
		$stmt->execute(array($category, $description, $name, $public, $purchasePrice, $rentPrice));
	}
	function createItems($number,$itemTypeID, $warehouseID){
		global $conn;
		$stmt = $conn->prepare("INSERT INTO Item VALUES (?,?,?)");
		for($i = 0; $i < $number; $i++){
			$stmt->execute(array(true, $warehouseID, $itemTypeID));
		}
	}
	function getItemByID($id){
		global $conn;
    	$stmt = $conn->prepare("SELECT * FROM ItemType WHERE itemTypeID= $id");
    	$stmt->execute(array($id));
    	return $stmt->fetch();
	}
	function getItemByName($name){
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM ItemType WHERE name = $name");
		$stmt->execute(array($name));
		return $stmt->fetch();
	}
	function getItemByCategory($category){
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM ItemType WHERE category = $category");
		$stmt->execute(array($category));
		return $stmt->fetch();
	}
?>