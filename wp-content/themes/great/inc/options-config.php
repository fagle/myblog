<?php
function great_generate_array ( $req = "slider" ) {
// FA Array
$fa_array = array( '--- ' . __('Hide', 'great') . ' ---', "adjust", "adn", "align-center", "align-justify", "align-left", "align-right", "ambulance", "anchor", "android", "angellist", "angle-double-down", "angle-double-left", "angle-double-right", "angle-double-up", "angle-down", "angle-left", "angle-right", "angle-up", "apple", "archive", "area-chart", "arrow-circle-down", "arrow-circle-left", "arrow-circle-o-down", "arrow-circle-o-left", "arrow-circle-o-right", "arrow-circle-o-up", "arrow-circle-right", "arrow-circle-up", "arrow-down", "arrow-left", "arrow-right", "arrow-up", "arrows", "arrows-alt", "arrows-h", "arrows-v", "asterisk", "at", "automobile", "backward", "ban", "bank", "bar-chart", "bar-chart-o", "barcode", "bars", "bed", "beer", "behance", "behance-square", "bell", "bell-o", "bell-slash", "bell-slash-o", "bicycle", "binoculars", "birthday-cake", "bitbucket", "bitbucket-square", "bitcoin", "bold", "bolt", "bomb", "book", "bookmark", "bookmark-o", "briefcase", "btc", "bug", "building", "building-o", "bullhorn", "bullseye", "bus", "buysellads", "cab", "calculator", "calendar", "calendar-o", "camera", "camera-retro", "car", "caret-down", "caret-left", "caret-right", "caret-square-o-down", "caret-square-o-left", "caret-square-o-right", "caret-square-o-up", "caret-up", "cart-arrow-down", "cart-plus", "cc", "cc-amex", "cc-discover", "cc-mastercard", "cc-paypal", "cc-stripe", "cc-visa", "certificate", "chain", "chain-broken", "check", "check-circle", "check-circle-o", "check-square", "check-square-o", "chevron-circle-down", "chevron-circle-left", "chevron-circle-right", "chevron-circle-up", "chevron-down", "chevron-left", "chevron-right", "chevron-up", "child", "circle", "circle-o", "circle-o-notch", "circle-thin", "clipboard", "clock-o", "close", "cloud", "cloud-download", "cloud-upload", "cny", "code", "code-fork", "codepen", "coffee", "cog", "cogs", "columns", "comment", "comment-o", "comments", "comments-o", "compass", "compress", "connectdevelop", "copy", "copyright", "credit-card", "crop", "crosshairs", "css3", "cube", "cubes", "cut", "cutlery", "dashboard", "dashcube", "database", "dedent", "delicious", "desktop", "deviantart", "diamond", "digg", "dollar", "dot-circle-o", "download", "dribbble", "dropbox", "drupal", "edit", "eject", "ellipsis-h", "ellipsis-v", "empire", "envelope", "envelope-o", "envelope-square", "eraser", "eur", "euro", "exchange", "exclamation", "exclamation-circle", "exclamation-triangle", "expand", "external-link", "external-link-square", "eye", "eye-slash", "eyedropper", "facebook", "facebook-f", "facebook-official", "facebook-square", "fast-backward", "fast-forward", "fax", "female", "fighter-jet", "file", "file-archive-o", "file-audio-o", "file-code-o", "file-excel-o", "file-image-o", "file-movie-o", "file-o", "file-pdf-o", "file-photo-o", "file-picture-o", "file-powerpoint-o", "file-sound-o", "file-text", "file-text-o", "file-video-o", "file-word-o", "file-zip-o", "files-o", "film", "filter", "fire", "fire-extinguisher", "flag", "flag-checkered", "flag-o", "flash", "flask", "flickr", "floppy-o", "folder", "folder-o", "folder-open", "folder-open-o", "font", "forumbee", "forward", "foursquare", "frown-o", "futbol-o", "gamepad", "gavel", "gbp", "ge", "gear", "gears", "genderless", "gift", "git", "git-square", "github", "github-alt", "github-square", "gittip", "glass", "globe", "google", "google-plus", "google-plus-square", "google-wallet", "graduation-cap", "gratipay", "group", "h-square", "hacker-news", "hand-o-down", "hand-o-left", "hand-o-right", "hand-o-up", "hdd-o", "header", "headphones", "heart", "heart-o", "heartbeat", "history", "home", "hospital-o", "hotel", "html5", "ils", "image", "inbox", "indent", "info", "info-circle", "inr", "instagram", "institution", "ioxhost", "italic", "joomla", "jpy", "jsfiddle", "key", "keyboard-o", "krw", "language", "laptop", "lastfm", "lastfm-square", "leaf", "leanpub", "legal", "lemon-o", "level-down", "level-up", "life-bouy", "life-buoy", "life-ring", "life-saver", "lightbulb-o", "line-chart", "link", "linkedin", "linkedin-square", "linux", "list", "list-alt", "list-ol", "list-ul", "location-arrow", "lock", "long-arrow-down", "long-arrow-left", "long-arrow-right", "long-arrow-up", "magic", "magnet", "mail-forward", "mail-reply", "mail-reply-all", "male", "map-marker", "mars", "mars-double", "mars-stroke", "mars-stroke-h", "mars-stroke-v", "maxcdn", "meanpath", "medium", "medkit", "meh-o", "mercury", "microphone", "microphone-slash", "minus", "minus-circle", "minus-square", "minus-square-o", "mobile", "mobile-phone", "money", "moon-o", "mortar-board", "motorcycle", "music", "navicon", "neuter", "newspaper-o", "openid", "outdent", "pagelines", "paint-brush", "paper-plane", "paper-plane-o", "paperclip", "paragraph", "paste", "pause", "paw", "paypal", "pencil", "pencil-square", "pencil-square-o", "phone", "phone-square", "photo", "picture-o", "pie-chart", "pied-piper", "pied-piper-alt", "pinterest", "pinterest-p", "pinterest-square", "plane", "play", "play-circle", "play-circle-o", "plug", "plus", "plus-circle", "plus-square", "plus-square-o", "power-off", "print", "puzzle-piece", "qq", "qrcode", "question", "question-circle", "quote-left", "quote-right", "ra", "random", "rebel", "recycle", "reddit", "reddit-square", "refresh", "remove", "renren", "reorder", "repeat", "reply", "reply-all", "retweet", "rmb", "road", "rocket", "rotate-left", "rotate-right", "rouble", "rss", "rss-square", "rub", "ruble", "rupee", "save", "scissors", "search", "search-minus", "search-plus", "sellsy", "send", "send-o", "server", "share", "share-alt", "share-alt-square", "share-square", "share-square-o", "shekel", "sheqel", "shield", "ship", "shirtsinbulk", "shopping-cart", "sign-in", "sign-out", "signal", "simplybuilt", "sitemap", "skyatlas", "skype", "slack", "sliders", "slideshare", "smile-o", "soccer-ball-o", "sort", "sort-alpha-asc", "sort-alpha-desc", "sort-amount-asc", "sort-amount-desc", "sort-asc", "sort-desc", "sort-down", "sort-numeric-asc", "sort-numeric-desc", "sort-up", "soundcloud", "space-shuttle", "spinner", "spoon", "spotify", "square", "square-o", "stack-exchange", "stack-overflow", "star", "star-half", "star-half-empty", "star-half-full", "star-half-o", "star-o", "steam", "steam-square", "step-backward", "step-forward", "stethoscope", "stop", "street-view", "strikethrough", "stumbleupon", "stumbleupon-circle", "subscript", "subway", "suitcase", "sun-o", "superscript", "support", "table", "tablet", "tachometer", "tag", "tags", "tasks", "taxi", "tencent-weibo", "terminal", "text-height", "text-width", "th", "th-large", "th-list", "thumb-tack", "thumbs-down", "thumbs-o-down", "thumbs-o-up", "thumbs-up", "ticket", "times", "times-circle", "times-circle-o", "tint", "toggle-down", "toggle-left", "toggle-off", "toggle-on", "toggle-right", "toggle-up", "train", "transgender", "transgender-alt", "trash", "trash-o", "tree", "trello", "trophy", "truck", "try", "tty", "tumblr", "tumblr-square", "turkish-lira", "twitch", "twitter", "twitter-square", "umbrella", "underline", "undo", "university", "unlink", "unlock", "unlock-alt", "unsorted", "upload", "usd", "user", "user-md", "user-plus", "user-secret", "user-times", "users", "venus", "venus-double", "venus-mars", "viacoin", "video-camera", "vimeo-square", "vine", "vk", "volume-down", "volume-off", "volume-up", "warning", "wechat", "weibo", "weixin", "whatsapp", "wheelchair", "wifi", "windows", "won", "wordpress", "wrench", "xing", "xing-square", "yahoo", "yelp", "yen", "youtube", "youtube-play", "youtube-square");
// Disabled-numbers Array
$qty = array( '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12', '13' => '13', '14' => '14', '15' => '15', '16' => '16', '17' => '17', '18' => '18', '19' => '19', '20' => '20', '21' => '21', '22' => '22', '23' => '23', '24' => '24', '25' => '25', '26' => '26', '27' => '27', '28' => '28', '29' => '29', '30' => '30',  );

// Pages List Arry for Dropdown control
$page_list = array( 'great_hide_this' => sprintf( '&rArr; [ %1$s ]', __('Hide', 'great') ) );

$pages = get_pages();
	foreach ( $pages as $page )
		$page_list [$page->ID] = $page->post_title;
// Slider Array
$great_slider_array = array(
							'sep' => array(
								'label' => __("First, please enable 'slider' widget.", 'great'),
                                'type' => 'info',
								'desc' => "<a href='http://dinozoom.com/add-widgets-wordpress-blogsidebar-free-wordpress-theme/' target='_blank'>How to add widgets?</a>",
                            ),
                            'disable_slider_text' => array(
                                'type' => 'checkbox',
                                'label' => __('Hide texts', 'great'),
                                'default' => 0,
                                'sanitize_callback' => 'great_boolean',
                            ),
							/*'slider_quantity' => array(
                                'type' => 'disabled-select',
                                'label' => __('Quantity', 'great'),
                                'default' => 4,
								'choices' => $qty,
                                'sanitize_callback' => 'absint',
                            ),*/
							);
for ($i=1;$i<=10;$i++) {
	$great_slider_item = array();
	$great_slider_item = array(							
							'sep'.$i => array(
								'label' => __("Slider", 'great') . "#$i",
                                'type' => 'sep-title',
                            ),
							'slide_this'.$i => array(
                                'type' => 'select',
                                'label' => sprintf( '%1$s {%2$s %3$s}', __('Select Page', 'great'), __('Featured Image', 'great'), __('(required)', 'great') ),
                                'default' => 'great_hide_this',
								'choices' => $page_list ,
                                'sanitize_callback' => 'absint',
                            ),
							'slider_link'.$i => array(
                                'type' => 'text',
                                'label' => __('Custom Link', 'great'),
                                'sanitize_callback' => 'esc_url',
                            )
							);
	$great_slider_array = array_merge($great_slider_array, $great_slider_item);
}
if ( $req == "slider" ) return $great_slider_array;

// Featured Pages Array
$great_featured_array = array(
							'sep_info' => array(
								'label' => __("First, please enable 'Featured Pages' widget.", 'great'),
                                'type' => 'info',
								'desc' => "<a href='http://dinozoom.com/add-widgets-wordpress-blogsidebar-free-wordpress-theme/' target='_blank'>How to add widgets?</a>",
                            ),
							/*'slider_quantity' => array(
                                'type' => 'disabled-select',
                                'label' => __('Quantity', 'great'),
                                'default' => 4,
								'choices' => $qty,
                                'sanitize_callback' => 'absint',
                            ),*/
							);
for ($i=1;$i<=3;$i++) {
	$great_featured_item = array();
	$great_featured_item = array(							
							'sep'.$i => array(
								'label' => __("Page", 'great') . " #$i",
                                'type' => 'sep-title',
                            ),
							'featured_page'.$i => array(
                                'type' => 'select',
                                'label' => sprintf( '%1$s {%2$s %3$s}', __('Select Page', 'great'), __('Featured Image', 'great'), __('(required)', 'great') ),
                                'default' => 'great_hide_this',
								'choices' => $page_list ,
                                'sanitize_callback' => 'absint',
                            ),
							'featured_alternative_text'.$i => array(
                                'type' => 'text',
                                'label' => __('Alternative Text', 'great'),
                                'sanitize_callback' => 'esc_attr',
                            ),
							'featured_button_text'.$i => array(
                                'type' => 'text',
                                'label' => __('Button Text', 'great'),
								'default' => __('Learn More', 'great'),
                                'sanitize_callback' => 'esc_attr',
                            ),
							'featured_button_bg'.$i => array(
								'default' => '',
                                'type' => 'color',
                                'label' => __('Button Background Color', 'great'),
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'featured_button_color'.$i => array(
								'default' => '',
                                'type' => 'color',
                                'label' => __('Button Text Color', 'great'),
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'featured_link'.$i => array(
                                'type' => 'text',
                                'label' => __('Custom Link', 'great'),
                                'sanitize_callback' => 'esc_url',
                            )
							);
	$great_featured_array = array_merge($great_featured_array, $great_featured_item);
}
if ( $req == "featured-page" ) return $great_featured_array;

// Socail Media Array
$great_social_array = array(
							'sep_sm_header' => array(
								'label' => __("Header", 'great'),
                                'type' => 'sep-title',
                            ),
                            'enable_sm_header' => array(
                                'type' => 'checkbox',
                                'label' => __('Enable', 'great'),
                                'default' => 0,
                                'sanitize_callback' => 'great_boolean',
                            ),
							'sm_header_title' => array(
								'default' => '',
								'type' => 'text',
                                'label' => __('Description', 'great'),
                                'sanitize_callback' => 'esc_attr',
                            ),
							'sm_icon_size_header' => array(
                                'type' => 'select',
                                'label' => __('Size', 'great'),
                                'default' => 'fa-1x',
								'choices' => array( 'fa-1x' => '1', 'fa-lg' => '1.5', 'fa-2x' => 2, 'fa-3x' => 3, 'fa-4x' => 4, 'fa-5x' => 5) ,
                                'sanitize_callback' => 'esc_attr',
                            ),
							//_________
							'sep_sm_footer' => array(
								'label' => __("Footer", 'great'),
                                'type' => 'sep-title',
                            ),
							'enable_sm_footer' => array(
                                'type' => 'checkbox',
                                'label' => __('Enable', 'great'),
                                'default' => 0,
                                'sanitize_callback' => 'great_boolean',
                            ),
							'sm_footer_title' => array(
								'default' => '',
								'type' => 'text',
                                'label' => __('Description', 'great'),
                                'sanitize_callback' => 'esc_attr',
                            ),
							'sm_icon_size_footer' => array(
                                'type' => 'select',
                                'label' => __('Size', 'great'),
                                'default' => 'fa-1x',
								'choices' => array( 'fa-1x' => '1', 'fa-lg' => '1.5', 'fa-2x' => 2, 'fa-3x' => 3, 'fa-4x' => 4, 'fa-5x' => 5) ,
                                'sanitize_callback' => 'esc_attr',
                            ),
							//_________
							'sep_sm_widget' => array(
								'label' => __("Widgets", 'great'),
                                'type' => 'sep-title',
                            ),
							'sm_title_widget' => array(
								'default' => '',
								'type' => 'text',
                                'label' => __('Description', 'great'),
                                'sanitize_callback' => 'esc_attr',
                            ),
							'sm_icon_size_widget' => array(
                                'type' => 'select',
                                'label' => __('Size', 'great'),
                                'default' => 'fa-1x',
								'choices' => array( 'fa-1x' => '1', 'fa-lg' => '1.5', 'fa-2x' => 2, 'fa-3x' => 3, 'fa-4x' => 4, 'fa-5x' => 5) ,
                                'sanitize_callback' => 'esc_attr',
                            )
							);
// FA Icons to choices array
$fa_choices = array();
foreach ( $fa_array as $fa ) {
	$fa_choices = array_merge($fa_choices, array( "fa-$fa" => "$fa" ) );
}

// Social Media Links
//$defaults = array('dropbox','facebook','flickr','linkedin','wordpress','instagram','foursquare','skype','twitter','vine','youtube','flickr');
$homeUrl = esc_url( home_url( '/' ) );
for ($i=1;$i<=10;$i++) {
	if ( $i > 5 ) $homeUrl = "";
	$great_social_item = array();
	$great_social_item = array(							
							'sep_sm'.$i => array(
								'label' => __("Custom Link", 'great') . " #$i",
                                'type' => 'sep-title',
                            ),
                            'sm_title'.$i => array(
								'default' => __("Title", 'great'),
                                'type' => 'text',
                                'label' => __('Title', 'great'),
                                'sanitize_callback' => 'esc_attr',
                            ),
							'sm_link'.$i => array(
								'default' => $homeUrl,
                                'type' => 'text',
                                'label' => __('Enter the URL', 'great'),
                                'sanitize_callback' => 'esc_url',
                            ),
							'sm_target'.$i => array(
                                'type' => 'checkbox',
                                'label' => __('Open link in a new window/tab', 'great'),
                                'default' => 1,
                                'sanitize_callback' => 'great_boolean',
                            ),
							'sm_icon'.$i => array(
								'default' => 'fa---- ' . __('Hide', 'great') . ' ---',
                                'type' => 'select',
                                'label' => __('Icon', 'great'),
                                'sanitize_callback' => 'esc_attr',
								'choices' => $fa_choices
                            ),
							'sm_color'.$i => array(
								'default' => "#09F",
                                'type' => 'color',
                                'label' => __('Color', 'great'),
                                'sanitize_callback' => 'sanitize_hex_color',
                            )
							);
	$great_social_array = array_merge($great_social_array, $great_social_item);
}
if ( $req == "social" ) return $great_social_array;

} // end of generate array function
 
/**
 * Options array
 */
    $options = array(
        'capability' => 10,
        'type' => 'theme_mod',
        'panels' => array(
            'great' => array(
                'priority'       => 9,
                'title'          => __('Great Theme Options', 'great'),
                'description'    => __('Great Theme Options', 'great'),
                'sections' => array(
                    'header' => array(
                        'title' => __('Header', 'great'),
                        'fields' => array(
                            'logo' => array(
								'default' => get_template_directory_uri() . '/images/logo.png',
                                'type' => 'image',
                                'label' => __('Logo Upload', 'great'),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
							'search_form' => array(
								'type' => 'checkbox',
								'label' => __('A search form for your site.', 'great'),
								'default' => 1,
								'sanitize_callback' => 'great_boolean',
							),
							'adress' => array(
                                'type' => 'text',
                                'label' => __('Address', 'great'),
								'default' => '77 Massachusetts Ave, Cambridge, MA, USA',
                                'sanitize_callback' => 'esc_attr',
                            ),
							'adress_color' => array(
                                'type' => 'color',
                                'label' => sprintf('%1$s [ %2$s ]', __('Text color', 'great'), __('Address', 'great')),
                                'default' => '#645F54',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'adress_url' => array(
                                'type' => 'text',
                                'label' => sprintf('%1$s [ %2$s ]', __('Custom Link', 'great'), __('Address', 'great')),
                                'default' => esc_url( home_url( '/' ) ),
                                'sanitize_callback' => 'esc_url',
                            ),
							'mail' => array(
                                'type' => 'text',
                                'label' => __('Email', 'great'),
								'default' => 'info@example.com',
                                'sanitize_callback' => 'esc_attr',
                            ),
							'mail_color' => array(
                                'type' => 'color',
                                'label' => sprintf('%1$s [ %2$s ]', __('Text color', 'great'), __('Email', 'great')),
                                'default' => '#645F54',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'mail_url' => array(
                                'type' => 'text',
                                'label' => sprintf('%1$s [ %2$s ]', __('Custom Link', 'great'), __('Email', 'great')),
                                'default' => '',
                                'sanitize_callback' => 'esc_url',
                            ),
							'phone' => array(
                                'type' => 'text',
                                'label' => __('Phone Number', 'great'),
								'default' => '+1 617-253-1000',
                                'sanitize_callback' => 'esc_attr',
                            ),
							'phone_color' => array(
                                'type' => 'color',
                                'label' => sprintf('%1$s [ %2$s ]', __('Text color', 'great'), __('Phone Number', 'great')),
                                'default' => '#645F54',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'phone_url' => array(
                                'type' => 'text',
                                'label' => sprintf('%1$s [ %2$s ]', __('Custom Link', 'great'), __('Phone Number', 'great')),
                                'default' => '',
                                'sanitize_callback' => 'esc_url',
                            ),
                        ),
                    ),
					'footer' => array(
                        'title' => __('Footer', 'great'),
                        'fields' => array(
							'separotor_quote' => array(
								'label' => __("Quote", 'great'),
                                'type' => 'sep-title',
                            ),
							'footer_quote' => array(
                                'type' => 'text',
                                'label' => __('Quote', 'great'),
								'default' => '"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."',
                                'sanitize_callback' => 'esc_attr',
                            ),
							'footer_author' => array(
                                'type' => 'text',
								'default' => 'Dolor sit Amet',
                                'label' => __('Author', 'great'),
                                'sanitize_callback' => 'esc_attr',
                            ),
							'footer_quote_color' => array(
                                'type' => 'color',
								'label' => sprintf('%1$s [ %2$s ]', __('Color', 'great'), __('Quote', 'great')),
                                'default' => '#444545',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'footer_link' => array(
                                'type' => 'text',
								'default' => esc_url( home_url( '/' ) ),
                                'label' => __('Link', 'great'),
                                'sanitize_callback' => 'esc_url',
                            ),
							'footer_linktext' => array(
                                'type' => 'text',
								'default' => __('Read more...', 'great'),
                                'label' => __('Link Text', 'great'),
                                'sanitize_callback' => 'esc_attr',
                            ),
							'footer_link_color' => array(
                                'type' => 'color',
								'label' => sprintf('%1$s [ %2$s ]', __('Color', 'great'), __('Link', 'great')),
                                'default' => '#61CBE6',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'separotor_info_text' => array(
								'label' => __("Footer information text", 'great'),
                                'type' => 'sep-title',
                            ),
							'footer_infotext' => array(
                                'type' => 'text',
								'default' => '',
                                'label' => __('Text', 'great'), 
                                'sanitize_callback' => 'esc_attr',
                            ),
							'footer_infotext_color' => array(
                                'type' => 'color',
								'label' => __('Text color', 'great'),
                                'default' => '',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'footer_infotext_size' => array(
								'type' => 'range',
								'label' => __('Font Sizes', 'great'),
								'default' => '12',
								'sanitize_callback' => 'esc_attr',
								'input_attrs' => array(
									'min'   => 8,
									'max'   => 64,
									'step'  => 1,
								),
							),
                        ),
                    ),
					'style' => array(
                        'title' => sprintf('%1$s &amp; %2$s', __('Style', 'great'), __('Display Settings', 'great')),
                        'fields' => array(
                            'primary_color' => array(
                                'type' => 'color',
                                'label' => __('Primary Color', 'great'),
                                'default' => '#00B0C8',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'content_bg' => array(
								'default' => '',
                                'type' => 'image',
                                'label' => sprintf('%1$s [ %2$s ]', __('Background Image', 'great'), __('Content', 'great')),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
							'site_border_color' => array(
                                'type' => 'color',
								'label' => sprintf('%1$s [ %2$s ]', __('Border color', 'great'), __('Content', 'great')),
                                'default' => '#FFF',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'content_bg_color' => array(
                                'type' => 'color',
								'label' => sprintf('%1$s [ %2$s ]', __('Background color', 'great'), __('Content', 'great')),
                                'default' => '#FFF',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'widgets_bg' => array(
								'default' => '',
                                'type' => 'image',
                                'label' => sprintf('%1$s [ %2$s ]', __('Background Image', 'great'), __('Widgets', 'great')),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
							'widgets_bg_color' => array(
                                'type' => 'color',
								'label' => sprintf('%1$s [ %2$s ]', __('Background color', 'great'), __('Widgets', 'great')),
                                'default' => '',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'separotor_menu' => array(
								'label' => __("Menu", 'great'),
                                'type' => 'sep-title',
                            ),
							'menu_font_size' => array(
                                'type' => 'select',
								'label' => __('Font Sizes', 'great'),
                                'default' => '18',
								'choices' => great_fontsize_array(),
                                'sanitize_callback' => 'absint',
                            ),
							'menu_font_color' => array(
                                'type' => 'color',
								'label' => __('Text color', 'great'),
                                'default' => '#f5f4f3',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'menu_font_color_hover' => array(
                                'type' => 'color',
								'label' => sprintf('%s #2', __('Color', 'great')),
                                'default' => '#feea3a',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'menu_bg_image' => array(
								'default' => get_template_directory_uri() . '/images/menu_bg.png',
                                'type' => 'image',
                                'label' => __('Background Image', 'great'),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
							'separotor_posts' => array(
								'label' => __("All Posts", 'great'),
                                'type' => 'sep-title',
                            ),
							'posts_font_color' => array(
                                'type' => 'color',
								'label' => __('Text color', 'great'),
                                'default' => '#444545',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'posts_link_color' => array(
                                'type' => 'color',
								'label' => __('Link Text', 'great'),
                                'default' => '',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'posts_font_size' => array(
                                'type' => 'select',
								'label' => __('Font Sizes', 'great'),
                                'default' => '14',
								'choices' => great_fontsize_array(),
                                'sanitize_callback' => 'absint',
                            ),
							'readmore_text' => array(
                                'type' => 'text',
								'default' => __('Read more...', 'great'),
                                'label' => __('Read more...', 'great'),
                                'sanitize_callback' => 'esc_attr',
                            ),
							'enable_fih_pages' => array(
                                'type' => 'checkbox',
                                'label' => __('Enable featured image header for pages', 'great'),
                                'default' => 1,
                                'sanitize_callback' => 'great_boolean',
                            ),
							'enable_fih_posts' => array(
                                'type' => 'checkbox',
                                'label' => __('Enable featured image header for posts', 'great'),
                                'default' => 1,
                                'sanitize_callback' => 'great_boolean',
                            ),
							'separotor_meta' => array(
								'label' => __("Metadata", 'great'),
                                'type' => 'sep-title',
                            ),
							'display_post_date' => array(
                                'type' => 'checkbox',
                                'label' => __('Display post date?', 'great'),
                                'default' => 1,
                                'sanitize_callback' => 'great_boolean',
                            ),
							'display_comments_link' => array(
                                'type' => 'checkbox',
                                'label' => __('Comments Count &amp; Link', 'great'),
                                'default' => 1,
                                'sanitize_callback' => 'great_boolean',
                            ),
							'display_post_author' => array(
                                'type' => 'checkbox',
                                'label' => __('Display item author if available?', 'great'),
                                'default' => 1,
                                'sanitize_callback' => 'great_boolean',
                            ),
							'display_post_cats' => array(
                                'type' => 'checkbox',
                                'label' => __('View Category', 'great'),
                                'default' => 1,
                                'sanitize_callback' => 'great_boolean',
                            ),
							'display_post_tags' => array(
                                'type' => 'checkbox',
                                'label' => __('View Tag', 'great'),
                                'default' => 1,
                                'sanitize_callback' => 'great_boolean',
                            ),
							'meta_color' => array(
                                'type' => 'color',
                                'label' => __('Text color', 'great'),
                                'default' => '#BABABA',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'display_post_nav' => array(
                                'type' => 'checkbox',
                                'label' => __('Posts navigation', 'great'),
                                'default' => 1,
                                'sanitize_callback' => 'great_boolean',
                            ),
							'separotor_footer_style' => array(
								'label' => __("Footer", 'great'),
                                'type' => 'sep-title',
                            ),
							'footer_bg_color' => array(
                                'type' => 'color',
								'label' => __('Background color', 'great'),
                                'default' => '',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'footer_widgets_bg_color' => array(
                                'type' => 'color',
								'label' => sprintf('%1$s [ %2$s ]', __('Background color', 'great'), __('Widgets', 'great')),
                                'default' => '',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'footer_widgets_title_color' => array(
                                'type' => 'color',
								'label' => sprintf('%1$s [ %2$s ]', __('Title', 'great'), __('Widgets', 'great')),
                                'default' => '',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							'footer_widgets_text_color' => array(
                                'type' => 'color',
								'label' => sprintf('%1$s [ %2$s ]', __('Text color', 'great'), __('Widgets', 'great')),
                                'default' => '',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							
                        ),
                    ),
					'slider' => array(
                        'title' => __('Slider', 'great'),
                        'fields' => great_generate_array ("slider"),
                    ),
					'featured_page' => array(
                        'title' => __('Featured Pages', 'great'),
                        'fields' => great_generate_array ("featured-page"),
                    ),
					'social' => array(
                        'title' => __('Social Media', 'great'),
                        'fields' => great_generate_array ("social"),
                    ),
					'layout' => array(
						'title' => __('Layout', 'great'),
						'fields' => array(
							'layout' => array(
								'type' => 'select',
								'label' => sprintf('%1$s &rarr; %2$s', __('Sidebar', 'great'), __('Alignment', 'great')),
								'default' => 'left',
								'sanitize_callback' => 'esc_attr',
								'choices' => array( 'left'=>__('Align Right', 'great'),
													'right'=>__('Align Left', 'great')),
							),
							'separotor_logo_settings' => array(
								'label' => __('Logo', 'great'),
                                'type' => 'sep-title',
                            ),
							'logo_size' => array(
								'type' => 'range',
								'label' => sprintf('%1$s &rarr; %2$s (%3$s)', __('Logo', 'great'), __('Size', 'great'), __('Set to 0 for default.', 'great')),
								'default' => '0',
								'sanitize_callback' => 'esc_attr',
								'input_attrs' => array(
									'min'   => 0,
									'max'   => 100,
									'step'  => 1,
								),
							),
							'logo_top_margin' => array(
								'type' => 'number',
								'label' => sprintf('%1$s &rarr; %2$s', __('Logo', 'great'), __('Vertical space', 'great')),
								'default' => '-20',
								'sanitize_callback' => 'esc_attr',
								'input_attrs' => array(
									'min'   => -50,
									'max'   => 500,
									'step'  => 1,
								),
							),
							'logo_left_margin' => array(
								'type' => 'number',
								'label' => sprintf('%1$s &rarr; %2$s', __('Logo', 'great'), __('Horizontal space', 'great')),
								'default' => '0',
								'sanitize_callback' => 'esc_attr',
								'input_attrs' => array(
									'min'   => 0,
									'max'   => 100,
									'step'  => 1,
								),
							),
							'logo_alignment' => array(
								'type' => 'select',
								'label' => sprintf('%1$s &rarr; %2$s', __('Logo', 'great'), __('Alignment', 'great')),
								'default' => 'left',
								'sanitize_callback' => 'esc_attr',
								'choices' => array( 'left'=>__('Align Left', 'great'),
													'center'=>__('Align Center', 'great'),
													'right'=>__('Align Right', 'great')),
							),
						),
					),
					'advanced' => array(
						'title' => __('Advanced Options', 'great'),
						'fields' => array(
							'css' => array(
								'type' => 'textarea',
								'label' => __('Custom CSS Styles', 'great'),
								'default' => '',
								'sanitize_callback' => 'esc_html',
							),
							'reset' => array(
								'type' => 'checkbox',
								'label' => __('Restore Defaults', 'great'),
								'default' => 0,
								'sanitize_callback' => 'great_reset_all_settings',
							),
							'separotor_menu_external_links' => array(
								'label' => __("Links", 'great'),
                                'type' => 'sep-title',
                            ),
							'external_links' => array(
								'label' => '',
                                'type' => 'externallinks',
                            ),
						),
					),
					///////////////////////////////////////////////////////////
                )
            ),
        )
    );

function great_boolean($value) {
    if(is_bool($value)) {
        return $value;
    } else {
        return false;
    }
}
function great_fontsize_array($min=9,$max=42) {
	$sizes = array();
	for ( $min; $min<=$max; $min++ ) {
		$sizes [$min] = $min.'px';
	}
	return $sizes;
}
function great_breadcrumb_char_choices($value='') {
    $choices = array('1','2','3');

    if( in_array($value, $choices)) {
        return $value;
    } else {
        return '1';
    }
}
/**
 * Reset all settings to default
 * @param  $input entered value
 * @return sanitized output
 *
 */
function great_reset_all_settings( $input ) {
	if ( $input == 1 ) {
		//Remove all set values
		remove_theme_mods();
    } 
    else {
        return '';
    }
}
?>