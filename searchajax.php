<?php 
  include("db_conn.php");
  if (isset($_POST['name']))
   $name = $_POST['name'];
  
   $sql = "SELECT * FROM request WHERE ctrl_num LIKE '{$name}%' OR fullname LIKE '{$name}%'";  
   $query = mysqli_query($conn,$sql);
   $data='';
   while($row = mysqli_fetch_assoc($query))
   {
       $data .=  "<tr><td>". $row["fullname"]."</td>
       <td>". $row["student_num"]."</td>
       <td>". $row["ctrl_num"]."</td>
       <td>". $row["yr_sec"]."</td>
       <td>". $row["program"]."</td>
       <td>". $row["reqtype"]."</td>
       <td>
                  <button class='bg-stone-500 text-white text-sm leading-5 font-medium rounded-3xl px-4 py-2.5 mr-5'>View</button>
                        </td>
       <td></tr>";
   }
    echo $data;
 ?>

