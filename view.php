<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Spark Banking System</title>
    <style>
    body{
            background-color: green;
            background-repeat: no-repeat;
            background-size: 100%;
            margin: 0;
    }
    table{
           border-collapse:collapse;
           width: 100%;
           color: black;
           font-size:25px;
           text-align: center;
           }

           th{
               background-color:yellow;
               padding:10px;
               text-align: center;
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
         <!-- <a href="transfer money.php">Transfer Money</a>-->
        </div>
        </header>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>View</th>
            </tr>

            <?php
				$conn = mysqli_connect("localhost","root","","bank");
				if($conn -> connect_error){
					die("connection failed:".$conn->connect_error);
				}
				$sql = "SELECT * from customer";
				$result = $conn -> query($sql);
				if($result-> num_rows>0)
				{ 
					while($row = $result-> fetch_assoc())
					{
                    ?>
                      <tr class="tablerow" id="tablerow">
							<td><?php echo $row["id"]; ?></td>
							<td><?php echo $row["name"]; ?></td>
							<td>
								<button type="button" class="btn btndet btn-info btn-lg" data-toggle="modal" data-target="#myModal<?php echo $row["id"]; ?>">View Details</button>
							</td>
						</tr>

						<!-- Modal -->
						<div id="myModal<?php echo $row["id"]; ?>" class="modal fade" role="dialog">
						  <div class="modal-dialog">

						    <!-- Modal content-->
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						        <h4 class="modal-title">Details of <?php echo $row["name"]; ?></h4>
						      </div>
						        <div class="modal-body">
						      	<div class="row">
								    <div class="col-sm-4" style="background-color:lavender;">Email:</div>
								    <div class="col-sm-8" style="background-color:lavenderblush;"><?php echo $row["email"]; ?></div>
                                </div> 
                                
						        <div class="row">
								    <div class="col-sm-4" style="background-color:lavender;">Balance:</div>
								    <div class="col-sm-8"style="background-color:lavenderblush;"><?php echo $row["balance"];?></div>
								</div> 
						        </div>
						      </div>						     
						    </div>
						  </div>
						</div>
                        <?php
                }	
            }
				else{
					echo "0 result";	
				}

				$conn -> close();
				?>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        </body>
        </html>