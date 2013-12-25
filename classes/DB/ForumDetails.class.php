<?php
/*
 * 	Author		:	Vinay N. Barigidad
 * 	Date		:	24-Dec-2013
 * 	Desc		:	Gets the details of forum topics and Responses
 * --------------------------------------------------------------------
 * History
 * ----------------------------------------------------------------------
 * 
 */
// Basic connect class
require_once 'EzeeDB.class.php';

class ForumDetails{
	
	// Get the posts that need to be shown
	public function getForumPosts()
	{
		// Connect to the DB
		$db = new EzeeDB();
		$db->deprec_connect();
		
		//Get features and subscription type
		$result = mysql_query("select a.post_content as CardBody, 
										b.cat_name as CardHeader, 
										c.user_name as PostedBy
								from Forum_Posts a, Forum_Categories b, Users c
								where a.post_topic = b.cat_id
									and a.post_by = c.user_id");
		
		if (!$result) {
			die('Invalid query: <<getForumPosts>> - ' .$sql . mysql_error($this->connect()));
		}
		
		if(mysql_num_rows($result) == 1)
			return $db->processRowSet($result, true);

		return $db->processRowSet($result);
		
		mysql_free_result($result);
		
		mysql_close($db->connect());
		
	}
		
	
	public function getTopicRepliesByTopicId()
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
