
<?php
	include("header.inc");
?>
<?php
	include("nav.inc");
?>
	
	<main>
	<form action='/SEProject/location.php' method='post'>
	<table class="locationfilter" border=0>
	<tr><td>Search by Suburb</td><td>Advanced search</td></tr>
	<tr><td><input type="text" id="suburbtext" placeholder="Search Suburb or Location" name="keyword"></td>
	<td><select name="advsearch" id="advdrop">
	<option value="Drive-through">Drive-through Clinic</option>
	<option value="Walk-in">Walk-in Clinic</option>
	<option value="Open">Open Now</option>
	<option value="Testing-Registration-Form-Site">Testing Registration Form Site</option>
	<option value="No-GP-referral-required">No GP refferal required</option>
	<option value="Pathology-collection-centre">Pathology Collection Centre</option>
	<option value="Commonwealth-respiratory-clinic">Commonwealth respiratory Clinic</option>
	</select></td>
	<td><input type="submit" name="search" value="Search"></td><tr>
	
	</table>
	<p>
	<div id="legend">
		<h4><i>Legend</i></h4>
		<p><img src="resources/drive.png" class="small" alt="Drive-Thru" />
			Drive-Thru
		</p>

		<p><img src="resources/walk.png" class="small" alt="Walk-In" />
			Walk-In
		</p>

		<p><img src="resources/hospital.png" class="small" alt="Hospital" />
			Hospital
		</p>

		<p><img src="resources/patho.png" class="small" alt="Pathology Clinic" />
			Pathology Clinic
		</p>

		<p><img src="resources/GP.png" class="small" alt="GP Clinic" />
			GP Respiratory Clinic
		</p>
	</div>
	</p>
	</form>
	<div id="sortby">
	<label for='sortby'> Sort by </label>
	<select name="Sortby" id='sort_drop'>
	<option value="A-ZSuburb"> A-Z by Suburb </option>
	<option value="A-Zlocation"> A-Z by Location </option>
	<option value="waittime"> Shortest wait time </option>
	</select>
	</div>
	
	<table border=1 id="locationtable">
	<tr><th>Suburb</th><th>Location</th><th>Site Type</th><th>Estimated Wait time</th><th></th></tr>
	<?php 
	


if(isset($_POST['search']))
{
    $keyword = $_POST['keyword'];
    // search in all table columns
    $query = "SELECT * FROM 'location' WHERE 'suburb' LIKE '%".$keyword."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `location`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "sepm");
    $filter_result = mysqli_query($connect, $query);
    return $filter_result;
}
?>
 <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['suburb'];?></td>
                    <td><?php echo $row['location'];?></td>
                    <td><?php echo $row['site_type'];?></td>
					<td><?php echo $row['waittime'];?></td>
					<td><button type="button" class="collapsible">More Details</button>
					<div class="content">
  					<p>Operation Hour: <?php echo $row['opening_hour'];?><br>
					  Phone: <?php echo $row['phone'];?>
					</p>
					</div></td>
                </tr>
                <?php endwhile;?>
	
	</table>
	
	<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
	

</main>
	
<?php include("footer.inc"); ?>