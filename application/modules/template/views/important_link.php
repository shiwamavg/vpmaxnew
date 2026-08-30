<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<div class="important-links-bar border-bottom">
    <div class="container">
        <ul
            class="list-unstyled d-flex flex-wrap justify-content-lg-between justify-content-center gap-3 gap-lg-0 align-items-center mb-0 py-3 important-links-list">
            <li>
                <a href="<?= site_url('reviews') ?>" class="important-link-item">
                    <i class="bi bi-send me-2"></i> Post Feedback
                </a>
            </li>
            <li>
                <a href="<?= site_url('photo-gallery') ?>" class="important-link-item">
                    <i class="bi bi-image me-2"></i> Photo Gallery
                </a>
            </li>
            <li>
                <a href="<?= site_url('award-gallery') ?>" class="important-link-item">
                    <i class="bi bi-trophy me-2"></i> Award Gallery
                </a>
            </li>
            <li>
                <a href="<?= site_url('certificates') ?>" class="important-link-item">
                    <i class="bi bi-award me-2"></i> Certificate
                </a>
            </li>
            <li>
                <a href="<?= site_url('faqs') ?>" class="important-link-item">
                    <i class="bi bi-question-circle me-2"></i> FAQ's
                </a>
            </li>
            <li>
                <a href="<?= site_url('testimonials') ?>" class="important-link-item">
                    <i class="bi bi-file-earmark-text me-2"></i> Testimonials
                </a>
            </li>
            <li>
                <a href="<?= site_url('contact-us') ?>" class="important-link-item">
                    <i class="bi bi-headset me-2"></i> Customer Care
                </a>
            </li>
        </ul>
    </div>
</div>