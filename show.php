<html>
    <head>
        <title>Show</title>
    </head>
    <body>
        <table border="2px">
        <tr>
            <td><p>Content</p>
            </td>
        </tr>
            
               <?php
                    $con = mysqli_connect('localhost','root','','mysqli_login') or die("error!");
                    
                    $query = mysqli_query($con,"SELECT * FROM story");
                    while($row = mysqli_fetch_array($query))
    {?>
                    <tr><p>
          <td><p><?php echo $row['content']; ?></p></td>          
                    </p>
                    </tr>
    <?php   
    }
    
        
                    ?>
           
        </table>
    </body>
</html>