<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Samskriti Hall-Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<!DOCTYPE html>
<html lang="en">
  <head>
<?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
<?php include('header.php');?>
    <!-- Sidebar menu-->
<?php include('sidebar.php');?>
    <main class="app-content"><div class="app-title">
      <div>
          <h1>Booking Service Paid Transaction Details </h1>
          <!-- <p>Table to display analytical data effectively</p> -->
          <p></p>
      </div>
      
	      </div>
	 
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
		  
            <div class="tile-body">
			 <?php include('cal.php'); ?>
						  <form name="form1" method="post" role="form" action="date_paid_service_booking_details_view.php" id="formID">

                                           <table class="table table-striped table-bordered table-hover">
         <tr>
           <td><label>Select From Date</label></td>
           <td><?php					
      $date_default = "";
     
      if(isset($row['date']))
      {
        $date_default =$row['date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("date1", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1800, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
           <td>&nbsp;</td>
           <td><label>Select To Date</label></td>
           <td><?php					
      $date_default = "";
     
      if(isset($row['date']))
      {
        $date_default =$row['date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("date2", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1800, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
         </tr>
         <tr>
           <td colspan="4"><label><button type="submit" class="btn btn-primary">Search</button></label></td>
           <td>&nbsp;</td>
         </tr>
       </table>
</form>

      
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
  <tr>
    <th width="27">Slno</th>
    <th width="58">Service Name </th>
    <th width="42">User name </th>
    <th width="88">Booking Date </th>
    <th width="72">Booking Price </th>
    <th width="105">Booking Description </th>
    <th width="111">Booking Status </th>
    
    
  </tr>
  </thead>
  <tbody>
   <?php
  include('../dbconnect/dbconnection.php');
  $sl=1;
  
  $tot=0;
  $sql="select * from service_booking_details sd,event_service_details es,user_details ud where sd.service_id=es.services_id and sd.user_id=ud.user_id and sd.booking_status='PAID' ";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  
  if($row['booking_status']!='Cancled')
  {
  $tot=$tot+$row['booking_price'];
  }
  ?>
  
  <tr>
    <td><?php echo $sl++;?></td>
    <td><?php echo $row['services_name'];?></td>
    <td><?php echo $row['user_name'];?></td>
    <td><?php echo $row['book_date'];?></td>
    <td><?php echo $row['booking_price'];?></td>
    <td><?php echo $row['booking_discription'];?></td>
    <td><div <?php if($row['booking_status']=='Pending'){ ?> class="btn btn-warning" <?php } ?>
	<?php if($row['booking_status']=='Cancled'){ ?> class="btn btn-danger" <?php } ?>
	<?php if($row['booking_status']=='Confirmed'){ ?> class="btn btn-success" <?php } ?>
	>
	
	<?php echo $row['booking_status']?></div></td>
   
   </tr>
  <?php
  }
  ?>
  </tbody>
   <tr>
    <td></td>
    <td</td>
    <td></td>
	 <td></td>
    <td><strong>Total Booking Amount</strong></td>
    <td><strong><?php echo $tot;?></strong></td>
   
    <td></td>
   
    <td></td>
  </tr>
</table>
 



</div>
          </div>
        </div>

</div>    </main>

    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
	<?php include('footer.php'); ?>

</body>
</html>
