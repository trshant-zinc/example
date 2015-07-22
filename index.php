<?PHP


$requested_uri = '/profile/rajesh--prabhu/';
$pos1 = stripos($requested_uri, '/venue/');
$pos2 = stripos($requested_uri, '/organisation/');
$pos3 = stripos($requested_uri, '/case-study/');
$pos4 = stripos($requested_uri, '/profile/');

//
// removed that line!
//
if( $pos1 !== false || $pos2 !== false || $pos3 !== false || $pos4 !== false ){ echo "true" ; } else { echo "false" ; }

?>
