<!DOCTYPE html>
<html lang="reactjs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?= $favIcon ?>" rel="shortcut icon" type="image/png">

	<title><?= $title ?></title>
</head>

<body>

	<?php include_once('src/components/preLoader.php') ?>
	<?php include_once('src/views/layouts/navbar.php') ?>

	<!-- -------page header------ -->
	<?php require_once('src/components/pageHeader.php'); ?>
	<!-- -------page header------ -->


	<!-- -------health-insurance service ------ -->

	<!-- -------health-insurance service ------ -->
	<section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 blog-pull-right">
            <div class="single-service">
              <div class="card-body p-4 p-lg-5">
                  <p class="text-justify">A Demat account is not the same as a Trading Account. The fundamental difference between the two is that while a Demat Account is like a repository that allows you to hold your shares in a digital format, the Trading Account allows you to do trading in the shares of a listed company on the stock Exchange. </p>
                  <p class="text-justify">To do trading in the stock exchange there are two parts.</p>
                  <ul>
                  	<li class="mb-10"><i class="fa text-theme-colored2 fa-check-circle mr-10" aria-hidden="true"></i><p class="text-justify">The first is to buy a new share or sell the shares you own. There is no need for you to be present physically at the stock exchange to buy or sell a share. It is done online through the Trading account. The Trading account is linked to your bank account and can disburse money for paying the cost of the shares or even receive money in case of booking profits or sale of shares.</li>
                  	<li class="mb-10"><i class="fa text-theme-colored2 fa-check-circle mr-10" aria-hidden="true"></i><p class="text-justify">The second is to hold the shares you have bought in the digital form. The Demat account is your repository for holding the digital version of the shares. Therefore, the need to hold physical share certificates is eliminated as all your shares are stored in the digitalised version on your individual Demat Account.</li>
                  </ul>
                  <h4>Is it possible to have a Demat Account without a Trading account and vice versa?</h4>
                  <ul>
                  	<li class="mb-10"><i class="fa text-theme-colored2 fa-check-circle mr-10" aria-hidden="true"></i><p class="text-justify">You will need a Demat Account as well as a Trading account if you want to buy and sell stocks.</li>
                  	<li class="mb-10"><i class="fa text-theme-colored2 fa-check-circle mr-10" aria-hidden="true"></i><p class="text-justify">However, if you are only dealing in IPOs then you will not need to open a Trading Account.</li>
                  	<li class="mb-10"><i class="fa text-theme-colored2 fa-check-circle mr-10" aria-hidden="true"></i><p class="text-justify">In case you are only dealing in Futures and Options then you do not need to have a Demat Account as there is no need to take delivery of shares in this type of a deal.</li>
                  </ul>
                  <h4>What are the charges for opening a Demat Account and Trading account?</h4>
                  <p class="text-justify">Since there are various services associated with maintaining your Demat and Trading Account, there are several charges that may be levied on your accounts.</p>
                  <ol style="margin-left:10px;" >
                  	<li class="mb-10"><b> Demat AMC: </b> <p class="text-justify">This is the Demat annual maintenance charge that is a recurring charge that is levied for the maintenance of your demat account.</li>
                  	<li class="mb-10"><b> Off market transfer charges:</b><p class="text-justify"> If you want to transfer your share to someone else then the charge for such transfer without involving the share market is known as the off market charge. This is essentially the charge for the transfer of shares from one Demat Account to another.</li>
                  	<li class="mb-10"><b> Demat and Trading account opening charges: </b> <p class="text-justify">When you open a Demat account or/and a trading account, a one time fee is charged , and this is called the opening charge. Some brokers waive off the opening charge and charge only the Demat AMC.</li>
                  	<li class="mb-10"><b> Brokerage charge: </b><p class="text-justify"> The charges that your broker levies for his services is called the brokerage. Some brokers charge a percentage of the transaction value and others charge a flat fee per transaction irrespective of the amount of transaction. </li>
                  </ol>
			</div>                  
           </div>
          </div>
		   <div class="col-lg-12 text-center">
				<a href="https://ekyc.motilaloswal.com/partner/?kzZWSRubKJveEvdPSlKyT2Wu8sMrWJCBeLW7vgOPP/MvViI3pMgXNVgrTzdoiAUze7oBtDeL9YKnz0pYpJgKGV3DL9VscMdYlH2OHL+PgDswset0PSQSD7EdXVqKEVhOU+03ITGvMwfaDhN+qic7Rtjpvwx7RudFgNS7GBOwAIQ=" class="me-2"><button type="button" class="px-4 px-sm-3 demat-btn animated fadeInDown mb-5">Opening Demat Account</button></a>
		  </div>
         </div>
      </div>
    </section>
	<?php require_once('src/views/layouts/callus.php'); ?>



	<?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>