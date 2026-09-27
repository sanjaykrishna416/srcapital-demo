<?php
// Get the current URL path after the domain
$currentPath = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/");

// Convert URL segments into an array
$segments = explode("/", $currentPath);

// Generate the page title dynamically (capitalize first letter of last segment)
$pageTitle = ucwords(str_replace("-", " ", end($segments))); // Convert slug to title

function formatSegmentTitle($segment) {
    $specialCases = [
        "about" => "About Us",
        "contact" => "Contact Us",
        "pms"=>"PMS (Portfolio Management Services)",
        "aif"=>"AIF (Alternative Investment Fund)",
        "sif"=>"SIF (Specialized Investment Fund)",
        "gold-silver"=>"Gold & Silver Investment",
    ];
    $lowerSegment = strtolower($segment);
    return $specialCases[$lowerSegment] ?? ucwords(str_replace(["-", "_","+"], " ", $segment));
}

// Generate the page title dynamically (capitalize first letter of last segment)
$pageTitle = formatSegmentTitle(end($segments));

?>

<div class="container-fluid page-header">
    <div class="container text-center align-items-center justify-cotent-center">

       

        <nav aria-label="breadcrumb animated slideInDown ">
            <ol class="breadcrumb  mb-0">
                <li class="breadcrumb-item  "><p class="  animated slideInDown  fw-bold "> <a class="text-decoration-none" href="/">Home</a> / <?php echo $pageTitle; ?></p></li>
                <?php
               /* $url = "/";
                foreach ($segments as $index => $segment) {
                    $url .= $segment . "/";
                    $segmentTitle = formatSegmentTitle($segment);


                    // If it's the last segment, mark it as active
                    if ($index === count($segments) - 2) {
                        echo '<li class="breadcrumb-item active text-white" aria-current="page">' . $segmentTitle . '</li>';
                    } else {
                        echo '<li class="breadcrumb-item text-white"><a class="text-decoration-none" href="' . $url . '">' . $segmentTitle . '</a></li>';
                    }
                }*/
                ?>

            </ol>
        </nav>
    </div>
</div>