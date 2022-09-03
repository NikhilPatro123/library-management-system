
<?php
include('HeaderMaster2.php');
?>

<div id="page-wrapper" >
     <div id="page-inner">                  
          <div class="row text-center pad-top">                  
          <?php
        include('../MasterConnection.php');                                
        $bookpdf="";
        $bookname="";
        $AUTHORNAME="";    
        $BOOKCOST="";

        $result = mysql_query("SELECT * FROM  BookEntry");		
        while($row = mysql_fetch_array($result))
        {
            
            $bookpdf=$row['bookpdf'];
            $bookname=$row['bookname'];
            $AUTHORNAME=$row['AUTHORNAME'];
            $BOOKCOST=$row['BOOKCOST'];            
          
            
       ?> 

               <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                         <a href="<?php echo $bookpdf;?>" target="_blank" > 
                                <img src="pdf.png" />
                                 <h4><?php echo $bookname;?></h4>
                                 <p><?php echo $AUTHORNAME;?></p>
                         </a>
                    </div>
               </div>     
               <?php
                 
               }
             
              mysql_close($con);
              ?>      
                             
          </div>                          
     </div>
</div>
			
		 
              
    	
		
<?php
include('FooterMaster.php');
?>