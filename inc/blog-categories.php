		<div class="col-md-4">
			<div class="blog-sidebar">
				<div class="aside-widget">
					<div class="section-title">
						<h3 class="title">Categories</h3>
					</div>
					<div class="category-widget">
						<ul>
                            <?php foreach($blog_cat as $cat){
                                $idx = $cat['id']; 
                                  $stmt_count = $conn->prepare("SELECT count(*) as countd  FROM blogs_data where cat ='$idx'");
                                  $stmt_count->execute(); 
                                  $blog_count = $stmt_count->fetch();
                                
                                ?>
							<li><a href="http://localhost/infotech/category/cat/<?php echo strtolower($cat['cat']); ?>"><?php echo $cat['cat']; ?><span><?php echo $blog_count['countd']; ?></span></a></li>
                            <?php } ?>
							
						</ul>
					</div>
				</div>
				
				<div class="aside-widget">
					<div class="section-title">
						<h3 class="title">Archives </h3>
					</div>
					<div class="category-widget">
					<?php    $sql = $conn->prepare("select month(add_date) as month ,count(title) as totalb from blogs_data group by month(add_date)");
							 $sql->execute(); 
							 $month = $sql->fetchAll();
							//$curr_month_ts = date('F', strtotime('1 day', strtotime(date('Y-m-01'))));?>
						<ul>			
						<?php foreach($month as $mnth){
							$dateObj   = DateTime::createFromFormat('!m', $mnth['month']);
							$monthName = $dateObj->format('F');
							?>
							<li><a href="/month/date/<?php echo $monthName; ?>"><?php echo $monthName; ?> <span><?php echo $mnth['totalb']; ?></span></a></li>					
					<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>