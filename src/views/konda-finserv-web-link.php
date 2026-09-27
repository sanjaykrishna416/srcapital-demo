<!DOCTYPE html>
<html lang="reactjs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="<?= $favIcon ?>" rel="shortcut icon" type="image/png">

</head>

<body>
    <?php include_once('src/components/preLoader.php') ?>

    <?php include_once('src/views/layouts/navbar.php') ?>

    <!-- -------page header------ -->
    <?php require_once('src/components/pageHeader.php'); ?>
<style>
  body {
    background: #E9E7E2;
    color: #1A1A1A;
  
    font-size: 15px;
    line-height: 1.5;
  }
.page-header {
    background: #71BA3D !important;
    margin-top: 29px;
}
  .page {
  
    margin: 2.5rem auto;
    background: #fff;
    border: 1px solid #d8d3c8;
    box-shadow: 0 2px 14px rgba(0,0,0,0.08);
    padding: 2.25rem 2.25rem 1.75rem;
  }

  .brand-logo {
    display: block;
    width: 92px;
    height: auto;
    margin: 0 auto 0.75rem;
  }

  .brand-name {
    color: #9A7328;
    font-weight: 700;
    text-align: center;
    font-size: 1.9rem;
    margin-bottom: 0.35rem;
    letter-spacing: 0.2px;
  }

  .brand-tagline {
    text-align: center;
    font-weight: 700;
    font-size: 0.95rem;
    margin-bottom: 1.1rem;
  }

  .brand-tagline .sep {
    color: #9A7328;
    margin: 0 0.4rem;
  }

  .pms-note {
    font-style: italic;
    font-size: 0.85rem;
    margin: 0.75rem 0 1.5rem;
  }

  table.doc-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 1.75rem;
    font-size: 0.92rem;
  }

  table.doc-table th,
  table.doc-table td {
    border: 1px solid #1A1A1A;
    padding: 0.45rem 0.65rem;
    vertical-align: middle;
  }

  .section-head th {
    background: #9A7328;
    color: #fff;
    text-align: center;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 0.85rem;
    letter-spacing: 0.4px;
    padding: 0.55rem 0.65rem;
  }

  .sub-head th, .sub-head td {
    background: #F7F2E7;
    font-weight: 700;
  }

  .kv-table td:first-child {
    background: #F7F2E7;
    font-weight: 700;
    width: 30%;
    white-space: nowrap;
  }

  .amc-table td.sr {
    text-align: center;
    width: 8%;
  }

  .amc-table td:nth-child(2) {
    font-weight: 700;
  }

  .amc-table tbody tr:nth-child(even) td {
    background: #F7F2E7;
  }

  .pms-table td.sr {
    text-align: center;
    width: 8%;
  }

  .pms-table td:nth-child(2) {
    font-weight: 700;
  }

  mark.hl {
    background: #FFFF00;
    padding: 0 0.2rem;
    font-weight: 700;
  }

  .placeholder {
    background: #FFFF00;
    display: inline-block;
    min-width: 140px;
    height: 1em;
  }

  .disclosure p {
    margin-bottom: 0.6rem;
    font-size: 0.92rem;
  }

  .footer-box {
    border: 1px solid #1A1A1A;
    background: #F7F2E7;
    text-align: center;
    padding: 0.75rem 1rem;
    margin-top: 0.5rem;
  }

  .footer-box .fb-name {
    font-weight: 700;
    font-size: 1rem;
    margin-bottom: 0.15rem;
  }

  .footer-box .fb-line {
    font-size: 0.82rem;
  }

  a {
    color: #7E5D20;
  }
  a:hover {
    color: #9A7328;
  }

  @media (max-width: 576px) {
    .page { padding: 1.25rem 1rem; margin: 0; border: none; }
    .brand-name { font-size: 1.4rem; }
    .brand-tagline { font-size: 0.8rem; }
    table.doc-table { font-size: 0.78rem; }
    .kv-table td:first-child { white-space: normal; width: 38%; }
  }
</style>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page">
					<img src="/assets/images/logo/logo.jpeg" class="brand-logo">
					
					<div class="brand-name">Konda Finserv Private Limited</div>
					<div class="brand-tagline">
						AMFI Registered Mutual Fund Distributor <span class="sep">│</span> ARN-277134 <br> APMI Registered PMS Distributor <span class="sep">│</span> APRN-04080
					</div>

					<!-- Entity Information -->
					<table class="doc-table kv-table">
						<thead>
						<tr class="section-head"><th colspan="2">Entity Information</th></tr>
						</thead>
						<tbody>
						<tr><td>Entity Name</td><td>Konda Finserv Private Limited</td></tr>
						<tr><td>Type</td><td>Private Limited Company</td></tr>
						<tr><td>CIN</td><td>U66301TS2023PTC172408</td></tr>
						<tr><td>PAN</td><td>AAKCK1962G</td></tr>
						<tr><td>GSTIN</td><td>36AAKCK1962G1ZE</td></tr>
						<tr><td>Directors</td><td>1. Mr. Ravinder Konda&nbsp;&nbsp;&nbsp;2. Mrs. Aruna Konda&nbsp;&nbsp;&nbsp;3. Mr. Srinath Konda</td></tr>
						<tr><td>Registered Office</td><td>Flat 204, 1-1-508/1/B, Sri Balaji Indraprastha Apts, Gandhi Nagar, Bakaram, Hyderabad-500080, Telangana</td></tr>
						<tr><td>Contact</td><td>+91-9391000958 │ kondafinserv@gmail.com</td></tr>
						<tr><td>Grievance Contact Person</td><td>Mr. Ravinder Konda</td></tr>
						</tbody>
					</table>

					<!-- Registrations & Validity -->
					<table class="doc-table">
						<thead>
						<tr class="section-head"><th colspan="3">Registrations &amp; Validity</th></tr>
						<tr class="sub-head"><th>Segment</th><th>Registration</th><th>Validity</th></tr>
						</thead>
						<tbody>
						<tr>
							<td>Mutual Fund Distribution</td>
							<td>ARN-277134</td>
							<td><em>Initial: 27-Apr-2023; valid up to 27-Sep-2029</em></td>
						</tr>
						<tr>
							<td>PMS Distribution (APMI Registered)</td>
							<td>APRN-04080</td>
							<td><em>valid From 20-05-2026 to valid till 19-05-2029</em></td>
						</tr>
						</tbody>
					</table>

					<p class="pms-note">We distribute PMS products of SEBI-registered Portfolio Managers. We are NOT a Portfolio Manager and NOT a SEBI Registered Investment Adviser.</p>

					<!-- Empanelled Mutual Fund AMCs -->
					<div class="table-responsive">
					<table class="doc-table amc-table">
						<thead>
						<tr class="section-head"><th colspan="3">Empanelled Mutual Fund AMCs with SEBI Registration</th></tr>
						<tr class="sub-head"><th>Sr.</th><th>AMC Name</th><th>SEBI Registration No.</th></tr>
						</thead>
						<tbody>
							<tr><td class="sr">1</td><td>360 ONE Mutual Fund</td><td>MF/067/11/02</td></tr>
							<tr><td class="sr">2</td><td>Abakkus Mutual Fund</td><td>MF/088/25/14</td></tr>
							<tr><td class="sr">3</td><td>Aditya Birla Sun Life MF</td><td>MF/020/94/8</td></tr>
							<tr><td class="sr">4</td><td>Axis Mutual Fund</td><td>MF/061/09/02</td></tr>
							<tr><td class="sr">5</td><td>Bajaj Finserv MF</td><td>MF/078/23/04</td></tr>
							<tr><td class="sr">6</td><td>Bandhan Mutual Fund</td><td>MF/042/00/3</td></tr>
							<tr><td class="sr">7</td><td>Bank of India MF</td><td>MF/056/08/01</td></tr>
							<tr><td class="sr">8</td><td>Baroda BNP Paribas MF</td><td>MF/018/94/2</td></tr>
							<tr><td class="sr">9</td><td>Canara Robeco MF</td><td>MF/004/93/4</td></tr>
							<tr><td class="sr">10</td><td>DSP Mutual Fund</td><td>MF/036/97/7</td></tr>
							<tr><td class="sr">11</td><td>Edelweiss MF</td><td>MF/057/08/02</td></tr>
							<tr><td class="sr">12</td><td>Franklin Templeton MF</td><td>MF/026/96/8</td></tr>
							<tr><td class="sr">13</td><td>HDFC Mutual Fund</td><td>MF/044/00/6</td></tr>
							<tr><td class="sr">14</td><td>Helios Mutual Fund</td><td>MF/079/23/05</td></tr>
							<tr><td class="sr">15</td><td>HSBC Mutual Fund</td><td>MF/046/02/5</td></tr>
							<tr><td class="sr">16</td><td>ICICI Prudential MF</td><td>MF/003/93/6</td></tr>
							<tr><td class="sr">17</td><td>Invesco Mutual Fund</td><td>MF/052/06/01</td></tr>
							<tr><td class="sr">18</td><td>ITI Mutual Fund</td><td>MF/076/22/02</td></tr>
							<tr><td class="sr">19</td><td>Jio BlackRock Mutual Fund</td><td>MF/085/25/11</td></tr>
							<tr><td class="sr">20</td><td>JM Financial MF</td><td>MF/012/93/7</td></tr>
							<tr><td class="sr">21</td><td>Kotak Mahindra MF</td><td>MF/038/98/1</td></tr>
							<tr><td class="sr">22</td><td>LIC Mutual Fund</td><td>MF/013/94/6</td></tr>
							<tr><td class="sr">23</td><td>Mahindra Manulife MF</td><td>MF/065/10/02</td></tr>
							<tr><td class="sr">24</td><td>Mirae Asset MF</td><td>MF/055/07/08</td></tr>
							<tr><td class="sr">25</td><td>Motilal Oswal MF</td><td>MF/062/09/03</td></tr>
							<tr><td class="sr">26</td><td>Nippon India MF</td><td>MF/022/95/1</td></tr>
							<tr><td class="sr">27</td><td>PGIM India MF</td><td>MF/049/03/01</td></tr>
							<tr><td class="sr">28</td><td>PPFAS Mutual Fund</td><td>MF/066/10/03</td></tr>
							<tr><td class="sr">29</td><td>Quant Mutual Fund</td><td>MF/028/96/4</td></tr>
							<tr><td class="sr">30</td><td>Samco Mutual Fund</td><td>MF/081/23/07</td></tr>
							<tr><td class="sr">31</td><td>SBI Mutual Fund</td><td>MF/009/93/8</td></tr>
							<tr><td class="sr">32</td><td>Sundaram MF</td><td>MF/017/96/6</td></tr>
							<tr><td class="sr">33</td><td>Tata Mutual Fund</td><td>MF/034/95/7</td></tr>
							<tr><td class="sr">34</td><td>Trust Mutual Fund</td><td>MF/077/22/03</td></tr>
							<tr><td class="sr">35</td><td>Union Mutual Fund</td><td>MF/053/07/02</td></tr>
							<tr><td class="sr">36</td><td>UTI Mutual Fund</td><td>MF/048/03/08</td></tr>
							<tr><td class="sr">37</td><td>Unifi Mutual Fund</td><td>MF/082/24/08</td></tr>
							<tr><td class="sr">38</td><td>WhiteOak Capital MF</td><td>MF/074/18/01</td></tr>
						</tbody>
					</table>
					</div>

					<!-- Empanelled PMSs -->
					<!-- <div class="table-responsive">
						<table class="doc-table pms-table">
						<thead>
						<tr class="section-head"><th colspan="3">Empanelled PMSs with SEBI Registration</th></tr>
						<tr class="sub-head"><th>Sr.</th><th>PMS Name</th><th>SEBI Registration No.</th></tr>
						</thead>
						<tbody>
						<tr>
							<td class="sr">1</td>
							<td>ICICI Prudential Asset Management Company Limited (IPRUAMC)</td>
							<td><mark class="hl">INP000000373</mark></td>
						</tr>
						<!-- <tr>
							<td class="sr">2</td>
							<td><span class="placeholder"></span></td>
							<td><span class="placeholder"></span></td>
						</tr>
						<tr>
							<td class="sr">3</td>
							<td><span class="placeholder"></span></td>
							<td><span class="placeholder"></span></td>
						</tr>
						</tbody>
					</table>
					</div> -->

					<!-- Important Links -->
					<div class="table-responsive">
						<table class="doc-table kv-table">
						<thead>
						<tr class="section-head"><th colspan="2">Important Links</th></tr>
						</thead>
						<tbody>
							<tr><td class="label">SEBI</td><td><a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">https://www.sebi.gov.in/</a></td></tr>
							<tr><td class="label">SEBI SCORES</td><td><a href="https://scores.sebi.gov.in/" target="_blank" rel="noopener">https://scores.sebi.gov.in/</a></td></tr>
							<tr><td class="label">SMART ODR</td><td><a href="https://smartodr.in/" target="_blank" rel="noopener">https://smartodr.in/</a></td></tr>
							<tr><td class="label">AMFI</td><td><a href="https://www.amfiindia.com/" target="_blank" rel="noopener">https://www.amfiindia.com/</a></td></tr>
							<tr><td class="label">APMI</td><td><a href="https://www.apmiindia.org/" target="_blank" rel="noopener">https://www.apmiindia.org/</a></td></tr>
						</tbody>
					</table>
					</div>

					<!-- Disclaimers & Disclosures -->
					<table class="doc-table">
						<thead>
						<tr class="section-head"><th>Disclaimers &amp; Disclosures</th></tr>
						</thead>
					</table>
					<div class="disclosure">
						<p><strong>Mutual Fund:</strong> Mutual Fund investments are subject to market risks. Read all scheme related documents carefully before investing.</p>
						<p><strong>Securities Market:</strong> Investments in securities market are subject to market risks. Read all the related documents carefully before investing.</p>
						<p><strong>PMS:</strong> PMS investments do not offer guaranteed or assured returns, and the past performance of the Portfolio Manager is not an indicator of future results. Minimum investment Rs. 50 lakh as per SEBI regulations. Read the PMS Disclosure Document carefully before investing.</p>
						<p><strong>General:</strong> All Investments are subject to market risks, and returns can be volatile and are not guaranteed.</p>
						<p><strong>Important:</strong> Konda Finserv Private Limited is an AMFI Registered Mutual Fund Distributor (ARN-277134) and APMI Registered PMS Distributor (APRN-04080). We are NOT a SEBI Registered Investment Adviser. We provide incidental advisory services only, as permitted for mutual fund distributors under SEBI regulations, free of charge.</p>
					</div>
					<div class="footer-box">
						<div class="fb-name">Konda Finserv Private Limited</div>
						<div class="fb-line">CIN: U66301TS2023PTC172408</div>
						<div class="fb-line">Flat 204, 1-1-508/1/B, Sri Balaji Indraprastha Apts, Gandhi Nagar, Bakaram, Hyderabad-500080 <br> +91-9391000958</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
  <?php include_once('src/views/layouts/footer.php') ?>
</body>
</html>
