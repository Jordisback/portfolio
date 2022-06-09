<!DOCTYPE html>

<?php

include_once('includes/include.php');
include_once('includes/header.php');

if(!isset($_SESSION))
{
	session_start();
}
?>

<html>

<head>
	<title>Portfolio de Jordan Duraz</title>
	<meta charset="UTF-8">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body class="corps">
	<?php include('includes/menu.php'); ?>
	<div class="container" style="margin-top:35px;">
		<div class="row">
			<div class="col l6 s6 m6">
				<!-- start feedwind code -->
				<iframe height="700" width="1500" src="http://feed.mikle.com/widget/?rssmikle_url=http%3A%2F%2Fwww.nextinpact.com%2Frss%2Fnews.xml%7Chttp%3A%2F%2Fwww.nextinpact.com%2Frss%2Fblog.xml%7Chttp%3A%2F%2Fwww.01net.com%2Frss%2Finfo%2Fflux-rss%2Fflux-toutes-les-actualites%2F%7Chttp%3A%2F%2Fwww.01net.com%2Frss%2Factualites%2Fapplis-logiciels%2F%7Chttp%3A%2F%2Fwww.01net.com%2Frss%2Factualites%2Fjeux%2F%7Chttp%3A%2F%2Fwww.01net.com%2Frss%2Factualites%2Ftechnos%2F%7Chttp%3A%2F%2Fwww.01net.com%2Frss%2Fjeux-video%2F&rssmikle_frame_width=1250&rssmikle_frame_height=700&frame_height_by_article=0&rssmikle_target=_blank&rssmikle_font=Arial%2C%20Helvetica%2C%20sans-serif&rssmikle_font_size=12&rssmikle_border=off&responsive=off&text_align=left&text_align2=left&corner=off&scrollbar=on&autoscroll=on_mc&scrolldirection=up&scrollstep=3&mcspeed=30&sort=Off&rssmikle_title=on&rssmikle_title_sentence=Actualit%C3%A9es&rssmikle_title_bgcolor=%23009688&rssmikle_title_color=%23FFFFFF&rssmikle_item_bgcolor=%23FFFFFF&rssmikle_item_title_length=55&rssmikle_item_title_color=%23000000&rssmikle_item_border_bottom=on&rssmikle_item_description=on&item_link=on&rssmikle_item_description_length=150&rssmikle_item_description_color=%23666666&rssmikle_item_date=gl1&rssmikle_timezone=Etc%2FGMT&datetime_format=%25b%20%25e%2C%20%25Y%20%25l%3A%25M%20%25p&item_description_style=text%2Btn&item_thumbnail=full&item_thumbnail_selection=auto&article_num=15&rssmikle_item_podcast=off&" scrolling="no" name="rssmikle_frame" marginwidth="0" marginheight="0" vspace="0" hspace="0" frameborder="0"></iframe>
				<div style="font-size:10px; text-align:center; width:1500px;"><a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a>
					<!--Please display the above link in your web page according to Terms of Service.-->
				</div>
				<!--  end  feedwind code -->
			</div>
		</div>
	</div>
</body>
<footer class="foot">
</footer>

</html>
