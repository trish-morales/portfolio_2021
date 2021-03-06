

<?php include 'sections/header.php'; ?>

<section class="portfolio-project-PROJECTNAME">
<div class="proj-header">
    <h1 class="projtitle"><?php echo $row['project_name'] ?></h1>
</div>

<div class="project-info">

    <h1 class="project-name">Project name</h1>
    <h4 class="project-objective-title bold">Objective</h4>
    <p class="project-objective">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus imperdiet tristique porttitor. Vivamus congue consequat imperdiet. Nam lacinia consequat odio in suscipit. Integer fermentum dignissim turpis, sit amet porta tortor sollicitudin quis. Donec vel ultricies sem. Donec tincidunt dignissim lectus, non pulvinar orci semper id. Quisque in est sem. In euismod, arcu varius vehicula porttitor, odio leo elementum neque, a tempor metus nisi vitae nulla. Suspendisse potenti. Sed venenatis dapibus blandit.</p>    

</div>

<div class='project-specifics'>
    <ul list='project-specs'>
        <li><span class="bold">Role:</span> Designer</li>
        <li><span class="bold">Year:</span> 2050!!</li>
        <li>UI/UX, Graphic Design</li>
    </ul>
    
</div>


<!-- parallax scroll -->
<section class="portfolio-parallax-project"></section>

<div class="project-description">
    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus imperdiet tristique porttitor. Vivamus congue consequat imperdiet. Nam lacinia consequat odio in suscipit. Integer fermentum dignissim turpis, sit amet porta tortor sollicitudin quis. Donec vel ultricies sem. Donec tincidunt dignissim lectus, non pulvinar orci semper id. Quisque in est sem.</p>
</div>



<div class='project-views-container'>

<section class="portfolio-closeup">
    <img src="img/tidal_thumb.jpg" alt="">
    <img src="img/tidal_thumb.jpg" alt="">
    <img src="img/tidal_thumb.jpg" alt="">
    <img src="img/tidal_thumb.jpg" alt="">
</section>

</div>

<div class="proj-links clearfix">
    <ul>
        <li class="prevProj left"><a href="#home"><i class="fas fa-angle-left"></i><br> Project name</a></li>
        <li class="allProj"><a href="#home">View All</a></li>
        <li class="nextProj right"><a href="#home"><i class="fas fa-angle-right"></i><br> Project name </a></li>
    </ul>
</div>
<!-- portfolio proj ends -->
</section>


<?php include 'sections/footer.php'; ?>