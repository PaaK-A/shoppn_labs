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

	//--SELECT All PRODUCTS--//
	public function selectAllProducts_cls(){
		//write query
		
		$selallsql = "SELECT * FROM products";

		//execute 	
		return $this -> db_fetch_all($selallsql);
	}

	//--SELECT A product--//
	public function selectAProduct_cls($productid){
		//write query
		
		$selsql = "SELECT * FROM products WHERE product_id= '$productid'";

		//execute 	
		return $this -> db_fetch_one($selsql);
	}

	//-update product--//
	public function updateProduct_cls($pcategory,$pbrand,$ptitle,$pprice,$pdescription,$pimage,$pkeywords,$productID){
		//write query
		
		$updatesql = " UPDATE products SET product_cat='$pcategory',product_brand ='$pbrand',product_title='$ptitle',product_price='$pprice',product_desc='$pdescription',product_image='$pimage',product_keywords='$pkeywords' WHERE product_id= '$productID' ";
		
		//execute 	
		//print $updatesql;
		return $this -> db_query($updatesql);
	}	

	/* 
	BRANDS
	*/

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

	//-INSERT category--//
	public function addCategory_cls($categoryname){
		//write query
		
		$insertsql = "INSERT INTO categories(cat_name) VALUES ('$categoryname')";
        
		//execute 	
		//print $insertsql;
		return $this -> db_query($insertsql);
	}

	//--SELECT All categories--//
	public function selectAllCategories_cls(){
		//write query
		
		$selallsql = "SELECT * FROM categories";

		//execute 	
		return $this -> db_fetch_all($selallsql);
	}

	//--SELECT A Category--//
	public function selectACategory_cls($categoryid){
		//write query
		
		$selsql = "SELECT * FROM categories WHERE cat_id= '$categoryid'";

		//execute 	
		return $this -> db_fetch_one($selsql);
	}

	//-update category--//
	public function updateCategory_cls($editedcategory,$categoryID){
		//write query
		
		$updatesql = "UPDATE categories SET cat_name='$editedcategory' WHERE cat_id= '$categoryID' ";
        
		//execute 	
		//print $insertsql;
		return $this -> db_query($updatesql);
	}


}
?>