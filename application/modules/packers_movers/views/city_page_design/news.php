<?php
$news_publications = array(
    array('name' => 'Dailyhunt', 'image' => 'dailyhunt.webp', 'url' => 'https://m.dailyhunt.in/news/india/english/r+news+india-epaper-dhfacc36dfce9c4bb68db0e89d033c921b/vp+max+packers+and+movers+is+building+a+more+reliable+relocation+experience+across+india-newsid-dhfacc36dfce9c4bb68db0e89d033c921b_c0fa82808bf411f1abaffb2e0db7a505?sm=Y'),

    array('name' => 'Wow Entrepreneurs', 'image' => 'wow-entrepreneurs.webp', 'url' => 'https://wowentrepreneurs.com/vp-max-packers-and-movers-is-building-a-more-reliable-relocation-experience-across-india/'),

    array('name' => 'RD Times Business', 'image' => 'rd-times-business.webp', 'url' => 'https://biz.rdtimes.in/vp-max-packers-and-movers-is-building-a-more-reliable-relocation-experience-across-india/'),

    array('name' => 'Indian Scoops Business', 'image' => 'indian-scoops-business.webp', 'url' => 'https://business.indianscoops.com/vp-max-packers-and-movers-is-building-a-more-reliable-relocation-experience-across-india/'),

    array('name' => 'Entrepreneur Saga', 'image' => 'entrepreneur-saga.webp', 'url' => 'https://entrepreneursaga.com/vp-max-packers-and-movers-is-building-a-more-reliable-relocation-experience-across-india/'),

    array('name' => 'Deccan Business', 'image' => 'deccan-business.webp', 'url' => 'https://deccanbusiness.com/vp-max-packers-and-movers-is-building-a-more-reliable-relocation-experience-across-india/'),

    array('name' => 'The Indian Bulletin', 'image' => 'cropped-the-indian-bulletin-business.webp', 'url' => 'https://biz.theindianbulletin.com/vp-max-packers-and-movers-is-building-a-more-reliable-relocation-experience-across-india/'),

    array('name' => 'Featured publication', 'image' => 'cropped-small.webp', 'url' => 'https://business.newshead.in/vp-max-packers-and-movers-is-building-a-more-reliable-relocation-experience-across-india/'),

    array('name' => 'Republic News India', 'image' => 'cropped-republic-news-india-business.webp', 'url' => 'https://business.republicnewsindia.com/vp-max-packers-and-movers-is-building-a-more-reliable-relocation-experience-across-india/'),

    array('name' => 'Business Reporter', 'image' => 'business-reporter.webp', 'url' => 'https://businessreporter.in/vp-max-packers-and-movers-is-building-a-more-reliable-relocation-experience-across-india/'),

    array('name' => 'Money Mania', 'image' => '1moneymania.webp', 'url' => 'https://1moneymania.in/vp-max-packers-and-movers-is-building-a-more-reliable-relocation-experience-across-india/')
);
?>

<section class="news-publications py-5 bg-white" aria-labelledby="news-publications-title">
    <style>
        .news-publications {
            overflow: hidden;
        }

        .news-publications-track-window {
            overflow: hidden;
            padding: .5rem 0 1rem;
        }

        .news-publications-track {
            display: flex;
            width: max-content;
            animation: news-publications-scroll 32s linear infinite;
        }

        .news-publications-track-window:hover .news-publications-track,
        .news-publications-track-window:focus-within .news-publications-track {
            animation-play-state: paused;
        }

        .news-publications-group {
            display: flex;
            flex-shrink: 0;
            gap: 1rem;
            padding-right: 1rem;
        }

        .news-publication {
            align-items: center;
            background: #fff;
            border: 1px solid #e9ecef;
            border-radius: .75rem;
            box-shadow: 0 .25rem .75rem rgba(33, 37, 41, .06);
            display: flex;
            height: 7rem;
            justify-content: center;
            padding: 1rem;
            transition: border-color .2s ease, box-shadow .2s ease, transform .2s ease;
            width: clamp(9.5rem, 17vw, 12.5rem);
        }

        .news-publication:hover,
        .news-publication:focus-visible {
            border-color: #dc3545;
            box-shadow: 0 .5rem 1rem rgba(33, 37, 41, .12);
            transform: translateY(-2px);
        }

        .news-publication img {
            max-height: 4.5rem;
            object-fit: contain;
            width: 100%;
        }

        @keyframes news-publications-scroll {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-50%);
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .news-publications-track {
                animation: none;
                flex-wrap: wrap;
                justify-content: center;
                width: 100%;
            }

            .news-publications-group:last-child {
                display: none;
            }
        }
    </style>

    <div class="container">
        <h2 id="news-publications-title" class="fw-semibold text-center h3 mb-2">
            News Stream <span class="text-primary">LINK REPORT</span>
        </h2>
        <h3 class="text-center mb-4">VP Max Packers and Movers Is Building a More Reliable Relocation Experience Across India </h3>

        <div class="news-publications-track-window" tabindex="0" aria-label="Featured publications">
            <div class="news-publications-track">
                <?php for ($copy = 0; $copy < 2; $copy++): ?>
                    <div class="news-publications-group" aria-hidden="<?= $copy === 1 ? 'true' : 'false' ?>">
                        <?php foreach ($news_publications as $publication): ?>
                            <a class="news-publication"
                                href="<?= htmlspecialchars($publication['url'], ENT_QUOTES, 'UTF-8') ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="Read <?= htmlspecialchars($publication['name'], ENT_QUOTES, 'UTF-8') ?>"
                                title="Read <?= htmlspecialchars($publication['name'], ENT_QUOTES, 'UTF-8') ?>">
                                <img src="<?= base_url('assets/images/news/' . $publication['image']) ?>"
                                    class="img-fluid"
                                    alt="<?= htmlspecialchars($publication['name'], ENT_QUOTES, 'UTF-8') ?>"
                                    title="<?= htmlspecialchars($publication['name'], ENT_QUOTES, 'UTF-8') ?>"
                                    loading="lazy">
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
