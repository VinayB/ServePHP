<?php
				/*	We get the card details from the DB
				 * 	The Card Header - The subject or the Topic of the discussion, 
				 * 	Card details (or the body) - The message body
				 * 	Card posted by 	- Original Author of the message
				 * 	Card comments - Total nbr of comments, on expansion, all comments
				 * 	Card shares - Total nbr of shares, to whom it has been shared
				 * 	Card likes - Total nbr of likes, and who has liked it
				 * 	
				 * 	To-Do
				 * 	The card should be associated with the user and the society	
				 * 
				 */
					require_once './classes/DB/ForumDetails.class.php';
					$dbForumDtls = new ForumDetails();
					$results = array();
					//$results = $dbForumDtls->getForumPosts();
					
					$results = $dbForumDtls->getForumPostsForLoggedInUser($_SESSION["user_name"]);
					
					$rowfluidIndicator = 0;
					
					foreach ($results as $row)
					{
						/*
						 * The below is done to manage two cards per row

						if ($rowfluidIndicator/2 == 0 OR $rowfluidIndicator == 0) 
						{
							echo '<div class="row-fluid">';
						}
*/						 
						echo '<div class="span4">';	
						echo '	<div class="card">';
						echo '		<div class="card-body">';
						echo '			<p><strong>' .$row['PostedBy']. '</strong> shared</p>';
						echo '			<p>' .$row['CardBody']. '</p>';
						echo '		</div>';
						echo '		<div class="card-actions pull-right">';
						echo ' 			<button class="btn"><i class="glyphicon glyphicon-share-alt"></i></button> ';
						echo ' 			<button class="btn"><i class="glyphicon glyphicon-thumbs-up"></i></button> ';
						echo ' 			<button class="btn"><i class="glyphicon glyphicon-comment"></i></button> ';
						echo '		</div>';
						echo '		<div class="card-comments">';
	         			echo '			<div class="comments-collapse-toggle"><a data-toggle="collapse" data-target="#c1-comments" href="#c1-comments">34 comments <i class="icon-angle-down"></i></a>     </div>';
	         			echo '		</div>';
						echo '	</div> <!-- Card end -->';
						echo '</div> <!-- span5 End -->';
						/*
						if ($rowfluidIndicator/2 == 0 OR $rowfluidIndicator == 0) 
						{
							echo '</div>';
						}
						
						$rowfluidIndicator += 1;
					*/
					}
