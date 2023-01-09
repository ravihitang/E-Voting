
<?php include ('head.php');?>

<body>

    <div id="wrapper">

      
              <?php include ('view_banner.php');?>
       
        <div id="page-wrapper">

    <heading class="menue-select">
            <center>
                <select onchange = "page(this.value)" style="height:50px;widht:130px;border:3px solid black; border-radius:30px;font-weight:bold;margin-top:10px;">
                <option disabled selected>Select Candidate Group</option>
                <option value = "candidates/pres.php">President</option>
                <option value = "candidates/vp.php">Vice President</option>
                <option value = "candidates/tr.php">Secretary</option>
                <option value = "candidates/ea.php">Joint Secretary</option>
                <option value = "candidates/ss.php">Sports Secretary</option>
                <option value = "candidates/vtr.php">Cultural Secretary</option>
                </select>
            </center>

    </heading> 
        </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </div>
    <?php    
        include ('footer.php');
        ?>

    <script>
    function page (src){
        window.location=src;
    }
    </script>

</body>

</html>

