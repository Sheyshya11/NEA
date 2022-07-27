<html>
    <head><title>
        Bill data entry form
    </title></head>

 <body>
     
 <h2>

 Bill  Data Entry Form
 </h2>
 <form action="processBill.php" name="Bill"  method="POST" >
 <label for="">Enter Bill ID:
</label>
<input type="text" name="Bill-id" value="bill-id"/><br><br>
 <label for="">Enter SC NO:
</label>
<input type="text" name="SC_no" value="SC-no"/><br><br>
 <label for="">Enter Date of reading:
</label>
<input type="date" name="Date_of_reading" value="reading"/><br><br>
 <label for="">Enter Current Reading:
</label>
<input type="date" name="curr_reading" value="current-reading"/><br><br>
 <label for="">Enter Previous month:
</label>
<input type="date" name="Prev_Month" value="previous-month"/><br><br>
 <label for="">Enter Bill Month:
</label>
<input type="text" name="bill_month" value="billMonth"/><br><br>
 <label for="">Enter bill year:
</label>
<input type="text" name="bill_year" value="Bill-year"/><br><br>
 <label for="">Enter bill amount:
</label>
<input type="text" name="bill_amount" value="Bill-amount"/><br><br>
 <label for="">Enter Status:
</label>
<input type="text" name="Status" value="status"/><br><br>


<input type="submit" value="post form">

 </form>
 </body>


</html>