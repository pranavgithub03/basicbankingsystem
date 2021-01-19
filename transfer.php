<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Spark Banking System</title>
    <style>
    body{
            background-image: url("money4.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            margin: 0;
    }

    h2{
    position: absolute;
    padding: 10px, 10px;
    float: left;
    margin-left: 60px;
    margin: 10px,10px;
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 25px;
    color:black;
}
        
          .topnav {
          overflow: hidden;
          background-color: #333;
        }
        
        .topnav a {
          float: left;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }
        
        .topnav a:hover {
          background-color: #ddd;
          color: black;
        }
        
        .topnav a.active {
          background-color: #4CAF50;
          color: white;
        }
     
      </style>
      </head>
        
        <div class="topnav">
          <a class="active" href="index.php">Home</a>
        </div>

        <div style="padding-left:16px">
          <h2>Transfer Money</h2>
        </div>
        
        <div
         class="container" style="text-align: center;"><br>

            <form action="config.php" method="POST"><br>

              <input type="text" name="sender" ><br>

              <label class="sender">Sender_Id</label><br><br>
              
              <input type="text" name="receiver" ><br>
              
              <label class="receiver">Receiver_Id</label><br><br>
              
              <input type="text" name="amount" ><br>
              
              <label class="amount">Amount</label><br><br>
                 
                  <button type="submit" class="btn btndet btn-info btn-lg" data-toggle="modal">Transfer Money</button> <br>
            </form>   
        </div>  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>