<?

// See https://www.warpconduit.net/2009/05/12/dynamically-load-css-and-js-files-using-php/

// FOR CSS FILES
$css = '';
$handle = '';
$file = '';
$css_dir = 'styles';
// open the "css" directory
if ($handle = opendir($css_dir)) {
    // list directory contents
    while (false !== ($file = readdir($handle))) {
        // only grab file names
        if (is_file($css_dir.'/' . $file)) {
            // insert HTML code for loading Javascript files
            $css .= '<link rel="stylesheet" href="' . $css_dir. '/' . $file .
                '" type="text/css" media="all" />' . "\n";
        }
    }
    closedir($handle);
    echo $css;
}

?>
