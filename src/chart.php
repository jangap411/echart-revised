
<?php
//chart.php
/*
*/

require_once('server.php');
//require_once('login.php');
/*
*/
if(empty($_SESSION['id'])){
  $_SESSION['message'] = "Please Login to access you Chart details";
  header('location: login.php');
}
$id = $_SESSION['id'];


?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Jedidiah Angap">
  <title>TB eChart | Patient Chart</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
 

<style>
  .title{
    padding-top:5%;
  }
</style>
  <script>
    
     //motivating words
    const words = [
      'Great job','keep going','power mangi','work mas go yet','have faith in medication','you can do better',
      'dont be afraid',''
    ]; //array of words to use


    $(document).ready(function() {
      var calendar = $('#calendar').fullCalendar({
      editable:true,
      header:{
        left:'prev,next today',
        center:'title',
        right:'month'
      },
      events: 'load.php',
      selectable:true,
      selectHelper:true,
      select: function(start, end, allDay)
      {
        var title = "Medication Taken"//prompt("Enter Event Title");
        /*
        let title = prompt("Enter Event Title");
        */
        if(title)
        {
          var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
          var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
          var pid =<?php echo $id ?>;
          //console.log(id);
          $.ajax({
            url:"insert.php",
            type:"POST",
            data:{title:title, start:start, end:end, pid:pid},
          success:function()
            {
              calendar.fullCalendar('refetchEvents');
              //alert("Added Successfully");--->changed to
              //alert("Keep Going Almost to the End!")
              const finalText = words[Math.floor(Math.random() * words.length)];//randomize the words to be displayed
              //speech.text = finalText;
              alert(finalText);//displays the alert message and words
            }
          })
        }
      },
      editable:true,
      eventResize:function(event)
      {
        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
        var title = event.title;
        var id = event.id;
        $.ajax({
          url:"update.php",
          type:"POST",
          data:{title:title, start:start, end:end, id:id},
          success:function(){
          calendar.fullCalendar('refetchEvents');
          alert('Event Update');
          }
        })
      },

      eventDrop:function(event)
      {
        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
        var title = event.title;
        var id = event.id;
        $.ajax({
          url:"update.php",
          type:"POST",
          data:{title:title, start:start, end:end, id:id},
          success:function()
          {
          calendar.fullCalendar('refetchEvents');
          alert("Event Updated");
          }
        });
      },

      eventClick:function(event)
        {
        if(confirm("Are you sure you want to remove it?"))
        {
          var id = event.id;
          $.ajax({
            url:"delete.php",
            type:"POST",
            data:{id:id},
            success:function()
            {
              calendar.fullCalendar('refetchEvents');
              alert("Event Removed");
            }
          })
        }
      },

      });
    });
   
  </script>
 </head>
 <body>

<?php  include 'header.php';?>
  <!--
    <h2 align="center"><a href="#">Jquery Fullcalandar Integration with PHP and Mysql</a></h2>
  -->
  <div class="title">
    <h2 align="center">National Electronic Tuberculosis Treatment Chart</h2>
    <h3 align="center">National Department of Health</h3>
  </div>
      <br/>
      <!--calender will be inserted here-->
      <div class="container">
        <div id="calendar"></div>
      </div>

      <img class="big-circle" src="../img/big-eclipse.svg" alt="" />
      <img class="medium-circle" src="../img/mid-eclipse.svg" alt="" />
      <img class="small-circle" src="../img/small-eclipse.svg" alt="" />

  </body>
</html>
