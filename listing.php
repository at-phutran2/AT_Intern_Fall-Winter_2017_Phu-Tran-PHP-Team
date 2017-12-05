	    <?php    
        
    require "config.php";    
    // if($errMsg == '') {
            // try {
            //     $stmt = $connect->prepare('SELECT id, fullname, username, password, email FROM pdo');
            //     $data = $stmt->fetch(PDO::FETCH_ASSOC);

            //     if($data == false){
            //         $errMsg = "User $username not found.";
            //     }
        
    // if(isset($_GET['id'])){    
    // $sql = "delete from test2 where id = '".$_GET['id']."'";    
    // $result = mysql_query($sql);    
    // }    
        
    // $sql = "select * from pdo";    
    // $result = mysql_query($sql);    
    ?>    
    <html>    
        <body>    
            <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
                <tr>    
                    <td>Id</td>      
                    <td>username</td>    
                    <td>Email</td> 
                    <td>fullname</td>   
                       
                </tr>   
                 <?php
                    $sql = 'SELECT id, fullname, username, email FROM pdo';
                    foreach ($connect->query($sql) as $row) {
                        echo "<tr >
                        <td>$row[id]</td>
                        <td>$row[username]</td>
                        <td>$row[email]</td>
                        <td>$row[fullname]</td>
                        </tr>";
                    }

                 ?>

            </table>    
        </body>    
    </html>    
