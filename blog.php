<?php error_reporting(0); ?>

<?php $pageName = "Home"; ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> 
<html lang="en"><!--<![endif]-->  
<head itemscope itemtype="http://schema.org/WebSite">

	<title itemprop='name'>Business Process Outsourcing Services, Bpo Services | Avanze Group Delaware USA</title>

	<meta name="keywords" content="bpo, business process outsourcing, global bpo, bpo services, business process management solutions, global business process outsourcing, business process outsourcing services, bpo solutions, bpo company, business process outsourcing company" />
	<meta name="description" content="Avanze is a leading global provider of consulting, outsourcing and technology services with delivery centers across USA, India" />		
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/media.css" />
   
    <?php include 'template/favicon.php'; ?>
    <?php include 'template/analytics.php'; ?>
    <link href='https://fonts.googleapis.com/css?family=Inder' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/lazy.js"></script>
   
    <script type="text/javascript">
	
		$(function() {

		    $("img.lazy").lazyload({
		        event : "sporty"
		    });
	    
		});

		$(window).bind("load", function() {
		    var timeout = setTimeout(function() { $("img.lazy").trigger("sporty") }, 1000);
		});   

	</script>
	<style type="text/css">
		.separator
		{
				width: 100% !important;
	height: 100% !important;
	background: transparent !important;
	margin-top: 20px;
	margin-bottom: 20px;
	left: 0%;
	margin-left: 0px !important;
	position: relative;
	float: none !important;

}
			
	</style>
</head>

<body>

<?php include 'template/header.php'; ?>

		<!-- content Start -->
		<div class="content clearfix">
		
			<!-- container Starts -->
			<div class="container">



<?php   
error_reporting(0);

//header('Content-Type: application/json; Charset=UTF-8');

$feed = new DOMDocument();
$feed->load('http://avanzegroup.blogspot.com/feeds/posts/default?alt=rss');// put your feed url here
$json = array();

$json['title'] = $feed->getElementsByTagName('channel')->item(0)->getElementsByTagName('title')->item(0)->firstChild->nodeValue;
$json['description'] = $feed->getElementsByTagName('channel')->item(0)->getElementsByTagName('description')->item(0)->firstChild->nodeValue;
$json['link'] = $feed->getElementsByTagName('channel')->item(0)->getElementsByTagName('link')->item(0)->firstChild->nodeValue;


$items = $feed->getElementsByTagName('channel')->item(0)->getElementsByTagName('item');

$json['item'] = array();
$i = 0;


foreach($items as $item) {
   $title = $item->getElementsByTagName('title')->item(0)->firstChild->nodeValue;
   $description = $item->getElementsByTagName('description')->item(0)->firstChild->nodeValue;
   $pubDate = $item->getElementsByTagName('pubDate')->item(0)->firstChild->nodeValue;
   $guid = $item->getElementsByTagName('guid')->item(0)->firstChild->nodeValue;
   
   $json['item'][$i++]['title'] = $title; 
   $json['item'][$i++]['description'] = $description;
   $json['item'][$i++]['pubdate'] = $pubDate;
   $json['item'][$i++]['guid'] = $guid;    

}


$en = json_encode($json);

$item_array = $json['item'];


	$count = count($item_array);


	for ($i=0; $i < $count; $i++) { 
	?>


			<h1><?php echo $item_array[$i]['title']; ?></h1>

					<?php echo $item_array[$i]['description']; ?>

		
	<?php	} ?>




					
			</div>
			<!-- container Ends -->



	




		</div>
		<!-- content End -->


		<?php include 'template/footer.php'; ?>

<a href="#" id="back-to-top" title="Back to top" class="show">
	<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
</a>

<a href="#" id="back-to-bottom" title="Back to Bottom" class="show">
	<i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
</a>


</body>
<script src="js/jquery.marquee.min.js"></script>
<script type="text/javascript">
$(function(){

$('.twitter-scroll').marquee({
  duration: 15000,
  pauseOnHover: true
});

});
	
</script>
</html>