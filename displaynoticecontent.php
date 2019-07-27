
<br />
<div class="main_bg">
	<div class="container">
    
    <?php
	include 'db.php';
	$n=$_POST['notice'];
	$sql=mysql_query("select * from notice_details where subject='".$n."'");
		while($arr=mysql_fetch_array($sql))	
		{
		$s_subject = $arr['subject'];	
		$s_title = $arr['title'];	
		$s_date = $arr['date'];	
		$s_notice = $arr['notice'];	
		
?>
    
    
		<div class="main row">
			 
                <div class="contact-form">
               		 <legend><?php echo $s_subject; ?>  notice</legend>
                	<div class="col-md-6 blog_left">
                 		 <div class="col-md-6 ">
                    	 <span>Title:<?php echo $s_title; ?></span>
                 		 </div>
          		    </div>
             
                             
                            <div class="col-md-6 blog_right">
                                <div class="col-md-6 text_left">
                                <span>Date:<?php echo $s_date; ?></span>
                                </div>
                           </div>
                           <div class="col-md-6">
                           <div class="fa-2x">
                           <?php echo $s_notice; ?>
                           </div>
                           </div>
                           
               </div>          
           
         </div>
         <hr />
         
         <?php
		}
		 ?>
      </div>
      
</div>

