<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>
  <link rel="stylesheet" href="<?= base_url("assets/css/gallery_modules.css") ?>">
<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Video',
    'bc_desc' => '',
    'breadcrumbs' => [
        ['name' => 'Video Gallery']
    ]
]);
?>

<!-- Main Page Content Section -->
<section class="service-details-section mt-5 pt-4 mb-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-12">
                <div class="service-main-content">



                    <!-- Videos Grid -->
                    <div class="row">
                        <?php if (!empty($videos)): ?>
                            <?php foreach ($videos as $video): ?>
                                <div class="col-md-6 mb-4">
                                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden gallery-video-card">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="<?= $video->video_url ?>" title="<?= $video->title ?>" allowfullscreen
                                                class="border-0"></iframe>
                                        </div>
                                        <div class="card-body p-3">
                                            <h5 class="fw-bold mb-1 gallery-title-sm"><?= $video->title ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="col-12 text-center text-muted">
                                <p>No videos available in the gallery.</p>
                            </div>
                        <?php endif; ?>
                    </div>



                </div>
            </div>


        </div>
    </div>
</section>