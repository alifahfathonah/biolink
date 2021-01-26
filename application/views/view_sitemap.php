<?php 
  header('Content-type: application/xml; charset="ISO-8859-1"',true);  
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
     <loc><?php echo base_url();?></loc>
     <priority>1.0</priority>
  </url>
  <?php foreach($data as $key) { ?>
    <url>
       <loc><?php echo base_url('account/').$key['url'];?></loc>
       <priority>0.5</priority>
       <lastmod><?php echo $key['tanggal'];?></lastmod>
    </url>
  <?php } ?>
</urlset>