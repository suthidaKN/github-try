<table border = 1 >

<br>New ProductRate <a href="?controller=ProductRate&action=newProductRate">Click</a><br>
<tr> 

    <td>PID</td>

    <td>PName</td>

    <td>Qty</td>

    <td>Price</td>

    <td>ScreenPrice</td>

    <td>Update</td>

    <td>Delete</td>

</tr>

<?php foreach($ProductRate_list as $ProductRate)

{

    echo "<tr><td>$ProductRate->PID</td>

    <td>$ProductRate->PName</td>

    <td>$ProductRate->Qty</td>

    <td>$ProductRate->Price</td>

    <td>$ProductRate->ScreenPrice</td>

    <td>[<a href='?controller=ProductRate&action=updateForm&QID=$ProductRate->PID'>Update</a>]</td>

    <td>[<a href='?controller=ProductRate&action=deleteConfirm&QID=$ProductRate->PID'>Delete</a>]</td>

    </tr>";

}

echo "</table>";

?>