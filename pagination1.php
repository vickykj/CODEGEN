<?php //include('../classes/DBconfig.php');

    $txt_next = "next";
    $txt_prev = "prev";
    
    $query = "SELECT COUNT(*) as num FROM $tabel $where";
    $result = mysqli_query($conn,$query);
	while($ro=mysqli_fetch_array($result))
	{
		$total_pages = $ro["num"];	
	}
	//$total_pages=$sql->data['num'];
    
    /* Setup vars for query. */
    if($page) 
       $start = ($page - 1) * $limit;             //first item to display on this page
    else
    	$start = 0;                                //if no page var is given, set start to 0
    
    /* Get data. */
    $query1 = "SELECT * FROM $tabel $where  $order LIMIT $start, $limit";
    $portfolio = mysqli_query($conn,$query1);
    
	//echo $query;
    /* Setup page vars for display. */
    if ($page == 0) $page = 1;                    //if no page var is given, default to 1.
    $prev = $page - 1;                            //previous page is page - 1
    $next = $page + 1;                            //next page is page + 1
    $lastpage = ceil($total_pages/$limit);        //lastpage is = total pages / items per page, rounded up.
    $lpm1 = $lastpage - 1;                        //last page minus 1
    
    /* 
        Now we apply our rules and draw the pagination object. 
        We're actually saving the code to a variable in case we want to draw it more than once.
    */	

	
/**************************PAGINATION LISTING vv******************************/	
	
	
    $pagination = "";
    if($lastpage > 1)
    {    
        $pagination .= "<div class=\"pagination\">";
        //previous button
        if ($page > 1) 
            $pagination.= "<a href=\"$alamat_pag?page=$prev\">$txt_prev</a>";
        else
            $pagination.= "<span class=\"disabled\">$txt_prev</span>";    
        
        //pages    
        if ($lastpage < 7 + ($adjacents * 2))    //not enough pages to bother breaking it up
        {    
            for ($counter = 1; $counter <= $lastpage; $counter++)
            {
                if ($counter == $page)
                    $pagination.= "<span class=\"current\">$counter</span>";
                else
                    $pagination.= "<a href=\"$alamat_pag?page=$counter\">$counter</a>";                    
            }
        }
        elseif($lastpage > 5 + ($adjacents * 2))    //enough pages to hide some
        {
            //close to beginning; only hide later pages
            if($page < 1 + ($adjacents * 2))        
            {
                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current\">$counter</span>";
                    else
                        $pagination.= "<a href=\"$alamat_pag?page=$counter\">$counter</a>";                    
                }
                $pagination.= "...";
                $pagination.= "<a href=\"$alamat_pag?page=$lpm1\">$lpm1</a>";
                $pagination.= "<a href=\"$alamat_pag?page=$lastpage\">$lastpage</a>";        
            }
            //in middle; hide some front and some back
            elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
            {
                $pagination.= "<a href=\"$alamat_pag?page=1\">1</a>";
                $pagination.= "<a href=\"$alamat_pag?page=2\">2</a>";
                $pagination.= "...";
                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current\">$counter</span>";
                    else
                        $pagination.= "<a href=\"$alamat_pag?page=$counter\">$counter</a>";                    
                }
                $pagination.= "...";
                $pagination.= "<a href=\"$alamat_pag?page=$lpm1\">$lpm1</a>";
                $pagination.= "<a href=\"$alamat_pag?page=$lastpage\">$lastpage</a>";        
            }
            //close to end; only hide early pages
            else
            {
                $pagination.= "<a href=\"$alamat_pag?page=1\">1</a>";
                $pagination.= "<a href=\"$alamat_pag?page=2\">2</a>";
                $pagination.= "...";
                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current\">$counter</span>";
                    else
                        $pagination.= "<a href=\"$alamat_pag?page=$counter\">$counter</a>";                    
                }
            }
        }
        
        //next button
        if ($page < $counter - 1) 
            $pagination.= "<a href=\"$alamat_pag?page=$next\">$txt_next</a>";
        else
            $pagination.= "<span class=\"disabled\">$txt_next</span>";
        $pagination.= "<span style=\"font-size=11px; color=blue;\">&nbsp;&nbsp;TOTAL: $total_pages<span>";
		$pagination.= "</div>\n";        
    }
	
?>
