<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.js"></script>

<link rel="stylesheet" href="csss.css" />

$('.jcarousel').jcarousel({
    animation: 'slow'
});

$('.jcarousel').jcarousel({
    animation: {
        duration: 800,
        easing:   'linear',
        complete: function() {
        }
    }
});

<div class="jcarousel">
    <ul>
        <li><img class="valloire" src="get.jpg" /></li>
        <li><img class="valloire" src="get.jpg" /></li>
    </ul>
</div>