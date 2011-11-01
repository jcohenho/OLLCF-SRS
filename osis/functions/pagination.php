<?php

function paginate_three($reload, $page, $tpages, $adjacents) {
	
	$prevlabel = "&lsaquo; Prev";
	$nextlabel = "Next &rsaquo;";
	
	$out = "<div class=\"pages\"><ul class=\"paginationControl\">";
	
	// previous
	if($page==1) {
		$out.= "";
	}
	elseif($page==2) {
		$out.= "<li><a href=\"" . $reload . "\">" . $prevlabel . "</a></li>";
	}
	else {
		$out.= "<li><a href=\"" . $reload . "&amp;page=" . ($page-1) . "\">" . $prevlabel . "</a></li>";
	}
	
	// first
	if($page>($adjacents+1)) { $out.= "<li><a href=\"" . $reload . "\">1</a></li>";}
		
	// interval
	if($page>($adjacents+2)) { $out.= "<li><b>...</b></li>";}
		
	// pages
	$pmin = ($page>$adjacents) ? ($page-$adjacents) : 1;
	$pmax = ($page<($tpages-$adjacents)) ? ($page+$adjacents) : $tpages;
	for($i=$pmin; $i<=$pmax; $i++) {
		if($i==$page) {
			$out.= "<li class=\"selected\"><a href=\"\">" . $i . "</a></li>";
		}
		elseif($i==1) {
			$out.= "<li><a href=\"" . $reload . "\">" . $i . "</a></li>";
		}
		else {
			$out.= "<li><a href=\"" . $reload . "&amp;page=" . $i . "\">" . $i . "</a></li>";
		}
	}
	
	// interval
	if($page<($tpages-$adjacents-1)) { $out.= "<li><b>...</b></li>";}
		
	// last
	if($page<($tpages-$adjacents)) { $out.= "<li><a href=\"" . $reload . "&amp;page=" . $tpages . "\">" . $tpages . "</a></li>";}
		
	// next
	if($page<$tpages) {
		$out.= "<li><a href=\"" . $reload . "&amp;page=" . ($page+1) . "\">" . $nextlabel . "</a></li>";
	}
	else {
		$out.= "";
	}
	
	$out.= "</ul></div>";
	
	return $out;
}
?>