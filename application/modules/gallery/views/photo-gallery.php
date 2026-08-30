<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

  <link rel="stylesheet" href="<?= base_url("assets/css/gallery_modules.css") ?>">
<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Photo',
    'bc_desc' => '',
    'breadcrumbs' => [
        ['name' => 'Photo Gallery']
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



                    <!-- Photo Gallery Grid -->
                    <div class="row">
                        <?php if (!empty($photos)): ?>
                            <?php foreach ($photos as $photo): ?>
                                <div class="col-6 col-md-4 col-lg-3 mb-4">
                                    <div class="card border-0 shadow-sm rounded-3 overflow-hidden gallery-photo-card h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#photoModal<?= $photo->auto_id ?>">
                                        <div class="gallery-img-wrapper position-relative">
                                            <img loading="lazy" src="<?= base_url('assets/uploads/gallery/' . $photo->image) ?>"
                                                class="w-100 img-fluid gallery-img" alt="<?= htmlspecialchars($photo->title) ?>" style="aspect-ratio: 4/3; object-fit: cover;">
                                            <div
                                                class="gallery-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 gallery-bg-dark-50 gallery-transition-all">
                                                <i class="bi bi-zoom-in text-white gallery-icon-lg"></i>
                                            </div>
                                        </div>
                                        <div class="card-body p-3">
                                            <?php if (!empty($photo->album_name)): ?>
                                                <span
                                                    class="badge gallery-bg-success-soft text-success mb-2 gallery-badge-sm"><?= $photo->album_name ?></span>
                                            <?php endif; ?>
                                            <h5 class="fw-bold mb-1 gallery-title-sm text-truncate" style="font-size: 14px;"><?= htmlspecialchars($photo->title) ?></h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Modal for this photo -->
                                <div class="modal fade" id="photoModal<?= $photo->auto_id ?>" tabindex="-1" aria-labelledby="photoModalLabel<?= $photo->auto_id ?>" aria-hidden="true">
                                  <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content bg-transparent border-0">
                                      <div class="modal-header border-0 pb-0 position-absolute top-0 end-0" style="z-index: 1055;">
                                        <button type="button" class="btn btn-dark rounded-circle shadow d-flex align-items-center justify-content-center border border-secondary" data-bs-dismiss="modal" aria-label="Close" style="width: 40px; height: 40px; right: -15px; top: -15px; position: relative;">
                                          <i class="bi bi-x-lg fs-5"></i>
                                        </button>
                                      </div>
                                      <div class="modal-body text-center p-0 position-relative">
                                        <img loading="lazy" src="<?= base_url('assets/uploads/gallery/' . $photo->image) ?>" class="img-fluid rounded shadow-lg" alt="<?= htmlspecialchars($photo->title) ?>" style="max-height: 85vh; object-fit: contain; background: rgba(0,0,0,0.8);">
                                        <p class="text-white mt-3 mb-0 fw-medium bg-dark bg-opacity-75 d-inline-block px-3 py-1 rounded shadow-sm"><?= htmlspecialchars($photo->title) ?></p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="col-12 text-center text-muted">
                                <p>No photos available in the gallery.</p>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>


        </div>
    </div>
</section>