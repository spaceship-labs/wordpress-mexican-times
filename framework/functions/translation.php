<?php

$tie_default_texts = array(

	// Not Found
	'translationTitle1' => array( 'title'=> true , 'text' => __( 'Nada por aquí', 'tie' ) ),
		
		"404 :(",
		'Nada por aquí',
		'Te puede interesar',
		'Apologies, but the page you requested could not be found. Perhaps searching will help.',

	// Search
	'translationTitle2' => array( 'title'=> true , 'text' => __( 'Search', 'tie' ) ),

		'Search',
		'Search Results for: %s',
		'Results Found',
		'No Results',
		'View All Results',
		'Sorry, but nothing matched your search criteria. Please try again with some different keywords.',
	
	//Archives
	'translationTitle3' => array( 'title'=> true , 'text' => __( 'Archives', 'tie' ) ),

		'Daily Archives: <span>%s</span>',
		'Monthly Archives: <span>%s</span>',
		'Yearly Archives: <span>%s</span>',
		'Tag Archives: %s',
		'Blog Archives',
		'Feed Subscription',
		
	//Comments
	'translationTitle4' => array( 'title'=> true , 'text' => __( 'Comments', 'tie' ) ),
	
		'No comments',
		'One comment',
		'1 Comment',
		'% Comments',
		'comments',
		'Leave a comment',
		'<span>&larr;</span> Older Comments',
		'Newer Comments <span>&rarr;</span>',
		'Your comment is awaiting moderation.',
		'Pingback:',
		
	//Posts
	'translationTitle5' => array( 'title'=> true , 'text' => __( 'Posts', 'tie' ) ),
	
		'Pages:',
		'Edit',
		'Tags',
		'About',
		'Anterior',
		'Prev',
		'Siguiente',
		'Pages',
		'Categories',
		'Authors',
		'Views',
		'Read More &raquo;',
		'No products found',
		'Share',
		'Related Articles',
		'Related Products',	
		'You must be logged in to view this page.',
	
	//Widgets	
	'translationTitle6' => array( 'title'=> true , 'text' => __( 'Widgets', 'tie' ) ),
	
		'All Posts',
		'By %s',
		'About %s',
		'Popular',
		'Recent',
		'Subscribe',
		'Welcome',
		'Dashboard',
		'Your Profile',
		'Logout',
		'Username',
		'Password',
		'Log in',
		'Remember Me',
		'Lost your password?',
		'Enter your e-mail address',
	
	//Pagination		
	'translationTitle8' => array( 'title'=> true , 'text' => __( 'Pagination', 'tie' ) ),
	
		'page',
		'&laquo; First',
		'Last &raquo;',
		'Page %s',
		'%1$s at %2$s',
		'Page %CURRENT_PAGE% of %TOTAL_PAGES%',

	
	//Misc		
	'translationTitle8' => array( 'title'=> true , 'text' => __( 'Misc', 'tie' ) ),
	
		'Breaking News',
		'ago',
		'About the author',
		'Home',
		'Scroll To Top',
		'Random Article',
		'View your shopping cart',
);


function __ti( $text ){
	$sanitize_text = tie_sanitize_title( htmlspecialchars ( $text ) );

	if( tie_get_option( $sanitize_text ) ){
		return htmlspecialchars_decode ( tie_get_option( $sanitize_text ) );
	}else{
		return __( $text , 'tie' );
	}	
}


function _eti( $text ){
	echo  __ti( $text );
}

?>