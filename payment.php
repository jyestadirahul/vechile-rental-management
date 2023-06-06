<link href="StyleSheet.css" rel="stylesheet" />
<style>
tr{
    height:40px;
}
input[type=number],[type=text]{
    height:30px;
}
    </style>
<div class="header">VEHICLE RENTAL MANAGEMENT SYSTEM

</div>
<form action="" method="post">
    

<div class="content1">
<center>
<h2 style="font-family:Cambria; font-size:25px;">PAYMENT GATEWAY</h2><br>
<img src="card/c1.png" width="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="card/c2.png" width="100px">&nbsp;&nbsp;&nbsp;<img src="card/c3.jpg" width="100px"></center>
    <table style="font-family:Cambria; font-size:18px;">
    <tr>
            <td><b>Card Number</b></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><input min="1111111111111111" max="9999999999999999" type="number" required placeholder="Card Number"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><b>Expiration Date</b></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Month</td>
            <td>Year</td>
            <td>CVV/CVC</td>
        </tr>
        
        <tr>
        <td>
                <select name="" id="" placeholder="Month">
                <option>JANUARY</option>
                        <option>FEBRUARY</option>
                        <option>MARCH</option>
                        <option>APRIL</option>
                        <option>MAY</option>
                        <option>JUNE</option>
                        <option>JULY</option>
                        <option>AUGUST</option>
                        <option>SEPTEMBER</option>
                        <option>OCTOBER</option>
                        <option>NOVEMBER</option>
                        <option>DECEMBER</option>
                </select>
                
</td>   
<td>  
            <select name="" id="" placeholder="Year">
                
        <?php
        $n=10;
        $y= date("Y");
        while($n>0)
        {
            echo "<option>$y</option>";
            $y++;
            $n--;
        }
        ?>
        </select>
        </td>
            <td><input min="000" max="999" type="number"required placeholder="CVV/CVC"></td>
        </tr>
        <tr>
            <td><b>Card Holder Name</b></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan=3><input  onkeypress="return isCharKey(event)"  type="text" required placeholder="Card Holder Name"></td>
        </tr>
        <tr>
            <td><INPUT TYPE="SUBMIT" value="Pay" name="pay"></td>
        </tr>
        
    </table>
</div>
</form>
<?php

if(isset($_POST["pay"]))
{
        echo '<script>alert("Amount Paid Successfully")</script>';
        header('Location: thank.php');
} 
?>
<script>
function isCharKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if ((charCode >=65 && charCode <=90)||(charCode >=97 && charCode <=122)|| charCode==32)
                return true;
            else
			{
				
				return false;
			}
        }
        function isNumberKeyCol(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if ((charCode >=48 && charCode <=58))
                return true;
            else
			{
				
				return false;
			}
        }
        
function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if ((charCode >= 48 && charCode <=57))
                return true;
			else
			{
				
				return false;
			}
        }
		</script>