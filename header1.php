<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link href="StyleSheet.css" rel="stylesheet" />
    <title></title>
    <asp:ContentPlaceHolder id="head" runat="server">
        <link href="StyleSheet.css" rel="stylesheet" />
    </asp:ContentPlaceHolder>
</head>
<body>
   
    <div>
        
            <div class="header">VEHICLE RENTAL MANAGEMENT SYSTEM
</div>
        
        <div class="menu">
        <div class="navbar">


<div class="dropdown">
    <button class="dropbtn">
        <a href="home1.php">Home </a>
     
    </button>
 
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Car 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="newcar.php">New Car </a>
   
    <a href="deletecar.php">Delete Car </a>
    <a href="displaycar.php">Display Car </a>
        
     

    </div>
      </div>   
      <div class="dropdown">
    <button class="dropbtn">Employee 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    
   
    <a href="deleteemp.php">Delete Employee </a>
    <a href="displayemp.php">Display Employee </a>
        
     

    </div>
      </div>   
      <div class="dropdown">
    <button class="dropbtn">
        <a href="admin_booking_list.php">Return List </a>
     
    </button>
 
  </div> 
  <div class="dropdown">
    <button class="dropbtn">
        <a href="admin_return_list.php">Booking List </a>
     
    </button>
 
  </div> 
  <div class="dropdown">
    <button class="dropbtn">
        <a href="index.php">Logout </a>
     
    </button>
    
	
  </div>   
 

    </div>


            </div>
</body>
</html>
