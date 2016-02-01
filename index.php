  <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="materialize/css/materialize.min.css" type="text/css" />
        <link rel="stylesheet" href="DataTables/media/css/jquery.dataTables.min.css" type="text/css" />
        <script src="DataTables/media/js/jquery.js"></script>
        <script src="DataTables/media/js/jquery.dataTables.min.js"></script>
        <script src="materialize/js/materialize.js"></script>
         <script src="materialize/js/materialize.min.js"></script>

         <script type="text/javascript">
            $('#foo').dataTable();
         </script>
    <title>
        DHIS USERS
    </title>
    </head>
    <body>
        <div class="container">
        <div class="col s6">
        <div class="dhisapi">
    <h2 style="color:red">DHIS View Users </h2>
    
    <?php
    
        
       // echo "api started";
        
        $username = "bootcamp2016";
        $password = "Bootcamp2016";
        $t_fetched=0;
        $count=0;
        

                
                $url = "http://test.hiskenya.org/api/users.json";

                
                // initailizing curl
                $ch = curl_init();
                //curl options
                curl_setopt($ch, CURLOPT_POST, false);
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
                
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                
                //execute
                $result = curl_exec($ch);
                // echo $result;
                $_result = (json_decode($result, true));

                // var_dump($_result['users']);

                ?>

                <table id="foo" class="striped">
                    <thead>
                        <th>User ID</th>
                        <th>Name</th>
                    </thead>
                    <tbody>
                        <?php 
                        foreach($_result['users'] as $key => $value):
                            echo "<tr>";
                                extract($value);
                                echo "<td>{$id}</td>";
                                echo "<td>{$name}</td>";
                                echo "<td><a href='view.php?id={$id}'>View More</a></td>";
                            echo "</tr>";
                        endforeach;
                         ?>
                    </tbody>
                    
                </table>
                <?php
                curl_close($ch);

        // if($result)
        // {
        //     $json=json_decode($result,TRUE);
        //     if(isset($json['users']))
        //     {
        //         $t_fetched=$t_fetched +sizeof($json['users']);
        //         foreach($json['users'] as $key =>$value)
        //         { //echo '<p>Name : '.$data['result']['name'].'</p>';
        //             echo ',p>Name'.$json['users']['id'].'</p>';
        //         }
        //     }
        // }
    ?>
        </div>
    </div>
</body>
</html>