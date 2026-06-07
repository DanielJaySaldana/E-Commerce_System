<?php
session_start();

if (!isset($_SESSION['user_email'])) {
    header('Location: index.php');
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="dashboard-body">
    <aside class="sidebar">
        <nav>
            <a href="#"><i class="fa-solid fa-chart-simple"></i><span>Analytics</span></a>
            <a href="#" class="active"><i class="fa-solid fa-chart-line"></i><span>E-Commerce</span></a>
            <a href="#"><i class="fa-brands fa-bitcoin"></i><span>Crypto</span><em>New</em></a>
            <a href="#"><i class="fa-regular fa-user"></i><span>Account</span></a>

            <p>Concepts</p>
            <a href="#"><i class="fa-solid fa-users"></i><span>Customers</span><b>›</b></a>
            <a href="#"><i class="fa-solid fa-bag-shopping"></i><span>Products</span><b>›</b></a>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i><span>Orders</span><b>›</b></a>
            <a href="#"><i class="fa-regular fa-clipboard"></i><span>Invoices</span><b>›</b></a>
            <a href="#"><i class="fa-solid fa-truck"></i><span>Logistics</span><b>›</b></a>
            <a href="#"><i class="fa-solid fa-graduation-cap"></i><span>Academy</span><b>›</b></a>
            <a href="#"><i class="fa-regular fa-building"></i><span>Job Listings</span><b>›</b></a>
            <a href="#"><i class="fa-solid fa-share-nodes"></i><span>Social Media</span><b>›</b></a>
            <a href="#"><i class="fa-regular fa-newspaper"></i><span>Blog</span><b>›</b></a>
            <a href="#"><i class="fa-solid fa-arrow-up-from-bracket"></i><span>File Manager</span></a>
            <a href="#"><i class="fa-regular fa-square-check"></i><span>Kanban</span></a>
            <a href="#"><i class="fa-regular fa-envelope"></i><span>Mail</span></a>
            <a href="#"><i class="fa-regular fa-comments"></i><span>Chat</span></a>
            <a href="#"><i class="fa-regular fa-calendar"></i><span>Calendar</span></a>
        </nav>
    </aside>

    <main class="dashboard-main">
        <header class="topbar">
            <i class="fa-solid fa-magnifying-glass search-icon"></i>
            <div class="top-actions">
                <span class="flag">🇬🇧</span>
                <span class="bell"><i class="fa-regular fa-bell"></i><small>2</small></span>
                <i class="fa-regular fa-user"></i>
                <img src="https://i.pravatar.cc/40?img=32" alt="User profile">
            </div>
        </header>

        <section class="dashboard-title">
            <h1>E-Commerce</h1>
            <button type="button"><i class="fa-solid fa-rotate-left"></i> Sync Data</button>
        </section>

        <section class="dashboard-grid">
            <div class="left-column">
                <article class="panel stats-panel">
                    <h2>Today's Stats</h2>
                    <div class="stats-row">
                        <div class="stat-card sales">
                            <i class="fa-solid fa-chart-simple"></i>
                            <div>
                                <span>Sales</span>
                                <strong>$152k</strong>
                            </div>
                        </div>
                        <div class="stat-card cost">
                            <i class="fa-solid fa-gear"></i>
                            <div>
                                <span>Cost</span>
                                <strong>$99.7k</strong>
                            </div>
                        </div>
                        <div class="stat-card profit">
                            <i class="fa-solid fa-check"></i>
                            <div>
                                <span>Profit</span>
                                <strong>$32.1k</strong>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="panel chart-panel">
                    <h2>Sales Revenue</h2>
                    <div class="chart-wrap">
                        <div class="grid-line"></div>
                        <div class="grid-line"></div>
                        <div class="grid-line"></div>
                        <svg viewBox="0 0 760 260" role="img" aria-label="Static sales revenue chart">
                            <polyline class="line orange" points="15,165 85,145 155,75 230,140 300,245 380,220 460,190 545,170 625,175 690,100 745,165"></polyline>
                            <polyline class="line purple" points="15,200 85,240 155,225 230,120 300,35 380,145 460,205 545,225 625,185 690,220 745,70"></polyline>
                        </svg>
                        <div class="chart-days">
                            <span>20 Jan</span><span>21 Jan</span><span>22 Jan</span><span>23 Jan</span><span>24 Jan</span><span>25 Jan</span><span>26 Jan</span><span>27 Jan</span><span>28 Jan</span><span>29 Jan</span><span>30 Jan</span><span>31 Jan</span>
                        </div>
                    </div>
                </article>
            </div>

            <aside class="panel products-panel">
                <div class="panel-header">
                    <h2>Top Selling Products</h2>
                    <i class="fa-solid fa-ellipsis"></i>
                </div>

                <div class="product-list">
                    <div class="product-item">
                        <div class="product-img img-blue"></div>
                        <div class="product-info"><strong>Healthcare Erbology</strong><span>in Accessories</span></div>
                        <div class="sales-number">13,153<span>in sales</span></div>
                        <b>#1</b>
                    </div>
                    <div class="product-item">
                        <div class="product-img img-soft"></div>
                        <div class="product-info"><strong>Makeup Lancome Rouge</strong><span>in Accessories</span></div>
                        <div class="sales-number">10,300<span>in sales</span></div>
                        <b>#2</b>
                    </div>
                    <div class="product-item">
                        <div class="product-img empty"><i class="fa-regular fa-image"></i></div>
                        <div class="product-info"><strong>Lounge Puff Fabric Slipper</strong><span>in Accessories</span></div>
                        <div class="sales-number">5,300<span>in sales</span></div>
                        <b>#3</b>
                    </div>
                    <div class="product-item">
                        <div class="product-img img-gray"></div>
                        <div class="product-info"><strong>Skincare Necessaire</strong><span>in Accessories</span></div>
                        <div class="sales-number">1,203<span>in sales</span></div>
                        <b>#4</b>
                    </div>
                    <div class="product-item">
                        <div class="product-img img-taupe"></div>
                        <div class="product-info"><strong>Skincare Soja CO</strong><span>in Accessories</span></div>
                        <div class="sales-number">254<span>in sales</span></div>
                        <b>#5</b>
                    </div>
                </div>

                <a class="see-all" href="#">See All <i class="fa-solid fa-arrow-right"></i></a>
            </aside>
        </section>
    </main>

    <button class="floating-btn" type="button"><i class="fa-solid fa-sliders"></i></button>
</body>
</html>
