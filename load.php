<link rel="stylesheet" href="style.css"/>
<?php



$con = mysqli_connect("localhost","root","","purple_charteau");





$que =  "SELECT * FROM apartments WHERE carpark ='3' AND  id < '".$_POST['id']."' ORDER BY id DESC LIMIT 3 "; 

$query =  mysqli_query($con,$que);

$output = "";



while($row=mysqli_fetch_assoc($query))

{  $output .='
    
    <div class="image-showcase-div">
    <form action="" method="GET">
        <div class="image-show-case" >
    
        <button class="itemsubbtn" type="submit"></button>
            <div class="top-head"> &nbsp;featured &nbsp;</div>
        

            <div class="down-info">
                    <div class="first">&nbsp; '.$row['purpose'].' &nbsp; </div>
                    <div class="second">$ '.$row['price'].'   /mo</div>
                <div class="grids">
                    <div class=""><img class="icon" src="icons/bed.png" alt="">'.$row['id'].'   </div> 
                    <div class=""><img class="icon" src="icons/shower.png" alt="">'. $row['toilets'].' </div> 
                    <div class=""><img class="icon" src="icons/car.png" alt="">'.$row['carpark'].'</div> 
                    <div class=""><img class="icon" src="icons/sq ft.png" alt=""> '.$row['measurement'].'  </div> 
      
                </div>
            </div>
            <div class="section-img">   '.'<img src="data:image;base64,'.base64_encode($row['image4']).'">'.'  </div>
         
             
            <div> </div>
      

    </div>
    </form>
    </div>
  
    ';
 
  
 $id =$row['id'];
   
}




$output .='
    <div class="reload-btn">

<div class="center-btn-div" id="remove_row">
<a href="dump2.html">
<button class="center-btn" id="load_more" data-id="'.$id.'"> load more</button>
</a>

</div>

</div>



';







echo $output;




?>


