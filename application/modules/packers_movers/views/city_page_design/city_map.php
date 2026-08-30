<?php
$lat = '';
$lon = '';
$state_code = '';
$city_found = false;

if (!empty($cities)) {
    foreach ($cities as $ct) {
        if (@$ct['nm'] == $city) {
            $lat = $ct['lat'];
            $lon = $ct['lon'];
            $state_code = $ct['sc'];
            $city_found = true;
            break;
        }
    }
}

// Fallback for modules like city_services that don't preload $cities
if (!$city_found) {
    $data_files = glob(__DIR__ . '/../data/*.php');
    if ($data_files) {
        foreach ($data_files as $file) {
            $base = basename($file);
            if ($base == 'cities.php' || $base == 'states.php')
                continue;

            // Isolate include to prevent variable bleeding
            $get_cities = function ($f) {
                include $f;
                return isset($cities) ? $cities : [];
            };

            $temp_cities = $get_cities($file);
            foreach ($temp_cities as $ct) {
                if (isset($ct['nm']) && strcasecmp($ct['nm'], $city) == 0) {
                    $lat = $ct['lat'];
                    $lon = $ct['lon'];
                    $state_code = $ct['sc'];
                    $city_found = true;
                    break 2;
                }
            }
        }
    }
}
?>


<div class="container pt-3 pb-3">
    <div class="row">
        <div class="col-lg-7">
            <?php if (strtolower($city) == 'sagar') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3045.8451776481097!2d78.74248247439472!3d23.843046485215023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3978d7b5dd7698e7%3A0x66d2480c533b6327!2sVP%20Max%20Packers%20and%20Movers!5e1!3m2!1sen!2sin!4v1763619722925!5m2!1sen!2sin"
                    width="100%" title="Gogle map VP Max Packers and Movers Sagar" height="500" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'manesar') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1755.4273263520627!2d76.94650594442749!3d28.363243600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d3dfd15176e61%3A0xf66d382f2733820!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1763620768339!5m2!1sen!2sin"
                    width="100%" height="500" title="Gogle map VP Max Packers and Movers Manesar" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'rewari') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.522271005725!2d76.61604297455497!3d28.191440803976075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d51de914f4025%3A0x8c3346e63b2663af!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1763620946084!5m2!1sen!2sin"
                    width="100%" height="500" title="Gogle map VP Max Packers and Movers Rewari" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'damoh') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.5027868651855!2d79.4396335!3d23.8362736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3982016ece27be17%3A0xe0855ba47e51912b!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1765782845794!5m2!1sen!2sin"
                    width="100%" height="500" title="Gogle map VP Max Packers and Movers Damoh" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'bahadurgarh') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.071460734646!2d76.93200567457505!3d28.68750888158373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d09fda660723d%3A0x510500aab2e52427!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1763621797406!5m2!1sen!2sin"
                    width="100%" height="500" title="Gogle map VP Max Packers and Movers Bahadurgarh" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'indore') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.563113445263!2d75.8887211!3d22.781589199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396303c6274d888b%3A0x16c0c9598b0ea87b!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1765781767403!5m2!1sen!2sin"
                    width="100%" height="500" title="Gogle map VP Max Packers and Movers Indore" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'bhopal') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.8009811439756!2d77.5103608!3d23.250328199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c41dabacdf265%3A0x4e6931ea15f6e101!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1783595015280!5m2!1sen!2sin"
                    width="100%" height="500" title="Gogle map VP Max Packers and Movers Bhopal" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'jabalpur') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1833.7359488555774!2d79.90638617309787!3d23.189467017214156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3981b1a9f8f0ef63%3A0x535c7bcce3ea342f!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1768206704194!5m2!1sen!2sin"
                    width="100%" height="500" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'katni') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.8126575171887!2d80.3967944!3d23.82526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398161c4ddfc0861%3A0x1f259d5582feea11!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1765783098545!5m2!1sen!2sin"
                    width="100%" height="500" title="Gogle map VP Max Packers and Movers Katni" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($state) == 'madhya pradesh' && strtolower($city) == 'chhatarpur') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3617.5267558824394!2d79.672427!3d24.948186799999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3982bf8f30aca249%3A0x7881be833cdb149e!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1765783362944!5m2!1sen!2sin"
                    width="100%" height="500" title="Gogle map VP Max Packers and Movers Chhatarpur Madhya Pradesh"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'gwalior') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.9407688767315!2d78.19897069999999!3d26.198605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c5aa696f8a45%3A0xd9b78c050becbdda!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1765787004785!5m2!1sen!2sin"
                    width="100%" height="500" title="Gogle map VP Max Packers and Movers Gwalior" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'bina') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.6917911573655!2d78.201714!3d24.182539600000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39796ff192c76a01%3A0xfef959bd93216b69!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1765788964204!5m2!1sen!2sin"
                    width="100%" height="500" title="Gogle map VP Max Packers and Movers Bina" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'tikamgarh') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.5397489635734!2d78.833326!3d24.742676499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39784fcb9edc323b%3A0x6dae47387cb4b22!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1765789044296!5m2!1sen!2sin"
                    width="100%" height="500" title="Gogle map VP Max Packers and Movers Tikamgarh" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'gurugram') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.0631262700354!2d77.034089!3d28.477645499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19cc56ae0bc9%3A0x75b18773cfc66555!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1786342884994!5m2!1sen!2sin"
                    width="100%" height="500" title="Gogle map VP Max Packers and Movers Gurugram" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'sector 53') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2493.53446719355!2d77.09861507695811!3d28.4462390498712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1901dd6441af%3A0xa1fa2560a375c9de!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1765789977099!5m2!1sen!2sin"
                    width="100%" height="500" title="Gogle map VP Max Packers and Movers Sector 53" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($state) == 'delhi' && strtolower($city) == 'chhatarpur') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.3070063902255!2d77.1856549!3d28.500409599999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1f608fdcb6f9%3A0xe06ef73f0733ec42!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1765790935548!5m2!1sen!2sin"
                    width="100%" height="500" title="Gogle map VP Max Packers and Movers Chhatarpur Delhi"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'pune') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60523.809334931466!2d73.85288076508179!3d18.540734410029827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1b70d99303f%3A0x1c54477662e96f49!2sVP%20Max%20Packers%20and%20Movers!5e0!3m2!1sen!2sin!4v1767961505836!5m2!1sen!2sin"
                    width="100%" height="500" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'palwal') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3517.9579031455823!2d77.3264308!3d28.147769699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cd3cb6e35845b%3A0x94aef913b16a1d96!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1783935654869!5m2!1sen!2sin"
                    width="100%" height="500" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'shahdol') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3664.4250648852435!2d81.3565674!3d23.3003316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3986fb50905b568d%3A0xc8773cecb6e60d4b!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1784020545192!5m2!1sen!2sin"
                    width="100%" height="500" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'dewas') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.650336611864!2d76.06079110000002!3d22.9631012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3963176d6f7bcf4d%3A0xab78eef91ebbd46d!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1784023527834!5m2!1sen!2sin"
                    width="100%" height="500" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'ghaziabad') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.518670710392!2d77.4235635!3d28.614213200000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef4b2caa1fe7%3A0x8687b7340773808!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1784023684487!5m2!1sen!2sin"
                    width="100%" height="500" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'ujjain') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3668.146253870244!2d75.7938305!3d23.1648616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396375220047abb5%3A0xf3abcd7466c06e8d!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1784024041194!5m2!1sen!2sin"
                    width="100%" height="500" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'neemuch') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3631.371723781849!2d74.8731384!3d24.472573999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396673640e9414ad%3A0x4c224480e90eba6e!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1784023062981!5m2!1sen!2sin"
                    width="100%" height="500" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'sohna') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3514.5244018403337!2d77.0666571!3d28.252111699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d25855b5939e5%3A0x7e0c7d2c06f16689!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1784024595374!5m2!1sen!2sin"
                    width="100%" height="500" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'satna') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3628.524275740701!2d80.8168106!3d24.5710965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39847f2879dbec47%3A0xb2e200a5ec489b16!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1784024972615!5m2!1sen!2sin"
                    width="100%" height="500" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'narmadapuram') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.640537241092!2d77.7297358!3d22.741598399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397dcff141156d23%3A0x8d73dbc63a50ee48!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1784025376545!5m2!1sen!2sin"
                    width="100%" height="500" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } elseif (strtolower($city) == 'sehore') { ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.1875966186403!2d77.0817108!3d23.199832999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397cf3aebc63c8c1%3A0xb035bf7b02b6a12!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1784115270438!5m2!1sen!2sin"
                    width="100%" height="500" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php } else { ?>
                <iframe src="https://maps.google.com/maps?q=<?= $lat ?>,<?= $lon ?>&z=15&output=embed" width="100%"
                    height="400" allowfullscreen="" loading="lazy" frameborder="0"
                    title="Map of <?= htmlspecialchars($company) ?>" aria-label="Map of <?= htmlspecialchars($city) ?>"
                    class="rounded shadow-sm w-100"></iframe>
            <?php } ?>
        </div>
        <div class="col-lg-5">
            <?php
            // $related_branch = null;
            // $search_city = strtolower(trim($city));
            // foreach ($branches as $b) {
            //     if (strpos(strtolower($b['city']), $search_city) !== false) {
            //         $related_branch = $b;
            //         break;
            //     }
            // }

            if ($related_branch) { ?>
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 bg-white">
                    <div class="card-body p-3 p-lg-4 d-flex flex-column">
                        <?php if ($state) {
                            $state_img = strtolower(str_replace(" ", "-", $state)) . ".webp";
                            $img_src = file_exists(FCPATH . "assets/images/state/" . $state_img) ? base_url("assets/images/state/" . $state_img) : base_url("assets/images/about/vp_max_truck.webp");
                            ?>
                            <div class="mt-auto mb-2">
                                <img loading="lazy" src="<?= $img_src ?>" class="img-fluid w-100 pm-branch-state-img"
                                    alt="<?= $state ?>">
                            </div>
                        <?php } else { ?>
                            <img loading="lazy" src="<?= base_url() ?>assets/images/about/vp_max_truck.webp"
                                class="img-fluid w-100 rounded-3 border mb-2" alt="<?= $city ?> packing and Moving ">
                        <?php } ?>
                        <span class="h5 fw-bold text-primary mb-3 d-flex align-items-center">
                            <i class="bi bi-geo-alt-fill fs-4 me-2 text-primary"></i>
                            <?= $related_branch['city'] ?>
                        </span>

                        <div class="mb-2 d-flex align-items-start">
                            <i class="bi bi-person-badge text-muted fs-6 me-2 mt-1"></i>
                            <div>
                                <span class="d-block fw-bold text-dark mb-0 fs-6">Contact Person</span>
                                <span
                                    class="text-muted small"><?= $related_branch['contact_person'] ?: 'Support Team' ?></span>
                            </div>
                        </div>

                        <div class="mb-3 d-flex align-items-start">
                            <i class="bi bi-building text-muted fs-6 me-2 mt-1"></i>
                            <div>
                                <span class="d-block fw-bold text-dark mb-0 fs-6"><?=$city?> Office Address</span>
                                <span class="text-muted small lh-sm"><?= $related_branch['address'] ?></span>
                            </div>
                        </div>

                        <div class="mb-3 d-flex align-items-center bg-light p-2 px-3 rounded-3">
                            <i class="bi bi-telephone-fill text-primary fs-5 me-2"></i>
                            <a href="tel:<?= $related_branch['phone'] ?>"
                                class="text-dark fw-bold fs-5 text-decoration-none hover-primary transition">
                                <?= $related_branch['phone'] ?>
                            </a>
                        </div>

                        <div class="d-flex flex-wrap flex-sm-nowrap gap-2 mb-2 mt-auto">
                            <a href="tel:<?= $related_branch['phone'] ?>"
                                class="btn btn-primary flex-grow-1 py-2 fw-bold shadow-sm rounded-pill d-flex justify-content-center align-items-center small">
                                <i class="bi bi-telephone-fill me-2"></i> Call Now
                            </a>
                            <a href="https://wa.me/<?= $related_branch['phone'] ?>"
                                class="btn btn-success flex-grow-1 py-2 fw-bold shadow-sm rounded-pill d-flex justify-content-center align-items-center small pm-btn-whatsapp-solid"
                                target="_blank">
                                <i class="bi bi-whatsapp me-2"></i> WhatsApp
                            </a>
                        </div>
                    </div>

                </div>
            <?php } else { ?>
                <div class="card border-0 shadow-sm rounded-4 bg-white p-3 d-flex flex-column gap-3">

                    <?php if ($state) {
                        $state_img = strtolower(str_replace(" ", "-", $state)) . ".webp";
                        $img_src = file_exists(FCPATH . "assets/images/state/" . $state_img) ? base_url("assets/images/state/" . $state_img) : base_url("assets/images/about/vp_max_truck.webp");
                        ?>
                        <span class="fw-bold text-primary mb-2 d-flex align-items-center">
                            <i class="bi bi-geo-alt-fill fs-4 me-2"></i>
                            <?= $city ?>, <?= $state ?>
                        </span>
                        <img loading="lazy" src="<?= $img_src ?>" class="img-fluid w-100 rounded-3 border" alt="<?= $state ?>">
                    <?php } else { ?>
                        <h5 class="fw-bold text-primary mb-2 d-flex align-items-center">
                            <i class="bi bi-geo-alt-fill fs-4 me-2"></i>
                            <?= $city ?>
                        </h5>
                        <img loading="lazy" src="<?= base_url() ?>assets/images/about/vp_max_truck.webp"
                            class="img-fluid w-100 rounded-3 border" alt="<?= $city ?> packing and Moving ">
                    <?php } ?>
                    <div class="d-flex flex-wrap flex-sm-nowrap gap-2">
                        <a href="tel:<?= $phone ?>"
                            class="btn btn-primary flex-grow-1 py-2 fw-bold shadow-sm rounded-pill d-flex justify-content-center align-items-center small">
                            <i class="bi bi-telephone-fill me-2"></i> Call Now
                        </a>
                        <a href="https://wa.me/<?= $phone ?>"
                            class="btn btn-success flex-grow-1 py-2 fw-bold shadow-sm rounded-pill d-flex justify-content-center align-items-center small pm-btn-whatsapp-solid"
                            target="_blank">
                            <i class="bi bi-whatsapp me-2"></i> WhatsApp
                        </a>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</div>