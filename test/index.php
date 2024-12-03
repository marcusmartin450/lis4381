<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>RSS Feeds</title>
    <!-- Note: RSS specification: https://validator.w3.org/feed/docs/rss2.html -->
</head>
<body>
<?php
$html = "";
$publisher = "ESPN News";
$url = "https://www.espn.com/espn/rss/news";

$html .= '<h2>' . $publisher . '</h2>';
$html .= '<p><a href="' . htmlspecialchars($url) . '" target="_blank">RSS Feed Link</a></p>';

$rss = simplexml_load_file($url);
$count = 0;
$html .= '<ul>';
foreach ($rss->channel->item as $item) {
    $count++;
    if ($count > 10) {
        break;
    }
    $html .= '<li><a href="' . htmlspecialchars($item->link) . '" target="_blank">' . htmlspecialchars($item->title) . '</a><br>';
    $html .= htmlspecialchars($item->description) . '<br>';
    $html .= htmlspecialchars($item->pubDate) . '</li><br>';
}
$html .= '</ul>';

print $html;
?>
</body>
</html>
