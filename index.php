<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Online Game Play</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="script/myCSS.css"/>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="http://listjs.com/no-cdn/list.js"></script>
            <script src="script/myScript.js"></script>
            <style >
                /*div.player_list{
                    background-color: #333;
                    overflow-y:  auto;
                    white-space: nowrap;
                    width: 300px;
                }*/
                
            </style>
    </head>
    <body>
       
        <?php
            $servername = "localhost:3306";
            $username = "root";
            $password = "password";

            // Create connection
            $conn = new mysqli($servername, $username, $password,"akash");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 


            $id = $name = $email = $score = $comment = $rank = $event1 = $event2 = $event3 = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $id = test_input($_POST['id']);
              $query = "select * from gameplay where id IN ('$id')";
              
              $result = $conn->query($query);
              if ($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  $name=  test_input($row[fname]);
                  $email= test_input($row[email]);
                  $score = test_input($row[score]);
                  $rank = test_input($row[rank]);
              }

            }
            function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }


        ?>
        
        <div class="full">
        <div class="header_bar">
            Game Scorings for <?php echo $name; ?>
        </div>
            <div>
                <div class="player_body">

                    <div class="player_score">
                        <div class="image_weget">
                            
                            <?php            
                            if($row[img]!=null)
                                    echo $row[img];

                                ?>
                        </div>
                        <div class="score_widget">
                            <p >Your Score</p>
                            <div class="score_color"><?php echo $score;?></div>
                            <div class="rank_color"> Your Rank - <?php echo $rank?></div>
                        </div>


                    </div>

                </div>
                <div class="player_hist">
                    
                    <p id="header">Activity</p><br/>
                    <div class="event">
                    <div class="para"><h3 >Event1</h3>
                        Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk.</div><br/>
                    <div class="para"><h3 >Event2</h3>
                        Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk.</div><br/>
                    <div class="para"><h3 >Event3</h3>
                        Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk.</div>
                    </div><br/><br/>
                    
                    <p id="header">History</p>
                    <div class="event">
                    <div class="para"><h3 >History1</h3>
                        Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk.</div><br/>
                    <div class="para"><h3 >History2</h3>
                        Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk.</div><br/>
                    <div class="para"><h3 >History3</h3>
                        Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk. Ths ash usaue asdhihej asgdsf kjhask fiueb aeba asuhka akhuhho asjd hakjq ashkfhi sahdfh ajkaui. aduig shak hsahdk.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="win_body">
            
            <div class="player_list"  scrolling="auto">
                
                <div class="serh">
                    <input id="search" type="search" placeholder="Type a name"/>
                </div>
                <ul class="list">
                    <?php 
                        $query="select fname,id from gameplay";
                        $result = $conn->query($query);
                        
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                ?> <div class="li" ><li><h3 class="name"><form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" > 
                                    <input type="hidden" name="id" value="<?php echo $row[id]?>"/>                                    
                                    <input type="submit" name="name" value="<?php echo $row[fname]?>" style="background-color:<?php 
                                        if($id==$row[id])
                                            echo "#F0EFEC";
                                        else {
                                            echo "white";
                                        }?>; height: 50px; width: 100%;text-align: left;padding-left: 36px;"/>
                                            </form>></h3></li></div> <br/>
                            <?php                           
                            }
                        }else {
                            echo "0 results";
                        }
                    ?>
                    
                </ul>
                <script src="http://listjs.com/no-cdn/list.js"></script>
            <script >
                var options = {
                    valueNames: [ 'name' ]
                  };

                var userList = new List('list', options);
            </script>
            </div>
            
            
            
            
            
        </div>
        <?php
            
            mysql_close($conn);
        ?>
    </body>
</html>
