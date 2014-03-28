<?php
function updateSource($attr,$value){
		global $flag_people_s, $flag_review_s,$flag_genre_s, $sql_source;
		switch ($attr){
			case 'firstname':
				if($flag_people_s == 0){
					$flag_people_s = 1;
					$sql_source = $sql_source.", (select tb_roles_rosn rosn,tb_people_psn psn from tb_roles_has_tb_people) b, (select tb_movies_msn msn, rosn, rolename from tb_roles) c, (select psn, firstname, lastname from tb_people) e";
				}else{ 
				}
				break;
				
			case 'lastname': //the same to firstname
				if($flag_people_s == 0){
					$flag_people_s = 1;
					$sql_source = $sql_source.", (select tb_roles_rosn rosn,tb_people_psn psn from tb_roles_has_tb_people) b, (select tb_movies_msn msn, rosn, rolename from tb_roles) c, (select psn, firstname, lastname from tb_people) e";
				}else{
				}
				break;
				
			case 'score':
				if($flag_review_s == 0){
					$flag_review_s = 1;
					$sql_source = $sql_source.", (select tb_movies_msn msn,score, mdesc from tb_review) d ";
				}else{
				}
				break;
			case 'keyinr':
				if($flag_review_s == 0){
					$flag_review_s = 1;
					$sql_source = $sql_source.", (select tb_movies_msn msn,score, mdesc from tb_review) d ";
				}else{
				}
				break;
					
			case 'genre':
				if($flag_genre_s == 0){
					$flag_genre_s = 1;
					$sql_source = $sql_source.", (select tb_movies_msn msn, tb_genre_gsn gsn from tb_movies_has_tb_genre) f ";
				}else{
				}
				break;
		

		}
		
	}
	
	
	function updateCondition($attr,$value){
		global $flag_people_c, $flag_review_c,$flag_genre_c, $sql_condition;
		switch ($attr){
			case 'firstname':
				if($flag_people_c == 0){
					$flag_people_c = 1;
					$sql_condition = $sql_condition." and e.psn = b.psn and b.rosn = c.rosn and g.msn = c.msn and e.firstname like '%".$value."%' ";
				}else{
					$sql_condition = $sql_condition." and e.firstname like '%".$value."%' ";
				}
				break;
				
			case 'lastname':
				if($flag_people_c == 0){
					$flag_people_c = 1;
					$sql_condition = $sql_condition." and e.psn = b.psn and b.rosn = c.rosn and g.msn = c.msn and e.lastname like '%".$value."%' ";
				}else{
					$sql_condition = $sql_condition." and e.lastname like '%".$value."%' ";
				}
				break;
				
			case 'score':
				if($flag_review_c == 0){
					$flag_review_c = 1;
					$sql_condition = $sql_condition." and g.msn = d.msn and d.score ='".$value."' ";
				}else{
					$sql_condition = $sql_condition." and d.score = '%".$value."%' ";
				}
				break;
			
			case 'keyinr':
				if($flag_review_c == 0){
					$flag_review_c = 1;
					$sql_condition = $sql_condition." and g.msn = d.msn and d.mdesc like '%".$value."%'";
				}else{
					$sql_condition = $sql_condition." and e.lastname like '%".$value."%' ";
				}
				break;
				
			case 'genre':
				if($flag_genre_c == 0){
					$flag_genre_c = 1;
					$sql_condition = $sql_condition." and g.msn = f.msn and f.gsn ='".$value."' ";
				}else{
					$sql_condition = $sql_condition." and f.gsn = '".$value."' ";
				}
				break;

			case 'keyind':
				$sql_condition = $sql_condition." and g.introduction like '%".$value."%'";
				break;
				
			
			case 'moviename':
				$sql_condition = $sql_condition." and g.title like '%".$value."%'";
				break;
		}
	}
?>