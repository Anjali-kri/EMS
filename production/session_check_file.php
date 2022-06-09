<?php
	session_start();
	include "connection1.php";
	$admin=$_SESSION['user_name'];
	$emp_id=$_SESSION['emp_code'];
	$reslut11=mysqli_query($con, "select * from emp_permission where empid='$emp_id' ");
	$fetch12=mysqli_fetch_assoc($reslut11);
	$post_code=$fetch12['post_code'];
	$reslut_group=mysqli_query($con, "select * from group_permission where post_code='$post_code' ");
	$fetch12=mysqli_fetch_assoc($reslut_group);
	

 
 
 
	/*
    $result=mysqli_query($con, "select * from permission where user='$admin' ");
     $fetch=mysqli_fetch_assoc($result);
     $link .= $_SERVER['REQUEST_URI'];
     $link1=$link;
	 $sub=substr($link1,30);
	if(($admin==$fetch['user'] )&&($fetch['e_detail']==$sub))
      {
	  
      }
     else if(($admin==$fetch['user'] )&&($fetch['e_sal']==$sub))
      {
	 
      }
     else if(($admin==$fetch['user'] )&&($fetch['e_m_sal']==$sub))
      {
	 
       }
      
     
   else if(($admin==$fetch['user'] )&&($fetch['fin_year']==$sub))
   {
	 
   }
   else if(($admin==$fetch['user'] )&&($fetch['search_detail']==$sub))
   {
	 
   }
    else if(($admin==$fetch['user'] )&&($fetch['assign_proj']==$sub))
   {
	 
   }
    else if(($admin==$fetch['user'] )&&($fetch['project_list']==$sub))
   {
	 
   }
  
    else if(($admin==$fetch['user'] )&&($fetch['master_update']==$sub))
   {
	
   }
    else if(($admin==$fetch['user'] )&&($fetch['create_user']==$sub))
   {
	 
   }
   else if(($admin==$fetch['user'] )&&($fetch['change_pass']==$sub))
   {
	   
   }
   else if(($admin==$fetch['user'] )&&($fetch['priv']==$sub))
   {
	 
   }
    else if(($admin==$fetch['user'] )&&($fetch['career']==$sub))    
   {
	 
   }
    else if(($admin==$fetch['user'] )&&($fetch['contact']==$sub))
   {
	 
   }
	else
      {
   	 header('Location:logout.php');  
      }
	   
  */
  
   

?>