<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $title ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  if (!@$description) {
    $description = "$company3 India offers reliable and efficient moving and storage solutions, ensuring your belongings are transported safely and securely to your new destination.";
  }
  if (!@$city)
    $city = "$addressRegion";
  if (!@$state)
    $state = "$companystate";
  if (!@$img)
    $img = base_url('') . "assets/images/logo/favicon.webp";
  $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $url = ($url == site_url('home')) ? site_url() : strtolower($url);
  ?>
  <meta name="description" content="<?= @$description ?>"/>
  <link rel="canonical" href="<?= @$url ?>"/>
  <meta property="og:title" content="<?= @$title ?>">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?= $company3 ?>"/>
  <meta property="og:image" content="<?= $img ?>"/>
  <meta property="og:url" content="<?= @$url ?>"/>
  <meta property="og:description" content="<?= @$description ?>"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:title" content="<?= @$title ?>"/>
  <meta name="twitter:description" content="<?= @$description ?>"/>
  <meta name="twitter:image" content="<?= $img ?>"/>
  <meta name="twitter:domain" content="<?= $url ?>"/>
  <meta name="robots" content="index, follow"/>
  <meta property="al:web:url" content="<?= $url ?>">
  <meta name="theme-color" content="<?= $themeColor ?>">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="<?= $themeColor ?>">
  <?php $stateCodes = ['Andhra Pradesh' => 'AP', 'Arunachal Pradesh' => 'AR', 'Assam' => 'AS', 'Bihar' => 'BR', 'Chhattisgarh' => 'CG', 'Goa' => 'GA', 'Gujarat' => 'GJ', 'Haryana' => 'HR', 'Himachal Pradesh' => 'HP', 'Jharkhand' => 'JH', 'Karnataka' => 'KA', 'Kerala' => 'KL', 'Madhya Pradesh' => 'MP', 'Maharashtra' => 'MH', 'Manipur' => 'MN', 'Meghalaya' => 'ML', 'Mizoram' => 'MZ', 'Nagaland' => 'NL', 'Odisha' => 'OR', 'Punjab' => 'PB', 'Rajasthan' => 'RJ', 'Sikkim' => 'SK', 'Tamil Nadu' => 'TN', 'Telangana' => 'TG', 'Tripura' => 'TR', 'Uttar Pradesh' => 'UP', 'Uttarakhand' => 'UK', 'West Bengal' => 'WB', 'Delhi' => 'DL', 'Jammu and Kashmir' => 'JK', 'Ladakh' => 'LA', 'Puducherry' => 'PY', 'Chandigarh' => 'CH', 'Andaman and Nicobar Islands' => 'AN', 'Lakshadweep' => 'LD', 'Dadra and Nagar Haveli and Daman and Diu' => 'DN',];
  $stateName = "$state";
  $stateShortCode = $stateCodes[$stateName] ?? $companystate;
  ?>
  <meta name="geo.region" content="IN-<?= $stateShortCode ?>">
  <meta name="geo.placename" content="<?= @$city ?>">
  <link rel="apple-touch-icon" href="<?= base_url('assets/images/logo/favicon.webp') ?>">
  <link rel="shortcut icon" href="<?= base_url('assets/images/logo/favicon.webp') ?>">

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "<?= $company3 ?>",
      "url": "https://vpmaxpackersandmovers.com/",
      "logo": "https://vpmaxpackersandmovers.com/assets/images/logo/logo.webp"
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": ["LocalBusiness", "MovingCompany"],
      "name": "<?= $company3 ?>",
      "url": "<?= $url ?>",
      "image": ["<?= $img ?>"],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?= $address1 ?> ",
        "addressLocality": "<?= $city?>",
        "postalCode": "<?= $postalCode ?>",
        "addressRegion": "<?= $state ?>",
        "addressCountry": "IN"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "<?= $ratingValue ?>",
        "ratingCount": "<?= $ratingCount ?>",
        "bestRating": "5",
        "worstRating": "1"
      },
      "review": [{
        "@type": "Review",
        "datePublished": "<?= $datePublished ?>",
        "reviewBody": "<?= $reviewBody ?>",
        "author": {
          "@type": "Person",
          "name": "<?= $reviewperson ?>"
        }
      }],
      "paymentAccepted": ["Cash", "UPI", "Master Card", "Visa Card", "Debit Cards", "Cheques", "Credit Card"],
      "priceRange": "3500 - 150000",
      "telephone": "<?= $phone ?>",
      "email": "<?= $mail ?>"
    }
  </script>
  <script type="application/ld+json">
    {
  "@context" : "https://schema.org",
  "@type" : "Product",
  "sku":"VPMAX4999",
  "mpn": "VPMAXM4999",
  "name" : "Packers and Movers Services in <?=$city?>",
  "image" : "<?=$img?>",
  "description" : "<?=$description?>",
  "url" : "https://vpmaxpackersandmovers.com/",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "<?= $ratingValue ?>",
    "ratingCount": "<?= $ratingCount ?>"
  },
  "review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "<?= $ratingValue ?>",
          "bestRating": "5"
        },
        "author": {
          "@type": "Person",
          "name": "<?= $reviewperson ?>"
        }
    },
  "offers": {
    "@type": "Offer",
  "price": "4999",
  "priceRange": "3500 - 150000",
  "priceCurrency": "INR",
  "priceValidUntil":"<?=date("Y-m-30")?>",
  "availability": "https://schema.org/InStock",
  "url": "https://vpmaxpackersandmovers.com/"
  },
  "brand" : {
    "@type" : "Brand",
    "name" : "VP Max Packers and Movers",
    "image" : "<?=$img?>"  }
}
  </script>
  <link rel="stylesheet" href="<?= base_url("assets/css/style.css?v=2.3") ?>">
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17596273791">
  </script>
  <script>
    window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments) } gtag("js", new Date), gtag("config", "AW-17596273791"); function gtag_report_conversion(n) { return gtag("event", "conversion", { send_to: "AW-17596273791/cTQrCIS-tNQbEP-ox8ZB", value: 1, currency: "INR", event_callback: function () { void 0 !== n && (window.location = n) } }), !1 }
  </script>
  <script> 
    function gtag_report_conversion(url) {
      var callback = function () {
        if (typeof (url) != 'undefined') {
          window.location = url;
        }
      };
      gtag('event', 'conversion', {
        'send_to': 'AW-17596273791/cTQrCIS-tNQbEP-ox8ZB',
        'value': 1.0,
        'currency': 'INR',
        'event_callback': callback
      });
      return false;
    }
  </script>
  <script src="<?= base_url('assets/js/jquery-3.7.1.min.js') ?>"></script>
</head>