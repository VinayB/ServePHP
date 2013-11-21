<?php
// Basic connect class
require_once 'EzeeDB.class.php';

class PriceFeature{
	// Basic functions, which retrieves all the Product features
	// Along with pay type
	public function getProductFeaturesByPay()
	{
		// Connect to the DB
		$db = new EzeeDB();
		$db->deprec_connect();
		
		//Get features and subscription type
		$result = mysql_query("SELECT b.FeaturePayType_Name as Subscription_Type, a.Feature_Name as Prod_Feature  
								from Prod_Features a, Feature_Pay_Type b
								where a.featurepaytype_id = b.featurepaytype_id
								order by a.featurepaytype_id");
		
		if (!$result) {
			die('Invalid query: <<getProductFeaturesByPay>> - ' .$sql . mysql_error($this->connect()));
		}
		
		if(mysql_num_rows($result) == 1)
			return $db->processRowSet($result, true);

		return $db->processRowSet($result);
		
		mysql_free_result($result);
		
		mysql_close($db->connect());
		
		
		
	}
		
	
	public function getSubscriptions()
	{
		// Connect to the DB
		$db = new EzeeDB();
		$db->deprec_connect();
		
		//Get features and subscription type
		$result = mysql_query("SELECT FeaturePayType_Id, FeaturePayType_Name as Subscription_Type, Price_Per_Month as MonthlyRate
								from Feature_Pay_Type");
		
		if (!$result) {
			die('Invalid query: <<getSubscriptions>> - ' .$sql . mysql_error($this->connect()));
		}
		else
		{
			return $result;
		}

		mysql_close($db->connect());
		
		
		
	}
	
}
?>
