<?php
// Define services with URL as key and service name as value
$services = [
    'mutual-fund' => 'Mutual Funds',
    'life-insurance' => 'Life Insurance',
    'health-insurance' => 'Health Insurance',
    'general-insurance' => 'General Insurance',
    'pms' => 'PMS',
    'fixed-deposit' => 'Fixed Deposit',
    'loan-service' => 'Loan Service',
    // 'sif' => 'SIF',
    'aif' => 'AIF',
    'gold-bond' => 'Gold Bond',
    'retirement-planning' => 'Retirement Planning',
    'tax-planning' => 'Tax Planning',
    'child-education' => 'Child Education',
];
    
// Get the current URL
$currentUrl = $_SERVER['REQUEST_URI'];

?>

<style>
    .service-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
    max-width: 300px;
}

.service-item {
    display: block;
    padding: 12px 16px;
    background-color: var(--secondary-color);
    color: #fff;
    text-decoration: none;
    font-family: DM Sans, Arial, Helvetica, sans-serif;
    font-size: 15px;
    font-weight: 500;
    border-radius: 2px;
    transition: background-color 0.3s ease;
}



.service-item.active {
    background-color: var(--primary-color);
    color: #fff;
    font-weight: bold;
}

</style>



<h3>Service <span class="primary-highlight-text">List</span></h3>

<div class="service-list mt-3">
    <?php foreach ($services as $url => $name): ?>
        <a href="<?= $url ?>" class="service-item <?= ($currentUrl == '/services/' . $url) ? 'active' : '' ?>">
            <?= $name ?>
        </a>
    <?php endforeach; ?>
</div>