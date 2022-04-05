
 <html>
 <head>
    <meta charset="utf-8" />
    <link href="../css/style.css" rel="stylesheet" type="text/css">  
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="./css/login.css" rel="stylesheet" type="text/css">  
   
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <span class="title"><b>GameMania</b></span>
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="pg" href="./index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="pg" href="./Aboutus.html">About us</a>
                  </li>
                <li class="nav-item">
                  <a class="pg" href="//ContactUs.html">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="pg" href="./login.php">Login</a>
                </li>
              
              </ul>
             
            </div>
          </nav>
<?php
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";   
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    

$url_components = parse_url($url);
  
// Use parse_str() function to parse the
// string passed via URL
parse_str($url_components['query'], $params);
$servername="localhost";
$username="root";
$password="";
$database_name="db";
$conn=mysqli_connect($servername,$username,$password,$database_name);
$r = mysqli_query($conn,"select * from details where id=".$params['id']);
while ($row = mysqli_fetch_assoc($r)) {
?>
  <h3>  <?php echo $row['name']??''; ?></h3>
  <p><?php echo $row['description']??''; ?><br/> 
  <img src="image/<?php echo $row['imgname'] ?>" height="240">
<?php }?>

<div class="container">
    	<div class="card">
    		<div class="card-header">Reviews</div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Review</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Write Review Here</h3>
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
        
    </div>
</body>
</html>


<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>


<script>
    
var rating_data = 0;

$('#add_review').click(function(){

    $('#review_modal').modal('show');

});

$(document).on('mouseenter', '.submit_star', function(){

    var rating = $(this).data('rating');

    reset_background();

    for(var count = 1; count <= rating; count++)
    {

        $('#submit_star_'+count).addClass('text-warning');

    }

});

function reset_background()
{
    for(var count = 1; count <= 5; count++)
    {

        $('#submit_star_'+count).addClass('star-light');

        $('#submit_star_'+count).removeClass('text-warning');

    }
}

$(document).on('mouseleave', '.submit_star', function(){

    reset_background();

    for(var count = 1; count <= rating_data; count++)
    {

        $('#submit_star_'+count).removeClass('star-light');

        $('#submit_star_'+count).addClass('text-warning');
    }

});

$(document).on('click', '.submit_star', function(){

    rating_data = $(this).data('rating');

});



$('#save_review').click(function(){

var user_name = $('#user_name').val();

var user_review = $('#user_review').val();
var review_id=<?php echo $params['id'] ?>;
if(user_name == '' || user_review == '')
{
    alert("Please Fill Both Field");
    return false;
}
else
{
    $.ajax({
        url:"save.php",
        method:"POST",
        data:{review_id:review_id,rating_data:rating_data, user_name:user_name, user_review:user_review},
        success:function(data)
        {
            $('#review_modal').modal('hide');

            load_rating_data();

            alert(data);
        }
    })
}

});

load_rating_data();

function load_rating_data()
{  var review_id=<?php echo $params['id'] ?>;
$.ajax({
    url:"save.php",
    method:"POST",
    data:{action:'load_data',review_id:review_id},
    dataType:"JSON",
    success:function(data)
    {
        $('#average_rating').text(data.average_rating);
        $('#total_review').text(data.total_review);

        var count_star = 0;

        $('.main_star').each(function(){
            count_star++;
            if(Math.ceil(data.average_rating) >= count_star)
            {
                $(this).addClass('text-warning');
                $(this).addClass('star-light');
            }
        });

        $('#total_five_star_review').text(data.five_star_review);

        $('#total_four_star_review').text(data.four_star_review);

        $('#total_three_star_review').text(data.three_star_review);

        $('#total_two_star_review').text(data.two_star_review);

        $('#total_one_star_review').text(data.one_star_review);

        $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

        $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

        $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

        $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

        $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

        if(data.review_data.length > 0)
        {
            var html = '';

            for(var count = 0; count < data.review_data.length; count++)
            {
                html += '<div class="row mb-3">';

                html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                html += '<div class="col-sm-11">';

                html += '<div class="card">';

                html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                html += '<div class="card-body">';

                for(var star = 1; star <= 5; star++)
                {
                    var class_name = '';

                    if(data.review_data[count].rating >= star)
                    {
                        class_name = 'text-warning';
                    }
                    else
                    {
                        class_name = 'star-light';
                    }

                    html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                }

                html += '<br />';

                html += data.review_data[count].user_review;

                html += '</div>';

                html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                html += '</div>';

                html += '</div>';

                html += '</div>';
            }

            $('#review_content').html(html);
        }
    }
})
}


    </script>

   
