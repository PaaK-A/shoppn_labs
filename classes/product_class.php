<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all product functions 
*/
/**
 *@author Paa Kwesi Addae
 *
 */

class product_class extends db_connection{

    //--INSERT product--//
	public function addProduct_cls($pcategory,$pbrand,$ptitle,$pprice,$pdescription,$pimage,$pkeywords){
		//write query
		
		$insertsql = "INSERT INTO products(product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) VALUES ('$pcategory','$pbrand','$ptitle','$pprice','$pdescription','$pimage','$pkeywords')";
        
		//execute 	
		return $this -> db_query($insertsql);
	}

	//-INSERT brand--//
	public function addBrand_cls($brandname){
		//write query
		
		$insertsql = "INSERT INTO brands(brand_name) VALUES ('$brandname')";
        
		//execute 	
		//print $insertsql;
		return $this -> db_query($insertsql);
	}
	
	//-update brand--//
	public function updateBrand_cls($editedbrand,$brandID){
		//write query
		
		$updatesql = " UPDATE brands SET brand_name='$editedbrand' WHERE brand_id= '$brandID' ";
        
		//execute 	
		//print $insertsql;
		return $this -> db_query($updatesql);
	}	

	//--SELECT All--//
	public function selectAllBrands_cls(){
		//write query
		
		$selallsql = "SELECT * FROM brands";

		//execute 	
		return $this -> db_fetch_all($selallsql);
	}

	//--SELECT--//
	public function selectABrand_cls($brandid){
		//write query
		
		$selsql = "SELECT * FROM brands WHERE brand_id= '$brandid'";

		//execute 	
		return $this -> db_fetch_one($selsql);
	}

	//category

	//-INSERT brand--//
	public function addCategory_cls($categoryname){
		//write query
		
		$insertsql = "INSERT INTO categories(cat_name) VALUES ('$categoryname')";
        
		//execute 	
		//print $insertsql;
		return $this -> db_query($insertsql);
	}


}
?>