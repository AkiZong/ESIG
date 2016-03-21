<META HTTP-EQUIV="refresh" CONTENT="900;URL=./wp-content/themes/videotube-child/SignOut.php">

<center><h3><font color="red"><label id="error" ><?php echo $_SESSION['error']; session_destroy(); ?></label></font></h3>
<h3><table width="900" border="2" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" ><strong><center>Manually Reported Investments</center></strong></td>
<td colspan="3" ><strong><center><label id="TotalMoney">$0</label></center></strong></td>
</tr>
<tr>
<form action="" method="post" onSubmit="validateInvestment()" >
<td width="300"><input type="text" id="symbol" style="display:none;" value="Symbol" onclick=""  /></td>
<td width="300"><input type="text" id="quantity" style="display:none;" value="Quantity" onclick="" /></td>
<td width="300"><input type="text" id="money" style="display:none;" value="Money" onclick="" /></td>
<td width="20"><input type="submit"  id="Add" style="display:none;" value="Add" /></td>
</form>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td width="10"><center><button onclick="showFields()">Add a mutual fund, ETF, or stock </button></center></td>
<tr>
<td width="10"><center><button onclick="showAccount()">Add Account</button></center></td>
</tr>
<tr>
<form action="./wp-content/themes/videotube-child/InsertAccount.php" method="post" onSubmit="validateAccount()" >
<td width="300"><input type="text" id="account" style="display:none;" value="Account" onclick=""  /></td>
<td width="20"><input type="submit" name="submitInvestment"id="addAccount" style="display:none;" value="Add" /></td>
</form>
</tr>
<tr>
<td width="10"><center><button onclick=""  style="display:none;" >Add Cash</button></center></td>
</tr>
</table>
</td>
</h3>
</tr>
</table></center>

<br><br><center><img  src="http://emergingstar.ca/wp-content/uploads/2014/07/Manually-imported-investments.jpg"  width="450" height="450" />

<form action="http://emergingstar.ca/?page_id=1985">
<input type="submit" value="Go to Action Plan" />
</form><br><br><br>

<script>
function showFields() {
document.getElementById("symbol").style.display = "block";
document.getElementById("quantity").style.display = "block";
document.getElementById("money").style.display = "block";
document.getElementById("Add").style.display = "block";
}

function showAccount() {
document.getElementById("account").style.display = "block";
document.getElementById("addAccount").style.display = "block";
}

function validateInvestment() {
var symbol = document.getElementById('symbol').value;
var quantity = document.getElementById('quantity').value; 
var money = document.getElementById('money').value;  

if(symbol != "Symbol" && symbol != "" && symbol != NULL && symbol.length < 10)
{
    if(quantity != "" && quantity != NULL && quantity > 0 && quantity < 100)
    {
         if(money != "" && money != NULL  && !(isNAN(money)))
         {
             return true;
         }
         else {
            document.getElementById('error').innerHTML = 'Money is invalid!';
    }
    else {
        document.getElementById('error').innerHTML = 'Quantity is invalid!';
    }
}
else {
  document.getElementById('error').innerHTML = 'Symbol is Invalid!'; 
}
 return false;
}

function validateAccount() {
var account = document.getElementById('account').value;

if(account != NULL && account != "")
{
   return true;
}
else {
document.getElementById('error').innerHTML = 'No Account was entered!';
return false;
}
}
</script>
<? get_footer(); ?>
