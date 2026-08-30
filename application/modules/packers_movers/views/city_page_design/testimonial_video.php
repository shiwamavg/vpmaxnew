<?php
// Get the CI instance to query the database
$CI =& get_instance();

// Normalize current city name
$city_name = isset($city) ? strtolower(trim($city)) : '';

// 1. First, try to fetch up to 10 active videos specifically for this city
$CI->db->select('*');
$CI->db->from('video_gallery');
$CI->db->where('status', 1);
$CI->db->where('LOWER(city)', $city_name);
$CI->db->order_by('auto_id', 'DESC');
$CI->db->limit(10);
$videos = $CI->db->get()->result_array();

// 2. If no videos exist for this specific city, fetch the latest 10 default videos
if (empty($videos)) {
    $CI->db->select('*');
    $CI->db->from('video_gallery');
    $CI->db->where('status', 1);
    $CI->db->order_by('auto_id', 'DESC');
    $CI->db->limit(10);
    $videos = $CI->db->get()->result_array();
}

// Only display the section if we have at least one video
if (!empty($videos)):
    ?>

    <div class="col-lg-12 vpmax-testimonial-video-section">
        <h2 class="vpmax-testimonial-video-title">
            <?= ucwords(strtolower("Moving process & testimonials " . (isset($city) && !empty($city) ? "in " . $city : ""))) ?>
        </h2>
        <p class="text-center text-muted mb-4 vpmax-testimonial-subtitle">See what our customers have to say about our moving
            services.</p>

        <div class="vpmax-video-slider-wrapper">
            <!-- Left Arrow -->
            <div class="vpmax-video-slider-btn vpmax-video-slider-btn-prev" onclick="scrollVideoSlider(-1)">
                <i class="bi bi-chevron-left" ></i>
            </div>

            <div class="vpmax-video-slider-container" id="videoSliderContainer">
                <div class="vpmax-video-slider-track" id="videoSliderTrack">
                    <?php
                    // We'll output the items, and duplicate them once for seamless infinite logic if needed, 
                    // but for a JS slider, we can just output them as is.
                    foreach ($videos as $vid):
                        ?>
                        <div class="vpmax-video-slider-item">
                            <div class="vpmax-video-wrapper">
                                <iframe src="<?= htmlspecialchars($vid['video_url']) ?>"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen loading="lazy">
                                </iframe>
                            </div>
                            <?php if (!empty($vid['city'])): ?>
                                <div class="vpmax-video-item-footer">
                                    <p class="vpmax-video-item-city">
                                        <i class="bi bi-geo-alt-fill"></i> <?= htmlspecialchars(ucfirst($vid['city'])) ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Right Arrow -->
            <div class="vpmax-video-slider-btn vpmax-video-slider-btn-next" onclick="scrollVideoSlider(1)">
                <i class="bi bi-chevron-right" ></i>
            </div>
        </div>

        <!-- View All Buttons -->
        <div class="d-flex flex-wrap justify-content-center gap-3" style="margin-top: 30px;">
            <a href="<?= site_url('video-gallery') ?>" class="btn btn-outline-danger rounded-pill px-4 vpmax-view-all-btn"
                >
                <i class="bi bi-play-circle-fill"></i> View All Videos
            </a>
            <a href="<?= site_url('photo-gallery') ?>" class="btn btn-outline-primary rounded-pill px-4 vpmax-view-all-btn"
                >
                <i class="bi bi-images"></i> View All Photos
            </a>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const container = document.getElementById("videoSliderContainer");
            let autoScrollInterval;
            let scrollAmount = 340; // Approx item width + gap

            // Function to scroll via arrows
            window.scrollVideoSlider = function (direction) {
                if (container) {
                    // Calculate max scroll
                    const maxScrollLeft = container.scrollWidth - container.clientWidth;

                    // If going right and at the end, jump to start (smooth behavior workaround)
                    if (direction === 1 && container.scrollLeft >= maxScrollLeft - 10) {
                        container.scrollTo({ left: 0, behavior: 'smooth' });
                    }
                    // If going left and at start, jump to end
                    else if (direction === -1 && container.scrollLeft <= 10) {
                        container.scrollTo({ left: maxScrollLeft, behavior: 'smooth' });
                    }
                    else {
                        container.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
                    }
                }
            };

            // Auto scrolling functionality
            function startAutoScroll() {
                autoScrollInterval = setInterval(function () {
                    if (container) {
                        const maxScrollLeft = container.scrollWidth - container.clientWidth;
                        if (container.scrollLeft >= maxScrollLeft - 10) {
                            // Reset to start smoothly
                            container.scrollTo({ left: 0, behavior: 'smooth' });
                        } else {
                            container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                        }
                    }
                }, 3000); // 3 seconds delay between scrolls
            }

            function stopAutoScroll() {
                clearInterval(autoScrollInterval);
            }

            // Start on load
            startAutoScroll();

            // Pause on hover
            const wrapper = document.querySelector('.vpmax-video-slider-wrapper');
            if (wrapper) {
                wrapper.addEventListener('mouseenter', stopAutoScroll);
                wrapper.addEventListener('mouseleave', startAutoScroll);
            }
        });
    </script>

<?php endif; ?>