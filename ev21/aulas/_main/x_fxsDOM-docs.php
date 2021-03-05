<?php  
	include_once 'src/simple_html_dom.php';
	include_once 'bdCals.php';


	function getHtml($url) {
		return file_get_contents($url);
	}
	
	function domObj($calID) {
		return str_get_html(getHtml(getUrlCal($calID, 1)));
	}

		// file_get_html(htmlDeUrl(getUrlCal($calID, 1)));
	$url     = getUrlCal('ICI', 1);
	$strHTML = htmlDeUrl($url);
	$calICI  = str_get_html($strHTML);

	echo '<pre>';
	var_dump($calICI);
	echo '</pre>';


	// foreach ($calICI->find("div .date") as $el) echo $el->src.'<br>';
	// 
	$dom = new DomDocument();
	$dom->load($filePath);
	$finder = new DomXPath($dom);
	$classname="my-class";
	$nodes = $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");


	//+++
	include 'includes/simple_html_dom.php';

	$doc = str_get_html($html);
	$href = $doc->find('.lastPage')[0]->href;


	$dom = new DomDocument();
	@ $dom->loadHTML($html);

	$xpath = new DOMXpath($dom);
	$tables = $xpath->query("//table[contains(@class,'tablepress')]");
	$count = $tables->length;

	echo "No. of tables " . $count;


  $doc = new \DOMDocument();
  $doc->loadHTML($htmlinput);

  $xpath = new \DOMXpath($doc);
  $articles = $xpath->query('//div[@class="date"]');

  // all links in h2's in .blogArticle
  $links = [];
  foreach($articles as $container) {
    $arr = $container->getElementsByTagName("a");
    foreach($arr as $item) {
      if($item->parentNode->tagName == "h2") {
        $href =  $item->getAttribute("href");
        $text = trim(preg_replace("/[\r\n]+/", " ", $item->nodeValue));
        $links[] = [
          'href' => $href,
          'text' => $text
        ];
      }
    }
  }

  switch ($el->getAttribute('name')) {
    case 'MAX_FILE_SIZE' :
      $el->parentNode->removeChild($el);
    break;
    case 'inputfile' :
      $el->setAttribute('type', 'text');
    //break;
  }

?>
