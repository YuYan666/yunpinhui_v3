 <?php 
      $bdata1 = get_article_new(array(17),'art_cat',0,false,true);
      foreach( $bdata1 as $key=>$value) { 
      
          echo "<a href='". $value['link'] ."' target='_blank' title='" . $value['title'] . "'><img src='" . $value['file_url'] . "' width='1210' height='100' alt='" . $value['title'] . "'/></a>";
      }
?>