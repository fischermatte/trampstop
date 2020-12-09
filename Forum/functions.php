<?
function Kleur($bericht){
 $bericht = preg_replace("!\[rot\](.*)\[/rot\]!Usi", "<font color=\"red\">\\1</font>", $bericht);
 $bericht = preg_replace("!\[blau\](.*)\[/blau\]!Usi", "<font color=\"blue\">\\1</font>", $bericht);
 $bericht = preg_replace("!\[pink\](.*)\[/pink\]!Usi", "<font color=\"purple\">\\1</font>", $bericht);
 $bericht = preg_replace("!\[gelb\](.*)\[/gelb\]!Usi", "<font color=\"yellow\">\\1</font>", $bericht);
 $bericht = preg_replace("!\[braun\](.*)\[/braun\]!Usi", "<font color=\"#800000\">\\1</font>", $bericht);
 $bericht = preg_replace("!\[grau\](.*)\[/grau\]!Usi", "<font color=\"#808080\">\\1</font>", $bericht);
 $bericht = preg_replace("!\[grün\](.*)\[/grün\]!Usi", "<font color=\"green\">\\1</font>", $bericht);
 return $bericht;
}

function UBB($bericht){
 $bericht = str_replace("[b]", "<b>", $bericht);
 $bericht = str_replace("[/b]", "</b>", $bericht);
 $bericht = str_replace("[i]", "<i>", $bericht);
 $bericht = str_replace("[/i]", "</i>", $bericht);
 $bericht = str_replace("[u]", "<u>", $bericht);
 $bericht = str_replace("[/u]", "</u>", $bericht);
 $bericht = str_replace("[center]", "<center>", $bericht);
 $bericht = str_replace("[/center]", "</center>", $bericht);
 $bericht = str_replace("[move]", "<marquee>", $bericht);
 $bericht = str_replace("[/move]", "</marquee>", $bericht);
 $bericht = preg_replace("!\\[url\\]www.(.*)\\[/url\\]!Usi", "<a href=\"http://www.\\1\" target=_blank>\\1</a>",$bericht);
 $bericht = preg_replace("!\\[url\\](.*)\\[/url\\]!Usi","<a href=\"\\1\" target=_blank>\\1</a>",$bericht);
 $bericht = preg_replace("!\\[url=(.*)\\](.*?)\\[/url\\]!Usi","<a href=\"\\1\" target=_blank>\\2</a>",$bericht);
 $bericht = preg_replace("!\\[email\\](.*)\\[/email\\]!Usi", "<a href=\"mailto:\\1\">\\1</a>",$bericht);
 $bericht = preg_replace("!\\[img\\](.*)\\[/img\\]!Usi","<img src=\"\\1\" border=0>",$bericht);
 $bericht = preg_replace("!\\[swf width=(.*) height=(.*?)\\](.*?)\\[/swf\\]!Usi","<param name=quality value=high><param name=\"SRC\" value=\"\\3\"><embed src=\"\\3\" quality=high pluginspage=\"http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash\" type=\"application/x-shockwave-flash\" width=\"\\1\" height=\"\\2\"></embed></object>", $bericht);
 return $bericht;
}

function Smile($bericht){
 $bericht = ereg_replace(":\~\(", "<img src=./images/cry.gif> ", $bericht);
 $bericht = ereg_replace("\(b\)", "<img src=./images/bier.gif> ", $bericht);
 $bericht = ereg_replace("\(g\)", "<img src=./images/grolsch.gif> ", $bericht);
 $bericht = ereg_replace("\(a\)", "<img src=./images/amstel.gif> ", $bericht);
 $bericht = ereg_replace("\(B\)", "<img src=./images/bier.gif> ", $bericht);
 $bericht = ereg_replace("\(G\)", "<img src=./images/grolsch.gif> ", $bericht);
 $bericht = ereg_replace("\(A\)", "<img src=./images/amstel.gif> ", $bericht);
 $bericht = ereg_replace("\(!\)", "<img src=./images/warn.gif> ", $bericht);	
 $bericht = ereg_replace(":\)", "<img src=./images/smiley.gif> ", $bericht); 
 $bericht = ereg_replace(":\[", "<img src=./images/embarassed.gif> ", $bericht); 
 $bericht = ereg_replace(":\(", "<img src=./images/angry.gif> ", $bericht); 
 $bericht = ereg_replace(";)", "<img src=./images/wink.gif> ", $bericht); 
 $bericht = ereg_replace(";D", "<img src=./images/grin.gif> ", $bericht); 
 $bericht = ereg_replace(":\?", "<img src=./images/huh.gif> ", $bericht); 
 $bericht = ereg_replace(":D", "<img src=./images/cheesy.gif> ", $bericht); 
 $bericht = ereg_replace(":r", "<img src=./images/rolleyes.gif> ", $bericht);
 $bericht = ereg_replace("8)", "<img src=./images/cool.gif> ", $bericht);  
 $bericht = ereg_replace(":o", "<img src=./images/shocked.gif> ", $bericht); 
 $bericht = ereg_replace(":\|", "<img src=./images/undecided.gif> ", $bericht); 
 $bericht = ereg_replace(":p", "<img src=./images/tongue.gif> ", $bericht);
 $bericht = ereg_replace(":x", "<img src=./images/lipsrsealed.gif> ", $bericht); 
 $bericht = ereg_replace(":1", "<img src=./images/thumbup.gif> ", $bericht); 
 $bericht = ereg_replace(":6", "<img src=./images/thumbdown.gif> ", $bericht); 
 return $bericht;
}

function MaakOp($bericht){
 if(!@$html)
  $bericht = htmlspecialchars($bericht);
 $bericht = ereg_replace("\n","<br>",$bericht);
 $bericht = Kleur($bericht);
 $bericht = UBB($bericht);
 $bericht = Smile($bericht);
 return $bericht;
}
?>