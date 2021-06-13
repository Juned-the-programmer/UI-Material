<?
    
    $phoneno=filter_input(INPUT_POST,'Phoneno');
    $name=filter_input(INPUT_POST,'Name');
    $pass=filter_input(INPUT_POST,'Password');
    $passr=filter_input(INPUT_POST,'Password-repeat');
    
    $user="root";
    $servername="localhost";
    $dbname="banas";
    $tablename="signup";
    $pass="";
    
    $conn=new mysqli($servername,$user,$pass,$dbname);
    
    if(mysqli_connect_error())
    {
        die("Connection Failed(".mysql_connection_errno().')'.mysqli_connect_error());
    }
    else
    {
        $sql = "INSERT INTO SIGNUP(Phoneno,Name,Password,Password-repeat) values('$Phoneno','$name','$pass','$passr')";
        if($conn->query($sql))
        {
            echo "New Record Successfully"
        }
        else
        {
            echo "Error:".$sql."<br>".$conn->error;
        }
        $conn->close();
    }
?>