<?php include 'city_content.php' ?>
<div class="container">
    <div class="row">
        
        <div class="col-lg-12 mt-2">
            <?php echo $htmlcontent ?>
        </div>
        <div class="col-lg-12 pt-2 pb-2">
            <img loading="lazy" src="<?= base_url() ?>assets/images/city_page/vp_max_team_and_truck.webp"
                alt="VP Max team and Truck" class="w-100" loading="lazy">
        </div>

    </div>

</div>

<?php
include 'company_details.php';
include 'city_map.php';
$this->load->view('template/important_link');
//$this->load->view('reviews/review_widget');
$this->load->view('home/credentials');
$this->load->view('home/certificate');
//$this->load->view('home/working_process');
$this->load->view('home/chart_table');
$states_28 = [
    'andhra-pradesh',
    'arunachal-pradesh',
    'assam',
    'bihar',
    'chhattisgarh',
    'goa',
    'gujarat',
    'haryana',
    'himachal-pradesh',
    'jharkhand',
    'karnataka',
    'kerala',
    'madhya-pradesh',
    'maharashtra',
    'manipur',
    'meghalaya',
    'mizoram',
    'nagaland',
    'odisha',
    'punjab',
    'rajasthan',
    'sikkim',
    'tamil-nadu',
    'telangana',
    'tripura',
    'uttar-pradesh',
    'bhopal',
    'raipur',
    'uttarakhand',
    'west-bengal'
];
if (in_array($st, $states_28)) {
    include 'city_service.php';
}
?>
<?php 
// indore removed from this local array by shiwam
if ( strtolower($city) == "ujjain" || strtolower($city) == "dewas" || strtolower($city) == "sagar" || strtolower($city) == "jabalpur" || strtolower($city) == "pune" || strtolower($city) == "nagpur" || strtolower($city) == "wardha") {
    include 'localcities.php';
} ?>
<?php if (strtolower($city) == 'indore' || strtolower($city) == 'bhopal') { ?>
    <div>
        <?php include 'city_from_to_links.php'; ?>
    </div>
<?php } ?>
<div class="container">
    <div class="row">
        <?php include 'testimonial_video.php' ?>
        <div class="col-lg-12 mt-2">
            <?php echo $htmlcontent1 ?>
        </div>
        <div class="col-lg-12 mt-2">
            <?php echo $htmlcontent2 ?>
        </div>
<?php if(@$htmlcontent3): ?>
   <div class="container mt-4">
    <div class="row align-items-center g-4">
        <div class="col-lg-6 col-md-6">
            <div class="video-wrapper">
                <iframe
                    src="https://www.youtube.com/embed/G6D60xzSkKM?rel=0"
                    title="Looking for Trusted Packers and Movers in Indore"
                    width="1080"
                    height="1920"
                    loading="lazy"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <?php echo $htmlcontent3; ?>
        </div>
    </div>
</div>
<style>
.video-wrapper{position:relative;width:100%;max-width:500px;height:520px;margin:0 auto;overflow:hidden;border-radius:12px}.video-wrapper iframe{width:100%;height:100%;border:0}@media (max-width:991px){.video-wrapper{max-width:450px;height:500px}}@media (max-width:575px){.video-wrapper{max-width:100%;height:480px}}
</style>
<?php endif; ?>
        <?php if(@$htmlcontent4): ?>
        <div class="col-lg-12 mt-4">
            <?php echo $htmlcontent4 ?>
        </div>
        <?php endif; ?>
        <?php if(@$htmlcontent5): ?>
        <div class="col-lg-12 mt-2">
            <?php echo $htmlcontent5 ?>
        </div>
        <?php endif; ?>
        <?php if(@$htmlcontent6): ?>
        <div class="col-lg-12 mt-2">
            <?php echo $htmlcontent6 ?>
        </div>
        <?php endif; ?>
    </div>

</div>