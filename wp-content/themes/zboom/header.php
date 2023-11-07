<!DOCTYPE html>

<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	
		
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<style>
		body{
			background-color:<?php global $zboom; echo $zboom['zbg-color']['background-color'];?> !important;
			background-image:url(<?php echo $zboom['zbg-color']['background-image'];?>) !important;
			background-size:<?php echo $zboom['zbg-color']['background-size'];?> !important;
			background-position:<?php echo $zboom['zbg-color']['background-position'];?> !important;
			background-attachment:<?php echo $zboom['zbg-color']['background-attachment'];?> !important;
			background-repeat:<?php echo $zboom['zbg-color']['background-repeat'];?> !important;
		}

		nav .wrap-nav{
			background-color: <?php echo $zboom['header-bg-color'];?> !important;
			height: <?php echo $zboom['nav-height']['height'];?> !important;;
		}

		

		.menu ul li a{
			color: <?php echo $zboom['menu-color']['regular'];?> !important;			
		}

		.menu ul .menu-item:hover{
			color: <?php echo $zboom['menu-color']['hover'];?> !important;
			background-color: <?php echo $zboom['menu-hover-color'];?> !important;
		}

		.menu .current-menu-item{
			color: <?php echo $zboom['menu-color']['hover'];?> !important;
			background-color: <?php echo $zboom['menu-active-color'];?> !important;
		}
	</style>
    
	
	
	<link href='<?php echo esc_url(get_template_directory_uri());?>/images/favicon.ico' rel='icon' type='image/x-icon'/>
	
	

    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="<?php bloginfo('home');?>"><img src="<?php global $zboom; echo $zboom['logo-upload']['url']?>"></a></div>
		
		<div id="search">
			<div class="button-search"></div>
			<form method="GET" action="<?php esc_url(bloginfo('home'));?>">			
				<input name="s" type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
			</form>
		</div>
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
            <?php if(function_exists('wp_nav_menu')){
                wp_nav_menu(array(
                    'theme_location' => 'mainmenu',

                ));
            }?>
			
		</div>
		
		<div class="minimenu"><div>MENU</div>
			<select onchange="location=this.value">
				<option></option>
				<option value="index.html">Home</option>
				<option value="blog.html">Blog</option>
				<option value="gallery.html">Gallery</option>
				<option value="single.html">About</option>
				<option value="contact.html">Contact</option>
			</select>
		</div>		
	</div>
</nav>

