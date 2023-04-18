	 <div class="card ">
	  <a href="creations.php">

	   <img src="<?= $row['image'] ?>" class=" card-img-top img-thumbnail " alt="creation">
	  </a>
	  <div class=" card-body">
	   <h5 class="card-title"><?php echo nl2br(htmlspecialchars($row['title'])) ?></h5>
	   <p class="card-text">
	   <p class="creation_date"><?= date("jS M, Y", strtotime($row['date'])) ?></p>

	   <p class="card-text"><?php echo nl2br(htmlspecialchars(substr($row['post'], 0, 60))) ?></p>
	  </div>
	 </div>