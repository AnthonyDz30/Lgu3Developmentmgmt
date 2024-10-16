<?php 
    include('../admin/assets/config/dbconn.php');


    if(isset($_POST['displaysend']))
    {
        $table = '<table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number</th>
                            <th scope="col">Address</th>
                            <th scope="col">Business Name</th>
                            <th scope="col">Commercial Address</th>
                            <th scope="col">Date of Application</th>
                            <th scope="col">Period of Date</th>
                            
                        </tr>
                    </thead>';

        $sql = "SELECT * FROM registration";
        $result = mysqli_query($conn, $sql);
        $number = 1;
        while ($row = mysqli_fetch_assoc($result))
        {
            $id = $row['id'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $email = $row['email'];
            $phone = $row['phone'];
            $address = $row['address'];
            $name_owner = $row['name_owner'];
            $lot_area = $row['lot_area'];
            $date_application = $row['date_application'];
            $period_date = $row['period_date'];


            $table.='<tr>
                        <td scope="row">'.$number.'</td>
                        <td>'.$fname.'</td>
                        <td>'.$lname.'</td>
                        <td>'.$email.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$address.'</td>
                        <td>'.$name_owner.'</td>
                        <td>'.$lot_area.'</td>
                        <td>'.$date_application.'</td>
                        <td>'.$period_date.'</td>                   
                    </tr>';
                    $number++;
        }
        $table.='</table>';
        echo $table;
    }
?>

    

