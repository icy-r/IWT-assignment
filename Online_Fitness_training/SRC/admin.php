<html>
    <head>
        <title>
            Admin Panel
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="5">
        


        <style>
            body{
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                background: #49545e;
                color: white;
            }
            .trainer{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                background: #363232;
                text-align: center;
                padding: 40px;
                box-sizing: border-box;
                border-radius: 6px;
                box-shadow: 0 0 10px #000;
            }
            .trainer h1{
                color: #fff;
                text-transform: uppercase;
                font-weight: 500;
            }
            button{
                border: 0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align: center;
                border: 2px solid #2ecc71;
                padding: 14px 40px;
                outline: none;
                color: white;
                border-radius: 24px;
                transition: 0.25s;
            }
            a{
                text-decoration: none;
                color: white;
            }
            a:hover{
                color: #2ecc71;
            }
            button:hover{
                background: #2ecc71;
            }
            table{
                border-collapse: collapse;
                width: 100%;
                color: #d96459;
                font-family: monospace;
                font-size: 20px;
                text-align: left;
                border: 3px solid #d96459;
                border-spacing: 2px;
                border-radius: 10px;
                box-shadow: 0 0 10px #000;
                margin-top: 20px;
                margin-bottom: 20px;        
            }
            td, th{
                border: 1px solid #d96459;
                padding: 8px;
            }
            th{
                background-color: #d96459;
                color: white;
            }
            tr:hover {background-color: #ddd}
            tr{
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="trainer">
            <div class="trainer-des">
                <h1>
                    Trainer Management
                </h1>
            </div>
            <div class="new-trainer-button">
                <a href="new-trainer.html">
                    <button>
                        New Trainer
                    </button>
                </a>
            </div>
            <div class="trainer-table">
                <table>
                    <thead>
                        <tr>
                            <th>Trainer ID</th>
                            <th> Name</th>
                            <th> Email</th>
                            <th> Phone</th>
                            <th> Address</th>
                            <th> Gender</th>
                            <th> Birthday</th>
                            <th> Position</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "iwt");
                        $sql = "SELECT * FROM trainer";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>". $row['t_ID']. "</td>";
                            echo "<td>". $row['t_name']. "</td>";
                            echo "<td>". $row['t_email']. "</td>";
                            echo "<td>". $row['t_phoneNo']. "</td>";
                            echo "<td>". $row['t_address']. "</td>";
                            echo "<td>". $row['t_gender']. "</td>";
                            echo "<td>". $row['t_dob']. "</td>";
                            echo "<td>". $row['t_position']. "</td>";
                            echo "<td><a href='edit-trainer.php?id=". $row['t_ID']. "'>Edit</a>";
                            echo " ";
                            echo "<a href='delete-trainer.php?id=". $row['t_ID']. "'>delete</a></td>";
                        }
                        mysqli_close($conn);
                        echo "</tbody>";
                        echo "</table>";
                        echo "</div>";
                        echo "</div>";
                        ?>
                        
        </div>
    </body>
</html>