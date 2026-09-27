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
    <!-- -------page header------ -->


    <section class="about_story_area p-5">
        <div class="container">
            <div class="row">
              <div class="row justify-content-center">
			<div class="col-md-10">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover text-nowrap">
				  		<thead style="background: #262a5a; color: white;">
                            <tr>
                                <th scope="col">AMC Name</th>
                                <th scope="col">PDF</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>360 ONE</td>
								<td><a href="../assets/images/amcpdf/360_one.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Abakkus Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/abakkus.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Aditya Birla Sun Life Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/aditya-birla.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Axis Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/axis.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Bajaj Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/bajaj.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Bandhan Mutual Funds </td>
								<td><a href="../assets/images/amcpdf/bandhan.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<!-- <tr>
								<td>Baroda BNP Paribas Asset Management India Private Limited</td>
								<td><a href="/img/brokerage-structure/BNP_Brokerage_Structure.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr> -->
							<tr>
								<td>Bank of India Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/bank-of-india.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Canara Robeco Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/canararobeco.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>DSP Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/dsp.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Edelweiss Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/edelweiss.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Franklin Templeton Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/franklin_templeton.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>HDFC Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/hdfc.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Helios Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/helios.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>HSBC Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/hsbc_mutual_fund.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>ICICI Prudential Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/icici_pruducial.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Invesco Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/invesco.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>ITI Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/iti_mutual.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
                            <tr>
								<td>JIo BlackRock</td>
								<td><a href="../assets/images/amcpdf/jio_blog_rock.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>JM Financial Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/jm_financial.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Kotak Mahindra Asset Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/kotak.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<!-- <tr>
								<td>LIC Mutual Fund Asset Management Limited</td>
								<td><a href="/img/brokerage-structure/LIC_Brokerage_Structure.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr> -->
							<tr>
								<td>Mahindra Manulife Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/Mahindra.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Mirae Asset  Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/miare-assert.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Motilal Oswal Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/motilal.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Nippon Life India Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/nippon.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<!-- <tr>
								<td>Old Bridge Arbitrage Fund </td>
								<td><a href="/img/brokerage-structure/Old_Bridge_Arbitrage_Fund.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Old Bridge Flexi Cap Fund</td>
								<td><a href="/img/brokerage-structure/Old_Bridge_Flexi_Cap_Fund.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Old Bridge Focused Fund</td>
								<td><a href="/img/brokerage-structure/Old_Bridge_Focused_Fund.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr> -->
							<tr>
								<td>PGIM India Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/PGIM.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
						<tr>
								<td>PPFAS Mutual Fund</td>
								<td><a href="../assets/images/amcpdf/PPFAS_Brokerage_Structure.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr> 
							<tr>
								<td>Quant Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/quant_mutual.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>SBI Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/sbi_mutualfund.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Samco Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/samco.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
                            <tr>
								<td>Sundaram Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/sundaram_mutualfund.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Tata Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/tata_mutual.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
                            <tr>
								<td>Trust Mutual Fund</td>
								<td><a href="../assets/images/amcpdf/trust_mutualfund.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>Union Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/union_mutualfund.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
                            <tr>
								<td>UTI Mutual Funds</td>
								<td><a href="../assets/images/amcpdf/uti_mutualfund.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
							<tr>
								<td>WhiteOak Capital</td>
								<td><a href="../assets/images/amcpdf/whiteoak.pdf" target="_blank">Click here to Download PDF</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
         </div>
        </div>
    </section>

    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>