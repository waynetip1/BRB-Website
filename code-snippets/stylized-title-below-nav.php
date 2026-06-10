<?php
/**
 * Board Ready Beauty — Stylized title block below navigation
 *
 * Add via: Plugins → Code Snippets → Add New → paste everything
 * between the <?php and the closing ?>, save & activate.
 *
 * Hook: generate_after_header fires after GeneratePress finishes
 * rendering the full header (logo + nav), so the block lands
 * immediately below the nav bar on every front-end page.
 *
 * NOTE: If the GeneratePress Customizer still shows the site title
 * as text (Appearance → Customize → Site Identity → Site Title),
 * set it to display as a logo image only, or add the CSS below to
 * hide the text title and avoid duplication:
 *
 *   .site-title { display: none !important; }
 */

add_action( 'generate_after_header', 'brb_stylized_title_below_nav' );
function brb_stylized_title_below_nav() {
    if ( is_admin() ) {
        return;
    }
    ?>
    <div style="
        text-align: center;
        padding: 20px 16px 8px;
        background: #ffffff;
        border-bottom: 1px solid #f0e4e8;
    ">
        <div style="
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(1.6rem, 4vw, 2.2rem);
            font-weight: 700;
            color: #c8185a;
            line-height: 1.1;
            letter-spacing: -0.01em;
        ">Board Ready Beauty</div>
        <div style="
            font-family: 'DM Sans', sans-serif;
            font-size: 0.75rem;
            font-weight: 600;
            color: #7a5560;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            margin-top: 4px;
        ">Texas PSI Written Exam Prep</div>
    </div>
    <?php
}
