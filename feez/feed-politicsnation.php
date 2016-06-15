<?php
require 'scraper/msnbc_scraper.php';

$author = 'Politics Nation';

$channel = array(
  'title' => $author . ' Videos',
  'description' => 'This is a rss feed with a list of ' . $author . ' Videos',
  'link' => 'http://www.msnbc.com/politicsnation'
);

$scraper = new MsnbcScraper($channel['link'], 0,30);

require_once dirname(__FILE__) . '/scraper/template.php';
?>