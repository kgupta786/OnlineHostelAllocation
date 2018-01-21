<?php
include "Room.php";
include "studentpage.php";
include "connection.php";
$block = $_REQUEST["block"];
$query = "select rooms.roomno,rooms.capacity,COUNT(booking.bookingid) as booked,rooms.capacity - COUNT(booking.bookingid) as free from rooms INNER  JOIN booking ON  rooms.roomno = booking.roomno WHERE rooms.block = '$block' and booking.status = 'booked'  GROUP BY rooms.roomno";
$result = mysqli_query($conn,$query);
$roomar = array();
$i =0;
while ($row = mysqli_fetch_array($result))
{
    $obj = new Room($row[0],$row[1],$row[2],$row[3]);
    $roomar[$i] = $obj;
    $i++;
}

$jsondata = json_encode($roomar);
?>




    <script src="jquery-1.11.3.min.js"></script>
    <script>
      $(window).on('load',function () {

          var json =  <?php echo $jsondata ?>

          for (var i = 0; i < json.length; i++) {
              var obj = json[i];
              var rn = obj.roomno;
              var roomno = "rm" + obj.roomno;
              var capacity = parseInt(obj.capacity);
              var booked = parseInt(obj.booked);
              var free = parseInt(obj.free);
              var staus = "";
              if (capacity > booked) {
                  status = "partial";
              }
              else if (free == 0) {
                  status = "filled";
              }
              $("div .row").children('img').each(function () {
                  var frmroomno = $(this).attr("id");
                  if (frmroomno == roomno) {
                      if (status == "partial") {
                          $(this).attr("src", "partial.jpg");
                      }
                      else {
                          $(this).attr("src", "full.jpg");
                      }
                  }

              });

          }
      });
    </script>
    <script type="text/javascript">

        $(document).ready(function() {
            var moveLeft = 20;
            var moveDown = 10;
            var rn1;
            var bn;
            var am;
            $('img').hover(function(e) {
                var rn  = $(this).attr("id").substring(2);
                $.get('getroomdetail.php',{rid:rn},function(data)
                {
                    var d = data.split(",");
                    var tabledata = d[0];
                    var otherdata = d[1].split("-");
                    rn1 = otherdata[0];
                    bn = otherdata[1];
                    am = otherdata[2];

                    $("div#pop-up").html(tabledata);
                });
                $('div#pop-up').show();

            }, function() {
                $('div#pop-up').hide();
            });

                $('img').mousemove(function(e) {
                    $("div#pop-up").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
                });


            $("img").click(function(){
                var imgsrc = $(this).attr("src");
                if(imgsrc == 'full.jpg')
                {
                    alert("Booking Not Possible!!");
                }
                else
                {
                    window.location.assign("makepayment.php?rn=" + rn1 + "&bn=" + bn + "&am=" + am);
                }
            });

        });
    </script>

    <style>
        div#pop-up {
            display: none;
            position: absolute;
            /*width: 280px;*/
            padding: 10px;
            background: #eeeeee;
            color: #000000;
            border: 1px solid #1a1a1a;
            font-size: 90%;
            /*z-index: 100;*/
        }

    </style>

<div class="container">

    <div id="pop-up">

    </div>

    <div class="row" style="min-height: 720px;">
        <h3>1st Floor</h3>
<div class="row" style="min-height:200px;background-color: #f2f2f2">
<img src="download.png"  id="rm100" style="width: 100px;height: 100px;margin-left:50px">&nbsp;&nbsp;
    <img src="download.png" id="rm101" style="width: 100px;height: 100px">&nbsp;&nbsp;
    <img src="download.png" id="rm102" style="width: 100px;height: 100px">&nbsp;&nbsp;
    <img src="download.png" id="rm103" style="width: 100px;height: 100px">&nbsp;&nbsp;
    <img src="download.png" id="rm104" style="width: 100px;height: 100px">&nbsp;&nbsp;
    <img src="download.png" id="rm105" style="width: 100px;height: 100px">&nbsp;&nbsp;
    <img src="download.png" id="rm106" style="width: 100px;height: 100px">&nbsp;&nbsp;
    <img src="download.png" id="rm107" style="width: 100px;height: 100px">&nbsp;&nbsp;
    <img src="download.png" id="rm108" style="width: 100px;height: 100px">&nbsp;&nbsp;
    <img src="download.png" id="rm109" style="width: 100px;height: 100px">&nbsp;&nbsp;
    <img src="download.png" id="rm110" style="width: 100px;height: 100px;margin-left:50px;margin-top: 10px">&nbsp;&nbsp;
    <img src="download.png" id="rm111" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
    <img src="download.png" id="rm112" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
    <img src="download.png" id="rm113" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
    <img src="download.png" id="rm114" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
    <img src="download.png" id="rm115" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
    <img src="download.png" id="rm116" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
    <img src="download.png" id="rm117" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
    <img src="download.png" id="rm118" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
    <img src="download.png" id="rm119" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;



</div><br>
        <h3>2nd Floor</h3>
        <div class="row" style="min-height:200px ;background-color: #f2f2f2">
            <img src="download.png" id="rm100" style="width: 100px;height: 100px;margin-left:50px">&nbsp;&nbsp;
            <img src="download.png" id="rm201" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm202" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm203" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm204" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm205" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm206" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm207" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm208" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm209" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm210" style="width: 100px;height: 100px;margin-left:50px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm211" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm212" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm213" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm214" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm215" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm216" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm217" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm218" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm219" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;

        </div><br>
        <h3>3rd Floor:  <b>A.C Rooms</b></h3>
        <div class="row" style="min-height:200px;background-color: #f2f2f2">
            <img src="download.png"  id="rm300" style="width: 100px;height: 100px;margin-left:50px">&nbsp;&nbsp;
            <img src="download.png"  id="rm301" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png"  id="rm302" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm303" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm304" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm305" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm306" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm307" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm308" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm309" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm310" style="width: 100px;height: 100px;margin-left:50px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm311" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm312" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm313" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm314" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm315" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm316" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm317" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm318" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm319" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;

        </div><br>
        <h3>4th Floor</h3>
        <div class="row" style="min-height:200px;background-color: #f2f2f2">
            <img src="download.png" id="rm400" style="width: 100px;height: 100px;margin-left:50px">&nbsp;&nbsp;
            <img src="download.png" id="rm401" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm402" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm403" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm404" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm405" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm406" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm407" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm408" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm409" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm410" style="width: 100px;height: 100px;margin-left:50px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm411" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm412" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm413" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm414" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm415" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm416" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm417" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm418" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm419" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;

        </div><br>
        <h3>5th Floor</h3>
        <div class="row" style="min-height:200px;background-color: #f2f2f2">
            <img src="download.png" id="rm500" style="width: 100px;height: 100px;margin-left:50px">&nbsp;&nbsp;
            <img src="download.png" id="rm501" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm502" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm503" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm504" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm505" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm506" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm507" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm508" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm509" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm510" style="width: 100px;height: 100px;margin-left:50px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm511" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm512" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm513" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm514" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm515" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm516" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm517" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm518" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm519" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;

        </div><br>
        <h3>6th Floor</h3>
        <div class="row" style="min-height:200px;background-color: #f2f2f2">
            <img src="download.png" id="rm600" style="width: 100px;height: 100px;margin-left:50px">&nbsp;&nbsp;
            <img src="download.png" id="rm601" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm602" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm603" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm604" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm605" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm606" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm607" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm608" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm609" style="width: 100px;height: 100px">&nbsp;&nbsp;
            <img src="download.png" id="rm610" style="width: 100px;height: 100px;margin-left:50px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm611" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm612" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm613" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm614" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm615" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm616" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm617" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm618" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;
            <img src="download.png" id="rm619" style="width: 100px;height: 100px;margin-top: 10px">&nbsp;&nbsp;

        </div><br>








    </div>


</div>
<?php

include "publicfooter.php";

