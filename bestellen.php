<!DOCTYPE html>
<html lang="en">
<head style="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>


<body>
    
    <div>
    <h1 style="text-align: center;">Huisarts bestellen</h1>
    </div>

    </div>
	<div style="text-align:center;">
	<form id="bestellen" method="post" action="bestellen_parse.php" ;>
	
		<table>
        <tr>
		
		<p> Medicijn 1 </p>
		<select  name='medicijnpicker[]'>
            <option value="">Kies het medicijn</option>

            <?php
            for ($i= 1; $i < 101; $i++)
              {
                echo'<option value="'.$i.'">'.$i.'</option>';			
              } 
			  	
            ?> 
        </select>
		<p> Medicijn 2 </p>
		<select name='medicijnpicker[]'>
            <option value="">Kies het medicijn</option>

            <?php
            for ($i= 1; $i < 101; $i++)
              {
                echo'<option value="'.$i.'">'.$i.'</option>';			
              } 
			  	
            ?> 
        </select>
		<p> Medicijn 3 </p>
		<select name='medicijnpicker[]'>
            <option value="">Kies het medicijn</option>

            <?php
            for ($i= 1; $i < 101; $i++)
              {
                echo'<option value="'.$i.'">'.$i.'</option>';			
              } 
			  	
            ?> 
        </select>
		<p> Medicijn 4 </p>
		<select name='medicijnpicker[]'>
            <option value="">Kies het medicijn</option>

            <?php
            for ($i= 1; $i < 101; $i++)
              {
                echo'<option value="'.$i.'">'.$i.'</option>';			
              } 
			  	
            ?> 
        </select>
		<p> Medicijn 5 </p>
		<select name='medicijnpicker[]'>
            <option value="">Kies het medicijn</option>

            <?php
            for ($i= 1; $i < 101; $i++)
              {
                echo'<option value="'.$i.'">'.$i.'</option>';			
              } 
			  	
            ?> 
        </select>
		<p> Medicijn 6 </p>
		<select name='medicijnpicker[]'>
            <option value="">Kies het medicijn</option>

            <?php
            for ($i= 1; $i < 101; $i++)
              {
                echo'<option value="'.$i.'">'.$i.'</option>';			
              } 
			  	
            ?> 
        </select>
		<p> Medicijn 7 </p>
		<select name='medicijnpicker[]'>
            <option value="">Kies het medicijn</option>

            <?php
            for ($i= 1; $i < 101; $i++)
              {
                echo'<option value="'.$i.'">'.$i.'</option>';			
              } 
			  	
            ?> 
        </select>
		<p> Medicijn 8 </p> &nbsp
		<select name='medicijnpicker[]'>
            <option value="">Kies het medicijn</option>

            <?php
            for ($i= 1; $i < 101; $i++)
              {
                echo'<option value="'.$i.'">'.$i.'</option>';			
              } 
			  	
            ?> 
        </select>
		<p> Medicijn 9 </p>
		<select name='medicijnpicker[]'>
            <option value="">Kies het medicijn</option>

            <?php
            for ($i= 1; $i < 101; $i++)
              {
                echo'<option value="'.$i.'">'.$i.'</option>';			
              } 
			  	
            ?> 
        </select>
		<p> Medicijn 10 </p>
		<select name='medicijnpicker[]'>
            <option value="">Kies het medicijn</option>

            <?php
            for ($i= 1; $i < 101; $i++)
              {
                echo'<option value="'.$i.'">'.$i.'</option>';			
              } 
			  	
            ?> 
        </select>
        </tr>
    </table>
		<button type="submit" class="btn btn-danger" name="medicijnBestellen" id="medicijnBestellen" onClick="bestellen_parse.php">Bestellen</button>
      </form>
	  </div>
  </div>
 <!--</table>-->
</div>
</body>
<br><br><br>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>