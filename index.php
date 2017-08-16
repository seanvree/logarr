<?php
function readExternalLog($filename)
{
    $log = file($filename);
    $log = array_reverse($log);
    foreach ($log as $line) {
        echo $line.'<br/>';
    }
}
include "config/logs.php";
include'config/config.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?=$title?></title>
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/favicon/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicon/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="images/favicon/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/favicon/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="images/favicon/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/favicon/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="images/favicon/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="images/favicon/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="images/favicon/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="&nbsp;"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="images/favicon/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="images/favicon/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="images/favicon/mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="images/favicon/mstile-310x310.png" />

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Demo of Real-Time Search in JavaScript" />
	    <meta name="robots" content="all">
	    <meta name="viewport" content="width=device-width,initial-scale=1" />
	    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400" />
		<style type="text/css">
                    
            body::-webkit-scrollbar {
                width: 10px;
                background-color: white;
            }
 
            body::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                border-radius: 10px;
                background-color: #252525;
            }
 
            body::-webkit-scrollbar-thumb {
                border-radius: 10px;
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
                background-color: #8E8B8B;
            }
        
            .Row {
                display: table;
                width: 100%;
                height: 125px;
                table-layout: fixed;
                border-spacing: 1px;
				padding: 10px 5px;
            }

            .Column {
                display: table-cell;
                padding: 20px;
            }

            #time {
                text-align: left;
                vertical-align: middle;
            }

            #logo {
                text-align: center;
                vertical-align: middle;
            }

            #search {
                text-align: right;
                vertical-align: middle;
            }

		html
		{
		}

			.container h1
			{
				font-size: 42px;
				font-weight: 300;
				color: #5594b3;
				margin-bottom: 40px;
			}
				.container h1 a:hover,
				.container h1 a:focus
				{
					color: #a664b7;
				}

			.container p
			{
				line-height: 1.6;
			}

			.faq {
				display: table-cell;
                padding: 10px;
				vertical-align: middle;			
			}
			.faq input
			{
				width: 100%;
				height: 50px;
				font-size: 12px; color: white;
				background-color: #404040;
				box-shadow: 0px 2px 4px rgba( 52, 67, 75, .2 );
				display: block;
				padding: 0 10px;
				margin-bottom: 10px;

				-webkit-transition: box-shadow .1s linear;
				transition: box-shadow .1s linear;
			}
			.faq input::-webkit-input-placeholder	{ color: #a1bdcb !important; }
			.faq input::-moz-placeholder			{ color: #a1bdcb !important; }
			.faq input:-ms-input-placeholder		{ color: #a1bdcb !important; }
			.faq input:focus
			{
				box-shadow: 0px 4px 8px rgba( 52, 67, 75, .4 );
			}
			.faq .highlight
			{
				background-color: #fffd77;
			}
			.faq > ul
			{
			}
				.faq > ul > li
				{
				}
				.faq > ul > li:not( :first-child )
				{
					border-top: 1px solid #dcebed;
					margin-top: 20px;
					padding-top: 20px;
				}
				.faq > ul > li.is-hidden
				{
					display: none;
				}
					.faq > ul > li h2
					{
						font-size: 24px;
						font-weight: 700;
					}
						.faq > ul > li h2:hover,
						.faq > ul > li h2:focus,
						.faq > ul > li.is-active h2,
						.faq > ul > li:target h2
						{
							color: #a664b7;
						}
					.faq > ul > li > div
					{
						display: none;
					}
					.faq > ul > li.is-active > div,
					.faq > ul > li:target > div
					{
						display: block;
						margin-top: 10px;
					}

				.faq__notfound
				{
					font-size: 14px;
					font-style: italic;
					display: none;
				}
				.faq__notfound.is-visible
				{
					display: block;
				}

            #slide {
                border: 1px solid black;
            }
            #slide-body{  
                overflow: auto;
                transition:     height 500ms ease;
                    -moz-transition:    height 500ms ease;
                    -ms-transition:     height 500ms ease;
                    -o-transition:      height 500ms ease;
                    -webkit-transition: height 500ms ease;
            }
            .expanded {
                height: 600px !important;
            }
            #more {    
                cursor: pointer;
                text-align: right;
            }
            
			.auto-style1 {
                font-size: x-small;
            }

        </style>
        
        
        <script language='javascript' src="serverdate.js"></script>
        
        <script type="text/javascript" src="hilitor.js"></script>
        <script type="text/javascript">

            var myHilitor; // global variable
            document.addEventListener("DOMContentLoaded", function(e) {
            myHilitor = new Hilitor("content");
            myHilitor.apply("error");
            }, false);

        </script>

        <script type='text/javascript'>//<![CDATA[
            window.onload=function(){
            document.getElementById( 'slide' ).addEventListener( 'click', function() {
                var body = document.getElementById( 'slide-body' );
                if( body.className == 'expanded' ) {
                    body.className = '';
                    document.getElementById( 'more' ).textContent = 'more...';
                } else {
                    body.className = 'expanded';
                    document.getElementById( 'more' ).textContent = 'less...';
                };
            } );
            }//]]> 
        </script>

    </head>
    
    <body style="border: 10px solid #252525; color: #FFFFFF; background-color: #252525;">
        
        <div class="Row">
        
            <div id="time" class="Column">

                <p>Server Date and Time:</p>
                	
                <strong>
				<?php
				include "config/timezone.php";                    	
				$timestamp = time();
				$date_time = date("D, m-d-Y, H:i:s", $timestamp);
				echo "$date_time";
				?>
                </strong>
                </p>
            </div>

            <div id="logo" class="Column">
                <img src="images/log-icon.png" height="125px" />
            </div>
            			
			<div class="faq">
					
				<input type="search" value="" placeholder="search" />
  					
				<ul>
						<li id="faq-1">
								
							<p>
							Search Function is NOT working.
							</p>
								
						</li>
				</ul>  
					
					<div class="faq__notfound">
					<p><strong>No matches were found.</strong></p>
					</div>
					
			</div>
		
		</div>


    	<?php foreach ($logs as $k => $v) { ?>
			<div class="w3-container w3-center">
				<h3><span class="w3-text-indigo"><strong><?php echo $k; ?>:</strong></span></h3>
			</div>
					<div id="slide">
						<div class="<?php echo $k; ?>" id="slide-body" style="background-color: #404040; word-wrap: break-word; width: auto; height: 200px; overflow-y: scroll;">
						<p><?php readExternalLog($v); ?></p>
						</div>
						<div id="more">more...</div>
					</div>
		<?php } ?>


		<script>

			'use strict';

			;( function ( document, window, index )
			{
				var hasElementClass		= function( element, className ){ return element.classList ? element.classList.contains( className ) : new RegExp( '(^| )' + className + '( |$)', 'gi' ).test( element.className ); },
					addElementClass		= function( element, className ){ element.classList ? element.classList.add( className ) : element.className += ' ' + className; },
					removeElementClass	= function( element, className ){ element.classList ? element.classList.remove( className ) : element.className = element.className.replace( new RegExp( '(^|\\b)' + className.split( ' ' ).join( '|' ) + '(\\b|$)', 'gi' ), ' ' ); };


				// search & highlight

				;( function ( document, window, index )
				{
					var container = document.querySelector( '.faq' );
					if( !container ) return true;

					var input			= container.querySelector( 'input' ),
						notfound		= container.querySelector( '.faq__notfound' ),
						items			= document.querySelectorAll( '.faq > ul > li' ),
						item			= {},
						itemsIndexed	= [];

					[].forEach.call( items, function( entry )
					{
						itemsIndexed.push( entry.textContent.replace( /\s{2,}/g, ' ' ).toLowerCase() );
					});

					input.addEventListener( 'keyup', function( e )
					{
						if( e.keyCode == 13 ) // enter
						{
							input.blur();
							return true;
						}

						[].forEach.call( items, function( entry )
						{
							entry.innerHTML = entry.innerHTML.replace( /<span class="highlight">([^<]+)<\/span>/gi, '$1' );
						});

						var searchVal = input.value.trim().toLowerCase();
						if( searchVal.length )
						{
							itemsIndexed.forEach( function( entry, i )
							{
								if( itemsIndexed[ i ].indexOf( searchVal ) != -1 )
								{
									removeElementClass( items[ i ], 'is-hidden' );
									items[ i ].innerHTML = items[ i ].innerHTML.replace( new RegExp( searchVal+'(?!([^<]+)?>)', 'gi' ), '<span class="highlight">$&</span>' );
								}
								else
									addElementClass( items[ i ], 'is-hidden' );
							});
						}
						else [].forEach.call( items, function( entry ){ removeElementClass( entry, 'is-hidden' ); });

						if( items.length == [].filter.call( items, function( entry ){ return hasElementClass( entry, 'is-hidden' ) } ).length )
							addElementClass( notfound, 'is-visible' );
						else
							removeElementClass( notfound, 'is-visible' );
							
					});
				}( document, window, 0 ));


				// auto-show item content when show results reduces to single

				;( function ( document, window, index )
				{
					var container = document.querySelector( '.faq' );
					if( !container ) return true;

					var input	= container.querySelector( 'input' ),
						items	= document.querySelectorAll( '.faq > ul > li' ),
						item	= {};

					input.addEventListener( 'keyup', function( e )
					{
						item = [].filter.call( items, function( entry ){ return !hasElementClass( entry, 'is-hidden' ); } )

						if( item.length == 1 )
						{
							addElementClass( item[ 0 ], 'js--autoshown' );
							addElementClass( item[ 0 ], 'is-active' );
						}
						else
							[].forEach.call( items, function( entry )
							{
								if( hasElementClass( entry, 'js--autoshown' ) )
								{
									removeElementClass( entry, 'js--autoshown' );
									removeElementClass( entry, 'is-active' );
								}
							});
					});
				}( document, window, 0 ));

			}( document, window, 0 ));

		</script>

    </body>
    
</html>