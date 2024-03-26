
<?php
// $con = mysqli_connect("localhost","root","","purple_charteau");


//if (!$con){

   // die( "connection Error");
//}



//$query = "SELECT * FROM apartments WHERE carpark ='3' ORDER BY id DESC LIMIT 6 " ;
//$results = mysqli_query($con,$query);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 .0">
    <link rel="stylesheet" href="style.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.4.js"> </script>
    <title>Welcome to Purple Charteau</title>
    <link rel="shortcut icon" type="img/png" href="">
    
</head>
<body>
<header>
<!--pc Nav bar-->
<div class="onscroll-function">
<div class="pc-nav-container"  id="scroll">
<div class="pc-header">
    <div class="logo-div">
    <img class="logo" src="images/plain logo.png" alt=""  id="logo">
    </div>

<nav>
    <ul class="nav-links">
        <li class="text-effect"><a href="#" class="effect"> home</a></li>
        <li class="text-effect" ><a href="#" class="effect">about </a></li>
        <li class="text-effect"><a href="#" class="effect">properties</a></li>
        <li  class="text-effect"><a href="#" class="effect">services</a></li>
        <li  class="text-effect"><a href="#" class="effect">Contact</a></li>

    </ul>
</nav>

        <a href="adminlogin.php">
    <button class="btn1"> Login </button>
        </a>
    </div>
</div>
</div>
<!--pc Nav bar-->


</header>


<!--write up and images -->
<div class="top-container">

<div class="content-container">

        <div class="writeup-section">
        <h1>The home you're dreaming of is waiting for you</h1>
<h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, quidem. Debitis corporis sed, nam assumenda laborum dignissimos ipsum iste? Facilis enim veniam velit molestias fugiat vitae blanditiis commodi iusto. Molestiae?</h5>

<form action="search_results.php" method="POST">
<div class="search-container">

    
        <div class="sub-headings">
        <div>buy or rent
<div>

    <!--drop down selection  -->
    <div class="select-menu">
        <div class="select-btn">
        <span class="sBtn-text">Select your option</span>
        <i class=""> <img class="icon" src="icons/sort-arrows-couple-pointing-up-and-down.png" alt=""></i>
        </div>
        
        <ul class="options" id="selection" >
            <label class="option" for="Select">
                <i > <input type="radio" name="property" id="Select" value=""  class="radioinput" checked> </i>
                <span class="option-text">Select</span>
            </label>
        
       
            <label class="option" for="for rent">
                <i > <input type="radio" name="property" id="for rent" value="for rent"  class="radioinput" > </i>
                <span class="option-text">For Rent</span>
            </label>
        
            <label class="option" for="For sale">
                <i > <input type="radio" name="property" id="For sale" value="For sale"  class="radioinput"> </i>
                <span class="option-text">For sale</span>
            </label>
        
            <label class="option" for="For closures">
                <i > <input type="radio" name="property" id="For closures" value="For closures"  class="radioinput"> </i>
                <span class="option-text">For closures</span>
            </label>
        
            <label class="option" for="new construction">
                <i > <input type="radio" name="property" id="new construction" value="new construction"  class="radioinput"> </i>
                <span class="option-text">new construction</span>
            </label>
        
            <label class="option" for="New listing">
                <i > <input type="radio" name="property" id="New listing" value="New listing"   class="radioinput"> </i>
                <span class="option-text">New listing</span>
            </label>
        

            <label class="option" for="open house">
                <i > <input type="radio" name="property" id="open house" value="open house"  class="radioinput" > </i>
                <span class="option-text">open house</span>
            </label>

            <label class="option" for="reduced price">
                <i > <input type="radio" name="property" id="reduced price" value="reduced price"  class="radioinput" > </i>
                <span class="option-text">reduced price</span>
            </label>


            <label class="option" for="resale">
                <i > <input type="radio" name="property" id="resale" value="resale"  class="radioinput"> </i>
                <span class="option-text">resale</span>
            </label>

        </ul>
        
    </div>
        

</div>
            
        </div>


        <div>looking for
            <div>
<!--drop down selection  -->
 <div class="container">
            <div class="select-btnn">
                <span class="btn-text">property type</span>
                <span class="arrow-dwn">
                    <i ><img class="icon" src="icons/sort-arrows-couple-pointing-up-and-down.png" alt=""></i>
                </span>
            </div>
        
    <ul class="list-items"  id="selection3">
             <!------------------------------------------------>
                <label class="item" for="all">
                  
                    <span class="checkbox">
                        
                        
                    </span>
                    <span class="item-text">all 

                        
                    </span>
                    
                </label>
                <input type="checkbox" name="propertytype[]" id="all" value=""  class="checkboxinput" checked>
                                        <!------------------------------------------------>

                <label class="item" for="commercial">
                    <span class="checkbox">
                        
                    </span>
                    <span class="item-text">commercial</span>
                </label>
                <input type="checkbox" name="propertytype[]" id="commercial" value="commercial"  class="checkboxinput">

                    <!------------------------------------------------>
                <label class="item" for="office">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">office</span>
                </label>
                <input type="checkbox" name="propertytype[]" id="office" value="office"  class="checkboxinput">
                <!------------------------------------------------>
 
         </ul>

</div>


        </div>

        </div>
        <div>location
<div>

        <!--drop down selection  -->
     <!--drop down selection 3  -->
     <div class="select-menu2">
        <div class="select-btn2">
        <span class="sBtn-text2">Select your option</span>
        <i class=""> <img class="icon" src="icons/sort-arrows-couple-pointing-up-and-down.png" alt=""></i>
        </div>
        
        <ul class="options2" id="selection2" >
            <label class="option2" for="all">
                <i > <input type="radio" name="States" id="all" value=""  class="radioinput" checked> </i>
                <span class="option-text2">all</span>
            </label>
        
       
            <label class="option2" for="Abia">
                <i > <input type="radio" name="States" id="Abia" value="Abia"  class="radioinput" > </i>
                <span class="option-text2">Abia</span>
            </label>
        
            <label class="option2" for="kogi">
                <i > <input type="radio" name="States" id="kogi" value="kogi"  class="radioinput"> </i>
                <span class="option-text2">kogi</span>
            </label>
        
            <label class="option2" for="lagos">
                <i > <input type="radio" name="States" id="lagos" value="lagos"  class="radioinput"> </i>
                <span class="option-text2">lagos</span>
            </label>
        
            <label class="option2" for="delta">
                <i > <input type="radio" name="States" id="delta" value="delta"  class="radioinput"> </i>
                <span class="option-text2">delta</span>
            </label>
        
            <label class="option2" for="kaduna">
                <i > <input type="radio" name="States" id="kaduna" value="kaduna"   class="radioinput"> </i>
                <span class="option-text2">kaduna</span>
            </label>
        

            <label class="option2" for="ogun">
                <i > <input type="radio" name="States" id="ogun" value="ogun"  class="radioinput" > </i>
                <span class="option-text2">ogun</span>
            </label>

            <label class="option2" for="osun">
                <i > <input type="radio" name="States" id="osun" value="osun"  class="radioinput" > </i>
                <span class="option-text2">osun</span>
            </label>


            <label class="option2" for="rivers">
                <i > <input type="radio" name="States" id="rivers" value="rivers"  class="radioinput"> </i>
                <span class="option-text2">rivers</span>
            </label>

        </ul>
        
    </div>

</div>

        </div>
         </div>
    <div class="search-btn-div"><button class="btn2" type="submit"> go </button></div> 

    
</div>


</div>
</form>

<!--------------------------------------------------->
<div class="image-section" id="slide">
    <b><img src="images/living-room-ideas-parkdale-estate-1669771664.png" alt="" width="" height="" class="section-img" ></b>
    <b> <img src="images/ma-interior-design-1.jpg" alt="" width="" height="" class="section-img" ></b>
    <b><img src="images/wall-416060__340.jpg" alt="" width="" height="" class="section-img" ></b>
    <b><img src="images/ma-interior-design-1.jpg" alt="" width="" height="" class="section-img" ></b>
    <b><img src="images/images - 2022-05-22T055605.685.jpeg" alt="" width="" height="" class="section-img" ></b>
    <b><img src="images/img-2.jpg" alt="" width="" height="" class="section-img" ></b>
    
    </div>


    </div>
</div>


<!--another section -->

<div class="sub-head"><span>featured properties </span> </div>
 <div class="sub-head2"><span>finest selection of our properties </span>  </div>



<!--another section php function to get photos -->

<div class="image-showcase-div" id="div_data">
<?php
//while($row=mysqli_fetch_assoc($results))
{
    ?>

    <!--images functions/ function needed -->
    <form action="" method="GET">
    <div class="image-show-case" >
    
<button class="itemsubbtn" type="submit"></button>
            <div class="top-head"> &nbsp;featured &nbsp;</div>
        

            <div class="down-info">
                    <div class="first">&nbsp; <?php echo $row['purpose'];   ?> &nbsp; </div>
                    <div class="second">$<?php echo $row['price']   ?>/mo</div>
                <div class="grids">
                    <div class=""><img class="icon" src="icons/bed.png" alt=""><?php echo $row['id'];   ?></div> 
                    <div class=""><img class="icon" src="icons/shower.png" alt=""><?php echo $row['toilets'];   ?></div> 
                    <div class=""><img class="icon" src="icons/car.png" alt=""><?php echo $row['carpark'];   ?></div> 
                    <div class=""><img class="icon" src="icons/sq ft.png" alt=""><?php echo $row['measurement'];   ?> </div> 
      
                </div>
            </div>
            <div class="section-img">  <?php echo '<img src="data:image;base64,'.base64_encode($row['image4']).'">' ; ?>    </div>
         
             <!--contents to be hidden and taken later -->
            <div> </div>
      

    </div>
    </form>
<!--load more function -->
    <?php

$id = $row['id'];

}

?>






</div>

 <!--load more button  -->
 <div class="center-btn-div" id="remove_row">
    <button class="center-btn" id="load_more" data-id="<?php echo $id;?>"> load more</button>
</div>

<!--load more button-->




<!--------next -------------->
<div class="request-container">
<div class="request-content">
<div class="request-write-up">
    <h5>are you selling?</h5>
    <h1>we deliver accurate property valuation reports</h1>
</div>

<div class="request-button">

<h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum beatae commodi id ipsa delectus atque maxime tempore numquam reprehenderit animi est neque provident tempora cupiditate, accusantium temporibus at iure enim.</h5>

<div class="center">
    <a href="inquiry-form.html" class="" ><button class="center"> request a valuation</button></a>
</div>


</div>

</div>


</div>

<!--------next -------------->

<div class="benefit-container">
    <div class="benefit-section">
<div class="benefit-writeup">
<h5 >services</h5>
<h2>the reason why will get benefits by choosing our services </h2>
<h4 >Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe rem accusantium debitis enim eligendi modi placeat quaerat corrupti, perspiciatis maiores tenetur harum vitae aliquam dolor amet optio eum. Ipsam, soluta?</h4>

<div class="benefit-icons">
<div  class="benefit-divs">
<div><img src="icons/networking.png" alt="" width="" height="" class="icons" ></div>
<div class="benefit-write-up"> +100<p>real estate agents</p> </div>
</div>

<div class="benefit-divs">
    <div><img src="icons/map.png" alt="" width="" height="" class="icons" ></div>
    <div class="benefit-write-up"> 36<p>states we operate in</p> </div>
    </div>

    <div class="benefit-divs">
    <div><img src="icons/medal.png" alt="" width="" height="" class="icons" ></div>
    <div class="benefit-write-up"> +10<p>years of experiences</p> </div>
        </div>


        <div class="benefit-divs">
        <div><img src="icons/contract.png" alt="" width="" height="" class="icons" ></div>
        <div class="benefit-write-up">  +4500<p>contracts closed </p> </div>
            </div>


</div>


</div>
<!-------    benefit form  php function ---------->
<?php

$message_sent = false;


if(isset ($_POST['submit-index'])   && $_POST['Email-index'] !=''){

    if(filter_var($_POST['Email-index'], FILTER_VALIDATE_EMAIL) ){




$iName = $_POST['name-index'];
$iEmail = $_POST['Email-index'];
$imessage = $_POST['message-index'];



  //  ///// custom mail address 

$to="info@humantouchconcept.com.ng";

$body="";


$body .="From:".$iName. "\r\n";
$body .="Email:".$iEmail. "\r\n";
$body .="Message:".$imessage. "\r\n";


        Mail($to,$imessage,$body);


        $message_sent= true;



    }
}
?>






<div class="benefit-form">
    
<h5>contact us</h5>
<h2>Are you ready to talk to an expert?</h2>

<?php
if($message_sent):
?>
      
    <p class="">  thank you!  </p>
 


    <?php
else:
?>
<form class="form" method="post" action="index.php">


<input type="text" placeholder="Name" required class="input" name="name-index" required>

<input type="email" placeholder="Email" required class="input" name="Email-index" required >
<textarea placeholder="Meassage" name="message-index" class="textarea" required></textarea>

<button class="form-btn" name="submit-index" type="submit"> submit</button>

</form>



</div>




    </div>

</div>
<?php
endif;
     ?>

<!--another section -->
<div class="sub-head"><span>testimonial</span>  </div>
 <div class="sub-head2"><span>what customers are saying</span>  </div>
 <!--another section -->

<div class="comments-container">
<!---->
<div class="comment-section">
<h1>78</h1>
<h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, alias. Eos, odio odit atque dolores corrupti quos nostrum quasi natus itaque dicta facere voluptatem assumenda nihil commodi in reiciendis et.</h5>
<div class="comment-img">
<div class="c-image"><img src="images/images - 2022-05-22T055605.685.jpeg" alt="" width="" height="" class="section-img" ></div>

<div class="c-write-up"> by supreme issac
    <p>manager, company inc.</p>
</div>
</div>
</div>

<!---->
<div class="comment-section">
    <h1>78</h1>
    <h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, alias. Eos, odio odit atque dolores corrupti quos nostrum quasi natus itaque dicta facere voluptatem assumenda nihil commodi in reiciendis et.</h5>
    <div class="comment-img">
    <div class="c-image"><img src="images/images - 2022-05-22T055605.685.jpeg" alt="" width="" height="" class="section-img" ></div>
    
    <div class="c-write-up"> by supreme issac
        <p>manager, company inc.</p>
    </div>
    </div>
    </div>
<!---->
<div class="comment-section">
    <h1>78</h1>
    <h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, alias. Eos, odio odit atque dolores corrupti quos nostrum quasi natus itaque dicta facere voluptatem assumenda nihil commodi in reiciendis et.</h5>
    <div class="comment-img">
    <div class="c-image"><img src="images/images - 2022-05-22T055605.685.jpeg" alt="" width="" height="" class="section-img" ></div>
    
    <div class="c-write-up"> by supreme issac
        <p>manager, company inc.</p>
    </div>
    </div>
    </div>

</div>


<footer>
    <div class="footer-div">
        <div class="footer-div-write-up"> @purple Charteau - all rights reserved</div>
                <div> <img class="logo" src="images/colored logo.png" alt=""></div>
        <div class="icons-link-div">
         <i>  <a href=""><img class="icons2" src="icons/facebook.png" alt=""> </a></i>
         <i><a href=""><img class="icons2" src="icons/twitter (1).png" alt=""></a></i>
         <i><a href=""><img class="icons2" src="icons/linkedin.png" alt=""></a></i>
         <i><a href=""><img class="icons2" src="icons/instagram (1).png" alt=""></a></i>
    

        </div>

    </div>
</footer>


 <script type="text/javascript"> 

$(document).ready(function(){

 $(document).on('click', '#load_more', function(event){
event.preventDefault();


var id = $('#load_more').data('id');


$.ajax({
url : "load.php",
type: "post",
data : {id:id},
success:function(response){

$('#remove_row').remove();

$('#div_data').append(response);


}

});

 });



});






</script>



<script src="script.js"> </script>
</body>
</html>