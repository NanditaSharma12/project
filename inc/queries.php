<?php 

       $stmt = $conn->prepare("SELECT * FROM home_developing_tech limit 1");
       $stmt->execute(); 
       $tech_content = $stmt->fetch();
       $stmt1 = $conn->prepare("SELECT * FROM home_choose_best limit 1");
       $stmt1->execute(); 
       $choose_best = $stmt1->fetch();
       $stmt2 = $conn->prepare("SELECT * FROM home_quality_content limit 1");
       $stmt2->execute(); 
       $quality_content = $stmt2->fetch();
       $stmt3 = $conn->prepare("SELECT * FROM categories limit 4");
       $stmt3->execute(); 
       $categories = $stmt3->fetchAll();
       $stmt4 = $conn->prepare("SELECT * FROM categories order by id asc limit 4,3  ");
       $stmt4->execute(); 
       $foster_needs = $stmt4->fetchAll();
       $stmt5 = $conn->prepare("SELECT * FROM home_slider");
       $stmt5->execute(); 
       $home_slider = $stmt5->fetchAll();
       $stmt6 = $conn->prepare("SELECT * FROM blogs_cat");
       $stmt6->execute(); 
       $blog_cat = $stmt6->fetchAll();

       $stmt7 = $conn->prepare("SELECT * FROM blogs_data");
       $stmt7->execute(); 
       $blogs_data = $stmt7->fetchAll();
       
       $stmt8 = $conn->prepare("SELECT * FROM portfolio order by id asc limit 4");
       $stmt8->execute(); 
       $portfolio = $stmt8->fetchAll();
      ?>