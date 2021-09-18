<html>
    <head>
       <title>Ví dụ</title>
       <script type = "text/javascript" 
          src = "jquery-3.6.0.min.js"></script>
  <script type = "text/javascript" language = "javascript">
          $(document).ready(function() {
             $("#driver").click(function(event){
                $.ajax( {
                   url:'result.html',
                   success:function(data) {
                      $('#stage').html(data);
                   }
                });
             });
          });
       </script>
    </head>
 <body>
  <p>Nhấp vào nút để tải tệp result.html:</p>
     <div id = "stage" style = "background-color:blue;">
          STAGE
     </div>
  <input type = "button" id = "driver" value = "Load Data" />
  </body>
 </html>