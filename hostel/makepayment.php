<?php
include "studentpage.php";
include  "connection.php";
$roomno = $_REQUEST["rn"];
$block = $_REQUEST["bn"];
$amount = $_REQUEST["am"];

$rollno = $_SESSION["roll"];

$_SESSION["roomno"] = $roomno;
$_SESSION["block"] = $block;
$_SESSION["amount"] = $amount;
?>
<script src="jquery-1.11.3.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

    $(document).ready(function () {
        $("#btnpayment").click(function () {
            var options = {
                "key": "rzp_test_dRWiKHS7zr2Gki",
                "amount": parseInt($("#amount").val()) * 100,
                "name": "Hostel Allocation",
                "description": "Purchase Description",
                "image": "http://www.indianrail.gov.in/images/rail_logo_new_red.gif",
                "handler": function (response) {
                    if( response.razorpay_payment_id == "")
                    {
                       // window.location.href = "paymentdone.php?status=failed";
                        alert("payment failed, please try  again!!");
                    }
                    else {
                        window.location.href = "paymentdone.php";
                    }
                },
                "prefill": {
                    "name": $("#name").val(),
                    "email": $("#emailid").val()
                },
                "notes": {

                },
                "theme": {
                    "color": "#F37254"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        });
    });

</script>

<input type="hidden" id="name" value="<?php echo $_SESSION["name"] ?>" >
<input type="hidden" id="emailid" value="<?php echo $_SESSION["email"] ?>" >
<input type="hidden" id="amount" value="<?php echo $amount ?>" >
<table class="table table-bordered">
    <tr>
        <td colspan="Book Room"></td>
        <td><?php echo ""?></td>
    </tr>

    <tr>
        <td>
            Block Name
        </td>
        <td><?php echo $block?></td>
    </tr>
    <tr>
        <td>
            Room No
        </td>
        <td><?php echo $roomno?></td>
    </tr>
    <tr>
        <td>
            Amount
        </td>
        <td><?php echo $amount?></td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="button" id="btnpayment" class="btn btn-danger btn-block" value="Make Payment" >
        </td>

    </tr>
</table>

<?php
include "publicfooter.php";
