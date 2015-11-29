<?php
//config.php
// database credentials stored here
include 'credentials.php';

/*
echo $_SERVER['PHP_SELF'];

die;
*/

//echo basename ( $_SERVER['PHP_SELF']);
// the constant THIS_PAGE identifies the current file name
define('THIS_PAGE',basename ( $_SERVER['PHP_SELF']));
// the switch allows us to create unique content for each page
switch(THIS_PAGE)
{

    case 'index.php':
        $title= 'Home Page';
        $pageID='Welcome Page';
        $content='lorum epsum goes here 1';
        $video='https://www.youtube.com/embed/xW_AsV7k42o';
        $image='breakfast.jpg';
        break;
       
    case 'template.php':
        $title= 'Template page';
        $pageID='Template Page';
        $content='lorum epsum goes here 2';
        $video='https://www.youtube.com/embed/dluGWF7nHtA';
        $image='breakfast2.jpg';
        
        break;
        
 
        
    case 'daily.php':
        $title= 'Daily page';
        $pageID='Daily Page';
        $content='lorum epsum goes here 3';
        $video='https://www.youtube.com/embed/0WXoIQX55GQ';
        $image='breakfast3.jpg';
        
        break;
        
    case 'contact.php':
        $title= 'Contact  page';
        $pageID='Contact Page';
        $content='lorum epsum goes here 4';
        $video='https://www.youtube.com/embed/dluGWF7nHtA';
        $image='burger.jpg';
        break;
    
    
    case 'customers.php':
        $title= 'Customers  page';
        $pageID='Customers Page';
        $content='lorum epsum goes here 4';
        $video='https://www.youtube.com/embed/dluGWF7nHtA';
        $image='burger.jpg';
        break;
        
    default:
        $title=THIS_PAGE;
        $pageID='Welcome to the Retro Diner!';
        $content='come back later';
        $video='https://www.youtube.com/embed/Eo-KmOd3i7s';
        $image='hotdog.jpg';
        
        
}// end switch


$nav1['index.php']='Home';
$nav1['template.php']='Template';
$nav1['daily.php']='Daily';
$nav1['customers.php']='Customers';
$nav1['contact.php']='Contact';

/*
foreach($nav1 as $link=> $label)

{
    echo " the link is $link and the label is $label<br />";

}
*/
//die;

//echo THIS_PAGE;

//die;
// will place navigation links on the page
function makeLinks($nav1)

{
    $myReturn ='';
    
    
    foreach($nav1 as $link=> $label)

    {
        $myReturn .= '<li>
					<a href="' . $link . '">' . $label . '</a>
				</li>';

    }

    return $myReturn;
    

}